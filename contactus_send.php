<?php   
 session_start();
include("conn.php");
global  $sql;
$userid=  $_SESSION["userid"];

$msg=  $_POST["message"];

$to = $_POST['email'];
$subject = $_POST['name'];
$txt = $msg;
$headers = 'From: ' . "exchaningbooks@gmail.com" . "\r\n";

mail($to,$subject,$txt,$headers);

echo '<script>
window.location="contactus.php?suc=1";
</script>'; 

?>