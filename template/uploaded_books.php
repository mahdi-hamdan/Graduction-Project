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
  
  <!-- [MAIN GALLERY ]
=============================================================================================================================-->
  <section class="" id="home" style="min-height:670px; background:#666">
    <div class="overlay" style="background:none">
      <div class="container">
          <div class="row">
		  <?php
		  if(isset($_GET['order_sent']))
		  echo "<h3>Your order was sent ... thank you</h3><br/><br/>";
	  
	  if(isset($_GET['order_dupli']))
		  echo "<h3>You've already order this book ..thank you</h3><br/><br/>";
	  
		  ?>
		  <div class="row text-center">
                <div class="how-it-works-heading">
                    <h2 class="sectionTitle">Books List</h2>
					<a href="#add_new_book" class="page-scroll" style="width: 192px;margin-right: 34px; float: right;background:rgb(92, 184, 92); color: #fff; border-radius: 3px;     box-shadow: 0px 1px 2px rgb(92, 184, 92);    padding: 10px;">Add New Book</a><br/><hr/><br/>
                </div>
            </div>
              <div class="col-md-12 col-sm-12">

<?php
  $sql = "SELECT * FROM book  where type=1 || type=2|| type=3 ORDER BY `id` desc";
  $result=mysql_query($sql);
  $num=mysql_num_rows($result);
  
  //<th style='line-height: 30px;'>Status</th>
echo"
<table class='datatable'> <thead>
<tr><th>  &#160; Title &#160;</th>
<th>Departement</th>
<th>Course Name</th>
<th>  &#160;  &#160; Information &#160;  &#160;</th>
<th>Soft Copy</th>
<th>Hard Copy</th>
<th>Comments</th>
<th>&#160; &#160; Uploaded by  &#160;  &#160;</th>";
if($_SESSION["type"]==1 || $_SESSION["type"]==0 )
echo "<th>Add comments</th>
</tr>";
else echo "</tr>";
echo "</thead>";
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

/*
if ($row['status'] ==1){
	$status = "Available as software";
}else{
	if ($row['status'] ==2){
		$status = "Available as hardware";
	}else{
		$status = "(Hardware & Software) Available";
	}*/
//}<td style='line-height: 30px;'>".$status."</td>";
  echo "<tr>";
if($row['user_id']==$_SESSION["userid"] ){
	  echo "<td style='color:white;background-color:rgb(0, 102, 0);' >".$row['name']."</td>";
	  
	  }else { echo "<td>".$row['name']."</td>";  }
if($row['user_id']==$_SESSION["userid"] ){
			echo "<td style='color:white;background-color:rgb(0, 102, 0);'    >".$row_dept['name']."</td>";}
			else{echo "<td>".$row_dept['name']."</td>";                    }
