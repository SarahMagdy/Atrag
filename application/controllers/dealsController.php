<?php

//require_once 'Classes/PHPExcel/IOFactory.php';

ini_set('display_errors', 1);
Header('Content-Type: text/html; charset=UTF-8');

defined('BASEPATH') OR exit('No direct script access allowed');

class dealsController extends CI_Controller {

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
        $this->load->model('DealsModel');
    }

    //send deal to manger and sales manger to replay request with agrement and refuse
    //manger or sales manger will accept deal
    public function acceptDeal() {
        //if session contain manger will count number of deal which have manger 
        //sign=0 else if sales manger count number of deals which have salesmanger=o
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $type_id = $session_data['type_id'];
            if ($type_id == '4') {
                //make function to count number of deals that manger didnt read it
                $data['count'] = $this->DealsModel->countsalesManger();
                $data['deals'] = $this->DealsModel->getRespondingRequestManger();
            } elseif ($type_id == '3') {
                $data['count'] = $this->DealsModel->countsalesMangerRequest();
                $data['deals'] = $this->DealsModel->getRespondingRequestSaleManger();
            }
        }

        $this->load->view('Inbox/deal', $data);
    }

    //manger or sales manger accept the deal depending on this deal
    public function agreeDeal() {
        $type = '';
        $empId = $this->input->post('employeeid');
        $dealId = $this->input->post('dealid');
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $type_id = $session_data['type_id'];
            if ($type_id == '4') {
                $type = 'manger';
            } elseif ($type_id == '3') {
                $type = 'salesManger';
            }
            $this->DealsModel->editDeal($empId, $dealId, $type);
            $this->DealsModel->addAgree($empId, $dealId, $type);
        }
    }

    public function RefuseDeal() {
        $id = $this->input->post('employeeid');
        $dealId = $this->input->post('dealid');
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $type_id = $session_data['type_id'];
            if ($type_id == '4') {
                $type = 'manger';
            } elseif ($type_id == '3') {
                $type = 'salesManger';
            }
            $this->DealsModel->RefuseDeal($id, $dealId, $type);
        }
    }

    //in case of sales type will get the response from manger and sales manger
    public function dealResponse() {

        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $type_id = $session_data['type_id'];
            $id=$session_data['id'];
            if ($type_id == '1') {
               $data['deals']=$this->DealsModel->getRecievedDeal($id);
               $data['Countdeals']=$this->DealsModel->countemployeeDeal($id);
                $this->load->view('Inbox/salesDeals',$data);
            }
        }
    }
    
     public function readDeal() {
        $employeeId = $this->input->post('employeeid');
        $dealId = $this->input->post('dealid');
        $this->DealsModel->readDeal($employeeId, $dealId);
    }

}
