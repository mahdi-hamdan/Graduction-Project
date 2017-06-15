<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("../conn.php");
global $sql;

$id=  $_SESSION["userid"];
$Name = $_POST['cname'] ;
$dept=$_POST['dept'] ;
$subject=$_POST['sub_id'] ;
$info=$_POST['info'] ;
$cdate=date('Y-m-d H:i:s');
$query = "INSERT INTO `book` (`id`, `name`, `subject_id`, `dept_id`, `info`, `type`, `cdate`, `user_id`, `status`) VALUES (NULL,'$Name' , '$subject', '$dept',  '$info' ,'4' , '$cdate' , '$id' , '1');";
$qcc=mysql_query($query,$sql);
$user_id = mysql_insert_id($sql);


echo '<script>
window.location="suggestiont_books.php?ins=1";
</script>';


?>