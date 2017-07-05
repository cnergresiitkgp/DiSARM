
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
						echo("<td width='50%'><b><a href='control.php'>View Reports</a></b></td>");
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
						echo("<th width='50%'><b><a href='rapid.php'><font color='#444444'><i class='fa fa-angle-right'></i> RAPID</font></a></b></th>");
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
						echo("<td width='50%'><b><a href='control.php'>View Reports</a></b></td>");
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
						echo("<th width='50%'><b><a href='rapid.php'><font color='#444444'><i class='fa fa-angle-right'></i> RAPID</font></a></b></th>");
					echo("</tr>");
				}
				elseif($role=='Volunteers')
				{
					echo("<tr class='table-list'>");
						echo("<td width='50%'><b><a href='mancon.php'>Manage Contacts</a></b></td>");
					echo("</tr>");
					echo("<tr class='table-list'>");
						echo("<th width='50%'><b><a href='control.php'>View Reports</a></b></th>");
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
						echo("<td width='50%'><b><a href='rapid.php'><font color='#444444'><i class='fa fa-angle-right'></i> RAPID</font></a></b></td>");
					echo("</tr>");
				}
			?>
			</table>
       
        
      </div>
      
      <div class="three_fourth last">
      <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
			<script>
				function getValue(sel,chng,dep1,dep2,dep3,dep4)
				{
					var selSt = document.getElementById('state-list');
					var st = selSt.value;
					var selDist = document.getElementById('dist-list');
					var ds = selDist.value;
					var selBlk = document.getElementById('blk-list');
					var bl = selBlk.value;
					var selGP = document.getElementById('gp-list');
					var gp = selGP.value;
					var selLoc = document.getElementById('loc-list');
					var lc = selLoc.value;
					$.ajax(  //fill values in next select
					{
						type: "POST",
						url: "getValue.php",
						data: 	{
									state_id: st,
									district_id: ds,
									block_id: bl,
									grampanchayat_id: gp,
									location_id: lc,
									change: chng,
									caller_id: 'contacts'
								},
						success: function(data)
							{
								$(sel).html(data);
							}
					}
					);
					if(!(dep1==''))
					{
						var optionsAsString = "";
						optionsAsString += "<option value='%'>Select Grampanchayat First</option>";
						$(dep1).find('option').remove().end().append($(optionsAsString));
					}
					if(!(dep2==''))
					{
						var optionsAsString = "";
						optionsAsString += "<option value='%'>Select Block First</option>";
						$(dep2).find('option').remove().end().append($(optionsAsString));
					}
					if(!(dep3==''))
					{
						var optionsAsString = "";
						optionsAsString += "<option value='%'>Select District First</option>";
						$(dep3).find('option').remove().end().append($(optionsAsString));
					}
					if(!(dep4==''))
					{
						var optionsAsString = "";
						optionsAsString += "<option value='%'>Select State First</option>";
						$(dep4).find('option').remove().end().append($(optionsAsString));
					}
				}
				/*
				function addCheck()
				{
					var chk = $('input[name=addType]:checked').val();
					if(chk=="1")
					{
						$("#sel_row1").fadeOut("slow");
						$("#sel_row2").fadeOut("slow");
						$("#sel_row3").fadeOut("slow");
						$("#newLoc1").fadeIn("slow");
						$("#newLoc2").fadeIn("slow");
						$("#newLoc3").fadeIn("slow");
					}
					else
					{
						$("#sel_row1").fadeIn("slow");
						$("#sel_row2").fadeIn("slow");
						$("#sel_row3").fadeIn("slow");
						$("#newLoc1").fadeOut("slow");
						$("#newLoc2").fadeOut("slow");
						$("#newLoc3").fadeOut("slow");
					}
				}
				$(document).ready(function() {
					addCheck();
				});
				*/
			</script>
	        
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
        <td style="background-color: rgb(192, 192, 192);">
		    							<select name="sel_State" id="state-list" onChange="getValue('#dist-list','district','#loc-list','#gp-list','#blk-list','#dist-list');">
						                    <option value="0" selected>All States</option>
						                    <?
								                $query_locData=$conn->query("SELECT distinct `state` FROM `location`");
												while($row_loc = $query_locData->fetch_assoc())
												{
													print("<option value='".$row_loc['state']."'>".$row_loc['state']."</option>");
												}
											?>
						                </select>
									</td>
        <td style="background-color: rgb(192, 192, 192);">
        <select name="sel_Dist" id="dist-list" onChange="getValue('#blk-list','block','#loc-list','#gp-list','#blk-list','');">
				                        <option value="%" selected disabled>Select State First</option>
				                    </select>
									
        </td>
        <td style="background-color: rgb(192, 192, 192);">
        <select name="sel_Block" id="blk-list" onChange="getValue('#gp-list','grampanchayat','#loc-list','#gp-list','','');">
				                        <option value="%" selected disabled>Select District First</option>
				                    </select>
									
        </td>
        <td style="background-color: rgb(192, 192, 192);">
        <select name="sel_GP" id="gp-list" onChange="getValue('#loc-list','locname');">
				                        <option value="%" selected disabled>Select Block First</option>
				                    </select>
									
        </td>
        <td style="background-color: rgb(192, 192, 192);">
        <select name="sel_loc" id="loc-list">
				                        <option value="%" selected disabled>Select Grampanchayat First</option>
				                    </select>
									
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
 style="background-color: rgb(192, 192, 192); height: 26px; width: 95px;"><input
 name="no_of_ward" maxlength="10" size="10" /></td>
        <td style="height: 26px; width: 461px;">7. Number of
