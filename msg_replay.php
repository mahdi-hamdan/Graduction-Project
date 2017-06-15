vvرر<?php
session_start();
if(isset($_SESSION["userid"] ))
{     $full_name = $_SESSION["name"];
        $userid = $_SESSION["userid"] ;
include('conn.php');
$id = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "SELECT * from  messages where id=".$id;
    $result1 = mysql_query($sql);
    $row = mysql_fetch_array($result1);
    $sid = $row['id_from'];
    $sql22 = "select * from user where id = ".$sid;
    $result1=mysql_query($sql22);
    $row22=mysql_fetch_array($result1);
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
				<li class="active">Messages</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Messages</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">


                                <div class="form-group">
									<label>Supject:</label>
                                    <!--Update the course-->
									<input readonly class="form-control" name="supject" value="<?php echo $row['subject'] ?>">
								</div>
                                <div class="form-group">
									<label>From:</label>
									<input readonly class="form-control" name="from" value="<?php echo $row22['full_name'] ?>">
								</div>

                                <div class="form-group">
									<label>Msg:</label>
                                    <textarea readonly class="form-control" rows="3" value="<?php echo $row['msg'] ?>"><?php echo $row['msg'] ?></textarea>

								</div>
				</div>

		    </div></div> <!--/.row-->

	</div><!--/.main-->
        <form role="form" action="ins_msg.php" method="post" >
    	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Replay To Message</div>
					<div class="panel-body">
                    <input type="hidden" name="msg_id" value="<?php echo $row['id'] ?>"  />
                    <input type="hidden" name="std_id" value="<?php echo $row22['id'] ?>"  />
                    <input type="hidden" name="replay_subject" value="<?php echo "Re: ".$row['subject']  ?>"  />
                    <div class="form-group">
									<textarea col="10" rows="10" class="form-control"  name='remsgtext' id='remsgtext'> </textarea>
					</div>
                    <button type="submit" class="btn btn-primary">Send</button>
				</div>

		    </div></div> <!--/.row-->
            </div>
            </form>
            </div>
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
