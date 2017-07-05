
	<?php
		session_start();
		require 'connect.inc.php';
		$id=$_SESSION['log_id'];
		$query_cstar=$conn->query("SELECT * FROM `register_master` where `id`=$id");
		if($query_cstar->num_rows!=1 || $id==-1 )
			header( 'Location: index.php' );
		else
		{
			$row = $query_cstar->fetch_assoc();
			$role = $row['role'];
		}
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
    
	<!-- cubeportfolio -->
	<link rel="stylesheet" type="text/css" href="js/cubeportfolio/cubeportfolio.min.css">
    
	<!-- tabs -->
    <link rel="stylesheet" type="text/css" href="js/tabs/assets/css/responsive-tabs.css">
    <link rel="stylesheet" type="text/css" href="js/tabs/assets/css/responsive-tabs2.css">
    <link rel="stylesheet" type="text/css" href="js/tabs/assets/css/responsive-tabs3.css">

	<!-- carousel -->
    <link rel="stylesheet" href="js/carousel/flexslider.css" type="text/css" media="screen" />
 	<link rel="stylesheet" type="text/css" href="js/carousel/skin.css" />
    
    <!-- progressbar -->
  	<link rel="stylesheet" href="js/progressbar/ui.progress-bar.css">
    
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
        <?
        		if($role=='Admin')
				{
					echo("<li><a href='admin.php' class='dropdown-toggle'><i class='fa fa-home'></i> Home</a></li>");
					echo("<li> <a href='impcon.php' class='dropdown-toggle'><i class='fa fa-star'></i> Important Contacts</a></li>");
					echo("<li> <a href='helpme.php' class='dropdown-toggle'><i class='fa fa-medkit'></i> Help Me</a></li>");
					echo("<li> <a href='emergency.php' class='dropdown-toggle'><i class='fa fa-flag'></i> Report Emergency</a></li>");
					echo("<li> <a href='locate.php' class='dropdown-toggle'><i class='fa fa-map-marker'></i> Locate Victim</a></li>");
					echo("<li> <a href='MySess_Check.php' class='dropdown-toggle'><i class='fa fa-money'></i> Donate</a></li>");
				}
				elseif($role=='Agencies')
				{
					echo("<li><a href='agency.php' class='active'><i class='fa fa-home'></i> Home</a></li>");
					echo("<li> <a href='impcon_agency.php' class='dropdown-toggle'><i class='fa fa-star'></i> Important Contacts</a></li>");
					echo("<li> <a href='helpme_agency.php' class='dropdown-toggle'><i class='fa fa-medkit'></i> Help Me</a></li>");
					echo("<li> <a href='emergency_agency.php' class='dropdown-toggle'><i class='fa fa-flag'></i> Report an Emergency</a></li>");
					echo("<li> <a href='SearchVictim_agency.php' class='dropdown-toggle'><i class='fa fa-map-marker'></i> Locate Missing Person</a></li>");
					echo("<li> <a href='MySess_Check.php' class='dropdown-toggle'><i class='fa fa-money'></i> Donate</a></li>");
				}
				else
				{
					echo("<li><a href='index.php' class='dropdown-toggle'><i class='fa fa-home'></i> Home</a></li>");
					echo("<li> <a href='impcon.php' class='dropdown-toggle'><i class='fa fa-star'></i> Important Contacts</a></li>");
					echo("<li> <a href='helpme.php' class='dropdown-toggle'><i class='fa fa-medkit'></i> Help Me</a></li>");
					echo("<li> <a href='emergency.php' class='dropdown-toggle'><i class='fa fa-flag'></i> Report Emergency</a></li>");
					echo("<li> <a href='locate.php' class='dropdown-toggle'><i class='fa fa-map-marker'></i> Locate Victim</a></li>");
					echo("<li> <a href='MySess_Check.php' class='dropdown-toggle'><i class='fa fa-money'></i> Donate</a></li>");
				}
			?>
        </ul>
             
            
      </div>
      </div>
     </div>
     
	</div><!-- end menu -->
	<div>
        <table class="table-style" style="height:20px;margin-bottom:2px;">
				<tr class="table-list">
					<td width="33%" style="padding:1px 1px;">
						<a href="control.php" style="text-decoration:none;"><i class="fa fa-chevron-circle-left"></i> Go Back</a>
					</td>
					<td width="34%" style="padding:1px 1px;">
						<a media="all" href="javascript:window.print()" style="text-decoration:none;"><i class="fa fa-print"></i> Print This Page</a>
					</td>
				</tr>
			</table>
	</div>
	</div>
		
	</div>
    
	</div>
    
