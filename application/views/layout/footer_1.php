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
                    Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:                        </h2>

                <div class="widget-subscribe-form-result1"></div>
                <form  action="<?php echo site_url("subscribe"); ?>" role="form" method="post" class="nobottommargin">
                    <div class="input-group divcenter">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="icon-email2"></i></div>
                        </div>
                        <input type="email" id="widget-subscribe-form-email2" name="email" class="form-control required email" placeholder="Enter your Email">
                        <div class="input-group-append">
                            <button class="btn btn-success" name="submit" type="submit">Subscribe</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="promotionModel" tabindex="-1" role="dialog" aria-labelledby="Subscribe" aria-hidden="true">
    <div class="modal-dialog modal-lg"  role="document">
        <div class="modal-content subscribmodel">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" ng-if="promotionImage.img!=''">
                <a href='{{promotionImage.link}}'>
                    <img src="<?php echo base_url(); ?>assets/promotion/{{promotionImage.img}}.jpg">
                </a>
            </div>

        </div>
    </div>
</div>



<div class="row clearfix common-height" style="margin: 0;padding: 20px;">


    <div class="owl-carousel owl-theme">
        <?php
        $promotion = [77, 1, 2];
        $promotionlink = array(
            "77" => site_url("gallery/events"),
            "1" => site_url("loyalprogram"),
            "2" => site_url("private_parties"),
        );

        foreach ($promotionlink as $key => $value) {
            ?>
            <div class="item" data-toggle="modal" data-target="#promotionModel" style="cursor: pointer;" ng-click="selectePromotionImage('<?php echo $key; ?>', '<?php echo $value; ?>')">
                <div class="thumbnail">
                    <img src="<?php echo base_url(); ?>assets/promotion/<?php echo $key; ?>.jpg"/>
                </div>
            </div>
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
                        <img src="<?php echo base_url(); ?>assets/icons/group.svg">
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        Baan Thai Restaurant has a great loyalty program called the 'Spice Club'. Our club members earn credits each time they visit and dine at Baan Thai and after a certain amount of visits, they earn a significant discount on their next bill. 

                    </p>
                    <a href="<?php echo site_url('loyalprogram'); ?>">Enroll Here</a>
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
                        <img src="<?php echo base_url(); ?>assets/icons/bell.svg">
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        Each month, Baan Thai Restaurant sends out a simple and brief email newsletter which up-dates our customers on news, promotions and offers. If you would like to receive the newsletter, simply click here and just provide us with you name, contact number and email address.
                    </p>

                    <a href="#"  data-toggle="modal" data-target="#subscribe">Click Here</a>

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
                        <img src="<?php echo base_url(); ?>assets/icons/food.svg">
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        Find out about our latest promotions, special offers, packages and discounts. You are also welcome to send us an enquiry about offers, group packages, private parties and tailor made menus.

                        For party package and party event or private catering write us at info@baanthai.hk
                    </p>
                    <a href="<?php echo site_url('private_parties'); ?>">Click Here</a>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- Footer
                ============================================= -->
<footer id="footer" class="dark" style="background: url('<?php echo base_url(); ?>assets/images/woodback.jpg') repeat fixed; ">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.9134546706673!2d114.1527523149544!3d22.281267985333468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3404007b252e2283%3A0xbdca9c199b4fbb62!2sBaan+Thai!5e0!3m2!1sen!2sau!4v1536733116418"
            frameborder="0" style="border: 0;;height: 300px;width: 100%" allowfullscreen>
    </iframe>

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_one_third">

                <div class="widget clearfix">
                    <div class="footerfirtblock">
                        <img src="<?php echo base_url(); ?>assets/images/logo50.png" alt="" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;    height: 41px;">
                    </div>
                    <div class="footerfirtblock">
                        <p style="    color: white;    text-align: left;">Baan Thai! Our rustic and stylish restaurant is located in the heart of Central along Wyndham Street and showcases the signature flavors of authentic Thai cuisine.</p>
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
                            <a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless nobottommargin si-instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>



                            <a href="#" class="social-icon si-small si-borderless nobottommargin si-tripadvisor">
                                <i class="fa fa-tripadvisor"></i>
                                <i class="fa fa-tripadvisor"></i>
                            </a>


                            <a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>

                            <a href="https://www.yelp.com/biz/baan-thai-%E9%A6%99%E6%B8%AF?osq=Baan+Thai" class="social-icon si-small si-borderless nobottommargin si-yelp">
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


                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4>
                                        <div class="footer_icon_container"> <i class="fa fa-phone footer_icon" style="    font-size: 20px;"></i>  </div>
                                        <div class="float_left  m_l_10">
                                            <a href="tel:+852 2840 0041" style="    font-size: 15px;">+(852) 2840 0041</a>
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
                                            <a href="https://api.whatsapp.com/send?phone=85262918128" style="    font-size: 15px;">+(852) 6291 8128</a>
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
                                            <a href="mailto:info@baanthai.hk" style="    font-size: 15px;">info@baanthai.hk </a>
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
                                            <a href="<?php echo site_url('joinourteam'); ?>" style="    font-size: 15px;">Join Our Team </a>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>


            </div>

            <div class="col_one_third col_last">
                <div class="widget clearfix">
                    <a href="https://www.google.com/search?sxsrf=ACYBGNTfZqg3NiOqwcFBmovGQRHDsH2bzA%3A1580712554623&source=hp&ei=asI3Xu-ZI4L8wQPmx6OACA&q=baanthai.hk&oq=baanthai.hk&gs_l=psy-ab.3..38.611.4107..5317...0.0..0.260.932.3j3j1......0....1..gws-wiz.......35i39j0j0i10j0i10i30j0i30j0i13i30.HI9dhSgMR7w&ved=0ahUKEwjv9rqS5bTnAhUCfnAKHebjCIAQ4dUDCAY&uact=5#lrd=0x3404007b252e2283:0xbdca9c199b4fbb62,1" target="_blank" style="

                       float: left;
                       width: 100%;
                       background: white;
                       text-align: center;
                       border-radius: 21px;">

                        <img src="<?php echo base_url(); ?>assets/images/google-review-link.jpg" style="    margin-top: 0px;    height: 80px;">

                    </a>
                </div>
                <div class="widget clearfix" style="margin-top: 40px;">
                    <div class="footertripadvisor">
                        <p>Ratings and reviews</p>

                        <h2 style="margin: 0;font-size: 25px;">4.5 <small>(25 reviews)</small></h2>
                        <img src="<?php echo base_url(); ?>assets/images/tripadvisor.svg" style="    margin-top: 0px;height: 50px;">
                        <a class="btn btn-success" href="https://en.tripadvisor.com.hk/Restaurant_Review-g294217-d15009776-Reviews-Baan_Thai_Restaurant-Hong_Kong.html" target="_blank" style="color:white;">Write A Review <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="line" style="margin: 10px 0;"></div>
                    <div class="widget clearfix" style="    margin-top: 0px;">

                        <div class=" clearfix">

                            <h4 style="margin: 0;"> We Accept</h4>

                            <br/>
                            <img src="<?php echo base_url(); ?>assets/images/payments.png" style="  height: 70px;">

                        </div>
                    </div>
                </div>



            </div> 






        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights" style="    padding: 10px;">

        <div class="container clearfix" >

            <div class="col_full center" style="    padding: 6px;
                 color: white;">

                Copyrights &copy; <?php echo date("Y"); ?> All Rights Reserved by Baan Thai.
            </div>



        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end 'images/footer-bg.jpg'-->


<script>
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

