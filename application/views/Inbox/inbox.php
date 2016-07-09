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
                <div class="col-md-10 new">
                    <!--<div class="logout"><a href="<?php $this->config->base_url() ?>logout"><i class="fa fa-power-off" aria-hidden="true"></i></a></div>-->
                    <h2 class="logoword">أتراج</h2>
			<form id="SearchForm" class="col-md-5  col-md-offset-3 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="SearhDiv form-group formLayout col-md-9 col-sm-12 col-xs-12 ">
                                         <span class="Inputspan fa fa-search"></span>
		        					     <input type="text" name=""  class="form-control" placeholder="" />
	       				            </div>
                                </div>
								</form>	</div>
<!--                <div class="logout"><a href="<//?php echo $this->config->base_url() ?>employee/logout"><i class="fa fa-power-off" aria-hidden="true"></i></a></div>-->

                <div class="toolbar col-md-2"><i class="fa fa-bell" aria-hidden="true"></i><div class="notifications" id="notfication">
         
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
                <?php //$this->load->view('toolbar'); ?>
                <div class="topbar">

                    <div class="col-md-6">
                        <h3>الرسائل الواردة</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-10 ">
                    <?php $this->load->view('MenuBar') ?>
                </div>

                <div class=" col-md-9 col-md-offset-1 details">


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
                       
                        <th>الاسم</th>
                        <th>  التاريخ والوقت من</th>
                        <th>التاريخ والوقت الي</th>
                        <th>الموضوع</th>
                        <th>موافق/غير موافق</th>
                        </thead>
                        <?php foreach ($requests as $key => $value) { ?>
                            <tbody>
                                <tr class="cond"><input type="hidden" value="<?php $value->id; ?>">
                            <td>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox".
                                    </label>
                                </div>
                            </td>
                           
                            <td><?php echo $value->employee_id; ?></td>
                            <td><?php echo $value->date_from; ?></td>
                            <td><?php echo $value->date_to; ?></td>

                            <td class="TableDataDiv">
                                <ul class="row">
                                    <li class="col-md-12"><a type="button" class="SubItemBtnOpen"><span class="fa fa-plus-square"></span> إذن شخصي</a></li>

                                </ul>
                                <div class="SubItem collapse">
                                    <p class="detailpermission">
                                        برجاء التفضل بسماح لي بطلب اذن من الساعه <?php echo $value->date_from; ?> الي الساعه <?php echo $value->date_to; ?>
                                    </p>

                                </div>
                            </td> 

                            <td>

                                <button  type="submit" class="submit" id="agree" class="afree" name="agree" data-employee-id="<?php echo $value->employee_id; ?>"  data-msg-id="<?php echo $value->id; ?>"><i class="fa fa-check" aria-hidden="true"></i></button>      
                                <button  type="submit" class="none" id="refuse" data-employee-id="<?php echo $value->employee_id; ?>" data-msg-id="<?php echo $value->id; ?>"><i class="fa fa-times" aria-hidden="true"></i></button>
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
            $(document).on("click", "#agree", function () {
        //alert('ok');

                var data = {
                    employeeid: $(this).data('employee-id'),
                    msgid: $(this).data('msg-id')
                }
                $.post("<?php echo $this->config->base_url(); ?>employee/agreeRequest", data, function (result) {


                    // $('tr.cond').hide();
                    var notification = document.getElementById('notfication').innerHTML;
                    var i = parseInt(notification);
                    if (!(i == 0)) {
                        i--;
                        document.getElementById('notfication').innerHTML = i;
                        document.getElementById('not').innerHTML = i;
                        //var x = document.getElementsByClassName('hfhf').innerHTML = i;
                    }
                });

            });


            $(document).on("click", "#refuse", function () {

                var data = {
                    employeeid: $(this).data('employee-id'),
                    msgid: $(this).data('msg-id')

                }
                $.post("<?php echo $this->config->base_url(); ?>employee/RefuseRequest", data, function (result) {
                    //    $('tr.cond').hide();
                    var notification = document.getElementById('notfication').innerHTML;
                    var i = parseInt(notification);
                    if (!(i == 0)) {
                        i--;
                        document.getElementById('notfication').innerHTML = i;
                        document.getElementById('not').innerHTML = i;

                    }

                });
            });
        </script>
    </body>
</html>