</header>

<div class="clearfix"></div>
<!--
<div class="page_title">
<div class="container">

    <div class="title"><h1>Important Contacts</h1></div>
    
</div>
</div><!-- end page title --> 


<style type="text/css">
@media print {
  body * {
    visibility: hidden;
  }
  #output, #output * {
    visibility: visible;
  }
  #output {
    position: absolute;
    left: 0;
    top: 0;
  }
}
</style>

<div class="clearfix"></div>

<div class="container">
	<div class="content_fullwidth lessmar" id="output">
		<?	$_SESSION['auth']='unauth';
			require 'connect.inc.php';
			$coord = 'NA';
			$dis=$_SESSION['disaster'];
			$dName=$_SESSION['disName'];
			$repT = $_SESSION['repType'];
			$subCat = $_SESSION['subCat'];
			$rep = $_SESSION['report'].$dis;
			$query_ans=$conn->query("SELECT * FROM `$rep` WHERE `disastername`='$dName'");
			$row3 = $query_ans->fetch_assoc();
			if($_SESSION['subCat']=='All Sub Types')
				$query_cats=$conn->query("SELECT `catname` FROM `category` where `disastertype`='$dis' and `supercat`='$repT'");
			else
			{
				$subCt = "cat_".$_SESSION['subCat'];
				$query_cats=$conn->query("SELECT `catname` FROM `category` where `disastertype`='$dis' and `catname`='$subCt' and `supercat`='$repT'");
			}
			if($dName!='output')
			{
				$disLocIDArr = explode("-",$dName,2);
				$disLocID = $disLocIDArr[0];
				$query_locData=$conn->query("SELECT * FROM `location` WHERE `locationid`=$disLocID");
				$row_loc = $query_locData->fetch_assoc();
				if($row_loc['state']!="")
					$stt = $row_loc['state'];
				else
					$stt = 'ALL';
				if($row_loc['district']!="")
					$dist = $row_loc['district'];
				else
					$dist = 'ALL';
				if($row_loc['block']!="")
					$blk = $row_loc['block'];
				else
					$blk = 'ALL';
				if($row_loc['grampanchayat']!="")
					$gp = $row_loc['grampanchayat'];
				else
					$gp = 'ALL';
				$loc = $row_loc['locname'];
				$coord = $row_loc['latitude'].", ".$row_loc['longitude'];
				if($coord==", ")
					$coord="NA";
				$query_dis=$conn->query("SELECT * FROM `disaster` WHERE `disastername`='$dName'");
				$row_dis = $query_dis->fetch_assoc();
				$dDate = $row_dis['disasterdate'];
				$durn = $row_dis['duration'];
				$inten = $row_dis['intensity'];
			}
			else
			{
				$stt = 'ALL';
				$dist = 'ALL';
				$blk = 'ALL';
				$gp = 'ALL';
				$loc = 'ALL';
				$dDate = 'ALL';
				$durn = 'ALL';
				$inten = 'ALL';
				if(!($_SESSION['state']=='all'))
				{
					$stt = $_SESSION['state'];
					if(!($_SESSION['district']=='all'))
					{
						$dist = $_SESSION['district'];
						if(!($_SESSION['block']=='all'))
						{
							$blk = $_SESSION['block'];
							if(!($_SESSION['grampanchayat']=='all'))
							{
								$gp = $_SESSION['grampanchayat'];
								if(!($_SESSION['location']=='all'))
									$loc = $_SESSION['location'];
								
							}
						}
					}
				}
			}
		?>
			
			<br>
			<table class="table-style">
				<tr class="table-list">
					<th colspan='2' style="text-size:15px;">REPORT TYPE : <? echo strtoupper($_SESSION['repType']);?></th>
				</tr>
				<tr class="table-list">
					<th colspan='2'>SUB CATEGORY : <? echo strtoupper($_SESSION['subCat']);?></th>
				</tr>
				<tr class="table-list">
					<td width='50%'><b>Disaster Type :</b> <? echo strtoupper(substr($dis,0,1))."".strtolower(substr($dis,1));?></td>
					<td width='50%'><b>Disaster Date (Y-M-D) :</b> <? echo $dDate;?></td>
				</tr>
				<tr class="table-list" style="padding:none;">
					<table class="table-style" style="margin-top:-4px;">
						<tr class="table-list" style="border:none;">
							<td width='33%'><b>Disaster Duration :</b> <? echo $durn;?></td>
							<td width='34%'><b>Disaster Intensity :</b> <? echo $inten;?></td>
							<td width='33%'><b>Report Date (Y-M-D) :</b> <? echo $row3['repdate'];?></td>
						</tr>
					</table>
				</tr>
			</table>
			<br>
			<table class="table-style">
				<tr class="table-list">
					<th colspan='3'>LOCATION INFORMATION</th>
				</tr>
				<tr class="table-list">
					<td width='33%'><b>State :</b> <? echo $stt;?></td>
					<td width='34%'><b>District :</b> <? echo $dist;?></td>
					<td width='33%'><b>Block :</b> <? echo $blk;?></td>
				</tr>
				<tr class="table-list">
					<td width='33%'><b>Gram Panchayat :</b> <? echo $gp;?></td>
					<td width='34%'><b>Location :</b> <? echo $loc;?></td>
					<td width='33%'><b>Coordinates :</b> <? echo $coord;?></td>
				</tr>
			</table>
			<br>
		<?
			while($row = $query_cats->fetch_assoc())
			{
				$cat=$row['catname'];
				//fetch question ids from individual categories
				$query_ids=$conn->query("SELECT `questionid` FROM `$cat`");
				print("<table class=\"table-style\">");
				print("<tr class=\"table-list\"><th colspan='2'>".strtoupper(substr($cat,4))."</th></tr>");
				while($row1 = $query_ids->fetch_assoc())
				{
					$qID=$row1['questionid'];
					$query_qs=$conn->query("SELECT `repstatement` FROM `$cat` WHERE questionid='$qID'");
					$row2 = $query_qs->fetch_assoc();
					print("<tr class=\"table-list\"><td style=\"text-align:left;\">".$row2['repstatement']."</td>");
					$qID = $cat.$qID;
					if($row3[$qID])
						print("<td width='30%'>".$row3[$qID]."</td></tr>");
					else
						print("<td width='30%'>No Responses</td></tr>");
				}
				print("</table><br>");
			}

		?>
	</div>
