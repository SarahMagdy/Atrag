
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>

    </head>
    <body>

        <div class="container">
            <h2>monthly calculate salary</h2>
            <p>The .table-bordered class adds border on all sides of the table and cells:</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>fileName</th>
                        <th>action</th>
                    </tr>
                    <?php foreach ($files as $key => $value) { ?>

                    </thead>

                    <tbody>
                        <tr>
                            <td><?php echo $value ?></td>
                            <td><button type="button" class="upload getValue" data-product-id="<?php echo $value; ?>" id="parseFile" >parse file</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
<script>
    $('.getValue').click(function () {
//        alert('ok2');
//        console.log();
        /*var val = $(this).data('product-id');
        var _url = "uploadfile/parseFile";*/
//        $('.DataContent').html('<img class="LoadingImg" src="<?php echo $this->config->base_url(); ?>_/images/Loading.gif" />');
        var data={
            productid : $(this).data('product-id')  
        }
        $.post("<?php echo $this->config->base_url(); ?>uploadfile/parseFile",data,function(result){
         
        });
    });
</script>