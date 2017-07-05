<?php
include("connect.inc.php");	
SESSION_START();
echo '<pre>', print_r($_POST), '</pre>';//die; 
$id = $_POST['id'];
$contact_number = $_POST['con_number'];
$agency_name = $_POST['agency_name'];
$district = $_POST['district'];
$state = $_POST['state'];
$block = $_POST['block'];
$panchayat = $_POST['panchayat'];
$village = $_POST['village'];
$skill = $_POST['skills']; 
$workLocations = $_POST['workLocations'];

echo "id baby=".$id;
$sql_state = "SELECT `state` FROM `state` WHERE `id`= $state";
$sql_district = "SELECT `district` FROM `district` WHERE `id`= $district";
$sql_block = "SELECT `block` FROM `block` WHERE `id`= $block";
$sql_panchayat = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id`= $panchayat";
$sql_village = "SELECT `village` FROM `village` WHERE `id`= $village";

$output = $conn->query($sql_state);
$output1 = $conn->query($sql_district);
$output2 = $conn->query($sql_block);
$output3 = $conn->query($sql_panchayat);
$output4 = $conn->query($sql_village);



$result= $output->fetch_assoc();
$result1= $output1->fetch_assoc();
$result2= $output2->fetch_assoc();
$result3= $output3->fetch_assoc();
$result4= $output4->fetch_assoc();

$track_state = $result["state"];
echo $track_state;
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


echo "<br/> workLocations =".$workLocations;

$sql_search = "SELECT `email` FROM `agency_master` WHERE `agency_id`='$id'";
$search_result = $conn->query($sql_search);
$search_output =  $search_result->fetch_array();
$result_email = $search_output["email"];
echo $result_email;

$sql = "UPDATE `agency_master` SET `name`='$agency_name',`state`='$state',`district`='$district',`block`='$block',
`panchayat`='$panchayat',`village`='$village',`contact_no`='$contact_number',`work_palces`='$workLocations',
`expertise`='$skill' WHERE `agency_id`='$id'";

echo $sql;

//print_r($_SESSION);
//$server_email = $_SESSION['username'];
//echo $server_email;

$sql_update = "UPDATE `register_master` SET `phone` = '$contact_number',`state`='$state',`district`='$district',`block`='$block', `panchayat`='$panchayat',`village`='$village' WHERE `email` = '$result_email'";
echo $sql_update;
//die;
$result_data = $conn->query($sql);
$update_data = $conn->query($sql_update);
if(($result_data) && ($update_data)){	
							
	header("location:managn.php?flag=true");
	}
else {	
	header("location:managn.php?flag=false");
	}

//die;


/*$sql_search = "SELECT * FROM `register_master` WHERE `email` = $email";
			$search_result = $conn->query($sql_search);
			$search_email = $search_result->fetch_array();
			$result_email = $search_email["email"];
			if($result_email == $email){

$sql = "UPDATE `agency_master` SET `name`='$agency_name',`state`='$state',`district`='$district',`block`='$block',
`panchayat`='$panchayat',`village`='$village',`contact_no`='$contact_number',`work_palces`='$workLocations',
`expertise`='$skill' WHERE `agency_id`='$id'";

echo $sql;

}
else{
$sql_search = "SELECT `email` FROM `agency_master` WHERE `agency_id`='$id'";
$search_result = $conn->query($sql_search);
$search_output =  $search_result->fetch_array();
$result_email = $search_output["email"];
echo $result_email;

$sql = "UPDATE `agency_master` SET `name`='$agency_name',`state`='$state',`district`='$district',`block`='$block',
`panchayat`='$panchayat',`village`='$village',`contact_no`='$contact_number',`work_palces`='$workLocations',
`expertise`='$skill' WHERE `agency_id`='$id'";

$sql_update = "UPDATE `register_master` SET `state`='$state',`district`='$district',`block`='$block', `panchayat`='$panchayat',`village`='$village' WHERE `email` = '$result_email'";
echo $sql_update;
//die;
$result_data = $conn->query($sql);
$update_data = $conn->query($sql_update);
echo ("testing"); 
echo "result_dta = ".$result_data;
echo ("%%%%%SSSSS");
if(($result_data) && ($update_data)){	
							
	header("location:managn.php?flag=true");
	}
else {	
	header("location:managn.php?flag=false");
	}
}*/
?>