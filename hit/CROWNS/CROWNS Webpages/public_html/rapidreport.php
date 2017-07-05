
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

<div class="clearfix"></div>



<div class="container">

    <div class="content_fullwidth lessmar">
    
      <div class="one_fourth">
      
       <div class="clearfix"></div>
        <h4><strong></strong></h4>
        <table class="table-style">
			<?
        		if($role=='Admin')
				{
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='admin.php'>Manage Notifications</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='mancon.php'>Manage Contacts</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='manfeed.php'>Publish Information</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<th width='50%'><b><a href='control.php'><font color='#444444'><i class='fa fa-angle-right'></i> View Reports</font></a></b></th>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='managn.php'>Manage Agencies</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='manage_volunteers_admin.php'>Manage Volunteers</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='manage_resources_admin.php'>Manage Resources</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='mandon.php'>Manage Donations</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='rapid.php'>RAPID</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='mansms.php'>Manage Interactive SMS System</a></b></td>");
					echo("</tr>");
				}
				elseif($role=='Agencies')
				{
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='mancon.php'>Manage Contacts</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<th width='50%'><b><a href='control.php'><font color='#444444'><i class='fa fa-angle-right'></i> View Reports</font></a></b></th>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='manage_volunteers.php'>Manage Volunteers</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='req_resources.php'>Request Resource</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='manage_resources.php'>Manage Resources</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='view_donation.php'>View Donation</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='rapid.php'>RAPID</a></b></td>");
					echo("</tr>");
				}
				elseif($role=='Volunteers')
				{
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='mancon.php'>Manage Contacts</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<th width='50%'><b><a href='control.php'><font color='#444444'><i class='fa fa-angle-right'></i> View Reports</font></a></b></th>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='abc.php'>View Messages</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='req_resources.php'>Request Resource</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='view_donation.php'>View Donation</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='rapid.php'>RAPID</a></b></td>");
					echo("</tr>");
				}
			?>
			</table>
       
        
      </div>
      
      <div class="three_fourth last">
      	<?	
      		$dis=$_SESSION['disaster'];
			$dName=$_SESSION['disName'];
			$repT = $_SESSION['repType'];
			$subCat = $_SESSION['subCat'];
			$rep = $_SESSION['report'].$dis;
			$query_ans=$conn->query("SELECT * FROM `$rep` WHERE `disastername`='$dName'");
			$row3 = $query_ans->fetch_assoc();
			$stt = 'ALL';
			$dist = 'ALL';
			$blk = 'ALL';
			$gp = 'ALL';
			$loc = 'ALL';
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
		?>
        	<form method="post" id="sky-form" class="sky-form">
        	<fieldset>
				<header><strong><center>Rapid Joint Needs Assessment – Phase 01- INDIA [VILLAGE / HAMLET]</center></strong></header>
<table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td style="width: 668px;">&nbsp;
&nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">
&nbsp; INDIA
&ndash; RAPID Needs Assessment Format</span><br
 style="font-weight: bold;" />
      <span style="font-weight: bold;">&nbsp;
&nbsp; &nbsp; &nbsp;
&nbsp; Phase 1 &ndash; Initial Days&nbsp;(1-25 days in the
immediate aftermath of a disaster)</span><br style="font-weight: bold;" />
      <span style="font-weight: bold;">&nbsp;
&nbsp; &nbsp; &nbsp;
&nbsp; Village Level Assessment Format</span></td>
      <td style="width: 444px; background-color: rgb(216, 238, 255);">
&nbsp; &nbsp; &nbsp;<span style="font-weight: bold;"> &nbsp;To be Used
by
the
Humanitarian Agency/ NGO</span><br style="font-weight: bold;" />
      <span style="font-weight: bold;">
&nbsp; &nbsp; &nbsp; &nbsp;To be used at the
Village/ Hamlet Level</span></td>
    </tr>
  </tbody>
</table>
<table style="border: 1px solid;text-align: left; height: 32px;" border="1"
 cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td style="width: 1120px; background-color: rgb(0, 0, 0);TEXT-ALIGN:CENTER;">
      	<span style="color: rgb(255, 255, 255); font-weight: bold;">An India Humanitarian Collective Action</span>
      </td>
    </tr>
  </tbody>
