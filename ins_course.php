<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("conn.php");
$id=  $_SESSION["userid"];
$CourseName = $_POST['cname'] ;
$dept=$_POST['dept'] ;
$cdate=date('Y-m-d H:i:s');
$sql = "INSERT INTO `courses` (`id`, `name`, `dept_id`, `cdate`) VALUES (NULL,'$CourseName', $dept, '$cdate');";
$qcc=mysql_query($sql);

echo '<script>
window.location="courses.php";
</script>';


?>