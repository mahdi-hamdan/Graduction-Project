<?php
if (file_exists('tables/msg_sent.json'))
unlink('tables/msg_sent.json');
include('conn.php');
$id = $_SESSION["userid"] ;
// sent only
$sql = "SELECT * FROM `messages` where type = 0 and id_from=".$id;
$posts = array();
$result=mysql_query($sql);
$num=mysql_num_rows($result);
for($i=0;$i<$num;$i++)
{
    $row=mysql_fetch_array($result);
    $id=$row['id'];
    if($row['unread']==1)
    $subject="<p class='alert bg-success' style='font-size:20px; font-weight:bold; border-radius:0px;'>".$row['subject']."<span style='font-style: italic; padding: 10px; color:#000; border-radius:26px; background: rgb(0, 255, 149);margin-left: 10px;font-size:11px;'>Unread</span></p>";
    else
    $subject="<p >".$row['subject']."</p>";

    $sid = $row['id_from'];
    $sql22 = "select * from user where id = ".$sid;
    $result1=mysql_query($sql22);
    $row22=mysql_fetch_array($result1);
    $name = $row22['full_name'];
    $dt = $row['c_date'];
    $del = "<a href='msg_del.php?id=".$id."' class='alert bg-danger' style='display:inline-block;margin-bottom: 0px; margin-right:5px;margin-left:5px; border-radius:100px;'><svg style='margin-right: 0px;' class='glyph stroked cancel' ><use xlink:href='#stroked-cancel'/></svg></a>";
    $replay = "<a href='msg_replay.php?id=".$id."' class='alert bg-danger' style='display:inline-block;    margin-bottom: 0px; margin-right:5px;margin-left:5px; border-radius:100px;'><svg style='margin-right: 0px;' class='glyph stroked two messages' ><use xlink:href='#stroked-two-messages'/></svg></a>";
    $posts[] = array('id'=> $id , 'subject'=>$subject, 'from'=> $name, 'dt'=> $dt , 'replay'=>$replay.$del );
}
$fp = fopen('tables/msg_sent.json', 'w');
fwrite($fp, json_encode($posts));
fclose($fp);
?>