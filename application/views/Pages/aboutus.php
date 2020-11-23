<?php
$this->load->view('layout/header');
?>

<style>
    .lead {
        font-size: 1.15rem;
        font-weight: 300;
    }
</style>



<section id="content">

    <div class="content-wrap" style="padding: 0px;">

        <div class="row clearfix common-height">

            <div class="col-lg-6 center col-padding hideonmobile" style="background: url(<?php echo base_url(); ?>assets/images/nutcha.jpg) center center / cover no-repeat; height: 1000px;">
                <div>&nbsp;</div>
            </div>
            <div class="col-lg-6 center col-padding" style="background: url(<?php echo base_url(); ?>assets/images/woodback.jpg) center;; height: 708px;">
                <div>
                    <div class="heading-block nobottomborder" >
                        <h3 style="color: white;">About Us</h3>
                    </div>


                    <p class="lead nobottommargin" style="color: white;">
                        Our rustic and stylish restaurants are located in the heart of Central along Wyndham Street, as well as in Western District next to HKU Station, with both restaurants showcasing the signature flavours of authentic Thai cuisine.                    </p>
                    <p class="lead nobottommargin" style="color: white;">
                        Our menu is inspired by the popular flavours of Siam cuisine from the great cities of Bangkok and Udon Thani, specifically as we serve many small plates, curries, fresh seafood, noodles, stir fries and vegetarian options, that are cooked with fresh herbs and spices. All our chefs in both Central and Western branches are Thai so as to ensure customers that they enjoy that special taste of Thailand when dining at a Baan Thai restaurant.                    </p>
                    <p class="lead nobottommargin" style="color: white;">
                        Baan Thai also offers an extensive selection of drinks and cocktails to compliment your delicious meal or snacks. We have a wide range of draught and bottled beers, wines, cocktails, mocktails and of course soft drinks. We have a early starting happy hour and stay open late on certain days of the week. Baan Thai Central is close to the escalator and Baan Thai Western, is next to the MTR station (at HKU).
                    </p>
                </div>
            </div>
        </div>




        <?php
        $this->load->view('clientReviewBlock');
        ?>


    </div>
</section>





<?php
$this->load->view('layout/footer');
?>