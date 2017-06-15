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
include('books_view.php');
include('books_view_dept2.php');
include('books_view_dept3.php');
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
				<li class="active">Books</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Books</h1>
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
								<table data-toggle="table" data-url="tables/books1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
								    <thead>
								    <tr>
								        <th data-field="id" data-sortable="false">#</th>
								    <th data-field="name"  data-sortable="true">Title</th>
								    <th data-field="sub"  data-sortable="true">Subject Name</th>
		                                <th data-field="options" > options</th>
		                                
								    </tr>
								    </thead>
								</table>

							<form  action="ins_book.php" method="post" enctype="multipart/form-data">
								<div class="panel-heading">Add New Book</div>
			                                <div class="form-group">
												<label>Book Name</label>
												<input class="form-control" name="cname" required="required">
												<input type="hidden" value="1" name="dept" id="dept">
											</div>

			                                <div class="form-group">
												<label>Subject Name</label>
												<select class="form-control" name="sub_id" id="sub_id" required="required">
												<option value="">-- SELECT --</option>
												<?php 
												$sql =" SELECT * FROM courses WHERE  dept_id = 1 ";
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
												<label>Book Description</label><br/>
												<textarea class="form-control" rows="5" cols="40" required="required" id="info" name="info"></textarea>
											</div>
											<div class="form-group">
											<input type="file" name="uploaded" id="uploaded">
											</div>
			     			<input type="submit" class="btn btn-primary"></input>
					  		</form>
								
		  				</div>
						</div>	
							<div class="tab-pane fade" id="tab2">
								<div class="panel-body">
								<table data-toggle="table" data-url="tables/books2.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
								    <thead>
								    <tr>
								        <th data-field="id" data-sortable="false">#</th>
								        <th data-field="name"  data-sortable="true">Title</th>
								    <th data-field="sub"  data-sortable="true">Subject Name</th>
		                                
		                                <th data-field="options" > options</th>
		                                
								    </tr>
								    </thead>
								</table>

							<form  action="ins_book.php" method="post" enctype="multipart/form-data">
								<div class="panel-heading">Add New Book</div>
			                                <div class="form-group">
												<label>Book Name</label>
												<input class="form-control" name="cname" required="required">
												<input type="hidden" value="2" name="dept" id="dept">
											</div>

			                                <div class="form-group">
												<label>Subject Name</label>
												<select class="form-control" name="sub_id" id="sub_id" required="required">
												<option value="">-- SELECT --</option>
												<?php 
												$sql =" SELECT * FROM courses WHERE  dept_id = 2 ";
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
												<label>Book Description</label><br/>
												<textarea class="form-control" rows="5" cols="40" required="required" id="info" name="info"></textarea>
											</div>

											<div class="form-group">
											<input type="file" name="uploaded" id="uploaded">
											</div>
			     			<input type="submit" class="btn btn-primary"></input>
					  		</form>

							</div>
							</div>
							
							<div class="tab-pane fade" id="tab3">
							<div class="panel-body">
							<table data-toggle="table" data-url="tables/books3.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							    <thead>
							    <tr>
							        <th data-field="id" data-sortable="false">#</th>
							        <th data-field="name"  data-sortable="true">Title</th>
								    <th data-field="sub"  data-sortable="true">Subject Name</th>
	                                <th data-field="options" > options</th>
	                                
							    </tr>
							    </thead>
							</table>

						<form  action="ins_book.php" method="post" enctype="multipart/form-data">
								<div class="panel-heading">Add New Book</div>
			                                <div class="form-group">
												<label>Book Name</label>
												<input class="form-control" name="cname" required="required">
												<input type="hidden" value="2" name="dept" id="dept">
											</div>

			                                <div class="form-group">
												<label>Subject Name</label>
												<select class="form-control" name="sub_id" id="sub_id" required="required">
												<option value="">-- SELECT --</option>
												<?php 
												$sql =" SELECT * FROM courses WHERE  dept_id = 3 ";
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
												<label>Book Description</label><br/>
												<textarea class="form-control" rows="5" cols="40" required="required" id="info" name="info"></textarea>
											</div>

											<div class="form-group">
											<input type="file" name="uploaded" id="uploaded">
											</div>
			     			<input type="submit" class="btn btn-primary"></input>
					  		</form>

						</div>
							</div>

						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
		    </div> <!--/.row-->



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
	$('.books').addClass('active');
</script>