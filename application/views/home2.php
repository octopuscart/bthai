<?php
$this->load->view('layout/header');
?>
<style>

    .revo-slider-emphasis-text {
        font-size: 64px;
        font-weight: 700;
        letter-spacing: -1px;
        font-family: 'Raleway', sans-serif;
        padding: 15px 20px;
        border-top: 2px solid #FFF;
        border-bottom: 2px solid #FFF;
    }

    .revo-slider-desc-text {
        font-size: 20px;
        font-family: 'Lato', sans-serif;
        width: 650px;
        text-align: center;
        line-height: 1.5;
    }

    .revo-slider-caps-text {
        font-size: 16px;
        font-weight: 400;
        letter-spacing: 3px;
        font-family: 'Raleway', sans-serif;
    }
    .tp-video-play-button { display: none !important; }

    .tp-caption { white-space: nowrap; }
    .heading-block:after {
        content: '';
        display: block;
        margin-top: 30px;
        width: 40px;
        border-top: 2px solid #fff;
    }

    .heading-block h3:after {
        content: '';
        display: block;
        margin-top: 30px;
        margin-bottom: 30px;
        /* width: 40px; */
        border-top: 2px solid #fff;
    }

    .iconlist li{
        border-bottom: 1px solid #000;
        border-bottom-style: dashed;
        margin-bottom: 10px;
    }

</style>

