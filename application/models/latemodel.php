<?php
require_once'./application/libraries/Excel/Classes/PHPExcel.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class LateModel extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

//select user type from table user
    public function addLate() {

               $inputFileName = './_/uploads/xxx.xlsx';

//  Read your Excel workbook

$excelReader= PHPExcel_IOFactory::CreateReaderForFile($inputFileName);
$excelObj= $excelReader->load($inputFileName);
$workSheet=$excelObj->getActiveSheet();
$lastrow = $workSheet -> getHighestRow();
$lastcol = $workSheet -> getHighestColumn();

for ($row=2;$row<=$lastrow;$row++)
{
   $param['employee_id']= $workSheet->getCell('A'.$row)->getvalue();
    
    $date= $workSheet->getCell('B'.$row)->getvalue();

$unix_date=($date-25569)*86400;


$param['date']=date($format="Y-m-d",$unix_date);

   $timein=  ($workSheet->getCell('C'.$row)->getvalue() )*86400;
   $hours=round($timein/3600);
   $minutes=round($timein/60)-($hours*60);
   $seconds=round($timein)-($minutes*60)-($hours*3600);
   $param['Incomp']=$hours . ":" . $minutes . ":" .$seconds;


      $timein1=  ($workSheet->getCell('D'.$row)->getvalue() )*86400;
   $hours=round($timein1/3600);
   $minutes=round($timein1/60)-($hours*60);
   $seconds=round($timein1)-($minutes*60)-($hours*3600);
   $param['outcomp']=$hours . ":" . $minutes . ":" .$seconds;
   //$param['outcomp']= $workSheet->getCell('D'.$row)->getvalue();
    $this->db->insert('LateTime', $param);

}
           }

    
    
    

}

?>
