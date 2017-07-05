
	<?php
	include("connect.inc.php"); 
		session_start();
		
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>	
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
			console.log (blockId);
			$.get( 
				"ajax.php",
				{ 
					type: 'panchayat', 
					block_id: blockId 
				},
				function(response) {
					var html = '<option value="">Select Panchayat</option>';
					console.log (html);
					var data = JSON.parse(response);
					console.log (data);
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
	#dataTable h3{font-size: 14px; font-weight: bold;}
</style>

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
					<th width='50%'><b><a href="managn.php"><font color="#444444"><i class="fa fa-angle-right"></i> Manage Agencies</font></a></b></th>
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
 <script type = "text/javascript">
function validateForm(formObj)  
{  
	var counter = 0,
	msgTxt = '',
	pincode = /^\d{6}$/,
	name = /^[a-zA-Z]+[\-'\s]?[a-zA-Z ]+$/,  
	phoneno = /^\d{10}$/,
	email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	 
	if(!formObj.agency_name.value.match(name)) {  
		msgTxt += "\nNot a valid name";  
		counter++; 
	} 
	/*
	if(!formObj.lastname.value.match(name)) {  
		msgTxt += "\nNot a valid last name";  
		counter++; 
	} */
	
	if(!formObj.con_number.value.match(phoneno)) {  
		msgTxt += "\nNot a valid Phone Number";  
		counter++; 
	} 
	
	if(!formObj.pincode.value.match(pincode)) {  
		msgTxt += "\nNot a valid PIN Code Number";  
		counter++;
	}  
	
	if(!formObj.email.value.match(email)) {  
		msgTxt += "\nNot a valid email address";  
		counter++;
	}  
	
	var checkedValue = null; 
var inputElements = document.getElementsByClassName('messageCheckbox');
for(var i=0; inputElements[i]; ++i){
      if(!inputElements[i].checked){
		   msgTxt += "\nplesse select atlist 1 checkbox";  
		   counter++;
           //checkedValue = inputElements[i].value;
		  // return true;
           //break;
      }
	
}
	
	if(counter > 0){
		alert(msgTxt);
		return false;  
	}
	return true; 
}   



</script>	

<?php if (isset($_GET['flag'])) {
$flag = $_GET['flag'];
if($flag == true){
 echo "<script>alert('You have success entered agency details')</script>";
}
} ?>

     
      <div class="three_fourth last">
       <form id="sky-form" action="manage_agency_insert.php" name = "form1" id="sky-form" method="post" class="sky-form" onsubmit = "return validateForm(this);" style="<?php if($flag == true){echo '';} else '' ;?>">
	   <h3 style = " display: block; background-color:#000; color:#FFF; text-align:center; "><b><center>Add Agency</center></b></h3>
	   <div class="row">
	   <fieldset>
	   
				<section class="col col-6" style="float: left; margin-left: 35px;">
					<label class="input">
						<br>
						 Agency Name:
							<input type="text" name="agency_name" required>
					</label>
				</section>	
	
				<section class="col col-6" style="float: left; margin-left: 35px;">
					<label class="input"> 
						<br>	
						Contact Number:
							<input type="text" name="con_number"  required>
						</br>
					</label>
				</section>
				<section class="col col-6" style="float: left; margin-left: 35px;">
					<label class="input"> 
						<br>	
						PIN Code:
							<input type="text" name="pincode"  required>
						</br>
					</label>
				</section>
				<section class="col col-6" style="float: left; margin-left: 45px;">
					<label class="input"> 
						<br>	
						Email Id:
							<input type="text" name="email"  required>
						</br>
					</label>
				</section>
				<br>
				<section class="col col-6" style="float: left; margin-left: 35px;">
					<label class="input"> 
						<br>	
						Password:
							<input type="password" id="password" name="pass"  required>
						</br>
					</label>
				</section>
				<section class="col col-6" style="float: left; margin-left: 35px;">
					<label class="input"> 
						<br>	
						Confirm Password:
							<input type="password" name="cpass" id="confirm_password" required > <span id='message'></span>
						</br>
					</label>
				</section>
<!--		</fieldset>		-->

<script>
$('#confirm_password').on('keyup', function () {
    if ($(this).val() == $('#password').val()) {
        $('#message').html('matching').css('color', 'green');
    } else $('#message').html('not matching').css('color', 'red');
});
</script>


		</div>
		<br>
<?php
$query="SELECT * FROM state";
//$result=mysql_query($query);
$result=$conn->query($query);

?>
		<br>
		<div class = "row">
<!--		<fieldset> -->
				<section class="col col-6" style = "float: left; margin-left: 35px;">
								<label class="select" id = "sel1">
									<select name="state" onChange="getDistrict(this.value)" required>
										<option value="">Select State</option>
											<?php while ($row=$result->fetch_array()) { ?>
											<option value=<?php echo $row['id']?>><?php echo $row['state']?></option>
											<?php } ?>
									</select>
								<i></i>
								</label>
								
				 </section>			  
				 <section class="col col-6" style = "float: left; margin-left: 35px;">			 
							<label class="select" id = "sel2" >
								<select name="district" class="district" id="district" onChange="getBlock(this.value)" required>
									<option value="">Select District</option>
										<?php while ($row=$result->fetch_array()) { ?>
										<option value=<?php echo $row['id']?>><?php echo $row['district']?></option>
										<?php } ?>
								</select>
								<i></i>
							</label>
				 </section>			
				<section class="col col-6" style = "float: left; margin-left: 35px;">		
						    <label class="select" id = "sel3">
								<select name="block" class = "block" id = "block"  onChange="getPanchayat(this.value)" required>
									<option value="">Select Block</option>
										<?php while ($row=$result->fetch_array()) { ?>
										<option value=<?php echo $row['id']?>><?php echo $row['block']?></option>
										<?php } ?>
								</select>
								<i></i>
							</label>
				 </section>			
				 <section class="col col-6" style = "float: left; margin-left: 35px;">			
							<label class="select" id = "sel4">
								<select name="panchayat" class = "panchayat" id = "panchayat" onChange="getVillage(this.value)" required>
									<option value="">Select Panchayat </option>	
										<?php while ($row=$result->fetch_array()) { ?>
										<option value=<?php echo $row['id']?>><?php echo $row['panchayat']?></option>
										<?php } ?>
								</select>
								<i></i>
							</label>
				 </section>	
					 
				 <section class="col col-6" style = "float: left; margin-left: 35px;">			
						    <label class="select" id = "sel5">
								<select name="village" class = "village" id = "village" required>
									<option value="">Select Village</option>
										<?php while ($row=$result->fetch_array()) { ?>
										<option value=<?php echo $row['id']?>><?php echo $row['village']?></option>
										<?php } ?>
								</select>
							<i></i>
						    </label>
				 </section>
<script type = "text/javascript">	

/*function skill_select(val){
	console.log("%%%");
	var id_value = document.getElementById('rescue');
	console.log (id_value);
	if(val == id_value ){
		console.log (id_value);
	}
	else{
		
		console.log("$$$$");
		
	}
	
}*/

</script>	
	 
				 <section class="col col-6" style = "float: left; margin-left: 45px;">
									<label class="select" id = "sel16">
									<select name="skills" class = "skills" id = "skills" required>
										<option value="">Area of Expertise:</option>
										<option value="rescue" id = "rescue" >Rescue </option>
										<option value="food" id = "food" >Food</option>
										<option value="rescue" id = "rescue" >Relief</option>
										<option value="medicine" id = "medicine" >Medicine</option>
										<option value="selter" id ="selter" >Selter</option>
										<option value="education" id="education" >Education</option>
									</select>	
									</label>
									
				</section>
	   
	   </fieldset>
	   
	   </div>
<?php
$query1="SELECT * FROM block";

$result1=$conn->query($query1);
				
?>
<script>
function getPanchayatVal(blockId){
	
		if($.trim(blockId) !== ''){
			console.log (blockId);
			$.get( 
				"ajax.php",
				{ 
					type: 'panchayat', 
					block_id: blockId 
				},
				function(response) {
					var html = '<option value="">Select Panchayat</option>';
					console.log (html);
					var data = JSON.parse(response);
					console.log (data);
					$.each(data, function (i, obj) {
						html += '<option value="'+obj.id+'">'+obj.panchayat+'</option>';
						console.log (html);
					});
					$('#panchayat_new').html(html);
				}
		   );
		}
	}	
	
	function getVillageVal(panchayatId){
	
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
					$('#village_new').html(html);
				}
		   );
		}
	}

 /*function show_confirm()
 {
      var r=confirm("Do You Really want to reset your information! Press ok to Continue ");
      if (r==true)
        {
        window.location="manage_volunteers.php";
        return true;
        }
           else
        {
        alert("You pressed Cancel!");
        }
 }*/
 

 
