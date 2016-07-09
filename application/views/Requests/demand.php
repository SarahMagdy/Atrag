<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>ملئ الاستمارة</title>
	<?php $this->load->view('Header');?>
		</head>
	<body>
	<!------------------------Add Discount---------------->
           
        	<div class="menubar">
			<div class="row">
				<?php $this->load->view('toolbar'); ?>
				<div class="topbarload">
    <h3>الطلبات</h3><i class="fa fa-eyedropper" aria-hidden="true"></i>
    <div class="col-md-2 col-md-offset-10 ">
				<?php $this->load->view('MenuBar')?>
				</div>
		<div class="modal fade" id="AddRequest">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<h3><strong>بيان عميل</strong></h3>
					</div>
					<form action="<?php echo $this->config->base_url(); ?>employee/adddemand" method="post">
						<div class="modal-body ">
					<div class="form-group formLayout">
						<label for="date" class="control-label " >التاريخ: </label>
						 <input type="text" id="date" name="date"  class="form-control" placeholder="" />
					</div> 
							<div class="form-group formLayout">
								<label for="requesttype" class="control-label ">نوع الطلب: </label>
									<select class="form-control" name="requesttype" > 
										   <?php
										
											   foreach ($request_type as $value) {
                                           echo '<option value="'.$value->id.'">'.$value->type.'</option>';									     	$x++;
									     	}
										    ?>

									 </select>
							</div>
				    <div class="form-group formLayout">
								<label for="pay" class="control-label ">طريقه السداد </label>
									<select class="form-control" name="pay" > 
										    <?php
										
											   foreach ($way_of_pay as $value) {
                                           echo '<option value="'.$value->id.'">'.$value->way.'</option>';									     	$x++;
									     	}
										    ?>
									 </select>
							</div>	
					<div class="form-group formLayout">
						<label for="purpose" class="control-label " >الغرض: </label>
						 <input type="text" id="purpose" name="purpose"  class="form-control" placeholder="" />
					</div> 
						<div class="row">
					<div class="form-group formLayout col-md-6">
						<label for="period" class="control-label " >المدة: </label>
						 <input type="text" id="period" name="period"  class="form-control" placeholder="" />
					</div> 
					<div class="form-group formLayout col-md-6">
						<label for="commision" class="control-label " >العمولة: </label>
						 <input type="text" id="commision" name="commision"  class="form-control" placeholder="" />
					</div> 
					</div> 
					<h4>تفاصيل البيان</h4>
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="Areas2" class="control-label " >المنطقه 2: </label>
						 <input type="text" id="Areas2" name="Areas2"  class="form-control" placeholder="" />
					</div> 
					<div class="form-group formLayout col-md-6">
						<label for="Areas1" class="control-label " >المنطقه 1: </label>
						 <input type="text" id="Areas1" name="Areas1"  class="form-control" placeholder="" />
					</div> 

					<div class="form-group formLayout col-md-6">
						<label for="Areas3" class="control-label " >المنطقه 4: </label>
						 <input type="text" id="Areas3" name="Areas3"  class="form-control" placeholder="" />
					</div> 
					<div class="form-group formLayout col-md-6">
						<label for="Areas4" class="control-label " >المنطقه 3: </label>
						 <input type="text" id="Areas4" name="Areas4"  class="form-control" placeholder="" />
					</div> 

					</div>
					<div class="row">
					<div class="form-group formLayout col-md-6">
						<label for="size" class="control-label " >المساحة: </label>
						 <input type="text" id="size" name="size"  class="form-control" placeholder="" />
					</div> 
					</div> 
						
					<div class="row">
						<div class="form-group formLayout">
						<label for="floors" class="control-label " >أدوار: </label>
						 <input type="text" id="floors" name="floors"  class="form-control" placeholder="" />
					</div> 					
						</div>
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="rooms" class="control-label " >الغرف: </label>
						 <input type="text" id="rooms" name="rooms"  class="form-control" placeholder="" />
					</div> 	
					<div class="form-group formLayout col-md-6">
						<label for="reception" class="control-label" >ريسبشن: </label>
						 <input type="text" id="reception" name="reception"  class="form-control" placeholder="" />
					</div> 	
					</div> 	
					<div class="row">
			
					<div class="form-group formLayout col-md-6">
						<label for="bathroom" class="control-label " >حمامات: </label>
						 <input type="text" id="bathroom" name="bathroom"  class="form-control" placeholder="" />
					</div> 	
						
					</div> 	
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="note" class="control-label " >ملاحظة: </label>
						 <input type="text" id="note" name="note"  class="form-control" placeholder="" />
					</div> 	
					<div class="form-group formLayout col-md-6">
								<label for="finishing" class="control-label ">التشطيب: </label>
									<select class="form-control" name="finishing" > 
										     <?php
										
											   foreach ($finishing as $value) {
                                           echo '<option value="'.$value->id.'">'.$value->type.'</option>';									     	$x++;
									     	}
										    ?>

									 </select>
							</div>
						
						</div>
					<div class="row">
						<div class="form-group formLayout ">
						<label for="notes" class="control-label " >ملاحظات: </label>
						 <textarea id="notes" name="notes"></textarea>
					   </div> 	
					</div>
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="date1" class="control-label " >مواعيد المعاينة 1: </label>
						 <input type="text" id="date1" name="date1"  class="form-control" placeholder="" />
					</div> 	
                    </div> 	
			<div class="row">
				<div class="form-group formLayout col-md-6">
						<label for="date2" class="control-label " >مواعيد المعاينة 2: </label>
						 <input type="text" id="date2" name="date2"  class="form-control" placeholder="" />
					</div> 	
				</div> 	
				<div class="row">
							<div class="form-group formLayout col-md-6">
						<label for="date3" class="control-label " >مواعيد المعاينة 3: </label>
						 <input type="text" id="date3" name="date3"  class="form-control" placeholder="" />
					</div> 	
				</div> 	
					
					
					 
					<div class="row">
					<div class="form-group formLayout col-md-6">
						<label for="job" class="control-label " >الوظيفة: </label>
						 <input type="text" id="job" name="job"  class="form-control" placeholder="" />
					</div> 	
							<div class="form-group formLayout col-md-6">
						<label for="name" class="control-label " >الاسم: </label>
						 <input type="text" id="name" name="name"  class="form-control" placeholder="" />
					</div> 	
					 	
					</div> 
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="tele2" class="control-label " >تليفون 2: </label>
						 <input type="text" id="tele2" name="tele2"  class="form-control" placeholder="" />
					</div> 	 
							<div class="form-group formLayout col-md-6">
						<label for="tele1" class="control-label " >تليفون 1: </label>
						 <input type="text" id="tele1" name="tele1"  class="form-control" placeholder="" />
					</div> 	
					
					</div> 
					<div class="form-group formLayout">
						<label for="source" class="control-label " >المصدر: </label>
						 <input type="text" id="source" name="source"  class="form-control" placeholder="" />
					</div> 
					
					

	
						</div>
						<div class="modal-footer mf">
							<button class="btn btn-info btn-sm " type="submit" id="DoneAdd">أضف</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
	   </div> 
     
  	<!-------------------------End Add Discount---------------->
	<!-------------------------Edit Discount---------------->
		<div class="modal fade" id="EditRequest">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<h3><strong>تعديل بيانات</strong></h3>
					</div>
				<form action="<?php echo $this->config->base_url(); ?>employee/updatedemand" method="post">
						<div class="modal-body ">
					<div class="form-group formLayout">
						<label for="date" class="control-label " >التاريخ: </label>
						 <input type="text" id="edate" name="date"  class="form-control" placeholder="" />
					</div> 



						<div class="form-group formLayout">
						 <input type="hidden" id="custid" name="custid"  class="form-control" placeholder="" />
					</div>
							<div class="form-group formLayout">
								<label for="erequesttype" class="control-label ">نوع الطلب: </label>
									<select class="form-control" name="erequesttype" id="erequesttype" > 
										    <?php
										
											 foreach ($request_type as $value) {
                                           echo '<option value="'.$value->id.'">'.$value->type.'</option>';									     	$x++;
									     	}
										    ?>

									 </select>
							</div>
				    <div class="form-group formLayout">
								<label for="epay" class="control-label ">طريقه السداد </label>
									<select class="form-control" name="epay" id="epay"> 
									 <?php
										
											   foreach ($way_of_pay as $value) {
                                           echo '<option value="'.$value->id.'">'.$value->way.'</option>';									     	$x++;
									     	}
										    ?> 
									 </select>
							</div>	
					<div class="form-group formLayout">
						<label for="epurpose" class="control-label " >الغرض: </label>
						 <input type="text" id="epurpose" name="epurpose"  class="form-control" placeholder="" />
					</div> 
						<div class="row">
					<div class="form-group formLayout col-md-6">
						<label for="eperiod" class="control-label " >المدة: </label>
						 <input type="text" id="eperiod" name="eperiod"  class="form-control" placeholder="" />
					</div> 
					<div class="form-group formLayout col-md-6">
						<label for="ecommision" class="control-label " >العمولة: </label>
						 <input type="text" id="ecommision" name="ecommision"  class="form-control" placeholder="" />
					</div> 
					</div> 
					<h4>تفاصيل البيان</h4>
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="eAreas2" class="control-label " >المنطقه 2: </label>
						 <input type="text" id="eAreas2" name="eAreas2"  class="form-control" placeholder="" />
					</div> 
					<div class="form-group formLayout col-md-6">
						<label for="eAreas1" class="control-label " >المنطقه 1: </label>
						 <input type="text" id="eAreas1" name="eAreas1"  class="form-control" placeholder="" />
					</div> 

					<div class="form-group formLayout col-md-6">
						<label for="eAreas3" class="control-label " >المنطقه 4: </label>
						 <input type="text" id="eAreas3" name="eAreas3"  class="form-control" placeholder="" />
					</div> 
					<div class="form-group formLayout col-md-6">
						<label for="eAreas4" class="control-label " >المنطقه 3: </label>
						 <input type="text" id="eAreas4" name="eAreas4"  class="form-control" placeholder="" />
					</div> 

					</div>
					<div class="row">
					<div class="form-group formLayout col-md-6">
						<label for="esize" class="control-label " >المساحة: </label>
						 <input type="text" id="esize" name="esize"  class="form-control" placeholder="" />
					</div> 
					</div> 
						
					<div class="row">
						<div class="form-group formLayout">
						<label for="efloors" class="control-label " >أدوار: </label>
						 <input type="text" id="efloors" name="efloors"  class="form-control" placeholder="" />
					</div> 					
						</div>
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="erooms" class="control-label " >الغرف: </label>
						 <input type="text" id="erooms" name="erooms"  class="form-control" placeholder="" />
					</div> 	
					<div class="form-group formLayout col-md-6">
						<label for="ereception" class="control-label" >ريسبشن: </label>
						 <input type="text" id="ereception" name="ereception"  class="form-control" placeholder="" />
					</div> 	
					</div> 	
					<div class="row">
			
					<div class="form-group formLayout col-md-6">
						<label for="ebathroom" class="control-label " >حمامات: </label>
						 <input type="text" id="ebathroom" name="ebathroom"  class="form-control" placeholder="" />
					</div> 	
						
					</div> 	
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="enote" class="control-label " >ملاحظة: </label>
						 <input type="text" id="enote" name="enote"  class="form-control" placeholder="" />
					</div> 	
					<div class="form-group formLayout col-md-6">
								<label for="efinishing" class="control-label ">التشطيب: </label>
									<select class="form-control" name="efinishing" id="efinishing"> 
										    <?php
										
											   foreach ($finishing as $value) {
                                           echo '<option value="'.$value->id.'">'.$value->type.'</option>';									     	$x++;
									     	}
										    ?>

									 </select>
							</div>
						
						</div>
					<div class="row">
						<div class="form-group formLayout ">
						<label for="enotes" class="control-label " >ملاحظات: </label>
						 <textarea id="enotes" name="enotes"></textarea>
					   </div> 	
					</div>
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="edate1" class="control-label " >مواعيد المعاينة 1: </label>
						 <input type="text" id="edate1" name="edate1"  class="form-control" placeholder="" />
					</div> 	
                    </div> 	
			<div class="row">
				<div class="form-group formLayout col-md-6">
						<label for="edate2" class="control-label " >مواعيد المعاينة 2: </label>
						 <input type="text" id="edate2" name="edate2"  class="form-control" placeholder="" />
					</div> 	
				</div> 	
				<div class="row">
							<div class="form-group formLayout col-md-6">
						<label for="edate3" class="control-label " >مواعيد المعاينة 3: </label>
						 <input type="text" id="edate3" name="edate3"  class="form-control" placeholder="" />
					</div> 	
				</div> 	
					
					
					 
					<div class="row">
					<div class="form-group formLayout col-md-6">
						<label for="ejob" class="control-label " >الوظيفة: </label>
						 <input type="text" id="ejob" name="ejob"  class="form-control" placeholder="" />
					</div> 	
							<div class="form-group formLayout col-md-6">
						<label for="ename" class="control-label " >الاسم: </label>
						 <input type="text" id="ename" name="ename"  class="form-control" placeholder="" />
					</div> 	
					 	
					</div> 
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="etele2" class="control-label " >تليفون 2: </label>
						 <input type="text" id="etele2" name="etele2"  class="form-control" placeholder="" />
					</div> 	 
							<div class="form-group formLayout col-md-6">
						<label for="etele1" class="control-label " >تليفون 1: </label>
						 <input type="text" id="etele1" name="etele1"  class="form-control" placeholder="" />
					</div> 	
					
					</div> 
					<div class="form-group formLayout">
						<label for="esource" class="control-label " >المصدر: </label>
						 <input type="text" id="esource" name="esource"  class="form-control" placeholder="" />
					</div> 


	                <div class="form-group formLayout">
						 <input type="hidden" id="eid" name="eid"  class="form-control" placeholder="" />
					</div> 
					
						</div>
						<div class="modal-footer mf">
							<button class="btn btn-info btn-sm " type="submit" id="DoneAdd">أضف</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
	   </div> 
     
  	<!-------------------------End Edit Discount----------------->
  	<!-------------------------start Delete Discount---------------->

		<div class="modal fade" id="DeleteRequest">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<h3><strong>حذف بيانات</strong></h3> 
					</div>
					<form action="<?php echo $this->config->base_url(); ?>index.php/employee/deletedemand" method="post">
						<div class="modal-body">
							<div class="form-group formLayout" id="formlayout">   
								  <label for="nameInput" class="control-label ">هل أنت متأكد من حذف البيانات</label>
								 <input type="hidden" name="delete_offerid" id="delete_offerid" class="form-control" readonly/>

							</div>  
						</div>
						<div class="modal-footer mf">
							<button class="btn btn-info btn-sm " type="submit" id="DoneDelete">حذف</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
	   </div> 
   <!-------------------------End Delete Discount----------------->
	<!--------------------------------------------------------------menubar---------------------------------------->
		<div class="menubar">
			<div class="row">
				
				<div class="col-md-2 col-md-offset-10 ">
				
				</div>
			
					<div class=" col-md-10 details">
					<h3>طلبات</h3>
					<button class="btn btn-default addbtn" data-toggle='modal' data-target="#AddRequest">أضف طلب</button>
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
							
						<th>اسم الموظف</th>
								<th>اسم الموظف</th>
								<th>التاريخ</th>
								<th>تعديل</th>
								<th>حذف</th>
								<th>تفاصيل</th>
							</thead>
							<?php $i=0;?>
							<?php foreach ($demands as $value) {
								# code...
							
							echo '<tbody>';
							echo '<tr>';
							echo "<td>".$demands[$i]->custid."</td>";	
							echo "<td>".$demands[$i]->name."</td>";
							echo "<td>".$demands[$i]->date."</td>";
							echo "<td><a type='button' class='edit-offer' data-toggle='modal' data-target='#EditRequest'  data-target='#EditEmployee'
                                                                     data-date='".$demands[$i]->date."'
                                                                     data-period='".$demands[$i]->period."'
                                                                     data-purpose='".$demands[$i]->purpose."'
                                                                     data-finishing='".$demands[$i]->finishing_id."'
                                                                     data-wayofpay='".$demands[$i]->way_of_pay_id."'
                                                                     data-request_type='".$demands[$i]->request_type."'

                                                                     data-custid='".$demands[$i]->custid."'

                													 data-commission='".$demands[$i]->commission."'
                                                                     data-area1='".$demands[$i]->area1."'
                                                                     data-area2='".$demands[$i]->area2."'

                                                                     data-area3='".$demands[$i]->area3."'
                                                                     data-area4='".$demands[$i]->area4."'
                                                                     data-size='".$demands[$i]->size."'

                                                                     data-floors='".$demands[$i]->floors."'
                                                                     data-rooms='".$demands[$i]->rooms."'
                                                                     data-reception='".$demands[$i]->reception."'

                                                                     data-bathroom='".$demands[$i]->bathroom."'
                                                                     data-extra='".$demands[$i]->extra."'
                                                                     data-check_date1='".$demands[$i]->check_date1."'

                                                                     data-check_date2='".$demands[$i]->check_date2."'
                                                                     data-check_date3='".$demands[$i]->check_date3."'
                                                                     data-notes='".$demands[$i]->notes."'

                                                                     data-customer_name='".$demands[$i]->customer_name."'
                                                                     data-customer_job='".$demands[$i]->customer_job."'
                                                                     data-customer_phone1='".$demands[$i]->customer_phone1."'
                                                                     data-customer_phone2='".$demands[$i]->customer_phone2."'

                                                                     data-source='".$demands[$i]->source."'
                                                                     data-employee_id='".$demands[$i]->employee_id."'
                                                                    
                                                                     >"."<i class='fa fa-pencil-square-o'></i></a></td>";
                                echo "<td><a type='button' href='#' class='delete-offer' data-toggle='modal' data-target='#DeleteRequest' data-id='".$demands[$i]->custid."'><i class='fa fa-trash' aria-hidden='true'></i></a></td>";		
                                echo "<td><a type='button' class='edit-emp' >"."<i class='fa fa-info' aria-hidden= 'true' ></i></a></td>";
							echo "</tr>";
							echo"</tbody>";
							$i++;
							}?>
						</table>
	
					 
					</div>
			
			</div>
		</div>

                                </div>
	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<?php $this->load->view('Scripts');?>
