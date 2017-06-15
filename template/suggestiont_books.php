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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
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
	   <link rel="stylesheet" href="css/table_layout.css" />

        
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
  
  <section class="" id="home" style="min-height:670px; ">
    <div class="overlay" style="background:none">
      <div class="container">
          <div class="row">
		  <div class="row text-center">
                <div class="how-it-works-heading">
                    <h2 class="sectionTitle">Suggestions Books List</h2><br/><hr/><br/>
                </div>
            </div>
              <div class="col-md-12 col-sm-12">

<?php
  $sql = "SELECT * FROM book where type=4";
  $result=mysql_query($sql);
  $num=mysql_num_rows($result);
echo"
<table class='datatable'> <thead>
<tr><th>Title</th>
<th>Course Name</th>
<th>Department</th>
<th>Information</th>
<th>&#160; &#160; suggestion by &#160; &#160;  </th>

</tr>
</thead>
";
for($i=0;$i<$num;$i++)
{
  $row=mysql_fetch_array($result);
  $query_sub = "select name from courses where id=".$row['subject_id'];
$result_sub=mysql_query($query_sub);
$row_sub=mysql_fetch_array($result_sub);

  $query_dept = "select name from departement where id=".$row['dept_id'];
$result_dept=mysql_query($query_dept);
$row_dept=mysql_fetch_array($result_dept);

 $query_userid= "select full_name from user where id=".$row['user_id'];
	$result_user=mysql_query($query_userid);
	$row_user=mysql_fetch_array($result_user);


  echo "<tr>
  <td>".$row['name']."</td>
  <td>".$row_sub['name']."</td>
  <td>".$row_dept['name']."</td>
  <td>".$row['info']."</td>
   <td style='text-transform: capitalize;' >".$row_user['full_name']."</td>
  
  
 </tr>";
}
echo "</table>";

?>

<br>

<a href="#new_sugg_book" class="page-scroll" style="background:rgb(92, 184, 92); color: #fff; border-radius: 99px;     box-shadow: 0px 1px 2px rgb(92, 184, 92);    padding: 10px;">Suggest New Book</a>
			  </div>

          </div>
      </div>
    </div>
      
  </section>
  
  <!-- [MAIN GALLERY ]
=============================================================================================================================-->
  <section class="why-love theme_background_color" id="new_sugg_book" >
    <div class="overlay" >
      <div class="container">
          <div class="row">
		  <div class="row text-center">
                <div class="how-it-works-heading"><br/>
                    <h2 class="sectionTitle">Suggest Book</h2><br/><hr/><br/>
                </div>
            </div>
              <div class="col-md-6 col-sm-12">
						<form  action="ins_book.php" method="post">

			                                <div class="form-group">
												<label>Book Name</label>
												<input class="form-control" name="cname" required="required">
												<input type="hidden" value="2" name="dept" id="dept">
											</div>
									
									<div class="form-group">
									<label>Departement</label>
											<select class="form-control" name="dept" id="dept4" onchange='get_dept_subject()' required="required">
									<option value="">-- SELECT --</option>
									<?php 
									$sql =" SELECT * FROM departement ";
									$result=mysql_query($sql);
									$num=mysql_num_rows($result);
									for($i=0;$i<$num;$i++)
									{
										$row=mysql_fetch_array($result);
										echo "<option value='".$row['id']."'>".$row['name']."</option>";
									}
									?>
									</select>
									</div>
									
			                        <div class="form-group">
											
									<label>Subject Name</label>
										<select class="form-control" name="sub_id" id="sub_id" required="required">
												
										</select>
									</div>

											<div class="form-group">
												<label>Book Description</label><br/>
												<textarea class="form-control" rows="5" cols="40" id="info" name="info"></textarea>
											</div>

			     			<input type="submit" value="Suggest" class="btn btn-primary"></input>
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
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/html-table-search.js"></script>
<script type="text/javascript">
			$(document).ready(function(){
				$('table.datatable').tableSearch({
					searchText:' ',
					searchPlaceHolder:'Search...'
				});
			});

		</script>
  
</body>
<script type="text/javascript">
    $(document).ready(function()
    {
        //fullscreenslider();
    }
     );
    
        function get_dept_subject()
        { 
		    var id = $('#dept4').val();
            $.ajax({
                     url: 'dept_subject.php',
                     type: 'post',
                     data: {'id': id },
                     success: function(data) {               
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


</html>