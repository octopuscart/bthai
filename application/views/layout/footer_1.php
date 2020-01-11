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
</style>

<div class="row clearfix common-height" style="margin: 0;padding: 20px;">


    <div class="owl-carousel owl-theme">
        <?php
        for ($i = 1; $i <= 6; $i++) {
            ?>
            <div class="item">
                <div class="thumbnail">
                    <img src="<?php echo base_url(); ?>assets/promotion/<?php echo $i;?>.jpg"/>
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
                        <i class="fa fa-group"></i>
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
                        <i class="fa fa-envelope-open"></i>
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                        Each month, Baan Thai Restaurant sends out a simple and brief email newsletter which up-dates our customers on news, promotions and offers. If you would like to receive the newsletter, simply click here and just provide us with you name, contact number and email address.
                    </p>
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
                        <i class="ion-ios-beer"></i>
                    </div>
                </div>
                <div class="col-md-8">
                    <p>
                       Find out about our latest promotions, special offers, packages and discounts. You are also welcome to send us an enquiry about offers, group packages, private parties and tailor made menus.

For party package and party event or private catering write us at info@baanthai.hk
                    </p>
                   
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
                            <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                                <div class="input-group divcenter">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="icon-email2"></i></div>
                                    </div>
                                    <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="submit">Subscribe</button>
                                    </div>
                                </div>
                            </form>
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

                            <a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless nobottommargin si-tripadvisor">
                                <i class="fa fa-tripadvisor"></i>
                                <i class="fa fa-tripadvisor"></i>
                            </a>


                            <a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
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




                    </div>
                </div>


            </div>

            <div class="col_one_third col_last">
                <div class="widget clearfix">
                    <div class="footertripadvisor">
                        <p>Ratings and reviews</p>
                        <p>
                            There aren't enough food, service, value or atmosphere ratings for Baan Thai Restaurant, China yet. Be one of the first to write a review!
                        </p>
                        <h2>4.5 <small>(25 reviews)</small></h2>
                        <img src="<?php echo base_url(); ?>assets/images/tripadvisor.svg" style="    margin-top: 25px;">
                        <a class="btn btn-success" href="https://en.tripadvisor.com.hk/Restaurant_Review-g294217-d15009776-Reviews-Baan_Thai_Restaurant-Hong_Kong.html" target="_blank" style="color:white;">Write A Review <i class="fa fa-long-arrow-right"></i></a>
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
    $(function () {
        $('.owl-carousel').owlCarousel({
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