if($row['user_id']==$_SESSION["userid"] ){			
echo "<td style='color:white;background-color:rgb(0, 102, 0);'   >".$row_sub['name']."</td>";}
else {   echo "<td>".$row_sub['name']."</td>";           }
if($row['user_id']==$_SESSION["userid"] ){			
echo "<td style='color:white;background-color:rgb(0, 102, 0);' >".$row['info']."</td>";}
else{
	echo "<td>".$row['info']."</td>";
	
	
}
  
  if (($row['type'] ==2) ||  ($row['type'] ==3)){ 
    if($row['user_id']==$_SESSION["userid"] ){
	echo" <td style='color:white;background-color:rgb(0, 102, 0);'><a href='software.php?id=".$row['id']."'>Software files</a></td>";}
	else{
		echo" <td><a href='software.php?id=".$row['id']."'>Software files</a></td>";
		
	}
	
  }else{
	      if($row['user_id']==$_SESSION["userid"] ){

  
		  echo "<td style='color:white;background-color:rgb(0, 102, 0);'></td>";
		  }
		  else{
			  if($row['user_id']==$_SESSION["userid"] ){

			  		  echo "<td style='color:white;background-color:rgb(0, 102, 0);'></td>";
			  }
			  else
			  {
				  
				  			  		  echo "<td></td>";

			  }

		  }
  }
  
  if (($row['type'] ==1) ||  ($row['type'] ==3)){ 
  if($row['user_id']==$_SESSION["userid"] ){
	  echo "<td style='color:white;background-color:rgb(0, 102, 0);text-transform: capitalize;'> &#160; <b> Uploaded by you </b></td>";
	  
  }else  

  echo"<td><a href='msg_book_get.php?id=".$row['id']."'>Get Book</a></td>";
  }
  else{
	  if($row['user_id']==$_SESSION["userid"] ){

			  		  echo "<td style='color:white;background-color:rgb(0, 102, 0);'></td>";
			  }
			  else
			  {
				  
				  			  		  echo "<td></td>";

			  }
  }
       if($row['user_id']==$_SESSION["userid"] ){

   echo "<td style='background-color:rgb(0, 102, 0)'><a href='book_cooments.php?id=".$row['id']."'>View Comments</a></td>";
	   }
	   else {
		   
		      echo "<td><a href='book_cooments.php?id=".$row['id']."'>View Comments</a></td>";

		   
	   }
   
   
   
     if($row['user_id']==$_SESSION["userid"] ){
	  echo "<td style='color:white;background-color:rgb(0, 102, 0);text-transform: capitalize; '> ".$row_user['full_name']." </td>";
	  
  }else
  {echo "<td style='text-transform:capitalize;' > ".$row_user['full_name']." </td>";} 

  if($_SESSION["type"]==1 ||  $_SESSION["type"]==0){
if ($row['user_id']==$_SESSION["userid"] )
echo "<td style='color:white;background-color:rgb(0, 102, 0);'><a href='Add_cooments_book.php?id=".$row['id']."'>Add  Comments</a></td></tr>";
else echo "<td><a href='Add_cooments_book.php?id=".$row['id']."'>Add  Comments</a></td></tr>";

  }
else echo "</tr>";
  
}
echo "</table>";

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
                    <h2 class="sectionTitle">Add New Book</h2><br/><hr/><br/>
                </div>
            </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
			  <?php
			  if(isset($_GET['added_book']))
			  echo "<h2>Operation Succeded.</h2>";
			  ?>
						<form  action="ins_book_std.php" method="post" id="form1" enctype="multipart/form-data">

			                                <div class="form-group">
												<label>Book Name</label>
												<input class="form-control" name="cname" id="cname" required="required" >
												<input type="hidden" value="2" name="dept" id="dept" />
											</div>
									
									<div class="form-group">
									<label>Departement</label>
											<select class="form-control" name="dept" id="dept1" onchange='get_dept_subject()' required="required">
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
												<textarea class="form-control" rows="5" cols="40"  id="info" name="info"></textarea>
											</div>
											
											<div class="form-group">
											<input type="checkbox" id="hardware" name="hardware" value="1" > Hard Copy<br/>
											<input type="checkbox" id="software" name="software" value="1" > Soft Copy<br/>
											<div id="content_type" style="padding-left:20px;">
											<div class="form-group">
											<input type="file" name="uploaded" id="uploaded" >
											</div>
											  <input type="radio" name="contenttype" value="Book"> Book<br>
											  <input type="radio" name="contenttype" value="Slide"> Slide<br>
											  <input type="radio" name="contenttype" value="Menual Solutions"> Menual Solutions<br>
											  <input type="radio" name="contenttype" value="other"> Other
											</div>								
											</div>
											
			     			<input type="submit" id="submitbtn" class="btn btn-style blue" value="Add"></input>
					  		</form>
                </div>

          </div>
      </div>
    </div>
      
  </section>
  
  
  
 <!-- [/SCREEH SHOT]
=============================================================================================================================-->

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

