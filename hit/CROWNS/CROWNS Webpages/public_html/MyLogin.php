<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>CROWNS - Crowdsourced Interactive Information System for Disaster Management</title>
<?php  session_start();
if(isset($_SESSION['username']))
	echo("<script>window.location.href = 'index.php';</script>");

?>	
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
        
        <li><a href="index.php" class="dropdown-toggle"><i class="fa fa-home"></i> Home</a></li>
        <li> <a href="impcon.php" class="dropdown-toggle"><i class="fa fa-star"></i> Important Contacts</a></li>
        <li> <a href="helpme.php" class="dropdown-toggle"><i class="fa fa-medkit"></i> Help Me</a></li>
        <li> <a href="emergency.php" class="dropdown-toggle"><i class="fa fa-flag"></i> Report an Emergency</a></li>
        <li> <a href="locate.php" class="dropdown-toggle"><i class="fa fa-map-marker"></i> Locate missing person</a></li>
        <li> <a href="MySess_Check.php" class="dropdown-toggle"><i class="fa fa-money"></i> Donate</a></li>
        </ul>
        
<!--        <div id="wrap">
          <form action="role_select.php" autocomplete="on">
          <input id="search" name="search" type="text" placeholder=""><input id="search_submit" value="search" type="submit">
          </form>
        </div>  -->
            
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

    <div class="title"><h1>Login</h1></div>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth lessmar">
    
		
      <div class="login_form">		
			<form id="sky-form" class="sky-form" action="" method="post">
				<header>Login form</header>
				
				<fieldset>					
					<section>
						<div class="row">
							<label class="label col col-4">E-mail</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-user"></i>
									<input type="email" name="email">
								</label>
							</div>
						</div>
					</section>
					
					<section>
						<div class="row">
							<label class="label col col-4">Password</label>
							<div class="col col-8">
								<label class="input">
									<i class="icon-append icon-lock"></i>
									<input type="password" name="password">
								</label>
								<div class="note"><a href="#sky-form2" class="modal-opener">Forgot password?</a></div>
							</div>
						</div>
					</section>
					
					<section>
						<div class="row">
							<div class="col col-4"></div>
							<div class="col col-8">
								<label class="checkbox"><input type="checkbox" name="remember" checked><i></i>Keep me logged in</label>
							</div>
						</div>
					</section>
				
                <div id="err1" name="err1" style="display:none;color:#F00" >**User does not exist in our database!!Redirecting to Register page.</div>
                <div id="err2" name="err2" style="display:none;color:#F00">** Username and Password do not match!!</div>
                </fieldset>
				<footer>
					<div class="fright">
                    <a href="MyRegister.php" class="button">Register</a>
                    <button type="submit" class="button" name ="login">Log in</button>
                    
                    </div>
					
				</footer>
                
			</form>
            		
		</div>
        
        <?php
		
$flag = 0;
require("connect.inc.php");$ema = array();


if($_SERVER["REQUEST_METHOD"] == "POST") {
	

$user = trim($_POST['email']);
$username = stripslashes($user);
$pass = trim($_POST['password']);
$password = stripslashes($pass);
$final_pass = md5($password);

$sel = $conn->query("SELECT DISTINCT email FROM register_master");
while($row = $sel->fetch_assoc()){
	$em = $row['email'];
	if($username == $em)
	{
		$flag = 0;
		break;
	}
	else
	$flag = 1;
        }
	if($flag ==1)
	{?>
    <script>
        document.getElementById('err1').style.display = 'block';
        document.getElementById('err2').style.display = 'none';
	
    </script>
		<?php
		
	}
	else
	{
		$sql = $conn->query("SELECT password FROM register_master WHERE email = '$username'");
		while($row1 = $sql->fetch_assoc()){
		$pass_final = $row1['password'];
		if($final_pass == $pass_final)
		{
			$_SESSION["username"] = $username;
			$_SESSION["password"] = $final_pass;
			//echo $_SESSION["username"]; die;
			?>
        <script>//alert('Log In Successful!!');
        window.location.href = 'role_select.php'; 
        </script>
        <?php
		
		}
		else
		{?>
         <script>
        document.getElementById('err2').style.display = 'block';
	document.getElementById('err1').style.display = 'none';
    </script>
        
        <?php
		}
		
	}	
   
	
}

   }

 ?>
		<form action="demo-recovery.php" id="sky-form2" class="sky-form sky-form-modal">
			<header>Password recovery</header>
			
			<fieldset>					
				<section>
					<label class="label">E-mail</label>
					<label class="input">
						<i class="icon-append icon-user"></i>
						<input type="email" name="email" id="email">
					</label>
				</section>
			</fieldset>
			
			<footer>
				<button type="submit" name="submit" class="button">Submit</button>
				<a href="#" class="button button-secondary modal-closer">Close</a>
			</footer>
				
			<div class="message">
				<i class="icon-ok"></i>
				<p>Your request successfully sent!<br><a href="#" class="modal-closer">Close window</a></p>
			</div>
		</form>

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
            <li><a href="index.php"><i class="fa fa-angle-right"></i> Home Page </a></li>
            <li><a href="impcon.php"><i class="fa fa-angle-right"></i> Important Contracts</a></li>
            <li><a href="helpme.php"><i class="fa fa-angle-right"></i> Help Me</a></li>
            <li><a href="emergency.php"><i class="fa fa-angle-right"></i> Report Emergency</a></li>
            <li><a href="locate.php"><i class="fa fa-angle-right"></i> Locate Victim </a></li>
            <li><a href="MySess_Check.php"><i class="fa fa-angle-right"></i> Donate</a></li>
        </ul>
        
    </div>
	</div><!-- end links -->
        
    <div class="one_fourth animate" data-anim-type="fadeInUp">
    <div class="siteinfo">
    
    	<h4 class="lmb">About CROWNS</h4>
        
        <p>CROWNS is a simple and secure multiplatform (web and app-based) Disaster Management System that provides decision support to disaster management authorities through active involvement of the "crowd" at the site of a disaster situation.  </p>
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
		// Validation for login form
		$("#sky-form").validate(
		{					
			// Rules for form validation
			rules:
			{
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
				}
			},
								
			// Messages for form validation
			messages:
			{
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				},
				password:
				{
					required: 'Please enter your password'
				}
			},					
			
			// Do not change code below
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
		
		// Validation for recovery form
		$("#sky-form2").validate(
		{					
			// Rules for form validation
			rules:
			{
				email:
				{
					required: true,
					email: true
				}
			},
								
			// Messages for form validation
			messages:
			{
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				}
			},
								
			// Ajax form submition					
			submitHandler: function(form)
			{
				$(form).ajaxSubmit(
				{
					success: function()
					{
						$("#sky-form2").addClass('submited');
					}
				});
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
