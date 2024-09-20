@extends('layouts.auth')

@section('body')
{{-- --}}

<!--Contact Page Section-->
<section class="contact-page-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">

            <h2>Explore Our Room Types</h2>
            <p>At Stay Holic, we offer a range of room options designed to fit every student’s lifestyle and budget.
                Whether you're looking for a private space to focus on your studies or a shared room to enjoy the social
                experience of college life, we have the perfect room for you!</p>
            <div class="separator"></div>
        </div>

        <!-- Single Occupancy Room -->
        <div class="row">
            <div class="col-md-6">
                <img width="100%" src="{{asset('img/pg/1.jpeg')}}" alt="">
            </div>
            <div class="col-md-6">
                <h3 class="montserrat" style="font-size: 4rem; font-weight: 800;">Single Occupancy Room</h3>
                <p class="montserrat">Enjoy complete privacy with our single occupancy rooms, perfect for those who
                    value their personal space. Equipped with a comfortable bed, study desk, and plenty of storage, this
                    option is ideal for students who need a quiet environment.</p>

                <div style="margin-top: 50px"></div>
                <div class="row">
                    <div class="col-md-4">
                        <img width="100%" src="{{asset('img/pg/1-1.jpeg')}}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img width="100%" src="{{asset('img/pg/1-2.jpeg')}}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img width="100%" src="{{asset('img/pg/1-3.jpeg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 50px"></div>
        <hr>
        <div style="margin-top: 50px"></div>

        <!-- Double Sharing Room -->
        <div class="row">
            <div class="col-md-6">
                <h3 class="montserrat" style="font-size: 4rem; font-weight: 800;">Double Sharing Room</h3>
                <p class="montserrat">Our double sharing rooms are designed for students who enjoy a social atmosphere
                    while still maintaining comfort. These rooms offer two beds, individual storage spaces, and shared
                    facilities, creating a cozy environment to make new friends and share experiences.</p>

                <div style="margin-top: 50px"></div>
                <div class="row">
                    <div class="col-md-4">
                        <img width="100%" src="{{asset('img/pg/2-1.jpeg')}}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img width="100%" src="{{asset('img/pg/2-2.jpeg')}}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img width="100%" src="{{asset('img/pg/2-3.jpeg')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <img width="100%" src="{{asset('img/pg/2.jpeg')}}" alt="">
            </div>

        </div>

        <div style="margin-top: 50px"></div>
        <hr>
        <div style="margin-top: 50px"></div>

        <!-- Triple Sharing Room -->
        <div class="row">
            <div class="col-md-6">
                <img width="100%" src="{{asset('img/pg/3.png')}}" alt="">
            </div>
            <div class="col-md-6">
                <h3 class="montserrat" style="font-size: 4rem; font-weight: 800;">Triple Sharing Room</h3>
                <p class="montserrat">Looking for an even more affordable option? Our triple sharing rooms allow you to
                    live in a community setting while still enjoying all the amenities. These rooms are perfect for
                    students who love the buzz of a shared space and want to make lasting connections.</p>

                <div style="margin-top: 50px"></div>
                <div class="row">
                    <div class="col-md-4">
                        <img width="100%" src="{{asset('img/pg/3.png')}}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img width="100%" src="{{asset('img/pg/3.png')}}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img width="100%" src="{{asset('img/pg/3.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 50px"></div>
        <hr>
        <div style="margin-top: 50px"></div>

        <p style="color:black" class="text-center"><b>No matter which room type you choose, all Stay Holic properties come with a range of
                top-notch amenities,
                including high-speed Wi-Fi, laundry facilities, and 24/7 security. Take your pick and find the perfect
                fit
                for your college journey!</b></p>

    </div>
</section>
<!--End Contact Page Section-->
@endsection