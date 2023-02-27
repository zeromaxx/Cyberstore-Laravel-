    <div style="background: white" class="navbar-search-container">
        <div class="navbar-brand">
            <a href="/"><img width="255px" class="nav-logo" src="{{ asset('img/logo-default.png') }}" /></a>
        </div>
        <div class="search">
            <form method="POST" action="{{ url('/shop') }}" class="search-form">
                @csrf
                <input name="query" class="search-input" type="text" placeholder="Search for Product...">
                <button class="search-form-btn" type="submit">search</button>
            </form>

            <div class="tooltip">
                <a href="{{ route('wishlist') }}"> <i class="fa-regular fa-heart nav-heart"></i></a>
                <span class="tooltiptext">
                    <h5>View Wishlist</h5>
                </span>
            </div>
            <div class="cart-icon-container">
                <a href="{{ route('cart') }}"><img width="24" class="cart-icon"
                        src="{{ asset('img/cart-icon.png') }}" alt=""></a>
                <div class="cart-quantity">
                    <span id="items-to-cart">
                        @if (auth()->check())
                            {{ auth()->user()->cartCount() }}
                        @else
                            0
                        @endif
                    </span>
                </div>
            </div>

        </div>
    </div>