</script>	
	   
	   <div>
	   <fieldset>
	   <br>
	   <h1 ><b>Location of Work:</b></h1>
				<section class="col col-6" style = "float: left; margin-left: 35px;">
							<label class="select" id = "sel133">
								<select name="block" class = "block" id = "block_new"  onChange="getPanchayatVal(this.value)" required>
									<option value="">Select Block</option>
									<?php while ($row1=$result1->fetch_array()) { ?>
										<option value=<?php echo $row1['id']?>><?php echo $row1['block']?></option>
									<?php } ?>
								</select>
								<i></i>
							</label>
				</section>			
				 <section class="col col-6" style = "float: left; margin-left: 65px;">
							<label class="select" id = "sel144" >
								<select name="panchayat" class = "panchayat" id = "panchayat_new" onChange="getVillageVal(this.value)" required>
									<option value="">Select Panchayat </option>	
									<?php 
									if($result->num_rows>0){
									while ($row=$result->fetch_array()) { ?>
										<option value=<?php echo $row['id']?>><?php echo $row['panchayat']?></option>
									<?php 
									}}?>
								</select>
								<i></i>
							</label>
							</section>
					 
				 <section class="col col-6" style = "float: left; margin-left: 65px;">      
							<label class="select" id = "sel155">
							<select name="village" class = "village" id = "village_new" required>
								<option value="">Select Village</option>
								<?php while ($row=$result->fetch_array()) { ?>
									<option value=<?php echo $row['id']?>><?php echo $row['village']?></option>
								<?php } ?>
							</select>
							<i></i>
							</label>
				</section>
				<section>
					  
					<input type="button" class="btn-primary" name = "but" id = "but" value="Add Work Location" onclick = "table_show();" style=" height: 39px; overflow: hidden; margin: 0px 0 0 0px; padding: 0 25px; outline: none;  border: 0; font: 300 15px/39px 'Open Sans', Helvetica, Arial, sans-serif; text-decoration: none; cursor: pointer; float: right; margin-right: 35px;">
				
