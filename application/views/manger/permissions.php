<!DOCTYPE html>
<?php echo validation_errors(); ?>

<html lang="en">
    <head>
        <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen"
              href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>مواعيد العمل</title>
        <?php $this->load->view('Header'); ?>
    </head>
    <body>


        <!--------------------------------------------------------------menubar---------------------------------------------------------------->
        <div class="menubar">
            <div class="row">
                <div class="col-md-2 col-md-offset-10 ">
                    <?php $this->load->view('MenuBar'); ?>
                </div>
                <?php
                if ($this->session->userdata('logged_in')) {
                    $session_data = $this->session->userdata('logged_in');
                    ?>
                    <form action="<?php echo $this->config->base_url(); ?>employee/tookpermission" method="post" class="row" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $session_data['id']; ?>"
<?php } ?>
                           <div class=" col-md-5 col-md-offset-5 personal">
                        <div class="form-group formLayout">
                            <label for="timeFrom" class="control-label " > تاريخ الاذن من: </label>

                            <div id="timeFrom" class="input-append date">
                                <input type="text" name="from"></input>
                                <span class="add-on">
                                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group formLayout">
                            <label for="timeto" class="control-label " > تاريخ الاذن الي: </label>

                            <div id="timeto"Sclass="input-append date">
                                <input type="text"  name="to" ></input>
                                <span class="add-on">
                                    <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                </span>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-default" id="addemployee">تأكيد</button>
                </form>
            </div>
        </div>


        <!--------------------------------------------------------------/menubar---------------------------------------------------------------->


        <script type="text/javascript"
                src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
        </script> 
        <script type="text/javascript"
                src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
        </script>
        <script type="text/javascript"
                src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
        </script>
        <script type="text/javascript"
                src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
        </script>

        <script type="text/javascript">
            $('#timeFrom').datetimepicker({
                format: 'yyyy-MM-dd hh:mm:ss',
                language: 'pt-BR',
                

            });
            $('#timeto').datetimepicker({
                format: 'yyyy-MM-dd hh:mm:ss',
                language: 'pt-BR',
                minDate: 0

            });
        </script>
<?php $this->load->view('Scripts'); ?>

    </body>
</html>