<section id="content">
    <section id="slider" class=" slider-element slider-parallax revslider-wrap full-screen clearfix">
        <div id="rev_slider_irestaurant_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="default-slider" style="padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
            <div id="rev_slider_irestaurant" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.4">
                <ul>    <!-- SLIDE  -->

                    <li class="dark" data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo base_url(); ?>assets/images/slider/clientsbackground3.jpg"   data-saveperformance="off"  data-title="Welcome to Baan Thai!">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo base_url(); ?>assets/images/slider/clientsbackground3.jpg"  alt=" Baanthai video_typing_cover"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-fade fadeout fullscreenvideo rs-background-video-layer"
                             data-forcerewind="on"
                             data-volume="mute"
                             data-videowidth="100%"
                             data-videoheight="100%"
                             data-videomp4="<?php echo base_url(); ?>assets/images/video2.mp4"
                             data-videopreload="preload"
                             data-videoloop="none"
                             data-forceCover="1"
                             data-aspectratio="16:9"
                             data-autoplay="true"
                             data-autoplayonlyfirsttime="false"
                             data-nextslideatend="true">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text uppercase"
                             data-x="center" data-hoffset="0"
                             data-y="top" data-voffset="235"
                             data-fontsize="['60','60','46','38']"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1000"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-textAlign="center"
                             data-endeasing="Power4.easeIn" style="z-index: 3; white-space: nowrap;"><img src="<?php echo base_url(); ?>assets/images/logo50.png" style="height: 50px;" alt=" Baanthai Baanthai Logo" /></div>

                        <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
                             data-x="center" data-hoffset="0"
                             data-y="top" data-voffset="400"
                             data-width="['650','650','480','360']"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1200"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-textAlign="center"
                             data-endeasing="Power4.easeIn" style="z-index: 3; max-width: 650px; white-space: normal;font-size: 20px;">Our menu is inspired by Siam cuisine specifically and we serve a variety of small plates, curries, fresh seafood, noodles, stir fries and vegetarian options, that are cooked with fresh herbs and spices.</div>

                        <div class="tp-caption customin ltl tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="top" data-voffset="503"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1350"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3;"><a href="<?php echo site_url('booknow'); ?>" class="button button-border button-white button-light button-large button-rounded tright nomargin hideonmobile"><span>Book Now</span><i class="icon-angle-right"></i></a></div>

                    </li>
                    <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo base_url(); ?>assets/images/slider/22.jpg" data-delay="12000"  data-saveperformance="off" data-title="Our rustic and stylish restaurant">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo base_url(); ?>assets/images/slider/22.jpg"  alt=" Baanthai kenburns1"  data-bgposition="left center" data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="150" data-scaleend="100" data-bgpositionend="right center">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption ltl tp-resizeme revo-slider-caps-text uppercase"
                             data-x="600"
                             data-y="215"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1000"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3;font-size: 20px;font-weight: bold;">Authentic Thai Cuisine in Hong Kong</div>

                        <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                             data-x="597"
                             data-y="230"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1200"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3; font-size: 60px;">Welcome to Baan Thai!</div>

                        <div class="tp-caption ltl tp-resizeme revo-slider-desc-text tleft"
                             data-x="600"
                             data-y="340"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1400"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3; max-width: 550px; white-space: normal;">Our rustic and stylish restaurant is located in the heart of Central along Wyndham Street and showcases the signature flavors of authentic Thai cuisine.</div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="slidedown" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo base_url(); ?>assets/images/slider/33.jpg" data-delay="10000"  data-saveperformance="off"  data-title="Special Taste Of Thailand">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo base_url(); ?>assets/images/slider/33.jpg"  alt=" Baanthai kenburns6"  data-bgposition="center top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="150" data-scaleend="100" data-bgpositionend="center center">
                        <!-- LAYERS -->


                        <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                             data-x="-3"
                             data-y="230"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1200"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3; color: #fff; font-size: 60px;">Special Taste Of Thailand</div>

                        <div class="tp-caption ltl tp-resizeme revo-slider-desc-text tleft"
                             data-x="0"
                             data-y="340"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1400"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3; color: #fff; max-width: 550px; white-space: normal;">All our chefs are Thai and therefore ensure that you enjoy that special taste of Thailand when dining at our restaurant.</div>


                    </li>
                    <!-- SLIDE  -->
                    <li class="dark" data-transition="slideleft" data-slotamount="1" data-masterspeed="1500" data-thumb="<?php echo base_url(); ?>assets/images/slider/11.jpg" data-delay="12000"  data-saveperformance="off"  data-title="Thai dining in Hong Kong">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo base_url(); ?>assets/images/slider/11.jpg"  alt=" Baanthai kenburns3"  data-bgposition="left top" data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="130" data-bgpositionend="right bottom">
                        <!-- LAYERS -->


                        <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                             data-x="center"
                             data-y="330"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1200"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3;">Thai dining in Hong Kong</div>

                        <div class="tp-caption ltl tp-resizeme revo-slider-desc-text"
                             data-x="center"
                             data-y="430"
                             data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;s:800;e:Power4.easeOutQuad;"
                             data-speed="800"
                             data-start="1400"
                             data-easing="easeOutQuad"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.01"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn" style="z-index: 3; max-width: 650px; white-space: normal;text-align: center">Located in the busy commercial and nightlife section of Wyndham Street in Central, here at Baan Thai Restaurant.</div>

                    </li>
                </ul>
            </div>
        </div>

    </section>
    <section id="content">

        <div class="content-wrap" style="padding: 0px;">

            <div class="row clearfix common-height">


                <div class="col-lg-6 center col-padding" style="background-color: #fff; height: 708px;">
                    <div>
                        <div class="heading-block nobottomborder">
                            <h3>Welcome to Baan Thai</h3>
                        </div>


                        <p class="lead nobottommargin">
                            Welcome to Baan Thai! Our rustic and stylish restaurant is located in the heart of Central along Wyndham Street and showcases the signature flavors of authentic Thai cuisine. Our menu is inspired by Siam cuisine specifically and we serve a variety of small plates, curries, fresh seafood, noodles, stir fries and vegetarian options, that are cooked with fresh herbs and spices. All our chefs are Thai and therefore ensure that you enjoy that special taste of Thailand when dining at our restaurant.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 center col-padding" style="background: url(<?php echo base_url(); ?>assets/images/hotel.jpg) center center / cover no-repeat; height: 708px;">
                    <div>&nbsp;</div>
                </div>

            </div>





            <div class="section  " style="margin: 0;background: url(<?php echo base_url(); ?>assets/images/woodback.jpg) center;
                 padding: 20px;">
                <div class="container clearfix">

                    <div class="col_half nobottommargin center">

                        <img src="<?php echo base_url(); ?>assets/images/food11.png" alt=" Baanthai Image" data-animate="fadeInLeft">

                    </div>

                    <div class="col_half nobottommargin col_last">

                        <div class="heading-block" style="color: white;padding-top: 40px;margin-bottom: 0px;">

                            <h3 style="color: white;font-size: 25px;font-weight: 400px;">Authentic Thai Cuisine in Hong Kong</h3>
                            <span style="color: white;">
                                We also offer an extensive cocktail and drinks menu to either compliment your meal or simply to enjoy with a snack at happy hour or after dinner drinks. We are easily accessed by public transport, whether coming via the MTR, bus routes or taxi, so come and pay us a visit and sample some delicious Thai cuisine here at Baan Thai Hong Kong!                                
                            </span>

                        </div>




                        <a href="<?php echo site_url('contact-us'); ?>" class="button button-border button-large button-rounded topmargin-sm noleftmargin" target="_blank" style="color: white;    border: 2px solid #fff;">Visit Us</a>

                    </div>

                </div>
            </div>



            <div class="row clearfix common-height">


                <div class="col-lg-6 center col-padding" style="background-color: #fff; height: 708px;">
                    <div>



                        <p class="lead nobottommargin text-left">
                            Check out our Christmas promotion menu <a style="color: #0000ff;" href="http://www.baanthai.hk/wp-content/uploads/2018/12/jpg2pdf-6.pdf" target="_blank" rel="noopener">here!</a>!<br/>

                            Located in the busy commercial and nightlife section of Wyndham Street in Central, here at Baan Thai Restaurant we not only cater to regular lunch goers and evening diners seeking exceptional Thai food, but we also host private parties, group bookings and offer external catering.
                            <br/>
                            Whether you need a medium sized space for your office party, annual dinner, social committee gathering, wedding or graduation party, we have the space and dining packages to suit your needs.
                            <br/>
                            Our tailor-made or general packages suit all tastes and requirements. We offer a range of choice from simple drinks and snacks options for a small group, to full service 3-course dinners or Thai buffets.
                            <br/>
                            Contact us for more details: info@baanthai.hk
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 center col-padding" style="background: url(<?php echo base_url(); ?>assets/images/slider/33.jpg) center center / cover no-repeat; height: 708px;">
                    <div>&nbsp;</div>
                </div>

            </div>



            <?php
            $this->load->view('clientReviewBlock');
            ?>




            <div class="container clearfix" style="    padding: 60px 0px;">

                <div class="col_one_fourth nobottommargin">

                    <div class="fancy-title title-border">
                        <h4>Opening Hours</h4>
                    </div>

                    <p>We serve you all days in a week.</p>

                    <ul class="iconlist nobottommargin">
                        <li><i class="icon-time color"></i> <strong>Mondays-Wednesday:</strong><br/> 12:00 PM to 12:00 AM</li>
                        <li><i class="icon-time color"></i> <strong>Thursday - Saturdays:</strong><br/> 12:00 PM to 02:00 AM</li>
                        <li><i class="icon-time text-danger"></i> <strong>Sundays:</strong> <br/>12:00 PM to 12:00 AM</li>
                    </ul>

                </div>

                <div class="col_one_fourth nobottommargin">

                    <div class="fancy-title title-border">
                        <h4>Our Menu</h4>
                    </div>

                    <p>Here at Baan Thai Restaurant we not only cater to regular lunch goers and evening diners seeking exceptional Thai food, but we also host private parties, group bookings and offer external catering.</p>

                    <a href="<?php echo site_url("our-menu"); ?>" class="button button-rounded button-dark noleftmargin"><i class="icon-file-alt"></i> Browse Menu</a>

                </div>

                <div class="col_half nobottommargin col_last hideonmobile">

                    <div class="fancy-title title-border">
                        <h4>Gallery</h4>
                    </div>

                    <div class="masonry-thumbs grid-4 clearfix" data-lightbox="gallery" style="width: 100.3%;">

                        <?php
                        for ($i = 1; $i <= 8; $i++) {
                            ?>
                            <a href="<?php echo base_url(); ?>assets/images/food/<?php echo $i; ?>.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?php echo base_url(); ?>assets/images/food/<?php echo $i; ?>.jpg" alt=" Baanthai Gallery Thumb 1" data-animate="zoomIn"></a>

                        <?php } ?>

                    </div>

                </div>

            </div>





        </div>

    </section><!-- #content end -->
