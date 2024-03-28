@section('title')
    {{ 'Orders' }}
@endsection

@include('includes.header')
@include('includes.navbar')
@include('includes.alt_nav_search_bar')
@include('includes.banner')

<div class="order-listing-container">
    <div class="products-heading">
        <h3>Orders Listing</h3>
        <p>Home - Orders</p>
    </div>
    <div class="order-listing-table">
        <table>
            <thead>
                <tr>
                    <th class="text-left">Order Id</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Total</th>
                    <th>Date Added</th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($orders as $order)
                <tr>
                    <td data-label="Order Id" class="td-left">
                        {{ $order['id'] }}
                    </td>
                    <td data-label="Firstname">
                        <span class="span-color">{{ $order['firstname'] }}</span>
                    </td>
                    <td data-label="Lastname">
                        <span class="span-color">{{ $order['lastname'] }}</span>
                    </td>
                    <td data-label="Total" class="span-color-1">
                        <span>{{ $order['total'] }} &euro;</span>
                    </td>
                    <td data-label="Date Added" class="span-color-1">
                        <span>{{ substr($order['created_at'], 0, 10) }}</span>
                    </td>
                    <td data-label="Actions" class="admin-btns-container">
                        <div class="my-orders-actions-btn">
                            Actions
                            <i class="fas fa-angle-down"></i>
                        </div>
                        <ul class="sub-menu-container">
                            <li>
                                <a href="{{ route('order_details', $order['id']) }}">Order Details</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@include('includes.footer')
<script>
    /* Actions Dropdown */

    $('.my-orders-actions-btn').on('click', function(e) {
        e.stopPropagation();
        $(this)
            .closest('.admin-btns-container')
            .find('.sub-menu-container')
            .toggle('show-sub-menu-container');
    });


    /* close menu when clicked outside of div */
    $('body').on('click', function() {
        $('.sub-menu-container').hide();
        $('.admin-nav-dropdown-menu-container')
            .removeClass('show-admin-nav-dropdown-menu-container');
    })
</script>
