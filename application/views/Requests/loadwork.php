<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>توزيع الطلبات</title>
	<?php $this->load->view('Header');?>
		</head>
	<body>
	
	<!--------------------------------------------------------------menubar---------------------------------------->
		<div class="menubar">
			<div class="row">
				<?php $this->load->view('toolbar'); ?>
				<div class="topbarload">
    <h3>توزيع الطلبات</h3><i class="fa fa-eyedropper" aria-hidden="true"></i>
    </div>
				<div class="col-md-2 col-md-offset-10 ">
				<?php $this->load->view('MenuBar')?>
				</div>
			
					<div class=" col-md-10 details">
				
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
								<th>نوع الطلب</th>
								<th>التاريخ</th>
								<th>صاحب الطلب</th>
								<th>نوع الشقه</th>
								<th>إسم الموظف</th>
                                                                <th>الطلب</th>
								<th>تأكيد</th>
						
							</thead>
							<?php 
							$i=1;
							foreach ($allrequest as $value) {

							?>
							<tbody>
								<tr>
								 <td><?php echo $i ;?></td>

							
									<?php if($value->form_type==0) {
									echo"	<td>عرض</td>";
									}
									else
									{
										echo"	<td>طلب</td>";
									}

									?>
									<td><?php echo $value->date?></td>
									<td><?php echo $value->customer_name?></td>
									<td><?php echo $value->type?></td>
									<td>
				 <select class="form-control selectemployee" id="<?php echo $value->id?>" name="Select_employee" class="chooseemployee">
					<?php foreach ($allemployee as $key) {
                                    echo '<option value="'.$key->id.'">'.$key->name.'</option>';
                                     						     	
									     	}
										    ?>
				</select>
											</td>
<?php  
$x=$value->id;
 echo "<td><a href='".$this->config->base_url()."employee/requestview?id=$x'>تفاصيل الطلب </a></td>" ?>
<td><a  type='button' class=" btn btn-primary submit editaya"  href="javascript:loadwork(<?= $value->id; ?>)">click <i class="fa fa-check" aria-hidden="true"></i></a></td>

								</tr>
							</tbody>
				<?php 	$i++;	}?>
						</table>
	
					</div>
			
			</div>
		</div>
	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<?php $this->load->view('Scripts');?>
<script>
function loadwork(id) {
var x=$('#'+id).val();
    $.post('<?php echo $this->config->base_url(); ?>employee/insertloadwork', {"reqid" : id ,"empid" : x}, function(data){
       });
    }

</script>
	</body>
</html>