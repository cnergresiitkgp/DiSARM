
	<?php
		session_start();
		require 'connect.inc.php';
		$id=$_SESSION['log_id'];
		$query_cstar=$conn->query("SELECT * FROM `register_master` where `id`=$id");
		if($query_cstar->num_rows!=1 || $id==-1 )
			header( 'Location: index.php' );
	?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>CROWNS - Crowdsourced Interactive Information System for Disaster Management</title>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
   	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->






	<link rel="stylesheet" href="css/marquee.css" >



    <link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />

    
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    
    <!-- animations -->
    <link href="js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
    
<!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="css/colors/red.css" />-->
    <!--<link rel="stylesheet" href="css/colors/green.css" />-->
    <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/colors/lightblue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/colors/bridge.css" />-->
    <!--<link rel="stylesheet" href="css/colors/slate.css" />-->
    <!--<link rel="stylesheet" href="css/colors/yellow.css" />-->
    <!--<link rel="stylesheet" href="css/colors/darkred.css" />-->

<!-- just remove the below comments witch bg patterns you want to use --> 
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-default.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-one.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-two.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-three.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-four.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-five.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-six.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-seven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eight.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-nine.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-ten.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eleven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-twelve.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-thirteen.css" />-->
    
    <!-- mega menu -->
    <link href="js/mainmenu/sticky.css" rel="stylesheet">
    <link href="js/mainmenu/bootstrap.min.css" rel="stylesheet">
    <link href="js/mainmenu/demo.css" rel="stylesheet">
    <link href="js/mainmenu/menu.css" rel="stylesheet">
    
    <!-- slide panel -->
    <link rel="stylesheet" type="text/css" href="js/slidepanel/slidepanel.css">
    
	<!-- Master Slider -->
    <link rel="stylesheet" href="js/masterslider/style/masterslider.css" />
    <link rel="stylesheet" href="js/masterslider/skins/default/style.css" />
    <link rel="stylesheet" href="js/masterslider/style.css" />

	<!-- cubeportfolio -->
	<link rel="stylesheet" type="text/css" href="js/cubeportfolio/cubeportfolio.min.css">
    
	<!-- tabs -->
    <link rel="stylesheet" type="text/css" href="js/tabs/assets/css/responsive-tabs.css">
    <link rel="stylesheet" type="text/css" href="js/tabs/assets/css/responsive-tabs2.css">

	<!-- carousel -->
    <link rel="stylesheet" href="js/carousel/flexslider.css" type="text/css" media="screen" />


 	<link rel="stylesheet" type="text/css" href="js/carousel/skin.css" />
    
    <!-- accordion -->
    <link rel="stylesheet" href="js/accordion/accordion.css" type="text/css" media="all">
    
    <!-- Lightbox -->
    <link rel="stylesheet" type="text/css" href="js/lightbox/jquery.fancybox.css" media="screen" />

    <!-- forms -->
    <link rel="stylesheet" href="js/form/sky-forms.css" type="text/css" media="all">
	
	
      
</head>

<body>


<div class="site_wrapper">



<div class="clearfix"></div>

<header id="header">

	<!-- Top header bar -->
	<div id="topHeader">
    
	<div class="wrapper">
         
        <div class="top_nav">
        <div class="container">
                
        <div class="right">
            
            <ul>
            	<?php  
				if(isset($_SESSION['username'])){  ?>
					<li> <a href="logout.php" class="dropdown-toggle"><i class="fa fa-unlock"></i> LogOut</a></li>
				<?php }
				else {?>
					<li> <a href="MyLogin.php" class="dropdown-toggle"><i class="fa fa-lock"></i> LogIn</a></li> 
					<li> <a href="MyRegister.php" class="dropdown-toggle"><i class="fa fa-edit"></i> Register</a></li> <?php  } ?>
					<li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@crowns.com</a></li>
					<li><i class="fa fa-phone"></i> +88 123 456 7890</li>
            		<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-flickr"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					<li><a href="#"><i class="fa fa-rss"></i></a></li>
					<li class="link"><a href="#"><i class="fa fa-unlock"></i> <?php echo $_SESSION['firstname'];?></a></li>
            </ul>
            
        </div><!-- end right social links -->
        
        </div>
        </div>
            
 	</div>
    
	</div><!-- end top navigation -->
	
    
	<div id="trueHeader">
    
	<div class="wrapper">
    
     <div class="container">
    
		<!-- Logo -->
		<div class="logo"><a href="index.php" id="logo"></a></div>
		
	<!-- Menu -->
	<div class="menu_main">
        
	<div class="navbar yamm navbar-default">
    
    <div class="container">
      <div class="navbar-header">
        <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>
          <button type="button" > <i class="fa fa-bars"></i></button>
        </div>
      </div>
      
      <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
      
         <ul class="nav navbar-nav">
        
				<li><a href="admin.php" class="dropdown-toggle"><i class="fa fa-home"></i> Home</a></li>
				<li> <a href="impcon_agency.php" class="dropdown-toggle"><i class="fa fa-star"></i> Important Contacts</a></li>
				<li> <a href="helpme_agency.php" class="dropdown-toggle"><i class="fa fa-medkit"></i> Help Me</a></li>
				<li> <a href="emergency_agency.php" class="dropdown-toggle"><i class="fa fa-flag"></i> Report An Emergency</a></li>
				<li> <a href="SearchVictim_agency.php" class="dropdown-toggle"><i class="fa fa-map-marker"></i> Locate Missing Person</a></li>
				<li> <a href="MySess_Check.php" class="dropdown-toggle"><i class="fa fa-money"></i> Donate</a></li>
        </ul>
            
      </div>
      </div>
     </div>
     
	</div><!-- end menu -->
        
	</div>
		
	</div>
    
	</div>
    
