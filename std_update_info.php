<?php session_start();
include('conn.php');
if(isset($_SESSION["userid"] ))
{
   
 $id = $_SESSION["userid"] ;
    $full_name = $_SESSION["name"];
    $email = $_SESSION["email"] ;
    
if(isset($_GET['id']))
{
    $sid = $_GET['id'];
    $sql = "SELECT * from  user where id = ".$sid;
    $result1 = mysql_query($sql);
    $row = mysql_fetch_array($result1);
	
}
}else
{
  echo '<script>
window.location="index.php";
</script>';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Books - Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>


<!--header for all pages-->
<?php include 'top.php'; ?>
<?php include 'menu.php' ;?>
<!--/ header for all pages-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Students - Update</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Students</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
                <form  action="std_update.php" method="post" role="form">
            <!-- here we call the id of course to edit it not in all of courses (update course)-->
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"  />
                <!--after form we write the input in ins_course -->
                <!--input of ins_course-->
					<div class="panel-heading">Edit Student</div>
					<div class="panel-body">


                                <div class="form-group">
									<label>Student Name</label>
                                    <!--Update the course-->
									<input class="form-control" name="sname" value="<?php echo $row['full_name'] ?>">
								</div>


                                <div class="form-group">
									<label>New Password</label>
                                    <!--Update the course-->
									<input class="form-control" name="spass" value="">
								</div>
								<div class="form-group">
									<label>Departement Name</label>
									<div class="form-group">
									
									<select class="form-control" name="dept" id="dept">
									<option>-- SELECT --</option>
									<?php 
									$sql =" SELECT * FROM departement ";
									$result=mysql_query($sql);
									$num=mysql_num_rows($result);
									for($i=0;$i<$num;$i++)
									{
										$row1=mysql_fetch_array($result);
										echo "<option value='".$row1['id']."'>".$row1['name']."</option>";
									}
									?>
									</select>
								</div>
								</div>

                                <div class="form-group">
									<label>Details</label>
									<textarea rows="10" cols="12" class="form-control" name="info"><?php echo $row['info'] ?>
									</textarea>
								</div>


                                <!--end of input ins_course-->
                                <button type="submit" class="btn btn-primary">Save</button>
					</div>

			</div>
		  </form>  </div></div> <!--/.row-->

	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>
<script type="text/javascript">
	
	$('.nav.menu').removeClass('active');
	$('.student').addClass('active');
</script>