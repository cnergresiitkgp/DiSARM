<?php
include("connect.inc.php");	
//mysql_select_db('a5363301_crowns');
//echo "hi";
$type = $_REQUEST['type'];

$response = array();

switch ($type) {
    case "district":
        $state = (int)$_GET['state_id'];
		$query  = "SELECT `id`, `district` FROM `district` WHERE `stateid` ='".$state."'";
		//echo $query;
		$result= $conn->query($query);
		while($row=$result->fetch_assoc()) {
			$response[] = $row;
		}
		echo json_encode($response);
        break;
		
		case "block":
        $district = (int)$_GET['district_id'];
		$query  = "SELECT `id`, `block` FROM `block` WHERE `districtid` ='".$district."'";
		$result= $conn->query($query);
		while($row=$result->fetch_assoc()) {
			$response[] = $row;
		}
		echo json_encode($response);
        break;
		
		case "panchayat":
        $block = (int)$_GET['block_id'];
		$query  = "SELECT `id`, `panchayat` FROM `panchayat_municipalaty` WHERE `blockid` ='".$block."'";
		$result= $conn->query($query);
		while($row=$result->fetch_assoc()) {
			$response[] = $row;
		}
		echo json_encode($response);
        break;
		
		case "village":
        $panchayat = (int)$_GET['panchayat_id'];
		$query  = "SELECT `id`, `village` FROM `village` WHERE `panchayatid` ='".$panchayat."'";
		$result= $conn->query($query);
		while($row=$result->fetch_assoc()) {
			$response[] = $row;
		}
		echo json_encode($response);
        break;
		
    default:
        echo "Invalid type!";
		break;
}
?>