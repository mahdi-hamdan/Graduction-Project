<?php
session_start();
include('../conn.php');
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];echo $id;
    $sql = "SELECT * from  `course_content_software` where book_id=".$id;
    $result = mysql_query($sql);
    //$row_info_book = mysql_fetch_array($result);  
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
		fieldset{
			margin-top:20px;

			
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
            <li><a href="index1.php#home" class="page-scroll">Home</a></li>
			<li><a href="index1.php#aboutus" class="page-scroll">About Us</a></li>
            <li><a href="index1.php#howwork" class="page-scroll">How it work's</a></li>
					     <li><a href="index1.php#appscreen" class="page-scroll">General Books </a></li>
			<li><a href="dept.php" class="page-scroll" target="_self" >Department</a></li>
			<li><a href="uploaded_books.php" class="page-scroll" target="_self" >Uploaded Books</a></li>
			<li><a href="suggestiont_books.php" class="page-scroll" target="_self" >Suggestion Books</a></li>
			<li><a href="profile.php" class="page-scroll">Profile</a></li>
            <li><a href="logout.php" class="page-scroll">Logout</a></li>
            <li><a href="#contact" class="page-scroll" id="contacts">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

	
<!-- [ Add new Commnets  ]
=============================================================================================================================--> 

	<section class="" id="home" style="min-height:670px; background:#666">
    <div class="overlay" style="background:none">
      <div class="container">
		  <div class="row text-center">
                <div class="how-it-works-heading">
                    <h2 class="sectionTitle">Add Comments</h2>
                </div>
            </div>			
			<form  action="add_comments.php" method="post">
				<fieldset>
			                                <div class="form-group">
												<label></label><label></label> <pre></pre>
												<input type="hidden" value="<?php echo $_GET['id']; ?>" name="book_id" id="book_id">
												<textarea class="form-control" rows="5" cols="40" required="required" id="comment" name="comment"></textarea>
											</div>
											<input type="submit" class="btn btn-primary" value="Comment" style="float: center ; margin-right:20px;"></input>
				</fieldset>

			</form> 
				</div>
				
				
<!-- [ /Add new Commnets  ]
=============================================================================================================================--> 

				<section class="contactus" id="contact">
     <div class="container">
         <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="testimonial-area-heading">
                        <h2 class="grey">CONTACT </h2>
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
	<script src="library/jquery-1.11.3.min.js"></script>
        <script src="library/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <!-- [ PLUGIN SCRIPT ] -->
        
	<script src="js/scrollreveal.js"></script>
       	 <!-- [ COMMON SCRIPT ] -->
	<script src="js/common.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/html-table-search.js"></script>
<script type="text/javascript">
			$(document).ready(function(){
			$('#content_type').hide();	
			$('table.datatable').tableSearch({
					searchText:' ',
					searchPlaceHolder:'Search...'
				});
			});
				/*
			 $('#submitbtn').click(function(){
			 //if(($('#cname').val()!='') && ($('#dept1').val()!='') && ($('#sub_id').val()!='') &&($('#info').val()!='') ){
			    
				//}
			 });*/
			 
			 
			 $("#form1").submit(function(e) {
				var self = this;
				e.preventDefault();
				if ($('#software').is(':checked')) {
									if ($('input:radio:checked').length) {
										//$('#form1').submit();
										self.submit();
									}else{
									alert('You must select software type.');
									}
								}else{
									if ($('#hardware').is(':checked')) {
										//$('#form1').submit();
										self.submit();
									}else{
										//if(($('#cname').val()!='') && ($('#dept1').val()!='') && ($('#sub_id').val()!='') &&($('#info').val()!='') ){
										alert("You must select book type ('Softcopy or Hardcopy')");
										return false;
										//}
									}
								}
				//return false; //is superfluous, but I put it here as a fallback
		});

			 
			$('#software').click(function(){	
			 if ($('#software').is(':checked')) {
			     $("#uploaded").prop('required',true);

				$('#content_type').show();
			 }else{
			   $('#content_type').hide();
			   $("#uploaded").prop('required',false);
			 }
			 });
			 
        function get_dept_subject()
        { 
		    var id = $("#dept1").val();
            $.ajax({
                     url: 'dept_subject.php',
                     type: 'post',
                     data: {'id': id },
                     success: function(data) {  
//alert(data);					 
                        $('#sub_id').html(data);
                     },
                     error: function(xhr, desc, err) {
                       console.log(xhr);
                       console.log("Details: " + desc + "\nError:" + err);
                     }
                   }); // end ajax call   
                  return false;
        }
		
		
		</script>
  
</body>

</html>

