<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("conn.php");
global $sql;
$id=  $_SESSION["userid"];
$bookid=  $_POST["bookid"];	
$cdate=date('Y-m-d H:i:s');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["uploaded"]["name"]);
// Check file size
if ($_FILES["uploaded"]["size"] != 0) {
    if (move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_file)) {
        $query ="INSERT INTO `course_content_software` (`id`, `link`, `book_id`, `user_id`) VALUES (NULL, '$target_file', '$bookid', '$id');";
        $qcc=mysql_query($query,$sql);
    } 
}

echo '<script>
window.location="books.php?ins=1";
</script>';


?>