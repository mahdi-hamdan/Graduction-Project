<?php
include("conn.php");

$id = $_POST['id'] ;
$sname = $_POST['sname'].trim("") ;
$new_password = $_POST['spass'].trim("") ;
$dept = $_POST['dept'] ;
$info = $_POST['info'].trim("") ;

$update_parameter="";
if ($info!='')
$update_parameter = $update_parameter."info = '$info'";

if($sname!=''){
if($update_parameter!="")
$update_parameter = $update_parameter." , full_name = '$sname'";	
else
$update_parameter = $update_parameter." full_name = '$sname'";	
}

if($new_password!=''){
if($update_parameter!="")
$update_parameter = $update_parameter." , password = '$new_password'";		
else
$update_parameter = $update_parameter." password = '$new_password'";		
}

if($update_parameter!=""){
$sql = "UPDATE `user` SET ".$update_parameter."  WHERE `id` = $id";
$qcc=mysql_query($sql);
}

if ($dept!=''){
$sql = "UPDATE `student` SET dept_id = $dept  WHERE `user_id` = $id";
$qcc=mysql_query($sql);
}
echo '<script>window.location="students.php?update=1";</script>';
?>