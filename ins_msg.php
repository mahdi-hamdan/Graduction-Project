<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("conn.php");
global  $sql;

$userid=  $_SESSION["userid"];
$sid=  $_POST["std_id"];
$replay_subject = $_POST['replay_subject'];
$remsgtext = $_POST['remsgtext'];
$cdate=date('Y-m-d H:i:s');
$type = 0;
$unread = 1;
$old_msg = $_POST['msg_id'];
$sql1 = "INSERT INTO messages  VALUES (NULL,$userid , '$cdate', '$replay_subject', '$remsgtext' ,$sid , $type , $unread, NULL);";

$result = mysql_query($sql1,$sql);
// get inserted id
$inserted_replaye = mysql_insert_id($sql);

$sql2 = "update messages set unread=0 , msg_replay_id =". $inserted_replaye." where id =".$old_msg;
mysql_query($sql2,$sql);
         
echo '<script>
window.location="msg.php";
</script>'; 

?>