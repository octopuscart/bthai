<?php
$this->load->view('layout/header');
?>



<section id="content">

    <div class="content-wrap" style="padding: 0px;">

        <div class="row clearfix common-height">

            <div class="col-lg-6 center col-padding hideonmobile" style="background: url(<?php echo base_url(); ?>assets/images/food/26.jpg) center center / cover no-repeat; height: 708px;">
                <div>&nbsp;</div>
            </div>
            <div class="col-lg-6 center col-padding" style="background: url(<?php echo base_url(); ?>assets/images/woodback.jpg) center;; height: 708px;">
                <div>
                    <div class="heading-block nobottomborder" >
                        <h3 style="color: white;">About Us</h3>
                    </div>


                    <p class="lead nobottommargin" style="color: white;">
                        Welcome to Baan Thai! Our rustic and stylish restaurant is located in the heart of Central along Wyndham Street and showcases the signature flavors of authentic Thai cuisine. Our menu is inspired by Siam cuisine specifically and we serve a variety of small plates, curries, fresh seafood, noodles, stir fries and vegetarian options, that are cooked with fresh herbs and spices. All our chefs are Thai and therefore ensure that you enjoy that special taste of Thailand when dining at our restaurant.
                    </p>
                    <p class="lead nobottommargin" style="color: white;">
                        We also offer an extensive cocktail and drinks menu to either compliment your meal or simply to enjoy with a snack at happy hour or after dinner drinks. We are easily accessed by public transport, whether coming via the MTR, bus routes or taxi, so come and pay us a visit and sample some delicious Thai cuisine here at Baan Thai Hong Kong!
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