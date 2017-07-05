<?php
require("connect.inc.php");
$ds = $_POST['disaster_id'];
$stt = $_POST['state_id'];
$dist = $_POST['district_id'];
$bl = $_POST['block_id'];
$gp = $_POST['grampanchayat_id'];
$loc = $_POST['location_id'];
$ch = $_POST['change'];
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
if($ch=="state"||$stt=="all")
	$query_disData=$conn->query("SELECT * FROM `disaster` where disastertype='$ds' order by disasterdate desc");
elseif($ch=="district"||$dist=="all")
	$query_disData=$conn->query("SELECT * FROM `disaster` WHERE locationid in (select `locationid` from `location` where state='$stt') order by disasterdate desc");
elseif($ch=="block"||$bl=="all")
	$query_disData=$conn->query("SELECT * FROM `disaster` WHERE locationid in (select `locationid` from `location` where state='$stt' and district='$dist') order by disasterdate desc");
elseif($ch=="grampanchayat"||$gp=="all")
	$query_disData=$conn->query("SELECT * FROM `disaster` WHERE locationid in (select `locationid` from `location` where state='$stt' and district='$dist' and block='$bl') order by disasterdate desc");
elseif($ch=="locname"||$loc=="all")
	$query_disData=$conn->query("SELECT * FROM `disaster` WHERE locationid in (select `locationid` from `location` where state='$stt' and district='$dist' and block='$bl' and grampanchayat='$gp') order by disasterdate desc");
else
	$query_disData=$conn->query("SELECT * FROM `disaster` WHERE locationid in (select `locationid` from `location` where state='$stt' and district='$dist' and block='$bl' and grampanchayat='$gp' and locname='$loc') order by disasterdate desc");
echo("<option value='0' selected disabled>Select Topic</option>");
//echo("<option value='shg'>Self Help Groups</option>");
echo("<option value='rapid'>RAPID</option>");
echo("<option value='all'>All Disasters in Area</option>");
while($row_dis = $query_disData->fetch_assoc())
	print("<option value='".$row_dis['disastername']."'>".$row_dis['locname'].", ".$row_dis['disastertype'].", ".$row_dis['disasterdate']."</option>");
?>
