@extends('layouts.auth')


@section('body')
<section class="page-title" style="background-image:url(images/background/6.jpg)">
    <div class="auto-container">
        <div class="clearfix">
            <div class="pull-left">
                <h1>Signup</h1>
            </div>
            <div class="pull-right">
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Signup</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="contact-page-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2>Signup</h2>
            <div class="separator"></div>
        </div>

        <!--Contact Form-->
        <div class="contact-form">
            <form method="POST" action="{{route('customer.create')}}" id="contact-form" novalidate="novalidate">
                @csrf
                <div class="row clearfix">

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                        @error('name')
                        <div class="form-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                        <div class="form-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                        @error('phone')
                        <div class="form-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                        @error('password')
                        <div class="form-text">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group text-center col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="theme-btn btn-style-three">Signup <span
                                class="icon flaticon-signin-button"></span></button>
                    </div>
                </div>
            </form>
            <p class="text-center">If already have an account do <b><a href="{{ route('signin') }}">Login</a></b></p>
        </div>
        <!--End Contact Form-->

    </div>
</section>
@endsection