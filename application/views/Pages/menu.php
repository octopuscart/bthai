<?php
$this->load->view('layout/header');
?>

<style>
    .bb-bookblock .thumbnail{
        text-align: center;
    }

    .bb-bookblock img{
        /*height: 100%;*/
    }

</style>

<section id="content">

    <div class="content-wrap" style="padding: 0px; background: url(<?php echo base_url(); ?>assets/images/woodback.jpg) ; ">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/book/normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/book/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/book/bookblock.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/book/component.css" />
        <script src="<?php echo base_url(); ?>assets/book/modernizr.custom.js"></script>


        <div id="scroll-wrap" class="container">

            <div class="main">
                <div id="bookshelf" class="bookshelf">
                    <figure>
                        <div class="book" data-book="book-1"></div>
                        <div class="buttons"><a href="#">Look inside</a><a href="#">Details</a></div>
                        <figcaption><h2 style="margin-top: 0px;">Food <span style="    color: #ffffff;">Baan Thai</span></h2></figcaption>
                        <div class="details">
                            <ul>
                                <li>
                                    SOUP<br/>
                                    APPETISERS & SNACKS<br/>
                                    SALADS<br/>
                                    CURRIES<br/>
                                    SEA FOOD<br/>
                                    STIR-FRIED DISHES<br/>
                                    NOODLES AND RICE<br/>
                                    VEGETARIAN<br/>
                                    SIDES<br/>
                                    DESSERTS<br/>
                                </li>
                            </ul>
                        </div>
                    </figure>

                    <figure>
                        <div class="book" data-book="book-2"></div>
                        <div class="buttons"><a href="#">Look inside</a><a href="#">Details</a></div>
                        <figcaption><h2 style="margin-top: 0px;">Snacks <span style="    color: #ffffff;">Baan Thai</span></h2></figcaption>
                        <div class="details">
                            <ul>
                                <li style="text-transform: uppercase;">Potato Wedges<br/>
                                    Fried Fish Snacks</br> 
                                    Pandan Chicken<br/>
                                    Spicy Shrimp<br/>

                                </li>
                            </ul>
                        </div>
                    </figure>


                    <figure>
                        <div class="book" data-book="book-3"></div>
                        <div class="buttons"><a href="#">Look inside</a><a href="#">Details</a></div>
                        <figcaption><h2 style="margin-top: 0px;">Drinks <span style="    color: #ffffff;">Baan Thai</span></h2></figcaption>
                        <div class="details">
                            <ul>
                                <li>
                                    SPIRITS<br/>
                                    WINE & CHAMPAGNE<br/>
                                    BEER & CIDER<br/>
                                    COCKTAILS<br/>
                                    NON ALCOHOLIC<br/>
                                </li>
                            </ul>
                        </div>
                    </figure>


                    <figure>
                        <div class="book" data-book="book-4"></div>
                        <div class="buttons"><a href="#">Look inside</a><a href="#">Details</a></div>
                        <figcaption><h2 style="margin-top: 0px;">Cocktails<span style="    color: #ffffff;">Baan Thai</span></h2></figcaption>
                        <div class="details">
                            <ul>
                                <li style="text-transform: uppercase;">Signature Cocktails<br/>
                                    Martinis<br/>
                                    Classics<br/>
                                    Mocktails<br/>

                                </li>
                            </ul>
                        </div>
                    </figure>

                </div>
            </div><!-- /main -->

        </div><!-- /container -->

        <!-- Fullscreen BookBlock -->
        <!-- for demo purpose we repeat each bookblock -->
        <div class="bb-custom-wrapper" id="book-1">
            <div class="bb-bookblock">
                <?php
                for ($i = 1; $i <= 11; $i++) {
                    ?>
                    <div class="bb-item">
                        <div class="thumbnail " style="overflow-y: scroll;    height: -webkit-fill-available;">

                            <img src="<?php echo base_url(); ?>assets/images/menu2/food/food-<?php echo $i; ?>.jpg"/>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div><!-- /bb-bookblock -->
            <nav>
                <a href="#" class="bb-nav-prev">Previous</a>
                <a href="#" class="bb-nav-next">Next</a>
                <a href="#" class="bb-nav-close">Close</a>
            </nav>
        </div><!-- /bb-custom-wrapper -->


        <div class="bb-custom-wrapper" id="book-2">
            <div class="bb-bookblock">
                <div class="bb-item">
                    <div class="thumbnail " style="overflow-y: scroll;     height: -webkit-fill-available;">

                        <img src="<?php echo base_url(); ?>assets/images/menu/snacks/1.jpg" style="height: 100%;"/>
                    </div>
                </div>



            </div><!-- /bb-bookblock -->
            <nav>
                <a href="#" class="bb-nav-prev">Previous</a>
                <a href="#" class="bb-nav-next">Next</a>
                <a href="#" class="bb-nav-close">Close</a>
            </nav>
        </div><!-- /bb-custom-wrapper -->


        <div class="bb-custom-wrapper" id="book-3">
            <div class="bb-bookblock">
                <?php
                for ($i = 1; $i <= 18; $i++) {
                    ?>
                    <div class="bb-item">
                        <div class="thumbnail " style="overflow-y: scroll;    height: -webkit-fill-available;">

                            <img src="<?php echo base_url(); ?>assets/images/menu2/drink/drinks-<?php echo $i; ?>.jpg"/>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div><!-- /bb-bookblock -->
            <nav>
                <a href="#" class="bb-nav-prev">Previous</a>
                <a href="#" class="bb-nav-next">Next</a>
                <a href="#" class="bb-nav-close">Close</a>
            </nav>
        </div><!-- /bb-custom-wrapper -->

        <div class="bb-custom-wrapper" id="book-4">
            <div class="bb-bookblock">
                <?php
                for ($i = 1; $i <= 9; $i++) {
                    ?>
                    <div class="bb-item">
                        <div class="thumbnail " style="overflow-y: scroll;    height: -webkit-fill-available;">

                            <img src="<?php echo base_url(); ?>assets/images/menu2/cocktailos/cocktail-<?php echo $i; ?>.jpg"/>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div><!-- /bb-bookblock -->
            <nav>
                <a href="#" class="bb-nav-prev">Previous</a>
                <a href="#" class="bb-nav-next">Next</a>
                <a href="#" class="bb-nav-close">Close</a>
            </nav>
        </div><!-- /bb-custom-wrapper -->


        <script src="<?php echo base_url(); ?>assets/book/bookblock.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/book/classie.js"></script>
        <script src="<?php echo base_url(); ?>assets/book/bookshelf.js"></script>


    </div>
</section>





<?php
$this->load->view('layout/footer');
?>