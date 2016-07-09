<!DOCTYPE html>
 <?php echo validation_errors(); ?>

<html lang="ar">
    <head>
        <meta charset="utf-8" />
        <title>Atrag</title>
  <?php $this->load->view('Header'); ?>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    </head>
    <body class="indexBody">
	<div class="mask"></div>
	  <h2><span class="entypo-login"></span>أتراج</h2>
        <section class="DataSec">
            <div class="col-md-offset-5 col-md-3 loginBLock">
          <?php echo form_open('verifylogin'); ?>

  <button class="submit1" type="submit"><i class="fa fa-lock" aria-hidden="true"></i>
</button>
  <i class="fa fa-user" aria-hidden="true"></i>
  <input type="text" class="user" id="username" name="username" placeholder="إسم المستخدم"/>
<i class="fa fa-key" aria-hidden="true"></i>

  <input type="password" class="pass" id="passowrd" name="password" placeholder="كلمة المرور"/>
</form>
            </div>
        </section>
		<style>
		body.indexBody h2 {
    position: absolute;
    right: 41%;
    top: 12%;
    font-size: 137px;
    font-family: 'Conv_BFantezy' !important;
    color: #fff;
}
form {
    position: relative;
    margin: 358px -11px;
    width: 480px !important;
    height: auto;
    /* left: 0px !important; */
}
input {
    padding: 16px;
    border-radius: 7px;
    /* background: rgb(231, 76, 60); */
    display: block;
    background: rgba(53, 45, 49, 0.37) !important;
    border: 1px solid;
    margin: 15px;
    width: 346px;
    color: white;
    font-size: 18px;
    height: 54px;
}
input:focus {
    outline-color: rgba(0,0,0,0);
    background: rgba(53, 45, 49, 0.37);
    color: #fff;
    border: 1px solid #fff;
}




.cls


element.style {
}
button.submit1 {
    float: left;
    height: 121px;
    width: 50px;
    margin-top: 0px;
    border: 0px;
    background: #F58220;
    border-radius: 7px;
    padding: 10px;
    color: white;
    font-size: 22px;
    /* margin-right: 19px; */
    margin-left: 49px;
}
.inputUserIcon {
  position:absolute;
  top:68px;
  right: 80px;
  color:white;
}
*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box; 
}
.inputPassIcon {
  position:absolute;
  top:136px;
  right: 80px;
  color:white;
}

input::-webkit-input-placeholder {
  color: white;
}

input:focus::-webkit-input-placeholder {
  color: #e74c3c;
}
body.indexBody h2 {
    position: absolute;
    right: 41%;
    top: 12%;
    font-size: 169px;
    /* font-family: 'Conv_BFantezy' !important; */
    color: #fff;
    font-family: 'Conv_Diwanltr';
    text-shadow: 3px 3px #F58220;
}
.col-md-offset-5.col-md-3.loginBLock .fa {
    color: #F58220;
    position: absolute;
    margin-top: 16px;
    margin-right: 302px;
    font-size: 18px;
}
i.fa.fa-lock {
    position: absolute;
    font-size: 34px !important;
    color: #fff !important;
    bottom: 44px;
    left: 64px;
}
		</style>
        <!------------------------ Scripts ---------------------------->
  <?php $this->load->view('Scripts'); ?>
		<script>
		$(".user").focusin(function(){
  $(".inputUserIcon").css("color", "#e74c3c");
}).focusout(function(){
  $(".inputUserIcon").css("color", "white");
});

$(".pass").focusin(function(){
  $(".inputPassIcon").css("color", "#e74c3c");
}).focusout(function(){
  $(".inputPassIcon").css("color", "white");
});
		</script>
        <script>            
            $(document).ready(function (){                
                var validator = $("#loginform").validate({                    
                    errorPlacement: function (error, element)                    
                    { // Append error within linked label                        
                        $( element ).closest( "div" ).find( "label[for='" + element.attr( "name" ) + "']" ).append( error );},                    
                        errorElement: "span",                    
                        rules :{
                             user_name: "required",                       
                             password: "required"                   
                        },                    
                        messages: {                        
                            user_name: " من فضلك أدخل كلمة المستخدم",                        
                            password: " من فضلك أدخل كلمة المرور"                    
                        }                
                });            
          });       
          </script>
        <!------------------------ /Scripts --------------------------->
    </body>
</html>