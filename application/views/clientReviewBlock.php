<div class="section parallax dark nobottommargin" style="background-image: url('<?php echo base_url(); ?>assets/images/clientsbackground3.jpg');background-size: cover;     margin: 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

    <div class="heading-block center">
        <h3>What Customers Say?</h3>
    </div>

    <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="true">
        <div class="flexslider">
            <div class="slider-wrap">

                <?php
                $testimoni = [
                    array("name" => "Shannon K", "country_city" => "Sunshine Coast, Australia", "review" => "<b>Authentic Thai food at its finest!</b><br/>Such a good night at Baan Thai - had a very welcoming atmosphere with some amazing dishes such as the char-grilled pork neck and the salmon curry. It was all reasonably priced and served by friendly waitresses. I will definitely be coming back when I can for another night of dinner and drinks. :)"),
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
                                <br/>
                                <?php echo $value['country_city']; ?>
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