affected Wards?</td>
        <td
 style="background-color: rgb(192, 192, 192); height: 26px; width: 89px;"><input
 name="no_of_affected_ward" maxlength="10" size="10" /></td>
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
 style="background-color: rgb(192, 192, 192); height: 27px; width: 108px;"><input
 name="total_population" maxlength="10" size="10" /></td>
        <td style="height: 27px; width: 112px;">9. Male</td>
        <td
 style="background-color: rgb(192, 192, 192); height: 27px; width: 102px;"><input
 name="total_population_male" maxlength="10" size="10" /></td>
        <td style="height: 27px; width: 154px;">10. Female</td>
        <td
 style="background-color: rgb(192, 192, 192); height: 27px; width: 107px;"><input
 name="total_population_female" maxlength="10" size="10" /></td>
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
        <td style="width: 565px; background-color: rgb(192, 192, 192);"><input
 name="affected_percent" maxlength="10"
 size="30" type="text" /></td>
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
 style="width: 278px; height: 38px; background-color: rgb(192, 192, 192);"><input
 name="affected_individuals"
 maxlength="10" size="30" type="text" /></td>
              <td
 style="height: 38px; width: 281px; background-color: rgb(192, 192, 192);"><input
 name="affected_households"
 maxlength="10" size="30" type="text" /></td>
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
 style="height: 31px; background-color: rgb(192, 192, 192);"><input
 name="people_dead" maxlength="10" size="18" /></td>
        <td
 style="height: 31px; background-color: rgb(192, 192, 192);"><input
 name="people_missing" maxlength="10" size="18" /></td>
        <td
 style="height: 31px; background-color: rgb(192, 192, 192);"><input
 name="people_injured" maxlength="10" size="18" /></td>
        <td
 style="height: 31px; background-color: rgb(192, 192, 192);"><input
 name="people_displaced" maxlength="10" size="18" /></td>
        <td
 style="height: 31px; background-color: rgb(192, 192, 192);"><input
 name="people_nondisplaced" maxlength="10" size="18" /></td>
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
        <td style="width: 120px; background-color: rgb(192, 192, 192);"><input
 name="affected_children" maxlength="10"
 size="10" type="text" /></td>
        <td style="width: 91px; background-color: rgb(192, 192, 192);"><input
 name="affected_women" maxlength="10" size="10"
 type="text" /></td>
        <td style="background-color: rgb(192, 192, 192); width: 115px;"><input
 name="affected_men" maxlength="10" size="10"
 type="text" /></td>
        <td style="width: 154px; background-color: rgb(192, 192, 192);"><input
 name="affected_cwd1" maxlength="10" size="10"
 type="text" /></td>
        <td style="width: 273px; background-color: rgb(192, 192, 192);"><input
 name="affected_pregnant" maxlength="10"
 size="29" /></td>
        <td style="width: 165px; background-color: rgb(192, 192, 192);"><input
 name="affected_minorities" maxlength="10"
 size="10" type="text" /></td>
        <td style="width: 151px; background-color: rgb(192, 192, 192);"><input
 name="affected_scst" maxlength="10" size="10"
 type="text" /></td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 522px;">26.
