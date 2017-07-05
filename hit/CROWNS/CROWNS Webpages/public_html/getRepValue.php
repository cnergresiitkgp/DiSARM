<?php
require("connect.inc.php");
$ds = $_POST['disaster_id'];
$cat = $_POST['category'];
$call = $_POST['caller_id'];
if($cat=="")
{
	if($call=="reports")
	{
		$query_repData=$conn->query("SELECT distinct `supercat` FROM `category` where disastertype='$ds'");
		echo("<option value='0' selected disabled>Select Type of Report</option>");
	}
	else
	{
		$query_repData=$conn->query("select distinct `supercat` from (select * from `category` where supercat not like('Livelihood for SHGs'))tab where disastertype=(SELECT `disastertype` FROM `disaster` where disastername='$ds')");
		echo("<option value='0' selected disabled>Select Category</option>");
	}
	while($row_cat = $query_repData->fetch_assoc())
		print("<option value='".$row_cat['supercat']."'>".$row_cat['supercat']."</option>");
}
else
{
	if($ds!="")
	{
		if($call=='interaction')
		{
			if($ds=="rapid")
				$query_repData=$conn->query("SELECT distinct `catname`,`subcatname` FROM `category` where `supercat`='$cat'");
			else
			{
				$query_repData=$conn->query("select distinct `catname`,`subcatname` from `category` where disastertype=(SELECT `disastertype` FROM `disaster` where disastername='$ds') and supercat='$cat'");
			}
			echo("<option value='0' selected disabled>Select Sub-Category</option>");
		}
		else
		{
			$query_repData=$conn->query("SELECT distinct `catname`,`subcatname` FROM `category` where `supercat`='$cat' and disastertype='$ds'");
			echo("<option value='0' selected>All Sub-Types of Report</option>");
		}
	}
	else
	{
		$query_repData=$conn->query("SELECT distinct `catname`,`subcatname` FROM `category` where `supercat`='$cat'");
		echo("<option value='All' selected>All Sub-Categories</option>");
	}
	while($row_cat = $query_repData->fetch_assoc())
		print("<option value='".substr($row_cat['catname'],4)."'>".$row_cat['subcatname']."</option>");
}
?>
