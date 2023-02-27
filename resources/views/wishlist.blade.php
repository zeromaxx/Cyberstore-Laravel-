@section('title')
    {{ 'Home' }}
@endsection

@include('includes.header')
@include('includes.navbar')
@include('includes.banner')

<div class="empty-space"></div>
<div class="wishlist-container">
    <table>
        @foreach ($favourites as $favourite)
            <tr>
                <td>
                    <i class="fas fa-times remove-wishlist-button" data-product-id=""></i>
                </td>
                <td>
                    <img src="/images/{{ $favourite['product']['image'] }}" alt="">
                </td>
                <td>
                    <h5>{{ $favourite['product']['name'] }}</h5>
                </td>
                <td>
                    <h4>{{ $favourite['product']['price'] }} &euro;</h4>
                </td>
                <td>
                    <span>{{ $favourite['product']['qty'] }} In Stock</span>
                </td>
            </tr>
        @endforeach
        <tr>
            <td style="text-align:center;">
                {{ $message }}
            </td>
        </tr>   
    </table>
</div>
<div class="empty-space"></div>


{{-- <script src="~/Scripts/Navbar Toggle.js"></script>
    <script src="~/Scripts/LiveSearch.js"></script>
    <script src="~/Scripts/WishList.js"></script>
    <script src="~/Scripts/AddToCart.js"></script> --}}
