<?php
include("conn.php");
$id=$_GET['id'];
$qcc=mysql_query("delete from `courses` where id='".$id."'");
echo '<script>
window.location="courses.php?succ=1";
</script>';
?>