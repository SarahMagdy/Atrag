<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>بيانات الموظفين</title>
			<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-theme.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css"href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.theme.css" rel="stylesheet">
		<link type="text/css"href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.structure.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/font-awesome.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/style.css" rel="stylesheet">	
		</head>
	<body>
			<div class="modal fade" id="DeleteEmployee">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<!--<h3><strong>حذف بيانات</strong></h3> -->
					</div>
					<form action="<?php echo $this->config->base_url(); ?>index.php/employee/deleteemployee" method="post">
						<div class="modal-body">
							<div class="form-group formLayout" id="formlayout">   
								  <label for="nameInput" class="control-label ">هل أنت متأكد من حذف البيانات</label>
								 <input type="hidden" name="delete_employeeid" id="delete_employeeid" class="form-control" readonly/>

							</div>  
						</div>
						<div class="modal-footer mf">
							<button class="btn btn-info btn-sm" type="submit" id="DoneDelete">حذف</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
	   </div> 
	<!--End Delete Modal------->

	<!-------------------------------------------------------------ContentPage------------------------------------------>
		<div class="Add">
			<?php $this->load->view('toolbar'); ?>
			<div class="topbarhh">
			
			</div>
			<div class="row backcolor">

				<div class="col-md-2 col-md-offset-10 ">
				<?php $this->load->view('MenuBar'); ?>
				</div>
			
					<div class=" col-md-10 detailsinbox">
						<ul class="nav nav-tabs" id="myTab">
							<li  class="active"><a data-toggle="tab" href="#ShowEmployees">الموظفين</a></li>
							<li class="editemployee"><a href="#EditEmployee" data-toggle="tab">تعديل بيانات موظف</a></li>
						</ul> 
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane active" id="ShowEmployees">
								<form id="SearchForm" class="col-md-7 col-md-offset-4 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="SearhDiv form-group formLayout col-md-9 col-sm-12 col-xs-12 ">
                                         <span class="Inputspan fa fa-search"></span>
		        					     <input type="text" name=""  class="form-control" placeholder="" />
	       				            </div>
                                </div>
						</form>
								<table class="pure-table table-responsive tabdetails" >
							<thead>
								<th>التسلسل</th>
								<th>الإسم</th>
								<th>المسمي الوظيفي</th>
<!-- 								<th>الفرع</th>
 -->							<th>تليفون</th>
								<th>تعديل</th>
								<th>حذف</th>
								<th>التفاصيل</th>
