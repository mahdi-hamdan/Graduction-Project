<?php session_start();
include('../conn.php');
$id=$_POST['id'];
if($id!=''){
$query = "SELECT * FROM `book` where subject_id=".$id;

//$query = "SELECT * FROM `book` , course_content_software WHERE course_content_software.book_id = book.id AND book.subject_id=".$id." group by book.name";

$options ="
<table class='datatable'> <thead>
<tr><th>Book Title</th>
<th>Information</th>";


if($_SESSION["type"]==1 || $_SESSION["type"]==0 )
{
	$options=$options."<th style='width: 700px !important;'>Options</th>";
}else {
$options =$options."<th style='width: 520px !important;'>Options</th>";}

$options =$options."<th >&#160; &#160;  Uploaded By &#160;  &#160; </th>
</tr>
</thead>
";
$result=mysql_query($query);
        $num=mysql_num_rows($result);
        for($i=1;$i<=$num;$i++)
        { 
			$row = mysql_fetch_array($result); 
			//$options = $options."<li><a style='color:#fff;' target='_blank' href='../".$row['link']."'>File".$i."</a></li>";
			$query2 = "SELECT * FROM course_content_software WHERE book_id =".$row['id'];
			$result2=mysql_query($query2);
			$num2=mysql_num_rows($result2);
			//$options = $options. "<tr><td>".$row['name'].": <br/><hr/>";
			//for($j=1;$j<=$num2;$j++){
			$row2 = mysql_fetch_array($result2); 
			$link_title = explode("/", $row2['link']);
			if(sizeof($link_title)>1)
			$link_title = $link_title[1];
				//$options = $options. "<p><a style='    width: inherit !important;color:#fff;' target='_blank' href='../".$row2['link']."'>".$link_title."</a></p>";
				
				$options = $options. "<tr>
  <td>".$row['name']."</td>
  <td>".$row['info']."</td>
  <td>";
    if (($row['type'] ==2) ||  ($row['type'] ==3)){ 
	
	$options = $options." <a href='software.php?id=".$row['id']."'>Software files</a> ";
	
	}
	  if (($row['type'] ==1) ||  ($row['type'] ==3)){ 
      if($row['user_id']==$_SESSION["userid"] ){
	  $options = $options."<a>uploaded by you</a>";}
		  else 
		  {
		
			  $options = $options."<a href='msg_book_get.php?id=".$row['id']."'>Get Book</a>";
			  
	  }}
		
  //if ($_SESSION["type"]==1){
	$options = $options."<a href='book_cooments.php?id=".$row['id']."'>View Comments</a>";
	if($_SESSION["type"]==1 || $_SESSION["type"]==0 ){
  $options = $options."<a href='Add_cooments_book.php?id=".$row['id']."'>Add Comments</a></td>";
	
	}else {
		
		  $options = $options."</td>";
		
	}
	
	
	
  //}else{
	//$options= $options. "</td></tr>";
  //}
			//}
		//	$options = $options."</tr>";
		$options = $options."<td style='text-transform: capitalize;'>".$row['full_nameuser']."</td></tr>";
		
		}
		
$options = $options."</table>";
echo $options ;
}
?>