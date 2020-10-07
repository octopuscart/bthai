<?php
$this->load->view('layout/header');
?>
<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="<?php echo base_url(); ?>assets/wizard/css/style.css" rel="stylesheet" />
<!-- ================== END PAGE LEVEL STYLE ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="<?php echo base_url(); ?>assets/wizard/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/wizard/js/jquery.steps.js"></script>
<script src="<?php echo base_url(); ?>assets/wizard/js/main.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<!--daterange picker-->
<link href="<?php echo base_url(); ?>assets/wizard/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/wizard/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/wizard/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/wizard/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" />




<script src="<?php echo base_url(); ?>assets/wizard/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/wizard/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/wizard/bootstrap-daterangepicker/moment.js"></script>
<script src="<?php echo base_url(); ?>assets/wizard/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js"></script>


<script>




</script>

<style>
    .googlebooking{
        background: var(--gm-fillbutton-container-color,#1a73e8);
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

                                            <h4 style=" font-size: 12px;
                                                height: 30px;">  Enter Booking Details </h4>


                                            <div class="" id="nav-tabContent">
                                                <div class="" id="nav-datetime" role="tabpanel" aria-labelledby="nav-datetime-tab">


                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group">

                                                                <label>Select Date</label>
                                                                <input type="text" class="form-control" id="datepicker-inline" value="{{bookingArray.select_date}}"  />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Select Time</label>
                                                                <select ng-model="bookingArray.select_time" class="form-control">
                                                                    <option value="">Select Time</option>
                                                                    <option value="{{time}}" ng-repeat="time in initWizard.timeslot">{{time}}</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Select Floor</label>
                                                                <select ng-model="bookingArray.select_table" class="form-control">
                                                                    <option value="--">Select Floor</option>
                                                                    <option value="Ground Floor">Ground Floor</option>
                                                                    <option value="First Floor">First Floor</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group guestselect">
                                                                <label>Total no. of guest(s)</label>
                                                                <div class="input-group input-group-sm"  style="width:170px; ">
                                                                    <span class="input-group-btn ">
                                                                        <button class="btn btn-default btn-sm " type="button" ng-click="changePeople('minus')"><i class="fa fa-minus"></i></button>
                                                                    </span>
                                                                    <input type="text" name="people" class="form-control" placeholder="" value="{{bookingArray.people}}" style="height: 32px;" id="people" required="">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-default  btn-sm  " type="button" ng-click="changePeople('plus')"><i class="fa fa-plus"></i></button>
                                                                    </span>
                                                                </div><!-- /input-group -->
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>




                                                <div class="" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">



                                                    <form action="#" method="post" >
                                                        <input type="hidden" name="select_date" value="{{bookingArray.select_date}}"/>
                                                        <input type="hidden" name="select_time" value="{{bookingArray.select_time}}"/>
                                                        <input type="hidden" name="booking_type" value="{{bookingArray.book_type}}"/>
                                                        <input type="hidden" name="select_table" value="{{bookingArray.select_table}}"/>
                                                        <input type="hidden" name="usertype" value="{{bookingArray.usertype}}"/>
                                                        <input type="hidden" name="people" value="{{bookingArray.people}}"/>








                                                        <div class="row">
                                                            <div class="form-holder col-md-6">
                                                                <div class="form-group">
                                                                    <label>First Name</label>
                                                                    <input type="text" name="first_name" placeholder="First Name" class="form-control" required="" ng-model="bookingArray.first_name">
                                                                </div>
                                                            </div>
                                                            <div class="form-holder col-md-6">
                                                                <div class="form-group">
                                                                    <label>Last Name</label>
                                                                    <input type="text" name="last_name" placeholder="Last Name" class="form-control" required="" ng-model="bookingArray.last_name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-holder  col-md-6">
                                                                <div class="form-group">
                                                                    <label>Your Email</label>
                                                                    <input type="text" name="email" placeholder="Your Email" class="form-control" required="" ng-model="bookingArray.email">
                                                                </div>
                                                            </div>
                                                            <div class="form-holder col-md-6">
                                                                <div class="form-group">
                                                                    <label>Phone Number</label>
                                                                    <input type="text" name="contact_no" placeholder="Phone Number" class="form-control" required="" ng-model="bookingArray.contact_no">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-row">

                                                            <div class="form-holder" style="    width: 100%;">
                                                                <input type="hidden" name="extra_remark" placeholder="Special Request (Optional)" class="form-control" >
                                                            </div>
                                                        </div>


                                                        <input type="checkbox" class="custom-control-input" name="registrationyes" checked="true" id="customCheck1" >


                                                        <div class="captchaarea" style="    margin-top: -20px;">
                                                            <div class="input-group divcenter">
                                                                <div class="input-group-prepend">

                                                                    <img src="<?php echo site_url("Api/createCaptha/booking") ?>" id='captchaimg' style="height: fit-content;" /> 

                                                                </div>

                                                                <input type="text" id="widget-subscribe-form-email2" name="captcha" class="form-control required email" required="" placeholder="Type Here">

                                                            </div>

                                                            <small class='details'>Can't read the image? click <a href="#" onclick="refreshCaptcha()">here</a> to refresh</small>
                                                        </div>
                                                        <hr/>


                                                        <button class="btn btn-default btn-lg " name="submit" type="submit">Confirm Now <i class="fa fa-arrow-right"></i></button>
                                                    </form>



                                                </div>
                                            </div>
                                            <div class="form-row">
                                            </div>
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
    var today = "<?php echo date('Y-m-d'); ?>";</script>
<script src="<?php echo base_url(); ?>assets/wizard/booking.js"></script>
