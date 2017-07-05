
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
        
        <li><a href="agency.php" class="dropdown-toggle"><i class="fa fa-home"></i> Home</a></li>
        <li> <a href="impcon_agency.php" class="dropdown-toggle"><i class="fa fa-star"></i> Important Contacts</a></li>
        <li> <a href="helpme_agency.php" class="dropdown-toggle"><i class="fa fa-medkit"></i> Help Me</a></li>
        <li> <a href="emergency_agency.php" class="dropdown-toggle"><i class="fa fa-flag"></i> Report an Emergency</a></li>
        <li> <a href="SearchVictim_agency.php" class="active"><i class="fa fa-map-marker"></i> Locate missing person</a></li>
      <li> <a href="MySess_Check.php" class="dropdown-toggle"><i class="fa fa-money"></i> Donate</a></li>
         <?php  if(isset($_SESSION['username'])){  ?>
        <li> <a href="logout.php" class="dropdown-toggle"><i class="fa fa-money"></i> LogOut</a></li>
        <?php }
		else {?>
         <li> <a href="MyLogin.php" class="dropdown-toggle"><i class="fa fa-money"></i> LogIn</a></li> <?php  } ?>
        
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
				<!--<tr class="table-list">
					<td width='50%'><b><a href="admin.php">Manage Notifications</a></b></td>
				</tr>-->
				<tr class="table-list">
					<td width='50%'><b><a href="mancon.php">Manage Contacts</a></b></td>
				</tr>
<!--				<tr class="table-list">
					<td width='50%'><b><a href="manfeed.php">Publish Information</a></b></td>
				</tr>-->
				<tr class="table-list">
					<td width='50%'><b><a href="control.php">View Reports</a></b></td>
				</tr>
<!--				<tr class="table-list">
					<td width='50%'><b><a href="managn.php">Manage Agencies</a></b></td>
				</tr>-->
				<tr class="table-list">
					<td width='50%'><b><a href="manage_volunteers.php">Manage Volunteers</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="req_resources.php">Request Resource</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="manage_resources.php">Manage Resources</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="view_donation.php">View Donation</a></b></td>
				</tr>
				
				
<!--				<tr class="table-list">
					<td width='50%'><b><a href="mandon.php">Manage Donations</a></b></td>
				</tr>-->
				<tr class="table-list">
					<td width='50%'><b><a href="rapid.php">RAPID</a></b></td>
				</tr>
