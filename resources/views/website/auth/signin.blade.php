@extends('layouts.auth')

@section('body')
{{-- --}}
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

<section class="contact-page-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2>Login</h2>
            <div class="separator"></div>
        </div>

        <!--Contact Form-->
        <div class="contact-form">
            <form method="post" action="{{route('customer.login')}}" id="contact-form" novalidate="novalidate">
                @csrf
                <div class="row clearfix">

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <input type="text" name="email" value="" placeholder="Email">
                        @error('email')
                            <p class="text-center">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <input type="password" name="password" value="" placeholder="Password">
                        @error('password')
                            <p class="text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <p class="text-center">
                        <b>
                            {{session('login_unauthorised')}}
                        </b>
                    </p>

                    <div class="form-group text-center col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="theme-btn btn-style-three">Login <span
                                class="icon flaticon-signin-button"></span></button>
                    </div>
                </div>
            </form>
            <p class="text-center">If don't have account do <b><a href="{{ route('signup') }}">Signup</a></b></p>
        </div>
        <!--End Contact Form-->

    </div>
</section>
@endsection