<?php
$this->load->view('layout/header');
$clients = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 18, 19, 20, 21];
$event = [22, 23, 24, 25];

$galleryArray = array(
    "food" => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 18, 19, 20, 21],
    "venue" => [22, 23, 24, 25],
    "snacks" => [],
    "drinks" => [],
    "cocktail" => [],
    "events" => [],
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
                                    <p class="tabtitle">Cocktail</p>

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
                    foreach ($galleryArray as $ckey => $cvalue) {
                        ?>
                        <div class="tab-pane fade" id="nav-<?php echo $ckey; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $ckey; ?>-tab">

                            <div id="grid-gallery" class="grid-gallery taginntercontaint" >
                                <section class="grid-wrap">
                                    <ul class="grid">
                                        <li class="grid-sizer"></li><!-- for Masonry column width -->

                                        <?php
                                        foreach ($cvalue as $key => $value) {
                                            ?>

                                            <li style="    padding: 0px;" >
                                                <div class="panel panel-default" style="border:none;margin: 0px;">
                                                    <div class="panel-body" style="    padding: 5px;">
                                                        <div class="thumbnail lookbook_thumb" >
                                                            <img src="<?php echo base_url(); ?>assets/images/food/<?php echo $value; ?>.jpg" alt="img01" style=""/>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                        <div style="clear:both"></div>

                                    </ul>
                                    <div style="clear:both"></div>
                                </section><!-- // grid-wrap -->
                                <section class="slideshow" >
                                    <ul>

                                        <?php
                                        foreach ($clients as $key => $value) {
                                            ?>
                                            <li >
                                            <center>
                                                <img src="<?php echo base_url(); ?>assets/images/food/<?php echo $value; ?>.jpg" alt="img01"  style="    height:500px;"/>
                                            </center>
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