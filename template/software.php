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
            <a class="navbar-brand" href="index.php"><img src="../images/logo.png" style="position: relative; top: 17px; width: 40%;" /></a>
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
		  <div class="row text-center">
                <div class="how-it-works-heading">
                    <h2 class="sectionTitle">Book Software</h2>
						<a href="#add_new_book" class="page-scroll" style="width: 260px;margin-right: 34px; float: right;background:rgb(92, 184, 92); color: #fff; border-radius: 3px;     box-shadow: 0px 1px 2px rgb(92, 184, 92);    padding: 10px;">Add New Software</a><br/><hr/><br/>
                </div>
            </div>
              <div class="col-md-6 col-sm-6">
				<?php
					$num=mysql_num_rows($result);
					echo "<ol>";
					for($i=1;$i<=$num;$i++)
					{
						$row=mysql_fetch_array($result);
						$link_title = explode("/", $row['link']);
						
						if(count($link_title)>2)
						$link_title = $link_title[2];
						else
						$link_title = $link_title[1];
						echo "<li><a style='color:#fff; ' target='_blank' download  href='../uploads/ ".$row['link']."'>".$link_title."</a> <span style='font-style: italic;'>(".$row['type'].")</span></li>";
					}
					echo "</ol>";
				?>
                </div>
          </div>
      </div>
    </div>
      
  </section>
  
  
 
 
<!--  
=============================================================================================================================-->
  <section class="why-love theme_background_color" id="add_new_book" >
    <div class="overlay" >
      <div class="container">
          <div class="row">
		  <div class="row text-center">
                <div class="how-it-works-heading"><br/>
                    <h2 class="sectionTitle">Add New Software</h2><br/><hr/><br/>
                </div>
            </div>
              <div class="col-md-12 col-sm-12">
			  <?php
			  if(isset($_GET['added_book']))
			  echo "<h2>Operation Succeded.</h2>";
			  ?>
						<form  action="ins_new_sofware.php" method="post" id="form2" enctype="multipart/form-data">
									<input type="hidden" name="bookid" value="<?php echo $_GET['id']; ?>" />
											<div class="form-group">
											<input type="file" name="uploaded" id="uploaded" required="required">
											</div>
											<div class="form-group">
											<input type="checkbox" id="software" name="software" value="1" required="required"> Software<br/>
											<div id="content_type" style="padding-left:20px;">
											  <input type="radio" name="contenttype" value="Book"> Book<br>
											  <input type="radio" name="contenttype" value="Slide"> Slide<br>
											  <input type="radio" name="contenttype" value="Menual Solutions"> Menual Solutions<br>
											  <input type="radio" name="contenttype" value="other"> Other
											</div>
											
											</div>
											
			     			<input type="submit"  class="btn btn-style blue" value="Add"></input>
					  		</form>
                </div>

          </div>
      </div>
    </div>
      
  </section>
  
  
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
		$('#content_type').hide();	

			 /*$('#submitbtn').click(function(){
			    if ($('#software').is(':checked')) {
					if ($('input:radio:checked').length) {
						$('#form2').submit();
					}else{
					alert('You must select software type.');
					}
				}else{
					$('#form2').submit();
				}
			 });
			*/
			
			$('#software').click(function(){	
			 if ($('#software').is(':checked')) {
			 
				$('#content_type').show();
			 }else{
			   $('#content_type').hide();
			 }
			 });	


$("#form2").submit(function(e) {
var self = this;
e.preventDefault();
if ($('#software').is(':checked')) {
	if ($('input:radio:checked').length) {
			self.submit();
			}else{
				alert('You must select software type.');
				}
	}else{
		self.submit();
									
		}
		});
		
    }
     );
    
 </script>


</html>