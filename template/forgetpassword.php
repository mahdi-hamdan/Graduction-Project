<?php
include('../conn.php');

?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>:: Books ::</title>
	
	<!-- [ FONT-AWESOME ICON ] 
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

	<!-- [ PLUGIN STYLESHEET ]
        =========================================================================================================================-->
	<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
        <link rel ="stylesheet" type="text/css" href="library/vegas/vegas.min.css">
	<!-- [ Boot STYLESHEET ]
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
        
        <!-- [ DEFAULT STYLESHEET ] 
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/color/green.css">
        
</head>
<body >
<!-- [ LOADERs ]
================================================================================================================================-->	
    <div class="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- [ /PRELOADER ]
=============================================================================================================================-->
<!-- [WRAPPER ]
=============================================================================================================================-->
<div class="wrapper">
    
 <!-- [NAV]
 ============================================================================================================================-->    
   <!-- Navigation
    ==========================================-->
    <nav  class="amd-menu navbar navbar-default navbar-fixed-top theme_background_color fadeInDown">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index1.php"><img src="../images/logo.png" style="position: absolute; top: 17px; width: 6%;" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" class="page-scroll">Home</a></li>
            <li><a href="index.php#whylove" class="page-scroll">Login</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


   <!-- [/NAV]
 ============================================================================================================================-->    
    
    
    
    
    
 <section class="why-love theme_background_color" id="whylove">
     <div class="overlay">
   <div class="container">
            <div class="row text-center">
                <div class="WhyLove-heading text-center">
<br/><br/><br/><br/>                    
                    <h2 class="sectionTitle">Forget Password</h2>
                </div>
				<b> 
				<p id="pass"> </p>
				<p id="username"> </p>
                <p id="email_val"> </p>

				</b>
            </div>
			
            <div class="row">
                
                <div class="col-md-12 col-sm-12 col-xs-12" style="  min-height: 200px;">
                    <div class="WhyLove-icon-box text-center">
                       <form action="update_forgetpassword.php" method="post" id="reg">
					   <br/>
						<input type="text" id="user_name" autocomplete="off" name="user_name" placeholder="User Name"  required style="outline: 0px; border: 0px;background: rgba(221, 221, 221, 0.35);padding: 5px;border-radius: 5px; width: 45%;  margin-bottom:15px;"/><br/>
						<input type="email" id="email" autocomplete="off" name="email" placeholder="Email"  required style="outline: 0px; border: 0px;background: rgba(221, 221, 221, 0.35);padding: 5px;border-radius: 5px; width: 45%;  margin-bottom:15px;"/><br/>
									
						<input type="password" id="password" autocomplete="off" name="password" maxlength="20" placeholder=" New Password" required style="outline: 0px; border: 0px;background: rgba(221, 221, 221, 0.35);padding: 5px;border-radius: 5px; width: 45%;  margin-right:0px; margin-bottom:15px;"/><br/>
						<input type="password" id="repassword"autocomplete="off"  name="repassword" maxlength="20" placeholder="Re-Password" required style="outline: 0px; border: 0px;background: rgba(221, 221, 221, 0.35);padding: 5px;border-radius: 5px; width: 45%;  margin-right:0px; margin-bottom:15px;"/>
						<br/><br/>
						<input type="button" value="Send" class="btn btn-style blue"/>
						</form>
                    </div>
                </div>
				
               
            </div>
        </div>  
     
     </div>
     
 </section>

 <!-- [/SUBSCRIBE]
=============================================================================================================================-->
 <!-- [FOOTER]
=============================================================================================================================-->
 <?php include('footer.php'); ?>
 <!-- [/FOOTER]
=============================================================================================================================-->
 
</div>
 

<!-- [ /WRAPPER ]
=============================================================================================================================-->

	<!-- [ DEFAULT SCRIPT ] -->
	<script src="library/modernizr.custom.97074.js"></script>
	<script src="library/jquery-1.11.3.min.js"></script>
        <script src="library/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script src="library/vegas/vegas.min.js"></script>
	<!-- [ PLUGIN SCRIPT ] -->
        
	<script src="js/plugins.js"></script>
        <script src="js/fappear.js"></script>
       <script src="js/jquery.countTo.js"></script>
	<script src="js/scrollreveal.js"></script>
       	 <!-- [ COMMON SCRIPT ] -->
	<script src="js/common.js"></script>
  
</body>
<script type="text/javascript">
    $(document).ready(function()
    {

        //fullscreenslider();
       $(".btn").click(function(){
		   	   
document.getElementById("email_val").innerHTML="";
document.getElementById("username").innerHTML="";
document.getElementById("pass").innerHTML="";
		   
		   
	   var pswd = $('#password').val();  
 var em = $('#email').val();
 var uname = $('#user_name').val();
var repswd = $('#repassword').val();
	   var errors_found = 0;
	   	     var re1 = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		//validate the length
		
		
if(uname.length==0){
			document.getElementById("username").innerHTML=" Username must be filled ";
					errors_found = 1;
	
} else if ( ! /^[0-9a-zA-Z_.\-]+$/.test(uname)){
	
		document.getElementById("username").innerHTML=" Invalid Username  ";
					errors_found = 1;
	
} else if (em.length==0){
			document.getElementById("email_val").innerHTML="Email  must be filled";
				errors_found = 1;

	
	
}	else if (!re1.test(em)){
		document.getElementById("email_val").innerHTML="Invalid email ";
					errors_found = 1;

}else if (pswd.length==0){
		document.getElementById("pass").innerHTML="Password Must be filled";
			errors_found = 1;
	
}
else if (pswd.length < 8 ) {
			document.getElementById("pass").innerHTML="Password Must be at least 8 letters";
			errors_found = 1;
		}
else if (!pswd.match(/[0-9]/) ) {
			document.getElementById("pass").innerHTML="Password Must contain numbers";
					errors_found = 1;
				}		
else if (! pswd.match(/[A-Z]/)) {
			document.getElementById("pass").innerHTML="Password Must contain capital letters";
			errors_found = 1;
			}
		else if ($('#password').val()!=$('#repassword').val()) 
						{
							document.getElementById("pass").innerHTML="Password and Confirmation Password not match.";
							errors_found = 1;
						}
		if(errors_found == 0){
			$('#reg').submit();
		}
	   });
	   		
		

    });
    
 </script>


</html>