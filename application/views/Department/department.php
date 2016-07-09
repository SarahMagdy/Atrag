<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>الأقسام</title>
	<?php $this->load->view('Header');?>
		</head>
	<body>
	<!--start Delete Modal--->
		<div class="modal fade" id="DeleteDepartment">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<h3><strong>حذف بيانات</strong></h3>
					</div>
					<form action="" method="post">
						<div class="modal-body">
							<div class="form-group formLayout" id="formlayout">   
								  <label for="nameInput" class="control-label ">هل أنت متأكد من حذف البيانات</label>
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
		<div class="ContentPage">
			<div class="row">
				<?php $this->load->view('toolbar'); ?>
				<div class="col-md-2 col-md-offset-10 ">
				<?php $this->load->view('MenuBar')?>
				</div>
			
					<div class=" col-md-10 details">
						<ul class="nav nav-tabs" id="myTab">
							<li  class="active"><a data-toggle="tab" href="#ShowDepartment">الأقسام</a></li>
							<li class="editdepartment"><a href="#EditDepartment" data-toggle="tab">تعديل بيانات </a></li>
						</ul> 
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane active" id="ShowDepartment">
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
							<tr>
								<th>التسلسل</th>
								<th>الإسم</th>
								<th>تعديل</th>
								<th>حذف</th>
							</tr>
							</thead>
							<tbody>
								<tr>
								<td>1</td>
								<td>IT</td>
								<td><a type='button' class=' edit-emp' onclick='myFunction()' data-toggle='tab' data-target='#EditDepartment'><i class='fa fa-pencil-square-o'></i></a></td>
								<td><a type='button' class='edit-emp' data-toggle='modal' data-target='#DeleteDepartment'><i class='fa fa-trash' aria-hidden='true'></i></a></td>
							</tr>
							</tbody>
						</table>
							</div>
							<div class="tab-pane" id="EditDepartment">
								<form method="post" action="#">
									<div class="form-group formLayout departments">
										<label for="depart" class="control-label" >إسم القسم: </label>
										 <input type="text"  name="depart"  class="form-control" placeholder=" " />
									</div>
									<button type="submit" class="btn btn-default" id="adddepartment">تعديل</button>
								</form>
							</div>
						</div>
					</div>
			
			</div>
		</div>




<?php $this->load->view('Scripts');?>
<!--------------------------------------------scripts------------------------------------------------------>
<script>
	function myFunction(){
	$(".editdepartment").css("display","block");
	$('#myTab a[href = "#EditDepartment"]').tab('show');
}
</script>
	</body>
</html>