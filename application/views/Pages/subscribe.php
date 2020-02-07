<?php
$this->load->view('layout/header');
?>

<div class="section_offset" ng-controller="lookBookController" style="background: url(<?php echo base_url(); ?>assets/images/gallary.jpg) ;background-repeat: no-repeat;background-size: cover;    height: 600px;
     overflow-y: scroll;">

    <div class="container clearfix m_t_30">

        <div class="col_full1">
            <div class="heading-block1 center nobottomborder">
                <span class="before-heading " style="    font-size: 47px;
                      color: white;">Thank You For Subscribing</span>
            </div>
        </div>
    </div>
</div>
<!--content-->


<script>

    setTimeout(function () {
    window.location = "<?php echo site_url("/"); ?>";
    }, 5000)

</script>

<?php
$this->load->view('layout/footer');
?>