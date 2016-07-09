<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>الرد علي طلبات الصفقات</title>
      			<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-theme.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/bootstrap.min.css" rel="stylesheet">
		<link type="text/css"href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.theme.css" rel="stylesheet">
		<link type="text/css"href="<?php echo $this->config->base_url(); ?>_/css/jquery-ui.structure.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/font-awesome.css" rel="stylesheet">
		<link href="<?php echo $this->config->base_url(); ?>_/css/style.css" rel="stylesheet">	

    </head>
    <body>
        <!------------------------Add Discount----------------->

        <!-------------------------End Edit Discount----------------->
        <!-------------------------start Delete Discount----------------->

        <!--------------------------------------------------------------menubar----------------------------------------->
        <div class="menubar">
            <div class="row">

             
                <?php $this->load->view('toolbar'); ?>
              <div class="topbarcash">
			
<h3>صرف من خزنة</h3><i class="fa fa-eyedropper" aria-hidden="true"></i>
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
                 
                    </div-->
                    <h3>الرد علي طلبات الصفقات</h3>
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
                    <?php foreach ($deals as $key => $value) { ?>
                        <tbody>
                            
                            <tr class="cond">
                              

                                <td class="TableDataDiv">
                                    <ul class="row">
                                        <li class="col-md-12"><a type="button" class="SubItemBtnOpen" id="deals"  data-employee-id="<?php echo $value->employee_id; ?>" data-deal-id="<?php echo $value->id;?>"><span class="fa fa-plus-square"></span> الرد علي طلب الصفقه من المدير ومن مدير المبيعات</a></li>

                                    </ul>
                                    <div class="SubItem collapse">
                                        <?php if($value->salesmanger_agree==1 && $value->manger_agree==1){?>
                                        <p class="detailpermission">
                                            لقدقام المدير ومدير المبيعات بموافقه طلبك بقبول طلب علي هذه الصفقه 
                                        </p>
                                        <?php }elseif($value->salesmanger_agree==0 && $value->manger_agree==1){?>
   <p class="detailpermission">
                                            لقدقام مدير المبيعات برفض طلبك لذلك لن يتم الموافقه 
                                        </p>
                                        <?php }elseif($value->salesmanger_agree==1 && $value->manger_agree==0){?>
   <p class="detailpermission">
                                            لقدقام المدير برفض طلبك لذلك لن يتم الموافقه 
                                        </p>
                                        <?php }elseif($value->salesmanger_agree==0 && $value->manger_agree==0){?>
   <p class="detailpermission">
                                            لقدقام مدير المبيعات والمدير برفض طلبك لذلك لن يتم الموافقه 
                                        </p>
                                        <?php }?>
                                    </div>
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

<script src="<?php echo $this->config->base_url(); ?>_/js/jquery-1.11.1.min.js"></script>
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
    
$(document).on("click", "#deals", function () {


    var data = {
        employeeid: $(this).data('employee-id'),
        dealid: $(this).data('deal-id')

    }

    $.post("<?php echo $this->config->base_url(); ?>dealsController/readDeal", data, function (result) {
           var notification = document.getElementById('omla').innerHTML;
                var i = parseInt(notification);
                    if (!(i == 0)) {
                        i--;
                        document.getElementById('omla').innerHTML = i;
                        document.getElementById('salesNot').innerHTML = i;

                    }

    });
    

});
    </script>
