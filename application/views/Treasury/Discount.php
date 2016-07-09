<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>الخصومات</title>
		<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-theme.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css"href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.theme.css" rel="stylesheet">
		<link type="text/css"href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.structure.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/font-awesome.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/style.css" rel="stylesheet">
		</head>
	<body>
	<!------------------------Add Discount---------------->
		<div class="modal fade" id="AddDiscount">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<h3><strong>أضف خصم</strong></h3>
					</div>
				<form action="<?php echo $this->config->base_url(); ?>employee/adddiscount" method="post" class="row" enctype="multipart/form-data">
						<div class="modal-body ">
							  <div class="form-group formLayout">
						<label for="late_time" class="control-label " >مده التأخير: </label>
						 <input type="text" id="late_time" name="late_time"  class="form-control" placeholder="مده التأخير بالدقيقه " />
					</div> 
							
						<div class="form-group formLayout">
						<label for="late_price" class="control-label " > قيمة الخصم: </label>
						 <input type="late_price" id="late_price" name="late_price"  class="form-control" placeholder="سعر مده التأخير بالجنيه" />
					</div> 
						</div>
						<div class="modal-footer mf">
							<button class="btn btn-info btn-sm " type="submit" id="DoneAdd">أضف</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
	   </div> 
     
  	<!-------------------------End Add Discount----------->
	<!-------------------------Edit Discount---------------->
  
		<div class="modal fade" id="EditDiscount">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<h3><strong>تعديل بيانات</strong></h3>
					</div>
					<form action="<?php echo $this->config->base_url(); ?>employee/editDiscount" method="post">
						<div class="modal-body ">
							
							 <div class="form-group formLayout discount" id="formlayout">
                                                             <input type="hidden" id="editproductid" name="id" class="form-control">
							 
							    <label for="late_time" class="control-label ">مده التأخير :</label>
                                                            <input type="text" name="late_time" id="latetimeid"class="form-control" placeholder="" value="" />
							 </div>
							   <div class="form-group formLayout discount" id="formlayout">
							    <label for="late_price" class="control-label ">قيمة الخصم:</label>
								<input type="text" name="late_price" id="latepriceid"class="form-control" placeholder="" />
							 </div>
						</div>
						<div class="modal-footer mf">
							<button class="btn btn-info btn-sm " type="submit" id="DoneEdit">تعديل</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
	   </div> 

  	<!-------------------------End Edit Discount----------------->
  	<!-------------------------start Delete Discount---------------->

		<div class="modal fade" id="DeleteDiscount">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<h3><strong>حذف بيانات</strong></h3> 
					</div>
					<form action="<?php echo $this->config->base_url(); ?>employee/deleteDiscount" method="post">
                                            <input type="hidden" id="deleteproductid" name="id" class="form-control">

						<div class="modal-body">
							<div class="form-group formLayout" id="formlayout">   
								  <label for="nameInput" class="control-label ">هل أنت متأكد من حذف البيانات</label>
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
				<?php $this->load->view('toolbar'); ?>
                            <div class="topbardiscount">
			
<h3>الخصومات</h3><i class="fa fa-eyedropper" aria-hidden="true"></i>
</div>
				<div class="col-md-2 col-md-offset-10 ">
				<?php $this->load->view('MenuBar')?>
				</div>
			
					<div class=" col-md-10 details">
					
					<button class="btn btn-default addbtn" data-toggle='modal' data-target="#AddDiscount">أضف خصم</button>
					  <form id="SearchForm" class="col-md-5 col-md-offset-4 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="SearhDiv form-group formLayout col-md-9 col-sm-12 col-xs-12 ">
                                         <span class="Inputspan fa fa-search"></span>
		        					     <input type="text" name=""  class="form-control" placeholder="" />
	       				            </div>
                                </div>
						</form>
                                                 <?php if(isset($discounts)){?>

						<table class="pure-table table-responsive tabdetails" >
							<thead>
								<th>مده التأخير</th>
								<th>قيمة الخصم</th>
								<th>تعديل</th>
								<th>حذف</th>
							</thead>
							<tbody>
                                                            							<?php foreach($discounts as $key=>$value) {?>

								<tr>
								
									<td><?php echo $value->late_time;?></td>
									<th><?php echo $value->late_price;?></th>
                                                                        <td><a type='button' class='edit-emp' data-toggle='modal' id="" data-target="#EditDiscount" data-product-id="<?php echo $value->id; ?>" data-latetime="<?php echo $value->late_time;?>" data-lateprice="<?php echo $value->late_price;?>"><i class='fa fa-pencil-square-o'></i></a></td>
									<td><a type='button' class='detele-emp' data-toggle='modal' id="" data-target="#DeleteDiscount" data-dd-id="<?php echo $value->id; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
									
								</tr>
							</tbody>
                                                        <?php }?>
						</table>
                                                 <?php }?>
					 
					</div>		
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

	</body>
</html>

<script>
    
    
   // ==========================edit discount=============================
   $(document).on("click",".edit-emp",function(){
     
       var id = $(this).data('product-id');
       var latetime = $(this).data('latetime');
       var lateprice = $(this).data('lateprice'); 
       $(".modal-body #latetimeid").val(latetime);
       $(".modal-body #latepriceid").val(lateprice);
       $(".modal-body #editproductid").val(id);
       
   });
   // ==========================delete discount=============================
   $(document).on("click",".detele-emp",function(){
     
       var Deleteid = $(this).data('dd-id');
       $("#deleteproductid").val(Deleteid);
       
   });
    </script>
    
