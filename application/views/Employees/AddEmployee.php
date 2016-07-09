<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>إضافة موظف</title>
		<link href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-theme.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css"href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.theme.css" rel="stylesheet">
		<link type="text/css"href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.structure.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/font-awesome.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/style.css" rel="stylesheet">	
		</head>
	<body>

          <?php
//        if ($this->session->userdata('logged_in')) {
//            $session_data = $this->session->userdata('logged_in');
//            if ($session_data['type_id'] == '4') {
                ?>
	
	<!--------------------------------------------------------------menubar---------------------------------------------------------------->
		<div class="Add">
			<?php $this->load->view('toolbar'); ?>
			<div class="topbar">
				<h3>أضف موظف</h3> <i class="fa fa-user-plus" aria-hidden="true"></i>
			</div>
			<div class="row backcolor">
				<div class="col-md-2 col-md-offset-10 ">
						<?php $this->load->view('MenuBar');?>
				</div>
				
				<form action="<?php echo $this->config->base_url(); ?>employee/insertemployee" method="post" class="row" enctype="multipart/form-data" id="AddEmployrrFormValid">
				<div class="box-wider-text">
				<div class="personal">
				<h4>البيانات الشخصية</h4>
					  <div class="form-group formLayout">
						<label for="emp_name" class="control-label " >الاسم: </label>
						 <input type="text" id="emp_name" name="emp_name"  class="form-control" placeholder="الاسم " />
					</div> 
					<div class="form-group formLayout">
						<label for="emp_birthdate" class="control-label " >تاريخ الميلاد: </label>
						 <input type="datepicker" id="emp_birthdate" name="emp_birthdate"  class="form-control" placeholder="تاريخ الميلاد " />
					</div> 
				
					<div class="form-group formLayout">
						<label for="emp_address" class="control-label " >العنوان: </label>
						 <input type="text" id="emp_address" name="emp_address"  class="form-control" placeholder="العنوان " />
					</div>
			
					<div class="form-group formLayout">
						<label for="emp_id" class="control-label " >رقم البطاقة: </label>
						 <input type="text" id="emp_id" name="emp_id"  class="form-control" placeholder=" " />
					</div>
					<div class="form-group formLayout">
								<label for="gender" class="control-label ">النوع: </label>
									<select class="form-control" name="gender" > 
										    <option value="0"> انثي </option> 
										    <option value="1"> ذكر </option> 

									 </select>
					</div>
				</div>
				</div>
				<div class="uploaddata">
					<div class="form-group formLayout profile">
						<img src="../_/images/profile1.jpg" alt="profile" class="profil_img" id="img"><br>
							<input type="file" name="profile" id="image-source" onchange="previewImage();" class="image-upload btn btn-default btn-add-photo btn-xs camerabutton" > 						
