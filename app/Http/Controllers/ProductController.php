<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Jobs\SendProductCreatedNotification;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|min:10',
            'article' => 'required|unique:products,article',
        ]);

        $productData = [
            'name' => $validated['name'],
            'article' => $validated['article'],
            'status' => $request->input('status'),
            'data' => $request->input('attributes'),
        ];

        $product = Product::create($productData);

        SendProductCreatedNotification::dispatch($product);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        $role = config('products.role');

        $rules = [
            'name' => 'required|min:10',
            'status' => 'required|in:available,unavailable',
        ];

        if ($role === 'admin') {
            $rules['article'] = 'required|alpha_num|unique:products,article,' . $id;
        }

        $validated = $request->validate($rules);
        $product->name = $validated['name'];
        $product->status = $validated['status'];
        $product->data = $request->input('attributes');

        if ($role === 'admin' && isset($validated['article'])) {
            $product->article = $validated['article'];
        }

        $product->save();
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
