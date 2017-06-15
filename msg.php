<?php session_start();
if(isset($_SESSION["userid"] ))
{      $full_name = $_SESSION["name"];
include('msg_view.php');
include('msg_sent_view.php');
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
				<li class="active">MESSAGES</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">MESSAGES</h1>
			</div>
		</div><!--/.row-->
			

			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Inbox</a></li>
							<li><a href="#tab2" data-toggle="tab">Sent</a></li>
							
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
								<div class="panel panel-default">
					
								<div class="panel-body">
									<table data-toggle="table" data-url="tables/msg.json"   data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
									    <thead>
									    <tr>
									        <th data-field="id" data-sortable="false">#</th>
			                                <th data-field="subject"  data-sortable="true">Subject</th>
									        <th data-field="from"  data-sortable="true">From</th>
			                                <th data-field="dt"  data-sortable="true">Date</th>
			                                <th data-field="replay">Options </th>

									    </tr>
									    </thead>
									</table>
								</div>
							</div>
										</div>
							<div class="tab-pane fade" id="tab2">
								<div class="panel panel-default">
					
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/msg_sent.json"   data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id" data-sortable="false">#</th>
                                <th data-field="subject"  data-sortable="true">Subject</th>
						        <th data-field="from"  data-sortable="true">From</th>
                                <th data-field="dt"  data-sortable="true">Date</th>
                                <th data-field="replay">Options </th>

						    </tr>
						    </thead>
						</table>
					</div>
				</div>
							</div>

						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->

		<div class="row">
			<div class="col-lg-12">
				
			</div>
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
	$('.messages').addClass('active');
</script>