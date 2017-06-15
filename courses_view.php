<?php
if (file_exists('tables/courses.json'))
unlink('tables/courses.json');
include('conn.php');
$sql = "SELECT * FROM `courses` WHERE dept_id = 1";
$posts = array();
$result=mysql_query($sql);
$num=mysql_num_rows($result);
for($i=0;$i<$num;$i++)
{
    $row=mysql_fetch_array($result);
    $id=$row['id'];
    $name=$row['name'];
    $dept_id = $row['dept_id'];
    $sql1 = "SELECT name from  departement where id=".$dept_id;
    $result1=mysql_query($sql1);
    $row1=mysql_fetch_array($result1);
    $dept_id = $row1['name'];
    $del = "<a href='course_del.php?id=".$id."'>Delete</a>";
    $up = "<a href='course_update.php?id=".$id."'>Update</a>";
    $posts[] = array('id'=> $id, 'name'=> $name,  'options'=> $del." | ".$up );
}
$fp = fopen('tables/courses.json', 'w');
fwrite($fp, json_encode($posts));
fclose($fp);
?>