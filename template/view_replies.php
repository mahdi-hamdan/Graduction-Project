<?php
session_start();
include('../conn.php');
$id = 0;
$result = '';
if(isset($_GET['idd']))
{
    $id = $_GET['idd'];
	
    $sqlw = "SELECT * from  `replies` where message_id=".$id;
    $result = mysql_query($sqlw); 
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
            <li><a href="index1.php#home" class="page-scroll">Home</a></li>
			<li><a href="index1.php#aboutus" class="page-scroll">About Us</a></li>
            <li><a href="index1.php#howwork" class="page-scroll">How it work's</a></li>
					     <li><a href="index1.php#appscreen" class="page-scroll">General Books </a></li>
			<li><a href="dept.php" class="page-scroll" target="_self">Department</a></li>
			<li><a href="uploaded_books.php" class="page-scroll" target="_self">Uploaded Books</a></li>
			<li><a href="suggestiont_books.php" class="page-scroll" target="_self">Suggestion Books</a></li>
			<li><a href="profile.php" class="page-scroll">Profile</a></li>
            <li><a href="logout.php" class="page-scroll">Logout</a></li>
            <li><a href="#contact" class="page-scroll" id="contacts">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


   <!-- [/NAV]
 ============================================================================================================================-->    
  
  <!-- [MAIN GALLERY ]
=============================================================================================================================-->
  <section class="" id="home" style="min-height:670px; background:#666">
    <div class="overlay" style="background:none">
      <div class="container">
          <div class="row">
		  <?php
					if(isset($_GET['replay_send'])){
					 echo '<h3>* Your replay has been insert successfully .</h3>';
					 }
					?>
		  <div class="row text-center">
                <div class="how-it-works-heading">
                    <h2 class="sectionTitle">Replies</h2><br/>
					<br/>
					<hr/><br/>
					
                </div>
            </div>
              <div class="col-md-12 col-sm-12" style='overflow: scroll;max-height: 300px; overflow-x: hidden;'>
					<?php
					
					
					
					$num = 0;
					if($result!='')
					$num=mysql_num_rows($result);
					if($num==0)
					echo 'Not replies found';
				else{
					
					
					for($i=1;$i<=$num;$i++)
					{
				 $row=mysql_fetch_array($result);
					$class='';
					   if(($i%2)==0)
					   $class = 'evenclass';
					   else
					   $class = 'oddclass';
					   						$sql3 = 'select * from user where id = '.$row['written_by_id'];
                                            $result3 = mysql_query($sql3);
						                    $row3=mysql_fetch_array($result3);
					   if($_SESSION["userid"]==$row['fromuser_id'] || $_SESSION["userid"]==$row['touser_id'] ){
					
						echo "<p class='$class' style='color:#000;'><b>By ".$row3['full_name'].":</b>  ".$row['text_replay']."<br/><b>At:</b>  ".$row['cdate']."</p>";
						
					   }
					}}
				?>
                </div>
          </div>
      </div>
    </div>
      
  </section>
  
  
  <!-- [/MAIN GALLERY]
=============================================================================================================================-->  
   

 <!-- [SUBSCRIBE]
=============================================================================================================================-->
 <section class="contactus" id="contact">
     <div class="container">
         <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="testimonial-area-heading">
                        <h2 class="grey">CONTACT US</h2>
                    </div>
                </div>
            </div>
         <div class="gap"></div>
     <div class="row">
                    <!-- /contact info -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <!-- contact form -->
                      <?php include('contactus.php'); ?>
                      <!-- /contact form -->
                    </div>
                  </div>
     </div>
				  
 </section>
 <!--  [CONTACT INFO ENDS ]-->
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
        fullscreenslider();
    }
     );
    
 </script>


</html>