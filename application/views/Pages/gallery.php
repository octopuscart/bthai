<?php
$this->load->view('layout/header');
$clients = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 18, 19, 20, 21];
$event = [22, 23, 24, 25];

$galleryArray = array(
    "food" => array(
        "Pad Thai Lobster" => "1_Pad_Thai_Lobster.jpg", "Tom Yum Kung Soup" => "7_Tom_Yum_Kung_Soup.jpg",
        "Green Curry Chicken" => "2_Green_Curry_Chicken.jpg", "Stir Fried Kee Mau Prawns" => "8_Stir_Fried_Kee_Mau_Prawns.jpg",
        "Char-grilled Beef Salad" => "3_Char_Grilled_Beef_Salad.jpg", "Panang Pork Curry" => "9_Panang_Pork_Curry.jpg",
        "Spicy Green Mango Salad" => "4_Spicy Green_Mango_Salad.jpg", "Baan Thai Basil Minced Chicken" => "10_Baan_Thai_Basil_Minced_Chicken.jpg",
        "Pad Thai Chicken" => "5_Pad_Thai_Chicken.jpg", "Duck Breast Red Curry" => "11_Duck_Beast_Red_Curry.jpg",
        "Giant King Prawns with Yellow Curry" => "6_Giant_King_Prawns_With_Yellow_curry.jpg", "Pork Laab" => "12_Pork_Laab.jpg",
    ),
    "venue" => array(
        "1" => "20180602_095632.jpg",
        "2" => "20181011_191809.jpg",
        "3" => "20190411_1658231.jpg",
        "4" => "20190418_1625321.jpg",
        "5" => "20191010_165316.jpg",
        "6" => "20180602_095957B.jpg",
        "7" => "20181115_180409.jpg",
        "8" => "20190411_165934.jpg",
        "9" => "20191010_165215.jpg"
    ),
    "snacks" => array(
        "Chicken Satay" => "1_Chicken_Satays.jpg",
        "Fried Chicken Wings" => "5_Crispy_Fried_Chicken_Wings.jpg",
        "Garlic Bread" => "2_Garlic_Bread.jpg", 
        "Fresh Prawn Rice Paper Rolls" => "6_Fresh_Prawn_Rice_Paper_Rolls.jpg",
        "Pork Laab Mini Burgers" => "3_Pork_Laab_Mini_Burger.jpg",
        "Potato Wedges" => "7_Potato_Wedges.jpg",
        "Crispy Fried Vegetarian Spring Rolls" => "4_Crispy_Fried_Vegetarian_Spring_Rolls.jpg",
        "Spicy Fried Shrimp" => "8_Spicy_Shrimp.jpg",
    ),
    "drinks" => array(
        "Asahi Super Dry Draft Beer" => "1_Asahi_Super_Dry_Draft_Beer.jpg",
        "Brooklyn Draft Larger" => "2_Brooklyn_Draft_Larger.jpg",
        "Goose Island IPA Draft" => "3_Goose_Island_IPA_Draft.jpg",
        "Pressman's Bottled Cider" => "4_Pressmans_Bottled_Cider.jpg",
        "Giusti Rosalia Prosecco" => "5_Giusti_Rosalia_Prosecco.jpg",
    ),
    "cocktail" => array(
        "1" => "IMG_8925.jpg",
        "2" => "IMG_8958.jpg",
        "3" => "IMG-20180531-WA0000.jpg",
        "4" => "IMG-20190324-WA0021.jpg",
    ),
    "events" => array(
        "1" => "20180602_095632.jpg",
        "2" => "20191010_165215.jpg",
        "3" => "IMG-20180912-WA0016.jpg",
        "4" => "20180602_095957B.jpg",
        "5" => "20191010_165316.jpg",
        "6" => "IMG-20190312-WA0035.jpg",
        "7" => "20180926_211922.jpg",
        "8" => "20191216_005558.jpg",
        "9" => "IMG-20190312-WA0037.jpg",
        "10" => "20181011_191809.jpg",
        "11" => "36030821_2073974522924619_6425072445463461888_o.jpg",
        "12" => "IMG-20190324-WA00191.jpg",
        "13" => "20181115_180409.jpg",
        "14" => "77181538_10159702910009848_4585822172047474688_o.jpg",
        "15" => "IMG-20190413-WA0026.jpg",
        "16" => "20190411_1658231.jpg",
        "17" => "82522726_10220927776888197_5155124364919701504_o1.jpg",
        "18" => "IMG-20190904-WA0016.jpg",
        "19" => "20190411_165934.jpg",
        "20" => "IMG-20180519-WA0007.jpg",
        "21" => "20190418_1625321.jpg",
        "22" => "IMG-20180519-WA0011.jpg",
    ),
);



