<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("../conn.php");
$id_book = $_POST['book_id'];
$comment = $_POST['comment'];
$userid=  $_SESSION["userid"];//commented by user
$cdate=date('Y-m-d H:i:s');
$sql = "INSERT INTO `comment` (`id`, `text`, `academic_stuff_id`, `cdate`, `book_id`) VALUES (NULL, '$comment', '$userid', '$cdate', '$id_book');";
$result = mysql_query($sql);
echo '<script>
window.location="book_cooments.php?comment_send=1&id='.$id_book.'";</script>'; 

?>