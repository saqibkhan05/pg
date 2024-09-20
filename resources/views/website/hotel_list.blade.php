@extends('layouts.auth')

@section('body')
    {{--  --}}
    <section class="page-title" style="background-image:url(images/background/6.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Login</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section" style="background-image:url(images/background/7.jpg)">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <!--Sec Title-->
                        <div class="sec-title">
                            <div class="title">About Shina</div>
                            <h2>Who We Are</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="bold-text">Shina is a premium WordPress theme for real estate agents where modern
                            aesthetics are combined with tasteful simplicity and where the ease of use is achieved without
                            compromise in your ability to customise the design.</div>
                        <div class="text">
                            <p>Whether you are a real estate agent looking to build a website for your company or a web
                                developer seeking a perfect WordPress theme for your next project, you are certain to
                                appreciate the numerous features and benefits that our theme provides.</p>
                            <p>This is not a theme that only takes care of the front of a real estate business. This is also
                                a WordPress-based property management system which allows you to own and maintain a real
                                estate marketplace, coordinate your agents, accept submissions and offer membership
                                packages.</p>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="images/resource/about.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="services-section style-two">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="title">We are Offering the Best Real Estate</div>
                <h2>Property Services</h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-house-1"></span>
                        </div>
                        <h3><a href="property-detail.html">Homes For Sale</a></h3>
                        <div class="text">Here are the beautiful homes that are <br> available for sale.</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-house-2"></span>
                        </div>
                        <h3><a href="property-detail.html">Homes For Rent</a></h3>
                        <div class="text">Comfortable &amp; Luxury homes are <br> available for rent.</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-internet"></span>
                        </div>
                        <h3><a href="property-detail.html">Homes For Mortgage</a></h3>
                        <div class="text">Homes at the point of using normal <br> distribution of letters.</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-hand-shake"></span>
                        </div>
                        <h3><a href="property-detail.html">Matching Buyer</a></h3>
                        <div class="text">Buyers of the Properties are available <br> with us.</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-analytics"></span>
                        </div>
                        <h3><a href="property-detail.html">Price Analysis</a></h3>
                        <div class="text">Buyers of the Properties are available <br> with us.</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-house-3"></span>
                        </div>
                        <h3><a href="property-detail.html">Homes On Lease</a></h3>
                        <div class="text">Buyers of the Properties are available <br> with us.</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
