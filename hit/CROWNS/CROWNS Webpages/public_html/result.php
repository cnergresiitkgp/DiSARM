<?php
session_start();
if($_SESSION['auth']!='yes_Make')
{
	header('Location: control.php');
}
else
{
	$_SESSION['auth']='unauth';
	require 'connect.inc.php';
	$repT = $_SESSION['repType'];
	$dis = $_SESSION['disaster'];
	$stDt = $_SESSION['startDate'];
	$endDt = $_SESSION['endDate'];
		$query_repInfo=$conn->query("SELECT `repname` FROM `catreport` where supercat='$repT' and type='temporary'");
		$repInfo = $query_repInfo->fetch_assoc();
		$temp=$repInfo['repname'].$dis;
		$conn->query("delete from `$temp`");
		$stt = $_SESSION['state'];
		$dist = $_SESSION['district'];
		$blk = $_SESSION['block'];
		$gp = $_SESSION['grampanchayat'];
		$loc = $_SESSION['location'];
		$dName = $_SESSION['disName'];
		
		if($dName=='all'||$dName=='rapid')
		{
			if($stt=='all')
				$query_loc=$conn->query("SELECT `locationid` FROM `location`");
			elseif($dist=='all')
				$query_loc=$conn->query("SELECT `locationid` FROM `location` where `state`='$stt'");
			elseif($blk=='all')
				$query_loc=$conn->query("SELECT `locationid` FROM `location` where `state`='$stt' and `district`='$dist'");
			elseif($gp=='all')
				$query_loc=$conn->query("SELECT `locationid` FROM `location` where `state`='$stt' and `district`='$dist' and `block`='$blk'");
			elseif($loc=='all')
				$query_loc=$conn->query("SELECT `locationid` FROM `location` where `state`='$stt' and `district`='$dist' and `block`='$blk' and `grampanchayat`='$gp'");
			else
				$query_loc=$conn->query("SELECT `locationid` FROM `location` where `state`='$stt' and `district`='$dist' and `block`='$blk' and `grampanchayat`='$gp' and `locname`='$loc'");
			if($dName=='all' || $dName=='rapid')
				$dName = '%';
			//elseif($dName=='shg')
			//	{}
			//elseif($dName=='rapid')
			
		}
		else
			$query_loc=$conn->query("SELECT `locationid` FROM `disaster` where disastername='$dName'");
		//echo("<script type='text/javascript'>alert('".$query_loc->num_rows."');</script>");
		if(!($query_loc->num_rows==0))
		{
			while($row = $query_loc->fetch_assoc())//fetch each locationid of selected region
			{
				$loc = $row['locationid'];
				if($_SESSION['disName']=='all')//||$_SESSION['disName']=='shg')
					$query_chk=$conn->query("SELECT `disastername` FROM `disaster` where `locationid`=$loc");
				elseif($_SESSION['disName']=='rapid')
				{
					$dName = $loc.'-rapid';
					$query_chk=$conn->query("SELECT distinct `disastername` FROM `response` where disastername='$dName'");
				}
				else
					$query_chk=$conn->query("SELECT `disastername` FROM `disaster` where `locationid`=$loc and disastername like('$dName')");
				if(!($query_chk->num_rows==0))
				{
					while($row1 = $query_chk->fetch_assoc())//fetch each disastername that is related to selected region
					{
						
						$dName = $row1['disastername'];
						$conn->query("insert into `$temp`(`disastername`,`repdate`) values('$dName',now())");
						$query_cats=$conn->query("SELECT `catname` FROM `category` where `supercat`='$repT' and `disastertype`='$dis'");
						if(!($query_cats->num_rows==0))
						{
							while($row = $query_cats->fetch_assoc())//fetch each category that is related to selected disastertype
							{
								$cat=$row['catname'];
								$query_ids=$conn->query("SELECT `questionid` FROM `$cat`");
								while($row1 = $query_ids->fetch_assoc())//fetch each question related to individual categories
								{
									$qID=$row1['questionid'];
									if(substr($qID,-1)=='a'||substr($qID,-1)=='c'||substr($qID,-1)=='d'||substr($qID,-1)=='e'||substr($qID,-1)=='f')
									{
										$query_ans=$conn->query("SELECT MAX(cn),`answer` from (SELECT count(*) cn,`answer` FROM `response` WHERE catname='$cat' and disastername='$dName' and questionid='$qID' and timestamp>'$stDt' AND timestamp<'$endDt' GROUP BY `answer` ORDER BY `cn` DESC)tab");
										if(!($query_ans->num_rows==0))
										{
											$row2 = $query_ans->fetch_assoc();
											$op = 'option'.strtolower($row2['answer']);
											if(substr($qID,-1)=='a')
											{
												if($op=='optiona'||$op=='optionb'||$op=='optionc')
												{
													$query_op=$conn->query("SELECT `$op` FROM `$cat` where questionid='$qID'");
													$row3 = $query_op->fetch_assoc();
													$ans=mysqli_real_escape_string($conn,$row3[$op]);
													$qID=$cat.$qID;
													$conn->query("update `$temp` set `$qID`='$ans' where `disastername`='$dName'");
												}
											}
											elseif(substr($qID,-1)=='c')
											{
												$ans=mysqli_real_escape_string($conn,$row2['answer']);
												$qID=$cat.$qID;
												$conn->query("update `$temp` set `$qID`='$ans' where `disastername`='$dName'");
											}
											elseif(substr($qID,-1)=='d')
											{
												if($op=='optiona'||$op=='optionb')
												{
													$query_op=$conn->query("SELECT `$op` FROM `$cat` where questionid='$qID'");
													$row3 = $query_op->fetch_assoc();
													$ans=mysqli_real_escape_string($conn,$row3[$op]);
													$qID=$cat.$qID;
													$conn->query("update `$temp` set `$qID`='$ans' where `disastername`='$dName'");
												}
											}
											elseif(substr($qID,-1)=='e')
											{
												if($op=='optiona'||$op=='optionb'||$op=='optionc'||$op=='optiond')
												{
													$query_op=$conn->query("SELECT `$op` FROM `$cat` where questionid='$qID'");
													$row3 = $query_op->fetch_assoc();
													$ans=mysqli_real_escape_string($conn,$row3[$op]);
													$qID=$cat.$qID;
													$conn->query("update `$temp` set `$qID`='$ans' where `disastername`='$dName'");
												}
											}
											elseif(substr($qID,-1)=='f')
											{
												if($op=='optiona'||$op=='optionb'||$op=='optionc'||$op=='optiond'||$op=='optione')
												{
													$query_op=$conn->query("SELECT `$op` FROM `$cat` where questionid='$qID'");
													$row3 = $query_op->fetch_assoc();
													$ans=mysqli_real_escape_string($conn,$row3[$op]);
													$qID=$cat.$qID;
													$conn->query("update `$temp` set `$qID`='$ans' where `disastername`='$dName'");
												}
											}
										}
									}
									elseif(substr($qID,-1)=='b')
									{
										$query_ans=$conn->query("SELECT round(AVG(answer),0) av FROM `response` WHERE catname='$cat' and disastername='$dName' and questionid='$qID' and timestamp>'$stDt' AND timestamp<'$endDt'");
										if(!($query_ans->num_rows==0))
										{
											$row2 = $query_ans->fetch_assoc();
											if($row2['av'])
											{
												$ans = $row2['av'];
												$qID=$cat.$qID;
												$conn->query("update `$temp` set `$qID`='$ans' where `disastername`='$dName'");
											}
										}
									}
								}
							}
						}
					}
				}
			}
			if($_SESSION['disName']=='all' || $_SESSION['disName']=='rapid')
			{
				$dName = 'output';
				$conn->query("insert into `$temp`(`disastername`,`repdate`) values('$dName',now())");
				$query_cats=$conn->query("SELECT `catname` FROM `category` where `supercat`='$repT' and `disastertype`='$dis'");
				while($row = $query_cats->fetch_assoc())
				{
					$cat=$row['catname'];
					$query_ids=$conn->query("SELECT `questionid` FROM `$cat`");
					while($row1 = $query_ids->fetch_assoc())
					{
						$qID=$row1['questionid'];
						$qID=$cat.$qID;
						if(substr($qID,-1)=='a'||substr($qID,-1)=='c'||substr($qID,-1)=='d'||substr($qID,-1)=='e'||substr($qID,-1)=='f')
						{
							//echo($qID);
							$query_ans=$conn->query("SELECT MAX(cn),`$qID` from (SELECT count(*) cn,`$qID` FROM `$temp` where `disastername` not like('$dName') and `$qID`!='' GROUP BY `$qID` ORDER BY `cn` DESC)tab");
							if(!($query_ans->num_rows==0))
							{
								$row_ans=$query_ans->fetch_assoc();
								$q1 = mysqli_real_escape_string($conn,$row_ans[$qID]);
								$conn->query("update `$temp` set `$qID`='$q1' where `disastername`='$dName'");
							}
						}
						elseif(substr($qID,-1)=='b')
						{
							$query_ans=$conn->query("SELECT round(SUM($qID),0) av FROM `$temp` WHERE disastername not like('$dName') and `$qID`!=''");
							if(!($query_ans->num_rows==0))
							{
								$row2 = $query_ans->fetch_assoc();
								$ans = mysqli_real_escape_string($conn,$row2['av']);
								$conn->query("update `$temp` set `$qID`='$ans' where `disastername`='$dName'");
							}
						}
					}
				}
			}
			$_SESSION['auth']='showrep';
			if($_SESSION['disName']!='rapid')
			{
				$_SESSION['disName'] = $dName;
				$_SESSION['report'] = $repInfo['repname'];
				echo("<script type='text/javascript'>document.location = 'showreport.php';</script>");
			}
			else
			{
				$_SESSION['disName'] = $dName;
				$_SESSION['report'] = $repInfo['repname'];
				echo("<script type='text/javascript'>document.location = 'rapidreport.php';</script>");
			}
		}
}
?>
