<?php
include('conn.php');
$courseid = 0;
if(isset($_GET['id']))
{
    $courseid = $_GET['id'];
    $sql = "SELECT * from  `courses` where id=".$courseid;
    $result1 = mysql_query($sql);
    $row = mysql_fetch_array($result1);
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
				<li class="active">courses</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">COURSES - Update</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
                <form  action="up_course.php" method="post">
            <!-- here we call the id of course to edit it not in all of courses (update course)-->
                <input type="hidden" name="course_id" value="<?php echo $row['id'] ?>"  />
                <!--after form we write the input in ins_course -->
                <!--input of ins_course-->
					<div class="panel-heading">Edit Course</div>
					<div class="panel-body">
				  <div class="form-group">
                  <div class="form-group">
                                <div class="form-group">
									<label>Course Name</label>
                                    <!--Update the course-->
									<input class="form-control" name="cname" value="<?php echo $row['name'] ?>">
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
										$row=mysql_fetch_array($result);
										echo "<option value='".$row['name']."'>".$row['name']."</option>";
									}
									?>
									</select>
								</div>
								</div>
                                <!--end of input ins_course-->
     <input type="submit" class="btn btn-primary"></input>
					</div>
				</div>
			</div>
		  </form>  </div></div> <!--/.row-->

	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
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