<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>سحب او اضافه في الخزنة</title>
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
	
	<!--------------------------------------------------------------menubar---------------------------------------->
		<div class="menubar">
			<div class="row">
				<?php $this->load->view('toolbar'); ?>
							<div class="topbarcash">
			
<h3>صرف من خزنة</h3><i class="fa fa-eyedropper" aria-hidden="true"></i>
</div>
				<div class="col-md-2 col-md-offset-10 ">
				<?php $this->load->view('MenuBar')?>
				</div>
			
					<div class=" col-md-10 details">
						<div class="content row">
				
					
					
						<form method="post" action="<?php echo $this->config->base_url(); ?>index.php/employee/addcash" class="col-md-6 col-md-offset-6" id="CashingForm">
						
						  <div class="form-group formLayout" id="formlayout">
									<label for="cashingname" class="control-label "> نوع الطلب :</label>
  								    <select class="form-control selectemployee" id="type" name="type" class="chooseemployee">
									    <?php foreach ($treasury as $key)
									       {
                                          echo '<option value="'.$key->id.'">'.$key->type.'</option>';
									     	}
									  ?>
								   </select>				
									</div>
									<div class="form-group formLayout " id="formlayout">
											<label for="date" class="control-label "> التاريخ:</label>
											<input type="text" id="date" name="date" class="form-control" placeholder="التاريخ">
									</div>
									<div class="form-group formLayout " id="formlayout">
											<label for="money" class="control-label "> المبلغ:</label>
											<input type="text" id="money" name="money" class="form-control" placeholder="التاريخ">
									</div>
									
									<div class="form-group formLayout  " id="formlayout">
											<label for="note" class="control-label ">معلومات اضافيه:</label></br>
											<textarea id="note" name="note"></textarea>
									</div>
									<div class="form-group formLayout " id="formlayout">
						<button type="submit" class="brn btn-default cashsubmit" id="ShowCashing">تأكيد</button>
						<a class="brn btn-default printcash" id="cashingprint" id="CashingPrintView">طباعة</a>
						</div>
						</form>
						
	
					 </div>
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
<script>
  $(function() {
    $( "#date" ).datepicker();

  });
  </script>
	</body>
</html>