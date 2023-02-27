  <div class="page-wrapper">
        <div class="admin-sidebar">
            <div class="admin-sidebar-logo">
                <a href="{{ route('home') }}">
                    <h3>
                        C
                        <span>YBERSTORE</span>
                    </h3>
                </a>
            </div>
            <ul>
                <li class="navigation-header"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li>
            </ul>
            <ul>
                <li class="navigation-header-1"><a href="{{ route('insert_product') }}">Insert Product</a></li>
                <li>
            </ul>
            <ul>
                <li class="navigation-header-1"><a href="{{ route('allproducts') }}">View all Products</a></li>
                <li>
            </ul>
        </div>

        <div class="page2-wrapper">
            <div class="admin-nav">
                <div class="admin-nav-end">
                    <img class="dark-light-mode-icon" src="{{ asset('img/admin/sun.png') }}" />
                    <img class="account-icon" src="{{ asset('img/admin/face.jpg') }}" />
                </div>
                <div class="admin-nav-dropdown-menu-container">
                    <div class="admin-nav-dropdown-header">
                        <img src="{{ asset('img/admin/face.jpg') }}" />
                        <div class="admin-nav-dropdown-header-1">
                                <h4>
                                  {{ auth()->user()->username }}
                                </h4>
                                <h6>
                                    {{ auth()->user()->email }}
                                </h6>
                        </div>
                    </div>
                    <div class="admin-nav-dropdown-footer">
                            <a href="{{ route('logout') }}">Sign out</a>
                    </div>
                </div>
            </div>
            <button class="admin-sidebar-toggle">
                <i class="fas fa-angle-left"></i>
            </button>
            
