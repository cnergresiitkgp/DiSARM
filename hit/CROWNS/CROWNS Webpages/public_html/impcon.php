
	<?php
		session_start();
		require 'connect.inc.php';
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
				<?php  if(isset($_SESSION['username'])){  ?>
				<li class="link"><a href="#"><i class="fa fa-unlock"></i><?php echo $_SESSION['firstname'];?></a>
				<?php } ?>
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
        <li> <a href="impcon.php" class="active"><i class="fa fa-star"></i> Important Contacts</a></li>
        <li> <a href="helpme.php" class="dropdown-toggle"><i class="fa fa-medkit"></i> Help Me</a></li>
        <li> <a href="emergency.php" class="dropdown-toggle"><i class="fa fa-flag"></i> Report An Emergency</a></li>
        <li> <a href="locate.php" class="dropdown-toggle"><i class="fa fa-map-marker"></i> Locate Missing Person</a></li>
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

<div class="page_title">
<div class="container">

    <div class="title"><h1>Important Contacts</h1></div>
    
</div>
</div><!-- end page title --> 
<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth lessmar">
    
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
						optionsAsString += "<option value='all'>All Locations</option>";
						$(dep1).find('option').remove().end().append($(optionsAsString));
					}
					if(!(dep2==''))
					{
						var optionsAsString = "";
						optionsAsString += "<option value='all'>All Grampanchayats</option>";
						$(dep2).find('option').remove().end().append($(optionsAsString));
					}
					if(!(dep3==''))
					{
						var optionsAsString = "";
						optionsAsString += "<option value='all'>All Blocks</option>";
						$(dep3).find('option').remove().end().append($(optionsAsString));
					}
					if(!(dep4==''))
					{
						var optionsAsString = "";
						optionsAsString += "<option value='all'>All Districts</option>";
						$(dep4).find('option').remove().end().append($(optionsAsString));
					}
					if(chng=='district')
					{
						$('#dist-list').removeAttr('disabled');
						$('#dist-list').css('opacity',1);
						$('#blk-list').prop('disabled','disabled');
						$('#blk-list').css('opacity',0.4);
						$('#gp-list').prop('disabled','disabled');
						$('#gp-list').css('opacity',0.4);
						$('#loc-list').prop('disabled','disabled');
						$('#loc-list').css('opacity',0.4);
					}
					else if(chng=='block')
					{
						$('#blk-list').removeAttr('disabled');
						$('#blk-list').css('opacity',1);
						$('#gp-list').prop('disabled','disabled');
						$('#gp-list').css('opacity',0.4);
						$('#loc-list').prop('disabled','disabled');
						$('#loc-list').css('opacity',0.4);
					}
					else if(chng=='grampanchayat')
					{
						$('#gp-list').removeAttr('disabled');
						$('#gp-list').css('opacity',1);
						$('#loc-list').prop('disabled','disabled');
						$('#loc-list').css('opacity',0.4);
					}
					else if(chng=='locname')
					{
						$('#loc-list').removeAttr('disabled');
						$('#loc-list').css('opacity',1);
					}
				}
				$(document).ready(function() {
					$('#dist-list').prop('disabled','disabled');
					$('#dist-list').css('opacity',0.4);
					$('#blk-list').prop('disabled','disabled');
					$('#blk-list').css('opacity',0.4);
					$('#gp-list').prop('disabled','disabled');
					$('#gp-list').css('opacity',0.4);
					$('#loc-list').prop('disabled','disabled');
					$('#loc-list').css('opacity',0.4);
				});
			</script>
        <form method="post" id="sky-form" class="sky-form">
				<header><strong>Find Important Contacts</strong></header>
				<fieldset>
                    	<div class="row">
		                    <section class="col col-4">
				                <label class="select">
									<select name="sel_State" id="state-list" onChange="getValue('#dist-list','district','#loc-list','#gp-list','#blk-list','#dist-list');">
				                        <option value="all" selected>All States</option>
				                        <?php
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
				                        <option value="all" selected>All Districts</option>
				                    </select>
									<i></i>
				                </label>
				            </section>
				            <section class="col col-4">
				                <label class="select">
									<select name="sel_Block" id="blk-list" onChange="getValue('#gp-list','grampanchayat','#loc-list','#gp-list','','');">
				                        <option value="all" selected>All Blocks</option>
				                    </select>
									<i></i>
				                </label>
				            </section>
				       </div>
				       <div class="row">
				            <section class="col col-6">
				                <label class="select">
									<select name="sel_GP" id="gp-list" onChange="getValue('#loc-list','locname');">
				                        <option value="all" selected>All Grampanchayats</option>
				                    </select>
									<i></i>
				                </label>
				            </section>
				            <section class="col col-6">
				                <label class="select">
									<select name="sel_loc" id="loc-list">
				                        <option value="all" selected>All Locations</option>
				                    </select>
									<i></i>
				                </label>
				            </section>
	                    </div>
			       <div class="row">
							<section class="col col-4"></section>
				            <section class="col col-1">
					            <input type="submit" class="button" name='fetch' value="Get Contacts">
					        </section>
							<section class="col col-1"></section>
							<section class="col col-2">
				            	<input type="submit" class="button" name='reset' value="Reset Values">
				            </section>
		           </div>
                </fieldset>
			</form>			
		</div>
		
		<?php
		
					if(isset($_POST['reset']))
						echo("<script type='text/javascript'>document.location = 'impcon.php';</script>");
					//display
					if(isset($_POST['fetch']))
					{
								if(!($_POST['sel_State']=="all"))
								{
									$stt = $_POST['sel_State'];
									if(!($_POST['sel_Dist']=="all"))
									{
										$dist = $_POST['sel_Dist'];
										if(!($_POST['sel_Block']=="all"))
										{
											$blk = $_POST['sel_Block'];
											if(!($_POST['sel_GP']=="all"))
											{
												$gp = $_POST['sel_GP'];
												if(!($_POST['sel_loc']=="all"))
												{
													$lc = $_POST['sel_loc'];
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
							if($query_cons->num_rows==0)
								print("<tr class=\"table-list\"><th colspan=6>No Results to Display</th></tr></table><br>");
							else
							{
								while($row1 = $query_cons->fetch_assoc())
								{
									$ID=$row1['id'];
									$name=$row1['name'];
									$des=$row1['designation'];
									$con=$row1['contactno'];
									$nmCat=$row1['numcategory'];
									$add=$row1['locname'].", ".$row1['grampanchayat'].", ".$row1['block'].", ".$row1['district'].", ".$row1['state'];
									print("<tr class=\"table-list\"><td width='15%'>".$name."</td>");
									print("<td>".$des."</td>");
									print("<td>".$con."</td>");
									print("<td>".$nmCat."</td>");
									print("<td>".$add."</td>");
								}
								print("</table><br>");
							}
						}
		
		?>
        
	

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
