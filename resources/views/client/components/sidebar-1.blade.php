<div class="app-menu navbar-menu" style="background-color: black;">
    <!-- LOGO -->
    <div class="navbar-brand-box" style="background-color: black;">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img style="width: 100%; margin-top:10px;" src="{{ asset('admin_assets/img/logo/logo.png') }}" alt="">
            </span>
            <span class="logo-lg">
                <img style="width: 100%; margin-top:10px;" src="{{ asset('admin_assets/img/logo/logo.png') }}" alt="">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img style="width: 100%; margin-top:10px;" src="{{ asset('admin_assets/img/logo/logo.png') }}" alt="">
            </span>
            <span class="logo-lg">
                <img style="width: 100%; margin-top:10px;" src="{{ asset('admin_assets/img/logo/logo.png') }}" alt="">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div class="container">
        <hr style="color: white;">
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('customer.dashboard')}}">
                        <i class="ri-apps-2-line"></i><span data-key="t-landing">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('customer.my_kyc')}}">
                        <i class="ri-apps-2-line"></i><span data-key="t-landing">KYC</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('customer.balance')}}">
                        <i class="ri-apps-2-line"></i><span data-key="t-landing">Wallet</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('customer.c_search')}}">
                        <i class="ri-apps-2-line"></i><span data-key="t-landing">PG</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="">
                        <i class="ri-apps-2-line"></i><span data-key="t-landing">Hotels</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="">
                        <i class="ri-apps-2-line"></i><span data-key="t-landing">Food</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="">
                        <i class="ri-apps-2-line"></i><span data-key="t-landing">Payments</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="">
                        <i class="ri-apps-2-line"></i><span data-key="t-landing">Chat</span>
                    </a>
                </li>


                <div class="container">
                    <hr style="color: white;">
                </div>

                <li class="menu-title"><span data-key="t-menu">Logout</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ Route('customer.logout')}}">
                        <i class="ri-apps-2-line"></i><span data-key="t-landing">Logout</span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
</div>