</section>

<?php
$this->load->view('layout/footer');
?>
<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script src="<?php echo base_url(); ?>assets/theme/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="<?php echo base_url(); ?>assets/theme/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

<script>

    var tpj = jQuery;
    tpj.noConflict();

    tpj(document).ready(function () {

        jQuery("#appointmentmodel").modal("show");

        var apiRevoSlider = tpj('#rev_slider_irestaurant').show().revolution(
                {
                    sliderType: "standard",
                    jsFileLocation: "<?php echo base_url(); ?>assets/theme/include/rs-plugin/js/",
                    dottedOverlay: "none",
                    sliderLayout: "fullscreen",
                    delay: 26000,
                    gridwidth: 1140,
                    gridheight: 720,
                    hideThumbs: 200,

                    thumbWidth: 100,
                    thumbHeight: 50,
                    thumbAmount: 5,

                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        thumbnails: {
                            style: "hesperiden",
                            enable: true,
                            width: 100,
                            height: 50,
                            min_width: 100,
                            wrapper_padding: 5,
                            wrapper_color: "#ffffff",
                            wrapper_opacity: "0.5",
                            tmp: '<span class="tp-thumb-image"></span><span class="tp-thumb-title">{{title}}</span>',
                            visibleAmount: 5,
                            hide_onmobile: false,
                            hide_onleave: false,
                            direction: "horizontal",
                            span: false,
                            position: "inner",
                            space: 5,
                            h_align: "right",
                            v_align: "bottom",
                            h_offset: 20,
                            v_offset: 50
                        }
                    },

                    touchenabled: "on",
                    onHoverStop: "on",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,
                    parallaxBgFreeze: "on",
                    parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                    keyboardNavigation: "off",

                    navigationHAlign: "center",
                    navigationVAlign: "bottom",
                    navigationHOffset: 0,
                    navigationVOffset: 20,

                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,

                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,

                    shadow: 0,
                    fullWidth: "off",
                    fullScreen: "on",

                    spinner: "spinner4",

                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,

                    shuffle: "off",

                    autoHeight: "off",
                    forceFullWidth: "off",

                    hideThumbsOnMobile: "off",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "off",
                    hideArrowsOnMobile: "off",
                    hideThumbsUnderResolution: 0,

                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                });

    });

