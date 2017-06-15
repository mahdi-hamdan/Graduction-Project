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
<?php session_start();
if(isset($_SESSION["userid"] ))
{
include('courses_view.php');
include('courses_view_dept2.php');
include('courses_view_dept3.php');
}else
{
    echo '<script>
window.location="index.php";
</script>';
}
?>
<body>

<?php include 'top.php'; ?>

<?php include 'menu.php' ;?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">courses</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">COURSES</h1>
			</div>
		</div><!--/.row-->


		<div class="row">

					<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Software Engineering</a></li>
							<li><a href="#tab2" data-toggle="tab">Computer science</a></li>
							<li><a href="#tab3" data-toggle="tab">Computer Information Systems</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
								<div class="panel-body">
								<table data-toggle="table" data-url="tables/courses.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
								    <thead>
								    <tr>
								        <th data-field="id" data-sortable="false">#</th>
								        <th data-field="name"  data-sortable="true">Course Name</th>
		                                <th data-field="options" > options</th>
		                                
								    </tr>
								    </thead>
								</table>
							</div>
							</div>
							
							<div class="tab-pane fade" id="tab2">
								<div class="panel-body">
								<table data-toggle="table" data-url="tables/courses2.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
								    <thead>
								    <tr>
								        <th data-field="id" data-sortable="false">#</th>
								        <th data-field="name"  data-sortable="true">Course Name</th>
		                                
		                                <th data-field="options" > options</th>
		                                
								    </tr>
								    </thead>
								</table>
							</div>
							</div>
							
							<div class="tab-pane fade" id="tab3">
							<div class="panel-body">
							<table data-toggle="table" data-url="tables/courses3.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							    <thead>
							    <tr>
							        <th data-field="id" data-sortable="false">#</th>
							        <th data-field="name"  data-sortable="true">Course Name</th>
	                                <th data-field="options" > options</th>
	                                
							    </tr>
							    </thead>
							</table>
						</div>
							</div>

						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->

<!--
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">List of courses</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/courses.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id" data-sortable="false">#</th>
						        <th data-field="name"  data-sortable="true">Course Name</th>
                                <th data-field="dt"  data-sortable="true">Departement</th>
                                <th data-field="options" > options</th>
                                
						    </tr>
						    </thead>
						</table>
					</div>
				</div>
			</div> -->
		    </div> <!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
                <form  action="ins_course.php" method="post">
                <!--after form we write the input in ins_course -->
                <!--input of ins_course-->
					<div class="panel-heading">Add New Course</div>
					<div class="panel-body">
				  <div class="form-group">
                  <div class="form-group">
                                <div class="form-group">
									<label>Course Name</label>
									<input class="form-control" name="cname" required="required">
								</div>
                                <div class="form-group">
									<label>Departement Name</label>
									<div class="form-group">
									
									<select class="form-control" name="dept" id="dept" required="required">
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


<script type="text/javascript">
	
	$('.nav.menu').removeClass('active');
	$('.courses').addClass('active');
</script>