<!--					<input type="button" class="btn-primary" name = "but_list" id = "but_list" onclick="location.href='addWorkPlaceAgency.php'" value="Add To List" style=" display:none; height: 39px; overflow: hidden; margin: 0px 0 0 0px; padding: 0 25px; outline: none;  border: 0; font: 300 15px/39px 'Open Sans', Helvetica, Arial, sans-serif; text-decoration: none; cursor: pointer; float: right; margin-right: 35px;">-->
				</section>
					
				
				<br><br>				
				
	   </fieldset>
	   </div>
	   <div>	
					<section>
					<h3 style="background-color:#000; color:#FFF; text-align:center; display:none;" id="tblHd"><strong>Work Locations</strong></h3>
						<table id = "dataTable" name = "dataTable" style="display:none" width="100%" >
						
						<thead>
							<tr>
								<th>
									<h3>Select</h3>
								</th>
								<th>
									<h3 id = "block_value">Block</h3>
								</th>
								<th>
									<h3>Panchayat</h3>
								</th>
								<th>
									<h3>Village</h3>
								</th>
								<th>
									<h3>Cancel</h3>
								</th>
							</tr>
						</thead>
						<tbody></tbody>
							
							
							
						</table>
					</section>
</div>

<script>

    var rowIndex = 0;					
	function table_show() {
		document.getElementById('dataTable').style.display = 'table';
		$("#tblHd").show();
		 var rows = "";
		//var Resource = document.getElementById("resource").value;
		//console.log (Resource);
		
		var Block = document.getElementById("block_new").value;
		console.log("this is block = ");
		console.log (Block);
		//getBlockName(Block);
		//
		
		var blockName = getBlockName(Block);
		console.log ("name of blocke");
		console.log(blockName);
		//console.log(eval(blockName));
		//var blockobject = new blockName;
		//var object = JSON.parse(blockName);
		//var name = object.block;
		//console.log ("name of blocke".blockobject);
		// = block_get_name;
		//console.log("prasun testing");
		//console.log(blockName);
		
		var Panchayat = document.getElementById("panchayat_new").value;
		console.log (Panchayat);
		var panchayatName = getPanchayatName(Panchayat);
		console.log ("name of Panchayat");
		console.log(panchayatName);
		//var Amount = document.getElementById("unit").value;
		var Village = document.getElementById("village_new").value;
		console.log(Village);
		var villageName = getVillageName(Village);
		console.log ("name of Village");
		console.log(villageName);
		var Select = "<center><input type='checkbox' class = 'messageCheckbox' value ='"+Village+"' name = 'work_locations[]' id='chk_"+rowIndex+"' /></center>";
		var Cancel = "<center><button type = 'button' id = 'remove' onclick='deleteRow("+rowIndex+")'><img src = 'images/elements/icon-remove.png'></center></button>";
		//var Cancel = "<center><button id='remove' type='button'><img src = 'images/elements/icon-remove.png'></center></button>";
		
		//var Select = document.createElement("Select");
		//Select.type = "checkbox";
		 //Select.checked = bx.checked;
		// var objInputCheckBox = document.createElement('');
		//objInputCheckBox.type = "checkbox";
		//cell1.appendChild(objInputCheckBox);

		rows += "<td>" + Select + "</td><td>" + blockName  + "</td><td>" + panchayatName + "</td><td>" + villageName + "</td><td>" + Cancel + "</td>";
		var tbody = document.querySelector("#dataTable tbody");
		var tr = document.createElement("tr");
		 tr.innerHTML = rows;
		 tbody.appendChild(tr)
		 
		// $("#but").hide();
		// $("#but_list").show();
	 rowIndex++;
} 



	