How far has the water entered</td>
        <td style="width: 587px;"><input name="waters_entered"
 value="a" type="radio" /> within the
village <input name="waters_entered" value="b"
 type="radio" /> into
the houses </td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 522px;">27.
How long will the waters stay</td>
        <td style="width: 587px;"><input name="waters_stay"
 value="a" type="radio" />less
than 3 days <input name="waters_stay" value="b"
 type="radio" /> more
than 3 days </td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; height: 37px;"
 border="1" cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 522px; height: 34px;">28.
How high is the water logging</td>
        <td style="width: 589px; height: 34px;">
        <input name="water_logging" value="a" type="radio" /> 1-3
ft <input name="water_logging" value="b" type="radio" />
above 3 ft </td>
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
        <td style="width: 704px;">&nbsp;
i. <input name="state" maxlength="50" size="20" type="text" /> &nbsp;
&nbsp;
&nbsp; &nbsp; iv. <input name="affWard4" maxlength="50" size="20"
 type="text" />
        <br />
&nbsp;ii. <input name="affWard2" maxlength="50" size="20" type="text" />
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;v. <input name="affWard5" maxlength="50"
 size="20" type="text" />
        <br />
iii. <input name="affWard3" maxlength="50" size="20" type="text" />&nbsp;
&nbsp;
&nbsp; &nbsp; &nbsp; vi.&nbsp;<input name="affWard6" maxlength="50"
 size="20" type="text" />
        <br />
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
        <td style="width: 322px;">
        <input name="badly_affected" value="a" type="radio" />Yes <input
 name="badly_affected" value="b" type="radio" />
No <input name="badly_affected" value="c" type="radio" />
Inf. unavailable </td>
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
        <td style="width: 624px;">
        <input name="sources_of_drinking_water_damaged"
 value="a" type="radio" />Open
well (erstwhile used for
drinking
water purposes)<input name="sources_of_drinking_water_damaged"
 value="b" type="radio" />
Springs<br />
        <input name="sources_of_drinking_water_damaged"
 value="c" type="radio" />Pond with
embankment breached <input name="sources_of_drinking_water_damaged"
 value="d" type="radio" />Pipe
water supply <input name="sources_of_drinking_water_damaged"
 value="e" type="radio" />Tube
well </td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 495px;">32.
What is the current water source?</td>
        <td style="width: 622px;">
        <input name="sources_of_drinking_water" value="a"
 type="radio" />Wells<input name="sources_of_drinking_water"
 value="b" type="radio" />
Ponds/ Open Water bodies <input name="sources_of_drinking_water"
 value="c" type="radio" /> Tube wells/ hand pumps<br />
        <input name="sources_of_drinking_water"
 value="d" type="radio" />Piped
Water Supply <input name="sources_of_drinking_water" value="e"
 type="radio" />Any
Other </td>
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
        <td style="width: 401px;">
		    <input name="safe_drinking_water" value="a" type="radio" />None<br />
		    <input name="safe_drinking_water" value="b" type="radio" />A few <br />
		    <input name="safe_drinking_water" value="c" type="radio" />Some<br />
		    <input name="safe_drinking_water" value="d" type="radio" />Many<br />
		    <input name="safe_drinking_water" value="e" type="radio" />Inf. Unavailable
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
        <td style="width: 408px;"><input
 name="access_to_water_for_all_people" value="a" type="radio" />Yes <input
 name="access_to_water_for_all_people" value="b" type="radio" />No <input
 name="access_to_water_for_all_people" value="c" type="radio" />
