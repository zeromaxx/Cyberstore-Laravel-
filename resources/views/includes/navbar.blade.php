    <button class="sidebar-toggle">
        <i class="fas fa-bars"></i>
    </button>
    <div class="navbar sidebar">
        <div class="navbar-container">
            <div class="links-container">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('admin') }}">Admin</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Build your desktop</a></li>
                    <li><a href="">Suggestions</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">About us</a></li>
                </ul>
            </div>
            <div>
                <ul class="navbar-sub">
                    <li>
                        <a style="font-size:12px" class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>

    <body>
