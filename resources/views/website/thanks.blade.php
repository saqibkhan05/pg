@extends('layouts.auth')

@section('body')

{{-- --}}
<section class="about-section" style="background-image:url(images/background/7.jpg)">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Column-->
            <div class="content-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <!--Sec Title-->
                    <div class="sec-title">
                        <div class="title"><b>StayHolic</b></div>
                        <h2>Thank You for Registering!</h2>
                        <div class="separator"></div>
                    </div>
                    <div class="bold-text">"Your registration was successful! We’re thrilled that you took the first
                        step toward securing your 5% discount on room rent. Our team will review your details and get
                        back to you shortly to confirm your eligibility."</div>
                    <div class="text">
                        <p>In the meantime, feel free to explore more about Stay Holic and the services we offer. We
                            can’t wait to welcome you to your new home! Keep an eye on your inbox for updates.</p>
                        <p>While you wait, why not take a look at our properties and get a feel for what Stay Holic has
                            to offer? Whether you're looking for a quiet study space, fun common areas, or top-tier
                            amenities, we have it all!</p>
                        <p>If you have any questions or need more info in the meantime, don’t hesitate to reach out.
                            We're here to make the process smooth and easy for you!</p>
                    </div>
                </div>
            </div>
            <!--Image Column-->
            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                <div class="image">
                    <img style="border-radius: 2rem;" src="{{asset('img/thanks/thanks.jpg')}}" alt="">
                </div>
            </div>

        </div>
    </div>
</section>

<!--Call To Action Two-->
<section class="call-to-action-two" style="background-image:url(images/background/3.jpg)">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Title Column-->
            <div class="title-column col-md-9 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="logo">
                        <img src="images/logo/logo.png" alt="">
                    </div>
                    <div class="text"><b>Stayholic</b> Your Ultimate Comfort Hub Where Every Corner Brings Relaxation
                        and Ease. Step into Your Perfect Escape,
                        Where Everything Feels Effortlessly Right!</div>
                </div>
            </div>
            <!--Btn Column-->
            <div class="btn-column col-md-3 col-sm-12 col-xs-12">
                <a href="https://api.whatsapp.com/send?phone=9810191518&text=Hello%20enquiry%20for%20Stay!"
                    class="theme-btn btn-style-three">Contact Now <span class="icon fa fa-edit"></span></a>
            </div>

        </div>
    </div>
</section>
@endsection