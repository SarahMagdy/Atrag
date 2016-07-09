<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>بيانات موظف</title>
		<?php $this->load->view('Header');?>
		</head>
	<body>

	
	<!--------------------------------------------------------------contectpage---------------------------------------------------------------->
		<div class="Add">
			<?php  foreach ($employee as $key=>$value){?>
				<div class="col-md-2 col-md-offset-10 ">
						<?php $this->load->view('MenuBar');?>
				</div>
	
				<form action="#" method="post" class="row" enctype="multipart/form-data">
				<div>
				<div class="box-wider-text">
				<div class="personaldetails">
					<h4>البيانات الشخصية</h4>
					  <div class="form-group formLayout">
						<label for="emp_name" class="control-label " >الاسم: </label>
						<label for="emp_name" class="control-label " ><?php echo $value->name;?> </label>
						
					</div> 
					<div class="form-group formLayout">
						<label for="emp_birthdate" class="control-label " >تاريخ الميلاد: </label>
						<label for="emp_birthdate" class="control-label " ><?php echo $value->date_of_birth;?> </label>
						 
					</div> 
					
					
					<div class="form-group formLayout">
						<label for="cust_id" class="control-label " >رقم البطاقة: </label>
						<label for="cust_id" class="control-label " ><?php echo $value->image;?> </label>
						
					</div>
						<div class="form-group formLayout">
								<label for="gender" class="control-label ">النوع: </label>
								<label for="gender" class="control-label ">أنثي: </label>
									
							</div>
								<div class="form-group formLayout">
									<label for="emp_address" class="control-label " >العنوان: </label>
									<label for="emp_address" class="control-label " >جليم: </label>
						 
					</div>
					<div class="form-group formLayout">
						<label for="cust_mobile" class="control-label " >رقم التليفون: </label>
						<label for="cust_mobile" class="control-label " ><?php echo $value->phone;?></label>
					</div>	
					<div class="form-group formLayout">
						<label for="emp_email" class="control-label " >الايميل: </label>
						<label for="emp_email" class="control-label " ><?php echo $value->email;?></label>
					</div> 
				</div>
				</div>
				<div class="uploaddata">
					<div class="form-group formLayout profile">
							<img src="../_/images/<?php echo $value->image;?>" alt="profile" class="profil_imgdetails"><br>
														
						</div>
					
</div>				</div>
				
				<div class="row">
				
				<div class="col-md-4 ">
				<div class="work2">
				
					
					<div class="form-group formLayout">
						<label for="emp_salary" class="control-label " >المرتب: </label>
						<label for="emp_salary" class="control-label " ><?php echo $value->total_salary ;?> </label>
					</div>
					
					
				
				</div>
				</div>
					<div class="col-md-4">
				<div class="work3">
				<div class="form-group formLayout">
						<label for="cust_fromdate" class="control-label " >مواعيد العمل </label><br>
						<label for="cust_fromdate" class="control-label " >من: </label>
						<label for="cust_fromdate" class="control-label " ><?php echo $value->coming_from;?></label>
						 
						 <label for="cust_todate" class="control-label " >إلي: </label>
						 <label for="cust_todate" class="control-label " ><?php echo $value->coming_to;?></label>
						 
					</div>
				</div></div>
				<div class="col-md-4">
				<div class="work">
					<h4>بيانات العمل</h4>
					<div class="form-group formLayout">
						<label for="employment_date" class="control-label " >تاريخ التعيين: </label>
						<label for="employment_date" class="control-label " ><?php echo $value->date_of_employment;?></label>
						 
					</div>
					<div class="form-group formLayout">
						<label for="zkt_id" class="control-label " >رقم بصمه الاصبع: </label>
						<label for="zkt_id" class="control-label " ><?php echo $value->zkt_id;?> </label>
						
					</div>

					<div class="form-group formLayout">
						<label for="password" class="control-label " >الرقم السري: </label>
						<label for="password" class="control-label " ><?php echo $value->password;?> </label>
					</div>
					
				</div>
				</div>
				</div>
			
				</form>

		</div>	
		</div>
                        <?php } ?>

	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<?php $this->load->view('Scripts');?>
	</body>
</html>