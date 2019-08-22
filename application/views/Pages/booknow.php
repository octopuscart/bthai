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



<style>
    .datepicker-inline {
        /*width: 450px;*/
    }
    .datepicker table{
        /*width:100%;*/
    }
    .datepicker td, .datepicker th {
        padding: 5px;
        color: black;
    }
    .datepicker table tr td.active:hover, .datepicker table tr td.active:hover:hover, .datepicker table tr td.active.disabled:hover, .datepicker table tr td.active.disabled:hover:hover, .datepicker table tr td.active:focus, .datepicker table tr td.active:hover:focus, .datepicker table tr td.active.disabled:focus, .datepicker table tr td.active.disabled:hover:focus, .datepicker table tr td.active:active, .datepicker table tr td.active:hover:active, .datepicker table tr td.active.disabled:active, .datepicker table tr td.active.disabled:hover:active, .datepicker table tr td.active.active, .datepicker table tr td.active:hover.active, .datepicker table tr td.active.disabled.active, .datepicker table tr td.active.disabled:hover.active, .open .dropdown-toggle.datepicker table tr td.active, .open .dropdown-toggle.datepicker table tr td.active:hover, .open .dropdown-toggle.datepicker table tr td.active.disabled, .open .dropdown-toggle.datepicker table tr td.active.disabled:hover {
        color: #ffffff;
        background-color: #000000;
        border-color: #151515;
    }

    .btnbooking{
        background: black!important;
        border-color: black!important;
        border-radius: 15px;
    }
    .button_plus{
        border-radius: 15px;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        background: black!important;
        border-color: black!important;
    }

    .button_minus{
        border-radius: 15px;
        border-top-right-radius:  0;
        border-bottom-right-radius: 0;
        background: black!important;
        border-color: black!important;
    }

    span.booking_lable {
        font-size: 16px;
        color: black;
    }

    .form-row{
        /*        border-bottom: 1px solid #000;
                padding-bottom: 15px;*/
    }

    .stimeslot .btn {
        float: left;
        padding: 5px;
        margin: 5px;
        background: black;
        color: white;
        border-radius: 15px;
        font-size: 12px;
    }

    .tabimage{
        height: 40px;
    }

    .tabtitle{
        margin-bottom: 0px;
        font-size: 12px;
        color: black
    }
    .titleblockwix {
        float: left;
        width: 100%;
        background: black;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        margin-top: 20px;
    }


</style>

<script>

    function changePeople(func) {
    let people = $("#people").val();
    let numpeople = Number(people);
    if (func == 'plus') {
    numpeople += 1;
    } else {
    if (numpeople != 1) {
    numpeople -= 1;
    }
    }
    $("#people").val(numpeople);
    }



</script>


