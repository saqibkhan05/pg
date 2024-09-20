<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>StayHolic</title>
    <!-- Stylesheets -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{ asset('plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link href="{{ asset('plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <!--Color Switcher Mockup-->
    <link href="{{ asset('css/color-switcher-design.css') }}" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="{{ asset('css/color-themes/default-theme.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <!-- Responsive -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <style>
        .v_h {
            background: #f7f7f7;
            padding: 10px 28px;
            margin-top: -18px;
            color: black;
            border-radius: 0px 25px;
            font-size: 2rem;
            max-width: 70%;
            box-shadow: 6px 3px 12px 1px #5b59597a;
        }

        .full-cover-triangle {
            position: relative;
            overflow: hidden;
            /* Ensure content does not overflow */
            padding: 20px;
            color: white;
            /* Text color for contrast */
            height: 100%;
            /* Adjust height as needed */
        }

        .full-cover-triangle::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #3498db;
            /* Background color */
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 0 50%, 50% 0);
            z-index: -1;
            /* Place behind the content */
        }

        .outlined-text {
            font-size: 48px;
            /* Adjust as needed */
            color: white;
            /* Text color */
            text-shadow:
                1px 1px 0 #000,
                -1px -1px 0 #000,
                1px -1px 0 #000,
                -1px 1px 0 #000;
            /* Outline effect */
        }
    </style>

    <style>
        /* Popup container */
        .popup {
            display: none;
            /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        /* Popup content */
        .popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 400px;
            text-align: center;
        }

        /* Close button */
        .close-btn {
            float: right;
            font-size: 20px;
            cursor: pointer;
        }
    </style>


    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NCL9JBFN');</script>
    <!-- End Google Tag Manager -->

</head>


<body>

    <div class="page-wrapper">

        @include('components.header')

        @yield('body')

        @include('components.footer')

    </div>


    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCL9JBFN" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    {{-- popup Ad --}}
    @if (!Cookie::has('popupfilled'))
        <div class="popup" id="popup">
            <div class="popup-content"
                style="background-image: url(img/offer_bg_2.png); background-size: cover; border-radius: 30px;">
                <span class="close-btn" id="closeBtn"></span>
                <h2 style="color: black"><b>SPECIAL OFFER</b></h2>
                <hr>
                <p style="color: black">
                    <b>
                        <big style="background: yellow; padding: 5px; box-shadow: 0px 0px 5px yellow; font-size: 2.2rem;">
                            5% off
                        </big> on room rent,
                    </b>
                </p>
                <p style="color: black">check if you're eligible now ! <b>Register below.</b></p>
                <form action="{{ route('popup_ad_Register') }}" method="POST" id="registerForm">
                    @csrf
                    <input type="text" style="display: block; padding: 7px 20px; border: 1px solid #ffe0e0; width: 100%;"
                        placeholder="Name" required name="name"><br>
                    <input type="email" style="display: block; padding: 7px 20px; border: 1px solid #ffe0e0; width: 100%;"
                        placeholder="Email" required name="email"><br>
                    <input type="password"
                        style="display: block; padding: 7px 20px; border: 1px solid #ffe0e0; width: 100%;"
                        placeholder="Phone Number" required name="phone_number"><br>
                    <button style="background-color: black; color:white; width:70%; padding:5px;"
                        type="submit">REGISTER</button>
                </form>
            </div>
        </div>
    @endif


    <script>
        // JavaScript to open the popup on page load
        window.onload = function () {
            document.getElementById('popup').style.display = 'flex';
        };

        // JavaScript to close the popup when clicking the close button
        document.getElementById('closeBtn').onclick = function () {
            document.getElementById('popup').style.display = 'none';
        };

        // Optional: Close the popup when clicking outside of the popup content
        window.onclick = function (event) {
            if (event.target == document.getElementById('popup')) {
                document.getElementById('popup').style.display = 'none';
            }
        };
    </script>


    <script src="{{ asset('js/jquery.js') }}"></script>
    <!--Revolution Slider-->
    <script src="{{ asset('plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('js/main-slider-script.js') }}"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>