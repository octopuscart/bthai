<?php
$this->load->view('layout/header');
?>
<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="<?php echo base_url(); ?>assets/wizard/css/style.css" rel="stylesheet" />
<!-- ================== END PAGE LEVEL STYLE ================== -->


<script>




</script>

<style>
    .googlebooking{

        border-color: #1a73e8;
    }

    .form-control {
        height: 37px;
        border: none;
        border: 2px solid #e6e6e6;
        width: 100%;
        color: #666;
        color: #000!important;
    }

    label {
        display: inline-block;
        font-size: 13px;
        font-weight: 500;
        font-family: 'Raleway', sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #595959;
        margin-bottom: 0;
        cursor: pointer;
        text-align: start;
        width: 100%;
    }

    .btn-default{
        background-color: #cbcbcbfa;
    }

    .guestselect .btn-default{
        width: 50px;
    }

    .select.form-control{
        color:black;
    }


    .border-booking-new{
        border-radius: 5px;
        border: 2px solid #e6e6e6;
        width: 100%;
        padding: 10px 0px;
        margin: 0px 5px;
    }
</style>

<section id="content" ng-controller="bookingController">

    <div class="content-wrap" style="padding: 0px;">

        <div class="row1 clearfix">

            <div class=" row1 " style="background: url(<?php echo base_url(); ?>assets/images/clientsbackground3.jpg) center; padding-top: 20px;">



                <div class="col-md-12 center bookingpanel " >
                    <div>
                        <!-- begin row -->
                        <div class=" ">
                            <!-- begin col-12 -->






                            <div id="wizard1">
                                <!--<form action="#" class="" id="wizard">-->
                                <!-- SECTION 1 -->
                                <h2></h2>
                                <section>




                                    <div class="inner">
                                        <div class="image-holder1 hideonmobile">
                                            <div class="form-header" style="    position: absolute;
                                                 /* width: 100%; */
                                                 left: 240px;
                                                 top: 44px;">
                                                <h3 style="background: white">Book Now</h3>
                                                <!--                                                <br/>
                                                                                                <a class="btn btn-success btn-lg googlebooking" href="https://www.google.com/maps/reserve/v/dine/c/srRT-hmWx0E?source=pa&hl=en-IN&gei=qg7AXsuuApOM4-EPgJqbyAM&sourceurl=https://www.google.com/search?q%3Dbaanthai%2Bhong%2Bkong%26rlz%3D1C1CHBF_enIN843IN843%26oq%3Dbaanthai%2Bhong%26aqs%3Dchrome.0.69i59j0j69i57j0l2j69i60l2j69i65.4210j0j7%26sourceid%3Dchrome%26ie%3DUTF-8" target="_blank">
                                                                                                    <img src="<?php echo base_url(); ?>assets/images/googlefavicon.png" style="height: 25px;"/> Google Booking
                                                                                                </a>-->
                                            </div>
                                            <img src="<?php echo base_url(); ?>assets/wizard/images/form-wizard-1.jpg" alt="" style="height: 600px;">
                                        </div>
                                        <div class="form-content" >







                                            <iframe src="https://cho.pe/dineatbaanthairestauranthk" style="    width: 100%;
                                                    height: 800px;"></iframe>




                                        </div>
                                    </div>
                                </section>
                            </div>
                            <!-- end col-12 -->

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end #content -->
                </div>
                <div style="clear: both"></div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="thanksModal" tabindex="-1" role="dialog" aria-labelledby="thanksModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-content" >


                    <div class="modal-body" style="padding: 0px;">
                        <button type="button" class="close" data-dismiss="modal" style="    position: absolute;
                                right: 8px;
                                color: #000;">&times;</button>

                        <img src="<?php echo base_url(); ?>assets/images/popupthankyou.jpg">
                    </div>
                </div><!-- /.modal-content -->

            </div>
        </div>
    </div>

    <script>
                var listofbookeddate = <?php echo json_encode($datelist); ?>;
<?php
if ($submitdata == 'yes') {
    ?>
                    $(function () {
                        let newmail = new Audio("<?php echo base_url(); ?>assets/sound/sendemail.mp3");
                        newmail.play();
                        $("#thanksModal").modal("show");
                        $('#thanksModal').on('hidden.bs.modal', function (e) {
                            window.location = "<?php echo site_url('booknow'); ?>";
                        });
                        setTimeout(function () {
                            $("#thanksModal").modal("hide");
                            window.location = "<?php echo site_url('booknow'); ?>";
                        }, 10000)
                    })
    <?php
}
?>



    </script>



</section>





<?php
$this->load->view('layout/footer');
?>



<script>
    var today = "<?php echo date("Y-m-d"); ?>";</script>
<script src="<?php echo base_url(); ?>assets/wizard/booking.js"></script>
