<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>الصفقات</title>
	<?php $this->load->view('Header');?>
		</head>
	<body>
	<!------------------------Add Deal---------------->
		<div class="modal fade" id="AddDeal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<h3><strong>أضف صفقة</strong></h3>
					</div>
					<form action="<?php echo $this->config->base_url(); ?>employee/adddeal" method="post" enctype="multipart/form-data">
						<div class="modal-body ">
					
						
								<div class="row">								
								<div class="form-group formLayout col-md-6" id="formlayout">
											<label for="namebuyer" class="control-label "> إسم البائع:</label>
											<input type="text" id="namebuyer" name="namebuyer" class="form-control" placeholder="">
									</div>
									<div class="form-group formLayout col-md-6 " id="formlayout">
											<label for="nameseller" class="control-label ">إسم المشتري:</label>
											<input type="text" id="nameseller" name="nameseller" class="form-control" placeholder="">
									</div>
								
								</div>	
								<div class="row">								
								<div class="form-group formLayout col-md-6" id="formlayout">
											<label for="ratebuyer" class="control-label "> النسبه المئويه من البائع:</label>
											<input type="text" id="ratebuyer" name="ratebuyer" class="form-control" placeholder="">
									</div>
									<div class="form-group formLayout col-md-6 " id="formlayout">
											<label for="rateseller" class="control-label ">النسبه المئويه من المشتري :</label>
											<input type="text" id="rateseller" name="rateseller" class="form-control" placeholder="">
									</div>
								
								</div>
								<div class="row">
									<div class="form-group formLayout col-md-3 col-md-offset-9" id="formlayout">
										<label for="dealdate" class="control-label ">التاريخ:</label>
										<input type="text" id="dealdate" name="dealdate"  class="form-control" placeholder="" />
									</div>
								</div>
								<div class="row">
									<div class="form-group formLayout col-md-6 " id="formlayout">
										<label for="dealmoney" class="control-label ">مبلغ التعاقد:</label>
										<input type="text" id="dealmoney" name="dealmoney"  class="form-control" placeholder="" />
									</div>
								</div>
								<div class="row">
									<div class="form-group formLayout col-md-6 " id="formlayout">
										<label for="dealcompanyrate" class="control-label ">نسبة الشركة من بييع:</label>
										<input type="text" id="dealcompanyrate" name="dealcompanyrate"  class="form-control" placeholder="" />
									</div>	
									<div class="form-group formLayout col-md-6 " id="formlayout">
										<label for="dealemployeerate" class="control-label ">نسبة الشركة من بييع:</label>
										<input type="text" id="dealemployeerate" name="dealemployeerate"  class="form-control" placeholder="" />
									</div>
								
								</div>
									<div class="row">
										<div class="form-group formLayout col-md-12">
										<input type="file" name="contract" >							
						</div>
								</div>
								
						</div>
						<div class="modal-footer mf">
									<button type="submit" class="senddeal">أرسل</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
	   </div> 
     
  	<!-------------------------End Add Deal----------------->
	
		
   
	<!--------------------------------------------------------------menubar---------------------------------------->
		<div class="menubar">
			<div class="row">
				<?php $this->load->view('toolbar'); ?>
							<div class="topbar">
			
<h3>الصفقات</h3><i class="fa fa-eyedropper" aria-hidden="true"></i>
</div>
				<div class="col-md-2 col-md-offset-10 ">
				<?php $this->load->view('MenuBar')?>
				</div>
			
					<div class=" col-md-10 details">
				
					<button class="btn btn-default addbtn" data-toggle='modal' data-target="#AddDeal">أضف صفقة</button>
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
							
							
								<th>التاريخ</th>
								<th>إسم البائع</th>
								<th>إسم المشتري</th>
						
							</thead>
							<?php
							//print_r($deal);

							 foreach ($deal as $value) {
							
							
						echo'<tbody>';
							echo"<tr>";
								
								echo"	<td>$value->date</td>";
								echo"	<td>$value->seller</td>";
								echo"	<td>$value->buyer</td>";
								echo"</tr>";
							echo"</tbody>";
							}?>
						</table>
	
					 
					</div>
			
			</div>
		</div>


	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<?php $this->load->view('Scripts');?>

	</body>
</html>