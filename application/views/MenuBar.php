<div class="page-container">
    <div class="sidebar-menu">
        <header class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
            <a href="#">
                <img src="<?php echo $this->config->base_url(); ?>_/images/profile1.jpg" alt="profile" class="menuprofile">
                <?php
                if ($this->session->userdata('logged_in')) {
                    $session_data = $this->session->userdata('logged_in');
                    ?>   
                    <h4><?php echo $session_data['username']; ?> </h4>

                    <!--span id="logo" class="fa fa-html5 fa-5x"></span--> 
                  <!--<img id="logo" src="" alt="Logo"/>--> 
                </a> </header>
            <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
            <div class="menu">
                <ul id="menu" >
                    <li id="menu-home" ><a href="<?php echo $this->config->base_url(); ?>employee"><i class="fa fa-home"></i><span>الصفحة الرئيسية</span></a>
                    </li>
                    <?php if ($session_data['type_id'] == '4') { ?>
                        <li id="menu-comunicacao" >
                            <a href="<?php echo $this->config->base_url(); ?>employee/Inbox">
                                <?php $pp = $this->PermissionModel->countRequest(); ?>
                                <div id="not"class="mails"><?php echo $pp; ?></div>الرسائل الواردة
                                                                <i class="fa fa-envelope"></i><span class="mail"></span>

                            <?php } else {
                                ?>
                                <li id="menu-comunicacao" >
                                    <a href="<?php echo $this->config->base_url(); ?>employee/employeeInbox">
                                        <i class="fa fa-envelope"></i><span class="mail"></span>                         
                                        <?php $employyy = $this->PermissionModel->countemployeeRequest($session_data['id']); ?>
                                        <div id="empnot" class="mails"><?php echo $employyy; ?></div> الرسائل الواردة

                                    <?php } ?>

                            </li>
                            <?php if ($session_data['type_id'] == '4') { ?>
                                <li id="menu-academico" ><a href="#"><i class="fa fa-users" aria-hidden="true"></i><span>الموظفين</span></a>
                                    <ul id="menu-academico-sub" >

                                        <li id="menu-academico-avaliacoes" ><a href="<?php echo $this->config->base_url(); ?>employee/addEmplyee">
                                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                                إضافة موظف</a>
                                        </li>

                                        <li id="menu-academico-avaliacoes" ><a href="<?php echo $this->config->base_url(); ?>employee/ShowEmployee"><i class="fa fa-tasks" aria-hidden="true"></i>
                                                بيانات الموظفين</a>
                                        </li>

                                    </ul>
                                </li>
                            <?php } ?>
                            <?php if ($session_data['type_id'] == '4') { ?>
                                <li><a href="#"><i class="fa fa-share-alt"></i><span>الخزنة</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo $this->config->base_url(); ?>employee/cash"><i class="fa fa-reply" aria-hidden="true"></i>إذن صرف او أذن توريد</a>
                                        </li>
                                        <!--  <li>
                                                             <a href="#"><i class="fa fa-share" aria-hidden="true"></i>إذن توريد</a>
                                                     </li> -->
                                        <li id="menu-academico-avaliacoes" ><a href="<?php echo $this->config->base_url(); ?>employee/Discounts">
                                                <i class="fa fa-percent" aria-hidden="true"></i>
                                                خصومات</a>
                                        </li>
                                        <li id="menu-academico-avaliacoes" ><a href="<?php echo $this->config->base_url(); ?>employee/Commission"><i class="fa fa-tasks" aria-hidden="true"></i>
                                                علاوات</a></li>
                                    </ul>
                                </li>
                            <?php } ?>
                                                                    <?php if ($session_data['type_id'] == '1') { ?>

                                
                                <li id="menu-home" ><a href="<?php echo $this->config->base_url(); ?>requests/salesMangerRequest">
                                        <i class="fa fa-home"></i>
                                        <div class="mail">
                                        <span>طلبات مدير المبيعات<?php 
                                        foreach ($this->session->userdata('count') as $row){
                                            echo($row);
                                        }?>
                                        
                                        </span></a>
                                    </div>
                    </li>
                                                                    <?php }?>
                            <li><a href="#"><i class="fa fa-share-alt"></i><span>طلبات العملاء</span>
                                    <div id="omla" class="mails"><?php
                                        if ($session_data['type_id'] == '4') {
                                            $dd = $this->DealsModel->countsalesManger();
                                            echo $dd;
                                        } elseif ($session_data['type_id'] == '3') {
                                            $ss = $this->DealsModel->countsalesMangerRequest();

                                            echo $ss;
                                        } elseif ($session_data['type_id'] == '1') {
                                            $ff = $this->DealsModel->countemployeeDeal($session_data['id']);
                                            echo $ff;
                                        }
                                        ?></div></a>
                                <ul>
                                    <?php if ($session_data['type_id'] == '2') { ?>
                                    <li><a href="<?php echo $this->config->base_url(); ?>employee/offersform"><i class="fa fa-reply" aria-hidden="true"></i>عروض </a></li>
                                    <li><a href="<?php echo $this->config->base_url(); ?>employee/demandsform"><i class="fa fa-reply" aria-hidden="true"></i>طلبات </a></li>
                                        
                                        <?php }?>
                                 
                                    
                                    <?php if ($session_data['type_id'] == '1') { ?>

                                        <li><a href="<?php echo $this->config->base_url(); ?>employee/deal"><i class="fa fa-share" aria-hidden="true"></i>طلبات الصفقات</a></li>
                                        <li><a href="<?php echo $this->config->base_url(); ?>dealsController/dealResponse"><i class="fa fa-share" aria-hidden="true"></i>الرد علي طلبات الصفقات

                                                <div id="salesNot" class="mails">

                                                    <?php $sal = $this->DealsModel->countemployeeDeal($session_data['id']); ?><?php echo $sal; ?>
                                                </div>
                                            </a></li>

                                    <?php } else if ($session_data['type_id'] == '3' || $session_data['type_id'] == '4') { ?>
                                        <li><a href="<?php echo $this->config->base_url(); ?>dealsController/acceptDeal"><i class="fa fa-share" aria-hidden="true"></i>الموافقه علي طلبات الصفقات
                                                <div id="omla2" class="mails"><?php
                                                    if ($session_data['type_id'] == '4') {
                                                        $dd = $this->DealsModel->countsalesManger();
                                                        echo $dd;
                                                    } elseif ($session_data['type_id'] == '3') {
                                                        $ss = $this->DealsModel->countsalesMangerRequest();

                                                        echo $ss;
                                                    };
                                                    ?></div></a></li>
                                    <?php } ?>

                                </ul>
                            </li>
                            <?php if ($session_data['type_id'] == '1' || $session_data['type_id'] == '2' || $session_data['type_id'] == '3') { ?>

                                <li><a href="<?php echo $this->config->base_url(); ?>employee/Request"><i class="fa fa-list-ul" aria-hidden="true"></i><span>اذن شخصي</span></a></li>
                            <?php } ?>
                    </li>



                    
                    <?php if( $session_data['type_id'] == '3'){?>
                    <li>
                        <a href="<?php echo $this->config->base_url(); ?>employee/loadwork"><i class="fa fa-sitemap" aria-hidden="true"></i><span>توزيع الطلبات</span></a>
                    </li>
                    <?php }?>
                    <?php if ($session_data['type_id'] == '1' || $session_data['type_id'] == '2' || $session_data['type_id'] == '3') { ?>

                        <li>
                            <a href="#"><i class="fa fa-eyedropper" aria-hidden="true"></i>
                                <span>طلب إذن </span></a>
                        </li>
                        <?php } ?>
                        <?php //print_r($session_data);?>
                        <?php if ($session_data['type_id']=='4'){?>
                        <li>
                            <a href="<?php echo $this->config->base_url(); ?>employee/pendingRequestsSales"><i class="fa fa-eyedropper" aria-hidden="true"></i>
                                <span>الطلبات المعلقه </span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-eyedropper" aria-hidden="true"></i>
                                <span>الطلبات الجاريه </span></a>
                        </li>
                     <?php } ?>
                        
                </ul>
            </div>
        </div>
    </div>
<?php } ?>
