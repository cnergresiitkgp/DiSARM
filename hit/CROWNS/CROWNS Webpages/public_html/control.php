
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
      
        
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script>
		function getValue(sel,chng,dep1,dep2,dep3,dep4)
		{
			var selDis = document.getElementById('dis-list');
			var dis = selDis.value;
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
			if(!(sel=='#dname-list'))
			{
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
								caller_id: 'reports'
							},
					success: function(data)
						{
							$(sel).html(data);
						}
				}
				);
			}
			$.ajax(
			{
				type: "POST",
				url: "getDisValue.php",
				data: 	{
							disaster_id: dis,
							state_id: st,
							district_id: ds,
							block_id: bl,
							grampanchayat_id: gp,
							location_id: lc,
							change: chng
						},
				success: function(data)
					{
						$('#dname-list').html(data);
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
				var optionsAsString = "";
			    optionsAsString += "<option value='%'>Select Report Type First</option>";
				$("#subRep-list").find('option').remove().end().append($(optionsAsString));
				getRepType('#report-list');
			}
		}
		function getRepType(ch)
		{
			var selRep = document.getElementById('report-list');
			var repT = selRep.value;
			var selDis = document.getElementById('dis-list');
			var dis = selDis.value;
			$.ajax(
			{
				type: "POST",
				url: "getRepValue.php",
				data:	{
							category: repT,
							disaster_id: dis,
							caller_id: 'reports'
						},
				success: function(data)
					{
						$(ch).html(data);
					}
			}
			);
		}
		</script>
		  <script>
			  $(function()
			  {
					$( "#from" ).datepicker
					({
						defaultDate: "+1w",
						changeMonth: true,
						dateFormat: 'yy-mm-dd',
						numberOfMonths: 1,
						maxDate: 0
					});
					$( "#to" ).datepicker
					({
						defaultDate: "+1w",
						changeMonth: true,
						dateFormat: 'yy-mm-dd',
						numberOfMonths: 1,
						maxDate: 0
					});
			  });
			  function toChng()
			  {
				  var sel = document.getElementById('to');
				  var selectedDate = sel.value;
				  $( "#from" ).datepicker( "option", "maxDate", selectedDate );
			  }
			  function fromChng()
			  {
				  var sel = document.getElementById('from');
				  var selectedDate = sel.value;
				  $( "#to" ).datepicker( "option", "minDate", selectedDate );
			  }
		  </script>
      
        <form method="post" id="sky-form" class="sky-form">
				<header><strong>Custom Reports Generation</strong></header>
				<fieldset>
					   <div class="row">
		                	<section>
		                		<center>
				       				<h4>Disaster Type</h4>
				       				<hr width="100%">
				       			</center>
				            </section>
				       </div>
                    	<div class="row">
		                	<section class="col col-2">
		                	</section>
		                	<section class="col col-8">
				                <label class="select">
				                    <select name="sel_dis" id="dis-list" onChange="getValue('#state-list','state','#loc-list','#gp-list','#blk-list','#dist-list');">
				                        <option value="0" selected disabled>Select Disaster Type</option>
				                        <?
					                        $query_disData=$conn->query("SELECT distinct `disastertype` FROM `disaster`");
					                        while($row_dis = $query_disData->fetch_assoc())
											{
												print("<option value='".$row_dis['disastertype']."'>".strtoupper(substr($row_dis['disastertype'],0,1))."".strtolower(substr($row_dis['disastertype'],1))."</option>");
											}
				                        ?>
				                    </select>
				                    <i></i>
				                </label>
				            </section>
				       </div>
					   <div class="row">
		                	<section>
		                	</section>
					   </div>
					   <div class="row">
		                	<section>
		                		<center>
				       				<h4>Location Details</h4>
				       				<hr width="100%">
				       			</center>
				            </section>
				       </div>
				       <div class="row">
		                    <section class="col col-4">
				                <label class="select">
				                    <select name="sel_State" id="state-list" onChange="getValue('#dist-list','district','#loc-list','#gp-list','#blk-list','');">
				                        <option value="%" selected disabled>Select Disaster First</option>
				                    </select>
				                    <i></i>
				                </label>
				            </section>
				            <section class="col col-4">
				                <label class="select">
				                    <select name="sel_Dist" id="dist-list" onChange="getValue('#blk-list','block','#loc-list','#gp-list','','');">
				                        <option value="%" selected disabled>Select State First</option>
				                    </select>
				                    <i></i>
				                </label>
				            </section>
				            <section class="col col-4">
				                <label class="select">
				                    <select name="sel_Block" id="blk-list" onChange="getValue('#gp-list','grampanchayat','#loc-list','','','');">
				                        <option value="%" selected disabled>Select District First</option>
				                    </select>
				                    <i></i>
				                </label>
				            </section>
				       </div>
				       <div class="row">
				            <section class="col col-4">
				                <label class="select">
				                    <select name="sel_GP" id="gp-list" onChange="getValue('#loc-list','locname','','','','');">
				                        <option value="%" selected disabled>Select Block First</option>
				                    </select>
				                    <i></i>
				                </label>
				            </section>
				            <section class="col col-4">
				                <label class="select">
				                    <select name="sel_loc" id="loc-list" onChange="getValue('#dname-list','disastername','','','','');">
				                        <option value="%" selected disabled>Select Grampanchayat First</option>
				                    </select>
				                    <i></i>
				                </label>
				            </section>
		                	<section class="col col-4">
				                <label class="select">
				                    <select name="sel_disName" id="dname-list">
				                        <option value="0" selected disabled>Select Disaster Type First</option>
				                    </select>
				                    <i></i>
				                </label>
				            </section>
	                    </div>
	                    <div class="row">
		                	<section class="col col-6">
				                <label class="input">
									<input type="text" id="from" name="from" onchange="fromChng()" placeholder="Select Start Date for Responses">
								</label>
							</section>
		                	<section class="col col-6">
				                <label class="input">
									<input type="text" id="to" name="to" onchange="toChng()" placeholder="Select End Date for Responses">
								</label>
							</section>
					   </div>
					   <div class="row">
		                	<section>
		                	</section>
					   </div>
					   <div class="row">
		                	<section>
		                		<center>
				       				<h4>Report Type</h4>
				       				<hr width="100%">
				       			</center>
				            </section>
				       </div>
				       <div class="row">
				            <section class="col col-1">
				            </section>
				            <section class="col col-5">
				                <label class="select">
				                    <select name="sel_rep" id="report-list" onChange="getRepType('#subRep-list');">
				                        <option value="" selected disabled>Select Disaster Type First</option>
				                    </select>
				                    <i></i>
				                </label>
				            </section>
				            <section class="col col-5">
				                <label class="select">
				                    <select name="sel_repST" id="subRep-list">
				                        <option value="%" selected disabled>Select Report Type First</option>
				                    </select>
				                    <i></i>
				                </label>
				            </section>
	                    </div>
	                    <div class="row">
	                    	<section class="col col-3">
				            </section>
				            <section class="col col-2" style="margin-left:-20px;">
				            	<input type="submit" class="button" name='generate' value="Generate Report">
				            </section>
				            <section class="col col-2">
				            </section>
				            <section class="col col-1">
				            	<input type="reset" class="button" value="Reset Values">
				            </section>
				        </div>
                </fieldset>
			</form>	
			</div>		
		</div>
</div><!-- end content area -->    

<?

if(isset($_POST['generate']))
{
	if(isset($_POST['sel_dis']))
	{
		$ds = $_POST['sel_dis'];
		$_SESSION['disaster']=$ds;
		if(isset($_POST['sel_rep']))
		{
			$repT = $_POST['sel_rep'];
			$_SESSION['repType']=$repT;
			if($_POST['sel_repST']=="0" || $_POST['sel_repST']=="%")
				$_SESSION['subCat']='All Sub Types';
			else
			{
				$repST = $_POST['sel_repST'];
				$_SESSION['subCat']=$repST;
			}
			if(isset($_POST['sel_disName']))
			{
				$dName = $_POST['sel_disName'];
				$_SESSION['disName'] = $dName;
				if(!empty($_POST['from'])&&!empty($_POST['to']))
				{
					$_SESSION['startDate'] = date_format(date_create($_POST['from']),"Y-m-d");
					$date = $_POST['to'];
					$query_date = $conn->query("SELECT DATE_ADD('$date',INTERVAL 1 DAY)dt FROM tspeech");
					$row_Dt = $query_date->fetch_assoc();
					$date = $row_Dt['dt'];
					//$date = date_create($_POST['to']);
					//date_add($date, date_interval_create_from_date_string('1 days'));
					//$date=DateTime::createFromFormat('Y-m-d', $_POST['to']);
					//$date->modify('+1 day');
					$_SESSION['endDate'] = date_format(date_create($date),"Y-m-d");
					if($dName!='all' && $dName!='rapid')//&& $dName!='shg' 
					{
						$query_repInfo=$conn->query("SELECT `repname` FROM `catreport` where supercat='$repT'");
						$repInfo = $query_repInfo->fetch_assoc();
						$rep=$repInfo['repname'].$ds;
						$query_repData=$conn->query("SELECT * FROM `$rep` where disastername='$dName'");
						if($query_repData->num_rows==0)
						{
							$query_resData=$conn->query("SELECT * FROM `response` where disastername='$dName'");
							if($query_resData->num_rows==0)
							{
								echo("<script type='text/javascript'>alert('No responses exist for selected disaster. Report cannot be generated')</script>");
							}
							else
							{
								$_SESSION['auth']='yes_Make';
								echo("<script type='text/javascript'>document.location = 'result.php';</script>");
							}
						}
						else
						{
							$_SESSION['auth']='yes_Make';
							echo("<script type='text/javascript'>document.location = 'result.php';</script>");
						}
					}
					/*elseif($dName=='shg')
					{
						//$_SESSION['auth']='yes_Make';
						//echo("<script type='text/javascript'>document.location = 'result.php';</script>");
					}*/
					elseif($dName=='all' || $dName=='rapid')
					{
						if(isset($_POST['sel_State']))
						{
							$stt = $_POST['sel_State'];
							$_SESSION['state']=$stt;
							$_SESSION['district']='';
							$_SESSION['block']='';
							$_SESSION['grampanchayat']='';
							$_SESSION['location']='';
							if($_POST['sel_State']=='all')
							{
								$_SESSION['auth']='yes_Make';
								echo("<script type='text/javascript'>document.location = 'result.php';</script>");
							}
							else
							{
								if(isset($_POST['sel_Dist']))
								{
									$dst = $_POST['sel_Dist'];
									$_SESSION['district']=$dst;
									if($_POST['sel_Dist']=='all')
									{
										$_SESSION['auth']='yes_Make';
										echo("<script type='text/javascript'>document.location = 'result.php';</script>");
									}
									else
									{
										if(isset($_POST['sel_Block']))
										{
											$bl = $_POST['sel_Block'];
											$_SESSION['block']=$bl;
											if($_POST['sel_Block']=='all')
											{
												$_SESSION['auth']='yes_Make';
												echo("<script type='text/javascript'>document.location = 'result.php';</script>");
											}
											else
											{
												if(isset($_POST['sel_GP']))
												{
													$gp = $_POST['sel_GP'];
													$_SESSION['grampanchayat']=$gp;
													if($_POST['sel_GP']=='all')
													{
														$_SESSION['auth']='yes_Make';
														echo("<script type='text/javascript'>document.location = 'result.php';</script>");
													}
													else
													{
														if(isset($_POST['sel_loc']))
														{
															$loc = $_POST['sel_loc'];
															$_SESSION['location']=$loc;
															$_SESSION['auth']='yes_Make';
															echo("<script type='text/javascript'>document.location = 'result.php';</script>");
														}
														else
															echo("<script type='text/javascript'>alert('Please select a value for location')</script>");
													}
												}
												else
													echo("<script type='text/javascript'>alert('Please select a value for grampanchayat')</script>");
											}
										}
										else
											echo("<script type='text/javascript'>alert('Please select a value for block')</script>");
									}
								}
								else
									echo("<script type='text/javascript'>alert('Please select a value for district')</script>");
							}			
						}
						else
							echo("<script type='text/javascript'>alert('Please select a value for state')</script>");
					}
				}
				else
					echo("<script type='text/javascript'>alert('Please select a date range for responses')</script>");
			}
			else
				echo("<script type='text/javascript'>alert('Please select a value for topic')</script>");
		}
		else
			echo("<script type='text/javascript'>alert('Please select a report type')</script>");
	}
	else
		echo("<script type='text/javascript'>alert('Please select a disaster type')</script>");
}

?>


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

<!-- style switcher -->
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