<script>
$(document).on("click",".delete-offer",function () {
	//alert('ok');
	var id=$(this).data('id');
	//alert(id);
	$(".modal-body #delete_offerid").val(id);
});

$(document).on("click",".edit-offer",function () {
	//alert('ok');
	var date=$(this).data('date');
	var period=$(this).data('period');
	var purpose=$(this).data('purpose');
	var commission=$(this).data('commission');

	var area1=$(this).data('area1');
	var area2=$(this).data('area2');
	var area3=$(this).data('area3');
	var area4=$(this).data('area4');

	var size=$(this).data('size');
	var floors=$(this).data('floors');
	var rooms=$(this).data('rooms');

	var reception=$(this).data('reception');
    var bathroom = $(this).data('bathroom');
	var extra=$(this).data('extra');

	var check_date1=$(this).data('check_date1');
	var check_date2=$(this).data('check_date2');
	var check_date3=$(this).data('check_date3');

    var notes=$(this).data('notes');
    var customer_name=$(this).data('customer_name');
	var customer_job=$(this).data('customer_job');

	var customer_phone1=$(this).data('customer_phone1');
    var customer_phone2=$(this).data('customer_phone2');
    var source=$(this).data('source');
    var employee_id=$(this).data('employee_id');
    var custid=$(this).data('custid');


    var finishing=$(this).data('finishing');
    var wayofpay=$(this).data('wayofpay');
    var request_type=$(this).data('request_type');


//alert(request_type);
    $("#edate").val(date);
	$("#eperiod").val(period);
	$("#epurpose").val(purpose);

	$("#ecommision").val(commission);
	$("#eAreas1").val(area1);
	$("#eAreas2").val(area2);

	$("#eAreas3").val(area3);
	$("#eAreas4").val(area4);
	$("#esize").val(size);

	$("#efloors").val(floors);
	$("#erooms").val(rooms);
	$("#ereception").val(reception);

    $("#ebathroom").val(bathroom);
    $("#enote").val(extra);
    $("#edate1").val(check_date1);

    $("#edate2").val(check_date2);
	$("#edate3").val(check_date3);
	$("#enotes").val(notes);

    $("#ename").val(customer_name);
    $("#ejob").val(customer_job);
    $("#etele1").val(customer_phone1);

    $("#etele2").val(customer_phone2);
    $("#esource").val(source);
    $("#eid").val(employee_id);

    $("#erequesttype").val(request_type);
    $("#epay").val(wayofpay);
    $("#efinishing").val(finishing);
    $("#custid").val(custid);


});
</script>

	</body>
</html>