</div><!-- end content area -->    

<div class="clearfix margin_top7"></div>

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
<script type="text/javascript" src="js/universal/jquery.js"></script>

<!-- style switcher -->
<script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script>

<!-- animations -->
<script src="js/animations/js/animations.min.js" type="text/javascript"></script>


<!-- slide panel -->
<script type="text/javascript" src="js/slidepanel/slidepanel.js"></script>

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

<script src="js/form/jquery.form.min.js"></script>
<script src="js/form/jquery.validate.min.js"></script>
<script src="js/form/jquery.modal.js"></script>

<script type="text/javascript">
(function($) {
 "use strict";

	$(function()
	{
		// Validation		
		$("#sky-form").validate(
		{					
			// Rules for form validation
			rules:
			{
				username:
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				},
				password:
				{
					required: true,
					minlength: 3,
					maxlength: 20
				},
				passwordConfirm:
				{
					required: true,
					minlength: 3,
					maxlength: 20,
					equalTo: '#password'
				},
				firstname:
				{
					required: true
				},
				lastname:
				{
					required: true
				},
				gender:
				{
					required: true
				},
				terms:
				{
					required: true
				}
			},
			
			// Messages for form validation
			messages:
			{
				login:
				{
					required: 'Please enter your login'
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				},
				password:
				{
					required: 'Please enter your password'
				},
				passwordConfirm:
				{
					required: 'Please enter your password one more time',
					equalTo: 'Please enter the same password as above'
				},
				firstname:
				{
					required: 'Please select your first name'
				},
				lastname:
				{
					required: 'Please select your last name'
				},
				gender:
				{
					required: 'Please select your gender'
				},
				terms:
				{
					required: 'You must agree with Terms and Conditions'
				}
			},					
			
			// Do not change code below
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
	});			

})(jQuery);
</script>

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
