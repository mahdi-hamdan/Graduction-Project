<?php
include("conn.php");
$id = $_POST['id'];
$Name = $_POST['cname'].trim('') ;
$dept = $_POST['dept'].trim('') ;
$sub = $_POST['sub_id'].trim('') ;
$info = $_POST['info'].trim('') ;
if($sub !=''){
$sql = "UPDATE `book` SET `subject_id` = $sub  WHERE `id` = $id";
$qcc=mysql_query($sql);
}

if($Name!=''){
$sql = "UPDATE `book` SET `name` = '$Name' WHERE `id` = $id";
$qcc=mysql_query($sql);
}

if($dept!=""){
$sql = "UPDATE `book` SET `dept_id` = $dept  WHERE `id` = $id";
$qcc=mysql_query($sql);
}
if($info!=''){
$sql = "UPDATE `book` SET info = '$info' WHERE `id` = $id";
$qcc=mysql_query($sql);
}


echo '<script>window.location="books.php";</script>';

?>