$galleryArrayIncType = array(
    "food" => "txt",
    "venue" =>"inc",
    "snacks" =>"txt",
    "drinks" => "txt",
    "cocktail" => "inc",
    "events" => "inc",
);

?>



<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/verticletab.css" />


<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/GridGallery/css/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/GridGallery/css/component.css" />

<script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/modernizr.custom.js"></script>

<style>
    .lookbook_thumb img{
        /*height: 200px;*/
    }
</style>

<div class="section_offset" ng-controller="lookBookController" style="background: url(<?php echo base_url(); ?>assets/images/gallary.jpg) ;background-repeat: no-repeat;background-size: cover;    height: 600px;
     overflow-y: scroll;">

    <div class="container clearfix m_t_30">

        <div class="col_full1">
            <div class="heading-block1 center nobottomborder">
                <span class="before-heading " style="    font-size: 47px;
                      color: white;">Our Gallery</span>
            </div>
        </div>
    </div>
    <div class="container" style="">
        <div class="content" style="">
            <!--contact-->
            <!--clients area-->
            <div class="latest-w3">


                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link " id="nav-food-tab"  href="<?php echo site_url('gallery/food') ?>" role="tab" aria-controls="nav-food" aria-selected="true">
                            <figure class="figure bookingfigure" >
                                <img src="<?php echo base_url(); ?>assets/icons/food.png" class="figure-img img-fluid rounded tabimage" alt="...">
                                <figcaption class="figure-caption">
                                    <p class="tabtitle">Food</p>

                                </figcaption>
                            </figure>
                        </a>
                        <a class="nav-item nav-link" id="nav-snacks-tab"  href="<?php echo site_url('gallery/snacks') ?>" role="tab" aria-controls="nav-snacks" aria-selected="false">
                            <figure class="figure bookingfigure" >
                                <img src="<?php echo base_url(); ?>assets/icons/snacks.png" class="figure-img img-fluid rounded tabimage" alt="...">
                                <figcaption class="figure-caption">
                                    <p class="tabtitle">Snacks</p>

                                </figcaption>
                            </figure>
                        </a>
                        <a class="nav-item nav-link" id="nav-drinks-tab"  href="<?php echo site_url('gallery/drinks') ?>" role="tab" aria-controls="nav-drinks" aria-selected="false">
                            <figure class="figure bookingfigure" >
                                <img src="<?php echo base_url(); ?>assets/icons/drinks.png" class="figure-img img-fluid rounded tabimage" alt="...">
                                <figcaption class="figure-caption">
                                    <p class="tabtitle">Drinks</p>

                                </figcaption>
                            </figure>
                        </a>
                        <a class="nav-item nav-link" id="nav-cocktail-tab"  href="<?php echo site_url('gallery/cocktail') ?>" role="tab" aria-controls="nav-cocktail" aria-selected="false">
                            <figure class="figure bookingfigure" >
                                <img src="<?php echo base_url(); ?>assets/icons/cocktail.png" class="figure-img img-fluid rounded tabimage" alt="...">
                                <figcaption class="figure-caption">
                                    <p class="tabtitle">Cocktails</p>

                                </figcaption>
                            </figure>
                        </a>

                        <a class="nav-item nav-link" id="nav-events-tab"  href="<?php echo site_url('gallery/events') ?>" role="tab" aria-controls="nav-events" aria-selected="false">
                            <figure class="figure bookingfigure" >
                                <img src="<?php echo base_url(); ?>assets/icons/events.png" class="figure-img img-fluid rounded tabimage" alt="...">
                                <figcaption class="figure-caption">
                                    <p class="tabtitle">Past Events</p>
                                </figcaption>
                            </figure>
                        </a>
                        <a class="nav-item nav-link" id="nav-venue-tab"  href="<?php echo site_url('gallery/venue') ?>" role="tab" aria-controls="nav-venue" aria-selected="false">
                            <figure class="figure bookingfigure" >
                                <img src="<?php echo base_url(); ?>assets/icons/venue.png" class="figure-img img-fluid rounded tabimage" alt="...">
                                <figcaption class="figure-caption">
                                    <p class="tabtitle">Venue</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">

                    <?php
                    $loopdata = $galleryArray[$gtype];
                    $viewtype = $galleryArrayIncType[$gtype];
                    if (1) {
                        ?>
                        <div class="tab-pane fade" id="nav-<?php echo $gtype; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $gtype; ?>-tab">

                            <div id="grid-gallery" class="grid-gallery taginntercontaint" >
                                <section class="grid-wrap">
                                    <ul class="grid">
                                        <li class="grid-sizer"></li><!-- for Masonry column width -->

                                        <?php
                                        $inctype = 1;
                                        foreach ($loopdata as $key => $value) {
                                            ?>

                                            <li style="    padding: 0px;" >
                                                <div class="panel panel-default" style="border:none;margin: 0px;">
                                                    <div class="panel-body" style="    padding: 5px;">
                                                        <div class="thumbnail lookbook_thumb" >
                                                            
                                                            <img src="<?php echo base_url() . "assets/images/gallery/$gtype/$value"; ?>" alt="img01" style="border-radius: 0;"/>
                                                            <div class="caption" style="background: black;
                                                                 color: white;
                                                                 text-align: center;
                                                                 padding: 1px 5px;">
                                                                <p><?php 
                                                                if($viewtype == 'txt'){
                                                                    echo $key;
                                                                }
                                                                else{
                                                                    echo $inctype;
                                                                }
                                                                
                                                                ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                            $inctype++;
                                        }
                                        ?>
                                        <div style="clear:both"></div>

                                    </ul>
                                    <div style="clear:both"></div>
                                </section><!-- // grid-wrap -->
                                <section class="slideshow" >
                                    <ul>

                                        <?php
                                        foreach ($loopdata as $key => $value) {
                                            ?>
                                            <li >
                                            <center>
                                                <img src="<?php echo base_url() . "assets/images/gallery/$gtype/$value"; ?>" alt="img01"  style="    height:500px;"/>
                                            </center>
                                            <h4 style="    background: black;
                                                color: white;
                                                padding: 10px;
                                                text-align: center;"><?php echo $key; ?></h4> 
                                            </li>

                                            <?php
                                        }
                                        ?>

                                    </ul>

                                    <nav>
                                        <span class="icon nav-prev"></span>
                                        <span class="icon nav-next"></span>
                                        <span class="icon nav-close"></span>
                                    </nav>

                                </section><!-- // slideshow -->
                            </div><!-- // grid-gallery -->

                        </div>
                        <?php
                    }
                    ?>


                </div>







            </div>
            <!--end of client area-->
            <!--contact-->
        </div>
    </div>


</div>

</div>

<!-- // grid-gallery -->
<script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/classie.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/cbpGridGallery.js"></script>

<script>

    App.controller('lookBookController', function ($scope, $http, $timeout, $interval) {
        $scope.styleArray = {"title": "", "loading": 1, "style_list": [], "enquery_list": {}};
        $("#nav-<?php echo $gtype; ?>-tab").addClass("active");
        $("#nav-<?php echo $gtype; ?>").addClass("active show");
        $timeout(function () {



            $scope.girdgallary = new CBPGridGallery(document.getElementById('grid-gallery'));


        }, 500)



    })

</script>

<?php
$this->load->view('layout/footer');
?>