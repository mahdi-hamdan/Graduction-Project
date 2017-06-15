<?php
include("conn.php");
$cid = $_POST['course_id'];
$CourseName = $_POST['cname'] ;
$dept=$_POST['dept'] ;
$cdate=date('Y-m-d H:i:s');

if ($CourseName!=''){
$sql = "UPDATE `courses` SET `name` = '$CourseName' , `cdate`= '$cdate' WHERE `courses`.`id` = $cid";
$qcc=mysql_query($sql);
}


if($dept!=''){
$sql = "UPDATE `courses` SET `dept_id` = $dept , `cdate`= '$cdate' WHERE `courses`.`id` = $cid";
$qcc=mysql_query($sql);
}

echo '<script>window.location="courses.php";</script>';

?>