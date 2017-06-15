<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("conn.php");
global $sql;
$full_name = $_POST['stdname'];
$user_name=$_POST['user_name'] ;
$email = $_POST['email'] ;
$password=$_POST['password'] ;
$cdate=date('Y-m-d H:i:s');
// create user
$user_id = "";
$query = "INSERT INTO `user` (`id`, `user_name`, `password`, `cdate`, `full_name`, `email`, `info`, `isdelete` , `type`) VALUES (NULL, '$user_name', '$password', '$cdate', '$full_name', '$email', '', '0','1')";

$result= mysql_query($query,$sql);
$user_id = mysql_insert_id($sql);
if ($user_id != 0){
$email=  $_POST["email"];
$msg=  "Your account @ Book Exchange website:\r\n username: ".$email."\r\n Password: ".$password;
$subject = "Book Exchange - Accounts";
$txt = $msg;
mail($email,$subject,$txt);

echo '<script>window.location="academic_stuff.php?suc=1";</script>';
}else{
	echo '<script>window.location="academic_stuff.php?error=1";</script>';
}

?>