function deleteRow(rowId){
	var count = 0;
	console.log("%%%%%%%%%%");
	console.log(rowId);
	var keyId = '#chk_'+rowId;
	console.log(keyId);
	var objTable = document.getElementById('dataTable');
	console.log(objTable);
	var iRow = objTable.rows.length;
	console.log(iRow);
	if (iRow > 1) {
	//var chk = objTable.rows[keyId].cells[0];
	//var chk = document.getElementsByClassName("messageCheckbox");
	console.log("*******");
	
	//$('#dataTable').find('input[type="checkbox"]:checked')
	//console.log(chk);
	//console.log(chk[keyId]);
	//if(chk[keyId].checked){
	$('input:checked').each(function() {
		//console.log("i am in");
	$(keyId).closest("tr").remove();
	count++;
	});
	
	if(count==0){
	alert("Please Select A Checkbox");	
	}
	//}
	}
	
	//var objTable = document.getElementById('dataTable');
	//console.log (objTable);
	//var iRow = objTable.rows.length;
	//console.log("Hello");
	//console.log(iRow);
	/*** Initial row counter ***/
	//var counter = 0;
	//if (objTable.rows.length > 1) {
		//for (var i = 0; i < objTable.rows.length; i++) {

			 /*** Get checkbox object ***/
			//var chk = objTable.rows[i].cells[0].childNodes[0];
			//console.log("hi");
			//console.log(chk);
			//if (chk.checked) {
   //document.getElementById("dataTable").deleteRow(rowId);
   //iRow--;
				//console.log(iRow);
				//i--;
				//counter = counter + 1;
   }
   
  // }
   
  // }
//}


function deleteRowtest() {
 var objTable = document.getElementById('dataTable');
	console.log (objTable);
    /*** Get the current row length ***/
    var iRow = objTable.rows.length;
	console.log("Hello");
	console.log(iRow);
	/*** Initial row counter ***/
	var counter = 0;

    /*** Performing a loop inside the table ***/
	
	if (objTable.rows.length > 1) {
		for (var i = 0; i < objTable.rows.length; i++) {

			 /*** Get checkbox object ***/
			var chk = objTable.rows[i].cells[0].childNodes[0];
			//console.log("hi");
			console.log(chk);
			if (chk.checked) {
				/*** if checked we del ***/
				console.log("$$$$$$$$$$$$$$$$$$$$");
				objTable.deleteRow(i);
				
				iRow--;
				console.log(iRow);
				i--;
				counter = counter + 1;
			}
		}

		/*** Alert user if there is now row is selected to be deleted ***/
	/*	if (counter == 0) {
			alert("Please select the row that you want to delete.You will be redirected!!!");
			
		}*/
	}
	}
	


 var block_get_name;
 var panchayat_get_name;
 var village_get_name;
 var value_temp;
 var value_temp_panchayat;
 var value_temp_village;
 