</header>

<div class="clearfix"></div>

<div class="clearfix"></div>



<div class="container">

    <div class="content_fullwidth lessmar">
    
      <div class="one_fourth">
      
       <div class="clearfix"></div>
        <h4><strong></strong></h4>
        <table class="table-style">
				<tr class="table-list">
					<td width='50%'><b><a href="admin.php">Manage Notifications</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="mancon.php">Manage Contacts</a></b></td>
				</tr>
				<tr class="table-list">
					<th width='50%'><b><a href="manfeed.php"><font color="#444444"><i class="fa fa-angle-right"></i> Publish Information</font></a></b></th>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="control.php">View Reports</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="managn.php">Manage Agencies</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="manage_volunteers.php">Manage Volunteers</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="manage_resources.php">Manage Resources</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="mandon.php">Manage Donations</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="rapid.php">RAPID</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="mansms.php">Manage Interactive SMS System</a></b></td>
				</tr>
			</table>
       
        
      </div>
      
      <div class="three_fourth last">
		  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		  <script>
		  		function edtValue(id,msg)
				{
					var msg_value = prompt(msg+'\nEnter new message');
					$.ajax({
						type: "POST",
						url: "edtMsg.php",
						data: 	{
									val_id: id,
									val_msg: msg_value
								},
						success: function(data)
								 {
									 alert('Message Edited Successfully!');
									 document.location = 'manfeed.php';
								 }
					});
				}
				function pubChk(tot1,tot2)
				{
					var chkd = false;
					for(var i=0,j=0;i<tot1,j<tot2;i++,j++)
					{
						if($('#pub'+i).is(':checked')||$('#msg'+j).is(':checked'))
						{
							chkd = true;
							break;
						}
					}
					if(chkd)
					{
						$('#publish').prop('disabled', 'disabled');
						document.getElementById("publish").className = "button button-secondary";
					}
					else
					{
						$('#publish').removeAttr('disabled');
						document.getElementById("publish").className = "button";
					}
				}
		  </script>
		  <form method="post" id="sky-form" class="sky-form">
     	    
     	    <?php
				$query_temp = $conn->query("SELECT `disastername`,`timestamp` FROM `response` WHERE disastername IN (SELECT `disastername` FROM `disaster`) ORDER BY timestamp DESC LIMIT 1");
	 	    	$temp_row = $query_temp->fetch_assoc();
				$endDt = $temp_row['timestamp'];
     	    	$query_temp = $conn->query("SELECT `endtime` FROM `situational_info` ORDER BY endtime DESC LIMIT 1");
     	    	if($query_temp->num_rows!=0)
				{
					$temp_row = $query_temp->fetch_assoc();
					$end = $temp_row['endtime'];
					if($endDt!=$end)
						fillData();
				}
				else
					fillData();
				function fillData()
				{
						require 'connect.inc.php';
						$query_temp = $conn->query("SELECT `disastername`,`timestamp` FROM `response` WHERE disastername IN (SELECT `disastername` FROM `disaster`) ORDER BY timestamp DESC LIMIT 1");
			 	    	$temp_row = $query_temp->fetch_assoc();
						$dName = $temp_row['disastername'];
						$endDt = $temp_row['timestamp'];
			 	    	$query_temp = $conn->query("SELECT * FROM `location` WHERE locationid=(SELECT `locationid` FROM `disaster` WHERE disastername='$dName')");
			 	    	$row1 = $query_temp->fetch_assoc();
			 	    	$loc = $row1['locname'];
			 	    	if($row1['grampanchayat']!='')
			 	    		$loc = $loc.", ".$row1['grampanchayat'];
			 	    	if($row1['block']!='')
			 	    		$loc = $loc.", ".$row1['block'];
			 	    	if($row1['district']!='')
			 	    		$loc = $loc.", ".$row1['district'];
			 	    	if($row1['state']!='')
			 	    		$loc = $loc.", ".$row1['state'];
			 	  		$query_temp = $conn->query("select * from (SELECT `timestamp` FROM `response` WHERE disastername='$dName' ORDER BY timestamp DESC LIMIT 25)tab order by timestamp LIMIT 1");
			 	    	$temp_row = $query_temp->fetch_assoc();
						$stDt = $temp_row['timestamp'];
			 	  		$query_temp = $conn->query("select distinct `catname` from `response` WHERE disastername='$dName' and timestamp>='$stDt' AND timestamp<='$endDt'");
			 	  		while($row = $query_temp->fetch_assoc())
						{
							$cat=$row['catname'];
							//fetch question ids from individual categories
							$query_ids=$conn->query("SELECT distinct `questionid` from `response` WHERE disastername='$dName' and timestamp>='$stDt' AND timestamp<='$endDt' and catname='$cat'");
							while($row1 = $query_ids->fetch_assoc())
							{
								$qID=$row1['questionid'];
								if(substr($qID,-1)=='a'||substr($qID,-1)=='c'||substr($qID,-1)=='d'||substr($qID,-1)=='e'||substr($qID,-1)=='f') //non-numeric questions
								{
									$query_ans=$conn->query("SELECT MAX(cn),`answer` from (SELECT count(*) cn,`answer` FROM `response` WHERE catname='$cat' and disastername='$dName' and questionid='$qID' and timestamp>='$stDt' AND timestamp<='$endDt' GROUP BY `answer` ORDER BY `cn` DESC)tab");
									if(!($query_ans->num_rows==0))
									{
										$row2 = $query_ans->fetch_assoc();
										$op = 'option'.strtolower($row2['answer']);
										if(substr($qID,-1)=='a')
										{
											if($op=='optiona'||$op=='optionb'||$op=='optionc')
											{
												$query_op=$conn->query("SELECT `$op`,`repstatement` FROM `$cat` where questionid='$qID'");
												$row3 = $query_op->fetch_assoc();
												$ans = mysqli_real_escape_string($conn,$row3['repstatement'])." - ".mysqli_real_escape_string($conn,$row3[$op]);
												$conn->query("insert into `situational_info` values('','$ans','$loc','raw message',now(),'$endDt')");
											}
										}
										elseif(substr($qID,-1)=='c')
										{
											$query_op=$conn->query("SELECT `repstatement` FROM `$cat` where questionid='$qID'");
											$row3 = $query_op->fetch_assoc();
											$ans = mysqli_real_escape_string($conn,$row3['repstatement'])." - ".mysqli_real_escape_string($conn,$row2['answer']);
											$conn->query("insert into `situational_info` values('','$ans','$loc','raw message',now(),'$endDt')");
										}
										elseif(substr($qID,-1)=='d')
										{
											if($op=='optiona'||$op=='optionb')
											{
												$query_op=$conn->query("SELECT `$op`,`repstatement` FROM `$cat` where questionid='$qID'");
												$row3 = $query_op->fetch_assoc();
												$ans = mysqli_real_escape_string($conn,$row3['repstatement'])." - ".mysqli_real_escape_string($conn,$row3[$op]);
												$conn->query("insert into `situational_info` values('','$ans','$loc','raw message',now(),'$endDt')");
											}
										}
										elseif(substr($qID,-1)=='e')
										{
											if($op=='optiona'||$op=='optionb'||$op=='optionc'||$op=='optiond')
											{
												$query_op=$conn->query("SELECT `$op`,`repstatement` FROM `$cat` where questionid='$qID'");
												$row3 = $query_op->fetch_assoc();
												$ans = mysqli_real_escape_string($conn,$row3['repstatement'])." - ".mysqli_real_escape_string($conn,$row3[$op]);
												$conn->query("insert into `situational_info` values('','$ans','$loc','raw message',now(),'$endDt')");
											}
										}
										elseif(substr($qID,-1)=='f')
										{
											if($op=='optiona'||$op=='optionb'||$op=='optionc'||$op=='optiond'||$op=='optione')
											{
												$query_op=$conn->query("SELECT `$op`,`repstatement` FROM `$cat` where questionid='$qID'");
												$row3 = $query_op->fetch_assoc();
												$ans = mysqli_real_escape_string($conn,$row3['repstatement'])." - ".mysqli_real_escape_string($conn,$row3[$op]);
												$conn->query("insert into `situational_info` values('','$ans','$loc','raw message',now(),'$endDt')");
											}
										}
									}
								}
								elseif(substr($qID,-1)=='b')
								{
									$query_ans=$conn->query("SELECT round(AVG(answer),0) av FROM `response` WHERE catname='$cat' and disastername='$dName' and questionid='$qID' and timestamp>='$stDt' AND timestamp<='$endDt'");
									if(!($query_ans->num_rows==0))
									{
										$row2 = $query_ans->fetch_assoc();
										if($row2['av'])
										{
											$query_op=$conn->query("SELECT `repstatement` FROM `$cat` where questionid='$qID'");
											$row3 = $query_op->fetch_assoc();
											$ans = mysqli_real_escape_string($conn,$row3['repstatement'])." - ".$row2['av'];	
											$conn->query("insert into `situational_info` values('','$ans','$loc','raw message',now(),'$endDt')");
										}
									}
								}
							}
						}
					}
				//display values in table form
     	  		$query_cons = $conn->query("select * from `situational_info` order by time_stamp desc");
				$query_temp = $conn->query("select count(*) from `situational_info` where status='raw message'");
				$temp_row = $query_temp->fetch_assoc();
				$totMsg = $temp_row['count(*)'];
				$query_temp = $conn->query("select count(*) from `situational_info` where status='published'");
				$temp_row = $query_temp->fetch_assoc();
				$totPub = $temp_row['count(*)'];
		        echo("<br>");
				echo("<div class=\"row\">");
				echo("<section class=\"col col-8\">");
				echo("<b>Summarized Situational Information</b>");
				echo("</section>");
				echo("</div>");
				print("<table class=\"table-style\">");
				print("<tr class=\"table-list\"><th>Date & Time</th>");
				print("<th>Location</th>");
				print("<th>Message</th>");
				print("<th>Status</th>");
				print("<th>Select</th>");
				print("<th>Action</th></tr>");
				if($query_cons->num_rows==0)
					print("<tr class=\"table-list\"><th colspan=6>No Results to Display</th></tr></table><br>");
				else
				{
					$ctr = 0;
					$ctrMsg = 0;
					$ctrPub = 0;
					$_SESSION['arr'] = array();
					while($row1 = $query_cons->fetch_assoc())
					{
						$ID=$row1['message_id'];
						$lc=$row1['location'];
						$msg=$row1['message_body'];
						$time=$row1['time_stamp'];
						$sts=$row1['status'];
						array_push($_SESSION['arr'],$ID);
						print("<tr class=\"table-list\"><td style='vertical-align: middle;'>".$time."</td>");
						print("<td style='vertical-align: middle;'>".$lc."</td>");
						print("<td width='30%' style='vertical-align: middle;'>".$msg."</td>");
						print("<td style='vertical-align: middle;'><b>".ucwords($sts)."</b></td>");
						if($sts=="raw message")
						{
							print("<td style='vertical-align: middle;'><center><input type='checkbox' onchange=\"pubChk('".$totPub."','".$totMsg."');\" class='checkbox' id='msg".$ctrMsg."' name='options[".$ctr."]' value='".$ID."'></center></td>");
							$ctrMsg++;
						}
						elseif($sts=="ready to publish")
							print("<td style='vertical-align: middle;'><center><input type='checkbox' class='checkbox' name='options[".$ctr."]' value='".$ID."'></center></td>");
						else
						{
							print("<td style='vertical-align: middle;'><center><input type='checkbox' onchange='pubChk(".$totPub.",".$totMsg.");' class='checkbox' id='pub".$ctrPub."' name='options[".$ctr."]' value='".$ID."'></center></td>");
							$ctrPub++;
						}
						print("<td style='vertical-align: middle;'><input type='submit' class='button' style='height:25px;font: inherit;' name='submit[".$ctr."]' value='Edit'></td></tr>");
						$ctr++;
					}
					print("</table>");
				}
				
			?>
			
			       <div class="row">
							<section class="col col-12"></section>
					</div>
			       <div class="row">
							<section class="col col-2"></section>
				            <section class="col col-2">
					            <input type="submit" class="button" name='publish' id='publish' value="Publish Selected">
					        </section>
							<section class="col col-1"></section>
							<section class="col col-2">
				            	<input type="submit" class="button" name='remove' value="Remove Selected">
				            </section>
							<section class="col col-1"></section>
							<section class="col col-2">
				            	<input type="submit" class="button" name='reset' value="Reset Values">
				            </section>
		           </div>
		</form>
		<?php
		
			if(isset($_POST['reset']))
			{
				unset($_SESSION['arr']);
				echo("<script type='text/javascript'>document.location = 'manfeed.php';</script>");
			}
			if(isset($_POST['publish']))
			{
				$checked = $_POST['options'];
				$keys = array_keys($checked);
				for($i=0;$i<count($checked);$i++)
				{
					$j=$keys[$i];
					$var = intval($checked[$j]);
					$conn->query("update `situational_info` set status='published' where message_id=$var");
				}
				echo("<script type='text/javascript'>alert('Published Message(s) Successfully!');document.location = 'manfeed.php';</script>");
			}
			if(isset($_POST['remove']))
			{
				$checked = $_POST['options'];
				$keys = array_keys($checked);
				for($i=0;$i<count($checked);$i++)
				{
					$j=$keys[$i];
					$var = intval($checked[$j]);
					$conn->query("delete from `situational_info` where message_id=$var");
				}
				echo("<script type='text/javascript'>alert('Removed Message(s) Successfully!');document.location = 'manfeed.php';</script>");
			}
			if(isset($_POST['submit']))
			{
				//get the index of the edit button that has been clicked
				$num = array_pop(array_keys($_POST['submit']));
				//get the value for corresponding message id
				$ID = intval($_SESSION['arr'][$num]);
				$query_temp = $conn->query("select `message_body` from `situational_info` where message_id=$ID");
				$temp_row = $query_temp->fetch_assoc();
				$msg = $temp_row['message_body'];
				echo("<script type='text/javascript'>edtValue($ID,'$msg');</script>");
			}
		
		?>
    </div>
        
    </div>
    
