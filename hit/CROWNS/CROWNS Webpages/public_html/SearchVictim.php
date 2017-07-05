<?php
include("connect.inc.php");	
//mysql_select_db('a5363301_crowns');
$query="SELECT * FROM state";
//$result=mysql_query($query);
$result= $conn->query($query);
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
    <?php session_start();?>
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
  
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script language="javascript" type="text/javascript">
	
 function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	/* function getDistrict(stateId) {		
		
		var strURL="findDistrict.php?state="+stateId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('district').innerHTML=req.responseText;
						document.getElementById('block').innerHTML='<select name="block">'+
						'<option>Select block</option>'+
				        '</select>';						
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	} */
	function getDistrict(stateId){
	console.log (stateId);
		if($.trim(stateId) !== ''){
			$.get( 
				"ajax.php",
				{ 
					type: 'district', 
					state_id: stateId 
				},
				function(response) {
					var html = '<option value="">Select District</option>';
					var data = JSON.parse(response);
					$.each(data, function (i, obj) {
						html += '<option value="'+obj.id+'">'+obj.district+'</option>';
					});
					$('#district').html(html);
				}
		   );
		}
	}

	function getBlock(districtId){
	
		if($.trim(districtId) !== ''){
			$.get( 
				"ajax.php",
				{ 
					type: 'block', 
					district_id: districtId 
				},
				function(response) {
					var html = '<option value="">Select Block</option>';
					var data = JSON.parse(response);
					$.each(data, function (i, obj) {
						html += '<option value="'+obj.id+'">'+obj.block+'</option>';
					});
					$('#block').html(html);
				}
		   );
		}
	}	
	
	function getPanchayat(blockId){
	
		if($.trim(blockId) !== ''){
			$.get( 
				"ajax.php",
				{ 
					type: 'panchayat', 
					block_id: blockId 
				},
				function(response) {
					var html = '<option value="">Select Panchayat</option>';
					var data = JSON.parse(response);
					$.each(data, function (i, obj) {
						html += '<option value="'+obj.id+'">'+obj.panchayat+'</option>';
					});
					$('#panchayat').html(html);
				}
		   );
		}
	}	
	
	function getVillage(panchayatId){
	
		if($.trim(panchayatId) !== ''){
			$.get( 
				"ajax.php",
				{ 
					type: 'village', 
					panchayat_id: panchayatId 
				},
				function(response) {
					var html = '<option value="">Select Village</option>';
					var data = JSON.parse(response);
					$.each(data, function (i, obj) {
						html += '<option value="'+obj.id+'">'+obj.village+'</option>';
					});
					$('#village').html(html);
				}
		   );
		}
	}
</script>
 <style>
	#dataTable { border: 1px solid black; margin-top: 10px;}
	#dataTable tr, #dataTable th, #dataTable td { border: 1px solid black; border-collapse: collapse;}
	#dataTable h3{font-size: 20px; font-weight: bold;}
</style>
 
</head>

<body>


<div class="site_wrapper">



<div class="clearfix"></div>

<header id="header">
<script>

// Script Source: CodeLifter.com
// Copyright 2003
// Do not remove this notice.

// SETUPS:
// ===============================

// Set the horizontal and vertical position for the popup

PositionX = 100;
PositionY = 100;

// Set these value approximately 20 pixels greater than the
// size of the largest image to be used (needed for Netscape)

defaultWidth  = 500;
defaultHeight = 500;

// Set autoclose true to have the window close automatically
// Set autoclose false to allow multiple popup windows

var AutoClose = true;

