@extends('layouts.auth')

@section('body')
{{-- --}}

<!--Contact Page Section-->
<section class="contact-page-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <div class="title">Feel free to get in touch, and let’s make your Stay Holic experience the best it can be!
            </div>
            <h2>We're Here for You!</h2>
            <div class="separator"></div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14005.761390052807!2d77.3721965!3d28.6465309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb776ca478d5%3A0x5afb0d95cbce7114!2sStayHolic%20PG%20Indirapuram%20for%20Boys%20and%20Girls!5e0!3m2!1sen!2sin!4v1725318235400!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <form method="post" action="sendemail.php" id="contact-form">
                        <div class="row clearfix">
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="username" value="" placeholder="Name" required="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="email" value="" placeholder="Email" required="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="subject" value="" placeholder="Subject" required="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" value="" placeholder="Phone No." required="">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" placeholder="Massage"></textarea>
                            </div>

                            <div class="form-group text-center col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="theme-btn btn-style-three">Send Now <span
                                        class="icon flaticon-send-message-button"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Contact Form-->

        <!--End Contact Form-->

    </div>
</section>
<!--End Contact Page Section-->
@endsection