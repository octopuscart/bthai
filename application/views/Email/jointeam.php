
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>BaanThai.hk</title>
    </head>

    <body style="margin:0px; background: #f8f8f8; ">
        <div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
            <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
                    <tbody>
                        <tr>
                            <td style="vertical-align: top; padding-bottom:30px;" align="center">
                                <a href="<?php echo site_url("/"); ?>" target="_blank">
                                    <img src="<?php echo site_mail_logo; ?>" alt="Baan Thai" style="border:none;height:50px;"/></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="padding: 40px; background: #fff;background:url()">
                    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;color:black">
                        <tbody>
                            <tr>
                                <td style="    text-align: center;font-size: 18px;">

                                    <b>Dear <?php echo $appointment['first_name']; ?> <?php echo $appointment['last_name']; ?>,</b>
                                    <p>
                                     We appreciate your interest in Baan Thai. We will review your application and inform soon. 
                                    </p>

                                    <table style="font-size: 12px;    font-size: 15px;
                                           text-align: center;
                                           /* width: 300px; */
                                           margin: 10px 100px;
                                           background: white;
                                           color: black;
                                           border-radius: 39px;">
                                        <tr>
                                            <th style="text-align: right;width:45%;padding-right: 10px;">Name</th>
                                            <td style="    text-align: left;"><?php echo $appointment['first_name']; ?> <?php echo $appointment['last_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">Email</th>
                                            <td style="    text-align: left;"><?php echo $appointment['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">Contact No.</th>
                                            <td style="    text-align: left;"><?php echo $appointment['contact']; ?></td>
                                        </tr>

                                        <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">Job title</th>
                                            <td style="    text-align: left;"><?php echo $appointment['job_title']; ?></td>
                                        </tr>
                                          <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">Total Years Of Experience</th>
                                            <td style="    text-align: left;"><?php echo $appointment['experience']; ?></td>
                                        </tr>

                                        <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">Date Of Birth</th>
                                            <td style="    text-align: left;"><?php echo $appointment['birth_date']; ?></td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">Country </th>
                                            <td style="    text-align: left;"><?php echo $appointment['country']; ?></td>
                                        </tr>
                                        <tr>
                                            <th style="text-align: right;width:200px;padding-right: 10px;">City</th>
                                            <td style="    text-align: left;"><?php echo $appointment['city']; ?></td>
                                        </tr>


                                    </table>
              

                                    <b>- Thanks -</b> 
                                    <br/>
                                    <img src="<?php echo site_mail_logo; ?>" style="margin: 10px; height: 25px;    background: white;width: auto;"/>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
                    <p> 
                        <br>
                            </div>
                            </div>
                            </div>
                            </body>

                            </html>
