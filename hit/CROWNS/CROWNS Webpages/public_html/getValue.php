<?php
require("connect.inc.php");
$stt = $_POST['state_id'];
$dist = $_POST['district_id'];
$bl = $_POST['block_id'];
$gp = $_POST['grampanchayat_id'];
$loc = $_POST['location_id'];
$ch = $_POST['change'];
$call = $_POST['caller_id'];
if($stt=="0")
	$stt="%";
if($dist=="0")
	$dist="%";
if($bl=="0")
	$bl="%";
if($gp=="0")
	$gp="%";
if($loc=="0")
	$loc="%";
if($ch=="locname")
	$ch1 = 'location';
else
	$ch1 = $ch;
$query ="SELECT distinct `$ch` FROM `location` WHERE state like('$stt') and district like('$dist') and block like('$bl') and grampanchayat like('$gp')";
$results = $conn->query($query);
if($call=="reports")
{
	echo("<option value='0' selected disabled>Select ".strtoupper(substr($ch1,0,1)).strtolower(substr($ch1,1))."</option>");
	echo("<option value='all'>All ".strtoupper(substr($ch1,0,1)).strtolower(substr($ch1,1))."s</option>");
}
else
{
	if($ch=='district')
		$query ="SELECT distinct `$ch` FROM `contactmaster` WHERE state='$stt'";
	elseif($ch=='block')
		$query ="SELECT distinct `$ch` FROM `contactmaster` WHERE state='$stt' and district='$dist'";
	elseif($ch=='grampanchayat')
		$query ="SELECT distinct `$ch` FROM `contactmaster` WHERE state='$stt' and district='$dist' and block='$bl'";
	elseif($ch=='locname')
		$query ="SELECT distinct `$ch` FROM `contactmaster` WHERE state='$stt' and district='$dist' and block='$bl' and grampanchayat='$gp'";
	$results = $conn->query($query);
	echo("<option value='all' selected>All ".strtoupper(substr($ch1,0,1)).strtolower(substr($ch1,1))."s</option>");
}
if(!($results->num_rows==0))
{
	while($res = $results->fetch_assoc())
		echo("<option value='".$res[$ch]."'>".$res[$ch]."</option>");
}
?>
