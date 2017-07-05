<?php
	include("connect.inc.php");	
	echo "hi.............";
	print_r($_POST);
	session_start();
	//if(isset($_SESSION['username']) ){
	$firstName = $_SESSION['firstname'];
	$email = $_SESSION['username'];
	$data = "SELECT * FROM `register_master` WHERE `email` = '$email'" ;
	echo  $data;
	$get_data = $conn->query($data);
	while($result_data = $get_data->fetch_array()){
		$role_select = $result_data["role"];
		echo $result_data["role"];
		echo $role_select;
		}
	//}
	if(isset($_POST['sub'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$donated_by = $firstname.' '.$lastname;
		$address = $_POST['address'];
		$phone = $_POST['con_number'];
		$gender = $_POST['state'];
		$district = $_POST['district'];
		$area = $_POST['block'];
		$municipality = $_POST['panchayat'];
		$block_area = $_POST['village'];
		$selected_radio = $_POST['gender'];
	  
		if ($selected_radio == 'resour') {
			
			$arr = $_POST['resource_list'];
			$arrayCount = count($arr);
			echo $arrayCount;
			if($arrayCount>0){
			for($i =0;$i<$arrayCount;$i++){
			$req_resorce = $arr[$i];
			echo $req_resorce;
			$value = split ("\,", $req_resorce); 
			$resource_name = "$value[0]";
			$unit = "$value[1]";
			$quantity = "$value[2]";
			echo "********";
			echo $resource_name;
			echo "$$$$$$$$";
			echo $unit;
			echo "@@@@@@@@";
			echo $quantity;
			//$exact_quantity = $getValThi.' '.$getValSec;
			$sql = "INSERT INTO `donate_master`(`donated_by`, `contact_no`, `resource_name`, `resource_unit`, `resource_amount`, `address`, `state`, `district`, `block`, `panchayat_municipality`, `village_area`) 
			VALUES ('$donated_by','$phone','$resource_name','$unit','$quantity','$address','$gender','$district','$area','$municipality','$block_area')";
			echo $sql;
			$result = $conn->query($sql);
			}
			
				//	if(isset($_SESSION['username']) ){
					   if(($role_select == 'Agencies')||($role_select == 'Volunteers')||($role_select == 'Admin')){
								if($result){	
								
									header("location:donate_agency.php?flag=true");
										
										
								}
								else {	
										header("location:donate_agency.php?flag=false");
									} 
									}
								else{
					   
						  if($result){	
								header("location:donate.php?flag=true");
						  }
						  else {	
								header("location:donate.php?flag=false");
							} 
								
								}
							}
							else{
								print_r($_POST);
								
								$resource_name = $_POST['resource_1'];
								echo $resource_name;
								$unit = $_POST['unit_1'];
								echo $unit;
								$quantity = $_POST['quan'];
								echo $quantity;
								//die;
								
								$sql = "INSERT INTO `donate_master`(`donated_by`, `contact_no`, `resource_name`, `resource_unit`, `resource_amount`, `address`, `state`, `district`, `block`, `panchayat_municipality`, `village_area`) 
								VALUES ('$donated_by','$phone','$resource_name','$unit','$quantity','$address','$gender','$district','$area','$municipality','$block_area')";
								echo $sql;
								$result = $conn->query($sql);
								if(($role_select == 'Agencies')||($role_select == 'Volunteers')||($role_select == 'Admin')){
									if($result){	
									
										header("location:donate_agency.php?flag=true");
											
											
									}
									else {	
											header("location:donate_agency.php?flag=false");
										} 
									}	
								else{									
									if($result){	
										header("location:donate.php?flag=true");
											}
									else {	
										header("location:donate.php?flag=false");
											} 
									}
			
		}
}		
					
				  else if ($selected_radio == 'service') {
				  
				  echo "%%%%%%%%%%%";
				  echo '<pre>', print_r($_POST), '</pre>';//die;
				  $service_list = $_POST['service_list'];
					echo $subject;
				  $message = $_POST['message'];
						if($service_list == 'Others'){
						$importance = $message;
						}
						else{
						$importance = $service_list;	
						}
				  $sql_service = "INSERT INTO `donate_master`(`donated_by`, `contact_no`, `resource_others`, `address`, `state`, `district`, `block`, `panchayat_municipality`, `village_area`) 
				  VALUES ('$donated_by', '$phone' ,'$importance','$address','$gender','$district','$area','$municipality','$block_area')";
				  echo $sql_service;//die;
				  $result_service= $conn->query($sql_service);
				  //$result_service = mysql_query($sql_service,$connect);
				 if(($role_select == 'Agencies')||($role_select == 'Volunteers')){
								if($result_service){	
								
									header("location:donate_agency.php?flag=true");
										
										
								}
								else {	
										header("location:donate_agency.php?flag=false");
									} 
									}
								else{
					  if($result_service){	
							header("location:donate.php?flag=true");
					  }
					  else {	
							header("location:donate.php?flag=false");
						} 
				  }
				  }
	  }
		
	  //echo '<pre>', print_r($_POST), '</pre>';die;
  
  ?>