</div><!-- end content area -->

<div class="clearfix"></div>


<div class="clearfix"></div>
<div class="clearfix"></div>
<div class="clearfix"></div>


       


<div class="clearfix"></div>





<div class="clearfix"></div>

<div class="footer_graph"></div>

<div class="clearfix"></div>

<div class="footer1">
<div class="container">
	
	
    
    
    
    <div class="clearfix divider_dashed1"></div>
    
    <div class="one_fourth animate" data-anim-type="fadeInUp">
        <ul class="faddress">
            <h4 class="lmb">Address</h4>
            <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; Kolkata<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;West-bengal,India</li>
            <li><i class="fa fa-phone"></i>&nbsp; +91 -234 -456 -7890</li>
            <li><i class="fa fa-print"></i>&nbsp; +91 -234 -456 -7890</li>
            <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@crowns.com</a></li>
            <li><img src="images/footer-wmap.png" alt="" /></li>
        </ul>
	</div><!-- end address -->
    
    <div class="one_fourth animate" data-anim-type="fadeInUp">
    <div class="qlinks">
    
    	<h4 class="lmb">Quick Links</h4>
        
        <ul>
            <li><a href="index.php"><i class="fa fa-angle-right"></i> Home</a></li>
	        <li> <a href="impcon.php"><i class="fa fa-angle-right"></i> Important Contacts</a></li>
		    <li> <a href="helpme.php"><i class="fa fa-angle-right"></i> Help Me</a></li>
		    <li> <a href="report.php"><i class="fa fa-angle-right"></i> Report Emergency</a></li>
		    <li> <a href="locate.php"><i class="fa fa-angle-right"></i> Locate Victim</a></li>
		    <li> <a href="donate.php"><i class="fa fa-angle-right"></i> Donate</a></li>
            
        </ul>
        
    </div>
	</div><!-- end links -->
        
    <div class="one_fourth animate" data-anim-type="fadeInUp">
    <div class="siteinfo">
    
    	<h4 class="lmb">About CROWNS</h4>
        
        <p>CROWNS is a simple and secure multiplatform (web and app-based) Disaster Management System that provides decision support to disaster management authorities through active involvement of the “crowd” at the site of a disaster situation.  </p>
        <br />
        <a href="#">Read more <i class="fa fa-long-arrow-right"></i></a>
        
	</div>
    </div><!-- end site info -->
    
    <div class="one_fourth last animate" data-anim-type="fadeInUp">
        
       
        <ul class="faddress">
            <h4 class="lmb"> Office Address</h4>
            <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; Kolkata<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;West-bengal,India</li>
            <li><i class="fa fa-phone"></i>&nbsp; +91 -234 -456 -7890</li>
            <li><i class="fa fa-print"></i>&nbsp; +91 -234 -456 -7890</li>
            <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@crowns.com</a></li>
            <li><img src="images/footer-wmap.png" alt="" /></li>
        </ul>
       
    
    