// Do not edit below this line...
// ================================
if (parseInt(navigator.appVersion.charAt(0))>=4){
var isNN=(navigator.appName=="Netscape")?1:0;
var isIE=(navigator.appName.indexOf("Microsoft")!=-1)?1:0;}
var optNN='scrollbars=no,width='+defaultWidth+',height='+defaultHeight+',left='+PositionX+',top='+PositionY;
var optIE='scrollbars=no,width=150,height=100,left='+PositionX+',top='+PositionY;
function popImage(imageURL,imageTitle){
if (isNN){imgWin=window.open('about:blank','',optNN);}
if (isIE){imgWin=window.open('about:blank','',optIE);}
with (imgWin.document){
writeln('<html><head><title>Loading...</title><style>body{margin:0px;}</style>');writeln('<sc'+'ript>');
writeln('var isNN,isIE;');writeln('if (parseInt(navigator.appVersion.charAt(0))>=4){');
writeln('isNN=(navigator.appName=="Netscape")?1:0;');writeln('isIE=(navigator.appName.indexOf("Microsoft")!=-1)?1:0;}');
writeln('function reSizeToImage(){');writeln('if (isIE){');writeln('window.resizeTo(300,300);');
writeln('width=300-(document.body.clientWidth-document.images[0].width);');
writeln('height=300-(document.body.clientHeight-document.images[0].height);');
writeln('window.resizeTo(width,height);}');writeln('if (isNN){');       
writeln('window.innerWidth=document.images["George"].width;');writeln('window.innerHeight=document.images["George"].height;}}');
writeln('function doTitle(){document.title="'+imageTitle+'";}');writeln('</sc'+'ript>');
if (!AutoClose) writeln('</head><body bgcolor=000000 scroll="no" onload="reSizeToImage();doTitle();self.focus()">')
else writeln('</head><body bgcolor=000000 scroll="no" onload="reSizeToImage();doTitle();self.focus()" onblur="self.close()">');
writeln('<img name="George" src='+imageURL+' style="display:block"></body></html>');
close();		
}}

</script>

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
        <li> <a href="locate.php" class="active"><i class="fa fa-map-marker"></i> Locate Victim</a></li>
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

    <div class="title"><h1>Locate Victim</h1></div>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>


<div class="container">

    <div class="content_fullwidth">
    
      <div class="one_third">
      
        <div class="cforms">
		
 <script>
function fiend_missing_person(){
	
	window.location.href = 'locate.php';
	
}

function missing_persons_entry(){
	

	window.location.href = 'locate_missing_entry.php';
}

</script> 
            </div><!-- end section -->
      </div> 
      
            
        	<form class = "sky-form" id = "f1" action="" method="post">
            <header> <strong><center>Missing Person's Information</center></strong></header>


<header> 
					<label style="cursor: pointer;">
						<input type="radio" onClick="fiend_missing_person()" name="gender" id = "resource" value="resour" class="sky-form" />
						<strong>&nbsp;&nbsp;Find missing person</strong>
					</label>
					<label style="margin-left: 27%; cursor: pointer;">
						<input type="radio" onClick="missing_persons_entry()" name="gender" id = "resource2" value="service" class="sky-form" />
						<strong>&nbsp;&nbsp;Enter missing person's details</strong>
					</label>
				</header>


	</div>		
			
<!--             <section>
             
            <button class="button" id = "submitall" name = "submitall">Submit</button>
            
            </section>-->
			
			</form> 
      
      </div>
      <script>var imgtag;
      document.getElementById('fileToUpload').onclick = function()
	  {
		  var fileToUpload =  document.getElementById('fileToUpload').value;
		 
	  }
      </script>
  
<?php
if(isset($_POST["submitall"])) { 
	require("connect.inc.php");?>
	 
		  <div class="two_third last">
          <form class = "sky-form">
        
       
          <header> <strong><center>List of Missing Persons</center></strong></header>
          </form>
		  
          <table width = 100% id = "dataTable" name = "dataTable">
				<tr>
					<th>
						<h3>Firstname</h3>
					</th>
					<th>
						<h3>Lastname</h3>
					</th>
					<th>
						<h3>Contact No.</h3>
					</th>
					<th>
						<h3>Country</h3>
					</th>
					<th>
						<h3>State</h3>
					</th>
					<th>
						<h3>City</h3>
					</th>
					<th>
						<h3>Block</h3>
					</th>
					<th>
						<h3>Municipality</h3>
					</th>
					<th>
						<h3>Photo</h3>
					</th>
				</tr>
		  <?php
	$result_sub = mysql_query("SELECT * FROM missing_master");
  //while ($row=mysql_fetch_array($result_sub,MYSQL_NUM)) { 
   while ($row=$result_sub->fetch_assoc()) { ?>
				
		
        
      
        
      	<tr><td><h6 style="color:#000080"><?php echo $row[1]; ?></h6></td><td><h6 style="color:#000080"><?php echo $row[2]; ?></h6></td><td><h6 style="color:#000080"><?php echo $row[3]; ?></h6></td><td><h6 style="color:#000080"><?php echo $row[4]; ?></h6></td><td><h6 style="color:#000080"><?php echo $row[5]; ?></h6></td><td><h6 style="color:#000080"><?php echo $row[6]; ?></h6></td><td><h6 style="color:#000080"><?php echo $row[7]; ?></h6></td><td><h6 style="color:#000080"><?php echo $row[8]; ?></h6></td>
        <td><h6 style="color:#000080"><?php if(empty($row[9])) echo "No Picture Given"; else{
		
		 echo "<button class='btn-link' id = 'click'>Click To View Picture</button>" ;?> <script>imgtag = "<?php echo $row[9]; ?>";</script><?php }?></h6></td></tr>
         <script>
        document.getElementById('click').onclick = function(){
		popImage(imgtag,'Image');
		}
        </script>
           <!-- end content area -->
           <?php
			
		} ?>
   </table>      </div></div><!-- end section -->
        
      </div>
        
     
        <?php
}

