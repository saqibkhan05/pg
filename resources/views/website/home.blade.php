@extends('layouts.home')

@section('body')
<!--Hero Slider-->
<section class="main-slider">

    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>

                <li data-description="Slide Description" data-easein="default" data-easeout="default"
                    data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1=""
                    data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                    data-slotamount="default" data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title"
                    data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                        data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                        src="images/main-slider/image-1.jpg">

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['560','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['-185','-180','-160','-125']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="title" style="text-shadow: 0 0 20px black;">Your Comfortable</div>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['560','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['-75','-70','-70','-55']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <h2 style="text-shadow: 0 0 20px black;">Home <br> Partner </h2>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['560','700','700','450']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['55','60','40','30']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="text" style="text-shadow: 0 0 20px black;">Where Relaxation and Convenience Unite in
                            Every Corner. Your
                            Perfect
                            Retreat Awaits, Where Everything Feels Just Right!</div>
                    </div>

                    <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['560','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['150','150','130','110']" data-x="['left','left','left','left']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="btns-box">
                            <a href="{{route('contact')}}" class="theme-btn btn-style-one">Contact us..</a>
                        </div>
                    </div>

                    <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-whitespace="normal"
                        data-hoffset="['15','15','15','15']" data-voffset="['-10','0','120','100']"
                        data-x="['right','right','right','right']" data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="sales-box">
                            <div class="inner-box">
                                <div class="price-title">Start From</div>
                                <div class="price">₹ 6,500/-</div>
                                <div class="stock">Available: Right Now</div>
                                <a href="#" class="detail">More Detail</a>
                            </div>
                        </div>
                    </div>

                </li>

                <li data-description="Slide Description" data-easein="default" data-easeout="default"
                    data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1=""
                    data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                    data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title"
                    data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                        data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                        src="images/main-slider/image-2.jpg">

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="none" data-whitespace="nowrap"
                        data-hoffset="['15','15','15','15']" data-voffset="['-185','-180','-160','-125']"
                        data-x="['right','right','right','right']" data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="title text-right">All Stayholic Properties</div>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="none" data-whitespace="nowrap"
                        data-hoffset="['15','15','15','15']" data-voffset="['-75','-70','-70','-55']"
                        data-x="['right','right','right','right']" data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <h2 class="text-right alternate">Exciting Offers <br> Available</h2>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['900','700','700','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['55','60','40','30']" data-x="['right','right','right','right']"
                        data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="text text-right">Discover unbeatable deals across all Stay Holic locations! Whether
                            <br>
                            you're looking for a cozy, affordable room or a premium living space
                        </div>
                    </div>

                    <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="none" data-whitespace="nowrap"
                        data-hoffset="['15','15','15','15']" data-voffset="['150','150','130','110']"
                        data-x="['right','right','right','right']" data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="btns-box text-right">
                            <a href="{{route('contact')}}" class="theme-btn btn-style-one">Contact us..</a>
                        </div>
                    </div>

                    <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-whitespace="normal"
                        data-hoffset="['15','15','15','15']" data-voffset="['-10','0','120','100']"
                        data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="sales-box">
                            <div class="inner-box">
                                <div class="price-title">Start From</div>
                                <div class="price">₹ 6,500/-</div>
                                <div class="stock">Available: Right Now</div>
                                <a href="#" class="detail">More Detail</a>
                            </div>
                        </div>
                    </div>

                </li>

                <li data-description="Slide Description" data-easein="default" data-easeout="default"
                    data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-index="rs-1690" data-masterspeed="default" data-param1=""
                    data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                    data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                    data-slotamount="default" data-thumb="images/main-slider/image-3.jpg" data-title="Slide Title"
                    data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                        data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                        src="images/main-slider/image-3.jpg">

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="none" data-whitespace="nowrap"
                        data-hoffset="['0','0','0','0']" data-voffset="['-145','-150','-160','-120']"
                        data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="title text-right">Enjoy All These</div>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="none" data-whitespace="nowrap"
                        data-hoffset="['0','0','0','0']" data-voffset="['-75','-60','-90','-50']"
                        data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <h2 class="uppercase">Amazing Amenities</h2>
                    </div>

                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-width="['900','700','700','550']"
                        data-responsive_offset="on" data-type="text" data-height="none" data-whitespace="normal"
                        data-hoffset="['0','0','0','0']" data-voffset="['45','50','20','0']"
                        data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="text text-center">At Stay Holic, we ensure that your living experience is nothing
                            short of exceptional. From high-speed Wi-Fi to fully equipped common areas,</div>
                    </div>

                    <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="none" data-whitespace="nowrap"
                        data-hoffset="['0','0','0','0']" data-voffset="['120','130','120','100']"
                        data-x="['center','center','center','center']" data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="btns-box text-right">
                            <a href="{{route('contact')}}" class="theme-btn btn-style-one">Contact us..</a>
                        </div>
                    </div>

                </li>

            </ul>
        </div>
    </div>
</section>

<!--Property Info Tabs-->
<section class="property-tabs-section">
    <div class="auto-container">
        <div class="inner-section">

            <!--Property Info Tabs-->
            <div class="property-search-tab">

                <!--Property Tabs-->
                <div class="property-tabs tabs-box">

                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#pg" class="tab-btn active-btn">PG</li>
                        <li data-tab="#hotel" class="tab-btn">Hotel</li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="pg">
                            <div class="content">
                                <!-- Property Form -->
                                <div class="property-search-form">
                                    <!--Form-->
                                    <form>

                                        <div class="row clearfix">

                                            <!--Form Group-->
                                            <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                                <label class="field-label">Location</label>
                                                <select class="custom-select-box">
                                                    <option>Search </option>
                                                    <option>Noida Sector-16</option>
                                                    <option>Noida Sector-20</option>
                                                    <option>Noida Sector-22</option>
                                                    <option>Okhla Phase-2</option>
                                                    <option>Govindpuri</option>
                                                    <option>Shakti Khand 1, Indirapuram</option>
                                                </select>
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                                <label class="field-label">Room Type</label>
                                                <select class="custom-select-box">
                                                    <option>Search</option>
                                                    <option>Basic</option>
                                                    <option>Premium</option>
                                                    <option>Luxury</option>
                                                </select>
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                                <label class="field-label">Occupancy</label>
                                                <select class="custom-select-box">
                                                    <option>Search</option>
                                                    <option>Single Bed Occupancy</option>
                                                    <option>Double Bed Occupancy</option>
                                                    <option>Triple Bed Occupancy</option>
                                                </select>
                                            </div>


                                            <!--Form Group-->
                                            <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                                <label class="field-label empty">&ensp;</label>
                                                <a class="theme-btn search-btn" type="submit"
                                                    name="submit-form">Search</a>
                                            </div>

                                        </div>

                                    </form>

                                </div>
                                <!--End Form -->
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="hotel">
                            <div class="content">

                                <!-- Property Search Form -->
                                <div class="property-search-form">
                                    <!--Comment Form-->
                                    <form method="post" action="pg.php">

                                        <div class="row clearfix">

                                            <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                                <label class="field-label">Location</label>
                                                <select class="custom-select-box">
                                                    <option>Search </option>
                                                    <option>Noida Sector-16</option>
                                                    <option>Noida Sector-20</option>
                                                    <option>Noida Sector-22</option>
                                                    <option>Okhla Phase-2</option>
                                                    <option>Govindpuri</option>
                                                    <option>Shakti Khand 1, Indirapuram</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                                <label class="field-label">Check-in</label>
                                                <input
                                                    style="display: block; padding: 7px 20px; border: 1px solid #ffe0e0; width: 100%;"
                                                    type="date">
                                            </div>


                                            <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                                <label class="field-label">Check-out</label>
                                                <input
                                                    style="display: block; padding: 7px 20px; border: 1px solid #ffe0e0; width: 100%;"
                                                    type="date">
                                            </div>

                                            <!--Form Group-->
                                            <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                                <label class="field-label">&ensp;</label>
                                                <a class="theme-btn search-btn" type="submit"
                                                    name="submit-form">Search</a>
                                            </div>

                                        </div>

                                    </form>

                                </div>
                                <!--End Property Form -->

                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

{{-- Website intro --}}
<section>
    <div class="container">
        <h3 class="montserrat" style="font-size: 4rem; font-weight: 800;">More than just a place to
            stay. </h3>
        <h4 class="montserrat">Whether it's about catching up on sleep or indulging in other pleasures, we'll give
            you plenty of options to choose from!</h4>
        <hr width="70%">

        <div class="row">
            <div class="col-md-4">
                <video controls width="100%">
                    <source src="{{ asset('video/1.mp4') }}" type="video/mp4">
                </video>
                <h3 class="v_h montserrat text-center">Single Occupancy</h3>
            </div>
            <div class="col-md-4">
                <video controls width="100%">
                    <source src="{{ asset('video/2.mp4') }}" type="video/mp4">
                </video>
                <h3 class="v_h montserrat text-center">Double Occupancy</h3>
            </div>
            <div class="col-md-4">
                <video controls width="100%">
                    <source src="{{ asset('video/3.mp4') }}" type="video/mp4">
                </video>
                <h3 class="v_h montserrat text-center ">Triple Occupancy</h3>
            </div>
        </div>

        <div style="margin-top: 100px"></div>
        <div style="margin-top: 100px"></div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/home/1.png') }}" alt="">
            </div>
            <div class="col-md-6">
                <div style="margin-top: 100px"></div>
                <h3 class="montserrat" style="font-size: 4rem; font-weight: 800; line-height: 1;">Begin living your
                    best</h3>
                <h2 class="montserrat" style="font-size: 3rem; font-weight: 800; color:black;">Beyond four walls and a
                    Roof</h2>
                <hr>
                <p>Bring along a box filled with hopes, dreams, and ambitions, as well as your personal belongings.
                    We've got everything else covered—furniture, appliances, and food.</p>
            </div>
        </div>

        <div style="margin-top: 100px"></div>
        <div class="row">

            <div class="col-md-6">
                <div style="margin-top: 100px"></div>
                <h3 class="montserrat" style="font-size: 5rem; font-weight: 800; line-height: 1;">Find a room</h3>
                <h2 class="montserrat" style="font-size: 3rem; font-weight: 800; color:black;">with room for
                    everything.
                </h2>
                <hr>
                <p>You have more important things to focus on than doing laundry, tidying up your space, or preparing
                    meals. That's why our professional team is here to take care of all these tasks for you, so you can
                    spend your time on what truly matters. </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/home/2.png') }}" alt="">
            </div>
        </div>

        <div style="margin-top: 100px"></div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/home/3.png') }}" alt="">
            </div>
            <div class="col-md-6">
                <div style="margin-top: 100px"></div>
                <h3 class="montserrat" style="font-size: 4rem; font-weight: 800; line-height: 1;">Indulge in Healthy
                </h3>
                <h2 class="montserrat" style="font-size: 2rem; font-weight: 800; color:black;">Homey Flavors with a
                    Local Twist</h2>
                <hr>
                <p>Instead, come prepared with a hearty appetite for our delicious and healthy meals, which are crafted
                    with a local flair. Each dish is designed to not only tantalize your taste buds but also evoke the
                    comforting flavors of home, making every meal a delightful and nostalgic experience.</p>
            </div>
        </div>

    </div>
</section>

<!-- Gallery PG -->
<section class="gallery-section">
    <div class="container ">
        <hr>
        <h3 class="montserrat" style="font-size: 4rem; font-weight: 800; line-height: 1;">Exciting Offers Available at
            All Stay Holic Properties
        </h3>
        <h2 class="montserrat" style="font-size: 2rem; font-weight: 800; color:black;">Discover unbeatable deals across
            all Stay Holic locations! </h2>
        <div class="row">
            <div class="col-md-12">
                <img width="100%" src="{{asset('img/home/gallery/1.jpg')}}" alt="">
            </div>
        </div>
    </div>

</section>

<!-- Properties PG -->
<section class="featured-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h3 class="montserrat" style="font-size: 2.5rem; font-weight: 800;">Our PG For Girls and Boys</h3>
            <p class="text-center">At Stay Holic, we ensure that your living experience is nothing short of exceptional. </p>
            <div class="separator"></div>
        </div>

        <div class="three-item-carousel owl-carousel owl-theme">

            <!--Featured Block-->
            <div class="featured-block">
                <div class="inner-box" style="box-shadow: 3px 6px 4px 0px #959595b5; border-radius: 0px 50px;">
                    <div class="image">
                        <a href=""><img class="" src="{{ asset('img/pg/1.jpeg') }}" alt="" /></a>
                        <div class="sale">PG</div>
                        <a href="#" class="wishlist"><span class="fa fa-heart"></span></a>
                    </div>

                    <div class="lower-content">

                        <div class="upper-box" style="padding: 15px;">
                            <h2><a>Cozy Corner PG</a></h2>
                            <h5 style="color:black"><b>( Single Occupancy )</b></h5>
                            <div class="location">Indirapuram </div>
                            
                        </div>

                        <div class="lower-box clearfix" style="border-radius: 0px 0px 0px 50px;">
                            <div class="pull-left">
                                <ul>
                                    <li><span class="icon flaticon-bed-1"></span>01</li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <ul>
                                    <li><span class="icon flaticon-squares"></span><b>Stayholic</b></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Featured Block-->
            <div class="featured-block">
                <div class="inner-box" style="box-shadow: 3px 6px 4px 0px #959595b5; border-radius: 0px 50px;">
                    <div class="image">
                        <a href=""><img class="" src="{{ asset('img/pg/2.jpeg') }}" alt="" /></a>
                        <div class="sale">PG</div>
                        <a href="#" class="wishlist"><span class="fa fa-heart"></span></a>
                    </div>

                    <div class="lower-content">

                        <div class="upper-box" style="padding: 15px;">
                            <h2><a>Cozy Corner PG</a></h2>
                            <h5 style="color:black"><b>( Double Occupancy )</b></h5>
                            <div class="location">Indirapuram </div>
                            
                        </div>

                        <div class="lower-box clearfix" style="border-radius: 0px 0px 0px 50px;">
                            <div class="pull-left">
                                <ul>
                                    <li><span class="icon flaticon-bed-1"></span>02</li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <ul>
                                    <li><span class="icon flaticon-squares"></span><b>Stayholic</b></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Featured Block-->
            <div class="featured-block">
                <div class="inner-box" style="box-shadow: 3px 6px 4px 0px #959595b5; border-radius: 0px 50px;">
                    <div class="image">
                        <a href=""><img class="" src="{{ asset('img/pg/3.png') }}" alt="" /></a>
                        <div class="sale">PG</div>
                        <a href="#" class="wishlist"><span class="fa fa-heart"></span></a>
                    </div>

                    <div class="lower-content">

                        <div class="upper-box" style="padding: 15px;">
                            <h2><a>Cozy Corner PG</a></h2>
                            <h5 style="color:black"><b>( Triple Occupancy )</b></h5>
                            <div class="location">Indirapuram </div>
                            
                        </div>
                        <div class="lower-box clearfix" style="border-radius: 0px 0px 0px 50px;">
                            <div class="pull-left">
                                <ul>
                                    <li><span class="icon flaticon-bed-1"></span>03</li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <ul>
                                    <li><span class="icon flaticon-squares"></span><b>Stayholic</b></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- mobile app --}}
<section class="full-cover-triangle">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div style="margin-top: 100px"></div>
                <h2 class="montserrat outlined-text" style="font-size: 5rem; font-weight: 800; line-height: 1;">Stay
                    Connected</h2>
                <h2 class="montserrat" style="font-size: 5rem; font-weight: 800; color:black;">Anytime, Anywhere</h2>
                <hr width="50%">
                <p>If you need assistance, want to file a complaint, or have suggestions for improvement, feel free to
                    reach out through the support and real-time feedback feature on the app. </p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('img/home/mobile.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

{{-- why us --}}
<section class="quality-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Image Column-->
            <div class="image-column col-md-5 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="image">
                        <img src="{{ asset('img/about.jpg') }}" alt="">
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=9810191518&text=Hello%20enquiry%20for%20Stay!"
                        class="theme-btn btn-style-three">Contact us<span class="icon fa fa-edit"></span></a>
                </div>
            </div>

            <!--Content Column-->
            <div class="content-column col-md-7 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <!--Sec Title-->
                    <div class="sec-title">
                        <h3 class="montserrat" style="font-size: 4rem; font-weight: 800;">Our Best Qualities</h3>
                        <h2 class="montserrat" style="font-size: 4rem; font-weight: 800;">Why Choose Stayholic</h2>
                        <div class="separator"></div>
                    </div>
                    <div class="text">Choose StayHolic PG Indirapuram for a comfortable and convenient living
                        experience tailored to students and working professionals. Our hostel offers spacious rooms,
                        delicious home-cooked meals, and reliable housekeeping services. Located in a prime area with
                        easy access to Delhi and Noida, you'll be surrounded by vibrant shopping, dining, and
                        entertainment options. Plus, with affordable pricing and all the modern amenities you need,
                        StayHolic PG provides a home-like atmosphere that ensures your stay is both enjoyable and
                        stress-free.
                    </div>
                    <div class="row clearfix">

                        <!--Quality Block-->
                        <div class="quality-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-block">
                                <div class="icon-box">
                                    <img style="width: 65%;" src="{{asset('img/icons/furnitures.png')}}" alt="">
                                </div>
                                <h3>Furniture</h3>
                                <div class="block-text">Looking Stayholic</div>
                            </div>
                        </div>

                        <!--Quality Block-->
                        <div class="quality-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-block">
                                <div class="icon-box">
                                    <img style="width: 65%;" src="{{asset('img/icons/quality.png')}}" alt="">
                                </div>
                                <h3>Best Quality</h3>
                                <div class="block-text">Looking Stayholic</div>
                            </div>
                        </div>

                        <!--Quality Block-->
                        <div class="quality-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-block">
                                <div class="icon-box">
                                    <img style="width: 65%;" src="{{asset('img/icons/restaurant.png')}}" alt="">
                                </div>
                                <h3>Food Service</h3>
                                <div class="block-text">Looking Stayholic</div>
                            </div>
                        </div>

                        <!--Quality Block-->
                        <div class="quality-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-block">
                                <div class="icon-box">
                                    <img style="width: 65%;" src="{{asset('img/icons/lighting.png')}}" alt="">
                                </div>
                                <h3>Power Backup</h3>
                                <div class="block-text">Looking Stayholic</div>
                            </div>
                        </div>

                        <!--Quality Block-->
                        <div class="quality-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-block">
                                <div class="icon-box">
                                    <img style="width: 65%;" src="{{asset('img/icons/house-keeping.png')}}" alt="">
                                </div>
                                <h3>House Keeping</h3>
                                <div class="block-text">Looking Stayholic</div>
                            </div>
                        </div>

                        <!--Quality Block-->
                        <div class="quality-block col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-block">
                                <div class="icon-box">
                                    <img style="width: 65%;" src="{{asset('img/icons/verified.png')}}" alt="">
                                </div>
                                <h3>Security</h3>
                                <div class="block-text">Looking Stayholic</div>
                            </div>
                        </div>

                    </div>
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

<!--Testimonial Section-->
<section class="testimonial-section" style="background-color: #545454;">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <div class="montserrat" style="font-size: 18px; color: white;"><b>Always within reach</b></div>
            <h2 class="montserrat" style="font-size: 5rem; font-weight: 800; line-height: 1; color: white;">What Client
                Says</h2>
            <div class="separator"></div>
        </div>

        <div class="two-item-carousel owl-carousel owl-theme">

            <!--Testimonial Block Two-->
            <div class="testimonial-block-two">
                <a href="https://g.co/kgs/rhF8DEK">
                    <img src="{{ asset('img/testimonials/1.png') }}" alt="">
                </a>
            </div>

            <div class="testimonial-block-two">
                <a href="https://g.co/kgs/zexD7EM">
                    <img src="{{ asset('img/testimonials/2.png') }}" alt="">
                </a>
            </div>

            <div class="testimonial-block-two">
                <a href="https://g.co/kgs/Yg9Z9jb">
                    <img src="{{ asset('img/testimonials/3.png') }}" alt="">
                </a>
            </div>


            <div class="testimonial-block-two">
                <a href="https://g.co/kgs/5VngPHc">
                    <img src="{{ asset('img/testimonials/4.png') }}" alt="">
                </a>
            </div>


            <div class="testimonial-block-two">
                <a href="https://g.co/kgs/fbqC8Ew">
                    <img src="{{ asset('img/testimonials/5.png') }}" alt="">
                </a>
            </div>


        </div>

    </div>
</section>

@endsection