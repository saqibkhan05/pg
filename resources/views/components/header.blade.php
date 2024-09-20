<!-- Main Header-->
<header class="main-header">


    <!-- Main Box -->
    <div class="main-box">
        <div class="auto-container">
            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="index.php"><img src="{{asset('images/logo/logo.png')}} " alt=""></a>
                    </div>
                </div>

                <!--Nav Outer-->
                <div class="nav-outer clearfix">

                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{ route('home') }}">Home</a></li>

                                <li><a href="{{ route('about') }}">About Us</a></li>

                                <li><a href="{{ route('gallery') }}">Gallery</a></li>

                                <li><a href="{{ route('faq') }}">FAQ</a></li>

                                <li><a href="{{ route('home') }}">Blog</a></li>

                                <li><a href="{{ route('contact') }}">Contact us</a></li>

                                <li class="current"><a href="{{ route('signin') }}"><b>Login</b></a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->


                </div>
                <!--Nav Outer End-->

            </div>
        </div>
    </div>

    <!--Sticky Header-->
    <div class="sticky-header" style="background-color:#000000;">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.php" class="img-responsive"><img src="images/logo/logo_b.png" alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li><a href="{{ route('home') }}">Home</a></li>

                            <li><a href="{{ route('about') }}">About Us</a></li>

                            <li><a href="{{ route('gallery') }}">Gallery</a></li>

                            <li><a href="{{ route('faq') }}">FAQ</a></li>

                            <li><a href="{{ route('home') }}">Blog</a></li>

                            <li><a href="{{ route('contact') }}">Contact us</a></li>

                            <li class="current"><a href="{{ route('signin') }}"><b>Login</b></a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>

</header>
<!--End Main Header -->