</table>
<table style="border: 1px solid;text-align: left; height: 32px;" border="1"
 cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td style="width: 1122px; background-color: rgb(192, 192, 192);">&nbsp;<span
 style="font-weight: bold; font-style: italic;">Please put
data based on SADD- Sex Age Disaggregated Data</span></td>
    </tr>
  </tbody>
</table>
<table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td style="width: 1121px; background-color: rgb(0, 0, 0);text-align:center;">
      	<span style="font-weight: bold; color: rgb(255, 255, 255);">A.
SPECIFIC
LOCATION OF
AFFECTED POPULATION</span></td>
    </tr>
  </tbody>
</table>
  <table style="border: 1px solid;text-align: left; height: 28px;"
 border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="height: 27px; width: 391px;">1.
State</td>
        <td style="height: 27px; width: 391px;">2.
District</td>
        <td style="height: 27px; width: 391px;">3.
Block</td>
        <td style="height: 27px; width: 391px;">4.
GP</td>
        <td style="height: 27px; width: 391px;">5.
Village</td>
      </tr>
      <tr>
        <td style="background-color: rgb(192, 192, 192);"><? echo $stt; ?>
									</td>
        <td style="background-color: rgb(192, 192, 192);"><? echo $dist;?>
        </td>
        <td style="background-color: rgb(192, 192, 192);"><? echo $blk;?>
        </td>
        <td style="background-color: rgb(192, 192, 192);"><? echo $gp;?>
        </td>
        <td style="background-color: rgb(192, 192, 192);"><? echo $loc;?>
        </td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;height: 27px;"
 border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="height: 26px; width: 461px;">6. Total number
of Wards? (within a village)</td>
        <td
 style="background-color: rgb(192, 192, 192); height: 26px; width: 95px;"><? echo $row3['cat_rapidrap001b'];?></td>
        <td style="height: 26px; width: 461px;">7. Number of
affected Wards?</td>
        <td
 style="background-color: rgb(192, 192, 192); height: 26px; width: 89px;"><? echo $row3['cat_rapidrap002b']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; height: 32px; font-weight: bold; font-style: italic;"
 border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td
 style="width: 1118px; height: 30px; background-color: rgb(192, 192, 192);">Only
fill out if
known-(disaggregated data if possible)</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; height: 27px;"
 border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 414px; height: 27px;">8-10.
Total population
of village, before disaster Male/Female:</td>
        <td style="height: 27px; width: 71px;">8. Total</td>
        <td
 style="background-color: rgb(192, 192, 192); height: 27px; width: 108px;"><? echo $row3['cat_rapidrap003b']; ?>
</td>
        <td style="height: 27px; width: 112px;">9. Male</td>
        <td
 style="background-color: rgb(192, 192, 192); height: 27px; width: 102px;"><? echo $row3['cat_rapidrap004b']; ?>
</td>
        <td style="height: 27px; width: 154px;">10. Female</td>
        <td
 style="background-color: rgb(192, 192, 192); height: 27px; width: 107px;"><? echo $row3['cat_rapidrap005b']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 548px;">11.
Estimated % of overall
population affected?</td>
        <td style="width: 565px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap006b']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; height: 86px;"
 border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="height: 82px; width: 631px;">12-13.
