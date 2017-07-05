<?php
include("connect.inc.php");
session_start();
//echo ("you are noe in approve page");

print_r($_POST);

$a = $_POST['discard'];
$b = $_POST['filter'];
//echo $a;
//echo $b;
if($a == "Discard"){
	
	echo ("#############");
	
	$arr = $_POST['id_select'];
	$length = sizeof($arr);
	echo $length;
	for($i = 0; $i<$length; $i++){
		$id = $arr[$i];
		echo "id = ".$id;
		$sql = "UPDATE `donate_master` SET `is_checked`= 'n' WHERE `id`= '$id'";
		echo $sql;
		$result_data=$conn->query($sql);
		echo print_r($result_data);
		echo $result_data;
	}
	//die;
	if($result_data){	

	header("location:mandon.php?flag=true");
	}
else {	
	header("location:mandon.php?flag=false");
	}
	
	
	
}
//if($b == "Approve"){
else{
	
	echo ("&&&&&&&&&&&&&&&&");
	
	$arr = $_POST['id_select'];
	$length = sizeof($arr);
	echo $length;
	
	for($i = 0; $i<$length; $i++){
		$id = $arr[$i];
		echo "id = ".$id;
		$sql = "UPDATE `donate_master` SET `is_checked`= 'y' WHERE `id`= '$id'";
		echo $sql;
		$result_data=$conn->query($sql);
		echo print_r($result_data);
		echo $result_data;
	}
	//die;
	if($result_data){	

	header("location:mandon.php?flag=true");
	}
else {	
	header("location:mandon.php?flag=false");
	}
	
}


?>