</script><!-- END REVOLUTION SLIDER -->



<script>

    var tpj = jQuery;
    tpj.noConflict();

    tpj(document).ready(function () {
        jQuery(jQuery("i.ion-ios-create").parents("li")[0]).addClass("active");

        var apiRevoSlider = tpj('#rev_slider_irestaurantm').show().revolution(
                {
                    sliderType: "standard",
                    jsFileLocation: "<?php echo base_url(); ?>assets/theme/include/rs-plugin/js/",
                    dottedOverlay: "none",
                    sliderLayout: "fullscreen",
                    delay: 26000,
                    gridwidth: 1140,
                    gridheight: 720,
                    hideThumbs: 200,

                    thumbWidth: 100,
                    thumbHeight: 50,
                    thumbAmount: 5,

                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        thumbnails: {
                            style: "hesperiden",
                            enable: true,
                            width: 100,
                            height: 50,
                            min_width: 100,
                            wrapper_padding: 5,
                            wrapper_color: "#ffffff",
                            wrapper_opacity: "0.5",
                            tmp: '<span class="tp-thumb-image"></span><span class="tp-thumb-title">{{title}}</span>',
                            visibleAmount: 5,
                            hide_onmobile: false,
                            hide_onleave: false,
                            direction: "horizontal",
                            span: false,
                            position: "inner",
                            space: 5,
                            h_align: "right",
                            v_align: "bottom",
                            h_offset: 20,
                            v_offset: 50
                        }
                    },

                    touchenabled: "on",
                    onHoverStop: "on",

                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,
                    parallaxBgFreeze: "on",
                    parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                    keyboardNavigation: "off",

                    navigationHAlign: "center",
                    navigationVAlign: "bottom",
                    navigationHOffset: 0,
                    navigationVOffset: 20,

                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,

                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,

                    shadow: 0,
                    fullWidth: "off",
                    fullScreen: "on",

                    spinner: "spinner4",

                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,

                    shuffle: "off",

                    autoHeight: "off",
                    forceFullWidth: "off",

                    hideThumbsOnMobile: "off",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "off",
                    hideArrowsOnMobile: "off",
                    hideThumbsUnderResolution: 0,

                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                });

    });

</script><!-- END REVOLUTION SLIDER -->