function getBlockName(blockId){
	
	if($.trim(blockId) !== ''){
		var block_get_name = '';
		$.ajax({
			type: "GET",
			url: "ajax_work.php",
			async: false,
			data: { 
				type: 'block', 
				block_id: blockId 
			},
			success: function(response) {
				//var html = '<option value="">Select block</option>';
				var data = JSON.parse(response);
				console.log("new ajax response");
				//console.log(data);
				var json = JSON.parse(response);
				//console.log(json["block"]);
				//console.log(json.block);
				$.each(data, function (i, obj) {
					//html += '<option value="'+obj.id+'">'+obj.block+'</option>';
					  block_get_name = obj.block;
					//var block_get_name = val;
					//console.log ("testing testing");
					console.log (block_get_name);
					//value_temp = block_get_name;
					//return block_get_name;
				});
				//$('#block_value').html(block_get_name);	
			}
		});
		return block_get_name;
		
		}
		//console.log("hello bebe");
		value_temp = block_get_name;
		//return block_get_name;	
		console.log("hello bebe");
		console.log (value_temp);
}

function getPanchayatName(panchayatId){
	
	if($.trim(panchayatId) !== ''){
		var panchayat_get_name = '';
		$.ajax({
			type: "GET",
			url: "ajax_work.php",
			async: false,
			data: { 
				type: 'panchayat', 
				panchayat_id: panchayatId 
			},
			success: function(response) {
				//var html = '<option value="">Select block</option>';
				var data = JSON.parse(response);
				console.log("new ajax response for panchayat");
				//console.log(data);
				var json = JSON.parse(response);
				//console.log(json["block"]);
				//console.log(json.block);
				$.each(data, function (i, obj) {
					//html += '<option value="'+obj.id+'">'+obj.block+'</option>';
					  panchayat_get_name = obj.panchayat;
					//var block_get_name = val;
					//console.log ("testing testing");
					console.log (panchayat_get_name);
					//value_temp = block_get_name;
					//return block_get_name;
				});
				//$('#block_value').html(block_get_name);	
			}
		});
		return panchayat_get_name;
		}
		//console.log("hello bebe");
		value_temp_panchayat = panchayat_get_name;
		//return block_get_name;	
		console.log("hello bebe;;;;;;;");
		console.log (value_temp_panchayat);
	
}

function getVillageName(villageId){
	
	if($.trim(villageId) !== ''){
		var village_get_name = '';
		$.ajax({
			type: "GET",
			url: "ajax_work.php",
			async: false,
			data: { 
				type: 'village', 
				village_id: villageId 
			},
			success: function(response) {
				//var html = '<option value="">Select block</option>';
				var data = JSON.parse(response);
				console.log("new ajax response");
				//console.log(data);
				var json = JSON.parse(response);
				//console.log(json["block"]);
				//console.log(json.block);
				$.each(data, function (i, obj) {
					//html += '<option value="'+obj.id+'">'+obj.block+'</option>';
					 village_get_name = obj.village;
					//var block_get_name = val;
					//console.log ("testing testing");
					console.log (village_get_name);
					//value_temp = block_get_name;
					//return block_get_name;
				});
				//$('#block_value').html(block_get_name);	
			}
		});
		return village_get_name;
		
		}
		//console.log("hello bebe");
		value_temp_village = village_get_name;
		//return block_get_name;	
		console.log("hello bebe..............");
		console.log (value_temp_village);
}


function checkselect(){

var checkedValue = null; 
var inputElements = document.getElementsByClassName('messageCheckbox');
for(var i=0; inputElements[i]; ++i){
      if(inputElements[i].checked){
           checkedValue = inputElements[i].value;
		   return true;
           break;
      }
	  else{
	  alert("plesse select atlist 1 checkbox");
	  return false;
	  }

}
}