Estimated population affected? (Indicate the answer using # of affected
persons OR # of affected households)</td>
        <td style="height: 82px; width: 575px;">
        <table style="border: 1px solid;text-align: left; height: 71px; width: 575px;"
 border="1" cellpadding="2" cellspacing="2">
          <tbody>
            <tr>
              <td style="width: 278px; height: 31px;">12. Individuals</td>
              <td style="height: 31px; width: 281px;">13. Households</td>
            </tr>
            <tr>
              <td
 style="width: 278px; height: 38px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap007b']; ?>
</td>
              <td
 style="height: 38px; width: 281px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap008b']; ?>
</td>
            </tr>
          </tbody>
        </table>
        </td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; height: 92px;"
 border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 500px; height: 52px;">14.
Approximate no. of people dead?</td>
        <td style="width: 500px; height: 52px;">15.
Approximate no. of people missing?</td>
        <td style="width: 500px; height: 52px;">16.
Approximate no. of people injured?</td>
        <td style="width: 500px; height: 52px;">17.
Approximate no. of people displaced?</td>
        <td style="width: 500px; height: 52px;">18.
Approximate no. of people non-displaced (minor shelter damage)</td>
      </tr>
      <tr>
        <td
 style="height: 31px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap009b']; ?>
</td>
        <td
 style="height: 31px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap010b']; ?>
</td>
        <td
 style="height: 31px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap011b']; ?>
</td>
        <td
 style="height: 31px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap012b']; ?>
</td>
        <td
 style="height: 31px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap013b']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 1120px;">19-25.
Please provide the disaggregated data in numbers for the affected
population (if possible- based on Secondary data etc)</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="text-align:center;width: 120px;">19. Children</td>
        <td style="width: 91px;text-align:center;">20. Women</td>
        <td style="width: 115px;text-align:center;">21. Men</td>
        <td style="width: 154px;text-align:center;">22. P/Cwd1</td>
        <td style="text-align:center;width: 273px;">23. Women Pregnant (7th to 9th month) and nursing (0-6 months)</td>
        <td style="width: 165px;text-align:center;">24. Minorities</td>
        <td style="width: 151px;text-align:center;">25. SC/ST</td>
      </tr>
      <tr>
        <td style="width: 120px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap014b']; ?>
</td>
        <td style="width: 91px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap015b']; ?>
</td>
        <td style="background-color: rgb(192, 192, 192); width: 115px;"><? echo $row3['cat_rapidrap016b']; ?>
</td>
        <td style="width: 154px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap017b']; ?>
</td>
        <td style="width: 273px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap018b']; ?>
</td>
        <td style="width: 165px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap019b']; ?>
</td>
        <td style="width: 151px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap020b']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 522px;">26.
How far has the water entered</td>
        <td style="width: 587px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap021d']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 522px;">27.
How long will the waters stay</td>
        <td style="width: 587px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap022d']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; height: 37px;"
 border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 522px; height: 34px;">28.
How high is the water logging</td>
        <td style="width: 589px; height: 34px; background-color: rgb(192, 192, 192);">
        <? echo $row3['cat_rapidrap023d']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 410px;">29.
Which are the Six worst affected Wards?<br />
(Please write their names)</td>
        <td style="width: 704px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap024c']; ?>
        </td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 1121px; background-color: rgb(0, 0, 0);text-align:center;">
        <span style="color: rgb(255, 255, 255);">&nbsp;</span><span
 style="font-weight: bold; color: rgb(255, 255, 255);">
B. WASH</span></td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 595px;">30.
Has water supply been damaged/adversely affected? (If No or Inf.
unavailable, skip to Q.36)</td>
        <td style="width: 322px; background-color: rgb(192, 192, 192);">
        <? echo $row3['cat_rapidrap025a']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 495px;">31.
What are the sources of drinking
water which have been damaged? </td>
        <td style="width: 624px; background-color: rgb(192, 192, 192);">
        <? echo $row3['cat_rapidrap026f']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 495px;">32.
What is the current water source?</td>
        <td style="width: 622px; background-color: rgb(192, 192, 192);">
        <? echo $row3['cat_rapidrap027f']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 715px;">33.
Approximate % of total population
of the Village without access<BR> to safe
drinking
water due to disaster?<br />
0% = None<br>
1-25% (Up to approximately &frac14; of the population) = A few<br>
26-50% (Between &frac14; and &frac12; of the population) = Some<br>
50% - 100% (More than &frac12; of the population) = Many
		</td>
        <td style="width: 401px; background-color: rgb(192, 192, 192);">
		    <? echo $row3['cat_rapidrap028f']; ?>
		</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 707px;">34.
Access
to water for all people with disabilities/ST/SC/Minorities
(Post
disaster)?</td>
        <td style="width: 408px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap029a']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 707px;">35.
Is the water available at the source enough for
short-term and longer-term needs for all groups
in the population? </td>
        <td style="width: 406px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap030e']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 667px;">36.
Do people have enough water containers of
appropriate size and type? </td>
        <td style="width: 443px; background-color: rgb(192, 192, 192);">
        <? echo $row3['cat_rapidrap031f']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 707px;">37.
Have toilet facilities been damaged/adversely
affected?
(If No or Inf. unavailable, skip to Q42)</td>
        <td style="width: 414px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap032a']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 707px;">38.
What were the pre disaster excreta disposal practices?</td>
        <td style="width: 417px; background-color: rgb(192, 192, 192);">
        	<? echo $row3['cat_rapidrap033d']; ?>
        </td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 621px;">39-40.
What % of households have access to toilet
facilities<br>
0% = None<br>
1-25% (Up to approximately &frac14; of the population = A few<br>
26-50% (Between &frac14; and &frac12; of the population) = Some<br>
50% - 100% (More than &frac12; of the population) = Many
		</td>
        <td style="width: 318px;">
        <table style="border: 1px solid;text-align: left; height: 90px; margin-left: 0px; width: 318px;"
 border="1" cellpadding="2" cellspacing="2">
          <tbody>
            <tr>
              <th style="width: 239px;">39. Female</td>
              <th style="width: 353px;">40. Male</td>
            </tr>
            <tr>
              <td style="height: 42px; width: 239px; background-color: rgb(192, 192, 192);">
              <? echo $row3['cat_rapidrap034f']; ?>
              </td>
              <td style="height: 42px; width: 353px; background-color: rgb(192, 192, 192);">
              <? echo $row3['cat_rapidrap035f']; ?>
              </td>
            </tr>
          </tbody>
        </table>
        </td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 643px;">41.
What are the current (post Disaster) excreta disposal practices?</td>
        <td style="width: 467px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap036d']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 715px;">42.
Is there a threat to the health and well-being of the affected
population due to:</td>
        <td style="width: 406px; background-color: rgb(192, 192, 192);">
        <? echo $row3['cat_rapidrap037f']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; " border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 715px;">43.
What was the practice on menstrual hygiene pre disaster?(ask women and
girls/ANM/AWW/ASHA worker)</td>
        <td style="width: 409px; background-color: rgb(192, 192, 192);">
        <? echo $row3['cat_rapidrap038a']; ?>
		</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; " border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 715px;">44.Do they
still have access to them (ask women and
girls/ANM/AWW/ASHA worker)?</td>
        <td style="width: 409px; background-color: rgb(192, 192, 192);">
        <? echo $row3['cat_rapidrap039a']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; " border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 1130px; background-color: rgb(0, 0, 0);text-align:center;">
			<span style="font-weight: bold;">
        <span style="color: rgb(255, 255, 255);">C. SHELTER</span></span></td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 707px;">45.
Is shelter an issue
as a result of the disaster?
(If No or Inf. unavailable, skip to Q51) </td>
        <td style="width: 429px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap040a']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; " border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 689px;">46.
Approximate number of households in need of immediate shelter?<br />
0% = None<br>1-25% (Up to approximately &frac14; of the
population = A
few<br />26-50%
(Between &frac14; and &frac12; of the population) =
Some<br />50% -
100% (More than &frac12; of the
population) = Many</td>
        <td style="width: 421px; background-color: rgb(192, 192, 192);">
        <? echo $row3['cat_rapidrap041f']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; " border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 683px;">47.
What are the exposure elements that concern
you?</td>
        <td style="width: 410px; background-color: rgb(192, 192, 192);">
        <? echo $row3['cat_rapidrap042f']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; " border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 707px;">48.
Are alternative places available to people who require shelter (e.g.
community shelters or buildings that can be used as collective
centers)? </td>
        <td style="width: 427px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap043a']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 632px;">49.
Number of operational Govt. shelters? (specific
number)</td>
        <td style="width: 425px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap044b']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 632px;">50.
Land availability for shelter damage</td>
        <td style="width: 425px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap045a']; ?>
</td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; " border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 707px;">51.
Availability of NFI </td>
        <td style="width: 425px; background-color: rgb(192, 192, 192);"><? echo $row3['cat_rapidrap046a']; ?></td>
      </tr>
    </tbody>
  </table>
	
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
