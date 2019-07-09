<?php
$this->load->view('layout/header');
?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.9134546706673!2d114.1527523149544!3d22.281267985333468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3404007b252e2283%3A0xbdca9c199b4fbb62!2sBaan+Thai!5e0!3m2!1sen!2sau!4v1536733116418"
        width="100%" height="400" frameborder="0" style="border: 0;;" allowfullscreen>
</iframe>


<!--content-->
<section class="section_offset">
    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">Contact Information</h3>

                <div class="row">

                    <div class="col-md-12">

                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4>
                                        <div class="footer_icon_container"> <i class="icon-location footer_icon" style="    font-size: 31px;"></i> </div>
                                        <div>
                                            <address style="margin-bottom: 0px">G/F and M/F, 57 Wyndham St,<br/> Central, Hong Kong</address>

                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>


                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4>
                                        <div class="footer_icon_container"> <i class="fa fa-whatsapp footer_icon" style="    font-size: 25px;"></i>  </div>
                                        <div class="float_left  m_l_10">
                                            <a href="tel:+852 2840 0041" style="    font-size: 20px;">+(852) 2840 0041</a>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>





                        <div class="spost clearfix">
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4>
                                        <div class="footer_icon_container"> <i class="icon-email3 footer_icon" style="    font-size: 25px;"></i>  </div>
                                        <div class="float_left m_top_5 m_l_10">
                                            <a href="mailto:info@baanthai.hk" style="    font-size: 20px;">info@baanthai.hk </a>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="spost clearfix">
                            <div class="entry-c">

                                <div class="fancy-title title-border" style="    margin-bottom: 19px;">
                                    <h4>Opening Hours</h4>
                                </div>



                                <ul class="iconlist nobottommargin">
                                    <li><i class="icon-time color"></i> <strong>Mondays-Wednesday:</strong><br/> 12:00 PM to 12:00 AM</li>
                                    <li><i class="icon-time color"></i> <strong>Thursday - Saturdays:</strong><br/> 12:00 PM to 02:00 AM</li>
                                    <li><i class="icon-time text-danger"></i> <strong>Sundays:</strong> <br/>12:00 PM to 12:00 AM</li>
                                </ul>
                            </div>
                        </div>


                        

                    </div>
                    <div class="col_full nobottommargin">


                    </div>




                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
                <h3 class="color_dark fw_light m_bottom_15 heading_1 t_align_c">Contact Form</h3>
                <div class="contact-widget">

                    <div class="contact-form-result"></div>

                    <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post" novalidate="novalidate">

                        <div class="form-process"></div>

                        <div class="col_one_third">
                            <label for="template-contactform-name">Name <small>*</small></label>
                            <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required">
                        </div>

                        <div class="col_one_third">
                            <label for="template-contactform-email">Email <small>*</small></label>
                            <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control">
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-phone">Phone</label>
                            <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control">
                        </div>

                        <div class="clear"></div>

                        <div class="col_two_third">
                            <label for="template-contactform-subject">Subject <small>*</small></label>
                            <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control">
                        </div>

                        <div class="col_one_third col_last">
                            <label for="template-contactform-service">Services</label>
                            <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control">

                        </div>

                        <div class="clear"></div>

                        <div class="col_full">
                            <label for="template-contactform-message">Message <small>*</small></label>
                            <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col_full hidden">
                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control">
                        </div>

                        <div class="col_full">
                            <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d ">Submit Comment</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
if (isset($_GET['error'])) {
    ?>

    <script>
        swal({
            title: 'Error',
            type: 'error',
            html: "Invalid Entry",
            timer: 5000,
        }).then(
                function () {
                    window.location = "<?php echo site_url("contact-us"); ?>";
                },
                function (dismiss) {
                    window.location = "<?php echo site_url("contact-us"); ?>";
                }
        )
    </script>
    <?php
}
?>


<?php
$this->load->view('layout/footer');
?>