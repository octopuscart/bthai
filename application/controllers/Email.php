<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('User_model');
        $this->load->library('session');
        $session_user = $this->session->userdata('logged_in');
        if ($session_user) {
            $this->user_id = $session_user['login_id'];
        } else {
            $this->user_id = 0;
        }
    }

    public function index() {
        redirect('/');
    }

    public function adEmail() {
        $this->load->view('Email/webadv2');
    }

    public function checkEmailSend() {
        $this->db->select('mailer_contact_id');

        $query = $this->db->get('mailer_contacts2_check');
        $mmailer_contacts2_check = $query->result();
        $emailcheck = array();
        foreach ($mmailer_contacts2_check as $key => $value) {
            array_push($emailcheck, $value->mailer_contact_id);
        }
        $ignore = $emailcheck;
        if (count($ignore)) {
            $this->db->where_not_in('id', $ignore);
        }
        $this->db->where('mailer_list_id', '');

        $this->db->limit(10);
        $query = $this->db->get('mailer_contacts2');
        $contactdata = $query->result_array();





        setlocale(LC_MONETARY, 'en_US');
        $this->db->where('default', '1');
        $query = $this->db->get('configuration_email');
        $mailerconf = $query->row();


        $configarray = array(
            'protocol' => 'smtp',
            'smtp_host' => $mailerconf->smtp_server,
            'smtp_user' => "apikey",
            'smtp_pass' => $mailerconf->api_key,
            'smtp_port' => $mailerconf->smtp_port,
            'crlf' => "\r\n",
            'newline' => "\r\n"
        );
        //sendgrid setting

        $emaildata = 0;
        foreach ($contactdata as $key => $value) {
            echo $useremail = $value['email'];


            if ($useremail) {

                $this->email->initialize($configarray);

                $emailsender = email_sender;
                $sendername = email_sender_name;
                $email_bcc = email_bcc;
                // ini_set('display_errors', 1);
                $this->email->set_newline("\r\n");

                $this->email->from("info@baanthai.hk", $sendername);
                $this->email->to($useremail);
//        $this->email->to("tailor123hk@gmail.com");
                $this->email->charset = "UTF-8";
                $subject = "Baan Thai Opens New Restaurant in Western District";
                $this->email->subject($subject);
                $checkcode = REPORT_MODE;

                $emailhtml = $this->load->view('Email/webad', array(), true);
                $result = "";
                if ($checkcode == '') {
                    echo $emailhtml;
                } else {
                    $this->email->message($emailhtml);
                    echo $result = $this->email->send();
                    echo "<br/>-----<br/>";
                    $this->email->print_debugger();
                }

                $mailer_contacts2_check = array(
                    "email" => $useremail,
                    "status" => $result,
                    "mailer_contact_id" => $value['id'],
                    "datetime" => date('Y-m-d H:M:S')
                );

                $this->db->insert('mailer_contacts2_check', $mailer_contacts2_check);
            }
        }
    }

    public function checkEmailSend2() {
        $this->db->select('mailer_contact_id');

        $query = $this->db->get('mailer_contacts2_check');
        $mmailer_contacts2_check = $query->result();
        $emailcheck = array();
        foreach ($mmailer_contacts2_check as $key => $value) {
            array_push($emailcheck, $value->mailer_contact_id);
        }
        $ignore = $emailcheck;
        if (count($ignore)) {
            $this->db->where_not_in('id', $ignore);
        }
        $this->db->where('mailer_list_id', '');

        $this->db->limit(10);
        $query = $this->db->get('mailer_contacts2');
        $contactdata = $query->result_array();





        setlocale(LC_MONETARY, 'en_US');
        $this->db->where('default', '1');
        $query = $this->db->get('configuration_email');
        $mailerconf = $query->row();


        $configarray = array(
            'protocol' => 'smtp',
            'smtp_host' => $mailerconf->smtp_server,
            'smtp_user' => "apikey",
            'smtp_pass' => $mailerconf->api_key,
            'smtp_port' => $mailerconf->smtp_port,
            'crlf' => "\r\n",
            'newline' => "\r\n"
        );
        //sendgrid setting

        $emaildata = 0;
        foreach ($contactdata as $key => $value) {
            echo $useremail = $value['email'];


            if ($useremail) {

                $this->email->initialize($configarray);

                $emailsender = email_sender;
                $sendername = email_sender_name;
                $email_bcc = email_bcc;
                // ini_set('display_errors', 1);
                $this->email->set_newline("\r\n");

                $this->email->from("info@baanthai.hk", $sendername);
                $this->email->to($useremail);
//        $this->email->to("tailor123hk@gmail.com");
                $this->email->charset = "UTF-8";
                $subject = "Baan Thai Opens New Restaurant in Western District";
                $this->email->subject($subject);
                $checkcode = REPORT_MODE;

                $emailhtml = $this->load->view('Email/webadv2', array(), true);
                $result = "";
                if ($checkcode == '') {
                    echo $emailhtml;
                } else {
//                    $this->email->message($emailhtml);
//                    echo $result = $this->email->send();
//                    echo "<br/>-----<br/>";
//                    $this->email->print_debugger();
                }

                $mailer_contacts2_check = array(
                    "email" => $useremail,
                    "status" => $result,
                    "mailer_contact_id" => $value['id'],
                    "datetime" => date('Y-m-d H:M:S')
                );

                $this->db->insert('mailer_contacts2_check', $mailer_contacts2_check);
            }
        }
    }

}
?>

