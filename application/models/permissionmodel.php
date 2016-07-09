<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PermissionModel extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

//select user type from table user
    public function addPermission($data) {
        $this->db->insert('permission', $data);
    }

    public function getRespondingRequest() {
        $this->db->select('*');
        $this->db->from('permission');
        $this->db->where('manager_reply = 0');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function countRequest() {
        $this->db->where('manager_reply = 0');
        $this->db->from('permission');
        return $this->db->count_all_results();
    }
    
    
    //count number of requests that manger replay to it with agrement or refuse
    
    public function countemployeeRequest($id){
         $this->db->where('manager_reply = 1');
         $this->db->where('readmsg = 0');
         $this->db->where('employee_id',$id);
        $this->db->from('permission');
        return $this->db->count_all_results();
    }
    //get the replay of this message for this employee only
     public function getRecievedRequest($id) {
        $this->db->select('*');
        $this->db->from('permission');
        $this->db->where('manager_reply = 1');
        $this->db->where('employee_id',$id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function readMsg($employeeId,$msgId){
    
        $data = array(
            'readmsg' => '1',
        );
        $this->db->where('employee_id', $employeeId);
        $this->db->where('id', $msgId);
        $this->db->where('manager_reply = 1');
        $this->db->update('permission', $data);
    }
    
    

}

?>
