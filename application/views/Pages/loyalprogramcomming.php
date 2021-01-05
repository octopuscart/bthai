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
    iframe{
        width: 90%;
    height: 1400px;
    /* float: left; */
    zoom: 50px;
    overflow: hidden;
    margin-top: 50px;
    }
</style>

<section id="content">

    <div class="content-wrap" style="padding: 0px;">

        <div class="row clearfix ">

            <div class="col-lg-12 center col-padding hideonmobile" >
                <h3 style="   ">
                Coming Soon	
                </h3>
               


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