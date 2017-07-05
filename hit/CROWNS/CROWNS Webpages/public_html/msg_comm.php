<?php
	//error_reporting(0);
	//header('Content-Type: text/html; charset=utf-8');
	/*if(!isset($_POST['add']) || !isset($_POST['msg']))
	{
		echo "Invalid Parameters";
		return;
	}*/
	//মোবাইল নম্বর লিখুন
	
	$name='Test';
	$message='yes';
	$GLOBALS['str']="";
	$name=$_POST["add"];
	$message=$_POST["msg"];
	function getJSON($stmt)
	{
		$meta = $stmt->result_metadata();
		while ($field = $meta->fetch_field()) {
			$parameters[] = &$row[$field->name];
		}			
		call_user_func_array(array($stmt, 'bind_result'), $parameters);
		while ($stmt->fetch()) {
			foreach($row as $key => $val) {
				$x[$key] = $val;
			}
			$results[] = $x;
		}
		return json_encode($results);
	}
	
	function validate($add,$msg)
	{
		$status=FALSE;
		$resid=1;
		$date=new DateTime();
		$responseid=0;
		//$add=8900632324;
		//$msg="hello";
		//$tstamp=$date->getTimestamp();
		require 'connect.inc.php';
		mysqli_set_charset($conn, 'utf8');
		mysqli_query($conn,"SET collation_connection = utf8_general_ci");
		
		
		if(mb_strtolower($msg)=="y")
		{
			
			require 'connect.inc.php';
			mysqli_set_charset($conn, 'utf8');
			mysqli_query($conn,"SET collation_connection = utf8_general_ci");
			//$sql1=$conn->query("select * from `pho`");
			//echo($sql1['user_mobile_no']);
			
			$sql=$conn->prepare("select * from `user_mas1` where user_mobile_no=?");
			$sql->bind_param("s",$add);
			$sql->execute();
			$sql->store_result();
			if(!(($sql->num_rows)>0))
			{
				//   empty response
				$sql2=$conn->prepare("INSERT INTO `user_mas1` (`user_mobile_no`, `user_type`, `rid`, `msg`,`last_qsent`) VALUES (?,?,?,?,?);");
				$user_type=1;
				$ques_id=1;
				$sql2->bind_param("siisi",$add,$user_type,$resid,$msg,$ques_id);
				$sql2->execute();
				$sql2->close();
				$sql3=$conn->prepare("select qdescription from volunteers where qid=1");
				$sql3->execute();
				$sql3->store_result();
				if(($sql3->num_rows)>0)
				{
					$GLOBALS['str'] = getJSON($sql3);
					$status=TRUE;
				}	
				$sql3->close();
			}	
			else
			{
				//entry exists
				$sql2=$conn->prepare("SELECT max(rid) from user_mas1 where 	user_mobile_no=?");
				$sql2->bind_param("s",$add);				
				$sql2->execute();
				$sql2->store_result();
				if($sql2->num_rows>0)
				{					
					$json=json_decode(getJSON($sql2),true);
					$max=$json[0]['max(rid)'];
					$resid=$max+1;
					$sql3=$conn->prepare("INSERT INTO `user_mas1` (`user_mobile_no`, `user_type`, `rid`, `msg`,`last_qsent`) VALUES (?,?,?,?,?);");
					$user_type=1;
					$ques_id=1;
					$sql3->bind_param("siisi",$add,$user_type,$resid,$msg,$ques_id);
					$sql3->execute();
					$sql3->close();
					$sql3=$conn->prepare("select qdescription from volunteers where qid=1");
					$sql3->execute();
					$sql3->store_result();
					if(($sql3->num_rows)>0)
					{
						$GLOBALS['str'] = getJSON($sql3);
						$status=TRUE;
					}	
					$sql3->close();
				}
				$sql2->close();
			}
			$sql->close();
		}
		else
		{
			require 'connect.inc.php';
			mysqli_set_charset($conn, 'utf8');
			mysqli_query($conn,"SET collation_connection = utf8_general_ci");
			$sql2=$conn->prepare("SELECT max(rid) from user_mas1 where 	user_mobile_no=?");
			$sql2->bind_param("s",$add);				
			$sql2->execute();
			$sql2->store_result();
			$json = json_decode(getJSON($sql2),true);
			if(is_null($json[0]['max(rid)']))
				return false;
			if($sql2->num_rows>0)
			{					
				//$json=json_decode(getJSON($sql2),true);
				$max=$json[0]['max(rid)'];
				$sql=$conn->prepare("SELECT * from user_mas1 where user_mobile_no=? and rid=?");
				$sql->bind_param("si",$add,$max);
				$sql->execute();
				$sql->store_result();
				$json=json_decode(getJSON($sql),true);
				$lattempt=$json[0]['last_qsent'];
				$lans=strtolower($msg);
				$restid=$max;
				$sql->close();
				$sql3=$conn->prepare("SELECT * from volunteers");
				$sql3->execute();
				$sql3->store_result();
				$tquestions=$sql3->num_rows;
				$sql3->close();
				if($lattempt<=$tquestions)
				{
					$get_Cat = $conn->query("select * from `question_data` where qid=$lattempt");
					$row_Cat = $get_Cat->fetch_assoc();
					$subCt = $row_Cat['catname'];
					$qsnID = $row_Cat['questionid'];
					$dName = $row_Cat['disastername'];
					if($subCt=="cat_training")
					{
						if($lattempt==1)
							$new_qid=$lattempt+1;
						elseif($lattempt==2)
						{
							if($lans=="a")
								$new_qid=$lattempt+1;
							elseif($lans=="b")
								$new_qid=$lattempt+2;
							else      //same question will be repeated
								$new_qid=$lattempt;
						}
						elseif($lattempt==3)
							$new_qid=8;
						elseif($lattempt==4 || $lattempt==6)
						{
							if($lans=="d")
								$new_qid=$lattempt+1;
							elseif($lans=="a"||$lans=="b"||$lans=="c")
								$new_qid=8;
							else
								$new_qid=$lattempt;
						}
						elseif($lattempt==5)
						{
							if($lans=="c")
								$new_qid=$lattempt+1;
							elseif($lans=="a"||$lans=="b")
								$new_qid=8;
							else
								$new_qid=$lattempt;
						}
						elseif($lattempt>=8)
							$new_qid=$lattempt+1;
					}
					elseif($subCt=="cat_educational")
					{
						if($lattempt==1)
						{
							if($lans=="a")
								$new_qid=$lattempt+1;	
							elseif($lans=="b")
								$new_qid=$tquestions+1;
							else
								$new_qid=$lattempt;
						}
						else
						{
							if($lans=="a"||$lans=="b")
								$new_qid=$lattempt+1;
							else
								$new_qid=$lattempt;
						}
					}
					elseif($subCt=="cat_advisory")
					{
						if($lattempt==1||$lattempt==2)
							$new_qid=$lattempt+1;
						elseif($lattempt==3||$lattempt==4||$lattempt==6)
						{
							if($lans=="c")
								$new_qid=$lattempt+1;
							elseif($lans=="a"||$lans=="b")
								$new_qid=7;
							else
								$new_qid=$lattempt;
						}
						elseif($lattempt==5)
						{
							if($lans=="d")
								$new_qid=$lattempt+1;
							elseif($lans=="a"||$lans=="b"||$lans=="c")
								$new_qid=7;
							else
								$new_qid=$lattempt;
						}
						elseif($lattempt>=7)
							$new_qid=$lattempt+1;
					}
					elseif($subCt=="cat_market")
					{
						if($lattempt==1)
						{
							if($lans=="a")
								$new_qid=$lattempt+1;
							elseif($lans=="b")
								$new_qid=$lattempt+2;
							else
								$new_qid=$lattempt;
						}
						elseif($lattempt==3||$lattempt==5)
						{
							if($lans=="d")
								$new_qid=$lattempt+1;
							elseif($lans=="a"||$lans=="b"||$lans=="c")
								$new_qid=7;
							else
								$new_qid=$lattempt;
						}
						elseif($lattempt==2)
						{
							if($lans=="a"||$lans=="b"||$lans=="c"||$lans=="d")
								$new_qid=$lattempt+1;
							else
								$new_qid=$lattempt;
						}
						elseif($lattempt==4)
						{
							if($lans=="c")
								$new_qid=$lattempt+1;
							elseif($lans=="a"||$lans=="b")
								$new_qid=7;
							else
								$new_qid=$lattempt;
						}
						elseif($lattempt==6)
						{
							if($lans=="a"||$lans=="b")
								$new_qid=7;
							else
								$new_qid=$lattempt;
						}
						elseif($lattempt>=7&&$lattempt<9)
							$new_qid=$lattempt+1;
						elseif($lattempt==9||$lattempt==10)
						{
							if($lans=="c")
								$new_qid=$lattempt+1;	
							elseif($lans=="a"||$lans=="b")
								$new_qid=12;
							else
								$new_qid=$lattempt;
						}
						elseif($lattempt==11)
						{
							if($lans=="a"||$lans=="b")
								$new_qid=12;
							else
								$new_qid=$lattempt;			
						}
						elseif($lattempt>=12)
							$new_qid=$lattempt+1;
					}
					elseif($subCt=="cat_rapid")
					{
						if($lattempt==25)
						{
							if($lans!="a")
								$new_qid=31;
							else
								$new_qid = $lattempt + 1;
						}
						elseif($lattempt==32)
						{
							if($lans=="a")
								$new_qid=$lattempt+1;
							else
								$new_qid=37;
						}
						elseif($lattempt==40)
						{
							if($lans=="a")
								$new_qid=$lattempt+1;
							else
								$new_qid=46;
						}
						else
							$new_qid=$lattempt+1;
					}
					$conn->query("INSERT INTO `response` (`mobileno`, `questionid`, `catname`, `answer`, `disastername`, `timestamp`,`responseid`) VALUES 
('$add', '$qsnID', '$subCt', '$msg', '$dName', now(),$max)");
					$sql1=$conn->prepare("INSERT INTO `ans2` (`qid`, `ans`, `mobile`, `rid`, `timestamp`) VALUES (?, ?, ?, ?, NOW());");
					//$new_qid=$lattempt+1;
					$sql1->bind_param("issi",$lattempt,$msg,$add,$max);
					$sql1->execute();
					$sql1->close();
					$sql4=$conn->prepare("UPDATE user_mas1 set last_qsent=? where user_mobile_no=? and rid=?");
					$sql4->bind_param("isi",$new_qid,$add,$max);
					$sql4->execute();
					$sql4->close();
					if($lattempt<$tquestions)
					{
						$sql3=$conn->prepare("select qdescription from volunteers where qid=?");
						$sql3->bind_param("i",$new_qid);
						$sql3->execute();
						$sql3->store_result();
						if(($sql3->num_rows)>0)
						{
							$GLOBALS['str'] = getJSON($sql3);
							$status=TRUE;
						}	
						$sql3->close();
					}
					else
					{
						$sql=$conn->prepare("select * from tspeech");
						$sql->execute();
						$sql->store_result();
						$s_remark=$sql->num_rows;
						if($s_remark>0)
						{
							$GLOBALS['str']=getJSON($sql);
							$status=true;
						}
						$sql->close();
					}
				}
			}
			else
			{
				return false;
			}
		}
		return $status;
	}
	
	if(validate($name,$message))
	{
		echo $GLOBALS['str'];
	}
	else
	{
		echo "Invalid response";
	}    
?>
