<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />
        <?php
        meta_tags();
        ?>
        <!-- Favicon -->
        <link rel="shortcut icon" hreflang="en-us"  href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">
        <link rel="icon" hreflang="en-us"  href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">

        <link rel="shortcut icon" hreflang="en-us"  href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>
        <link rel="apple-touch-icon image_src" hreflang="en-us"  href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>

        <!-- Stylesheets
        ============================================= -->
        <link hreflang="en-us"  href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" hreflang="en-us"  href="<?php echo base_url(); ?>assets/theme/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" hreflang="en-us"  href="<?php echo base_url(); ?>assets/theme/css/style.css" type="text/css" />
        <link rel="stylesheet" hreflang="en-us"  href="<?php echo base_url(); ?>assets/theme/css/dark.css" type="text/css" />
        <link rel="stylesheet" hreflang="en-us"  href="<?php echo base_url(); ?>assets/theme/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" hreflang="en-us"  href="<?php echo base_url(); ?>assets/theme/css/animate.css" type="text/css" />
        <link rel="stylesheet" hreflang="en-us"  href="<?php echo base_url(); ?>assets/theme/css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" hreflang="en-us"  href="<?php echo base_url(); ?>assets/theme/css/responsive.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->



        <link hreflang="en-us"  href="<?php echo base_url(); ?>assets/theme/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">


        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" hreflang="en-us"  href="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.css">


        <link hreflang="en-us"  href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">


        <!-- External JavaScripts
        ============================================= -->
        <script src="<?php echo base_url(); ?>assets/theme/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/theme/js/plugins.js"></script>
        <!-- Footer Scripts
        ============================================= -->
        <link rel="stylesheet" hreflang="en-us"  href="<?php echo base_url(); ?>assets/theme/css/style_custome.css" type="text/css" />

        <!--angular js-->
        <script src="<?php echo base_url(); ?>assets/theme/angular/angular.min.js"></script>

        <!-- Google Tag Manager -->
        <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" hreflang="en-us"  href="<?php echo base_url(); ?>assets/theme/include/rs-plugin/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" hreflang="en-us"  href="<?php echo base_url(); ?>assets/theme/include/rs-plugin/css/layers.css">
        <link rel="stylesheet" type="text/css" hreflang="en-us"  href="<?php echo base_url(); ?>assets/theme/include/rs-plugin/css/navigation.css">


        <!--owl slider-->
        <link rel="stylesheet" hreflang="en-us"  href="<?php echo base_url(); ?>assets/owl/owl.carousel.min.css">
        <link rel="stylesheet" hreflang="en-us"  href="<?php echo base_url(); ?>assets/owl/owl.theme.default.min.css">
        <script src="<?php echo base_url(); ?>assets/owl/owl.carousel.js"></script>

        <!--owl--> 

    </head>  


    <style type="text/css">
        #loading {
            position: fixed;
            z-index: 50000;
            height: 500px;

            color: #fff;
            text-indent: -9999px;
            top: 0px;

        }
        .v2 #loading { display: none; }


        #loader {

            /*background:transparent url("") no-repeat center 25%;*/
            height:100%;
            display: white;
            /*opacity: 0.3;*/
            /*background: #000;*/
        }


    </style>



    <style>
        main .shell { padding: 25px 0 90px 43px; width: 917px;}
        #progress-bar{   
            width:100%;
            height:100%; 
            opacity: 1;
            background:#fff;  
            float: right;
            position: fixed;
        }
    </style>


    <body ng-app="App" class="stretched" ng-controller="ShopController">
        <div  id="wrapper" class="clearfix">
            <script>
                var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
                //$interpolateProvider.startSymbol('{$');
                //$interpolateProvider.endSymbol('$}');
                $httpProvider.defaults.headers.common = {};
                $httpProvider.defaults.headers.post = {};
                });
                var baseurl = "<?php echo base_url(); ?>index.php/";
                var imageurlg = "<?php echo imageserver; ?>";
                var globlecurrency = "<?php echo globle_currency; ?>";
                var avaiblecredits = 0;


            </script>








            <header id="header" class="sticky-header">
                <div class="container topmenuheader" style="">
                    <span class="lefttopmenu">
                        <a hreflang="en-us"  href="mailto:info@baanthai.hk" style="color:white"><i class="fa fa-envelope-o"></i> info@baanthai.hk</a> 
                    </span>
                    <span class="lefttopmenu">
                        <a hreflang="en-us"  href="tel:info@baanthai.hk" style="color:white"><i class="fa fa-phone"></i> +(852) 2840 0041</a> 
                    </span>
                    <div class="topmenuright">
                        <div class=" clearfix">
                            <a hreflang="en-us"  href="https://www.facebook.com/baanthaihk/" class="si-facebook">
                                <i class="icon-facebook"></i>

                            </a>

                            <a hreflang="en-us"  href="https://twitter.com/baanthaihk" class="si-twitter">
                                <i class="icon-twitter"></i>

                            </a>

                            <a hreflang="en-us"  href="https://www.instagram.com/baanthaihk/" class="si-instagram">
                                <i class="icon-instagram"></i>

                            </a>

                        

                            <a hreflang="en-us"  href="https://www.tripadvisor.in/Restaurant_Review-g294217-d15009776-Reviews-Baan_Thai_Restaurant-Hong_Kong.html" class="si-tripadvisor">
                                <i class="fa fa-tripadvisor"></i>

                            </a>


        
                            
                             <a hreflang="en-us"  href="https://www.youtube.com/channel/UCrer3PmSJf5hlYvfETUS2Ew" class="si-youtube">
                                <i class="icon-youtube"></i>

                            </a>
                            
                            
                            
                             <a hreflang="en-us"  href="https://www.yelp.com/biz/baan-thai-%E9%A6%99%E6%B8%AF?osq=Baan+Thai" class="si-yelp">
                                <i class="icon-yelp"></i>

                            </a>
                        </div>
                    </div>

                </div>
                <div id="header-wrap" >

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <!-- Logo
                        ============================================= -->
                        <div id="logo">
                            <a hreflang="en-us"  href="<?php echo site_url("/"); ?>" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Baanthai Logo"></a>
                            <a hreflang="en-us"  href="<?php echo site_url("/"); ?>" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Baanthai Logo"></a>
                        </div><!-- #logo end -->

                        <!-- Primary Navigation
                        ============================================= -->
                        <nav id="primary-menu" class="style-5">

                            <ul class="norightborder norightpadding norightmargin">
                                <?php
                                include('header_1.php');
                                ?>
                                <?php
                                foreach ($menuitems as $key => $value) {
                                    ?>
                                    <li  class="<?php echo current_url() == $value['link'] ? 'activemenu' : '' ?>"><a hreflang="en-us"  href="<?php echo $value['link']; ?>" class="<?php echo $value['class']; ?>"><div ><i class="<?php echo $value['icon']; ?>"></i><?php echo $value['title']; ?></div></a></li>
                                <?php } ?>
                                <!--{{userLogin}}-->
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>

                </div>

            </header><!-- #header end -->
            <div class="clear"></div>
            <a class="btn btn-danger deliveryButton" hreflang="en-us"  href="<?php echo site_url('booknow'); ?>" style="    bottom: 150px;
               background: #ff0000;line-height: 64px;"> Book Now</a>

            <button class="btn btn-danger deliveryButton" data-toggle="modal" data-target="#deliverymodel"> Delivery</button>

            <!-- Modal -->
            <div class="modal fade" id="deliverymodel" tabindex="-1" role="dialog" aria-labelledby="deliverymodel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content " >

                        <div class="modal-body deliverymodal">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="    position: absolute;
                                    right: 5px;"><span aria-hidden="true">&times;</span></button>
                            <a hreflang="en-us"  href="https://www.foodpanda.hk/restaurant/s7je/baan-thai?preview=YToyOntzOjQ6ImRhdGUiO3M6MTk6IjIwMTktMTAtMzEgMDg6NTY6NDYiO3M6ODoiaWRWZW5kb3IiO3M6MzoiODAxIjt9" target="_blank">
                                <img src="<?php echo base_url(); ?>assets/images/delivery.jpg" alt="Baanthai Deliery">
                            </a>
                        </div>

                    </div>
                </div>
            </div>