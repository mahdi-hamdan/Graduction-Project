<?php
include('../conn.php');
$id=$_POST['id'];
$query = "SELECT * FROM `courses` WHERE dept_id=".$id;
$options ="<option value=''>-- SELECT Subject --</option>";
$result=mysql_query($query);
        $num=mysql_num_rows($result);
        for($i=0;$i<$num;$i++)
        { 
			$row = mysql_fetch_array($result); 
			$options = $options."<option value='".$row['id']."'>".$row['name']."</option>";
		}
echo $options;
?>