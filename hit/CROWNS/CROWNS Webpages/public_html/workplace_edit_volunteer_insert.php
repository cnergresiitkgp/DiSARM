<?php
//include("connect.php");	
include("connect.inc.php");	
echo"workplace_edit_volunteer_insert.php";

$id = $_POST['id'];
//echo " $$$$$$$$$$edited id=";
echo $id;

$sql_data = "SELECT `volunteer_id`, `email`, `work_block`, `work_panchayat`, `work_village` FROM `volunteer_master` WHERE `volunteer_id` = '".$id."'";
echo $sql_data;
$query_result = $conn->query($sql_data);
$output = $query_result->fetch_assoc();
$email = $output['email'];
echo $email;

function mail_to(){
$to = $email;
echo "*****";
echo $to;
$subject = 'Work location change';
$message = 'Your new work location is waiting for u';
//$headers = 'From: webmaster@example.com' . "\r\n" .
//    'Reply-To: webmaster@example.com' . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message);	
}

mail_to();
$work_block = $_POST['block'];
echo "<br/>";
echo $work_block;
echo "<br/>";
$work_panchayat = $_POST['panchayat'];
echo $work_panchayat;
echo "<br/>";
$work_village = $_POST['village'];
echo $work_village;

$sql_block = "SELECT `block` FROM `block` WHERE `id`= $work_block";
//$get_block = mysql_query($sql_block,$connect);
$get_block = $conn->query($sql_block);
//$result= mysql_fetch_assoc($get_block);
$result= $get_block->fetch_assoc();
$track_block = $result["block"];
echo "<br/>";
echo $track_block;
$sql_panchayat = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id`= $work_panchayat";
//$get_panchayat = mysql_query($sql_panchayat,$connect);
$get_panchayat = $conn->query($sql_panchayat);
//$result1= mysql_fetch_assoc($get_panchayat);
$result1= $get_panchayat->fetch_assoc();
$track_panchayat = $result1["panchayat"];
echo "<br/>";
echo $track_panchayat;
$sql_village = "SELECT `village` FROM `village` WHERE `id`= $work_village";
echo "<br/>";
//$get_village = mysql_query($sql_village,$connect);
$get_village = $conn->query($sql_village);
//$result2= mysql_fetch_assoc($get_village);
$result2= $get_village->fetch_assoc();
$track_village = $result2["village"];
echo "<br/>";
echo $track_village;

$sql = "UPDATE `volunteer_master` SET `work_block`='$track_block',`work_panchayat`='$track_panchayat',`work_village`='$track_village' WHERE `volunteer_id` = '".$id."'";
echo "<br/>";
echo $sql;
//$result_data=mysql_query($sql,$connect);
$result_data=$conn->query($sql);
echo print_r($result_data);
echo $result_data;



if($result_data){	

	header("location:test_mail.php?id=$id");
	}
else {	
	header("location:manage_volunteers.php?flag=false");
	}

?>