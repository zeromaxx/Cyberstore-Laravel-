@include('includes.admin_header')
@include('includes.admin_sidebar')

<section>
    <form action="{{ route('update_product', $product['id']) }}" class="insert-product-form" method="POST"
        enctype="multipart/form-data">
        @method('PATCH')
        {{ csrf_field() }}
        <h3 class="form-title">Edit Product</h3>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $product['name'] }}">
        <label for="description">Description</label>
        <textarea name="description" rows="5">{{ $product['description'] }}</textarea>
        <label for="price">Price</label>
        <input type="number" name="price" value="{{ $product['price'] }}">
        <label for="quantity">Quantity</label>
        <input type="number" min="0" name="quantity" value="{{ $product['qty'] }}">
        <label for="image">Image</label>
        <input type="file" name="image">
        <label for="category">Category</label>
        <select name="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ old('category', $product->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
            @endforeach
        </select>
        <button type="submit" class="btn btn-default">Update</button>
    </form>

</section>

@include('includes.admin_footer')
