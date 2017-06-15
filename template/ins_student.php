<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("../conn.php");
global $sql;

$full_name = $_POST['stdname'];
$dept = $_POST['dept'] ;
$uid = $_POST['university_identity'] ;
$user_name=$_POST['user_name'] ;
$email = $_POST['email'] ;
$password=$_POST['password'] ;
$cdate=date('Y-m-d H:i:s');

$sqlu=mysql_query("SELECT * FROM `user`  WHERE  `user_name`='$user_name' ");
$sqle=mysql_query("SELECT * FROM `user`  WHERE  `email`='$email' ");
$sqlb=mysql_query("SELECT * FROM `user`  WHERE  `email`='$email' AND `user_name`='$user_name'");

 if(mysql_num_rows($sqlu)==1)
   {
	   	echo '<script>window.location="index.php?user_name_erorr=1";</script>';	

   }
 else if(mysql_num_rows($sqle)==1)
    {
			   	echo '<script>window.location="index.php?email_erorr=1";</script>';	
	}else if (mysql_num_rows($sqlb)==1){
					   	echo '<script>window.location="index.php?emailusername_erorr=1";</script>';	
		
		
	}else{
/*
$query0 ="SELECT * FROM students_ids WHERE serial_no='".$uid."'";
$result= mysql_query($query0,$sql);
$num=mysql_num_rows($result);

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

$msg=  "Your account @ Book Exchange website:\r\n username: ".$user_name."\r\n Password: ".$password;
$subject = "Book Exchange - Accounts";
$txt = $msg;
mail($email,$subject,$txt);

echo '<script>window.location="index.php?suc=1";</script>';

}else{
	echo '<script>window.location="index.php?error=1";</script>';
}}
/*
}else{
	echo '<script>window.location="index.php?error=2";</script>';	
}*/
?>