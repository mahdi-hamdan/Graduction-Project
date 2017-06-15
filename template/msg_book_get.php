<?php    session_start();
// with session we get the id of doctor and with id we get everything of doctor
include("../conn.php");
global  $sql;
$id_book = $_GET['id'];
$sql0 = "SELECT * FROM  book where id=".$id_book;
$result0 = mysql_query($sql0,$sql);
$row=mysql_fetch_array($result0);
$userid=  $_SESSION["userid"];// user who want the book
$sid=  $row['user_id']; // send to owner book message
$oname = $row['full_nameuser'];
$sname=  $_SESSION["name"];


$sqlm=mysql_query("SELECT * FROM `messages`  WHERE  `id_from`='$userid' AND `id_to`='$sid' ");
if(mysql_num_rows($sqlm)==1)
   {

echo '<script> window.location="uploaded_books.php?order_dupli=1"; </script>'; 


   }else{
$remsgtext =  "from : ".$sname."\n Please I  want  to get a book , that  was installed by :".$oname.".\n book name: ".$row['name']."\n Thank you.";
$cdate=date('Y-m-d H:i:s');
$type = 0;
$unread = 1;

$sql1 = "INSERT INTO messages  VALUES (NULL,$userid , '$cdate', 'Get Book Order from $sname to   $oname  ', '$remsgtext' ,$sid , $type , $unread, NULL);";
$result = mysql_query($sql1,$sql);
// get inserted id
/*
$inserted_replaye = mysql_insert_id($sql);

$sql2 = "update messages set unread=0 , msg_replay_id =". $inserted_replaye." where id =".$old_msg;
mysql_query($sql2,$sql);
*/        
echo '<script>
window.location="uploaded_books.php?order_sent=1";
</script>'; 
   }
?>