<?php session_start();
if(isset($_SESSION["userid"] ))
{
    $id = $_SESSION["userid"] ;
    $full_name = $_SESSION["name"];
    $email = $_SESSION["email"] ;
    $info = $_SESSION["info"] ;
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
<title>Books - Dashbord</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
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
				<li class="active">Send Email</li>
			</ol>
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
					Your Email sent successfully. <a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
				</div>

					<?php }}
				?>
			</div>
		</div><!--/.row-->

				<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">

					<div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Email Form</div>
					<div class="panel-body">
						<form class="form-horizontal" action="contactus_send.php" method="post" autocomplete="off">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Subject</label>
									<div class="col-md-9">
									<input id="name" required name="name" type="text" autocomplete="off" placeholder="Subject" class="form-control">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">TO</label>
									<div class="col-md-9">
										<input id="email" required name="email" type="email" autocomplete="off" placeholder="TO" class="form-control">
									</div>
								</div>
								
								<!-- Message body -->
						 		<div class="form-group">
									<label class="col-md-3 control-label" for="message">Your message</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5" required></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">Send</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			
			</div><!--/.row-->
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
<script type="text/javascript">
	
	$('.nav.menu').removeClass('active');
	$('.contactus').addClass('active');
</script>
