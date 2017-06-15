<?php
if (file_exists('tables/student.json'))
unlink('tables/student.json');
include('conn.php');

$sql = "SELECT  user.id id  , user.user_name user_name , user.full_name full_name , user.email email , departement.name dept FROM   student , departement , user  WHERE student.dept_id = departement.id and  student.user_id = user.id";


$posts = array();
$result=mysql_query($sql);
$num=mysql_num_rows($result);
for($i=0;$i<$num;$i++)
{
    $row=mysql_fetch_array($result);
    $id=$row['id'];
    $name=$row['full_name'];
    $dept=$row['dept'];
    $user_name=$row['user_name'];
    $email=$row['email'];


    $del = "<a href='std_del.php?id=".$id."'>Delete</a>";
    $up = "<a href='std_update_info.php?id=".$id."'>Update</a>";
    $posts[] = array('id'=> $id, 'name'=> $name, 'dept'=> $dept , 'user_name'=> $user_name , 'email'=> $email  , 'option'=>$del." | ".$up );
}

// generate json file
$fp = fopen('tables/student.json', 'w');
fwrite($fp, json_encode($posts));
fclose($fp);

//unset($_GET['id_course']);
?>