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
                You are also welcome to send us an enquiry about offers, group packages, private parties and tailor made menus. 
                    </p>
                    
                       <p class="lead nobottommargin" style="color: white;">
                        For party package and party event or private catering write us at <a href="mailto:info@baanthai.hk" style="color: white;
    font-weight: bold;">info@baanthai.hk</a>   
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