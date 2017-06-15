<?php 
session_start();
include("conn.php");
global  $sql;
$userid=  $_SESSION["userid"];
$email=   $_SESSION['email'];
$msg=  $_POST["message"];
$to = $_POST['email'];
$subject = $_POST['name']; 
 $from_mail = $email.'<'.$email.'>';
 	    $from = $from_mail;
$headers = 'From: ' . $from . "\r\n";
$txt = $msg;


mail($to,$subject,$txt,$headers);
if(isset($_SESSION["userid"] )){
echo '<script>
window.location="index1.php?contactus=1";
</script>'; 
}else{
	echo '<script>
window.location="index.php?contactus=1";
</script>'; 
}

?>