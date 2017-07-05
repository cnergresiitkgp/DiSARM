<?php
//include("connect.php");	
include("connect.inc.php");	
echo '<pre>', print_r($_POST), '</pre>';
session_start();
    $firstName = $_SESSION['firstname'];
			  $data = "SELECT `role` FROM `register_master` WHERE `firstname` = '$firstName'" ;
			  echo  $data;
			  //$get_data = mysql_query($data,$connect);
			  $get_data = $conn->query($data);
			  //while($result_data = mysql_fetch_array($get_data)){
			  while($result_data = $get_data->fetch_array()){
				  //echo "$$$$4";
				  $role_select = $result_data["role"];
			  echo $result_data["role"];
			  echo $role_select;
			  }
			  //die;
if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$name = $firstname.' '.$lastname;	
	$phone = $_POST['con_number'];
	$message = $_POST['message'];
	$state = $_POST['state'];
	$district = $_POST['district'];
	$block = $_POST['block'];
	$municipality = $_POST['pan_muni'];
	$village = $_POST['village'];
	$location = $_POST['location'];
	
	
	
    $sql = "INSERT INTO `emergency_master`(`name`, `contact_no`, `prob_details`, `state`, `district`, `block`, `municipalaty`, `area`, `is_present`) 
	VALUES ('$name','$phone','$message','$state','$district','$block','$municipality','$village','$location')";
	
	echo '<pre>', $sql, '</pre>';
	
	$result=$conn->query($sql);
	
		if(($role_select == 'Agencies')||($role_select == 'Volunteers')||($role_select == 'Admin')){
							if($result){	
							
								header("location:emergency_agency.php?flag=true");
									
									
							}
							else {	
									header("location:emergency_agency.php?flag=false");
								} 
															}
							else{
							
							if($result){	
							
								header("location:emergency.php?flag=true");
									
									
							}
							else {	
									header("location:emergency.php?flag=false");
								} 
							
							}
}


?>