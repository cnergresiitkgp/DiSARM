<?php

//include("connect.php");
include("connect.inc.php");
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
//echo '<pre>', print_r($_POST), '</pre>';die;
if(isset($_POST['submit'])) {

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$landmark = $_POST['marks'];
		$phone = $_POST['con_number'];
		$sex = $_POST['sex'];
		$age = $_POST['age'];
		$state = $_POST['state'];
		$district = $_POST['district'];
		$block = $_POST['block'];
		$panchayat = $_POST['panchayat'];
		$village = $_POST['village'];

$sql = "INSERT INTO `missing_master`(`firstname`, `lastname`, `marks`, `Phone_Missing`, `sex`, `age`, `state`, `district`, `block`, `panchayat`, `village`) 
VALUES ('$firstname','$lastname','$landmark','$phone','$sex','$age','$state','$district','$block','$panchayat','$village')";
echo $sql;
//$result=mysql_query($sql,$connect);
$result=$conn->query($sql);

if(($role_select == 'Agencies')||($role_select == 'Volunteers')||($role_select == 'Admin')){
if($result){	
							
								header("location:locate_missing_entry_agency.php?flag=true");
									
									
							}
							else {	
									header("location:locate_missing_entry_agency.php?flag=false");
								} 


}
}
else{

if($result){	
							
								header("location:locate_missing_entry.php?flag=true");
									
									
							}
							else {	
									header("location:locate_missing_entry.php?flag=false");
								} 
}
?>