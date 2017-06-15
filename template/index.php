<?php
session_start();
include('../conn.php');
if( isset($_SESSION['userid'])){
	echo "<script> window.location='index1.php'; </script>";
}
?>
<!DOCTYPE html>
<!--
++++++++++++++++++++++++++++++++++++++++++++++++++++++
AUTHOR : Vijayan PP
PROJECT :A-MD
VERSION : 1.1
++++++++++++++++++++++++++++++++++++++++++++++++++++++
-->
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
        <style>
		h1.hn{
			text-transform: capitalize;
			font-size:70px;
			
			
		}
		</style>
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
            <a class="navbar-brand" href="index.php"><img src="../images/logo.png" style="position: absolute; top: 17px; width: 6%;" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
		              <li><a href="#whylove" class="page-scroll">Login</a></li>
			<li><a href="#aboutus" class="page-scroll">About Us</a></li>
            <li><a href="#howwork" class="page-scroll">How it`s works</a></li>
			 <li><a href="#appscreen" class="page-scroll">General Books </a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
	  
	  		    <?php
			  if(isset($_GET['err']))
			  echo "<br/><center><h2>Invalid Login user name or password</h2></center>";
			  ?>

    </nav>


   <!-- [/NAV]
 ============================================================================================================================-->    
   
  <!-- [MAIN GALLERY ]
=============================================================================================================================-->
  <section class="main-gallery" id="home">

    <div class="overlay">
      <div class="container">
          <div class="row">
		  
              <div class="col-md-12 text-center">
			  
                 <h1 class="hn" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">Thank  you for visiting <br/> Exchanging Books site</h1>
				 <?php 
			  if(isset($_GET['suc'])){
				echo '<h6 style="text-transform: capitalize;" class="text-capitalize bigFont" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">Registration Successful. Thank you...</h6>';
			  }
			  
			  if(isset($_GET['up_pass'])){
				echo '<h6 style="text-transform: capitalize;" class="text-capitalize bigFont" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">Password changed, successfully.</h6>';
			  }
			    if(isset($_GET['up_pass_erorr'])){
				echo '<h6 style="text-transform: capitalize;" class="text-capitalize bigFont" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">but Registration failed ,user name or email you entered  not exits to update password try again!.</h6>';
			  }
			      if(isset($_GET['user_name_erorr'])){
				echo '<h6 style="text-transform: capitalize;" class="text-capitalize bigFont" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">but  Registration  is failed ,user name   is  already taken , try again!</h6>';
			  }
			      if(isset($_GET['email_erorr'])){
				echo '<h6 style="text-transform: capitalize;" class="text-capitalize bigFont" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s"> but Registration is  failed ,email  is  already taken ,try again!</h6>';
			  }
			      if(isset($_GET['emailusername_erorr'])){
				echo '<h6 style="text-transform: capitalize;" class="text-capitalize bigFont" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s"> but Registration is  failed , user name and email is already taken, try again!.</h6>';
			  }
			  
			  ?>
                <p class="intro" data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s"></p>
              </div>
          </div>
      </div>
    </div>
  </section>
  <!-- [/MAIN GALLERY]
=============================================================================================================================-->
  
 <section class="why-love theme_background_color" id="whylove">
     <div class="overlay">
   <div class="container">
            <div class="row text-center">
                <div class="WhyLove-heading text-left">
                    
                    <h2 class="sectionTitle">Login</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-8" style="  min-height: 200px; ">
                    <div class="WhyLove-icon-box text-right">
                        <form action="login.php" method="post" autocomplete="off">
						<div class="row form-group">
                          
                            <input type="test" name="email" placeholder="User Name" id="contact-email" class="form-control" autocomplete="off">
							<br/>
                          
                            <input type="password" name="password"  placeholder="Password" id="contact-email" class="form-control" autocomplete="off">
							<br/>
                          
                        </div>
                          
                        </div>

                       <span class="form-message" style="display: none;"></span>
					   <input type="submit" value="LOGIN"  CLASS="btn btn-style blue" style="float:left; margin-right:20px;"/>
					    <a href="forgetpassword.php" CLASS="btn btn-style blue" style="float:left; color:#fff; margin-right:20px;">Forget password?</a> 
					   <a href="registration.php" CLASS="btn btn-style blue" style="float:left; color:#fff; margin-right:20px;">SIGN UP</a> 
					   
						</form>
                    </div>
                </div>       
            </div>
        </div>  
     </div>
     
 </section>
 <!-- [/WHY YOU WILL LOVE]
=============================================================================================================================-->
   
 <!-- [CURRENT aboutus]
=============================================================================================================================-->
 <?php include('aboutus.php'); ?>
 
 <!-- [CURRENT aboutus]
=============================================================================================================================-->
 <!-- [HOW WORKS]
=============================================================================================================================-->
<?php include('howitwork.php'); ?> 
 <!-- [/HOW WORKS]
=============================================================================================================================-->
 
 <!-- [SCREEN SHOT]
=============================================================================================================================-->
<?php include('appscreen.php'); ?> 
 <!-- [/SCREEH SHOT]
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
        fullscreenslider();
    }
     );
    
 </script>


</html>