<!--				<tr class="table-list">
					<td width='50%'><b><a href="mansms.php">Manage Interactive SMS System</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="manshelter.php">View Shelter Information</a></b></td>
				</tr>-->
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
				function restoreVals()
				{
				  $("#state-list").val("<?php if(isset($_POST['sel_State'])) echo $_POST['sel_State']; else echo ("0");?>");
				  $("#dist-list").val("<?php if(isset($_POST['sel_Dist'])) echo $_POST['sel_Dist']; else echo ('%');?>");
				  $("#blk-list").val("<?php if(isset($_POST['sel_Block'])) echo $_POST['sel_Block']; else echo ('%');?>");
				  $("#gp-list").val("<?php if(isset($_POST['sel_GP'])) echo $_POST['sel_GP']; else echo ('%');?>");
				  $("#loc-list").val("<?php if(isset($_POST['sel_loc'])) echo $_POST['sel_loc']; else echo ('%');?>");
				  $("#subCat-list").val("<?php if(isset($_POST['sel_subCat'])) echo $_POST['sel_subCat']; else echo ('%');?>");
				  $("#txtname").val("<?php if(isset($_POST['name'])) echo $_POST['name'];?>");
				  $("#txtaff").val("<?php if(isset($_POST['aff'])) echo $_POST['aff'];?>");
				  $("#txtdsg").val("<?php if(isset($_POST['dsg'])) echo $_POST['dsg'];?>");
				  $("#txtcno").val("<?php if(isset($_POST['cno'])) echo $_POST['cno'];?>");
				  $("#conType-list").val("<?php if(isset($_POST['sel_conType'])) echo $_POST['sel_conType'];?>");
				  $("[name=addType]").val(["<? if(isset($_POST['addType'])) echo $_POST['addType'];?>"]);
				  $("#txtstate").val("<?php if(isset($_POST['text_state'])) echo $_POST['text_state'];?>");
				  $("#txtdist").val("<?php if(isset($_POST['text_dist'])) echo $_POST['text_dist'];?>");
				  $("#txtblk").val("<?php if(isset($_POST['text_blk'])) echo $_POST['text_blk'];?>");
				  $("#txtgp").val("<?php if(isset($_POST['text_gp'])) echo $_POST['text_gp'];?>");
				  $("#txtloc").val("<?php if(isset($_POST['text_loc'])) echo $_POST['text_loc'];?>");
				}
				$(document).ready(function() {
					addCheck();
				});
			</script>
	        <form method="post" id="sky-form" class="sky-form">
    	    	<header><strong>Manage Contacts</strong></header>
    	    	<fieldset>
    	    			<div class="row" id="sel_row1">
		                    <section class="col col-4">
				                <label class="select">
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
									<i></i>
				                </label>
				            </section>
				            <section class="col col-4">
				                <label class="select">
									<select name="sel_Dist" id="dist-list" onChange="getValue('#blk-list','block','#loc-list','#gp-list','#blk-list','');">
				                        <option value="%" selected disabled>Select State First</option>
				                    </select>
									<i></i>
				                </label>
				            </section>
				            <section class="col col-4">
				                <label class="select">
									<select name="sel_Block" id="blk-list" onChange="getValue('#gp-list','grampanchayat','#loc-list','#gp-list','','');">
				                        <option value="%" selected disabled>Select District First</option>
				                    </select>
									<i></i>
				                </label>
				            </section>
				       </div>
				       <div class="row" id="sel_row2">
				            <section class="col col-6">
				                <label class="select">
									<select name="sel_GP" id="gp-list" onChange="getValue('#loc-list','locname');">
				                        <option value="%" selected disabled>Select Block First</option>
				                    </select>
									<i></i>
				                </label>
				            </section>
				            <section class="col col-6">
				                <label class="select">
									<select name="sel_loc" id="loc-list">
				                        <option value="%" selected disabled>Select Grampanchayat First</option>
				                    </select>
									<i></i>
				                </label>
				            </section>
	                    </div>
			       <div class="row" id="sel_row3">
							<section class="col col-5"></section>
				            <section class="col col-2">
					            <input type="submit" class="button" name='fetch' value="Get Contacts">
					        </section>
		           </div>
						<div class="row">
				           	<section class="col col-8">
				           		<b>Add a Contact</b>
					        </section>
					    </div>
						<div class="row">
				           	<section class="col col-6">
								<label class="input">
									<input type="text" name="name" id="txtname" placeholder="Person Name / Agency Name">
								</label>
							</section>
				           	<section class="col col-6">
							    <label class="input">
								    <input type="text" name="aff" id="txtaff" placeholder="Affiliation">
								</label>
							</section>
					    </div>
						<div class="row">
				           	<section class="col col-4">
								<label class="input">
							    	<input type="text" name="dsg" id="txtdsg" placeholder="Designation">
							    </label>
					        </section>
				           	<section class="col col-4">
							    <label class="input">
								    <input type="text" name="cno" id="txtcno" placeholder="Contact Number">
								</label>
							</section>
							<section class="col col-4">
							    <label class="select">
									<select name="sel_conType" id="conType-list">
										<option value="0" selected disabled>Select Contact Category</option>
										<option value="home">Home</option>
										<option value="office">Office</option>
										<option value="mobile">Mobile</option>
										<option value="toll-Free">Toll-Free</option>
									</select>
									<i></i>
							    </label>
					        </section>
					   </div>
					   <div class="row">
							<section class="col col-3"></section>
							<section class="col col-4">
								<label class="radio" style="margin-left: -10px;">
				            		<input type="radio" name='addType' id="seltype" value="0" onchange="addCheck();" checked><i></i>Location as above
				            	</label>
				            </section>
							<section class="col col-2">
								<label class="radio">
				            		<input type="radio" name='addType' id="seltype" value="1" onchange="addCheck();"><i></i>New location
				            	</label>
				            </section>
				       </div>
						<div class="row" id="newLoc1" style="display: none;">
				           	<section class="col col-4">
							    <label class="input">
								    <input type="text" name="text_state" id="txtstate" placeholder="State">
								</label>
					        </section>
				           	<section class="col col-4">
								<label class="input">
									<input type="text" name="text_dist" id="txtdist" placeholder="District">
								</label>
							</section>
				           	<section class="col col-4">
							    <label class="input">
								    <input type="text" name="text_blk" id="txtblk" placeholder="Block">
								</label>
							</section>
				       </div>
					   <div class="row" id="newLoc2" style="display: none;">
						   	<section class="col col-6">
							    <label class="input">
								    <input type="text" name="text_gp" id="txtgp" placeholder="Grampanchayat">
								</label>
							</section>
				           	<section class="col col-6">
								<label class="input">
							    	<input type="text" name="text_loc" id="txtloc" placeholder="Location/Village">
							    </label>
							</section>
					    </div>
					   <div class="row">
							<section class="col col-3"></section>
				            <section class="col col-2" style="margin-left:-5px;">
					            <input type="submit" class="button" name='add' value="Add Contact">
					        </section>
							<section class="col col-2"></section>
							<section class="col col-2">
				            	<input type="submit" class="button" name='reset' value="Reset Values">
				            </section>
				       </div>
			    </fieldset>
    	
				<?
					if(isset($_POST['reset']))
					{
						unset($_SESSION['state']);
						unset($_SESSION['district']);
						unset($_SESSION['block']);
						unset($_SESSION['gram']);
						unset($_SESSION['location']);
						unset($_SESSION['arr']);
						echo("<script type='text/javascript'>document.location = 'mancon.php';</script>");
					}
					//-------------------------------------------add------------------------------------------//
					if(isset($_POST['fetch'])||isset($_POST['add']))
					{
						if(isset($_POST['add']))
						{
							if(!(empty($_POST['name'])))
							{
								$name = $_POST['name'];
								if(!(empty($_POST['dsg'])))
								{
									$des = $_POST['dsg'];
									if(!(empty($_POST['aff'])))
									{
										$afn = $_POST['aff'];
										if(!(empty($_POST['cno'])))
										{
											$con = $_POST['cno'];
											if(isset($_POST['sel_conType']))
											{
												$cType = $_POST['sel_conType'];
												if($_POST['addType']=="0")
												{
													if(!($_POST['sel_State']=="0"))
													{
														$stt = $_POST['sel_State'];
														if(!($_POST['sel_Dist']=="0"))
														{
															$dist = $_POST['sel_Dist'];
															if(!($_POST['sel_Block']=="0"))
															{
																$blk = $_POST['sel_Block'];
																if(!($_POST['sel_GP']=="0"))
																{
																	$gp = $_POST['sel_GP'];
																	if(!($_POST['sel_loc']=="0"))
																	{
																		$lc = $_POST['sel_loc'];
																		$query_num=$conn->query("SELECT `id` FROM `contactmaster` WHERE name='$name' and designation='$des' and affiliation='$afn' and contactno='$con' and state='$stt' and district='$dist' and block='$blk' and grampanchayat='$gp' and locname='$lc'");
																		if($query_num->num_rows==0)
																		{
																			$query_num=$conn->query("SELECT `id` FROM `contactmaster` WHERE id LIKE('con%') ORDER BY `id` DESC LIMIT 1");
																			$qnNum = $query_num->fetch_assoc();
																			$prevID = $qnNum['id'];
																			$num = intval(substr($prevID,3));
																			$num++;
																			$num = 'con'.sprintf("%03d", $num);
																			$conn->query("insert into `contactmaster` values('$num','$name','$des','$afn','$con','$cType','$stt','$dist','$blk','$gp','$lc')");
																			echo("<script type='text/javascript'>alert('Contact added successfully');</script>");
																		}
																		else
																			echo("<script type='text/javascript'>alert('Contact already exists');restoreVals();</script>");
																	}
																	else
																		echo("<script type='text/javascript'>alert('Please select a Location');restoreVals();</script>");
																}				
																else
																	echo("<script type='text/javascript'>alert('Please select a Gram Panchayat');restoreVals();</script>");
															}
															else
																echo("<script type='text/javascript'>alert('Please select a Block');restoreVals();</script>");
														}
														else
															echo("<script type='text/javascript'>alert('Please select a District');restoreVals();</script>");
													}
													else
														echo("<script type='text/javascript'>alert('Please select a State');restoreVals();</script>");
												}
												else
												{
													if(!(empty($_POST['text_state'])))
													{
														$stt = ucwords(strtolower(trim($_POST['text_state'])));
														if(!(empty($_POST['text_dist'])))
														{
															$dist = ucwords(strtolower(trim($_POST['text_dist'])));
															if(!(empty($_POST['text_blk'])))
															{
																$blk = ucwords(strtolower(trim($_POST['text_blk'])));
																if(!(empty($_POST['text_gp'])))
																{
																	$gp = ucwords(strtolower(trim($_POST['text_gp'])));
																	if(!(empty($_POST['text_loc'])))
																	{
																		$lc = ucwords(strtolower(trim($_POST['text_loc'])));
																		$query_num=$conn->query("SELECT `id` FROM `contactmaster` WHERE name='$name' and designation='$des' and affiliation='$afn' and contactno='$con' and state='$stt' and district='$dist' and block='$blk' and grampanchayat='$gp' and locname='$lc'");
																		if($query_num->num_rows==0)
																		{
																			$query_num=$conn->query("SELECT `id` FROM `contactmaster` WHERE id LIKE('con%') ORDER BY `id` DESC LIMIT 1");
																			$qnNum = $query_num->fetch_assoc();
																			$prevID = $qnNum['id'];
																			$num = intval(substr($prevID,3));
																			$num++;
																			$num = 'con'.sprintf("%03d", $num);
																			$conn->query("insert into `contactmaster` values('$num','$name','$des','$afn','$con','$cType','$stt','$dist','$blk','$gp','$lc')");
																			$query_num=$conn->query("SELECT `locationid` FROM `location` WHERE state='$stt' and district='$dist' and block='$blk' and grampanchayat='$gp' and locname='$lc'");
																			if($query_num->num_rows==0)
																				$conn->query("insert into `location`(`locname`,`state`,`district`,`block`,`grampanchayat`)values('$lc','$stt','$dist','$blk','$gp')");
																			echo("<script type='text/javascript'>alert('Contact added successfully');</script>");
																		}
																		else
																			echo("<script type='text/javascript'>alert('Contact already exists');restoreVals();</script>");
																	}
																	else
																		echo("<script type='text/javascript'>alert('Location can not be empty');restoreVals();</script>");
																}				
																else
																	echo("<script type='text/javascript'>alert('Gram Panchayat can not be empty');restoreVals();</script>");
															}
															else
																echo("<script type='text/javascript'>alert('Block can not be empty');restoreVals();</script>");
														}
														else
															echo("<script type='text/javascript'>alert('District can not be empty');restoreVals();</script>");
													}
													else
														echo("<script type='text/javascript'>alert('State can not be empty');restoreVals();</script>");
												}
												
											}
											else
												echo("<script type='text/javascript'>alert('Please select a category for the provided number');restoreVals();</script>");
										}
										else
											echo("<script type='text/javascript'>alert('Please enter a contact number');restoreVals();</script>");
									}
									else
										echo("<script type='text/javascript'>alert('Please enter a value for affiliation field');restoreVals();</script>");
								}
								else
									echo("<script type='text/javascript'>alert('Please enter a designation');restoreVals();</script>");
							}
							else
							{
								$tem = $_POST['addType'];
								echo("<script type='text/javascript'>alert('Please enter a name');restoreVals();</script>");
							}
						}
						else
						{
								//display
								if(!($_POST['sel_State']=="0"))
								{
									$stt = $_POST['sel_State'];
									$_SESSION['state'] = $stt;
									if(!($_POST['sel_Dist']=="0"))
									{
										$dist = $_POST['sel_Dist'];
										$_SESSION['district'] = $dist;
										if(!($_POST['sel_Block']=="0"))
										{
											$blk = $_POST['sel_Block'];
											$_SESSION['block'] = $blk;
											if(!($_POST['sel_GP']=="0"))
											{
												$gp = $_POST['sel_GP'];
												$_SESSION['gram'] = $gp;
												if(!($_POST['sel_loc']=="0"))
												{
													$lc = $_POST['sel_loc'];
													$_SESSION['location'] = $lc;
													$query_cons=$conn->query("SELECT * FROM `contactmaster` where `state`='$stt' and `district`='$dist' and `block`='$blk' and `grampanchayat`='$gp' and `locname`='$lc'");
												}
												else
													$query_cons=$conn->query("SELECT * FROM `contactmaster` where `state`='$stt' and `district`='$dist' and `block`='$blk' and `grampanchayat`='$gp'");
											}
											else
												$query_cons=$conn->query("SELECT * FROM `contactmaster` where `state`='$stt' and `district`='$dist' and `block`='$blk'");
										}
										else
											$query_cons=$conn->query("SELECT * FROM `contactmaster` where `state`='$stt' and `district`='$dist'");
									}
									else
										$query_cons=$conn->query("SELECT * FROM `contactmaster` where `state`='$stt'");
								}
							else
								$query_cons=$conn->query("SELECT * FROM `contactmaster`");
							echo("<br>");
							echo("<div class=\"row\">");
							echo("<section class=\"col col-8\">");
							echo("<b>Contact List</b>");
							echo("</section>");
							echo("</div>");
							print("<table class=\"table-style\">");
							print("<tr class=\"table-list\"><th>Person/Agency Name</th>");
							print("<th>Designation</th>");
							print("<th>Contact No.</th>");
							print("<th>Category</th>");
							print("<th>Address</th>");
							print("<th>Actions</th></tr>");
							if($query_cons->num_rows==0)
								print("<tr class=\"table-list\"><th colspan=6>No Results to Display</th></tr></table><br>");
							else
							{
								$ctr = 0;
								$_SESSION['arr'] = array();
								while($row1 = $query_cons->fetch_assoc())
								{
									$ID=$row1['id'];
									$name=$row1['name'];
									$des=$row1['designation'];
									$con=$row1['contactno'];
									$nmCat=$row1['numcategory'];
									$add=$row1['locname'].", ".$row1['grampanchayat'].", ".$row1['block'].", ".$row1['district'].", ".$row1['state'];
									array_push($_SESSION['arr'],$ID);
									print("<tr class=\"table-list\"><td width='15%'>".$name."</td>");
									print("<td>".$des."</td>");
									print("<td>".$con."</td>");
									print("<td>".$nmCat."</td>");
									print("<td>".$add."</td>");
									print("<td width='25%' style='padding: 10px 20px;vertical-align: top;'><input type='submit' class='button' style='height:25px;font: inherit;' name='submit[".$ctr."]' value='Edit'>");
									print("<input type='submit' class='button' style='float: right;height:25px;font: inherit;' name='submit[".$ctr."]' value='Delete'></td></tr>");
									$ctr = $ctr + 1;
								}
								print("</table><br>");
							}
						}
					}
					//----------------------------------edit or delete a contact----------------------------------------//
					if(isset($_POST['submit'])) 
					{
						//get the index of the edit/delete button that has been clicked
						$num = array_pop(array_keys($_POST['submit']));
						$ID = $_SESSION['arr'][$num];
						// Now the value, "Edit" or "Delete"
						$val = array_pop($_POST['submit']);
						if($val=="Edit")
						{
							$_SESSION['conEditID'] = $ID;
							echo("<script type='text/javascript'>document.location = 'edtcon_agency.php';</script>");
						}
						else
						{
							//delete
							$conn->query("delete from `contactmaster` where id='$ID'");
							//DISPLAY AGAIN
							if(isset($_SESSION['state']))
							{
								$stt = $_SESSION['state'];
								if(isset($_SESSION['district']))
								{
									$dist = $_SESSION['district'];
									if(isset($_SESSION['block']))
									{
										$blk = $_SESSION['block'];
										if(isset($_SESSION['gram']))
										{
											$gp = $_SESSION['gram'];
											if(isset($_SESSION['location']))
											{
												$lc = $_SESSION['location'];
												$query_cons=$conn->query("SELECT * FROM `contactmaster` where `state`='$stt' and `district`='$dist' and `block`='$blk' and `grampanchayat`='$gp' and `locname`='$lc'");
											}
											else
												$query_cons=$conn->query("SELECT * FROM `contactmaster` where `state`='$stt' and `district`='$dist' and `block`='$blk' and `grampanchayat`='$gp'");
										}
										else
											$query_cons=$conn->query("SELECT * FROM `contactmaster` where `state`='$stt' and `district`='$dist' and `block`='$blk'");
									}
									else
										$query_cons=$conn->query("SELECT * FROM `contactmaster` where `state`='$stt' and `district`='$dist'");
								}
								else
									$query_cons=$conn->query("SELECT * FROM `contactmaster` where `state`='$stt'");
							}
							else
								$query_cons=$conn->query("SELECT * FROM `contactmaster`");
							echo("<br>");
							echo("<div class=\"row\">");
							echo("<section class=\"col col-8\">");
							echo("<b>Contact List</b>");
							echo("</section>");
							echo("</div>");
							print("<table class=\"table-style\">");
							print("<tr class=\"table-list\"><th>Person/Agency Name</th>");
							print("<th>Designation</th>");
							print("<th>Contact No.</th>");
							print("<th>Category</th>");
							print("<th>Address</th>");
							print("<th>Actions</th></tr>");
							if($query_cons->num_rows==0)
								print("<tr class=\"table-list\"><th colspan=6>No Results to Display</th></tr></table><br>");
							else
							{
								$ctr = 0;
								$_SESSION['arr'] = array();
								while($row1 = $query_cons->fetch_assoc())
								{
									$ID=$row1['id'];
									$name=$row1['name'];
									$des=$row1['designation'];
									$con=$row1['contactno'];
									$nmCat=$row1['numcategory'];
									$add=$row1['locname'].", ".$row1['grampanchayat'].", ".$row1['block'].", ".$row1['district'].", ".$row1['state'];
									array_push($_SESSION['arr'],$ID);
									print("<tr class=\"table-list\"><td width='15%'>".$name."</td>");
									print("<td>".$des."</td>");
									print("<td>".$con."</td>");
									print("<td>".$nmCat."</td>");
									print("<td>".$add."</td>");
									print("<td width='25%' style='padding: 10px 20px;vertical-align: top;'><input type='submit' class='button' style='height:25px;font: inherit;' name='submit[".$ctr."]' value='Edit'>");
									print("<input type='submit' class='button' style='float: right;height:25px;font: inherit;' name='submit[".$ctr."]' value='Delete'></td></tr>");
									$ctr = $ctr + 1;
								}
								print("</table><br>");
							}
							echo("<script type='text/javascript'>alert('Contact deleted successfully');</script>");
						}
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
