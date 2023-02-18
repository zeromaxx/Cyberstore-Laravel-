  <div class="page-wrapper">
        <div class="admin-sidebar">
            <div class="admin-sidebar-logo">
                <a href="#">
                    <h3>
                        C
                        <span>YBERSTORE</span>
                    </h3>
                </a>
            </div>
            <ul>
                <li class="navigation-header"><a href="">Dashboard</a></li>
                <li>
            </ul>
            <div data-tab="1" class="sub-header arrow-down">
                <div class="icon-container">
                    <img class="icon" src="{{ asset('img/admin/tower.png') }}" alt="">
                </div>

                <div class="sub-header-2">
                    Box
                    <i class="fas fa-angle-down"></i>
                </div>
            </div>

            <ul class="dropdown dropdown--1 ">
                <li>
                    <a href="">Insert Box</a>
                </li>
            </ul>
            <div data-tab="8" class="sub-header arrow-down">
                <div class="icon-container">
                    <img class="icon" src="{{ asset('img/admin/monitor.png') }}" alt="">
                </div>

                <div class="sub-header-2">
                    Monitor
                    <i class="fas fa-angle-down"></i>
                </div>
            </div>

            <ul class="dropdown dropdown--8 ">
                <li>
                    <a href="">Insert Monitor</a>
                </li>
            </ul>
            <div data-tab="7" class="sub-header arrow-down">
                <div class="icon-container">
                    <img class="icon" src="{{ asset('img/admin/ram.png') }}" alt="">
                </div>

                <div class="sub-header-2">
                    Ram
                    <i class="fas fa-angle-down"></i>
                </div>
            </div>

            <ul class="dropdown dropdown--7 ">
                <li>
                    <a href="">Insert Ram</a>
                </li>
            </ul>
            <div data-tab="2" class="sub-header arrow-down">
                <div class="icon-container">
                    <img class="icon" src="{{ asset('img/admin/cooler.png') }}" alt="">
                </div>
                <div class="sub-header-2">
                    PSU
                    <i class="fas fa-angle-down"></i>
                </div>
            </div>
            <ul class="dropdown dropdown--2 ">
                <li>
                    <a href="">Insert PSU</a>
                </li>
            </ul>
            <ul>
                <li class="navigation-header-1"><a href="{{ route('insert_product') }}">Insert Product</a></li>
                <li>
            </ul>
            <ul>
                <li class="navigation-header-2"><a href="">Role Assign</a></li>

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
                                   User.Identity.Name
                                </h4>
                                <h6>
                                    Username
                                </h6>
                        </div>
                    </div>
                    <div class="admin-nav-dropdown-footer">
                            <a href="#">Sign out</a>
                    </div>
                </div>
            </div>
            <button class="admin-sidebar-toggle">
                <i class="fas fa-angle-left"></i>
            </button>
            
