<html>
<body>
<?php
include("connect.inc.php");	
session_start();
print_r($_POST);
if(isset($_POST['sub'])) {
	
	/*$arr = $_POST['resource_list'];
	$arrayCount = count($arr);
	echo $arrayCount;
	for($i =0;$i<$arrayCount;$i++){
		echo $arr[$i];
				//echo <br>;
			}*/
if(isset($_SESSION['username']) ){
    //die( "Login required." );			
$firstName = $_SESSION['firstname'];
echo "HEllooooo";
echo $firstName;
$email = $_SESSION['username'];
$data = "SELECT * FROM `register_master` WHERE `email` = '$email'" ;
echo  $data;
$get_data = $conn->query($data);
while($result_data = $get_data->fetch_array()){
	$role_select = $result_data["role"];
	$agency_name = $result_data["firstname"];
	$vol_affiliation = $result_data["affiliation"];
	echo $result_data["role"];
	echo $role_select;
			  }	
}		  
			
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$requested_by = $firstname.' '.$lastname;
$address = $_POST['address'];
$address_land = $address;
$phone = $_POST['con_number'];
$gender = $_POST['state'];
$district = $_POST['district'];
$area = $_POST['block'];
$municipality = $_POST['panchayat'];
$block_area = $_POST['village'];			
$selected_radio = $_POST['gender'];	
if($role_select == 'Admin'){
$affiliation = 'Admin';	
}
if($role_select == 'Agencies'){
$affiliation = $agency_name;	
}
if($role_select == 'Volunteers'){
$affiliation = $vol_affiliation;	
}
if ($selected_radio == 'resour') {
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
		$getValSec = "$value[1]";
		$getValThi = "$value[2]";
		echo "********";
		echo $resource_name;
		echo "$$$$$$$$";
		echo $getValSec;
		echo "@@@@@@@@";
		echo $getValThi;
		
		
		$exact_quantity = $getValThi.' '.$getValSec;
		$date = time();
		$date1 = date("Y-m-d H:i:s", $date);
		$sql = "INSERT INTO `resource_request`(`resource_name`, `quantity`, `Requisition_Date`, `requested_by`, `contact_no`, `Affiliation`, `landmark`, `state`, `district`, `block`, `panchayat_municipality`, `village_area`) 
		VALUES ('$resource_name','$exact_quantity','$date1','$requested_by','$phone','$affiliation','$address_land','$gender','$district','$area','$municipality','$block_area')";
		echo $sql;
		$result=$conn->query($sql);
		print_r ($result);
		}
		//die;
		if(isset($_SESSION['username']) ){
		if(($role_select == 'Agencies')||($role_select == 'Volunteers')||($role_select == 'Admin')){
			if($result){
							
				header("location:helpme_agency.php?flag=true");
			}
			else {	
				header("location:helpme_agency.php?flag=false");
				} 
		
		}	
		else{
							
			if($result){	
				header("location:helpme.php?flag=true");
			}
			else {	
				header("location:helpme.php?flag=false");
			} 
			
}
}

		else{
			if($result){	
				header("location:helpme.php?flag=true");
					}
			else {	
				header("location:helpme.php?flag=false");
					} 
			
		}
}
else{
	print_r($_POST);
	
	$resource_name = $_POST['resource_1'];
	echo $resource_name;
	$exact_quantity = $_POST['quan'].' '.$_POST['unit_1'];
	echo $exact_quantity;
	$date = time();
	$date1 = date("Y-m-d H:i:s", $date);
	//die;
	$sql = "INSERT INTO `resource_request`(`resource_name`, `quantity`, `Requisition_Date`, `requested_by`, `contact_no`, `Affiliation`, `landmark`, `state`, `district`, `block`, `panchayat_municipality`, `village_area`) 
		VALUES ('$resource_name','$exact_quantity','$date1','$requested_by','$phone','$affiliation','$address_land','$gender','$district','$area','$municipality','$block_area')";
		echo $sql;
		$result=$conn->query($sql);
		print_r ($result);
				if(isset($_SESSION['username']) ){
		if(($role_select == 'Agencies')||($role_select == 'Volunteers')||($role_select == 'Admin')){
			if($result){
							
				header("location:helpme_agency.php?flag=true");
			}
			else {	
				header("location:helpme_agency.php?flag=false");
				} 
		
		}	
		else{
							
			if($result){	
				header("location:helpme.php?flag=true");
			}
			else {	
				header("location:helpme.php?flag=false");
			} 
			
}
}
else{
	if($result){	
				header("location:helpme.php?flag=true");
			}
			else {	
				header("location:helpme.php?flag=false");
			} 
	
}
	
}
}
					else if ($selected_radio == 'service') {

					echo "%%%%%%%%%%%";
					print_r ($_POST);
					
					$service_list = $_POST['service_list'];
					echo $subject;
					$date = time();
					$date1 = date("Y-m-d H:i:s", $date);
					print_r($_POST);
					//echo $date1;
					//die;
						$message = $_POST['message'];
						if($service_list == 'Others'){
						$importance = $message;
						}
						else{
						$importance = $service_list;	
						}
					$sql_service = "INSERT INTO `service_request`(`requisition_date`, `requested_by`, `req_details`, `contact_No`, `affiliation`, `location`, `state`, `district`, `block`, `municipalaty`, `village`)
					 VALUES ('$date1','$requested_by','$importance','$phone','$affiliation','$address_land','$gender','$district','$area','$municipality','$block_area')";
					//echo $sql_service;
					//die;
					//$result_service = mysql_query($sql_service,$connect);
					$result_service = $conn->query($sql_service);
							if(($role_select == 'Agencies')||($role_select == 'Volunteers')||($role_select == 'Admin')){
							if($result_service){	
							
								header("location:helpme_agency.php?flag=true");
									
									
							}
							else {	
									header("location:helpme_agency.php?flag=false");
								} 
															}
							else{
							
							if($result_service){	
							
								header("location:helpme.php?flag=true");
									
									
							}
							else {	
									header("location:helpme.php?flag=false");
								} 
							
							} 
					}
}
?>		