<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("../conn.php");
global $sql;

$id=  $_SESSION["userid"];
$nameuser=$_SESSION["name"];
$Name = $_POST['cname'] ;
$dept=$_POST['dept'] ;
$subject=$_POST['sub_id'] ;
$info=$_POST['info'] ;

$soft = 0;
if(isset($_POST['software']))
$soft=$_POST['software'] ;

$hard = 0;
if(isset($_POST['hardware']))
	$hard=$_POST['hardware'] ;
	
$content_type = 0;
if(isset($_POST['contenttype']))
	$content_type =$_POST['contenttype'] ;
	
$type = 0;
if(($soft==1) && ($hard==1)){
$type = 3;
}else{
if($soft==1)
$type = 2;
else if($hard==1){
$type = 1;}
}
	
$cdate=date('Y-m-d H:i:s');

$query = "INSERT INTO `book` (`id`, `name`, `subject_id`, `dept_id`, `info`, `type`, `cdate`, `user_id`,`full_nameuser`, `status`) VALUES (NULL,'$Name' , '$subject', '$dept',  '$info' ,'$type' , '$cdate' , '$id','$nameuser' , '1');";
$qcc=mysql_query($query,$sql);
$user_id = mysql_insert_id($sql);
if ($user_id != 0){
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["uploaded"]["name"]);

// Check file size
if ($_FILES["uploaded"]["size"] != 0) {
    if (move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_file)) {
        $query ="INSERT INTO `course_content_software` (`id`, `link`, `book_id`, `user_id` , `type`) VALUES (NULL, '$target_file', '$user_id', '$id' , '$content_type');";
        $qcc=mysql_query($query,$sql);
    } 
}
}

echo '<script>
window.location="uploaded_books.php#add_new_book?added_book=1";
</script>';

?>