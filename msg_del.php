<?php
include("conn.php");
$id=$_GET['id'];
$qcc=mysql_query("delete from `messages` where id='".$id."'");

echo '<script>
window.location="msg.php";
</script>';
?>