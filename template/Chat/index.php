<?php

 session_start();

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
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>:: Books ::</title>
	<!-- [ FONT-AWESOME ICON ] 
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="../library/font-awesome-4.3.0/css/font-awesome.min.css">
	<!-- [ PLUGIN STYLESHEET ]
        =========================================================================================================================-->
	<link rel="shortcut icon" type="image/x-icon" href="../images/icon.png">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/magnific-popup.css">
        <link rel ="stylesheet" type="text/css" href="../library/vegas/vegas.min.css">
	<!-- [ Boot STYLESHEET ]
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="../library/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../library/bootstrap/css/bootstrap.css">
        
        <!-- [ DEFAULT STYLESHEET ] 
        =========================================================================================================================-->
		<link rel="stylesheet" href="style.css" type="text/css" />
	    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="chat.js"></script>
	<script type="text/javascript">
    '<?=$_SESSION["name"]; ?>'
        // ask user for name with popup prompt    
		alert("Your chat name: "+'<?=$_SESSION["name"]; ?>');
        var name = '<?php $_SESSION["name"]; ?>';//prompt("Enter your chat name:", '<?php $_SESSION["name"]; ?>');
        // default name is 'Guest'
    	if (!name || name === ' ') {
    	   name = '<?=$_SESSION["name"]; ?>';	
    	}
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    			  }
             });
			 
			 $('#sendbtn').click(
				function(){
				
					var text = $('#sendie').val();
    				var maxLength = $('#sendie').attr("maxlength");  
                    var length = text.length; 
					
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $('#sendie').val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
				}
			 );
            
    	});
    </script>

</head>
<body onload="setInterval('chat.update()', 1000)">

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
            <a class="navbar-brand" href="../index1.php"><img src="../../images/logo.png" style="position: absolute; top: 17px; width: 6%;" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../index1.php#home" class="page-scroll">Home</a></li>
			<li><a href="../index1.php#aboutus" class="page-scroll">About Us</a></li>
            <li><a href="../index1.php#howwork" class="page-scroll">How it work's</a></li>
					     <li><a href="../index1.php#appscreen" class="page-scroll">General Books </a></li>
			<li><a href="../dept.php" class="page-scroll" target="_self" >Department</a></li>
			<li><a href="../uploaded_books.php" class="page-scroll" target="_self">Uploaded Books</a></li>
			<li><a href="../suggestiont_books.php" class="page-scroll" target="_self">Suggestion Books</a></li>
			<li><a href="../profile.php" class="page-scroll">Profile</a></li>
            <li><a href="../logout.php" class="page-scroll">Logout</a></li>
            <li><a href="../index1.php#contact" class="page-scroll" id="contacts">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


    <div id="page-wrap">
    
       
        <p id="name-area"></p>
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <form id="send-message-area">
            <p>Your message: </p>
            <textarea id="sendie" maxlength = '100' ></textarea><br/>
			<input type='button' id='sendbtn' value='Send' style='float: right; width: 72%;margin-top: 10px;'/>
        </form>
    
    </div>
</div>
 </body>

</html>