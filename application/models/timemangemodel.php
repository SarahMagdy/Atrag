<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class TimemangeModel extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    //insert into money_subtraction table
    public function AddTime($data) {
        $this->db->insert('money_subtraction', $data);
    }

    public function selectDiscount() {
        $this->db->select('*');
        $this->db->from('money_subtraction');
        $this->db->where('late_time > 0');
        $this->db->where('late_price > 0');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function selectCommissions() {
        $this->db->select('*');
        $this->db->from('money_subtraction');
        $this->db->where('overtime_time > 0');
        $this->db->where('overtime_money > 0');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function selectById($disId) {

        $this->db->from('money_subtraction');
        $this->db->where('id', $disId);
        return $this->db->get()->row();
    }

    public function editDisc($late_time, $late_price, $id) {

        $data = array(
            'late_time' => $late_time,
            'late_price' => $late_price,
        );
        $this->db->where('id', $id);
        $this->db->update('money_subtraction', $data);
    }

    public function deleteDis($id) {
        $this->db->where('id', $id);
        $this->db->delete('money_subtraction');
    }

    public function editComm($overtime_time, $overtime_money, $id) {

        $data = array(
            'overtime_time' => $overtime_time,
            'overtime_money' => $overtime_money,
        );
        $this->db->where('id', $id);
        $this->db->update('money_subtraction', $data);
    }

}

?>
