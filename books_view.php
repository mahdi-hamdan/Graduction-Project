<?php
if (file_exists('tables/books1.json'))
unlink('tables/books1.json');
include('conn.php');
$sql = "SELECT * FROM `book` WHERE dept_id=1 ";
$posts = array();
$result=mysql_query($sql);
$num=mysql_num_rows($result);
for($i=0;$i<$num;$i++)
{
    $row=mysql_fetch_array($result);
    $id=$row['id'];
    $name=$row['name'];
    $sub_id = $row['subject_id'];
    $sql1 = "SELECT name from  courses where id=".$sub_id;
    $result1=mysql_query($sql1);
    $row1=mysql_fetch_array($result1);
    $sub_id = $row1['name'];
    $del = "<a href='book_del.php?id=".$id."'>Delete</a>";
    $up = "<a href='book_update.php?id=".$id."'>Update</a>";
    $view_content = "<a href='software.php?id=".$id."'>Software</a>";
    $posts[] = array('id'=> $id, 'name'=> $name, 'sub'=> $sub_id , 'options'=> $del." | ".$up ." | ".$view_content);
}
$fp = fopen('tables/books1.json', 'w');
fwrite($fp, json_encode($posts));
fclose($fp);
?>