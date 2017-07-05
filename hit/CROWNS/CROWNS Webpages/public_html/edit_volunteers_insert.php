<?php
include("connect.inc.php");	
SESSION_START();
//echo '<pre>', print_r($_POST), '</pre>';die; 
$id = $_POST[id];
$contact_number = $_POST['con_number'];
$district = $_POST['district'];
$state = $_POST['state'];
$block = $_POST['block'];
$panchayat = $_POST['panchayat'];
$village = $_POST['village'];
$skill = $_POST['skills']; 
$expart = $_POST['train'];
//$affiliation = $_POST['affiliation'];
//$designation = $_POST['designation'];
$designation = 'Volunteers';
/*$work_block = $_POST['block'];
$work_panchayat = $_POST['panchayat'];
$work_village = $_POST['village'];*/

echo "id baby=".$id;
$sql_state = "SELECT `state` FROM `state` WHERE `id`= $state";
$sql_district = "SELECT `district` FROM `district` WHERE `id`= $district";
$sql_block = "SELECT `block` FROM `block` WHERE `id`= $block";
$sql_panchayat = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id`= $panchayat";
$sql_village = "SELECT `village` FROM `village` WHERE `id`= $village";

/*$output = mysql_query($sql_state,$connect);

$output1 = mysql_query($sql_district,$connect);
$output2 = mysql_query($sql_block,$connect);
$output3 = mysql_query($sql_panchayat,$connect);
$output4 = mysql_query($sql_village,$connect);*/

$output = $conn->query($sql_state);
$output1 = $conn->query($sql_district);
$output2 = $conn->query($sql_block);
$output3 = $conn->query($sql_panchayat);
$output4 = $conn->query($sql_village);

/*$result= mysql_fetch_assoc($output);
$result1= mysql_fetch_assoc($output1);
$result2= mysql_fetch_assoc($output2);
$result3= mysql_fetch_assoc($output3);
$result4= mysql_fetch_assoc($output4);*/

$result= $output->fetch_assoc();
$result1= $output1->fetch_assoc();
$result2= $output2->fetch_assoc();
$result3= $output3->fetch_assoc();
$result4= $output4->fetch_assoc();

$track_state = $result["state"];
$track_district = $result1["district"];
$track_block = $result2["block"];
$track_panchayat = $result3["panchayat"];
$track_village = $result4["village"];


echo "<br/> number=".$contact_number;
echo "<br/> state=".$track_district;
echo "<br/> block=".$track_block;
echo "<br/> panchayat=".$track_panchayat;
echo "<br/> village = ".$track_village;
echo "<br/>skill =".$skill;
echo "<br/> expart =".$expart;
echo "<br/>affiliation =".$affiliation;
echo "<br/> designation =".$designation;


/*$sql_block1 = "SELECT `block` FROM `block` WHERE `id`= $work_block";
$sql_panchayat1 = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id`= $sql_panchayat";
$sql_village1 = "SELECT `village` FROM `village` WHERE `id`= $sql_village";

$output5 = mysql_query($sql_block1,$connect);
$output6 = mysql_query($sql_panchayat1,$connect);
$output7 = mysql_query($sql_village1,$connect);

$resul5= mysql_fetch_assoc($output5);
$result6= mysql_fetch_assoc($output6);
$result7= mysql_fetch_assoc($output7);

$work_block = $result5["work_block"];
$work_panchayat = $result6["work_panchayat"];
$work_village = $result7["work_village"];

echo "<br/> block =".$block;
echo "<br/> panchayat=".$panchayat;
echo "<br/> village = ".$village;*/
$name = $_SESSION['firstname'];
echo $name;
$sql_affiliation = "SELECT `affiliation` FROM `register_master` WHERE `firstname`= '$name'";
echo $sql_affiliation;
//$output_affiliation = mysql_query($sql_affiliation,$connect);
$output_affiliation = $conn->query($sql_affiliation);

//$result_affiliation= mysql_fetch_assoc($output_affiliation);
$result_affiliation= $output_affiliation->fetch_assoc();
$affiliation = $result_affiliation['affiliation']; 
//echo $affiliation;die;
$sql = "UPDATE `volunteer_master` SET `state`='$track_state',`district`='$track_district',`block`='$track_block',`panchayat`='$track_panchayat',`village`='$track_village',
`contact_number`='$contact_number',`Designation`='$designation',`skills`='$skill',`expertise`='$expart' WHERE `volunteer_id` = '".$id."'";  

$sql_email = "SELECT `email` FROM `volunteer_master` WHERE `volunteer_id` = '".$id."'";
$query_email = $conn->query($sql_email);
$output_email = $query_email->fetch_array();
$result_email = $output_email["email"];
$sql_register = "UPDATE `register_master` SET `phone` = '$contact_number',`state`='$state',`district`='$district',`block`='$block', `panchayat`='$panchayat',`village`='$village' WHERE `email` = '$result_email'";
echo $sql;
//die;
//$result_data=mysql_query($sql,$connect);
$result_data=$conn->query($sql);
$result_update = $conn->query($sql_register);
echo print_r($result_data);
echo $result_data;
if(($result_data)&&($result_update)){	
							
								header("location:manage_volunteers.php?flag=true");
									
									
							}
							else {	
									header("location:manage_volunteers.php?flag=false");
								}

?>