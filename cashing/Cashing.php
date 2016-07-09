<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>صرف من خزنة</title>
	<?php $this->load->view('Header');?>
		</head>
	<body>
	
	<!--------------------------------------------------------------menubar----------------------------------------->
		<div class="menubar">
			<div class="row">
				<?php $this->load->view('toolbar'); ?>
							<div class="topbar">
			
<h3>صرف من خزنة</h3><i class="fa fa-eyedropper" aria-hidden="true"></i>
</div>
				<div class="col-md-2 col-md-offset-10 ">
				<?php $this->load->view('MenuBar')?>
				</div>
			
					<div class=" col-md-10 details">
						<div class="content row">
				
					  <form id="SearchForm" class="col-md-7 col-md-offset-4 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="SearhDiv form-group formLayout col-md-9 col-sm-12 col-xs-12 ">
                                         <span class="Inputspan fa fa-search"></span>
		        					     <input type="text" name=""  class="form-control" placeholder="" />
	       				            </div>
                                </div>
						</form>
						<div class="col-md-6">
							<div class="box-wider-text" >
								<div class="box-body" >  
									<div class="row" id="ShowReportTreasuries">  
										<div class="table-responsive">
										<table>
											<thead>
												<tr>
													<td>id</td>
													<td>إسم المستلم</td>
													<td>المبلغ</td>
													<td>الاجمالي</td>
												</tr>
											</thead>
											<tbody>
											<tr>
													<td>2</td>
													<td>بصسب</td>
													<td>3434</td>
													<td>3434</td>
												</tr>
											</tbody>
										</table>
										<!--span id="ReportSection"></span--> </div>
									</div>
								</div>
							</div>
						</div>
						<form method="post" action="#" class="col-md-6" id="CashingForm">
						
									<div class="form-group formLayout" id="formlayout">
											<label for="cashingname" class="control-label "> إسم المستلم:</label>
											<input type="text" id="cashingname" name="cashingname" class="form-control" placeholder="إسم المستلم">
									</div>
									<div class="form-group formLayout " id="formlayout">
											<label for="cashingDepart" class="control-label "> إسم القسم التابع له:</label>
											<input type="text" id="cashingDepart" name="cashingDepart" class="form-control" placeholder="إسم القسم التابع له">
									</div>
									<div class="form-group formLayout  " id="formlayout">
											<label for="cashid" class="control-label "> رقم البطاقة:</label>
											<input type="text" id="cashid" name="cashid" class="form-control" placeholder="رقم البطاقة">
									</div>
									<div class="form-group formLayout  " id="formlayout">
											<label for="amountcash" class="control-label ">المبلغ:</label>
											<input type="text" id="amountcash" name="amountcash" class="form-control" placeholder="المبلغ">
									</div>
									<div class="form-group formLayout  " id="formlayout">
											<label for="datecashing" class="control-label ">السبب:</label></br>
											<textarea></textarea>
									</div>
									<div class="form-group formLayout " id="formlayout">
						<a type="submit" class="brn btn-default cashsubmit" id="ShowCashing">تأكيد</a>
						<a class="brn btn-default printcash" id="cashingprint" id="CashingPrintView">طباعة</a>
						</div>
						</form>
						
	
					 </div>
					</div>
			
			</div>
		</div>

<div class="Print">
	<div class='col-xs-12 invoiceHeader'>
		<div class="col-xs-6">
			<img style="width: 150px;" src="#" alt="Firnas 1">
		</div>  
	</div>
	<div id="PrintableSection">
	
	</div>
	<div class='col-xs-12' id='InvoiceFooter'>        
	
	</div> 
</div>
	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<?php $this->load->view('Scripts');?>
<script>
$("#cashingprint").click(function () { 
window.print();
});
</script>
	</body>
</html>