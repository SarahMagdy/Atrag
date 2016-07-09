<?php

//require_once('excel-library/Classes/Excel.php');
class uploadfile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('directory');
        $this->load->model('LateModel');
    }

    //index function
    function index() {
        //load file upload form
        $this->load->view('manger/upload_file_view');
    }

    //file upload function
    function upload() {
        //set preferences
$this->LateModel->addLate();

        $config['upload_path'] = './_/uploads';
        $config['allowed_types'] = 'txt|pdf|xls|xlsx';
        $config['max_size'] = '900';
//        var_dump(base_url());
//        die();
//        echo var_dump(is_dir(base_url()));
        //load upload class library
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

//die(var_dump(is_dir($config['upload_path'])));

        if (!$this->upload->do_upload('filename')) {
            // case - failure
            $upload_error = array('error' => $this->upload->display_errors());
            $this->load->view('manger/upload_file_view', $upload_error);
        } else {
            // case - success
            $upload_data = $this->upload->data();
            $data['success_msg'] = '<div class="alert alert-success text-center">Your file <strong>' . $upload_data['file_name'] . '</strong> was successfully uploaded!</div>';
            
            $this->load->view('manger/upload_file_view', $data);
            header('location:' . $this->config->base_url() . 'uploadfile/listFiles');
        }
    }

    public function listFiles() {
        //  die("jjj");
        $map['files'] = directory_map('./_/uploads');
//       var_dump($map);die();
        $this->load->view('manger/allfiles', $map);
    }

    public function parseFile() {
        $filename = $this->input->post("productid");
        $filePath = "./_/uploads/$filename";
//        var_dump($filePath);die();
//        if (file_exists($filePath)) {
// Read the file
        $this->load->library('excel');
        $objPHPExcel = PHPExcel_IOFactory::load("./_/uploads/xxx.xlsx");
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

//extract to a PHP readable array format
        foreach ($cell_collection as $cell) {
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
            //header will/should be in row 1 only. of course this can be modified to suit your need.
            if ($row == 1) {
                $header[$row][$column] = $data_value;
            } else {
                $arr_data[$row][$column] = $data_value;
            }
        }

        echo "<pre>";
        //var_dump($header);


        print_r($arr_data);
//            $data['header'] = $header;
//$data['values'] = $arr_data;
//var_dump($data);
    }

//    }
}

?>