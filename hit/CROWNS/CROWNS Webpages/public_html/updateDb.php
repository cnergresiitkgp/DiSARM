<?php

	
	
	function DBupdate($mid){
		require 'connect.inc.php';
		//$email_id = $_GET['email'];
		$data = "UPDATE `chat_master` SET `flag`='y' WHERE `id` = $mid";
		echo $data;
		//die;
		$result_data = $conn->query($data);
		if($result_data){
			echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='viewMsg.php';
    </SCRIPT>");
		}
		else{
			echo "error";
		}
	}
?>