<!-- 								<th>بيانات</th>
 -->							</thead>
							<?php 
								$i=0;
								foreach ($allemployee as $value) {
							    echo "<tbody>";
								
							    echo "<tr>";
							    echo "<td>".$i."</td>";
								echo "<td>".$allemployee[$i]->name."</td>";
                                if ($allemployee[$i]->type_id==1){
								echo "<td>"."موظف تسويق"."</td>";
							    }
							    elseif ($allemployee[$i]->type_id==2) {
							    	echo "<td>"."مدير تسويق"."</td>";

							    }
							    elseif ($allemployee[$i]->type_id==3) {
							    	echo "<td>"."خدمه عملاء"."</td>";
							    }
							    elseif ($allemployee[$i]->type_id==4) {
							    	echo "<td>"."مدير"."</td>";
							    }
								// echo "<td>IT</td>";
								echo "<td>".$allemployee[$i]->phone."</td>";
								//echo "<td>".$allemployee[$i]->contract_of_employment."</td>";
									echo "<td><a type='button' class=' edit-emp' data-toggle='tab'  onclick=myFunction() data-target='#EditEmployee'
                                                                     data-empid='".$allemployee[$i]->id."'
                                                                     data-name='".$allemployee[$i]->name."'
                                                                     data-birthday='".$allemployee[$i]->date_of_birth."'
                                                                     data-email='".$allemployee[$i]->email."'

                                                                     data-address='".$allemployee[$i]->address."'
                                                                     data-phone='".$allemployee[$i]->phone."'
                                                                     data-id='".$allemployee[$i]->employee_id."'

                                                                     data-password='".$allemployee[$i]->password."'
                                                                     data-zkt='".$allemployee[$i]->zkt_id."'
                                                                     data-employment_date='".$allemployee[$i]->date_of_employment."'

       																 data-coming_from='".$allemployee[$i]->coming_from."'
                                                                     data-coming_to='".$allemployee[$i]->coming_to."'
                                                                     data-salary='".$allemployee[$i]->fixed_salary."'

                                                                     data-gender='".$allemployee[$i]->gender_id."'
                                                                     data-position='".$allemployee[$i]->position_id."'
                                                                     data-type='".$allemployee[$i]->type_id."'
                                                                     data-img='".$allemployee[$i]->image."'
                                                                     data-contract='".$allemployee[$i]->contract_of_employment."'


                                                                     >"."<i class='fa fa-pencil-square-o'></i></a></td>";
                                echo "<td><a type='button' href='#' class='delete-emp' data-toggle='modal' data-target='#DeleteEmployee' data-id='".$allemployee[$i]->id."'><i class='fa fa-trash' aria-hidden='true'></i></a></td>";		
                                echo "<td><a type='button' class='show-emp' data-id='".$allemployee[$i]->id."'>"."<i class='fa fa-info' aria-hidden= 'true' ></i></a></td>";
								echo "</tr>";
							
							 echo "</tbody>";
							$i++;
						  } 
						  ?>
						</table>
							</div>
							<div class="tab-pane " id="EditEmployee">
								<form action="<?php echo $this->config->base_url(); ?>index.php/employee/updateemployee" method="post" class="row" enctype="multipart/form-data" id="editEmplouee">
								<div class="personaledit">
								<h4>البيانات الشخصية</h4>
					  <div class="form-group formLayout">
						 <input type="hidden" id="id" name="id" class="form-control" placeholder="الاسم " />
					</div>
						<label for="emp_name" class="control-label " >الاسم: </label>
						 <input type="text" id="emp_name" name="emp_name"  class="form-control" placeholder="الاسم " />
					
								<div class="form-group formLayout">
						<label for="emp_birthdate" class="control-label " >تاريخ الميلاد: </label>
						 <input type="datepicker" id="emp_birthdate" name="emp_birthdate" class="form-control" placeholder="تاريخ الميلاد " />
					</div> 
							<div class="form-group formLayout">
						<label for="emp_address" class="control-label " >العنوان: </label>
						 <input type="text" id="emp_address" name="emp_address" class="form-control" placeholder="العنوان " />
					</div>
					<div class="form-group formLayout">
									<label for="cust_id" class="control-label " >رقم البطاقة: </label>
									 <input type="text" id="emp_id" name="emp_id"  class="form-control" placeholder=" " />
								</div>
									<div class="form-group formLayout">
								<label for="gender" class="control-label ">النوع: </label>
									<select class="form-control" name="gender" > 
										   <option value='0'> انثي </option> 
										    <option value='1'> ذكر </option> 
								
									 </select>
							</div>
							</div> 
								
								<div class="uploaddata">
								<div class="form-group formLayout profile">
								<img src="../_/images/profile1.jpg" alt="profile" class="profil_img" id="img"><br>
								<input type="file" name="profile" id="image-source" onchange="previewImage();" class="image-upload btn btn-default btn-add-photo btn-xs camerabutton" > 						
<!-- 						     <img src="../_/images/profile1.jpg" alt="profile" class="profil_img"><br>
 -->						</div>
 				<div class="form-group formLayout">
						<label for="cust_mobile" class="control-label " >رقم التليفون: </label>
						 <input type="text" id="emp_mobile" name="emp_mobile" class="form-control" placeholder="رقم التليفون " />
					</div>
								<div class="form-group formLayout">
									<label for="emp_email" class="control-label " >الايميل: </label>
									 <input type="datepicker" id="emp_email" name="emp_email" class="form-control" placeholder="الايميل " />
								</div> 
						
							
								</div>
							<div class="row">
							<div class="col-md-4">
									<div class="work2edit">
									
								<div class="form-group formLayout">
									<label for="password" class="control-label " >الرقم السري: </label>
									 <input type="text" id="password" name="password"  class="form-control" placeholder=" " />
								</div>
								<div class="form-group formLayout">
									<label for="zkt_id" class="control-label " >رقم بصمه الاصبع: </label>
									 <input type="text" id="zkt_id" name="zkt_id" class="form-control" placeholder=" " />
								</div>
								<div class="form-group formLayout">
									<label for="employment_date" class="control-label " >تاريخ التعيين: </label>
									 <input type="text" id="employment_date" name="employment_date"  class="form-control" placeholder=" " />
								</div>
								</div>
							</div>
							<div class="col-md-4">
							<div class="work3edit">
									<div class="form-group formLayout">
									<label for="cust_fromdate" class="control-label " >مواعيد العمل </label><br>
									<label for="cust_fromdate" class="control-label " >من: </label>
									 <input type="text" id="emp_fromdate" name="emp_fromdate"  class="form-control" placeholder=" " />
									 <label for="cust_todate" class="control-label " >إلي: </label>
									 <input type="text" id="emp_todate" name="emp_todate"  class="form-control" placeholder=" " />
								</div>
					<div class="form-group formLayout">
						<label for="emp_salary" class="control-label " >المرتب: </label>
						 <input type="text" id="emp_salary" name="emp_salary"  class="form-control" placeholder=" " />
					</div>
							</div>
							</div>
							<div class="col-md-4">
								<h4>بيانات العمل</h4>
							<div class="workedit">
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
							
									<select class="form-control" name="position" id="position"> 
										  <?php foreach ($position as $value) {
                                           echo '<option value="'.$value->id.'">'.$value->name.'</option>';									     	$x++;
									     	}
										    ?>
									 </select>
							</div>
							<div class="form-group formLayout">

			<label for="department" class="control-label ">العقد: </label>
							<input type="file" name="contract" id="contract"  class="image-upload btn btn-default btn-add-photo btn-xs camerabutton" >							
						<input type="hidden" id="file">
						<input value="Download"type="button" id="download">
						</div>

					
							</div>
							</div>
							
							</div>
					
					<div class="form-group formLayout">		
				<button type="submit" class="btn btn-default" id="addemployee">تأكيد</button>
				</div>
				
				</form>
						</div>
					</div>
			</div>
			
		</div>
			</div>
