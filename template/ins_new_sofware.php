<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("../conn.php");
global $sql;

$id=  $_SESSION["userid"];
$book_id = $_POST['bookid'];	
$content_type = 0;
if(isset($_POST['contenttype']))
	$content_type =$_POST['contenttype'] ;
	
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["uploaded"]["name"]);

// Check file size
if ($_FILES["uploaded"]["size"] != 0) {
    if (move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_file)) {
        $query ="INSERT INTO `course_content_software` (`id`, `link`, `book_id`, `user_id` , `type`) VALUES (NULL, '$target_file', '$book_id', '$id' , '$content_type');";
        $qcc=mysql_query($query,$sql);
    } 
}

echo '<script>window.location="software.php?id='.$book_id.'";</script>';

?>