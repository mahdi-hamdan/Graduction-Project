<?php session_start();
include('conn.php');
$usernmae = $_POST['email'];
$password = $_POST['password'];
$query ="select * from `user` where  type=0 and user_name='".$usernmae."' and password='".$password."'";
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
		    $_SESSION["password"] = $row['password'];
		$_SESSION["type"] = $row['type'];
			$_SESSION["username"] = $row['user_name'];

	
    echo '<script>
window.location="index1.php";
</script>';

}else
{ 

echo '<script>
window.location="index.php?err=1";
</script>';
}
?>