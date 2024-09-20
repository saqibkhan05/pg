@extends('layouts.auth')

@section('body')
{{-- --}}

<!--Contact Page Section-->
<section class="contact-page-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">

            <h2>Stay Holic Food Menu</h2>
            <p>At Stay Holic, we understand the importance of nutritious, delicious meals to fuel your busy student
                life. Our diverse menu is designed to cater to a variety of tastes and dietary preferences, ensuring
                that every meal is both satisfying and wholesome.</p>
            <div class="separator"></div>
        </div>

        <!-- Breakfast  -->
        <div class="row">
            <div class="col-md-6">
                <img width="100%" src="{{asset('img/0.jpg')}}" alt="">
            </div>
            <div class="col-md-6">
                <h3 class="montserrat" style="font-size: 4rem; font-weight: 800;">Breakfast </h3>
                <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse;">
                    <tr>
                        <th style="border: 1px solid; padding:5px 10px;">Day</th>
                        <th style="border: 1px solid; padding:5px 10px;">Menu</th>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Mon</td>
                        <td style="border: 1px solid; padding:5px 10px;">Sabudana Kichdi</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Tue</td>
                        <td style="border: 1px solid; padding:5px 10px;">Upma</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Wed</td>
                        <td style="border: 1px solid; padding:5px 10px;">Aloo Paratha</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Thu</td>
                        <td style="border: 1px solid; padding:5px 10px;">Ajwain Paratha with Jeera Aloo</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Fri</td>
                        <td style="border: 1px solid; padding:5px 10px;">Pasta</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Sat</td>
                        <td style="border: 1px solid; padding:5px 10px;">Kulcha Chole</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Sun</td>
                        <td style="border: 1px solid; padding:5px 10px;">Paneer Pyaaj Paratha with Lehsun Chutney</td>
                    </tr>
                </table>

                <div style="margin-top: 50px"></div>
            </div>
        </div>

        <div style="margin-top: 50px"></div>
        <hr>
        <div style="margin-top: 50px"></div>

        <!-- Double Sharing Room -->
        <div class="row">
            <div class="col-md-6">
                <h3 class="montserrat" style="font-size: 4rem; font-weight: 800;">Dinner</h3>
                <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse;">
                    <tr>
                        <th style="border: 1px solid; padding:5px 10px;">Day</th>
                        <th style="border: 1px solid; padding:5px 10px;">Menu</th>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Mon</td>
                        <td style="border: 1px solid; padding:5px 10px;">Malka Dal Tadka / Methi Aloo</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Tue</td>
                        <td style="border: 1px solid; padding:5px 10px;">Rajma / Pumpkin</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Wed</td>
                        <td style="border: 1px solid; padding:5px 10px;">Dum Aloo / Mashoor Dal Tadka</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Thu</td>
                        <td style="border: 1px solid; padding:5px 10px;">Soyabean Aloo / Baigun Bharta</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Fri</td>
                        <td style="border: 1px solid; padding:5px 10px;">Veg Kofta / Beans Aloo</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Sat</td>
                        <td style="border: 1px solid; padding:5px 10px;">Chole / Masala Aloo</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid; padding:5px 10px;">Sun</td>
                        <td style="border: 1px solid; padding:5px 10px;">Matar Paneer or Kadhai Paneer / Mix Veg + Sweet
                            Dish</td>
                    </tr>
                </table>

            </div>

            <div class="col-md-6">
                <img width="100%" src="{{asset('img/0.jpg')}}" alt="">
            </div>

        </div>

        <div style="margin-top: 50px"></div>
        <hr>
        <div style="margin-top: 50px"></div>

        <h3 class="montserrat text-center" style="font-size: 4rem; font-weight: 800;">Dietary Preferences and Special
            Requests</h3>
        <p style="color:black" class="text-center"><b>We cater to a variety of dietary needs, including vegetarian,
                vegan, gluten-free, and more. Our team is committed to providing fresh, balanced meals that support your
                well-being, ensuring every student finds something they love on the menu.!</b></p>
        <p style="color:black" class="text-center"><b>Whether you're looking for a hearty meal to power through study
                sessions or a light, healthy option, Stay
                Holic’s food menu has something for everyone. Enjoy delicious meals without stepping out!</b></p>

    </div>
</section>
<!--End Contact Page Section-->
@endsection