<?php
if (file_exists('tables/doctors.json'))
unlink('tables/doctors.json');
include('conn.php');

$sql = "SELECT  * FROM   user  WHERE type=1 ORDER BY `user`.`id` DESC";


$posts = array();
$result=mysql_query($sql);
$num=mysql_num_rows($result);
for($i=0;$i<$num;$i++)
{
    $row=mysql_fetch_array($result);
    $id=$row['id'];
    $name=$row['full_name'];
    $user_name=$row['user_name'];
    $email=$row['email'];
    $del = "<a href='academic_stuff_del.php?id=".$id."'>Delete</a>";
    $up = "<a href='academic_stuff_update_info.php?id=".$id."'>Update</a>";
    $posts[] = array('id'=> $id, 'name'=> $name, 'user_name'=> $user_name , 'email'=> $email  , 'option'=>$del." | ".$up );
}

// generate json file
$fp = fopen('tables/doctors.json', 'w');
fwrite($fp, json_encode($posts));
fclose($fp);

//unset($_GET['id_course']);
?>