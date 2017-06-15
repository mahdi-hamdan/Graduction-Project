<?php
session_start();
if(isset($_SESSION["userid"] ))
{
    $id = $_SESSION["userid"] ;
    $full_name = $_SESSION["name"];
    $email = $_SESSION["email"] ;
    $info = $_SESSION["info"] ;
    include('conn.php');
    $user_course = "select * from `courses` ";
    $user_course_result=mysql_query($user_course);
    $user_course_num=mysql_num_rows($user_course_result);


    $books = "select * from `book` ";
    $books_result=mysql_query($books);
    $books_result_num=mysql_num_rows($books_result);

    $msq_sql = "SELECT * FROM `user` where type = 1 ";
    $msg_result=mysql_query($msq_sql);
    $msg_num=mysql_num_rows($msg_result);

	
	$std_sql = "SELECT * FROM `user` where type = -1 ";
    $std_sql_result=mysql_query($std_sql);
    $std_sql_result_num=mysql_num_rows($std_sql_result);
	
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
<title>Books - Home</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
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
				<li class="active">Home</li>
			</ol>
		</div><!--/.row-->








		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
				<a href="">
				<span><?php echo $full_name; ?> </span>
				</a>
				</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
        <a href="courses.php">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>

						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $user_course_num;?></div>
							<div class="text-muted">Corses</div>
						</div>

					</div>
				</div>
			</div>
            </a>

            <a href="academic_stuff.php">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $msg_num; ?></div>
							<div class="text-muted">Academic Stuff</div>
						</div>
					</div>
				</div>
			</div>
            </a>
            <a href="students.php">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $std_sql_result_num;?></div>
							<div class="text-muted">Students</div>
						</div>
					</div>
				</div>
			</div>
            </a>
            <a href="books.php">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo $books_result_num;?></div
							<div class="text-muted">Books </div>
						</div>
					</div>
				</div>
			</div>
            </a>
			
		   <div class="col-xs-12 col-md-8 col-lg-8">
			<h2>About us</h2>
			<p>The idea of academic books and services exchange between students; is to deliver a solution for IT students and from several backgrounds, which aims to ease the exchange of academic books between students. This solution can help students to order a certain book.</p>
			<p>On the opposite side another student may be offering the same book from the same faculty or even from another one.</p>
			<p>Similar book requests and offers will be matched together, which helps students accomplishing the exchange successfully.</p>
			<p>Other features can be added or uploaded to this application, such as, contacting information details for the student, location and book edition.</p>
			<hr/>
			</div><!--/.col-->
			
			<div class="col-xs-12 col-md-4 col-lg-4">
							<div class="panel panel-red">
					<div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendar</div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
			</div>
			
		</div><!--/.row-->
			

            <!-- .col -->
        
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
			$('#calendar').datepicker({
			todayHighlight: true
		});
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
<?php mysql_close();     ?>