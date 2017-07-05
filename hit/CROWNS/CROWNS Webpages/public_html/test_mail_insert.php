<?php
session_start();
	

include("connect.inc.php");	

$volunteer_id = $_SESSION['volunteer_id'];
echo $volunteer_id; 
$data = "SELECT * FROM `volunteer_master` WHERE `volunteer_id` = '".$volunteer_id."'";
			//echo  $data; 
			/*$data = "SELECT `volunteer_id`, `volunteer_name`, `volunteer_address`, `contact_number`, `Affiliation`, `Designation`, `work_location`, `skills`, `expertise` 
			FROM `volunteer_master`  WHERE `volunteer_id` = '".$volunteer_id."'";*/
			
			//$get_data = mysql_query($data);
			$get_data = $conn->query($data);
			

	//		while($result = mysql_fetch_assoc($get_data)){
			while($result = $get_data->fetch_assoc()){	
				
				$work_block = $result["work_block"];
				//echo $work_block;
				$work_panchayat = $result["work_panchayat"];
				//echo $work_panchayat;
				$work_village = $result["work_village"];
				$Designation = $result["Designation"];
				$email = $result["email"];
				$phone_no = $result["contact_number"];
				$vol_name = $result["volunteer_name"];
				//echo $email;
				//echo '<pre>',print_r($result_contact),'</pre>';
			}

if(isset($_POST['send']) && $_POST['send']=="Send")
{
	print_r ($_POST);
	//echo "&&&&&&&&&&&";
	//echo $volunteer_id;
	//echo '<pre>';
	//echo $email;
	$to=$email;
	//echo $to;
	//$from=$_POST['email'];
	$from = $_SESSION['username'];
	//echo $from;
	$name = $_POST['fname'];//email id of person 
	if (empty($name)) {
		$from_name = $email;	
	}
	else {
	
		$sql_email = "SELECT * FROM `volunteer_master` WHERE `volunteer_name` = '$name'";
		echo $sql_email;
		$sql_result = $conn->query($sql_email);
		print_r($sql_result);
		$output_email = $sql_result->fetch_array();
		$from_name = $output_email['email']; 
		echo $from_name; 
	}
	$get_phone = $_POST['phone'];
	//echo $from_name;
	if (empty($get_phone)) {
		$phone = $phone_no;
	}
	else {
		$phone = $_POST['phone'];
	}
	$subject_line = "Work location change notification";
	//echo $subject_line;
	$var = $_POST['subject'];
	//echo "This is a veriable ->>>>>>>>>>>".$var;
	if (empty($var)) {
		//echo "@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@";
		$subject = $subject_line;
		//$subject = $var;
		echo $subject;
	}
	else{
		echo "#####################################";
		$subject = $_POST['subject'];	
		
		//echo $subject;
	}
	//print_r($_SESSION);
	$i =0;
	$array = $_SESSION['array'];
	$old_block = $array[$i];
	$i++;
	$old_panchayat = $array[$i];
	$i++;
	$old_village = $array[$i];
	//echo "old location block = ".$old_block;
	//echo "old panchayat= ".$old_panchayat;  
	//echo "old villlage = ".$old_village;
	$oldWorkingPlace = $old_block.',  '.$old_panchayat.',  '.$old_village;
	//echo $oldWorkingPlace;
	$newWorkingPlace = $work_block.',  '.$work_panchayat.',  '.$work_village;
	//echo $newWorkingPlace;
	$body="Name : ".$from_name. " \n\r Phone No: ".$phone." \n\r your work location has been change from: ".$oldWorkingPlace." \n\r to :". $newWorkingPlace ;
	echo $body;
//die;
	$t=time();
	echo($t . "<br>");
	$time_stamp = date("Y-m-d H:i:s", $t);
	echo $time_stamp;
	$user_name = $_SESSION['username'];
	echo "user_name = ".$user_name;
	//print_r ($_SESSION);
//die;
	$sql = "INSERT INTO `chat_master`(`receiver`, `phone`, `subject`, `body`, `time_stamp`, `sender`) VALUES ('$from_name','$phone','$subject','$body','$time_stamp','$user_name')";
	echo $sql;
	
	$result=$conn->query($sql);
	if($result){	
		header("location:manage_volunteers.php?flag=true");
	}
	else {	
		header("location:test_mail.php?flag=false");
	} 
} 
?>