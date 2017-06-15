<?php
session_start();
include('../conn.php');

if(! isset($_SESSION['userid'])){
	echo "<script> window.location='index.php'; </script>";
}
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
        
<style>
.nav-tabs > li a {

    width: auto;
    height: auto;
    margin: auto;
    border-radius: 4px;
    border: none;
    padding: 10px;
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
		  		  <div class="row text-center">
<?php
	  if(isset($_GET['sucess_up'])){
				echo '<p style="text-transform: capitalize;" class="text-capitalize bigFont" "> Successful update. Thank you...</p><br/>';
			  }
			  



?>
				  </div>
		  <div class="row text-center">
                <div class="how-it-works-heading">
                    <h2 class="sectionTitle">Profile</h2><br/><hr/><br/>
                </div>
            </div>
				<b>
					<p id="name_val">
	
				</p>
					<p id="email_val">
	
				</p>
					
					<p id="username">
</p>
					<p id="pass">
	
				</p>
			</b>
			
			
			
			
			
			<form action="update_profile.php" method="post" id="updateprofile">
              <div class="col-md-4 col-sm-4">
                    <p>User Name: <br/><input style="color:#000; width:100%; padding:10px;" type="text" value="<?php echo $_SESSION["username"]; ?>" name="name_user"  id="name_user" /></p><br/>
					<p>Full Name: <br/><input style="color:#000; width:100%; padding:10px;" type="text" value="<?php echo $_SESSION["name"]; ?>" name="full_name" id="full_name"  /></p><br/>
					<p>Email: <br/><input type="email" style="color:#000; width:100%; padding:10px;" value="<?php echo $_SESSION["email"]; ?>" name="email_user" id="email_user" /></p>  <br/>
					<p>password: <br/><input type="password" style="color:#000; width:100%; padding:10px;" value="<?php echo $_SESSION["password"]; ?>" name="pass_word" id="pass_word"  /></p>  <br/>
					<p>Information: <br/><textarea name="info" style="color:#000; width:100%; padding:10px;"><?php echo $_SESSION["info"]; ?></textarea></p>
                </div>
				<h2>Messages</h2><br/><hr/><br/>
				 <div class="col-md-8 col-sm-8" style="border: 1px solid #999; padding: 10px;border-radius: 3px;box-shadow: 0px 0px 10px inset; min-height: 393px; overflow: scroll; overflow-x: hidden; max-height: 393px; background: #006400;">
				 
				 	<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#Inbox">Inbox</a></li>
  <li><a data-toggle="tab" href="#menu1">Sent box</a></li>
</ul>

<div class="tab-content">
  <div id="Inbox" class="tab-pane fade in active">
    <?php
				 // inbox
				 $query = "select * from messages where id_to = ".$_SESSION["userid"]." ORDER BY `id` desc";
				 $result=mysql_query($query);
				 $num=mysql_num_rows($result);
				 echo "<ul>";
				 for($i=0;$i<$num;$i++)
				{  $k=$i+1;
					$row=mysql_fetch_array($result);
					if(($i%2)==0)
					$class = 'evenclass';
					else
					$class = 'oddclass';
					echo "<li class='$class'><a href='viewmsg.php?id=".$row['id']."'>Massege :".$k."(".$row['subject'].")</a><br/></li>";
				}
				
				echo "</ul>";
				?>
				
  </div>
  <div id="menu1" class="tab-pane fade">
    <?php
				 // outbox
				 $query_1 = "select * from messages where id_from = ".$_SESSION["userid"]." ORDER BY `id` desc";
				 
				 $result1=mysql_query($query_1);
				 $num1=mysql_num_rows($result1);
				 echo "<ul>";
				 for($i=0;$i<$num1;$i++)
				{ $k=$i+1;
					$row=mysql_fetch_array($result1);
					if(($i%2)==0)
					$class = 'evenclass';
					else
					$class = 'oddclass';
					echo "<li class='$class'><a href='viewmsg.php?id=".$row['id']."'>Massege :".$k."(".$row['subject'].")</a><br/></li>";
				}
				echo "</ul>";
				 ?>
  </div>
</div>



				 
				 
				 </div>
				 
				 
				 
                <div class="col-md-12 col-sm-12"><br/>
				<input type="button" value="Update"  CLASS="btn btn-style blue" style="float:left; margin-right:20px;"/>
				
			</div>
			
				</form>
			
          </div>
      </div>
    </div>
      
  </section>
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
document.getElementById("name_val").innerHTML="";
document.getElementById("email_val").innerHTML="";
document.getElementById("username").innerHTML="";
document.getElementById("pass").innerHTML="";

	   var na = $('#full_name').val();
	   var em = $('#email_user').val();
	   var uname = $('#name_user').val();
	   var pswd = $('#pass_word').val();
	   d1= na.split(" ");
	   ns= d1.length;
d2=em.split(" ");
	     var re1 = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	  var errors_found = 0;
		//validate the length
		
		if(uname.length==0){
			document.getElementById("username").innerHTML=" Username must be filled ";
					errors_found = 1;

} else if ( ! /^[0-9a-zA-Z_.\-]+$/.test(uname)){
	
		document.getElementById("username").innerHTML=" Invalid Username  ";
					errors_found = 1;
	
} else if(na.length == 0){
						document.getElementById("name_val").innerHTML="FullName must be filled";
			errors_found = 1;
		} 
		
		else if (ns!=2){
			document.getElementById("name_val").innerHTML=" FullName must be of tow parts ";
				errors_found = 1;
}  
else if ( ! /^[A-Za-z ]+$/.test(na)){
			document.getElementById("name_val").innerHTML="Invalid FullName ";
				errors_found = 1;
}

else if (em.length==0){
			document.getElementById("email_val").innerHTML="Email  must be filled";
				errors_found = 1;

	
	
}	else if (!re1.test(em)){
		document.getElementById("email_val").innerHTML="Invalid email ";
					errors_found = 1;

}
else if (pswd.length==0){
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
				if(errors_found ==0){
			$('#updateprofile').submit();
		}	
 }
	   );
	   		
		

    }
     );
   
    
 </script>

</html>