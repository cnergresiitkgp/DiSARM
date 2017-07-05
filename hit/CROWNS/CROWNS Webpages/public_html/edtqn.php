
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
            	<?php  if(isset($_SESSION['username'])){  ?>
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
        
				<li><a href="index.php" class="dropdown-toggle"><i class="fa fa-home"></i> Home</a></li>
				<li> <a href="impcon.php" class="dropdown-toggle"><i class="fa fa-star"></i> Important Contacts</a></li>
				<li> <a href="helpme.php" class="dropdown-toggle"><i class="fa fa-medkit"></i> Help Me</a></li>
				<li> <a href="emergency.php" class="dropdown-toggle"><i class="fa fa-flag"></i> Report Emergency</a></li>
				<li> <a href="locate.php" class="dropdown-toggle"><i class="fa fa-map-marker"></i> Locate Victim</a></li>
				<li> <a href="MySess_Check.php" class="dropdown-toggle"><i class="fa fa-money"></i> Donate</a></li>
        </ul>
            
            
      </div>
      </div>
     </div>
     
	</div><!-- end menu -->
        <div>
        <table class="table-style" style="height:20px;margin-bottom:2px;">
				<tr class="table-list">
					<td width="33%" style="padding:1px 1px;">
						<a href="manqns.php" style="text-decoration:none;"><i class="fa fa-chevron-circle-left"></i> Go Back</a>
					</td>
				</tr>
			</table>
	</div>
	
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
					<td width='50%'><b><a href="manfeed.php">Publish Information</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="control.php">View Reports</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="managn.php">Manage Agencies</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="manage_volunteers_admin.php">Manage Volunteers</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="manage_resources_admin.php">Manage Resources</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="mandon.php">Manage Donations</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="rapid.php">RAPID</a></b></td>
				</tr>
				<tr class="table-list">
					<th width='50%'><b><a href="mansms.php"><font color="#444444"><i class="fa fa-angle-right"></i> Manage Interactive SMS System</font></a></b></th>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="manshelter.php">View Shelter Information</a></b></td>
				</tr>
			</table>
       
        
      </div>
      
    	<div class="three_fourth last">
	        <form method="post" id="sky-form" class="sky-form">
    	    	<header><strong>Edit Question</strong></header>
    	    				<?
    	    					$supCat = $_SESSION['manCat'];
    	    					$subCat = $_SESSION['edtCat'];
    	    					$qID = $_SESSION['questionid'];
    	    					$prevqID = $qID;
								//fetch question ids from individual categories
								$query_ids=$conn->query("SELECT * FROM `$subCat` where `questionid`='$qID'");
								$row2 = $query_ids->fetch_assoc();
								$olda = $row2['optiona'];
								$oldb = $row2['optionb'];
								$oldc = $row2['optionc'];
								$oldd = $row2['optiond'];
								$olde = $row2['optione'];
							?>
								<table class="table-style">
									<tr class="table-list">
										<th>Type</th>
										<th>Previous Value</th>
										<th>New Value</th>
									</tr>
									<tr class="table-list">
										<th width='20%' style='vertical-align:middle;'>Question</th>
										<td width='40%' style='vertical-align:middle;'><? echo $row2['questiontext'];?></td>
										<td><label class="input"><input type="text" name="qn" value="<? echo $row2['questiontext'];?>" style="height:30px;padding: 0px 3px;"></label></td>
									</tr>
									<tr class="table-list">
										<th width='20%' style='vertical-align:middle;'>Statement Form</th>
										<td width='40%' style='vertical-align:middle;'><? echo $row2['repstatement'];?></td>
										<td><label class="input"><input type="text" name="stm" value="<? echo $row2['repstatement'];?>" style="height:30px;padding: 0px 3px;"></label></td>
									</tr>
									<?
									
										if(substr($qID,-1)!='b' && substr($qID,-1)!='c')
										{
											print("<tr class=\"table-list\">");
											print("<th width='20%' style='vertical-align:middle;'>Option A</th>");
											print("<td width='40%' style='vertical-align:middle;'>".$row2['optiona']."</td>");
											print("<td><label class=\"input\"><input type=\"text\" name=\"opa\" value=\"".$row2['optiona']."\" style=\"height:30px;padding: 0px 3px;\"></label></td></tr>");
											print("<tr class=\"table-list\">");
											print("<th width='20%' style='vertical-align:middle;'>Option B</th>");
											print("<td width='40%' style='vertical-align:middle;'>".$row2['optionb']."</td>");
											print("<td><label class=\"input\"><input type=\"text\" name=\"opb\" value=\"".$row2['optionb']."\" style=\"height:30px;padding: 0px 3px;\"></label></td></tr>");
											print("<tr class=\"table-list\">");
											print("<th width='20%' style='vertical-align:middle;'>Option C</th>");
											print("<td width='40%' style='vertical-align:middle;'>".$row2['optionc']."</td>");
											print("<td><label class=\"input\"><input type=\"text\" name=\"opc\" value=\"".$row2['optionc']."\" style=\"height:30px;padding: 0px 3px;\"></label></td></tr>");
											print("<tr class=\"table-list\">");
											print("<th width='20%' style='vertical-align:middle;'>Option D</th>");
											print("<td width='40%' style='vertical-align:middle;'>".$row2['optiond']."</td>");
											print("<td><label class=\"input\"><input type=\"text\" name=\"opd\" value=\"".$row2['optiond']."\" style=\"height:30px;padding: 0px 3px;\"></label></td></tr>");
											print("<tr class=\"table-list\">");
											print("<th width='20%' style='vertical-align:middle;'>Option E</th>");
											print("<td width='40%' style='vertical-align:middle;'>".$row2['optione']."</td>");
											print("<td><label class=\"input\"><input type=\"text\" name=\"ope\" value=\"".$row2['optione']."\" style=\"height:30px;padding: 0px 3px;\"></label></td></tr>");
										}
									?>
								</table>
								
					   <div class="row">
							<section class="col col-10"></section>
						</div>
					   <div class="row">
							<section class="col col-3"></section>
				            <section class="col col-2" style="margin-left:-5px;">
					            <input type="submit" class="button" name='edit' value="Edit Values">
					        </section>
							<section class="col col-2"></section>
							<section class="col col-2">
				            	<input type="submit" class="button" name='reset' value="Reset Values">
				            </section>
				       </div>
				<?
					if(isset($_POST['reset']))
						echo("<script type='text/javascript'>document.location = 'edtqn.php';</script>");
					//-------------------------------------------edit------------------------------------------//
					if(isset($_POST['edit']))
					{
						if(!(empty($_POST['qn'])))
						{
							$qsn = $_POST['qn'];
							$conn->query("update `$subCat` set `questiontext`=N'$qsn' where `questionid`='$qID'");
							if(!(empty($_POST['stm'])))
							{
								$st = $_POST['stm'];
								$conn->query("update `$subCat` set `repstatement`=N'$st' where `questionid`='$qID'");
								if(substr($qID,-1)!='b' && substr($qID,-1)!='c')
								{
									if(!(empty($_POST['opa'])))
									{
										$oa = $_POST['opa'];
										$conn->query("update `$subCat` set `optiona`=N'$oa' where `questionid`='$qID'");
										if(!(empty($_POST['opb'])))
										{
											$ob = $_POST['opb'];
											$conn->query("update `$subCat` set `optionb`=N'$ob' where `questionid`='$qID'");
											$newqID = substr($qID,0,-1).'d';
											if(!(empty($_POST['opc'])))
											{
												$oc = $_POST['opc'];
												$conn->query("update `$subCat` set `optionc`=N'$oc' where `questionid`='$qID'");
												$newqID = substr($qID,0,-1).'a';
												if(!(empty($_POST['opd'])))
												{
													$od = $_POST['opd'];
													$conn->query("update `$subCat` set `optiond`=N'$od' where `questionid`='$qID'");
													$newqID = substr($qID,0,-1).'e';
													if(!(empty($_POST['ope'])))
													{
														$oe = $_POST['ope'];
														$conn->query("update `$subCat` set `optione`=N'$oe' where `questionid`='$qID'");
														$newqID = substr($qID,0,-1).'f';
													}
													else
													{
														$oe = '';
														$conn->query("update `$subCat` set `optione`='$oe' where `questionid`='$qID'");
														$conn->query("update `response` set `answer`='$oe' where `questionid`='$qID' and `answer`='e'");
														$newqID = substr($qID,0,-1).'e';
													}
												}
												else
												{
													$od = '';
													$conn->query("update `$subCat` set `optiond`='$od',`optione`='$od' where `questionid`='$qID'");
													$conn->query("update `response` set `answer`='$od' where `questionid`='$qID' and `answer`='d'");
													$conn->query("update `response` set `answer`='$od' where `questionid`='$qID' and `answer`='e'");
													$newqID = substr($qID,0,-1).'a';
												}
											}
											else
											{
												$oc = '';
												$conn->query("update `$subCat` set `optionc`='$oc',`optiond`='$oc',`optione`='$oc' where `questionid`='$qID'");
												$conn->query("update `response` set `answer`='$oc' where `questionid`='$qID' and `answer`='c'");
												$conn->query("update `response` set `answer`='$oc' where `questionid`='$qID' and `answer`='d'");
												$conn->query("update `response` set `answer`='$oc' where `questionid`='$qID' and `answer`='e'");
												$newqID = substr($qID,0,-1).'d';
											}
											$conn->query("update `$subCat` set `questionid`='$newqID' where `questionid`='$qID'");
											$conn->query("update `response` set `questionid`='$newqID' where `questionid`='$qID'");
											$query_rep=$conn->query("SELECT distinct `repname` FROM `catreport` where `supercat`='$supCat'");
											while($row1 = $query_rep->fetch_assoc())
											{
												$query_dis=$conn->query("SELECT distinct `disastertype` FROM `category` where `catname`='$subCat' and `supercat`='$supCat'");
												while($row = $query_dis->fetch_assoc())
												{
													$rep = $row1['repname'].$row['disastertype'];
													if($olda!='')
														$conn->query("update `$rep` set `$qID`=N'$oa' where `$qID`=N'$olda'");
													if($oldb!='')
														$conn->query("update `$rep` set `$qID`=N'$ob' where `$qID`=N'$oldb'");
													if($oldc!='')
														$conn->query("update `$rep` set `$qID`=N'$oc' where `$qID`=N'$oldc'");
													if($oldd!='')
														$conn->query("update `$rep` set `$qID`=N'$od' where `$qID`=N'$oldd'");
													if($olde!='')
														$conn->query("update `$rep` set `$qID`=N'$oe' where `$qID`=N'$olde'");
													$conn->query("ALTER TABLE `$rep` CHANGE `$qID` `$newqID` VARCHAR(100) NOT NULL");
												}
											}
										}
										else
											echo("<script type='text/javascript'>alert('Option B cannot be empty. Atleast two options needed.');</script>");
									}
									else
										echo("<script type='text/javascript'>alert('Option A cannot be empty. Atleast two options needed.');</script>");
									
								}
								echo("<script type='text/javascript'>alert('Question edited successfully');</script>");
								echo("<script type='text/javascript'>document.location = 'manqns.php';</script>");
							}
							else
								echo("<script type='text/javascript'>alert('Statement form cannot be empty.');</script>");
						}
						else
							echo("<script type='text/javascript'>alert('Question cannot be empty.');</script>");
					}
					
				?>
    	
			</form>
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
