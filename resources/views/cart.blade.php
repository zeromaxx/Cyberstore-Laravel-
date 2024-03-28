@section('title')
    {{ 'Cart' }}
@endsection

@include('includes.header')
@include('includes.navbar')
@include('includes.alt_nav_search_bar')
@include('includes.banner')

<div class="cart-container">
    <div class="shopping-cart">
        <h3>Shopping Cart</h3>
        <table>
            @foreach ($cart as $cartItem)
                <tr class="product_data">
                    <td>
                        <i data-cart-id="{{ $cartItem['id'] }}" class="fas fa-times removeFromCart"></i>
                    </td>
                    <td>
                        <img src="/images/{{ $cartItem['product']['image'] }}" alt="">
                    </td>
                    <td>
                        <h5>{{ $cartItem['product']['name'] }}</h5>
                    </td>
                    <td>
                        <h4>{{ $cartItem['product']['price'] }} &euro;</h4>
                    </td>
                    <td style="color: #15db00">
                        In Stock :
                        <span class="shop-product-stock">{{ $cartItem['product']['qty'] }}</span>
                    </td>
                    <td>
                        <div class="quantity-container">
                            <span>Quantity</span>
                            <i class="fa fa-angle-left decrement-btn changeQuantity"></i>
                            <span class="qty-input">{{ $cartItem['quantity'] }}</span>
                            <i class="fa fa-angle-right increment-btn changeQuantity"></i>
                        </div>
                        <input type="hidden" class="prod_id" value="{{ $cartItem['id'] }}">
                    </td>

                </tr>
            @endforeach
        </table>
        <i class="fa fa-angle-left back-to-shopping-link">
        </i>
        <a class="back-to-shopping-link" href="/">
            Go Back Shopping
        </a>
    </div>
    <div class="cart-total-container">
        <div class="cart-shipping">
            <h2>Cart Totals</h2>
            <div class="cart-shipping-2">
                <h3>Subtotal</h3>
                <h4>{{ $total }} &euro;</h4>
            </div>

        </div>
        <div class="cart-checkout">
            <h3>
                Total
                <span>{{ $total }} &euro;</span>
            </h3>
            <a @if(!Auth::check()) data-tooltip="Login to continue" @endif href="{{ Auth::check() ? route('checkout') : '#' }}">Proceed To Checkout</a>
        </div>
    </div>
</div>

@include('includes.footer')

<script>
    $('.removeFromCart').click(function(e) {
        var button = $(e.target);
        $.ajax({
            url: `removeCartItem/${button.attr("data-cart-id")}`,
            method: "GET"
        }).done(function() {
            button.parents('tr').fadeOut(function() {
                $(this).remove();
            })
            window.setTimeout(function() {
                location.reload();
            }, 1500);
        }).fail(function() {});
    })

    $(".increment-btn").click(function(e) {
        e.preventDefault();
        var product_stock = $(this)
            .closest('.product_data')
            .find('.shop-product-stock').html();
        var product_stock_value = parseInt(product_stock);

        var inc_value = $(this)
            .closest(".product_data")
            .find(".qty-input").html();
        var value = parseInt(inc_value, 10);

        value = isNaN(value) ? 0 : value;
        if (value < 10 && value < product_stock_value) {
            value++;
            $(this).closest(".product_data").find(".qty-input").html(value);
        }
    });

    $(".decrement-btn").click(function(e) {
        e.preventDefault();
        var dec_value = $(this)
            .closest(".product_data")
            .find(".qty-input")
            .html();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            $(this).closest(".product_data").find(".qty-input").html(value);
        }
    });


    $(".changeQuantity").click(function(e) {
        e.preventDefault();
        var prod_id = $(this).closest(".product_data").find(".prod_id").val();

        var qty = $(this).closest(".product_data").find(".qty-input").html();

        $.ajax({
            method: "GET",
            url: `update_cart/${prod_id}/${qty}`,
            success: function(response) {
                console.log(response);
                location.reload();

            },
        });
    });
</script>
