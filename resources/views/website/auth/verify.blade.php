@extends('layouts.auth')

@section('body')
{{-- --}}
<section class="page-title" style="background-image:url({{asset('images/background/6.jpg')}})">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <h1>OTP Verification</h1>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Stayholic</a></li>
                    <li>OTP Verification</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="contact-page-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2>OTP Verification
            </h2>
            <p>We've sent a verification code to your Phone number - <b>{{session('customer_phone')}}</b></p>
            <div class="separator"></div>
        </div>

        <!--Contact Form-->
        <div class="contact-form">
            <form method="post" action="{{Route('customer.verify')}}" id="contact-form" novalidate="novalidate">
                @csrf
                <div class="row clearfix">
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <input class="text-center" type="text" name="otp">
                        @error('otp')
                            <p class="text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <p class="text-center"><b>{{session('error')}}</b></p>
                    <div class="form-group text-center col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="theme-btn btn-style-three">Verify <span
                                class="icon flaticon-signin-button"></span></button>
                    </div>
                </div>
            </form>

            <p class="text-center">Didn't get it ? <b><a href="{{ route('customer.sendotp') }}">Resend Code</a></b></p>
        </div>
        <!--End Contact Form-->

    </div>
</section>
@endsection