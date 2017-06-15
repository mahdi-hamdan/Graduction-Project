<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("conn.php");
global $sql;

$id=  $_SESSION["userid"];
$Name = $_POST['cname'] ;
$dept=$_POST['dept'] ;
$subject=$_POST['sub_id'] ;
$info=$_POST['info'] ;
	
$cdate=date('Y-m-d H:i:s');



$query = "INSERT INTO `book` (`id`, `name`, `subject_id`, `dept_id`, `info`, `type`, `cdate`, `user_id`, `status`) VALUES (NULL,'$Name' , '$subject', '$dept',  '$info' ,'1' , '$cdate' , '$id' , '1');";
$qcc=mysql_query($query,$sql);
$user_id = mysql_insert_id($sql);
if ($user_id != 0){
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["uploaded"]["name"]);

// Check file size
if ($_FILES["uploaded"]["size"] != 0) {
    if (move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_file)) {
        $query ="INSERT INTO `course_content_software` (`id`, `link`, `book_id`, `user_id`) VALUES (NULL, '$target_file', '$user_id', '$id');";
        $qcc=mysql_query($query,$sql);
    } 
}
}

echo '<script>
window.location="books.php?ins=1";
</script>';


?>