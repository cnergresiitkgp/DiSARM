<?php
//include("connect.php");
include("connect.inc.php");
//echo '<pre>', print_r($_POST), '</pre>';die;
Session_start();	
	//$login_name = $_SESSION['firstname'];
	//$data = "SELECT `id`, `role` FROM `register_master` WHERE `firstname` = '$login_name'" ;
	$email = $_SESSION['username'];
$data = "SELECT * FROM `register_master` WHERE `email` = '$email'" ;
	$get_data = $conn->query($data);
	while($result_data = $get_data->fetch_array()){
		print_r($result_data);
		$role_select = $result_data["role"];
		$role_id = $result_data["id"];
		echo ("prasun testingggggggggggggg");
		echo $role_id;
	}
	if($role_select == 'Agencies'){
		$a_id = $role_id;	
		$ad_id = 'NULL';
		echo ("EEEEEEEEEEEEEEEEEEEEEE");
		echo $role_select;
	}
	else{
		$a_id = 'NULL';	
		$ad_id = $role_id;
		echo $role_select;		
	}
//echo $login_name;die;
echo "hi!!!!!!!";
if(isset($_POST['sub'])) {
	echo "hellooooooo!!!!!!!";
$volunteer_name = $_POST['vol_name'];	
echo $volunteer_name;
$contact_number = $_POST['con_number'];
echo $contact_number;
$district = $_POST['district'];
$state = $_POST['state'];
$block = $_POST['block'];
$panchayat = $_POST['panchayat'];
$village = $_POST['village'];
$pincode = $_POST['pincode'];
$sql = "SELECT `state` FROM `state` WHERE `id`= $state";
$sql1 = "SELECT `district` FROM `district` WHERE `id`= $district";
$sql2 = "SELECT `block` FROM `block` WHERE `id`= $block";
$sql3 = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id`= $panchayat";
$sql4 = "SELECT `village` FROM `village` WHERE `id`= $village";
//$output = mysql_query($sql,$connect);
$output = $conn->query($sql);

//$output1 = mysql_query($sql1,$connect);
$output1 = $conn->query($sql1);
//$output2 = mysql_query($sql2,$connect);
$output2 = $conn->query($sql2);
//$output3 = mysql_query($sql3,$connect);
$output3 = $conn->query($sql3);
//$output4 = mysql_query($sql4,$connect);
$output4 = $conn->query($sql4);

//$result= mysql_fetch_assoc($output);
$result= $output->fetch_assoc();
//$result1= mysql_fetch_assoc($output1);
$result1= $output1->fetch_assoc();
//$result2= mysql_fetch_assoc($output2);
$result2= $output2->fetch_assoc();
//$result3= mysql_fetch_assoc($output3);
$result3= $output3->fetch_assoc();
//$result4= mysql_fetch_assoc($output4);
$result4= $output4->fetch_assoc();

$track_state = $result["state"];
$track_district = $result1["district"];
$track_block = $result2["block"];
$track_panchayat = $result3["panchayat"];
$track_village = $result4["village"];
$address = $track_state.' '.$track_district.' '.$track_block.' '.$track_panchayat.' '.$track_village;
echo "<br/>address =".$address;

$email_vol = $_POST['email'];
echo "***********************************";
echo $email_vol;
$skill = $_POST['skills']; 
$expart = $_POST['train'];
$affiliation = $_POST['affiliation'];
$designation = 'Volunteers';
$cpassword = $_POST['pass'];
echo $cpassword;
$con_pass = md5($cpassword);

echo $con_pass;
//$designation = $_POST['designation'];
//die;
echo "<br/>skill =".$skill;
echo "<br/>affiliation =".$affiliation;
echo "<br/> designation =".$designation;
echo "<br/> expart =".$expart;
//die;
$block = $_POST['block'];
$panchayat = $_POST['panchayat'];
$village = $_POST['village'];
$sql5 = "SELECT `block` FROM `block` WHERE `id`= $block";
$sql6 = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id`= $panchayat";
$sql7 = "SELECT `village` FROM `village` WHERE `id`= $village";
//$output5 = mysql_query($sql5,$connect);
$output5 = $conn->query($sql5);
//$output6 = mysql_query($sql6,$connect);
$output6 = $conn->query($sql6);
//$output7 = mysql_query($sql7,$connect);
$output7 = $conn->query($sql7);
//$result5= mysql_fetch_assoc($output5);
$result5=$output5->fetch_assoc();
//$result6= mysql_fetch_assoc($output6);
$result6= $output6->fetch_assoc();
//$result7= mysql_fetch_assoc($output7);
$result7= $output7->fetch_assoc();

$track_block1 = $result5["block"];
$track_panchayat1 = $result6["panchayat"];
$track_village1 = $result7["village"];
$work_address = $track_block1.' '.$track_panchayat1.' '.$track_village1;
echo "<br/>volunteer working address =".$work_address;
$name = $_SESSION['firstname'];
echo "$$$$".$name;
$email = $_SESSION['username'];
$sql_affiliation = "SELECT `affiliation` FROM `register_master` WHERE `email` = '$email'" ;
echo $sql_affiliation;
//$output_affiliation = mysql_query($sql_affiliation,$connect);
$output_affiliation = $conn->query($sql_affiliation);

//$result_affiliation= mysql_fetch_assoc($output_affiliation);
$result_affiliation= $output_affiliation->fetch_assoc();
if($role_select == 'Admin'){
$affiliation = 'Admin';
}
else{
//$affiliation = $result_affiliation['affiliation']; 
$affiliation = $_SESSION['firstname'];
echo "$$$$$$$$$$$$$$$$$$$$$$$$$$$$";
echo $affiliation;
print_r($_SESSION);
//die;
}
echo $affiliation;
//echo '<pre>', print_r($_POST), '</pre>';die;



/*$sql = "INSERT INTO `volunteer_master`(`volunteer_name`, `volunteer_address`, `contact_number`, `Affiliation`, `Designation`, `work_location`, `skills`, `expertise`) 
VALUES ('$volunteer_name','$address','$contact_number','$affiliation','$designation','$work_address','$skill','$expart')";*/
//echo $sql;
//$result_data=mysql_query($sql,$connect);
//$result_data=$conn->query($sql);



			$sql_search = "SELECT * FROM `register_master` WHERE `email` = '$email_vol'" ;
			$search_result = $conn->query($sql_search);
			$row = $search_result->num_rows;
			echo $row;
			//$search_email = $search_result->fetch_array();
			//$result_email = $search_email["email"];
			//if($result_email ==  $email_vol){
			if($row>0){
			
			//$sql_insert = "INSERT INTO `agency_master`(`name`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `contact_no`, `work_palces`, `expertise`) VALUES ('$agencyName','$email','$state','$district','$block','$panchayat','$village','$contact_number','$work_places','$skill')";
			$sql_insert = "INSERT INTO `volunteer_master`(`volunteer_name`, `state`, `district`, `block`, `panchayat`, `village`, `pincode`, `contact_number`, `email`, `Affiliation`, `Designation`, `work_block`, `work_panchayat`, `work_village`, `skills`, `expertise`) 
VALUES ('$volunteer_name','$track_state','$track_district','$track_block','$track_panchayat','$track_village','$pincode','$contact_number','$email_vol','$affiliation','$designation','$track_block1','$track_panchayat1','$track_village1','$skill','$expart')";
			
			$insert = $conn->query($sql_insert);
			echo $sql_insert;
			if($insert){	
				echo "i am in if";		
//die;				
				header("location:manage_volunteers.php?flag=true");
			}
			else {	
			echo "i am in else";
			//die;
				header("location:manage_volunteers.php?flag=true");
			} 
			//break;
			}
			else{
			
			$sql_insert = "INSERT INTO `volunteer_master`(`volunteer_name`, `state`, `district`, `block`, `panchayat`, `village`, `pincode`, `contact_number`, `email`, `Affiliation`, `Designation`, `work_block`, `work_panchayat`, `work_village`, `skills`, `expertise`) 
			VALUES ('$volunteer_name','$track_state','$track_district','$track_block','$track_panchayat','$track_village','$pincode','$contact_number','$email_vol','$affiliation','$designation','$track_block1','$track_panchayat1','$track_village1','$skill','$expart')";
			echo $sql_insert;
			$parsename = split ("\ ", $volunteer_name);
			$firstname = $parsename[0]; 
			$lastname =  $parsename[1];
			$sql_register = "INSERT INTO `register_master`(`firstname`, `lastname`, `phone`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `landmark`, `password`, `role`, `affiliation`) VALUES ('$firstname','$lastname','$contact_number','$email_vol','$state','$district','$block','$panchayat','$village','$pincode','$con_pass','$designation','$affiliation')";
			echo $sql_register;
			//die;
			$insert = $conn->query($sql_insert);
			$register = $conn->query($sql_register);
			 
			if(($insert) && ($register)){	
				echo "i am in if with 2";		
//die;				
				header("location:manage_volunteers.php?flag=true");
			}
			else {	
			echo "i am in else with 2";
//			die;
				header("location:manage_volunteers.php?flag=true");
			} 
			
			//break;
			}


//die;

}
//echo '<pre>', print_r($_POST), '</pre>';die;
?>