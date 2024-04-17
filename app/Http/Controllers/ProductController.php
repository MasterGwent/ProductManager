<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ProductCreatedNotification;
use App\Jobs\SendProductCreatedNotification;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:10',
            'article' => 'required|alpha_num|unique:products,article',
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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
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
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
