<?php
include("conn.php");
$id=$_GET['id'];
$qcc=mysql_query("delete from `user` where id=".$id);
echo "delete from `user` where id=".$id;

echo '<script>window.location="students.php";</script>';
?>