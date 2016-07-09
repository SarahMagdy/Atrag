<?php

//require_once 'Classes/PHPExcel/IOFactory.php';

ini_set('display_errors', 1);
Header('Content-Type: text/html; charset=UTF-8');

defined('BASEPATH') OR exit('No direct script access allowed');

class timeMangement extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'email'));
        $this->load->model('TimemangeModel');
    }

    public function index() {

        return $this->load->view('manger/checkindata');
    }

    public function addtime() {
//      die('dddd');
        //validte form to valide numbers only
        $this->form_validation->set_rules('late_time', 'Late Time', 'trim|numeric|xss_clean');
        $this->form_validation->set_rules('late_price', 'Late Price', 'trim|numeric');


        $data['late_time'] = $this->input->post('late_time');
        $data['late_price'] = $this->input->post('late_price');
        $data['overtime_time'] = $this->input->post('overtime_time');
        $data['overtime_money'] = $this->input->post('overtime_money');
        $this->TimemangeModel->AddTime($data);
        echo"تم اضافه البيانات بنجاح";
    }

   

}
