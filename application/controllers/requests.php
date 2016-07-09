
<?php

defined('BASEPATH') OR exit('No direct script access allowed');
Header('Content-Type: text/html; charset=UTF-8');

class Requests extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('session'));
        $this->load->helper(array('form', 'url'));
        $this->load->helper('download');
        $this->load->library(array('form_validation', 'email'));
        $this->load->model('EmployeeModel');
        $this->load->model('PermissionModel');
        $this->load->model('TimemangeModel');
        $this->load->model('SalesMangerModel');
        $this->load->model('DealsModel');
    }

    public function salesMangerRequest() {


        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $type_id = $session_data['type_id'];
            $id = $session_data['id'];
            $data['count'] = $this->SalesMangerModel->countRequest($id);
            $data['result'] = $this->SalesMangerModel->customQuery($id);

            $count = 5;
            $this->session->set_userdata('count',$count);
            $this->load->view('salesManger/salesreadmsg', $data);
        }
    }

}
