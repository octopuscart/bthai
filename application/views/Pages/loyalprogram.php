<?php
$this->load->view('layout/header');
?>
<link href="<?php echo base_url(); ?>assets/wizard/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/wizard/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />

<script src="<?php echo base_url(); ?>assets/wizard/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/wizard/bootstrap-daterangepicker/moment.js"></script>


<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="<?php echo base_url(); ?>assets/wizard/css/style.css" rel="stylesheet" />
<!-- ================== END PAGE LEVEL STYLE ================== -->

<style>
    .btnbooking{
        background: black!important;
        border-color: black!important;
        border-radius: 15px;
    }
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;   
        cursor: inherit;
        display: block;
    }
</style>

<section id="content">

    <div class="content-wrap" style="padding: 0px;">

        <div class="row clearfix ">

            <div class="col-lg-6 center col-padding hideonmobile" >
                <h3 style="   ">
                    * ENROLL NOW AND RECEIVE A DRINK ON THE HOUSE !	
                </h3>
                <img src="<?php echo base_url(); ?>assets/images/slider/clientsbackground3.jpg" style="height: 200px;"/>

                <p>
                    Welcome to the Baan Thai Spice Club
                    Join our customer loyalty program and earn cash vouchers based on numbers of visits to Baan Thai ! 

                </p>
                <p class="verticaletext">
                    In addition, we will send you up-dates on promotions, new member benefits and special offers available at Baan Thai. What’s more, celebrate your birthday at Baan Thai Restaurant and receive a free bottle of wine on us!
                </p>
                <div class="headandtextblock">
                    <p>
                        <span>Visits </span>
                        Each time you visit Baan Thai, you earn loyalty ‘visits’. The more you visit and spend, the faster you earn vouchers!
                    </p>
                    <p>
                        <span>Redeem Cash Vouchers </span>
                        Your loyalty visits that you’ve accumulated can now be converted to cash vouchers for spending on food and beverages at Baan Thai.
                    </p>
                    <p>
                        <span>Spend Cash Vouchers </span>
                        Dine at Baan Thai and pay towards your bill by using your cash vouchers. It’s that simple!
                    </p>
                </div>


                <div class="termandconditon">
                    <h3>
                        Terms and Conditions
                    </h3>
                    <p>-Spice Club Members agree to receive email notices regarding promotions, special offers, news and discount offers.</p>
                    <p>-	Baan Thai’s Spice Club membership is renewable on an annual basis.</p>
                    <p>-	Baan Thai Restaurant has the right to adjust its terms, conditions and redemption offers from time to time, or as it sees fit.</p>
                    <p>-	Spice Club members must register their attendance at the restaurant via their wallet App, on their mobile phone with our QR code reader.</p>
                    <p>-	Each time you visit and spend, upon your 10th visit, you will automatically receive  gift voucher - which would be equivalent to 10% of your total spending.</p>
                    <p>After gift vouchers are redeemed, Spice Club members can continue to spend and accumulate points to receive more gift vouchers <small>(for as long as the loyalty program is operating)</small>.</p>
                    <p>-	Gift vouchers are valid for 1 months after the issue date.</p>
                    <p>-	The gift voucher redemption can only be applied to A La Carte menu items and not for set meals, package offers, already discounted items and happy hour drinks.</p>
                    <p>-	Once gift vouchers are redeemed, the loyalty program will restart with new loyalty points (for as long as the loyalty program is operating).</p>
                    <p>-	Gift vouchers may not be redeemed at Baan Thai Restaurant on special dates, private functions or dates when the restaurant is fully booked.</p>
                    <p>-	Gift vouchers are not transferable to non Spice Club members.</p>
                    <p>-	Gift vouchers are not transferable for cash.</p>
                    <p>-	In case of any disputes, Baan Thai Restaurant will have the final say.</p>
                </div>


            </div>
            <div class="col-lg-6 center col-padding" style="background: url(<?php echo base_url(); ?>assets/images/woodback.jpg) center;; height: 708px;">
                <div>
                    <div class="heading-block nobottomborder" style="margin-bottom: 0px;">
                        <h3 style="color: white;">Loyalty Program</h3>
                    </div>
                    <div id="wizard1">
                        <!--<form action="#" class="" id="wizard">-->
                        <!-- SECTION 1 -->
                        <h2 style="font-size: 26px;
                            color: white;
                            margin: 15px 0px 20px;">Join Baan Thai Spice Club </h2>
                        <section>




                            <div class="inner">

                                <div class="form-content" style="    width: 100%;">


                                    <div >
                                        <form action="#" method="post">
                                            <div class="form-row">

                                                <div class="col-md-12">
                                                    <img src="<?php echo base_url(); ?>assets/images/user1.png" id="previewHolder" alt="Your Image" width="150px" height="150px"/>
                                                </div>
                                                <div class="col-md-12">
                                                    <span class="btn btn-primary btn-file" style=" margin-top: 20px;   height: 40px;">
                                                        Browse <input type="file" name="filePhoto" value="" id="filePhoto" class="required borrowerImageFile" data-errormsg="PhotoUploadErrorMsg">
                                                    </span>
                                                </div>
                                            </div>


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
                                                    <input type="text" name="contact_no" placeholder="Contact Number" class="form-control" required="">
                                                </div>
                                            </div>

                                            <div class="form-row">

                                                <div class="form-holder" style="    width: 100%;">
                                                    <input type="text" name="address" placeholder="Address" class="form-control" >
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="form-holder">
                                                    <input type="text" id="birthdate" name="birth_date" placeholder="Date Of Birth" class="form-control" required="">
                                                </div>
                                                <div class="form-holder">
                                                    <select name="language"  class="form-control" required="">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="form-holder">
                                                    <select name="country"  class="form-control" required="">
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and/or Barbuda">Antigua and/or Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British lndian Ocean Territory">British lndian Ocean Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="East Timor">East Timor</option>
                                                        <option value="Ecudaor">Ecudaor</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="France, Metropolitan">France, Metropolitan</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern Territories</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong" selected="">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Ivory Coast">Ivory Coast</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macau">Macau</option>
                                                        <option value="Macedonia">Macedonia</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfork Island">Norfork Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="St. Helena">St. Helena</option>
                                                        <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbarn and Jan Mayen Islands">Svalbarn and Jan Mayen Islands</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States minor outlying islands">United States minor outlying islands</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican City State">Vatican City State</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                        <option value="Virigan Islands (British)">Virigan Islands (British)</option>
                                                        <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Yugoslavia">Yugoslavia</option>
                                                        <option value="Zaire">Zaire</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                                <div class="form-holder">
                                                    <input type="text"  name="city" placeholder="City" class="form-control" required="">
                                                </div>

                                            </div>






                                            <button class="btn btn-primary btn-lg btnbooking" type="submit" name="submit"><i class="fa fa-arrow-down"></i> Join Now</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="thanksModal" tabindex="-1" role="dialog" aria-labelledby="thanksModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thanks you for joining.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2>
                            Thank you for joining our customer loyalty program.
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
                $(function () {
                    let newmail = new Audio("<?php echo base_url(); ?>assets/sound/sendemail.mp3");
                    newmail.play();
                    $("#thanksModal").modal("show");
                    $('#thanksModal').on('hidden.bs.modal', function (e) {
                        window.location = "<?php echo site_url('loyalprogram'); ?>";
                    });
                    setTimeout(function () {
                        $("#thanksModal").modal("hide");
                        window.location = "<?php echo site_url('loyalprogram'); ?>";
                    }, 10000)
                })
    <?php
}
?>
        </script>



    </div>
</section>





<?php
$this->load->view('layout/footer');
?>

<script>
    $(function () {
        setTimeout(function () {
            $("#birthdate").datepicker({
                format: 'yyyy-mm-dd',
                startView: 2,
                autoclose: true

            })
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#previewHolder').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#filePhoto").change(function () {
            readURL(this);
        });

    })
</script>