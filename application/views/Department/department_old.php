<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>?????? ????????</title>
	<?php $this->load->view('Header');?>
		</head>
	<body>
	<!--start Delete Modal--->
		<div class="modal fade" id="DeleteEmployee">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<!--<h3><strong>??? ??????</strong></h3> -->
					</div>
					<form action="" method="post">
						<div class="modal-body">
							<div class="form-group formLayout" id="formlayout">   
								  <label for="nameInput" class="control-label ">?? ??? ????? ?? ??? ????????</label>
							</div>  
						</div>
						<div class="modal-footer mf">
							<button class="btn btn-info btn-sm" type="submit" id="DoneDelete">???</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
	   </div> 
	<!--End Delete Modal------->

	<!-------------------------------------------------------------ContentPage------------------------------------------>
		<div class="ContentPage">
			<div class="row">
				<?php $this->load->view('toolbar'); ?>
				<div class="col-md-2 col-md-offset-10 ">
				<?php $this->load->view('MenuBar')?>
				</div>
			
					<div class=" col-md-10 details">
						<ul class="nav nav-tabs" id="myTab">
							<li  class="active"><a data-toggle="tab" href="#ShowEmployees">????????</a></li>
							<li class="editemployee"><a href="#EditEmployee" data-toggle="tab">????? ?????? ????</a></li>
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
								<th>???????</th>
								<th>?????</th>
								<th>?????? ???????</th>
<!-- 								<th>?????</th>
 -->							<th>??????</th>
								<th>?????</th>
								<th>???</th>
								<th>????????</th>
<!-- 								<th>??????</th>
 -->							</thead>
						
						</table>
							</div>
							<div class="tab-pane active" id="EditEmployee">
							</div>
						</div>
					</div>
			
			</div>
		</div>




<?php $this->load->view('Scripts');?>
<!--------------------------------------------scripts------------------------------------------------------>
<script>
	function myFunction(){
	$(".editemployee").css("display","block");
	$('#myTab a[href = "#EditEmployee"]').tab('show');
}
</script>
	</body>
</html>