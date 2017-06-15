<?php session_start();
include('../conn.php');
$usernmae = $_POST['name_user'];
$fullname = $_POST['full_name'];
$email = $_POST['email_user'];
$info = $_POST['info'];
$pass=$_POST['pass_word'];
$query ="update user  set user_name ='$usernmae' , full_name='$fullname' , password='$pass' ,email='$email', info='$info' where id=".$_SESSION["userid"];
$result=mysql_query($query);
$query ="select * from `user` where isdelete=0 and user_name='".$usernmae."' ";
$result=mysql_query($query);
$num=mysql_num_rows($result);
if($num>0)
{
    $row=mysql_fetch_array($result);
    $update_sql = "update `user` set online = 1 where id = ".$row['id'];
    mysql_query($update_sql);
    $_SESSION["userid"] = $row['id'];
    $_SESSION["name"] = $row['full_name'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["info"] = $row['info'];
	$_SESSION["type"] = $row['type'];
	$_SESSION["password"]=$row['password'];
	$_SESSION["username"] = $row['user_name'];
}

echo '<script>
window.location="profile.php?sucess_up=1";
</script>';

?>