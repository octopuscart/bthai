<?php
$this->load->view('layout/header');
?>



<section id="content">

    <div class="content-wrap" style="padding: 0px;">

        <div class="row clearfix common-height">

            <div class="col-lg-6 center col-padding hideonmobile" style="background: url(<?php echo base_url(); ?>assets/images/party2.jpg) center center / cover no-repeat; height: 708px;">
                <div>&nbsp;</div>
            </div>
            <div class="col-lg-6 center col-padding" style="background: url(<?php echo base_url(); ?>assets/images/woodback.jpg) center;; height: 708px;">
                <div>
                    <div class="heading-block nobottomborder" >
                        <h3 style="color: white;">Private Parties/Catering</h3>
                    </div>


                    <p class="lead nobottommargin" style="color: white;">
                        Baan Thai restaurants offer complete catering packages for both in-house dining or delivery to your office, home, function space or boat/junk trip departure pier. We have both standardised packages for 10 to 100 people (or more) as well as tailor-made packages that cover casual dining for food, snacks and drinks.
                    </p>
                    <p class="lead nobottommargin" style="color: white;">
                        We facilitate comfortable dine-in gathering packages at both restaurants with options of private areas, but we also have both pick and delivery options for customers. We have restaurants located in Western and Central districts on Hong Kong Island, but can arrange deliveries further afield.
                    </p>
                    <p class="lead nobottommargin" style="color: white;">
                        Remember that Thai food in particular is great for sharing and ideal for party and gathering types occasions - everyone likes Thai food! There are several dishes that can be eaten with a simple fork or chopsticks, or even by hand. We also have the all time favourites like Phad Thai, other stir-fry's and our famous curries. Our pork laab mini burgers are already a big hit, especially for junk trips and office parties and we have the popular classical dishes like pork neck, spring rolls, fish cakes and satay - of course!
                    </p>
                    <hr/>
                    <p class="lead nobottommargin" style="color: white;">
                        * Please be assured that we can also provide for most dietary concerns. Vegetarian food options available.
                    </p>

                    <p class="lead nobottommargin" style="color: white;    font-weight: bold;">
                        Telephone : Central - 2840 0041 or Western - 2739 9188
                        <br/>
                        or please do Email us at : info@baanthai.hk
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