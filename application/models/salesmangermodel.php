<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SalesMangerModel extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

//select user type from table user
    public function addPermission($data) {
        $this->db->insert('permission', $data);
    }

    public function getRespondingRequest($id) {
        $this->db->select('cust_id');
        $this->db->from('emp_request');
        $this->db->where('readmsg = 0');
        $this->db->where('emp_id', $id);
        $query = $this->db->get();
        $result = $query->result();
        //   echo'<pre>'; var_dump($result);die();
        return $result;
    }

    public function customQuery($emp_id) {
        $query = $this->db->query("SELECT * FROM `emp_request` as er
LEFT JOIN customer as c on c.id = er.cust_id
LEFT JOIN request_type as rt on rt.id = c.request_type
WHERE er.readmsg=0
and er.emp_id=c.employee_id={$emp_id}");
        $result = $query->result();
        return $result;
    }

    public function countRequest($id) {
        $this->db->where('readmsg = 0');
        $this->db->where('emp_id', $id);
        $this->db->from('emp_request');
        return $this->db->count_all_results();
    }

}
