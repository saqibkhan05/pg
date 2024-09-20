@extends('layouts.auth')

@section('body')

    {{--  --}}
    <section class="about-section" style="background-image:url(images/background/7.jpg)">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <!--Sec Title-->
                        <div class="sec-title">
                            <div class="title">About StayHolic</div>
                            <h2>Who We Are</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="bold-text">"StayHolic PG Indirapuram for Boys and Girls offers comfortable living in
                            Indirapuram for students and working professionals. The hostel provides spacious accommodations,
                            delicious home-cooked meals, and housekeeping services."</div>
                        <div class="text">
                            <p>Residents enjoy a convenient location
                                with easy access to Delhi and Noida, and are surrounded by vibrant shopping, food, and
                                entertainment options. Why Choose Stayholic PG? Comfort and Convenience: Experience a
                                home-like
                                atmosphere with all the modern amenities. </p>
                            <p>Ideal Location: Enjoy easy access to Delhi and
                                Noida,
                                as well as a variety of shopping and entertainment options. Reliable Services: Our dedicated
                                housekeeping and power backup services. Affordable Pricing: Enjoy quality living at
                                competitive
                                rates.</p>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="image">
                        <img style="border-radius: 2rem;" src="{{asset('img/about/1.jpeg')}}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="services-section style-two">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="title">We are Offering the Best Services</div>
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
                        <h3><a href="property-detail.html">Hygienic Meal</a></h3>
                        <div class="text">Delicious meals cooked in a neat and clean kitchen</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-house-2"></span>
                        </div>
                        <h3><a href="property-detail.html">High Speed WiFi</a></h3>
                        <div class="text">Dedicated leased line internet with 100 mbps internet</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-internet"></span>
                        </div>
                        <h3><a href="property-detail.html">Power Backup</a></h3>
                        <div class="text">Power Backup without interrupt</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-hand-shake"></span>
                        </div>
                        <h3><a href="property-detail.html">24x7 Security</a></h3>
                        <div class="text">Round the clock professional security guards</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-analytics"></span>
                        </div>
                        <h3><a href="property-detail.html">House Keeping</a></h3>
                        <div class="text">Professional housekeeping team deployed at each hostel</div>
                    </div>
                </div>

                <!--Services Block-->
                <div class="services-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon flaticon-house-3"></span>
                        </div>
                        <h3><a href="property-detail.html">Laundry Services</a></h3>
                        <div class="text">Regular service at your convenience</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
