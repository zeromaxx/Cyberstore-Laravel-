@include('includes.admin_header')
@include('includes.admin_sidebar')

<div id="main" class="admin-products-container">
    <div class="products-heading">
        <h3>Products</h3>
        <p>Home - eCommerce - Catalog</p>
    </div>
    <div class="admin-products-header">
        <div class="search">
            <form class="search-form">
                <input id="livesearchtags" name="livesearchtags" class="search-input" type="text"
                    placeholder="Search for Product...">

                <div id="result" class="tag-results"></div>
            </form>
        </div>
        <div class="admin-products-filter-container">
            <span class="dropdown-button">
                All
                <i class="fas fa-angle-down"></i>
            </span>
            <ul class="dropdown-menu">
                <li><a href="">All</a></li>
                <li><a href="">Cpu</a></li>
                <li><a href="">Hard Disks</a></li>
                <li><a href="">Motherboards</a></li>
                <li><a href="">Ram</a></li>
            </ul>
        </div>
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
                        <span>sales</span>
                    </td>
                    <td data-label="Actions" class="admin-btns-container">
                        <div class="actions-btn">
                            Actions
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <ul class="sub-menu-container">
                            <li><a href="{{ route('edit_product', $product['id']) }}">Edit</a></li>
                            <li data-productId="" class="btn--show-modal">Delete</li>
                        </ul>
                    </td>
                </tr>
            @endforeach


        </table>
    </div>
</div>

<div class="modal hidden">

    <img width="60" class="warning-sign" src="~/Images/Icons/warning.png" alt="">
    <h5>Are you sure your want to delete this product?</h5>
    <div>
        <button class="admin-delete-btn">Yes, delete!</button>
        <button class="btn--close-modal">No, cancel</button>
    </div>
</div>
<div class="overlay hidden"></div>
@include('includes.admin_footer')
<script>
    /* Filter Products Dropdown */
    const dropdownBtn = document.querySelector('.dropdown-button');
    const dropdownMenu = document.querySelector('.dropdown-menu');
    dropdownBtn.addEventListener('click', () => {
        dropdownMenu.classList.toggle('show-dropdown');

    })
</script>
