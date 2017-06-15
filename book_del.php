<?php
include("conn.php");
$id=$_GET['id'];
$qcc=mysql_query("delete from `book` where id='".$id."'");
echo '<script>
window.location="books.php?succ=1";
</script>';
?>