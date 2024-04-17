{{-- resources/views/products/edit.blade.php --}}
<div class="container">
    <h2>Редактирование продукта</h2>

    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Название:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="article">Артикул:</label>
            <input type="text" class="form-control" id="article" name="article" value="{{ $product->article }}" required>
        </div>

        <div class="form-group">
            <label for="status">Статус:</label>
            <select class="form-control" id="status" name="status">
                <option value="available" {{ $product->status == 'available' ? 'selected' : '' }}>Доступен</option>
                <option value="unavailable" {{ $product->status == 'unavailable' ? 'selected' : '' }}>Недоступен</option>
            </select>
        </div>

        <div class="form-group">
            <label for="data_color">Цвет:</label>
            <input type="text" class="form-control" id="data_color" name="data[color]" value="{{ $product->data['color'] ?? '' }}">
        </div>

        <div class="form-group">
            <label for="data_size">Размер:</label>
            <input type="text" class="form-control" id="data_size" name="data[size]" value="{{ $product->data['size'] ?? '' }}">
        </div>

        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
    </form>
    <div class="container mt-3">
        <form method="POST" action="{{ route('products.destroy', $product->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Вы уверены, что хотите удалить этот продукт?');">Удалить продукт</button>
        </form>
    </div>
</div>