if(isset($_POST["submit"])) {


require("connect.inc.php");

// Check if image file is a actual image or fake image

	
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	
	$phone1 = $_POST["phone1"];
	$lastseenat = $_POST["address"];
	$phone2 = $_POST["phone2"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];
	$country = $_POST["country"];
	$state = $_POST["state"];
	$city = $_POST["city"];
	$block = $_POST["block"];
	$municipality = $_POST["municipality"];
	
// Check if image file is a actual image or fake image

    


	if((empty($age))&&(empty($country))&&(empty($state))&&(empty($city))&&(empty($block))&&(empty($municipality)))
	{
		
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname'");
	}
	elseif((!empty($age))&&(empty($country))&&(empty($state))&&(empty($city))&&(empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND age = '$age'");
	}
	elseif((empty($age))&&(!empty($country))&&(empty($state))&&(empty($city))&&(empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country'");
	}
	elseif((empty($age))&&(!empty($country))&&(!empty($state))&&(empty($city))&&(empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND state = '$state'");
	}
	elseif((empty($age))&&(!empty($country))&&(!empty($state))&&(!empty($city))&&(empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND state = '$state' AND city = '$city'");
	}
	elseif((empty($age))&&(!empty($country))&&(!empty($state))&&(!empty($city))&&(!empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND state = '$state' AND city = '$city' AND block = '$block'");
	}
	elseif((empty($age))&&(!empty($country))&&(!empty($state))&&(!empty($city))&&(!empty($block))&&(!empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND state = '$state' AND city = '$city' AND block = '$block' AND municipality = '$municipality'");
	}
	elseif((empty($age))&&(empty($country))&&(empty($state))&&(empty($city))&&(!empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND block = '$block'");
	}
	elseif((empty($age))&&(empty($country))&&(empty($state))&&(empty($city))&&(empty($block))&&(!empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND municipality = '$municipality'");
	}
	elseif((empty($age))&&(empty($country))&&(empty($state))&&(empty($city))&&(!empty($block))&&(!empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND block = '$block' AND municipality = '$municipality'");
	}
	elseif((empty($age))&&(!empty($country))&&(empty($state))&&(empty($city))&&(!empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND block = '$block'");
	}
	elseif((empty($age))&&(!empty($country))&&(!empty($state))&&(empty($city))&&(!empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND state = '$state' AND block = '$block'");
	}
	elseif((empty($age))&&(!empty($country))&&(empty($state))&&(empty($city))&&(empty($block))&&(!empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND municipality = '$municipality'");
	}
	elseif((empty($age))&&(!empty($country))&&(!empty($state))&&(empty($city))&&(empty($block))&&(!empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND state = '$state' AND municipality = '$municipality'");
	}
	elseif((empty($age))&&(!empty($country))&&(!empty($state))&&(!empty($city))&&(empty($block))&&(!empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND state = '$state' AND city = '$city' AND municipality = '$municipality'");
	}
	elseif((!empty($age))&&(!empty($country))&&(empty($state))&&(empty($city))&&(empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND age= '$age' AND country = '$country'");
	}
	elseif((!empty($age))&&(!empty($country))&&(!empty($state))&&(empty($city))&&(empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND age = '$age' AND state = '$state'");
	}
	elseif((!empty($age))&&(!empty($country))&&(!empty($state))&&(!empty($city))&&(empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND state = '$state' AND city = '$city' AND age = '$age'");
	}
	elseif((!empty($age))&&(!empty($country))&&(!empty($state))&&(!empty($city))&&(!empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND state = '$state' AND city = '$city' AND block = '$block' AND age = '$age'");
	}
	elseif((!empty($age))&&(!empty($country))&&(!empty($state))&&(!empty($city))&&(!empty($block))&&(!empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND state = '$state' AND city = '$city' AND block = '$block' AND municipality = '$municipality' AND age = '$age'");
	}
	elseif((!empty($age))&&(empty($country))&&(empty($state))&&(empty($city))&&(!empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND block = '$block' AND age = '$age'");
	}
	elseif((!empty($age))&&(empty($country))&&(empty($state))&&(empty($city))&&(empty($block))&&(!empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND municipality = '$municipality' AND age = '$age'");
	}
	elseif((!empty($age))&&(empty($country))&&(empty($state))&&(empty($city))&&(!empty($block))&&(!empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND block = '$block' AND municipality = '$municipality' AND age = '$age'");
	}
	elseif((!empty($age))&&(!empty($country))&&(empty($state))&&(empty($city))&&(!empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND block = '$block' AND age = '$age'");
	}
	elseif((!empty($age))&&(!empty($country))&&(!empty($state))&&(empty($city))&&(!empty($block))&&(empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND state = '$state' AND block = '$block' AND age = '$age'");
	}
	elseif((!empty($age))&&(!empty($country))&&(empty($state))&&(empty($city))&&(empty($block))&&(!empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND municipality = '$municipality' AND age = '$age'");
	}
	elseif((!empty($age))&&(!empty($country))&&(!empty($state))&&(empty($city))&&(empty($block))&&(!empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND state = '$state' AND municipality = '$municipality' AND age = '$age'");
	}
	elseif((!empty($age))&&(!empty($country))&&(!empty($state))&&(!empty($city))&&(empty($block))&&(!empty($municipality))){
		$get_result = mysql_query("SELECT * FROM missing_master WHERE firstname = '$firstname' AND lastname = '$lastname' AND country = '$country' AND state = '$state' AND city = '$city' AND municipality = '$municipality' AND age = '$age'");
	}
	$num_rows = mysql_num_rows($get_result);
	if($num_rows == 0)
	{
		echo "<script>alert('No results found!!We will get in touch with you if we find something!!You can try with less details!!')</script>";
		$sql_search = "INSERT INTO admin_missing_master VALUES('','$firstname','$lastname','$lastseenat','$phone1','$phone2','','$gender','$age')"
		$set_result = $conn->query($sql_search);
	}
	else
	{
		//while($row = mysql_fetch_array($get_result,MYSQL_NUM)){
		while($row = $get_result->fetch_assoc()){	
				
		?>
        <div class="two_third last">
      
        
      
        
        <form class = "sky-form">
        
       
          <h3 style="background-color:#000; color:#FFF; text-align:center; display:none;" id="tblHd"><strong>Result OF Your Request</strong></h3>
          </form>
         <table width = 100% id = "dataTable" name = "dataTable">
			<tr>
				<th>
					<h3>Firstname</h3>
				</th>
				<th>
					<h3>Lastname</h3>
				</th>
				<th>
					<h3>Contact No.</h3>
				</th>
				<th>
					<h3>Country</h3>
				</th>
				<th>
					<h3>State</h3>
				</th>
				<th>
					<h3>City</h3>
				</th>
				<th>
					<h3>Block</h3>
				</th>
				<th>
					<h3>Municipality</h3>
				</th>
				<th>
					<h3>Photo<h3>
				</th>
			</tr>
        
        
			<tr><td><?php echo $row[1]; ?></td><td><?php echo $row[2]; ?></td><td><?php echo $row[3]; ?></td><td><?php echo $row[4]; ?></td><td><?php echo $row[5]; ?></td><td><?php echo $row[6]; ?></td><td><?php echo $row[7]; ?></td><td><?php echo $row[8]; ?></td><td><?php echo $row[9]; ?></td></tr>
            </table></div></div><!-- end section -->
        
      </div>
        
    </div>
    
  </div>  <!-- end content area -->
            <?php
			
		}
	}


// Check if image file is a actual image or fake image
/* $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

*/
		

} 

?>

<div class="clearfix margin_top3"></div>

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
            <li><a href="#"><i class="fa fa-angle-right"></i> Home Page </a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Important Contracts</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Help Me</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Report Emergency</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Locate Victim </a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Donate</a></li>
            
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
				firstname:
				{
					required: true,
					
				},
				lastname:
				{
					required: true,
					
				},
				phone1:
				{
					required: true
				},
				sex:
				{
					required: true
				}
			},
								
			// Messages for form validation
			messages:
			{
				firstname:
				{
					required: 'Please enter FirstName',
					
				},
				lastname:
				{
					required: 'Please enter Lastname'
				},
				phone1:
				{
					
					required: 'Please enter Your Phone No.'
				},
				sex:
				{
					required: 'Mention Sex'
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
