<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("conn.php");
$id=  $_SESSION["userid"];
$CourseName = $_POST['cname'] ;
$Day_Time=$_POST['cdate'] ;
$sql = "INSERT INTO `web_app`.`courses` (`id`, `name`, `active`, `time_day`, `doctor_id`) VALUES (NULL,'$CourseName', '1', '$Day_Time', '$id');";
$qcc=mysql_query($sql);



echo '<script>
window.location="courses.php";
</script>';













?>