@include('includes.admin_header')
@include('includes.admin_sidebar')

<section>
    <form action="{{ route('submit_product') }}" class="insert-product-form" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3 class="form-title">Insert Product</h3>
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="description">Description</label>
        <textarea name="description" rows="5"></textarea>
        <label for="price">Price</label>
        <input type="number" name="price">
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity">
        <label for="image">Image</label>
        <input type="file" name="image">
        <label for="category">Category</label>
        <select name="category">
            @foreach ($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-default">Create</button>
        @if (session()->has('success'))
            <p>{{ session('success') }}</p>
        @endif
    </form>

</section>

@include('includes.admin_footer')