Inf. unavailable </td>
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
        <td style="width: 406px;"><input
 name="access_to_water_for_all_people2" value="a" type="radio" />Sufficient
for
Short term (for 1
weeks)&nbsp;<br><input name="access_to_water_for_all_people2" value="b"
 type="radio" />Partly
(for 2 weeks)<br />
        <input name="access_to_water_for_all_people2" value="c"
 type="radio" />Long
term sufficiency (beyond 3 weeks) <br><input
 name="access_to_water_for_all_people2" value="d" type="radio" />Inf.
unavailable </td>
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
        <td style="width: 443px;">
        <input name="water_container" value="a" type="radio" />None
        <input name="water_container" value="b" type="radio" />A
few <input name="water_container" value="c" type="radio" />
Some <input name="water_container" value="d" type="radio" />Many
        <input name="water_container" value="e"
 type="radio" />Inf.
unavailable </td>
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
        <td style="width: 414px;"><input
 name="toilet_damage" value="a" type="radio" />Yes
        <input name="toilet_damage" value="b"
 type="radio" />No <input name="toilet_damage"
 value="c" type="radio" />
Inf. unavailable </td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 707px;">38.
What were the pre disaster excreta disposal practices?</td>
        <td style="width: 417px;">
        	<input name="excreta" value="a" type="radio" />Open Areas&nbsp;
        	<input name="excreta" value="b" type="radio" />Household/Community Latrines
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
              <td style="height: 42px; width: 239px;">
              <input name="toiletFemale" value="a" type="radio" />None<br />
              <input name="toiletFemale" value="b" type="radio" />A few <br />
              <input name="toiletFemale" value="c" type="radio" />Some<br />
              <input name="toiletFemale" value="d" type="radio" />Many<br />
              <input name="toiletFemale" value="e" type="radio" />Inf. unavailable
              </td>
              <td style="height: 42px; width: 353px;">
              <input name="toiletMale" value="a" type="radio" />None<br />
              <input name="toiletMale" value="b" type="radio" />A few <br />
              <input name="toiletMale" value="c" type="radio" />Some<br />
              <input name="toiletMale" value="d" type="radio" />Many<br />
              <input name="toiletMale" value="e" type="radio" />Inf.unavailable
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
        <td style="width: 467px;"><input name="current_post_Disaster"
 value="a" type="radio" />Open
Areas &nbsp;
        <input name="current_post_Disaster" value="b"
 type="radio" />Household/Community Latrines </td>
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
        <td style="width: 406px;">
        <input name="health_threat" value="a"
 type="radio" />Carcass Disposal<br />
        <input name="health_threat" value="b"
 type="radio" />Solid waste/garbage<br />
        <input name="health_threat" value="c"
 type="radio" />Waste Water<br />
        <input name="health_threat" value="d"
 type="radio" />Rainwater runoff/drainage<br />
        <input name="health_threat"
 value="e" type="radio" />Any other</td>
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
        <td style="width: 409px;">
        <input name="hygiene_pre_disaster" value="a" type="radio" />Cloth
&nbsp;<input name="hygiene_pre_disaster" value="b" type="radio" />Sanitary Napkins &nbsp;
		<input name="hygiene_pre_disaster" value="c" type="radio" />Any other
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
        <td style="width: 409px;">
        <input name="hygiene_pre_disaster1" value="a" type="radio" />Yes
        <input name="hygiene_pre_disaster1" value="b" type="radio" />No
        <input name="hygiene_pre_disaster1" value="c" type="radio" />Inf. unavailable</td>
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
        <td style="width: 429px;"><input name="n1" value="a"
 type="radio" />Yes
        <input name="n1" value="b" type="radio" />No <input name="n1"
 value="c" type="radio" />
