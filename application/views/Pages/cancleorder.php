<?php
$this->load->view('layout/header');
?>

<style>
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
</style>

<section id="content">

    <div class="content-wrap" style="    padding: 15px;">
        <h3 class="text-center">Order no. #<?php echo $order_data->id; ?></h3>
        <table class="detailstable" align="center" border="0" cellpadding="0" cellspacing="0" width="700" style="background: #fff">
            <tr>
                <td style="font-size: 12px;width: 50%" >

                    <table class="gn_table">
                        <tr>
                            <td colspan="2">
                                <b>Guest Information</b><br/><hr/>
                            </td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>: <?php echo $order_data->first_name; ?> <?php echo $order_data->last_name; ?> </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>: <?php echo $order_data->email; ?> </td>
                        </tr>
                        <tr>
                            <th>Contact No.</th>
                            <td>: <?php echo $order_data->contact; ?> </td>
                        </tr>

                    </table>


                </td>
                <td style="font-size: 12px;width: 35%" >

                    <table class="gn_table">

                        <tr>
                            <th>Order No.</th>
                            <td>: <?php echo $order_data->id; ?> </td>
                        </tr>
                        <tr>
                            <th>Date/Time</th>
                            <td>: <?php echo $order_data->datetime; ?>   </td>
                        </tr>

                        <tr>
                            <th>Order Source</th>
                            <td>: <?php echo $order_data->order_source; ?>   </td>
                        </tr>

                    </table>


                </td>
            </tr>
        </table>





        <table class="boooking"   align="center" border="1" cellpadding="0" cellspacing="0" width="700" style="background: #fff;padding:20px">
            <tr style="font-weight: bold">
                <td colspan="2"  style="text-align: center;width: 33%;">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>assets/wizard/images/time.svg" alt="..." style="height: 50px;">
                        <div class="caption">
                            <h3>Date/Time</h3>
                            <p><?php echo $order_data->select_date; ?> <?php echo $order_data->select_time; ?></p>
                        </div>
                    </div>
                </td>
                <td colspan="2"  style="text-align: center;width: 33%;">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>assets/wizard/images/table.png" alt="..." style="height: 50px;">
                        <div class="caption">
                            <h3>Table</h3>
                            <p><?php echo $order_data->select_table; ?></p>
                        </div>
                    </div>
                </td>
                <td colspan="2" style="text-align: center;width: 33%;">
                    <div class="thumbnail">
                        <img src="<?php echo base_url(); ?>assets/wizard/images/profile.png" alt="..." style="height: 50px;">
                        <div class="caption">
                            <h3><?php echo $order_data->booking_type; ?></h3>
                            <p>Guest(s): <?php echo $order_data->people; ?></p>
                        </div>
                    </div>
                </td>
            </tr>






        </table>
        <center>
        <div class="btn-group">
            <form action="#" method="post">
            <button class="btn btn-primary btn-lg button_minus" type="submit" name="cancle"><i class="fa fa-times"></i>  Cancel Booking </button>
            <button class="btn btn-primary btn-lg button_plus" type="submit" name="update" >Update Booking  <i class="fa fa-arrow-right"></i></button>
            </form>
        </div>
        </center>
    </div>
</section>





<?php
$this->load->view('layout/footer');
?>