<!-- 						     <img src="../_/images/profile1.jpg" alt="profile" class="profil_img"><br>
 -->				</div>
					<div class="form-group formLayout">
						<label for="cust_mobile" class="control-label " >رقم التليفون: </label>
						 <input type="text" id="emp_mobile" name="emp_mobile"  class="form-control" placeholder="رقم التليفون " />
					</div>	
					<div class="form-group formLayout">
						<label for="emp_email" class="control-label " >الايميل: </label>
						 <input type="datepicker" id="emp_email" name="emp_email"  class="form-control" placeholder="الايميل " />
					</div> 
				</div>
				<div class="row">
					<div class="col-md-4">
					<div class="work2">
						<div class="form-group formLayout">
						<label for="password" class="control-label " >الرقم السري: </label>
						 <input type="text" id="password" name="password"  class="form-control" placeholder="الرقم السري " />
					</div>

					<div class="form-group formLayout">
						<label for="zkt_id" class="control-label " >رقم بصمه الاصبع: </label>
						 <input type="text" id="zkt_id" name="zkt_id"  class="form-control" placeholder="رقم بصمه الاصبع" />
					</div>

					<div class="form-group formLayout">
						<label for="employment_date" class="control-label " >تاريخ التعيين: </label>
						 <input type="text" id="employment_date" name="employment_date"  class="form-control" placeholder=" تاريخ التعيين" />
					</div>
					</div>
					</div>
					<div class="col-md-4">
					<div class="work3">
					<div class="form-group formLayout">
						<label for="cust_fromdate" class="control-label " >مواعيد العمل </label><br>
						<label for="cust_fromdate" class="control-label " >من: </label>
						 <input type="text" id="emp_fromdate" name="emp_fromdate"  class="form-control" placeholder="من " />
						 <label for="emp_todate" class="control-label " >إلي: </label>
						 <input type="text" id="emp_todate" name="emp_todate"  class="form-control" placeholder="إلي " />
					</div>
					<div class="form-group formLayout">
						<label for="emp_salary" class="control-label " >المرتب: </label>
						 <input type="text" id="emp_salary" name="emp_salary"  class="form-control" placeholder=" المرتب" />
					</div>
			
					</div>
					</div>
					<div class="col-md-4">
					<div class="work">
					<h4>بيانات العمل</h4>
							<div class="form-group formLayout">
								<label for="department" class="control-label ">القسم: </label>

									<select class="form-control" name="department" id="emp_dept"> 
											  <?php
										
											   foreach ($types as $value) {
                                           echo '<option value="'.$value->id.'">'.$value->department.'</option>';									     	$x++;
									     	}
										    ?>

										
									 </select>
							</div>
								<div class="form-group formLayout">
								<label for="position" class="control-label ">المسمي الوظيفي: </label>
							
									<select class="form-control" name="position" > 
										  <?php foreach ($position as $value) {
                                           echo '<option value="'.$value->id.'">'.$value->name.'</option>';									     	$x++;
									     	}
										    ?>
									 </select>
							</div>
					<div class="form-group formLayout ">
					<label for="contract" class="control-label ">العقد: </label>
							<input type="file" name="contract" id="contract"  class="image-upload btn btn-default btn-add-photo btn-xs camerabutton" >							
						<input type="hidden" id="file">
						<input value="Download"type="button" id="download">
						</div><br>




					
					</div>
				</div>
				</div>
				<div class="form-group formLayout">	
					<button type="submit" class="btn btn-default" id="addemployee">تأكيد</button>
				</div>
				</form>
			</div>
		</div>


	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-1.10.2.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/bootstrap.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/jquery.validate.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-2.1.1.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-ui.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-ui.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/bootstrap.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/sarah.js"></script> 
<script src="<?php echo $this->config->base_url(); ?>_/js/Atrag.js"></script>
<script>
  $(function() {
    $( "#emp_birthdate" ).datepicker();
    $( "#employment_date" ).datepicker();
  });
  </script>
<script>
$(document).ready(function ()
{
	 var validator = $("#AddEmployrrFormValid").validate({
                    errorPlacement: function (error, element)
                    {
                        // Append error within linked label
                        $( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );
	
					},
                    errorElement: "span",
                    rules :
                    { 
                       
                          emp_name: "required",
                          emp_birthdate : "required" , 
                          emp_address : "required",  
                          emp_id : {required:true, number:true},
						  gender : "required",
						  cust_mobile: {required:true, number:true},
                          EmpAddress : "required",
                          emp_email : { email: true},
                          password : "required",
                          zkt_id : "required",
                          employment_date : "required",
                          cust_fromdate : "required",
                          emp_todate : "required",
                          emp_salary : "required",
                          contract : "required"
						
                    },
                    messages: {
						
                         emp_name: "من فضلك أدخل الإسم",
                         emp_birthdate : " من فضلك أدخل تاريخ الميلاد , 
                         emp_address : "من فضلك أدخل كلمة المرور" , 
                         emp_id : "من فضلك أدخل رقم البطاقة",  
                         gender : "إختر واحدة" ,
                         cust_mobile : "أدخل رقم الهاتف" ,
                         EmpAddress : "أدخل العنوان" , 
                         emp_email : "صيغة البريد الإلكتروني غيرصحيحة"  
                         password : "أدخل الرقم السري" , 
                         zkt_id : "أدخل الرقم السري" , 
                         employment_date : "أدخل  تاريخ التعيين",  
                         cust_fromdate : "أدخل البيانات"  ,
                         emp_todate : "أدخل البيانات"  ,
                         emp_salary : "أدخل البيانات"  ,
                         contract : "أدخل نسخة العقد"  
						 
						
                    }
					
                });
 });
</script>
<script>
	function previewImage() {
    document.getElementById("img").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
 
    oFReader.onload = function(oFREvent) {
      document.getElementById("img").src = oFREvent.target.result;
    };
  };
  </script>
	</body>
</html>
     <?php //}?>
        <?php //}?>