Inf. unavailable </td>
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
        <td style="width: 421px;">
        <input name="n2" value="a" type="radio" />None<br />
        <input name="n2" value="b" type="radio" />A few <br />
        <input name="n2" value="c" type="radio" /> Some<br />
        <input name="n2" value="d" type="radio" />Many<br />
        <input name="n2" value="e" type="radio" />Inf.
unavailable </td>
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
        <td style="width: 410px;">
        <input name="n3" value="a" type="radio" />Weather Conditions &nbsp;
        <input name="n3" value="b" type="radio" /> Mosquitos <input
 name="n3" value="c" type="radio" />Darkness<br /><input
 name="n3" value="d" type="radio" />Wild
Animals/Snakes <input name="n3" value="e" type="radio" /> Others&nbsp; </td>
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
        <td style="width: 427px;"><input name="n4" value="a"
 type="radio" />Yes
        <input name="n4" value="b" type="radio" />No <input name="n4"
 value="c" type="radio" />
Inf. unavailable </td>
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
        <td style="background-color: rgb(192, 192, 192);"><input
 name="operational_shelters" maxlength="100" size="50" type="text" /></td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left;" border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 632px;">50.
Land availability for shelter damage</td>
        <td style="width: 425px;"><input name="n5" value="a"
 type="radio" />Available
        <input name="n5" value="b" type="radio" />Unavailable <input name="n5"
 value="c" type="radio" />
Inf. unavailable </td>
      </tr>
    </tbody>
  </table>
  <table style="border: 1px solid;text-align: left; " border="1"
 cellpadding="2" cellspacing="2">
    <tbody>
      <tr>
        <td style="width: 707px;">51.
Availability of NFI </td>
        <td style="width: 425px;"><input name="n6" value="a"
 type="radio" />Yes
        <input name="n6" value="b" type="radio" />No <input name="n6"
 value="c" type="radio" />
Inf. unavailable </td>
      </tr>
    </tbody>
  </table>
  <br>
	                    <div class="row">
	                    	<section class="col col-3">
				            </section>
				            <section class="col col-2" style="margin-left:-20px;">
				            	<input type="submit" class="button" name='submit' value="Submit Values">
				            </section>
				            <section class="col col-2">
				            </section>
				            <section class="col col-1">
				            	<input type="reset" class="button" value="Reset Values">
				            </section>
				        </div>
                </fieldset>
			</form>
	
