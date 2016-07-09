<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>الرسائل الواردة</title>
        <?php $this->load->view('Header'); ?>

    </head>

    <?php
    // if ($this->session->userdata('logged_in')) {
    // $session_data = $this->session->userdata('logged_in');
    ?>   
    <body>
        <!------------------------Add Discount----------------->

        <!-------------------------End Edit Discount----------------->
        <!-------------------------start Delete Discount----------------->

        <!--------------------------------------------------------------menubar----------------------------------------->
        <div class="menubar">
            <div class="row">
                                <div class="col-md-10 new"><div class="logout"><a href="#"><i class="fa fa-power-off" aria-hidden="true"></i></a></div>
                    <h2 class="logoword">أتراج</h2>
			<form id="SearchForm" class="col-md-5  col-md-offset-3 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="SearhDiv form-group formLayout col-md-9 col-sm-12 col-xs-12 ">
                                         <span class="Inputspan fa fa-search"></span>
		        					     <input type="text" name=""  class="form-control" placeholder="" />
	       				            </div>
                                </div>
								</form>	</div>
                <div class="toolbar"><i class="fa fa-bell" aria-hidden="true"></i><div class="notifications" id="notfication">
                        <?php
//                            if ($session_data['type_id'] == '4') {
//                                echo $countManger;
//                            } elseif ($session_data['type_id'] == '3') {
//                                echo $countSalesManger;
//                            }
//                            else{
                        echo $count;
                        // }
                        ?></div>

                </div>
     
                <div class="topbar">
                                 <div class="topbaroffer">
			
<h3>صفقات</h3><i class="fa fa-eyedropper" aria-hidden="true"></i>
</div>
       
                    <!--div class="row">
                    <div class="col-md-6">
<dropdown class="inboxes">
<input id="toggle2" type="checkbox">
<label for="toggle2" class="animate">Editor<i class="fa fa-list float-right"></i></label>
<ul class="animate">
<li class="animate">Source<i class="fa fa-code float-right"></i></li>
<li class="animate">Fullpage<i class="fa fa-arrows-alt float-right"></i></li>
<li class="animate">Debug<i class="fa fa-cog float-right"></i></li>
</ul>
</dropdown>
</div>
                    <div class="col-md-6">
                    <h3>الرسائل الواردة</h3>
                    </div-->
                    <h3>الرسائل الواردة</h3>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-10 ">
                <?php $this->load->view('MenuBar') ?>
            </div>

            <div class=" col-md-9 col-md-offset-1 detailsoffer">


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


                    <th>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 
                        </label>
                    </div></th>
                    <th>اجمالي سعر الصفقه</th>
                    <th>  عموله الموظف</th>
                    <th>عموله الشركه</th>
                    <th>اسم الموظف</th>
                    <th>عقد الصفقه</th>
                    <th>المشتري</th>
                    <th>البائع</th>
                    <th>عقد الصفقه</th>
                    <th>موافق/غير موافق</th>
                    </thead>
                
                    <?php foreach ($deals as $key => $value) { ?>
                        <tbody>
                            <tr class="cond"><input type="hidden" value="<?php $value->id; ?>">
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox".
                                </label>
                            </div>
                        </td>
                        <td><?php echo $value->total_deal_money; ?></td>
                        <td><?php echo $value->employee_commission; ?></td>
                        <td><?php echo $value->company_commission; ?></td>
                        <td>
                        <?php
                            $this->load->model('EmployeeModel');
                            $emp = $this->EmployeeModel->employeedata($value->employee_id);

                            foreach ($emp as $employ) {
                                echo($employ->name);
                            }
                            ?>
                        </td>
                        <td><img src="../_/images/<?php echo $value->contract_of_deal;?>" height="30px"></img></td>
                        <td><?php echo $value->buyer; ?></td>
                        <td><?php echo $value->seller; ?></td>

                        <td class="TableDataDiv">
                            <ul class="row">
                                <li class="col-md-12"><a type="button" class="SubItemBtnOpen"><span class="fa fa-plus-square"></span>طلب صفقه</a></li>

                            </ul>
                            <div class="SubItem collapse">
                                <p class="detailpermission">
                                    برجاء الرد علي طلب هذه الصفقه بالبيانات المعروضه
                                </p>

                            </div>
                        </td> 

                        <td>

                            <button  type="submit" id="agree" class="afree" name="agree" data-employee-id="<?php echo $value->employee_id; ?>"  data-deal-id="<?php echo $value->id; ?>"><i class="fa fa-check" aria-hidden="true"></i></button>      
                            <button  type="submit" class="none" id="refuse" data-employee-id="<?php echo $value->employee_id; ?>" data-deal-id="<?php echo $value->id; ?>"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </td>
                    <?php } ?>


                    </form>
                    </tr>
                    </tbody>
                </table>


            </div>
            <div class="left"></div>

        </div>
    </div>


    <!--------------------------------------------------------------/menubar---------------------------------------------------------------->

    <?php $this->load->view('Scripts'); ?>
<script>

$(document).on("click","#agree",function(){

        var Msg = $(this).data('deal-id');
        var data = {
            employeeid: $(this).data('employee-id'),
            dealid: $(this).data('deal-id')
        }
        $.post("<?php echo $this->config->base_url(); ?>dealsController/agreeDeal", data, function (result) {
//            alert($document.find('tr.cod').val()==Msg);
//          ($(this).find('tr.cod').val() == Msg).hide();
         //    $('tr.cond').hide();
            var notification = document.getElementById('notfication').innerHTML;
            var i = parseInt(notification);
            if (!(i == 0)) {
                i--;
                document.getElementById('notfication').innerHTML = i;
                document.getElementById('omla').innerHTML = i;
                document.getElementById('omla2').innerHTML = i;

            }

        });
    });

    $(document).on("click","#refuse",function(){


        var data = {
            employeeid: $(this).data('employee-id'),
            dealid: $(this).data('deal-id')

        }
        $.post("<?php echo $this->config->base_url(); ?>dealsController/RefuseDeal", data, function (result) {
          //  $('tr.cond').hide();
            var notification = document.getElementById('notfication').innerHTML;
            var i = parseInt(notification);
            if (!(i == 0)) {
                i--;
                document.getElementById('notfication').innerHTML = i;
                document.getElementById('omla2').innerHTML = i;
            }

        });
    });
</script>

</body>
</html>
<?php //} ?>
