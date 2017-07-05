<?php
	include("connect.inc.php");
	echo '<pre>'; print_r($_POST); 
	//$arr[];
	//die;
	if (isset($_POST['sub'])){

		$agencyName = $_POST['agency_name'];
		//echo $agencyName;
		$contact_number = $_POST['con_number'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$cPassword = $_POST['cpass'];
		$con_pass = md5($cPassword);
		$state = $_POST['state'];
		$district = $_POST['district'];
		$block = $_POST['block'];
		$panchayat = $_POST['panchayat'];
		$village = $_POST['village'];
		$skill = $_POST['skills'];
		$pincode = $_POST['pincode'];
		$role = 'Agencies';
		$affiliation = $agencyName;
		//echo count($_POST['work_locations']);
		$workLocationsCount = count($_POST['work_locations']);
		$arr = $_POST['work_locations'];
		$arrayCount = count($arr);	
		if($arrayCount>0){
		for($i =0;$i<$arrayCount;$i++){
			echo $arr[$i];
			echo '<br>';
		}
		//die;
		switch ($arrayCount) {
		
			case 1:
			echo ("hi"); 
			$i1 = 0;
			$VillageId = $arr[$i1];
			$sql_query = "SELECT `village`, `panchayatid`, `blockid` FROM `village` WHERE `id` = '".$VillageId."'"; 
			echo $sql_query;
			$output = $conn->query($sql_query);
			//print_r ($output_first);
			$number_rows = $output->num_rows;
			//echo $rows;
			if($number_rows>0){
				$result_output = $output->fetch_array();
				print_r($result_output);
				$working_panchayat_id = $result_output['panchayatid'];
				echo $working_panchayat_id;
				echo "<br>";
				$working_block_id = $result_output['blockid'];
				echo $working_block_id;
				$workingVillageName = $result_output['village'];
				echo $workingVillageName;
				$WorkingSqlPanchyatName = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id` = '".$working_panchayat_id."'";
				echo $WorkingSqlPanchyatName;
				$output_working_panchayat_name = $conn->query($WorkingSqlPanchyatName);
				$working_rows_panchyat = $output_working_panchayat_name->num_rows;
				if($working_rows_panchyat>0){
					$working_result_panchayat_name = $output_working_panchayat_name->fetch_array();
					print_r ($working_result_panchayat_name);
					$workingPanchayatName = $working_result_panchayat_name['panchayat'];
					echo $workingPanchayatName;
				}
				$WorkingSqlBlockName = "SELECT `block` FROM `block` WHERE `id` = '".$working_block_id."'";
				echo $WorkingSqlBlockName;
				$output_working_block_name = $conn->query($WorkingSqlBlockName);
				$working_rows_block = $output_working_block_name->num_rows;
				if($working_rows_block>0){
					$result_working_block_name = $output_working_block_name->fetch_array();
					print_r ($result_working_block_name);
					$workingBlockName = $result_working_block_name['block'];
					echo $workingBlockName;
				
				}
			}
			echo "<br>";
			$work_places = $workingBlockName. ',' .$workingPanchayatName. ',' .$workingVillageName;
			echo $work_places;
			
			$sql_search = "SELECT * FROM `register_master` WHERE `email` = '$email'" ;
			echo $sql_search;
			$search_result = $conn->query($sql_search);
			$row = $search_result->num_rows;
			echo "**********************************************************";
			echo $row;
			//$search_email = $search_result->fetch_array();
			//$result_email = $search_email["email"];
			//if($result_email == $email){
			if($row>0){
			
			$sql_insert = "INSERT INTO `agency_master`(`name`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `pincode`, `contact_no`, `work_palces`, `expertise`) VALUES ('$agencyName','$email','$state','$district','$block','$panchayat','$village','$pincode','$contact_number','$work_places','$skill')";
			$insert = $conn->query($sql_insert);
			echo $sql_insert;
			if($insert){	
				echo "i am in if";		
//die;				
				header("location:managn.php?flag=true");
			}
			else {	
			echo "i am in else";
			//die;
				header("location:managn.php?flag=false");
			} 
			break;
			}
			else{
			
			$sql_insert = "INSERT INTO `agency_master`(`name`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `pincode`, `contact_no`, `work_palces`, `expertise`) VALUES ('$agencyName','$email','$state','$district','$block','$panchayat','$village','$pincode','$contact_number','$work_places','$skill')";
			echo $sql_insert;
			$sql_register = "INSERT INTO `register_master`(`firstname`, `phone`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `landmark`, `password`, `role`, `affiliation`) VALUES ('$agencyName','$contact_number','$email','$state','$district','$block','$panchayat','$village','$pincode','$con_pass','$role','$affiliation')";
			echo $sql_register;
			$insert = $conn->query($sql_insert);
			$register = $conn->query($sql_register);
			 
			if(($insert) && ($register)){	
				echo "i am in if with 2";		
//die;				
				header("location:managn.php?flag=true");
			}
			else {	
			echo "i am in else with 2";
//			die;
				header("location:managn.php?flag=false");
			} 
			
			break;
			}
			case 2:
			$i = 0;
			echo ("hello");
			$firstVillageId = $arr[$i];
			$i++;
			$secondVillageId = $arr[$i];
			$sql = "SELECT `village`, `panchayatid`, `blockid` FROM `village` WHERE `id` = '".$firstVillageId."'"; 
			//echo $sql;
			$output_first = $conn->query($sql);
			//print_r ($output_first);
			$rows = $output_first->num_rows;
			//echo $rows;
			if($rows>0){
				$result = $output_first->fetch_array();
				//print_r($result);
				$panchayat_id = $result['panchayatid'];
				//echo $panchayat_id;
				echo "<br>";
				$block_id = $result['blockid'];
				echo $block_id;
				$workVillageName = $result['village'];
				//echo $workVillageName;
				$sqlPanchyatName = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id` = '".$panchayat_id."'";
				//echo $sqlPanchyatName;
				$output_panchayat_name = $conn->query($sqlPanchyatName);
				$rows_panchyat = $output_panchayat_name->num_rows;
				if($rows_panchyat>0){
					$result_panchayat_name = $output_panchayat_name->fetch_array();
					print_r ($result_panchayat_name);
					$workPanchayatName = $result_panchayat_name['panchayat'];
					echo $workPanchayatName;
				}
				$sqlBlockName = "SELECT `block` FROM `block` WHERE `id` = '".$block_id."'";
				//echo $sqlBlockName;
				$output_block_name = $conn->query($sqlBlockName);
				$rows_block = $output_block_name->num_rows;
				if($rows_block>0){
					$result_block_name = $output_block_name->fetch_array();
					print_r ($result_block_name);
					$workBlockName = $result_block_name['block'];
					echo $workBlockName;
				
				}
			}
			$sql_second = "SELECT `village`, `panchayatid`, `blockid` FROM `village` WHERE `id` = '".$secondVillageId."'";
			//echo $sql_second; 
			$output_second = $conn->query($sql_second);
			
			$rows_second = $output_second->num_rows;
			
			if($rows_second>0){
			$result_second = $output_second->fetch_array();
			print_r($result_second);
				$panchayat_id = $result_second['panchayatid'];
				//echo $panchayat_id;
				echo "<br>";
				$block_id = $result_second['blockid'];
				//echo $block_id;
				$workVillageNameSecond = $result_second['village'];
				//echo $workVillageNameSecond;
				$sqlPanchyatNameSecond = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id` = '".$panchayat_id."'";
				//echo $sqlPanchyatNameSecond;
				$output_panchayat_name_second = $conn->query($sqlPanchyatNameSecond);
				$rows_panchyat_second = $output_panchayat_name_second->num_rows;
				if($rows_panchyat_second>0){
					$result_panchayat_name_second = $output_panchayat_name_second->fetch_array();
					print_r ($result_panchayat_name_second);
					$workPanchayatNameSecond = $result_panchayat_name_second['panchayat'];
					//echo $workPanchayatNameSecond;
				}
				$sqlBlockNameSecond = "SELECT `block` FROM `block` WHERE `id` = '".$block_id."'";
				//echo $sqlBlockNameSecond;
				$output_block_name_second = $conn->query($sqlBlockNameSecond);
				$rows_block_second = $output_block_name_second->num_rows;
				if($rows_block_second>0){
					$result_block_name_second = $output_block_name_second->fetch_array();
					//print_r ($result_block_name_second);
					$workBlockNameSecond = $result_block_name_second['block'];
					//echo $workBlockNameSecond;
				
				}
			
			
			}
			echo "<br>";
			$combine = $workBlockName. ',' .$workPanchayatName. ',' .$workVillageName; 
			$combine_next = $workBlockNameSecond. ',' .$workPanchayatNameSecond. ',' .$workVillageNameSecond;
			$working_places = $combine. '.' .$combine_next;
			//echo $working_places;
			
			/*$sql_insert = "INSERT INTO `agency_master`(`name`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `contact_no`, `work_palces`, `expertise`) VALUES ('$agencyName','$email','$state','$district','$block','$panchayat','$village','$contact_number','$working_places','$skill')";
			$sql_register = "INSERT INTO `register_master`(`firstname`, `phone`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `password`, `role`) VALUES ('$agencyName','$contact_number','$email','$state','$district','$block','$panchayat','$village','$con_pass','$role')";
			echo $sql_register;
			$insert = $conn->query($sql_insert);
			$register = $conn->query($sql_register);
			if(($insert) && ($register)){	
							
				header("location:managn.php?flag=true");
			}
			else {	
				header("location:managn.php?flag=false");
			} 
			
			
			break;*/
			$sql_search = "SELECT * FROM `register_master` WHERE `email` = '$email'" ;
			$search_result = $conn->query($sql_search);
			$row = $search_result->num_rows;
			echo "**********************************************************";
			echo $row;
			//$search_email = $search_result->fetch_array();
			//$result_email = $search_email["email"];
			//if($result_email == $email){
			if($row>0){
			
			$sql_insert = "INSERT INTO `agency_master`(`name`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `pincode`,`contact_no`, `work_palces`, `expertise`) VALUES ('$agencyName','$email','$state','$district','$block','$panchayat','$village','$pincode','$contact_number','$working_places','$skill')";
			echo $sql_insert;
			//die;
			$insert = $conn->query($sql_insert);
			
			if($insert){	
				echo "i am in if";		
//die;				
				header("location:managn.php?flag=true");
			}
			else {	
			echo "i am in else";
			//die;
				header("location:managn.php?flag=false");
			} 
			break;
			}
			else{
			
			$sql_insert = "INSERT INTO `agency_master`(`name`, `email`, `state`, `district`, `block`, `panchayat`, `village`,  `pincode`, `contact_no`, `work_palces`, `expertise`) VALUES ('$agencyName','$email','$state','$district','$block','$panchayat','$village','$pincode','$contact_number','$working_places','$skill')";
			echo $sql_insert;
			$sql_register = "INSERT INTO `register_master`(`firstname`, `phone`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `landmark`, `password`, `role`, `affiliation`) VALUES ('$agencyName','$contact_number','$email','$state','$district','$block','$panchayat','$village','$pincode','$con_pass','$role','$affiliation')";
			echo $sql_register;
			//die;
			$insert = $conn->query($sql_insert);
			$register = $conn->query($sql_register);
			 
			if(($insert) && ($register)){	
				echo "i am in if with 2";		
//die;				
				header("location:managn.php?flag=true");
			}
			else {	
			echo "i am in else with 2";
			//die;
				header("location:managn.php?flag=false");
			} 
			
			break;
			}
			
			
			default:
			
			$y = 0;
			echo ("hello");
			$firstVillageId = $arr[$y];
			$y++;
			$secondVillageId = $arr[$y];
			$y++;
			$thirdVillageId = $arr[$y];
			$sql = "SELECT `village`, `panchayatid`, `blockid` FROM `village` WHERE `id` = '".$firstVillageId."'"; 
			echo $sql;
			$output_first = $conn->query($sql);
			//print_r ($output_first);
			$rows = $output_first->num_rows;
			//echo $rows;
			if($rows>0){
				$result = $output_first->fetch_array();
				print_r($result);
				$panchayat_id = $result['panchayatid'];
				echo $panchayat_id;
				echo "<br>";
				$block_id = $result['blockid'];
				echo $block_id;
				$workVillageName = $result['village'];
				echo $workVillageName;
				$sqlPanchyatName = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id` = '".$panchayat_id."'";
				echo $sqlPanchyatName;
				$output_panchayat_name = $conn->query($sqlPanchyatName);
				$rows_panchyat = $output_panchayat_name->num_rows;
				if($rows_panchyat>0){
					$result_panchayat_name = $output_panchayat_name->fetch_array();
					print_r ($result_panchayat_name);
					$workPanchayatName = $result_panchayat_name['panchayat'];
					echo $workPanchayatName;
				}
				$sqlBlockName = "SELECT `block` FROM `block` WHERE `id` = '".$block_id."'";
				echo $sqlBlockName;
				$output_block_name = $conn->query($sqlBlockName);
				$rows_block = $output_block_name->num_rows;
				if($rows_block>0){
					$result_block_name = $output_block_name->fetch_array();
					print_r ($result_block_name);
					$workBlockName = $result_block_name['block'];
					echo $workBlockName;
				
				}
			}
			$sql_second = "SELECT `village`, `panchayatid`, `blockid` FROM `village` WHERE `id` = '".$secondVillageId."'";
			echo $sql_second; 
			$output_second = $conn->query($sql_second);
			
			$rows_second = $output_second->num_rows;
			
			if($rows_second>0){
			$result_second = $output_second->fetch_array();
			print_r($result_second);
				$panchayat_id = $result_second['panchayatid'];
				echo $panchayat_id;
				echo "<br>";
				$block_id = $result_second['blockid'];
				echo $block_id;
				$workVillageNameSecond = $result_second['village'];
				echo $workVillageNameSecond;
				$sqlPanchyatNameSecond = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id` = '".$panchayat_id."'";
				echo $sqlPanchyatNameSecond;
				$output_panchayat_name_second = $conn->query($sqlPanchyatNameSecond);
				$rows_panchyat_second = $output_panchayat_name_second->num_rows;
				if($rows_panchyat_second>0){
					$result_panchayat_name_second = $output_panchayat_name_second->fetch_array();
					print_r ($result_panchayat_name_second);
					$workPanchayatNameSecond = $result_panchayat_name_second['panchayat'];
					echo $workPanchayatNameSecond;
				}
				$sqlBlockNameSecond = "SELECT `block` FROM `block` WHERE `id` = '".$block_id."'";
				echo $sqlBlockNameSecond;
				$output_block_name_second = $conn->query($sqlBlockNameSecond);
				$rows_block_second = $output_block_name_second->num_rows;
				if($rows_block_second>0){
					$result_block_name_second = $output_block_name_second->fetch_array();
					print_r ($result_block_name_second);
					$workBlockNameSecond = $result_block_name_second['block'];
					echo $workBlockNameSecond;
				
				}
			
			
			$sql_third = "SELECT `village`, `panchayatid`, `blockid` FROM `village` WHERE `id` = '".$thirdVillageId."'";
			echo $sql_third; 
			$output_third = $conn->query($sql_third);
			
			$rows_third = $output_third->num_rows;
			
			if($rows_third>0){
			$result_third = $output_third->fetch_array();
			print_r($result_third);
				$panchayat_id_third = $result_third['panchayatid'];
				echo $panchayat_id_third;
				echo "<br>";
				$block_id_third = $result_third['blockid'];
				echo $block_id_third;
				$workVillageNameThird = $result_third['village'];
				echo $workVillageNameThird;
				$sqlPanchyatNameThird = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id` = '".$panchayat_id_third."'";
				echo $sqlPanchyatNameThird;
				$output_panchayat_name_third = $conn->query($sqlPanchyatNameThird);
				$rows_panchyat_third = $output_panchayat_name_third->num_rows;
				if($rows_panchyat_third>0){
					$result_panchayat_name_third = $output_panchayat_name_third->fetch_array();
					print_r ($result_panchayat_name_third);
					$workPanchayatNameThird = $result_panchayat_name_third['panchayat'];
					echo $workPanchayatNameThird;
				}
				$sqlBlockNameThird = "SELECT `block` FROM `block` WHERE `id` = '".$block_id_third."'";
				echo $sqlBlockNameThird;
				$output_block_name_third = $conn->query($sqlBlockNameThird);
				$rows_block_third = $output_block_name_third->num_rows;
				if($rows_block_third>0){
					$result_block_name_third = $output_block_name_third->fetch_array();
					print_r ($result_block_name_third);
					$workBlockNameThird = $result_block_name_third['block'];
					echo $workBlockNameThird;
				
				}
			
			
			}
			
			
			}
			echo "<br>";
			$combine = $workBlockName. ',' .$workPanchayatName. ',' .$workVillageName; 
			$combine_next = $workBlockNameSecond. ',' .$workPanchayatNameSecond. ',' .$workVillageNameSecond;
			$combine_last = $workBlockNameThird. ',' .$workPanchayatNameThird. ',' .$workVillageNameThird;
			$working_places = $combine. '.' .$combine_next. '.' .$combine_last ;
			echo $working_places;
			
			/*$sql_insert = "INSERT INTO `agency_master`(`name`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `contact_no`, `work_palces`, `expertise`) VALUES ('$agencyName','$email','$state','$district','$block','$panchayat','$village','$contact_number','$working_places','$skill')";
			$sql_register = "INSERT INTO `register_master`(`firstname`, `phone`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `password`, `role`) VALUES ('$agencyName','$contact_number','$email','$state','$district','$block','$panchayat','$village','$con_pass','$role')";
			echo $sql_register;
			$insert = $conn->query($sql_insert);
			$register = $conn->query($sql_register);
			if(($insert) && ($register)){
			
							
				header("location:managn.php?flag=true");
			}
			else {	
				header("location:managn.php?flag=false");
			} 
			
			break;*/
			$sql_search = "SELECT * FROM `register_master` WHERE `email` = '$email'" ;
			$search_result = $conn->query($sql_search);
			$row = $search_result->num_rows;
			echo "**********************************************************";
			echo $row;
			//$search_email = $search_result->fetch_array();
			//$result_email = $search_email["email"];
			//if($result_email == $email){
			if($row>0){
			
			$sql_insert = "INSERT INTO `agency_master`(`name`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `pincode`, `contact_no`, `work_palces`, `expertise`) VALUES ('$agencyName','$email','$state','$district','$block','$panchayat','$village','$pincode','$contact_number','$working_places','$skill')";
			$insert = $conn->query($sql_insert);
			echo $sql_insert;
			if($insert){	
				echo "i am in if";		
//die;				
				header("location:managn.php?flag=true");
			}
			else {	
			echo "i am in else";
//			die;
				header("location:managn.php?flag=false");
			} 
			break;
			}
			else{
			
			$sql_insert = "INSERT INTO `agency_master`(`name`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `pincode`, `contact_no`, `work_palces`, `expertise`) VALUES ('$agencyName','$email','$state','$district','$block','$panchayat','$village','$pincode','$contact_number','$working_places','$skill')";
			echo $sql_insert;
			$sql_register = "INSERT INTO `register_master`(`firstname`, `phone`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `landmark`, `password`, `role`, `affiliation`) VALUES ('$agencyName','$contact_number','$email','$state','$district','$block','$panchayat','$village','$pincode','$con_pass','$role','$affiliation')";
			echo $sql_register;
			$insert = $conn->query($sql_insert);
			$register = $conn->query($sql_register);
			 
			if(($insert) && ($register)){	
				echo "i am in if with 2";		
//die;				
				header("location:managn.php?flag=true");
			}
			else {	
			echo "i am in else with 2";
//			die;
				header("location:managn.php?flag=false");
			} 
			
			break;
			}
			
		}
		
		
		//die;
	}
	else{
		
	$i1 = 0;
			$VillageId = $village;
			$sql_query = "SELECT `village`, `panchayatid`, `blockid` FROM `village` WHERE `id` = '".$VillageId."'"; 
			echo $sql_query;
			$output = $conn->query($sql_query);
			//print_r ($output_first);
			$number_rows = $output->num_rows;
			//echo $rows;
			if($number_rows>0){
				$result_output = $output->fetch_array();
				print_r($result_output);
				$working_panchayat_id = $result_output['panchayatid'];
				echo $working_panchayat_id;
				echo "<br>";
				$working_block_id = $result_output['blockid'];
				echo $working_block_id;
				$workingVillageName = $result_output['village'];
				echo $workingVillageName;
				$WorkingSqlPanchyatName = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id` = '".$working_panchayat_id."'";
				echo $WorkingSqlPanchyatName;
				$output_working_panchayat_name = $conn->query($WorkingSqlPanchyatName);
				$working_rows_panchyat = $output_working_panchayat_name->num_rows;
				if($working_rows_panchyat>0){
					$working_result_panchayat_name = $output_working_panchayat_name->fetch_array();
					print_r ($working_result_panchayat_name);
					$workingPanchayatName = $working_result_panchayat_name['panchayat'];
					echo $workingPanchayatName;
				}
				$WorkingSqlBlockName = "SELECT `block` FROM `block` WHERE `id` = '".$working_block_id."'";
				echo $WorkingSqlBlockName;
				$output_working_block_name = $conn->query($WorkingSqlBlockName);
				$working_rows_block = $output_working_block_name->num_rows;
				if($working_rows_block>0){
					$result_working_block_name = $output_working_block_name->fetch_array();
					print_r ($result_working_block_name);
					$workingBlockName = $result_working_block_name['block'];
					echo $workingBlockName;
				
				}
			}
			echo "<br>";
			$work_places = $workingBlockName. ',' .$workingPanchayatName. ',' .$workingVillageName;
			echo $work_places;
			
	/*$sql_insert = "INSERT INTO `agency_master`(`name`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `contact_no`, `work_palces`, `expertise`) VALUES ('$agencyName','$email','$state','$district','$block','$panchayat','$village','$contact_number','$work_places','$skill')";
	$sql_register = "INSERT INTO `register_master`(`firstname`, `phone`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `password`, `role`) VALUES ('$agencyName','$contact_number','$email','$state','$district','$block','$panchayat','$village','$con_pass','$role')";
	echo $sql_register;
	$insert = $conn->query($sql_insert);
	$register = $conn->query($sql_register);
	if(($insert) && ($register)){	
	//die;
	header("location:managn.php?flag=true");
	}
	else {	
				header("location:managn.php?flag=false");
			}*/
			
	$sql_search = "SELECT * FROM `register_master` WHERE `email` = '$email'" ;
			$search_result = $conn->query($sql_search);
			$search_email = $search_result->fetch_array();
			$result_email = $search_email["email"];
			if($result_email == $email){
			
			$sql_insert = "INSERT INTO `agency_master`(`name`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `pincode`, `contact_no`, `work_palces`, `expertise`) VALUES ('$agencyName','$email','$state','$district','$block','$panchayat','$village','$pincode','$contact_number','$work_places','$skill')";
			$insert = $conn->query($sql_insert);
			echo $sql_insert;
			if($insert){	
				echo "i am in if";		
//die;				
				header("location:managn.php?flag=true");
			}
			else {	
			echo "i am in else";
			//die;
				header("location:managn.php?flag=false");
			} 
			break;
			}
			else{
			
			$sql_insert = "INSERT INTO `agency_master`(`name`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `pincode`, `contact_no`, `work_palces`, `expertise`) VALUES ('$agencyName','$email','$state','$district','$block','$panchayat','$village','$pincode','$contact_number','$work_places','$skill')";
			echo $sql_insert;
			$sql_register = "INSERT INTO `register_master`(`firstname`, `phone`, `email`, `state`, `district`, `block`, `panchayat`, `village`, `landmark`, `password`, `role`, `affiliation`) VALUES ('$agencyName','$contact_number','$email','$state','$district','$block','$panchayat','$village','$pincode','$con_pass','$role','$affiliation')";
			echo $sql_register;
			$insert = $conn->query($sql_insert);
			$register = $conn->query($sql_register);
			 
			if(($insert) && ($register)){	
				echo "i am in if with 2";		
//die;				
				header("location:managn.php?flag=true");
			}
			else {	
			echo "i am in else with 2";
//			die;
				header("location:managn.php?flag=false");
			} 
			
			break;
			}		
	}
	}
?>