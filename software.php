<?php
include('conn.php');
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];echo $id;
    $sql = "SELECT * from  `course_content_software` where book_id=".$id;
    $result = mysql_query($sql);
    //$row_info_book = mysql_fetch_array($result);  
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
				<li class="active">Books</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Books - Software files List</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default"><br/>
				
				<?php
					$num=mysql_num_rows($result);
					echo "<ol>";
					for($i=1;$i<=$num;$i++)
					{
						$row=mysql_fetch_array($result);
						echo "<li><a target='_blank' href='".$row['link']."'>File ".$i."</a></li>";
					}
					echo "</ol>";
				?>
				<hr/>
				<div class="col-lg-12">
				<h1 class="page-header">Uploade new software</h1>
			</div>
                <form  action="upploade.php" method="post"  enctype="multipart/form-data">
                <input type="hidden" name="bookid" value="<?php echo $id ?>"  />
				<div class="panel-body">
					<div class="form-group">
						<input type="file" name="uploaded" id="uploaded">
					</div>
				</div>
     			<input type="submit" class="btn btn-primary"></input>
				
		  	</form>  
		  	</div>
		  	</div>
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
