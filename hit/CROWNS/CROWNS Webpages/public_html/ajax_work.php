<?php
include("connect.inc.php");	
//mysql_select_db('a5363301_crowns');
//echo "hi";
$type = $_REQUEST['type'];

$response = array();

switch ($type) {
    case "block":
        $block = (int)$_GET['block_id'];
		$query  = "SELECT * FROM `block` WHERE `id` ='".$block."'";
		//echo $query;
		$result= $conn->query($query);
		while($row=$result->fetch_assoc()) {
			$response[] = $row;
		}
		echo json_encode($response);
        break;
		
		case "panchayat":
        $panchayat = (int)$_GET['panchayat_id'];
		$query  = "SELECT * FROM `panchayat_municipalaty` WHERE `id` ='".$panchayat."'";
		//echo $query;
		$result= $conn->query($query);
		while($row=$result->fetch_assoc()) {
			$response[] = $row;
		}
		echo json_encode($response);
        break;
		
		case "village":
        $village = (int)$_GET['village_id'];
		$query  = "SELECT * FROM `village` WHERE `id` ='".$village."'";
		//echo $query;
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