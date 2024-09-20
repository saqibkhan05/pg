@extends('layouts.auth')

@section('body')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/6.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Gallery</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Gallery MixitUp Section-->
    <section class="gallery-mixitup-section">
        <div class="auto-container">

            <div class="sec-title centered">
                <div class="montserrat" style="font-size: 18px;"><b>Always within reach</b></div>
                <h2 class="montserrat" style="font-size: 5rem; font-weight: 800; line-height: 1;">Gallery</h2>
                <div class="separator"></div>
            </div>

            <!--MixitUp Galery-->
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/1.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/2.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/3.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/4.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/5.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/6.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/7.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/8.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/11.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/12.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/15.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/16.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/17.png') }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/gallery_page/23.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--End Gallery MixitUp Section-->
@endsection
