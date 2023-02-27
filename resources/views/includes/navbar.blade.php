    <button class="sidebar-toggle">
        <i class="fas fa-bars"></i>
    </button>
    <div class="navbar sidebar">
        <div class="navbar-container">
            <div class="links-container">
                <ul>
                    @if (Auth::check() && Auth::user()->role == 'user')
                        <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                        <li><a href="{{ route('orders') }}">Orders</a></li>
                    @endif
                    @if (Auth::check() && Auth::user()->role == 'admin')
                        <li><a href="{{ route('admin') }}">Admin</a></li>
                        <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                        <li><a href="{{ route('orders') }}">Orders</a></li>
                    @endif
                    @if (!Auth::check())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                    <li><a href="{{ route('shop') }}">Shop</a></li>
                </ul>
            </div>
            <div>
                <ul class="navbar-sub">
                    @if (Auth::check())
                        <li>
                            <a style="font-size:12px" class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    @endif
                    <li></li>
                </ul>
            </div>
        </div>
    </div>

    <body>
