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
                        Click here to find out about our latest promotions, special offers, packages and discounts. You are also welcome to send us an enquiry about offers, group packages, private parties and tailor made menus. 
                    </p>
                    
                       <p class="lead nobottommargin" style="color: white;">
                        For party package and party event or private catering write us at <a href="mailto:info@baanthai.hk" style="color: white;
    font-weight: bold;">info@baanthai.hk</a>   
                    </p>

                </div>
            </div>
        </div>



        <div class="section parallax dark nobottommargin" style="background-image: url('<?php echo base_url(); ?>assets/images/clientsbackground3.jpg');background-size: cover;     margin: 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

            <h4 class="uppercase center">What <span>Customers</span> Say?</h4>

            <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="true">
                <div class="flexslider">
                    <div class="slider-wrap">

                        <?php
                        $testimoni = [
                            array("name" => "Christine", "country_city" => "", "review" => "Went in for drinks with visiting family members, had a lovely time. The servers were friendly and bubbly, hoping to come back to try the food as it looked delicious on the neighbouring tables."),
                            array("name" => "Loire Cheung", "country_city" => "", "review" => "Great location in the less busy zone of Central, very yummy and authentic Thai cuisine. Friendly staff. Considered not expensive in the area."),
                            array("name" => "Dimitrios Giannarakis", "country_city" => "", "review" => "Really nice place in the heart of LKF with very helpful staff and surprisingly original thai food. A few outdoors seats don't forget to try the prawns and pomelo salad!"),
                            array("name" => "Peggy Lui", "country_city" => "", "review" => "Food is Delicious and Fresh! Good atmosphere and Environment, Really Good Service and good recommendation with the Waitress!"),
                        ];
                        foreach ($testimoni as $key => $value) {
                            ?>

                            <div class="slide">

                                <div class="testi-content">
                                    <p>
                                        <?php echo $value['review']; ?>
                                    </p>
                                    <div class="testi-meta">
                                        <?php echo $value['name']; ?>

                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>

        </div>


    </div>
</section>





<?php
$this->load->view('layout/footer');
?>