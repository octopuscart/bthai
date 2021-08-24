<style>
    .dark .spost, .dark .mpost {
        border-top-color: rgb(255, 255, 255);
    }
    footer .social-icon.si-small {
        width: 39px;
        height: 34px;
        font-size: 29px;
        line-height: 34px !important;
        margin-left: 10px;
    }
    .dark .widget h4 {
        color: #fff;
    }
    .dark #footer .social-icon.si-borderless, #footer.dark .social-icon.si-borderless {
        color: #fffdfd !important;
    }
    .dark .spost .entry-title h4 a, .dark .mpost .entry-title h4 a {
        color: #fff;
    }
    .subscribmodel{
        background: #C6FFDD;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #f7797d, #FBD786, #C6FFDD);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #f7797d, #FBD786, #C6FFDD); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
</style>

<div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-labelledby="Subscribe" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content subscribmodel">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subscribe us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2>
                    Subscribe to our newsletter and get updates on Baanthai news, promotions and offers !                       </h2>

                <div class="widget-subscribe-form-result1"></div>
                <form  action="<?php echo site_url("subscribe"); ?>" role="form" method="post" class="nobottommargin">
                    <div class="input-group divcenter">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="icon-email2"></i></div>
                        </div>

                        <input type="email" id="widget-subscribe-form-email2" name="email" class="form-control required email" placeholder="Enter your Email">

                    </div>
                    <hr/>

                    <div class="input-group divcenter">
                        <div class="input-group-prepend">
                            <img src="<?php echo site_url("Api/createCaptha/subscribe") ?>" id='captchaimg' alt="Baanthai Captcha Image" style="height: fit-content;" /> 
                        </div>
                        <input type="text" id="widget-subscribe-form-email2" name="captcha" class="form-control required email" required=""  placeholder="Type Here">
                        <div class="input-group-append">
                            <button class="btn btn-success" name="submit" type="submit">Subscribe</button>
                        </div>
                    </div>
                    <small class='details'>Can't read the image? click <a hreflang="en-us"  href="#" onclick="refreshCaptcha()">here</a> to refresh</small>

                </form>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" ng-if="promotionImage.img != ''" id="promotionModel" tabindex="-1" role="dialog" aria-labelledby="Subscribe" aria-hidden="true">
    <div class="modal-dialog modal-lg"  role="document">
        <div class="modal-content subscribmodel">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <a href='{{promotionImage.link}}'>
                    <img alt="Baanthai Promotion" src="<?php echo base_url(); ?>assets/promotion/{{promotionImage.img}}.jpg">
                </a>
            </div>

        </div>
    </div>
</div>



<div class="row clearfix common-height" style="margin: 0;padding: 20px;">


    <div class="owl-carousel owl-theme">
        <?php
        $promotion = [12, 99, 9, 11, 10, 88, 1, 2, 8];
        $promotionlink = array(
            "9" => array("type" => "img", "link" => site_url("aboutus"),),
            "99" => array("type" => "img", "link" => "https://www.thestandard.com.hk/section-news/section/12/228992/Baan-Thai:-Bringing-authentic-Thai-flavours-to-Hong-Kong",),
            "12" => array("type" => "img", "link" => site_url("aboutus")),
//            "11" => array("type" => "img", "link" => site_url("aboutus")),
            "10" => array("type" => "img", "link" => site_url("aboutus")),
            "88" => array("type" => "img", "link" => site_url("/")),
            "1" => array("type" => "img", "link" => site_url("loyalprogram")),
            "8" => array("type" => "img", "link" => site_url("aboutus")),
            "2" => array("type" => "img", "link" => site_url("privateparties")),
            "5" => array("type" => "video", "link" => site_url("privateparties")),
        );

        foreach ($promotionlink as $key => $value) {
            ?>
            <?php if ($value["type"] == "img") { ?>
                <div class="item" data-toggle="modal" data-target="#promotionModel" style="cursor: pointer;" ng-click="selectePromotionImage('<?php echo $key; ?>', '<?php echo $value["link"]; ?>')">
                    <div class="thumbnail">
                        <img alt="Baanthai Promotion <?php echo $key; ?>" src="<?php echo base_url(); ?>assets/promotion/<?php echo $key; ?>.jpg"/>
                    </div>
                </div>
                <?php
            } else {
                ?>  <div class="item"  style="cursor: pointer;" >
                    <div class="thumbnail">
                        <iframe      height="316px" width="432px" src="https://www.youtube.com/embed/4ZxARSR_yus" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <?php
            }
            ?>
            <?php
        }
        ?>

    </div>

</div>


<div class="row clearfix common-height" style="margin: 0;padding: 20px;background: url('<?php echo base_url(); ?>assets/images/woodback.jpg') repeat fixed;">
    <div class="col-md-4">
        <div class="pomotion">
            <h2>Not a Member Yet?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="promotionicon">
                        <img src="<?php echo base_url(); ?>assets/icons/group.svg" alt="Baanthai group">
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        Our rustic and stylish restaurants are located in the heart of Central along Wyndham Street, as well as in Western District next to HKU Station, with both restaurants showcasing the signature flavours of authentic Thai cuisine.

                    </p>
                    <a hreflang="en-us"  href="<?php echo site_url('loyalprogram'); ?>">Enroll Here</a>
                </div>
            </div>





        </div>
    </div>
    <div class="col-md-4">
        <div class="pomotion">
            <h2>Subscribe</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="promotionicon">
                        <img src="<?php echo base_url(); ?>assets/icons/bell.svg" alt="Baanthai bell">
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        Each month, Baanthai Restaurant sends out a simple and brief email newsletter which up-dates our customers on news, promotions and offers. If you would like to receive the newsletter, simply click here and just provide us with you name, contact number and email address.
                    </p>

                    <a hreflang="en-us"  href="#"  data-toggle="modal" data-target="#subscribe">Click Here</a>

                </div>
            </div>

        </div>
    </div>

    <div class="col-md-4">
        <div class="pomotion">
            <h2>Private Parties/Catering</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="promotionicon">
                        <img src="<?php echo base_url(); ?>assets/icons/food.svg" alt="Baanthai Food">
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        Find out about our latest promotions, special offers, packages and discounts. You are also welcome to send us an enquiry about offers, group packages, private parties and tailor made menus.

                        For party package and party event or private catering write us at info@baanthai.hk
                    </p>
                    <a hreflang="en-us"  href="<?php echo site_url('privateparties'); ?>">Click Here</a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
$mobilecheck = $this->session->userdata('checkmobile');
$keywordsList = [
    "thaifood",
    "baanthai",
    "thaifoodhongkong",
    "bestthaifoodinhongkong",
    "Bestthairestaurantinhongkong",
    "baanthaifoodinhongkong",
    "topthairestaurantinhongkong",
    "topthaifoodinhongkong",
    "mostpopularthaifoodinhonkong",
    "thaicuisine",
    "thaicuisineonline",
    "homedeliverythaifood",
    "homedeliverythaicuisine",
    "onlinethaifood",
    "orderonlinethaifood",
    "specialthaifood",
    "purethaifoodinhongkong",
    "purethaifood",
    "thaifoodnearme",
    "Baanthaicentral",
    "Thaifoodinhoongkong",
    "baanthaimenu",
    "baanthairestaurant",
    "baanthai",
    "takeawaythaifood",
    "popularthaifood",
    "thaifooddishes",
    "thaidishes",
    "lowcostthaifood",
    "top10thairestaurantinhongkong",
    "top5thairestaurantinhongkong",
    "thaifoodinlankawifong",
    "bestthaifoodinlankawifong"
];
?>

<!-- Footer
                ============================================= -->
<footer id="footer" class="dark" style="background: url('<?php echo base_url(); ?>assets/images/woodback.jpg') repeat fixed; ">
    <div class="" >
        <?php
        if ($mobilecheck) {
            
        } else {
            ?>
            <div class="google-map-area">
                <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA319S-ZyrzBQNhbYmjGedtOfl8wm6tY0Y&v=3.exp'></script><div style='overflow:hidden;height:338px;width:100%;'>
                    <div id='gmap_canvas' style='height:338px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small>

                        </small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                </div><script type='text/javascript'>
                        function init_map() {
                            //22.2968045,114.1687551  22.2969039,114.1623853
                            var myOptions = {zoom: 15, center: new google.maps.LatLng(22.281277, 114.15492),
                                mapTypeId: google.maps.MapTypeId.ROADMAP};
                            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                            marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(22.281277, 114.15492)});

                            marker2 = new google.maps.Marker({map: map, position: new google.maps.LatLng(22.2852291, 114.1347675)});



                            infowindow = new google.maps.InfoWindow({content: '<div style="color:black"><strong>Baan Thai</strong><br>G/F and M/F, 57 Wyndham St,Central, Hong Kong<br></div>'});

                            google.maps.event.addListener(marker, 'click', function () {
                                infowindow.open(map, marker);
                            });
                            infowindow.open(map, marker);



                            infowindow = new google.maps.InfoWindow({content: '<div style="color:black"><strong>Baan Thai</strong><br>G/F, One South Lane, No. 1 South Lane, Shek Tong Tsui, Sai Wan, Hong Kong.<br></div>'});

                            google.maps.event.addListener(marker2, 'click', function () {
                                infowindow.open(map, marker2);
                            });
                            infowindow.open(map, marker2);

                        }
                        google.maps.event.addDomListener(window, 'load', init_map);</script>

            </div>
            <?php
        }
        ?>
    </div>

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_one_third">

                <div class="widget clearfix">
                    <div class="footerfirtblock">
                        <img src="<?php echo base_url(); ?>assets/images/logo50.png" alt="Baanthai Hong Kong" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;    height: 41px;">
                    </div>
                    <div class="footerfirtblock">
                        <p style="    color: white;    text-align: left;">Baanthai! Our rustic and stylish restaurant is located in the heart of Central along Wyndham Street and showcases the signature flavors of authentic Thai cuisine.</p>
                    </div>
                    <div class="line" style="margin: 0px 0;"></div>
                    <div class="widget clearfix" style="margin-top: 20px;
                         margin-bottom: 20px;">
                        <div class="widget subscribe-widget clearfix">
                            <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                            <div class="widget-subscribe-form-result"></div>
                            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#subscribe">Click Here To Subscribe</button>

                        </div>
                    </div>
                    <div class="line" style="margin: 10px 0;"></div>
                    <div class="widget clearfix" style="    margin-top: 30px;">

                        <div class=" clearfix">
                            <a hreflang="en-us"  href="https://www.facebook.com/baanthaihk/" class="social-icon si-small si-borderless nobottommargin si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a hreflang="en-us"  href="https://twitter.com/baanthaihk" class="social-icon si-small si-borderless nobottommargin si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a hreflang="en-us"  href="https://www.instagram.com/baanthaihk/" class="social-icon si-small si-borderless nobottommargin si-instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>



                            <a hreflang="en-us"  href="https://www.tripadvisor.in/Restaurant_Review-g294217-d15009776-Reviews-Baan_Thai_Restaurant-Hong_Kong.html" class="social-icon si-small si-borderless nobottommargin si-tripadvisor">
                                <i class="fa fa-tripadvisor"></i>
                                <i class="fa fa-tripadvisor"></i>
                            </a>


                            <a hreflang="en-us"  href="https://www.youtube.com/channel/UCrer3PmSJf5hlYvfETUS2Ew" class="social-icon si-small si-borderless nobottommargin si-youtube">
                                <i class="icon-youtube"></i>
                                <i class="icon-youtube"></i>
                            </a>


                            <a hreflang="en-us"  href="https://www.yelp.com/biz/baan-thai-%E9%A6%99%E6%B8%AF?osq=Baan+Thai" class="social-icon si-small si-borderless nobottommargin si-yelp">
                                <i class="icon-yelp"></i>
                                <i class="icon-yelp"></i>
                            </a>
                        </div>

                    </div>






                </div>

            </div>

            <div class="col_one_third">
                <div class="widget clearfix">
                    <h4>Contact Us</h4>

                    <div id="post-list-footer">
                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4>
                                        <div class="footer_icon_container"> <i class="icon-location footer_icon" style="    font-size: 31px;"></i> </div>
                                        <div>
                                            <address style="margin-bottom: 0px">G/F and M/F, 57 Wyndham St,<br/> Central, Hong Kong</address>

                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="spost clearfix" style="    margin-top: 5px;
                             padding-top: 10px;">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4>
                                        <div class="footer_icon_container"> <i class="fa fa-phone footer_icon" style="    font-size: 20px;"></i>  </div>
                                        <div class="float_left  m_l_10">
                                            <a hreflang="en-us"  href="tel:+852 2840 0041" style="    font-size: 15px;">+(852) 2840 0041</a>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4>
                                        <div class="footer_icon_container"> <i class="icon-location footer_icon" style="    font-size: 31px;"></i> </div>
                                        <div>
                                            <address style="margin-bottom: 0px"> G/F, One South Lane, No. 1 South Lane, <br/>Shek Tong Tsui, Sai Wan, Hong Kong.</address>

                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="spost clearfix" style="    margin-top: 5px;
                             padding-top: 10px;">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4>
                                        <div class="footer_icon_container"> <i class="fa fa-phone footer_icon" style="    font-size: 20px;"></i>  </div>
                                        <div class="float_left  m_l_10">
                                            <a href="tel:+852 2739 9188." style="    font-size: 15px;">+(852) 2739 9188</a>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>



                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4>
                                        <div class="footer_icon_container"> <i class="fa fa-whatsapp footer_icon" style="    font-size: 20px;"></i>  </div>
                                        <div class="float_left  m_l_10">
                                            <a hreflang="en-us"  href="https://api.whatsapp.com/send?phone=85262918128" style="    font-size: 15px;">+(852) 6291 8128</a>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>






                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4>
                                        <div class="footer_icon_container"> <i class="icon-email3 footer_icon" style="    font-size: 20px;"></i>  </div>
                                        <div class="float_left m_top_5 m_l_10">
                                            <a hreflang="en-us"  href="mailto:info@baanthai.hk" style="    font-size: 15px;">info@baanthai.hk </a>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>


                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4>
                                        <div class="footer_icon_container"> <i class="icon-group footer_icon" style="    font-size: 20px;"></i>  </div>
                                        <div class="float_left m_top_5 m_l_10">
                                            <a hreflang="en-us"  href="<?php echo site_url('joinourteam'); ?>" style="    font-size: 15px;">Join Our Team </a>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>


            </div>

            <div class="col_one_third col_last">
                <div class="widget clearfix row" style="text-align: center;">
                    <div class="col-md-7">
                        <a hreflang="en-us"  href="https://www.google.com/search?sxsrf=ACYBGNTfZqg3NiOqwcFBmovGQRHDsH2bzA%3A1580712554623&source=hp&ei=asI3Xu-ZI4L8wQPmx6OACA&q=baanthai.hk&oq=baanthai.hk&gs_l=psy-ab.3..38.611.4107..5317...0.0..0.260.932.3j3j1......0....1..gws-wiz.......35i39j0j0i10j0i10i30j0i30j0i13i30.HI9dhSgMR7w&ved=0ahUKEwjv9rqS5bTnAhUCfnAKHebjCIAQ4dUDCAY&uact=5#lrd=0x3404007b252e2283:0xbdca9c199b4fbb62,1" target="_blank" style="

                           float: left;
                           width: 100%;
                           margin-bottom: 20px;
                           background: white;
                           text-align: center;
                           margin-top: 40px;
                           border-radius: 21px;">

                            <img src="<?php echo base_url(); ?>assets/images/google-review-link.jpg" alt="Baanthai Google Review" style="    margin-top: 0px;    height: 80px;">

                        </a>
                    </div>
                    <div class="col-md-5">
                        <link href="https://awards.infcdn.net/circ5_n.css" rel="stylesheet"/><div style="display: inline-block!important;" id="rest_circ5" onclick="if (event.target.nodeName.toLowerCase() != 'a') {
                                    window.open(this.querySelector('.circ_top_title').href);
                                    return 0;
                                }"><div class="circ_cont"><div class="circ_img" style="background: url('https://awards.infcdn.net/img/star_red.svg') no-repeat center">&nbsp;</div><a href="https://restaurantguru.com" target="_blank" class="circ_top_title">Restaurant Guru 2020</a><span>Recommended</span><a href="https://restaurantguru.com/Baan-Thai-Hong-Kong" class="circ_bot_title" target="_blank">Baan Thai</a></div></div>
                    </div>
                </div>

                <div class="widget clearfix" style="margin-top: 40px;">
                    <div class="footertripadvisor">
                        <p>Ratings and reviews</p>

                        <h2 style="margin: 0;font-size: 25px;">4.5 <small>(25 reviews)</small></h2>
                        <img src="<?php echo base_url(); ?>assets/images/tripadvisor.svg" alt="Baanthai tripadvisor" style="    margin-top: 0px;height: 50px;">
                        <a class="btn btn-success" hreflang="en-us"  href="https://en.tripadvisor.com.hk/Restaurant_Review-g294217-d15009776-Reviews-Baan_Thai_Restaurant-Hong_Kong.html" target="_blank" style="color:white;">Write A Review <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="line" style="margin: 10px 0;"></div>
                    <div class="widget clearfix" style="    margin-top: 0px;">

                        <div class=" clearfix">

<!--                            <h4 style="margin: 0;font-size: 15px"> We Accept</h4>

                            <br/>-->
                            <img src="<?php echo base_url(); ?>assets/images/payments3.png" alt="Baanthai payment" style="  height: 60px;">

                        </div>
                    </div>
                </div>



            </div> 






        </div><!-- .footer-widgets-wrap end -->

        <!--        <div class="keywordsection">
        <?php
        foreach ($keywordsList as $key => $value) {
            echo "<span class='keywordtxt'>$value</span>";
        }
        ?>
                </div>-->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights" style="    padding: 10px;">

        <div class="container clearfix" >

            <div class="col_full center" style="    padding: 6px;
                 color: white;">

                Copyrights &copy; <?php echo date("Y"); ?> All Rights Reserved by Baanthai.
            </div>



        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end 'images/footer-bg.jpg'-->


<script>
    function refreshCaptcha()
    {
        var img = document.images['captchaimg'];
        img.src = img.src;
    }
    jQuery(function () {


        jQuery('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
    })
</script>