<section id="content" ng-controller="bookingController">

    <div class="content-wrap" style="padding: 0px;">

        <div class="row clearfix common-height">

            <div class=" row center col-padding" style="background: url(<?php echo base_url(); ?>assets/images/clientsbackground.jpg) center;; height: 708px;    width: 100%;    padding-top: 20px;">

                <div class="col-lg-2 center col-padding" >
                    <div>&nbsp;</div>
                </div>

                <div class="col-lg-10 center " style="    width: 100%;">
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
                                        <div class="image-holder1">
                                            <div class="form-header" style="    position: absolute;top:20px;left: 8.5%;">
                                                <h3 style="background: white">Book Now</h3>
                                            </div>
                                            <img src="<?php echo base_url(); ?>assets/wizard/images/form-wizard-1.jpg" alt="">
                                        </div>
                                        <div class="form-content" >




                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <!--datetime-->
                                                    <a class="nav-item nav-link active" id="nav-datetime-tab" data-toggle="tab" href="#nav-datetime" role="tab" aria-controls="nav-datetime" aria-selected="true">

                                                        <figure class="figure" style="width: 150px;">
                                                            <img src="<?php echo base_url(); ?>assets/wizard/images/time.svg" class="figure-img img-fluid rounded tabimage" alt="...">
                                                            <figcaption class="figure-caption">
                                                                <p class="tabtitle">{{bookingArray.select_date}}</p>
                                                                <p class="tabtitle">{{bookingArray.select_time}}</p>
                                                            </figcaption>
                                                        </figure>

                                                    </a>


                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                        <figure class="figure" style="width: 150px;">
                                                            <img src="<?php echo base_url(); ?>assets/wizard/images/profile.png" class="figure-img img-fluid rounded tabimage" alt="...">
                                                            <figcaption class="figure-caption">
                                                                <p class="tabtitle">{{bookingArray.book_type}}</p>
                                                                <p class="tabtitle">{{bookingArray.people}} Guest(s)</p>
                                                            </figcaption>
                                                        </figure>
                                                    </a>


                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-datetime" role="tabpanel" aria-labelledby="nav-datetime-tab">
                                                    <div style="    margin-top: 20px;">
                                                        <h4 style="    font-size: 12px;">Click here to reserve a booking or make an enquiry.</h4>
                                                        <div class="btn-group"  role="group" aria-label="Basic example">
                                                            <button type="button" class="btn btn-danger {{bookingArray.book_type == 'Reserve'?'active':''}}" ng-click="bookType('Reserve')">Reserve Now</button>
                                                            <button type="button" class="btn btn-danger {{bookingArray.book_type == 'Enquiry'?'active':''}}" ng-click="bookType('Enquiry')">Make An Enquiry</button>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-5">

                                                            <div class="">
                                                                <span class="titleblockwix">Select Date</span>
                                                                <div id="datepicker-inline"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span class="titleblockwix">Select Time</span>
                                                            <div class="stimeslot">
                                                                <button class="btn btn-primary btn-inverse btn-sm" ng-repeat="time in initWizard.timeslot" ng-click="selectTime(time)">{{time}}</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btnbooking btn-lg"    ng-if='bookingArray.select_time != "--:--:--"'    ng-click='changeWizardProfile()'  >Select Guest(s) <i class="fa fa-arrow-right"></i></button>
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="select_date" value="{{bookingArray.select_date}}"/>
                                                        <input type="hidden" name="select_time" value="{{bookingArray.select_time}}"/>
                                                        <input type="hidden" name="booking_type" value="{{bookingArray.book_type}}"/>
                                                        <center>
                                                            <div class="form-row" style="width:150px; ">
                                                                <span class="booking_lable" style="    float: left;
                                                                      width: 100%;">Select people</span>
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-btn ">
                                                                        <button class="btn btn-primary btn-sm button_minus" type="button" ng-click="changePeople('minus')"><i class="fa fa-minus"></i></button>
                                                                    </span>
                                                                    <input type="text" name="people" class="form-control" placeholder="" value="{{bookingArray.people}}" style="height: 32px;" id="people" required="">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-primary  btn-sm  button_plus" type="button" ng-click="changePeople('plus')"><i class="fa fa-plus"></i></button>
                                                                    </span>
                                                                </div><!-- /input-group -->
                                                            </div>
                                                        </center>

                                                        <h4 style="    font-size: 12px;">  Enter Guest Details </h4>

                                                        <div class="form-row">
                                                            <div class="form-holder">
                                                                <input type="text" name="first_name" placeholder="First Name" class="form-control" required="">
                                                            </div>
                                                            <div class="form-holder">
                                                                <input type="text" name="last_name" placeholder="Last Name" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-holder">
                                                                <input type="text" name="email" placeholder="Your Email" class="form-control" required="">
                                                            </div>
                                                            <div class="form-holder">
                                                                <input type="text" name="contact_no" placeholder="Phone Number" class="form-control" required="">
                                                            </div>
                                                        </div>

                                                        <div class="form-row">

                                                            <div class="form-holder" style="    width: 100%;">
                                                                <input type="text" name="extra_remark" placeholder="Special Request (Optional)" class="form-control" >
                                                            </div>
                                                        </div>






                                                        <button class="btn btn-primary btn-lg button_minus"  ng-click="changeWizardTime()"><i class="fa fa-arrow-left"></i></button>
                                                        <button class="btn btn-primary btn-lg button_plus" name="submit" type="submit">Confirm Now <i class="fa fa-arrow-right"></i></button>
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
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thanks you for booking.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2>
                        Thank You for giving us the opportunity to serve you.<br/> We will do our best to be sure you enjoy our services.
                    </h2>

                    <figure class="figure" style="    width: 100%;margin-top: 20px;
                            text-align: center;">
                        <img src="<?php echo base_url(); ?>assets/images/logo50.png" class="figure-img img-fluid rounded" alt="Baan Thai" style="height:40px">
                        <figcaption class="figure-caption">The signature flavors of authentic Thai cuisine.</figcaption>
                    </figure>

                </div>

            </div>
        </div>
    </div>

    <script>

<?php
if ($submitdata == 'yes') {
    ?>
            $(function(){
            $("#thanksModal").modal("show");
            $('#thanksModal').on('hidden.bs.modal', function (e) {
            window.location = "<?php echo site_url('booknow'); ?>";
            });
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
