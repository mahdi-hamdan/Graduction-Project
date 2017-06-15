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
 include("students_view.php");
 }else
 {
     echo '<script>
window.location="index.php";
</script>';
 }
?>
<body>

<!--header for all pages-->
<?php include 'top.php'; ?>
<?php include 'menu.php' ;?>
<!--/ header for all pages-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Students</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">STUDENTS</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<?php
					if(isset($_GET['error'])){
						if($_GET['error']==2){?>
						<div class="alert bg-danger" role="alert">
					<svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel">
					</use></svg>

					 The "University Identity" not found in our data.
					 <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
						</div>
<?php
						}else{

						}
					}else{
						if(isset($_GET['suc'])){
						?>
				<div class="alert bg-success" role="alert">
					<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> 
					Operation Succed <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				</div>

					<?php }}
				?>
			</div>
		</div><!--/.row-->

		

		<div class="row">

			<div class="col-lg-12">
         
				<div class="panel panel-default">
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/student.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
                            <!--
						        <th data-field="state" data-checkbox="true" >Item ID</th>    -->
						        <th data-field="id" data-sortable="true">ID</th>
						        <th data-field="name"  data-sortable="true">Full Name</th>
						        <th data-field="user_name"  data-sortable="true">User Name</th>
						        <th data-field="email"  data-sortable="true">Email</th>

						        <th data-field="dept" >Departement</th>
                                <th data-field="option" >Options </th>
						    </tr>
						    </thead>
						</table>
					</div>
				</div>
			</div>
		    </div> <!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">

					<div class="panel-heading">Add New Student</div>
					<div class="panel-body">
                    <form role="form" action="ins_student.php" method="post">
				  <div class="form-group">
				  <input type="hidden" value="<?php echo $id_course ?>" name="cid" />
									<label>University Identity</label>
									<input class="form-control" name="university_identity" required />
				  </div>
				  <label>Student Name</label>
									<input class="form-control" name="stdname" required>
				  
				  <div class="form-group">
				  <label>User Name</label>
				  <input class="form-control" name="user_name" required>
				  </div>

				  <div class="form-group">
				  <label>Email</label>
				  <input class="form-control" name="email" required>
				  </div>

				  <div class="form-group">
				  <label>Password</label>
				  <input type="Password" class="form-control" name="password" required>
				  </div>

				       <div class="form-group">
									<label>Departement Name</label>
									<div class="form-group">
									
									<select class="form-control" name="dept" id="dept" required>
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




     <button type="submit" class="btn btn-primary">Add</button>
     <button type="reset" class="btn btn-default">Reset </button>
     </div>
     </form>
					</div>
				</div>
			</div>
		    </div> <!--/.row-->


	</div><!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
<script>
$('#cselect').on('change', function() {
  window.location.href = "students.php?cid="+this.value;
});
</script>


<script type="text/javascript">
	
	$('.nav.menu').removeClass('active');
	$('.student').addClass('active');
</script>