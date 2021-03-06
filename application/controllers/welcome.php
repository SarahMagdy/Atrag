<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $this->load->view('welcome_message', $data);
        } else {
            //If no session, redirect to login page
            $this->load->view('Employees/login_view');

            //  redirect('Employees/login_view', 'refresh');
        }
    }

//    function logout() {
//        $this->session->unset_userdata('logged_in');
//        session_destroy();
//        $this->load->view('Employees/login_view');
//
//        // redirect('Employees/login_view', 'refresh');
//    }

}

?>