</div>
</div><!-- end footer -->

<div class="clearfix"></div>

<div class="copyright_info">
<div class="container">

	<div class="clearfix divider_dashed10"></div>
    
    <div class="one_half animate" data-anim-type="fadeInRight">
    
        Copyright © 2016 . All rights reserved.  <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>
        
    </div>
    
    <div class="one_half last">
        
        <ul class="footer_social_links">
            <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-skype"></i></a></li>
            <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-flickr"></i></a></li>
             
            <li class="animate" data-anim-type="zoomIn"><a href="#"><i class="fa fa-youtube"></i></a></li>
            
        </ul>
            
    </div>
    
</div>
</div><!-- end copyright info -->


<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->





</div>



    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript" src="js/marquee.js"></script>
 

<script>
                    $(function (){

                        createMarquee({

                            duration:300000

                        });

                        //example of overwriting defaults: 
                        
                        // createMarquee({
                        //      duration:30000, 
                        //      padding:20, 
                        //      marquee_class:'.example-marquee', 
                        //      container_class: '.example-container', 
                        //      sibling_class: '.example-sibling', 
                        //      hover: false});
                        // });
                    });

                </script>




<script type="text/javascript" src="js/universal/jquery.js"></script>

<!-- style switcher -->
<script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script>

<!-- animations -->
<script src="js/animations/js/animations.min.js" type="text/javascript"></script>


