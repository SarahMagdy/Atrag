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
			
			<?php $this->load->view('toolbar'); ?>
				<div class="col-md-2 col-md-offset-10 ">
						<?php $this->load->view('MenuBar');?>
				</div>
				<div class="col-md-10">
				<div class="box-wider-text">
					<div class="Requestprofile row">
					<h4>بيان عميل</h4>
						<div class="col-md-4">	
							<div class="form-group formLayout ">
								<label for="salary" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
السعر: </label>
								<label for="salary" class="control-label " ><?php echo $requestview[0]->price; ?></label>
							</div> 
								<div class="form-group formLayout">
						<label for="commision" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
العمولة: </label>
						<label for="commision" class="control-label " ><?php echo $requestview[0]->commission; ?> </label>
						
					</div> 
						</div>
						<div class="col-md-4">	
							<div class="form-group formLayout">
								<label for="target" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
الغرض: </label>
								<label for="target" class="control-label " ><?php echo $requestview[0]->purpose; ?> </label>
								
							</div> 
							<div class="form-group formLayout ">
								<label for="period" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
المدة: </label>
								<label for="period" class="control-label " ><?php echo $requestview[0]->period; ?> </label>
							</div> 
						</div>	
					
						<div class="col-md-4">
							 <div class="form-group formLayout">
								<label for="emp_name" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
نوع الطلب: </label>
								<label for="emp_name" class="control-label " ><?php echo $requestview[0]->purpose; ?></label>
								
							</div> 
							<div class="form-group formLayout">
								<label for="salary" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
طريقة السداد: </label>
								<label for="salary" class="control-label " ><?php echo $requestview[0]->wway; ?></label>
								 
							</div>  	
						</div>
						
					</div>
					<div class="Detailsdata row">
					<h4>تفاصيل البيان</h4>
					<div class="col-md-4">
					<div class="form-group formLayout ">
						<label for="rooms" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
الغرف: </label>
						<label for="rooms" class="control-label " ><?php echo $requestview[0]->rooms; ?> </label>
						 
					</div> 	
					<div class="form-group formLayout ">
						<label for="reseption" class="control-label" ><i class="fa fa-check-square-o" aria-hidden="true"></i>
ريسبشن: </label>
						<label for="reseption" class="control-label" ><?php echo $requestview[0]->reception; ?> </label>
						
					</div> 	
				
					
					<div class="form-group formLayout">
						<label for="compination" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
حمامات: </label>
						<label for="compination" class="control-label " ><?php echo $requestview[0]->bathroom; ?> </label>
						
					</div> 
														<div class="form-group formLayout ">
								<label for="timemoiena3" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
مواعيد المعاينة 3: </label>
								<label for="timemoiena3" class="control-label " ><?php echo $requestview[0]->check_date3; ?></label>
								
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group formLayout">
								<label for="notetashteeb" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
ملاحظة: </label>
								<label for="notetashteeb" class="control-label " ><?php echo $requestview[0]->notes; ?> </label>
							
							</div> 	
							<div class="form-group formLayout">
										<label for="tashteeb" class="control-label "><i class="fa fa-check-square-o" aria-hidden="true"></i>
التشطيب: </label>
										<label for="tashteeb" class="control-label "><?php echo $requestview[0]->ftype; ?> </label>
										
									</div>
								<div class="form-group formLayout">
						<label for="addednew" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
إضافي: </label>
						<label for="addednew" class="control-label " ><?php echo $requestview[0]->extra; ?></label>
						 
					</div> 
												<div class="form-group formLayout ">
								<label for="timemoiena2" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
مواعيد المعاينة 2: </label>
								<label for="timemoiena2" class="control-label " ><?php echo $requestview[0]->check_date2; ?> </label>
								
							</div> 
													<div class="form-group formLayout">
						<label for="role" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
أدوار: </label>
						<label for="role" class="control-label " ><?php echo $requestview[0]->floors; ?> </label>
						 
					</div> 	
	 
	
						</div>
						<div class="col-md-4">
										<div class="form-group formLayout">
						<label for="Areas" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
المناطق: </label>
						<label for="Areas" class="control-label " ><?php echo $requestview[0]->area1; ?> </label>
						 
					</div> 


															<div class="form-group formLayout">
						<label for="Areas" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
المناطق: </label>
						<label for="Areas" class="control-label " ><?php echo $requestview[0]->area1; ?> </label>
						 
					</div> 
															<div class="form-group formLayout">
						<label for="Areas" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
المناطق: </label>
						<label for="Areas" class="control-label " ><?php echo $requestview[0]->area1; ?> </label>
						 
					</div> 
																	<div class="form-group formLayout ">
								<label for="timemoiena3" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
مواعيد المعاينة 1: </label>
								<label for="timemoiena3" class="control-label " ><?php echo $requestview[0]->check_date1; ?> </label>
								
							</div>
						<div class="form-group formLayout ">
						<label for="size" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
المساحة: </label>
						<label for="size" class="control-label " ><?php echo $requestview[0]->size; ?> </label>
						 
					</div> 

 





					</div>
					
					</div>
					<div class="Personal_cust row">
						<h4>الببيانات الشخصية</h4>
						

					<div class="col-md-12">
						<div class="form-group formLayout">
							<label for="name" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
الاسم: </label>
							<label for="name" class="control-label " ><?php echo $requestview[0]->customer_name; ?> </label>
							
						</div> 
						<div class="form-group formLayout ">
							<label for="job" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
الوظيفة: </label>
							<label for="job" class="control-label " ><?php echo $requestview[0]->customer_job; ?> </label>
						</div> 	
					
						<div class="form-group formLayout">
							<label for="tele1" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
تليفون 1: </label>
							<label for="tele1" class="control-label " ><?php echo $requestview[0]->customer_phone1; ?> </label>
						</div> 	
						<div class="form-group formLayout">
							<label for="tele2" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
تليفون 2: </label>
							<label for="tele2" class="control-label " ><?php echo $requestview[0]->customer_phone2; ?> </label>
						</div> 	 
						<div class="form-group formLayout">
							<label for="source" class="control-label " ><i class="fa fa-check-square-o" aria-hidden="true"></i>
المصدر: </label>
							<label for="source" class="control-label " ><?php echo $requestview[0]->source; ?></label>
						</div> 
					</div> 	 
					
					</div>
				</div>
				</div>



	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<?php $this->load->view('Scripts');?>
	</body>
</html>