</script> 
<section class="col col-6 col-xs-6" style = "margin: center">
						<input type="submit" class="button" name = "sub" id = "sub"  value="Assign Agency">
				<!--</section>	
				<section class="col col-6 col-xs-6" style = "margin: center">-->		
						<input type="reset" class="button" name = "reset" id = "reset" value="Reset">
						<!--<input type="submit" value="Submit">-->
						

				</section>
	   </form>
	   
	   <br><br>
<!--    <div class="clearfix"></div>-->
<style type = "text/css">

.scrollit {
    overflow:scroll;
    height:300px;
	width: 900px;
}

</style>

<br/><br/>


<div class="scrollit">
<h3 style="background-color:#000; color:#FFF; text-align:center; id=tblHd"><strong>List of Agencies</strong></h3>
	<table id = "dataTable" width="100%" align="center" >
	
		<tr>
			<th>
				<h3>Agency Id</h3>
			</th>
			<th>
				<h3>Name</h3>
			</th>
			<th>
				<h3>Address</h3>
			</th>
			<th>
				<h3>Contact Number</h3>
			</th>
			
			<th>
				<h3>Expertise</h3>
			</th>
			<th>
				<h3>Location of work</h3>
			</th>
			<th>
				<h3>Action</h3>
			</th>
		</tr>	
<?php

$data = "SELECT * FROM `agency_master` WHERE `is_deleted` = 'n'";
//echo $data;
//$get_data = mysql_query($data);
$get_data = $conn->query($data);
//$result= mysql_fetch_assoc($get_data);


//while($result_contact = mysql_fetch_assoc($get_data)){
while($result_contact =$get_data->fetch_assoc()){	

	
	$track_state = $result_contact["state"];
	$sql_state = "SELECT `state` FROM `state` WHERE `id`= $track_state";
	$output_state =$conn->query($sql_state);
	$result_state= $output_state->fetch_assoc();  
	
	$track_district = $result_contact["district"];
	$sql_district = "SELECT `district` FROM `district` WHERE `id`= $track_district";
	$output_district = $conn->query($sql_district);
	$result_district= $output_district->fetch_assoc();

	
	$track_block = $result_contact["block"];
	$sql_block = "SELECT `block` FROM `block` WHERE `id`= $track_block";
	$output_block = $conn->query($sql_block);
	$result_block = $output_block->fetch_assoc();

	$track_panchayat = $result_contact["panchayat"];
	$sql_panchayat = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id`= $track_panchayat";
	$output_panchayat = $conn->query($sql_panchayat);
	$result_panchayat = $output_panchayat->fetch_assoc();
	
	$track_village = $result_contact["village"];
	$sql_village = "SELECT `village` FROM `village` WHERE `id`= $track_village";
	$output_village = $conn->query($sql_village);
	$result_village = $output_village->fetch_assoc();
	
	$address = $result_state['state']." ". $result_district['district']." ".$result_block['block']." ".$result_panchayat['panchayat']." ".$result_village['village'];
	
	//echo '<pre>',print_r($result_contact),'</pre>';
?>
	
	<script>
		//document.getElementById('tl').style.display = 'dataTable';
        
	</script>
		<tr>
			<td align= "CENTER"><?php  echo $result_contact["agency_id"];  ?></td>
			<td align= "CENTER"><?php  echo $result_contact["name"];  ?></td>
			<td align= "CENTER"><?php  echo $address?></td>
			<td align= "CENTER"><?php  echo $result_contact["contact_no"];?></td>
			<td align= "CENTER"><?php  echo $result_contact["expertise"];?></td>
			<td align= "CENTER"><?php  echo $result_contact["work_palces"];?></td>
			<td align= "CENTER"> 
				
				<a href="edit_agency.php?id=<?php echo $result_contact["agency_id"];?>">Edit</a>&nbsp;&nbsp;
				<a href="delete_agency.php?id=<?php echo $result_contact["agency_id"];?>">Release</a>
			</td>
		</tr>
	<?php
	
	}

	?>		
	</table>
       
    </div>     

    
 
</div><!-- end content area -->



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
