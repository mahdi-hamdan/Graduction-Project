<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("conn.php");
global $sql;

$full_name = $_POST['stdname'];
$dept = $_POST['dept'] ;
$uid = $_POST['university_identity'] ;

$user_name=$_POST['user_name'] ;
$email = $_POST['email'] ;
$password=$_POST['password'] ;
$cdate=date('Y-m-d H:i:s');

/*
$query0 ="SELECT * FROM students_ids WHERE serial_no='".$uid."'";
$result= mysql_query($query0,$sql);
$num=mysql_num_rows($result);*/
/*
if ($num > 0)
{*/
// create user
$user_id = "";

$query = "INSERT INTO `user` (`id`, `user_name`, `password`, `cdate`, `full_name`, `email`, `info`, `isdelete` , `type`) VALUES (NULL, '$user_name', '$password', '$cdate', '$full_name', '$email', '', '0','-1')";

$result= mysql_query($query,$sql);
$user_id = mysql_insert_id($sql);
if ($user_id != 0){

$sql2 = "INSERT INTO `student` VALUES (NULL,'$uid', $dept, $user_id)";
$qcc=mysql_query($sql2);

echo '<script>window.location="students.php?suc=1";</script>';
}else{
	echo '<script>window.location="students.php?error=1";</script>';
}
/*
}else{
	echo '<script>window.location="students.php?error=2";</script>';	
}*.
?>