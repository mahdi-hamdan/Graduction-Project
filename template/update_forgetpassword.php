<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("../conn.php");
global $sql;


$user_name=$_POST['user_name'] ;
$email = $_POST['email'] ;
$password=$_POST['password'] ;
 
$sqlt=mysql_query("SELECT * FROM `user`  WHERE  `user_name`='$user_name' AND `email` = '$email' ");
 if(mysql_num_rows($sqlt)==0)
   {
	   	echo '<script>window.location="index.php?up_pass_erorr=1";</script>';	

   }
 else
    {
		
$query = "UPDATE `user` SET `password` = '$password'  WHERE `user_name` = '$user_name' AND `email` = '$email' ";
$result= mysql_query($query,$sql);

$query = "SELECT * FROM `user`   WHERE `user_name` = '$user_name' AND `email` = '$email' ";
$result= mysql_query($query,$sql);
$row=mysql_fetch_array($result);

$replay_subject = '';
$remsgtext = "Hi $user_name , your new password: ".$password."\r\n"."From Admin.";
$cdate=date('Y-m-d H:i:s');
$type = 0;
$unread = 1;
$id_to= $row['id'];
$sql1 = "INSERT INTO messages  VALUES (NULL,0 , '$cdate', 'New Password', '$remsgtext' ,$id_to , $type , $unread, NULL);";

$result = mysql_query($sql1,$sql);

$msg=  "Your account @ Book Exchange website:\r\n username: ".$user_name."\r\n New Password: ".$password;
$subject = "Book Exchange - New Password";
$txt = $msg;
echo '<script>window.location="index.php?up_pass=1";</script>';

	mail($email,$subject,$txt);}
?>