

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class DealsModel extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    public function countsalesMangerRequest() {
        $this->db->where('sales_manager_sign = 0');
        $this->db->from('deal');
        return $this->db->count_all_results();
    }

    public function countsalesManger() {
        $this->db->where('manager_sign = 0');
        $this->db->from('deal');
        return $this->db->count_all_results();
    }

    public function getReqSalesManger() {
        $this->db->select('*');
        $this->db->from('deal');
        $this->db->where('sales_manager_sign = 0');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function getRespondingRequestManger() {
        $this->db->select('*');
        $this->db->from('deal');
        $this->db->where('manager_sign = 0');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function getRespondingRequestSaleManger() {
        $this->db->select('*');
        $this->db->from('deal');
        $this->db->where('sales_manager_sign = 0');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    //edit deals replays of manger or sales manger
    public function editDeal($employeeId, $msgId, $type) {
        if ($type == 'manger') {
            $data = array(
                'manager_sign' => '1',
            );
        } elseif ($type = 'salesManger') {
            $data = array(
                'sales_manager_sign' => '1',
            );
        }
        $this->db->where('employee_id', $employeeId);
        $this->db->where('id', $msgId);
        $this->db->update('deal', $data);
    }

    public function addAgree($id, $msgId, $type) {

        if ($type == 'manger') {
            $data = array(
                'manger_agree' => '1',
            );
        } elseif ($type = 'salesManger') {
            $data = array(
                'salesmanger_agree' => '1',
            );
        }
        $this->db->where('employee_id', $id);
        $this->db->where('id', $msgId);
        $this->db->update('deal', $data);
    }

    public function RefuseDeal($employeeId, $msgId,$type) {

        if ($type == 'manger') {
            $data = array(
                'manager_sign' => '1',
                'manger_agree' => '0'
            );
        } elseif ($type = 'salesManger') {
            $data = array(
                'sales_manager_sign' => '1',
                'salesmanger_agree' => '0'
            );
        }

        $this->db->where('employee_id', $employeeId);
        $this->db->where('id', $msgId);
        $this->db->update('deal', $data);
    }
      //sales read msg or not
      public function countemployeeDeal($id){
         $this->db->where('manager_sign = 1');
         $this->db->where('sales_manager_sign = 1');
         $this->db->where('readdeal = 0');
         $this->db->where('employee_id',$id);
        $this->db->from('deal');
        return $this->db->count_all_results();
    }
    
     public function getRecievedDeal($id) {
        $this->db->select('*');
        $this->db->from('deal');
        $this->db->where('manager_sign = 1');
        $this->db->where('sales_manager_sign = 1');
        $this->db->where('employee_id',$id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
      public function readDeal($employeeId,$msgId){
        $data = array(
            'readdeal' => '1',
        );
        $this->db->where('employee_id', $employeeId);
        $this->db->where('id', $msgId);
        $this->db->where('sales_manager_sign = 1');
        $this->db->where('manager_sign = 1');
        $this->db->update('deal', $data);
    }

}
