<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('User_model');

        $this->load->library('user_agent');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
        $this->session_user = $this->session->userdata('admin_login');
        $checkmobile = $this->agent->is_mobile();
        $this->session->set_userdata('checkmobile', $checkmobile);
    }

    public function error404() {
        set_status_header('404');
        $this->load->view('errors/error_404');
    }

    public function index() {
    
        $this->load->view('home2');
    }

    public function menu() {
        $this->load->view('Pages/menu');
    }

    public function contactus() {
        $data['checksent'] = 0;


        if (isset($_POST['sendmessage'])) {
            if ($this->input->post('anti_spam') == 8) {
                
            } else {
                redirect('contact-us?error=cw');
            }
            $web_enquiry = array(
                'last_name' => "",
                'first_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'datetime' => date("Y-m-d H:i:s a"),
            );

            $this->db->insert('web_enquiry', $web_enquiry);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('full_name');


//redirect('contact-us');
        }
        $this->load->view('Pages/contactus', $data);
    }

    public function aboutus() {
        $this->load->view('Pages/aboutus');
    }

    public function loyaltyProgram() {
        $data = array();
        $data['submitdata'] = "";
        if (isset($_POST['submit'])) {
            $web_input = array(
                'last_name' => $this->input->post('first_name'),
                'first_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact_no'),
                'address' => $this->input->post('address'),
                'birth_date' => $this->input->post('birth_date'),
                'language' => $this->input->post('language'),
                'country' => $this->input->post('country'),
                'city' => $this->input->post('city'),
                'datetime' => date("Y-m-d H:i:s a"),
            );
            $this->db->insert('web_loyalprogram', $web_input);
            $data['submitdata'] = 'yes';

            //email sending
            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;

            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = "Thank you for joining";
                $subject = $subjectt;
                $this->email->subject($subject);
                $appointment['appointment'] = $web_input;
                $htmlsmessage = $this->load->view('Email/loyalprogrammail', $appointment, true);

                if (REPORT_MODE == 1) {
                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();

                    $send = $this->email->send();
                    if ($send) {
                        // redirect(site_url("booknow"));
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        //    redirect(site_url("booknow"));
                    }
                } else {
                    echo $htmlsmessage;
                }
            }
        }
        $this->load->view('Pages/loyalprogram', $data);
    }

    public function joinTeam() {
        $data = array();
        $data['submitdata'] = "";
        if (isset($_POST['submit'])) {
            $web_input = array(
                'last_name' => $this->input->post('first_name'),
                'first_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact_no'),
                'birth_date' => $this->input->post('birth_date'),
                'job_title' => $this->input->post('job_title'),
                'experience' => $this->input->post('experience'),
                'language' => $this->input->post('language'),
                'country' => $this->input->post('country'),
                'city' => $this->input->post('city'),
                'datetime' => date("Y-m-d H:i:s a"),
            );

            $data['submitdata'] = 'yes';

            //email sending
            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;

            $captchatext = $this->session->userdata("captchacode_join");

            $checkcaptcha = $this->input->post("captcha");
            if ($captchatext == $checkcaptcha) {

                if ($this->input->post('email')) {
                    $this->email->set_newline("\r\n");
                    $this->email->from(email_bcc, $sendername);
                    $this->email->to($this->input->post('email'));
                    $this->email->bcc(array(email_bcc, "stewart@baanthai.hk"));

                    $subjectt = "Thank you for your job interest in Baan Thai";
                    $subject = $subjectt;
                    $this->email->subject($subject);
                    $appointment['appointment'] = $web_input;
                    $htmlsmessage = $this->load->view('Email/jointeam', $appointment, true);

                    if (REPORT_MODE == 1) {
                        $this->email->message($htmlsmessage);
                        $this->email->print_debugger();

                        $send = $this->email->send();
                        if ($send) {
                            // redirect(site_url("booknow"));
                        } else {
                            $error = $this->email->print_debugger(array('headers'));
                            //    redirect(site_url("booknow"));
                        }
                    } else {
                        echo $htmlsmessage;
                    }
                } else {
                    redirect(site_url("joinourteam"));
                }
            } else {
                redirect(site_url("/"));
            }
        }
        $this->load->view('Pages/jointeam', $data);
    }

    //End of book now
    public function booknow() {

        if ($this->session_user) {
            $usertype = $this->user_id;
        } else {
            $usertype = 'guest';
        }


        $data = array();
        $data['submitdata'] = "";
        $disabledates = array(
            "2020-05-11" => "2020-05-11",
        );

        if (isset($_POST['submit'])) {

            $captchatext = $this->session->userdata("captchacode_booking");
            $selectdate = $this->input->post('select_date');
            if (isset($disabledates[$selectdate])) {
                redirect(site_url("booknow"));
            }

            $checkcaptcha = $this->input->post("captcha");
            if ($captchatext == $checkcaptcha) {

                $web_order = array(
                    'last_name' => $this->input->post('first_name'),
                    'first_name' => $this->input->post('last_name'),
                    'email' => $this->input->post('email'),
                    'contact' => $this->input->post('contact_no'),
                    'select_date' => $this->input->post('select_date'),
                    'select_time' => $this->input->post('select_time'),
                    'booking_type' => $this->input->post('booking_type'),
                    'extra_remark' => $this->input->post('extra_remark'),
                    'select_table' => $this->input->post('select_table'),
                    'people' => $this->input->post('people'),
                    "usertype" => $this->input->post('usertype'),
                    'datetime' => date("Y-m-d H:i:s a"),
                    "order_source" => "Website",
                    'order_date' => date("Y-m-d"),
                    'status' => "0",
                );
                $this->db->insert('web_order', $web_order);

                $last_id = $this->db->insert_id();
                $oderid = $last_id;
                $ordertype = $this->input->post('booking_type');
                $orderlog = array(
                    'log_type' => "Reservation Received",
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => "",
                    'order_id' => $last_id,
                    'log_detail' => "Booking No. #$last_id  $ordertype From Website",
                );
                $this->db->insert('system_log', $orderlog);

                $ordertype = $this->input->post('booking_type');


                $data['submitdata'] = 'yes';

                $password = rand(10000, 99999);
                $email = $this->input->post('email');

                $user_check = $this->User_model->check_user($email);
                if ($user_check) {
                    $data1['msg'] = 'Email Address Already Registered.';
                } else {
                    $userarray = array(
                        'last_name' => $this->input->post('first_name'),
                        'first_name' => $this->input->post('last_name'),
                        'email' => $this->input->post('email'),
                        'password' => md5($password),
                        'password2' => $password,
                        'profession' => "",
                        'country' => "",
                        'gender' => "",
                        'birth_date' => "",
                        'registration_datetime' => date("Y-m-d h:i:s A")
                    );
                    $checkregistration = $this->input->post('registrationyes');
                    if ($checkregistration) {
                        $this->db->insert('admin_users', $userarray);
                        $user_id = $this->db->insert_id();

                        $sess_data = array(
                            'username' => $this->input->post('email'),
                            'first_name' => $this->input->post('first_name'),
                            'last_name' => $this->input->post('last_name'),
                            'login_id' => $user_id,
                        );
                        $this->session->set_userdata('logged_in', $sess_data);
                    }
                }
                //email sending
                $emailsender = email_sender;
                $sendername = email_sender_name;
                $email_bcc = email_bcc;

                if ($this->input->post('email')) {
                    $this->email->set_newline("\r\n");
                    $this->email->from(email_bcc, $sendername);
                    $this->email->to($this->input->post('email'));
                    $this->email->bcc(array(email_bcc, "stewart@baanthai.hk"));
                    $subjectt = "Thank you for your booking.";
                    $subject = $subjectt;
                    $this->email->subject($subject);
                    $appointment['appointment'] = $web_order;
                    $appointment['orderid'] = $oderid;
                    $htmlsmessage = $this->load->view('Email/weborder', $appointment, true);

                    if (REPORT_MODE == 1) {
                        $this->email->message($htmlsmessage);
                        $this->email->print_debugger();

                        $send = $this->email->send();
                        if ($send) {
                            // redirect(site_url("booknow"));
                        } else {
                            $error = $this->email->print_debugger(array('headers'));
                            //    redirect(site_url("booknow"));
                        }
                    } else {
                        echo $htmlsmessage;
                    }
                }
            } else {
                redirect(site_url("booknow"));
            }
        }




        //end of email



        $this->load->view('Pages/booknow', $data);
    }

    public function appointment() {
        $this->load->view('Pages/appointment');
    }

    public function faqs() {
        $this->load->view('Pages/faqs');
    }

    public function cancleOrder($oderid) {
        $this->db->where('id', $oderid);
        $query = $this->db->get('web_order');
        $odata = $query->row();
        $data['order_data'] = $odata;
        if (isset($_POST['update'])) {
            redirect("booknow");
        }
        if (isset($_POST['cancle'])) {
            $order_status_data = array(
                'c_date' => date('Y-m-d'),
                'c_time' => date('H:i:s'),
                'order_id' => $oderid,
                'status' => "Cancelled",
                'user_id' => "",
                'remark' => "Reservation has been cancelled",
                "process_by" => "",
                "process_user" => "Guest"
            );
            $this->db->insert('user_order_status', $order_status_data);
            $emaillink = "http://admin.baanthaihk.com/index.php/LocalApi/sendEmailOrderCancle/$oderid";
            file_get_contents($emaillink);
            redirect("booknow");
        }
        $this->load->view('Pages/cancleorder', $data);
    }

    public function locallogin() {

        $data['usertype'] = $this->session_user;
        if (isset($_POST['submit'])) {
            $password = $this->input->post('password');
            if ($password = "Hongout@HKBT") {
                $this->session->set_userdata('admin_login', array("user_type" => "admin"));
                redirect("admin");
            } else {
                
            }
        }

        if (isset($_GET['logout'])) {
            $this->session->set_userdata('admin_login', array());
            redirect("admin");
        }


        $this->load->view('Pages/locallogin', $data);
    }

    public function subscribe() {
        if (isset($_POST['submit'])) {
            $appointment = array(
                'email' => $this->input->post('email'),
            );
// print_r($appointment);
            $this->db->insert('appointment_list', $appointment);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;

            $captchatext = $this->session->userdata("captchacode_subscribe");

            $checkcaptcha = $this->input->post("captcha");
            if ($captchatext == $checkcaptcha) {
                if ($this->input->post('email')) {
                    $this->email->set_newline("\r\n");
                    $this->email->from(email_bcc, $sendername);
                    $this->email->to($this->input->post('email'));
                    $this->email->bcc(array(email_bcc, "stewart@baanthai.hk"));
                    $subjectt = "Thank you for your subscription";
                    $orderlog = array(
                        'log_type' => 'Thank You For Subscribing',
                        'log_datetime' => date('Y-m-d H:i:s'),
                        'user_id' => 'Subscribing User',
                        'log_detail' => "  " . $subjectt
                    );
                    $this->db->insert('system_log', $orderlog);
                    $subject = $subjectt;
                    $this->email->subject($subject);
                    $appointment['appointment'] = $appointment;
                    $htmlsmessage = $this->load->view('Email/subscribing', $appointment, true);
                    if (REPORT_MODE == 1) {
                        $this->email->message($htmlsmessage);
                        $this->email->print_debugger();
                        $send = $this->email->send();
                        if ($send) {
                            redirect(site_url("/"));
                        } else {
                            $error = $this->email->print_debugger(array('headers'));
                            redirect(site_url("/"));
                        }
                    } else {
                        echo $htmlsmessage;
                    }
                }
            } else {
                redirect(site_url("/"));
            }
        }
        $this->load->view('Pages/subscribe');
    }

    public function lookbook() {
        $this->load->view('Pages/lookbook_style');
    }

    public function gallery($gallerytype = 'food') {
        $data['gtype'] = $gallerytype;
        $this->load->view('Pages/gallery', $data);
    }

    public function private_parties() {
        $this->load->view('Pages/private_parties');
    }

    public function reviews() {
        $this->load->view('Pages/reviews');
    }

}
