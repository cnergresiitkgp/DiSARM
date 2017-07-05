<?php

//include("connect.php");
include("connect.inc.php");
SESSION_START();	
echo '<pre>', print_r($_POST), '</pre>';//`die;
//SESSION_START();
echo "********";
//echo $_SESSION['firstname'];
//echo $_SESSION['password'];
$password = $_SESSION['password'];
$email = $_SESSION['username'];
$get_lastName = "SELECT * FROM `register_master` WHERE `email` = '$email'";
//echo $get_lastName;
//$output=mysql_query($get_lastName,$connect);
$output=$conn->query($get_lastName);
//$result= mysql_fetch_assoc($output);
$result= $output->fetch_assoc();
//echo $result["firstname"];
//echo $result["lastname"];
//echo $result["phone"];//die;

if(isset($_POST['sub'])) {
$firstname = $result["firstname"];
$lastname = $result["lastname"];
$requested_by = $firstname.' '.$lastname;
$phone = $result["phone"];
$landmark = $_POST['landmark'];
$state = $_POST['state'];
$district = $_POST['district'];
$block = $_POST['block'];
$panchayat = $_POST['panchayat'];
$village = $_POST['village'];
$resource_name = $_POST['resource'];
$unit = $_POST['unit'];
$quantity = $_POST['quantity'];
$exact_quantity = $quantity.' '.$unit;
$importance = $_POST['urgency'];
$name = $_SESSION['firstname'];
echo "$$$$".$name;
$email = $_SESSION['username'];
$sql_affiliation = "SELECT `affiliation` FROM `register_master` WHERE `email` = '$email'";
echo $sql_affiliation;
//$output_affiliation = mysql_query($sql_affiliation,$connect);
$output_affiliation = $conn->query($sql_affiliation);

//$result_affiliation= mysql_fetch_assoc($output_affiliation);
$result_affiliation= $output_affiliation->fetch_assoc();
$affiliation = $result_affiliation['affiliation']; 
echo $affiliation;

$arr = $_POST['resource_list'];
	$arrayCount = count($arr);
	echo $arrayCount;
	//die;
	if($arrayCount>0){
	for($i =0;$i<$arrayCount;$i++){
		$req_resorce = $arr[$i];
		echo $req_resorce;
		$value = split ("\,", $req_resorce); 
		$resource_name = "$value[0]";
		$unit_list = "$value[1]";
		$amount = "$value[2]";
		$urgency = "$value[3]";
		echo "********";
		echo $resource_name;
		echo "$$$$$$$$";
		echo $unit_list;
		echo "@@@@@@@@";
		echo $amount;
		echo "/////////";
		echo $urgency;
		$exact_quantity = $amount.' '.$unit_list;
		$date = time();
		$date1 = date("Y-m-d H:i:s", $date);
		//			print_r($_POST);
	//die;
$sql = "INSERT INTO `resource_request`(`resource_name`, `quantity`, `importance`, `Requisition_Date`, `requested_by`, `contact_no`, `Affiliation`, `landmark`, `state`, `district`, `block`, `panchayat_municipality`, `village_area`) 
VALUES ('$resource_name','$exact_quantity','$importance','$date1','$requested_by','$phone','$affiliation','$landmark','$state','$district','$block','$panchayat','$village')";

echo $sql;//die;
//$result_responce=mysql_query($sql,$connect);
$result_responce=$conn->query($sql);
	}
	
	}
	else{
		
		$date2 = time();
		$date3 = date("Y-m-d H:i:s", $date2);
		
		$sql = "INSERT INTO `resource_request`(`resource_name`, `quantity`, `importance`, `Requisition_Date`, `requested_by`, `contact_no`, `Affiliation`, `landmark`, `state`, `district`, `block`, `panchayat_municipality`, `village_area`) 
		VALUES ('$resource_name','$exact_quantity','$importance','$date3','$requested_by','$phone','$affiliation','$landmark','$state','$district','$block','$panchayat','$village')";

		echo $sql;//die;
	//$result_responce=mysql_query($sql,$connect);
		$result_responce=$conn->query($sql);	

		if($result_responce){	
								
			header("location:req_resources.php?flag=true");
		}
		else {	
			header("location:req_resources.php?flag=false");
		} 
		
	}
	
							if($result_responce){	
							
								header("location:req_resources.php?flag=true");
									
									
							}
							else {	
									header("location:req_resources.php?flag=false");
								} 

}
//echo '<pre>', print_r($_POST), '</pre>';die;

?>