<?
	
	if(isset($_POST['submit']))
	{
		$stt = isset($_POST['sel_State'])?$_POST['sel_State']:'';
		$dist = isset($_POST['sel_Dist'])?$_POST['sel_Dist']:'';
		$blk = isset($_POST['sel_Block'])?$_POST['sel_Block']:'';
		$gp = isset($_POST['sel_GP'])?$_POST['sel_GP']:'';
		$vill = isset($_POST['sel_loc'])?$_POST['sel_loc']:'';
		$query_locID = $conn->query("select `locationid` from `location` where `state`='$stt' and `district`='$dist' and `block`='$blk' and `grampanchayat`='$gp' and `locname`='$vill'");
		$locRow = $query_locID->fetch_assoc();
		$locID = $locRow['locationid'];
		$dName = $locID.'-rapid';
		//$hmlt = isset($_POST['hamlet'])?$_POST['hamlet']:'';
		//$ward = isset($_POST['ward'])?$_POST['ward']:'';
		//$lat = isset($_POST['gps_north'])?$_POST['gps_north']:'';
		//$long = isset($_POST['gps_east'])?$_POST['gps_east']:'';
		$numWard = intval($_POST['no_of_ward']);
		$numAffWard = intval($_POST['no_of_affected_ward']);
		$totPop = intval($_POST['total_population']);
		$totPopMale = intval($_POST['total_population_male']);
		$totPopFemale = intval($_POST['total_population_female']);
		$affCent = intval($_POST['affected_percent']);
		$affInd = intval($_POST['affected_individuals']);
		$affHouse = intval($_POST['affected_households']);
		$pplDead = intval($_POST['people_dead']);
		$pplMiss = intval($_POST['people_missing']);
		$pplInj = intval($_POST['people_injured']);
		$pplDis = intval($_POST['people_displaced']);
		$pplNonDis = intval($_POST['people_nondisplaced']);
		$affChild = intval($_POST['affected_children']);
		$affWomen = intval($_POST['affected_women']);
		$affMen = intval($_POST['affected_men']);
		$affCWD = intval($_POST['affected_cwd1']);
		$affPre = intval($_POST['affected_pregnant']);
		$affMin = intval($_POST['affected_minorities']);
		$affSC = intval($_POST['affected_scst']);
		$l1 = isset($_POST['waters_entered'])?$_POST['waters_entered']:'';
		$l2 = isset($_POST['waters_stay'])?$_POST['waters_stay']:'';
		$l3 = isset($_POST['water_logging'])?$_POST['water_logging']:'';
		$l4 = isset($_POST['affWard1'])&&(!empty($_POST['affWard1']))?$_POST['affWard1']:'';
		$l4 = isset($_POST['affWard2'])&&(!empty($_POST['affWard2']))?$l4.', '.$_POST['affWard2']:$l4;
		$l4 = isset($_POST['affWard3'])&&(!empty($_POST['affWard3']))?$l4.', '.$_POST['affWard3']:$l4;
		$l4 = isset($_POST['affWard4'])&&(!empty($_POST['affWard4']))?$l4.', '.$_POST['affWard4']:$l4;
		$l4 = isset($_POST['affWard5'])&&(!empty($_POST['affWard5']))?$l4.', '.$_POST['affWard5']:$l4;
		$l4 = isset($_POST['affWard6'])&&(!empty($_POST['affWard6']))?$l4.', '.$_POST['affWard6']:$l4;
		$w1 = isset($_POST['badly_affected'])?$_POST['badly_affected']:'';
		$w2 = isset($_POST['sources_of_drinking_water_damaged'])?$_POST['sources_of_drinking_water_damaged']:'';
		$w3 = isset($_POST['sources_of_drinking_water'])?$_POST['sources_of_drinking_water']:'';
		$w4 = isset($_POST['safe_drinking_water'])?$_POST['safe_drinking_water']:'';
		$w5 = isset($_POST['access_to_water_for_all_people'])?$_POST['access_to_water_for_all_people']:'';
		$w6 = isset($_POST['access_to_water_for_all_people2'])?$_POST['access_to_water_for_all_people2']:'';
		$w7 = isset($_POST['water_container'])?$_POST['water_container']:'';
		$w8 = isset($_POST['access_to_water_for_all_people11'])?$_POST['access_to_water_for_all_people11']:'';
		$w9 = isset($_POST['excreta'])?$_POST['excreta']:'';
		$w10 = isset($_POST['toiletFemale'])?$_POST['toiletFemale']:'';
		$w11 = isset($_POST['toiletMale'])?$_POST['toiletMale']:'';
		$w12 = isset($_POST['current_post_Disaster'])?$_POST['current_post_Disaster']:'';
		$w13 = isset($_POST['health_threat'])?$_POST['health_threat']:'';
		$w14 = isset($_POST['hygiene_pre_disaster'])?$_POST['hygiene_pre_disaster']:'';
		$w15 = isset($_POST['hygiene_pre_disaster1'])?$_POST['hygiene_pre_disaster1']:'';
		$s1 = isset($_POST['n1'])?$_POST['n1']:'';
		$s2 = isset($_POST['n2'])?$_POST['n2']:'';
		$s3 = isset($_POST['n3'])?$_POST['n3']:'';
		$s4 = isset($_POST['n4'])?$_POST['n4']:'';
		$s5 = intval($_POST['operational_shelters']);
		$s6 = isset($_POST['n5'])?$_POST['n5']:'';
		$s7 = isset($_POST['n6'])?$_POST['n6']:'';
		$id = $_SESSION['log_id'];
		$conn->query("insert into `response` values
			($id,'rap001b','cat_rapid', $numWard, '$dName', NOW(), 1),
			($id,'rap002b','cat_rapid', $numAffWard, '$dName', NOW(), 1),
			($id,'rap003b','cat_rapid', $totPop, '$dName', NOW(), 1),
			($id,'rap004b','cat_rapid', $totPopMale, '$dName', NOW(), 1),
			($id,'rap005b','cat_rapid', $totPopFemale, '$dName', NOW(), 1),
			($id,'rap006b','cat_rapid', $affCent, '$dName', NOW(), 1),
			($id,'rap007b','cat_rapid', $affInd, '$dName', NOW(), 1),
			($id,'rap008b','cat_rapid', $affHouse, '$dName', NOW(), 1),
			($id,'rap009b','cat_rapid', $pplDead, '$dName', NOW(), 1),
			($id,'rap010b','cat_rapid', $pplMiss, '$dName', NOW(), 1),
			($id,'rap011b','cat_rapid', $pplInj, '$dName', NOW(), 1),
			($id,'rap012b','cat_rapid', $pplDis, '$dName', NOW(), 1),
			($id,'rap013b','cat_rapid', $pplNonDis, '$dName', NOW(), 1),
			($id,'rap014b','cat_rapid', $affChild, '$dName', NOW(), 1),
			($id,'rap015b','cat_rapid', $affWomen, '$dName', NOW(), 1),
			($id,'rap016b','cat_rapid', $affMen, '$dName', NOW(), 1),
			($id,'rap017b','cat_rapid', $affCWD, '$dName', NOW(), 1),
			($id,'rap018b','cat_rapid', $affPre, '$dName', NOW(), 1),
			($id,'rap019b','cat_rapid', $affMin, '$dName', NOW(), 1),
			($id,'rap020b','cat_rapid', $affSC, '$dName', NOW(), 1),
			($id,'rap021d','cat_rapid', '$l1', '$dName', NOW(), 1),
			($id,'rap022d','cat_rapid', '$l2', '$dName', NOW(), 1),
			($id,'rap023d','cat_rapid', '$l3', '$dName', NOW(), 1),
			($id,'rap024c','cat_rapid', '$l4', '$dName', NOW(), 1),
			($id,'rap025a','cat_rapid', '$w1', '$dName', NOW(), 1),
			($id,'rap026f','cat_rapid', '$w2', '$dName', NOW(), 1),
			($id,'rap027f','cat_rapid', '$w3', '$dName', NOW(), 1),
			($id,'rap028f','cat_rapid', '$w4', '$dName', NOW(), 1),
			($id,'rap029a','cat_rapid', '$w5', '$dName', NOW(), 1),
			($id,'rap030e','cat_rapid', '$w6', '$dName', NOW(), 1),
			($id,'rap031f','cat_rapid', '$w7', '$dName', NOW(), 1),
			($id,'rap032a','cat_rapid', '$w8', '$dName', NOW(), 1),
			($id,'rap033d','cat_rapid', '$w9', '$dName', NOW(), 1),
			($id,'rap034f','cat_rapid', '$w10', '$dName', NOW(), 1),
			($id,'rap035f','cat_rapid', '$w11', '$dName', NOW(), 1),
			($id,'rap036d','cat_rapid', '$w12', '$dName', NOW(), 1),
			($id,'rap037f','cat_rapid', '$w13', '$dName', NOW(), 1),
			($id,'rap038a','cat_rapid', '$w14', '$dName', NOW(), 1),
			($id,'rap039a','cat_rapid', '$w15', '$dName', NOW(), 1),
			($id,'rap040a','cat_rapid', '$s1', '$dName', NOW(), 1),
			($id,'rap041f','cat_rapid', '$s2', '$dName', NOW(), 1),
			($id,'rap042f','cat_rapid', '$s3', '$dName', NOW(), 1),
			($id,'rap043a','cat_rapid', '$s4', '$dName', NOW(), 1),
			($id,'rap044b','cat_rapid', $s5, '$dName', NOW(), 1),
			($id,'rap045a','cat_rapid', '$s6', '$dName', NOW(), 1),
			($id,'rap046a','cat_rapid', '$s7', '$dName', NOW(), 1)");
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