<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/bootstrap.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/jquery.validate.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-2.1.1.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-ui.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-ui.js"></script>
<script src="<?php echo $this->config->base_url(); ?>_/js/bootstrap.min.js"></script>

 
<script src="<?php echo $this->config->base_url(); ?>_/js/sarah.js"></script> 
<script src="<?php echo $this->config->base_url(); ?>_/js/Atrag.js"></script>
<!--------------------------------------------scripts------------------------------------------------------>
<script>
  $(function() {
    $( "#employment_date" ).datepicker();
    $( "#emp_birthdate" ).datepicker();
  });
  </script>
<script>


	function myFunction(){
	$(".editemployee").css("display","block");
	$('#myTab a[href = "#EditEmployee"]').tab('show');
}
</script>
<script>
$(document).ready(function ()
{
	 var validator = $("#editEmplouee").validate({
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
						 
						
                    }
					
                });
 });
</script>
<script>
$(document).on("click",".delete-emp",function () {
	//alert('ok');
	var id=$(this).data('id');
	//alert(id);
	$(".modal-body #delete_employeeid").val(id);
});

$(document).on("click",".show-emp",function () {
	//alert('ok');
	var id=$(this).data('id');
        var data={
            id:id,
        }
           $.post("<?php echo $this->config->base_url(); ?>employee/show", data, function (result) {

        });
	$(".modal-body #delete_employeeid").val(id);
});


</script>

<script>
$(document).on("click",".edit-emp",function () {
	//alert('ok');
	var id=$(this).data('id');
	var empid=$(this).data('empid');
    var name=$(this).data('name');
	var birthday=$(this).data('birthday');
	var email=$(this).data('email');

	var address=$(this).data('address');
	var phone=$(this).data('phone');
	var emp_id=$(this).data('id');

	var password=$(this).data('password');
	var zkt=$(this).data('zkt');
	var employment_date=$(this).data('employment_date');

	var coming_from=$(this).data('coming_to');
	var coming_to=$(this).data('coming_from');
	var salary=$(this).data('salary');

    var dept = $(this).data('type');

	var gender=$(this).data('gender');
	var position=$(this).data('position');
	var type=$(this).data('type');
	var img=$(this).data('img');
    var file=$(this).data('contract');
    //alert(position);
	//alert(empid);
    $("#file").val(file);
    $("#id").val(empid);
	$("#emp_name").val(name);
	$("#emp_birthdate").val(birthday);

	$("#emp_address").val(address);
	$("#emp_email").val(email);
	$("#emp_mobile").val(phone);
	$("#emp_id").val(emp_id);

	$("#password").val(password);
	$("#zkt_id").val(zkt);
	$("#employment_date").val(employment_date);
	$("#emp_fromdate").val(coming_from);
	$("#emp_todate").val(coming_to);
    $("#emp_salary").val(salary);
    $("#department").val(dept);
    $("#position").val(position);

 $("#emp_dept").val(dept);
$("#img").attr("src","../_/images/"+img);
if(gender==0){$("#gender").val("انثي");}else{$("#gender").val("male");}
// if(position)	

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

    $('#download').click(function () {
    var file=$('#file').val();
    var data={
	     filepath :$('#file').val(),
          }

     $.post("<?php echo $this->config->base_url(); ?>employee/downloadFile",data,function(result){
         
        });

      });
       


    
</script>
	</body>
</html>