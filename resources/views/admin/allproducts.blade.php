@include('includes.admin_header')
@include('includes.admin_sidebar')

<div id="main" class="admin-products-container">
    <div class="products-heading">
        <h3>Products</h3>
        <p>Home - All Products</p>
    </div>
    <div class="admin-products-table">
        <table>
            <thead>
                <tr>
                    <th class="text-left">Product</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Sales</th>
                    <th>Actions</th>
                </tr>
            </thead>

            @foreach ($products as $product)
                <tr>
                    <td data-label="Product" class="td-left">
                        <img class="admin-product-img" src="/images/{{ $product['image'] }}" alt="">
                    </td>
                    <td data-label="Name">
                        <span class="span-color"><a href="">{{ $product['name'] }}</a></span>
                    </td>
                    <td data-label="Price" class="span-color-1">
                        <span>{{ $product['price'] }} &euro;</span>
                    </td>
                    <td data-label="Stock" class="span-color-1">
                        @if ($product['qty'] <= 3 && $product['qty'] != 0)
                            <span class="low-stock">low stock</span>
                        @endif
                        @if ($product['qty'] == 0)
                            <span class="out-of-stock">out of stock</span>
                        @endif
                        <span>{{ $product['qty'] }}</span>
                    </td>
                    <td data-label="Sales" class="span-color-1">
                        <span>{{ $product['sales'] }}</span>
                    </td>
                    <td data-label="Actions" class="admin-btns-container">
                        <div class="actions-btn">
                            Actions
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <ul class="sub-menu-container">
                            <li><a href="{{ route('edit_product', $product['id']) }}">Edit</a></li>
                        </ul>
                    </td>
                </tr>
            @endforeach


        </table>
    </div>
</div>

<div class="overlay hidden"></div>
@include('includes.admin_footer')

