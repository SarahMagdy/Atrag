<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>الرسائل الواردة</title>
        <?php $this->load->view('Header'); ?>
    <body>
        <!------------------------Add Discount----------------->

        <!-------------------------End Edit Discount----------------->
        <!-------------------------start Delete Discount----------------->

        <!--------------------------------------------------------------menubar----------------------------------------->
        <div class="menubar">
            <div class="row">
                <div class="toolbar"><i class="fa fa-bell" aria-hidden="true"></i><div class="notifications" id="notfication"><?php echo $count; ?></div>

                </div>
                <?php //$this->load->view('toolbar'); ?>
                <div class="topbar">
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

                    <th>الموضوع</th>
                    </thead>
                    <?php ?>
                    <?php foreach ($replays as $key => $value) { ?>
                        <tbody>
                            <tr class="cond">
                                <td class="TableDataDiv">
                                    <ul class="row">
                                        <li class="col-md-12"><a type="button" class="SubItemBtnOpen" id="hideNot"  data-employee-id="<?php echo $value->employee_id; ?>" data-msg-id="<?php echo $value->id; ?>"><span class="fa fa-plus-square"></span> إذن شخصي</a></li>

                                    </ul>
                                    <div class="SubItem collapse">
                                        <?php if ($value->agreement == 1) { ?>
                                            <p class="detailpermission">
                                                لقدقام المدير بموافقه طلبك بقبول طلب الاذن <?php echo $value->date_from; ?> الي الساعه <?php echo $value->date_to; ?>
                                            </p>
                                        <?php } else { ?>
                                            <p class="detailpermission">
                                                لقدقام المدير برفض  طلبك بقبول طلب الاذن <?php echo $value->date_from; ?> الي الساعه <?php echo $value->date_to; ?>
                                            </p>
                                        <?php } ?>
                                    </div>
                                </td> 

                            <?php } ?>

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

        $(document).on("click", "#hideNot", function () {

            var data = {
                employeeid: $(this).data('employee-id'),
                msgid: $(this).data('msg-id')

            }

            $.post("<?php echo $this->config->base_url(); ?>employee/readMsg", data, function (result) {
                var notification = document.getElementById('notfication').innerHTML;
                var i = parseInt(notification);
                if (!(i == 0)) {
                    i--;
                    document.getElementById('notfication').innerHTML = i;
                    document.getElementById('empnot').innerHTML = i;
                }
            });
        });


    </script>
</body>
</html>
