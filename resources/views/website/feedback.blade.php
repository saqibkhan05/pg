@extends('layouts.auth')

@section('body')
{{-- --}}

<!--Contact Page Section-->
<section class="contact-page-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <div class="title">At Stay Holic, we're always striving to improve and create the best living experience for
                our residents. Your feedback plays a crucial role in helping us achieve that. Whether you have
                suggestions, compliments, or ideas for how we can do better, we want to hear from you!
            </div>
            <h2>We Value Your Feedback! </h2>
            <div class="separator"></div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <div class="contact-form">
                    <form method="post" action="sendemail.php" id="contact-form">
                        <div class="row clearfix">
                            <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                <input type="text" name="username" value="" placeholder="Name" required="">
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea name="message" placeholder="Feedback"></textarea>
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