<?php
include("connect.inc.php");	
$id = $_GET['id'];
//echo "this is delete page";
echo "id=".$id;
$sql = "UPDATE `volunteer_master` SET `is_deleted`='y' WHERE `volunteer_id` = '".$id."'";  
echo  $sql;
//$get_data = mysql_query($data);
$get_data = $conn->query($data);		

//$result_data=mysql_query($sql,$connect);
$result_data = $conn->query($sql);
echo print_r($result_data);
echo $result_data;
if($result_data){	
							
								header("location:manage_volunteers.php?flag=true");
									
									
							}
							else {	
									header("location:manage_volunteers.php?flag=false");
								}
echo '<pre>', print_r($_POST), '</pre>';die;	
	
	

?>