<!-- slide panel -->
<script type="text/javascript" src="js/slidepanel/slidepanel.js"></script>

<!-- Master Slider -->
<script src="js/masterslider/jquery.easing.min.js"></script>
<script src="js/masterslider/masterslider.min.js"></script>
<script type="text/javascript">
(function($) {
 "use strict";

var slider = new MasterSlider();
 slider.setup('masterslider' , {
     width: 1400,    // slider standard width
     height:580,   // slider standard height
     space:0,
	 speed:45,
     fullwidth:true,
     loop:true,
     preload:0,
     autoplay:true,
	 view:"basic"
});
// adds Arrows navigation control to the slider.
slider.control('arrows');
slider.control('bullets');

})(jQuery);
</script>

<!-- mega menu -->
<script src="js/mainmenu/bootstrap.min.js"></script> 
<script src="js/mainmenu/customeUI.js"></script> 

<!-- jquery jcarousel -->
<script type="text/javascript" src="js/carousel/jquery.jcarousel.min.js"></script>

<!-- scroll up -->
<script src="js/scrolltotop/totop.js" type="text/javascript"></script>

<!-- tabs -->
<script src="js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>

<!-- jquery jcarousel -->
<script type="text/javascript">
(function($) {
 "use strict";

	jQuery(document).ready(function() {
			jQuery('#mycarouselthree').jcarousel();
	});
	
})(jQuery);
</script>


<!-- accordion -->
<script type="text/javascript" src="js/accordion/custom.js"></script>

<!-- sticky menu -->
<script type="text/javascript" src="js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="js/mainmenu/modernizr.custom.75180.js"></script>

<!-- cubeportfolio -->
<script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="js/cubeportfolio/main.js"></script>
<script type="text/javascript" src="js/cubeportfolio/main5.js"></script>
<script type="text/javascript" src="js/cubeportfolio/main6.js"></script>

<!-- carousel -->
<script defer src="js/carousel/jquery.flexslider.js"></script>
<script defer src="js/carousel/custom.js"></script>

<!-- lightbox -->
<script type="text/javascript" src="js/lightbox/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/lightbox/custom.js"></script>



</body>
</html>
