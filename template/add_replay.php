<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("../conn.php");
$id_to = $_POST['to_id'];
$id_from= $_POST['from_id'];
$replay= $_POST['replay'];
$id_writtenby=$_SESSION["userid"];
$message_id=$_POST['message_id'];
$cdate=date('Y-m-d H:i:s');
$sqln = "INSERT INTO `replies` (`id`, `text_replay`, `fromuser_id`, `touser_id`, `cdate`,`message_id`,`written_by_id`) VALUES (NULL, '$replay', '$id_from', '$id_to', '$cdate','$message_id','$id_writtenby');";
$result = mysql_query($sqln);
echo '<script>
window.location="view_replies.php?replay_send=1&idd='.$message_id.'";</script>'; 

?>