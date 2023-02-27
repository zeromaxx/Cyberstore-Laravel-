@section('title')
    {{ 'Checkout' }}
@endsection

@include('includes.header')
@include('includes.navbar')
@include('includes.alt_nav_search_bar')
@include('includes.banner')


@if (session()->has('success'))
    <div class="order-complete-modal">
        <svg width="70" height="70" id="Layer_1" style="enable-background:new 0 0 30 30;" version="1.1"
            viewBox="0 0 30 30" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <path fill="#5677fc"
                d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M21.707,12.707l-7.56,7.56  c-0.188,0.188-0.442,0.293-0.707,0.293s-0.52-0.105-0.707-0.293l-3.453-3.453c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0  l2.746,2.746l6.853-6.853c0.391-0.391,1.023-0.391,1.414,0S22.098,12.316,21.707,12.707z" />
        </svg>
        <p class="order-data">{{ session('success') }}</p>
        <div>
            <a class="order-complete-modal-link" href="{{ route('orders') }}">View Orders</a>
            <button class="close-order-complete-modal">Not now</button>
        </div>
    </div>
@endif

<form action="{{ route('submit_order') }}" method="POST" id="checkout-form">
    @csrf
    <div class="checkout-container">
        <div class="checkout-form-container">
            <h3>Billing details</h3>
            <div class="col-1-checkout">
                <div class="col-2-checkout">
                    <label for="firstname">Firstname *</label>
                    <input type="text" class="form-control" name="firstname">
                    @error('firstname')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <label for="lastName">LastName *</label>
                    <input type="text" class="form-control" name="lastname">
                    @error('lastname')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <label for="address">Address *</label>
                    <input type="text" class="form-control" name="address">
                    @error('address')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <label for="telephone">Telephone *</label>
                    <input type="text" class="form-control" name="telephone">
                    @error('telephone')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-3-checkout">
                    <label for="shipping">Shipping</label>
                    <select class="shippingId" name="shipping" id="shipping">
                        <option value="0"> Local pickup: &euro; 0</option>
                        <option value="7"> Flat rate: &euro; 7</option>
                    </select>
                </div>
            </div>

            <div class="col-4-checkout">
                <button class="checkout-button" id="place-order" type="submit"><span id="paypal-btn"></span></button>
                <input id="place-order" type="submit" value="Place Order">
            </div>

        </div>
        <div class="order-checkout-container">
            <h3>Your order</h3>
            <table>
                <tr>
                    <th class="text-left">Product</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
                @foreach ($cart as $cartItem)
                    <tr>
                        <td data-label="Product" class="text-left">
                            <img width="50" src="/images/{{ $cartItem['product']['image'] }}" alt="product-image">
                        </td>
                        <td data-label="Name" class="">{{ $cartItem['product']['name'] }}</td>
                        <td data-label="Qty" class="order-checkout-qty">{{ $cartItem['quantity'] }}</td>
                        <td class=""></td>
                        <td data-label="Total" class="order-checkout-total">
                            <span class="span-color-1"> {{ $cartItem['product']['price'] }} &euro;</span>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Subtotal</td>
                    <td id="subTotal" class="order-checkout-total">{{ $total }} &euro;</td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Shipping Rate</td>
                    <td id="shipping-rate" class="order-checkout-total">0</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="color:black;">Grand Total</td>
                    <td id="grand-total" style="color:black;" class="order-checkout-total">{{ $total }} &euro;
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <input type="hidden" name="total" value="{{ $total }}">
</form>

@include('includes.footer')

<script>
    const orderCompleteModal = document.querySelector('.order-complete-modal');
    const orderData = document.querySelector('.order-data');
    const closeOrderModal = document.querySelector('.close-order-complete-modal');

    if (closeOrderModal !== null) {
        closeOrderModal.addEventListener('click', function() {
            orderCompleteModal.style.display = 'none';
        })
    }

    let total = parseInt($('#shipping-rate').text());

    $(document).ready(function() {
        $('#shipping').change(function() {
            var s = $('#shipping').val();
            $('#shipping-rate').html(s);
            var shippingValue = parseFloat(s);
            var subTotal = parseFloat($('#subTotal').text());
            var grand = parseFloat(shippingValue + subTotal);
            $('#grand-total').html(grand + '&euro;');
        })

    })
</script>
