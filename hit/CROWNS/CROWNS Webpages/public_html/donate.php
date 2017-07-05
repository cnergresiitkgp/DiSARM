

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <title>CROWNS - Crowdsourced Interactive Information System for Disaster Management</title>
	<?php
include("connect.inc.php");	
//mysql_select_db('a5363301_crowns');
$query="SELECT * FROM state";
$result= $conn->query($query);
?>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <?php 
	session_start();
	$email = $_SESSION['username'];
	$login_data = "SELECT * FROM `register_master` WHERE `email` = '$email'" ;
	$donor_data = $conn->query($login_data);
	while($donor_result = $donor_data->fetch_assoc()){	
	$doner_fname = $donor_result["firstname"];
	$donor_lname = $donor_result["lastname"];
	$donor_pincode = $donor_result["landmark"];
	$donor_phone = $donor_result["phone"];
	$role_select = $donor_result["role"];;
	//echo $doner_name;
	}
	?>
	
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
							<li class="link"><a href="#"><i class="fa fa-unlock"></i><?php echo $_SESSION['firstname'];?></a>
                    </li>
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
									<li> <a href="locate.php" class="dropdown-toggle"><i class="fa fa-map-marker"></i>Locate Missing Person</a></li>
									<li> <a href="MySess_Check.php" class="active"><i class="fa fa-money"></i> Donate</a></li>
							</div>
						</div>
					</div>
				</div>
				<!-- end menu -->
			</div>	
		</div>
    </div>
    
</header>

	<div class="clearfix"></div>

	<div class="page_title">
		<div class="container">
			<div class="title"><h1>Donate</h1></div>
		</div>
	</div>
<!-- end page title --> 

<div class="clearfix"></div>

<div class="container">

    <div class="content_fullwidth">
		<?php if (isset($_GET['flag'])) {
$flag = $_GET['flag'];
if($flag == true){
 echo "<center><b>Your request has been successfully submitted!!!!!!</b></center>";
}
} ?>

<script type = "text/javascript">
function validateForm(formObj)  
{  
	var counter = 0,
	msgTxt = '',
	pincode = /^\d{6}$/,
	name = /^[A-Za-z]+$/, 
	phoneno = /^\d{10}$/,
	email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if(!formObj.firstname.value.match(name)) {  
		msgTxt += "\nNot a valid first name";  
		counter++; 
	} 
	
	if(!formObj.lastname.value.match(name)) {  
		msgTxt += "\nNot a valid last name";  
		counter++; 
	} 
	
	if(!formObj.con_number.value.match(phoneno)) {  
		msgTxt += "\nNot a valid Phone Number";  
		counter++; 
	} 
	
	if(!formObj.address.value.match(pincode)) {  
		msgTxt += "\nNot a valid PIN Code Number";  
		counter++;
	}  
	/*
	if(!formObj.email.value.match(email)) {  
		msgTxt += "\nNot a valid email address";  
		counter++;
	}*/  
	
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

		<form action="donate_insert.php" id="sky-form" name = "form1" method="post" class="sky-form" onsubmit = "return validateForm(this);" style="<?php if($flag == true){echo 'display: none;';} else '' ;?>">
			<div class="one_third">
				<header><b>Enter Your Details</b></header>
				<fieldset>
					<div class="row">
						<section class="col col-6">
							<label class="input">
								<input type="text" name="firstname" placeholder="First name" value="<?php echo $doner_fname; ?>"required>
							</label>
						</section>
						<section class="col col-6">
							<label class="input">
								<input type="text" name="lastname" placeholder="Last name" value="<?php echo $donor_lname; ?>" required>
							</label>
						</section>
					
					</div>
					<section>
							<label class="input">
								<input type="text" name="address" placeholder="PIN Conde" value="<?php echo $donor_pincode; ?>" required>
								
							</label>
					</section>
					

<!--					<section class="col col-6">
							<label class="input">
								<input type="text" name="landmark" placeholder="Landmark">
							</label>
					</section>-->


				   
				   <section>
						<label class="input">
							<i class="icon-append icon-phone"></i>
							<input type="text" name="con_number" placeholder="Contact No" value="<?php echo $donor_phone; ?>" required>
							<b class="tooltip tooltip-bottom-right">Provide your phone no</b>
						</label>
					</section>
				</fieldset>


				<fieldset>  
					<div class="row">
					
						<section class="col col-6">
							<label class="select" id = "sel1">
								<select name="state" onChange="getDistrict(this.value)" required>
									<option value="">Select State</option>
									<?php while ($row=$result->fetch_assoc()) { ?>
									<option value=<?php echo $row['id']?>><?php echo $row['state']?></option>
									<?php } ?>
								</select>
								<i></i>
							</label>
						</section>

						<section class="col col-6">
							<label class="select" id = "sel2" >
								<select name="district" class="district" id="district" onChange="getBlock(this.value)" required>
								<option value="">Select District</option>
							    <?php while ($row=$result->fetch_assoc()) { ?>
								<option value=<?php echo $row['id']?>><?php echo $row['district']?></option>
								<?php } ?>
							
								</select>

								
								<i></i>
							</label>
						</section>
						
						<section class="col col-6">
							<label class="select" id = "sel3">
								<select name="block" class = "block" id = "block"  onChange="getPanchayat(this.value)" required>
									<option value="">Select Block</option>
									<?php while ($row=$result->fetch_assoc()) { ?>
								<option value=<?php echo $row['id']?>><?php echo $row['block']?></option>
								<?php } ?>
								</select>
								<i></i>
							</label>
						</section>
						
						<section class="col col-6">
							<label class="select" id = "sel4">
								<select name="panchayat" class = "panchayat" id = "panchayat" onChange="getVillage(this.value)" required>
								<option value="">Select Panchayat </option>	
								<?php while ($row=$result->fetch_assoc()) { ?>
								<option value=<?php echo $row['id']?>><?php echo $row['panchayat']?></option>
								<?php } ?>
								</select>
								<i></i>
							</label>
						</section>
					</div>

					<section >
						<label class="select" id = "sel5">
							<select name="village" class = "village" id = "village" required>
								<option value="">Select Village</option>
								<?php while ($row=$result->fetch_assoc()) { ?>
								<option value=<?php echo $row['id']?>><?php echo $row['village']?></option>
								<?php } ?>
							</select>
							<i></i>
						</label>
					</section>

				</fieldset>        
			
			</div>
			<!-- end section -->
		  
			<div class="two_third last" style="margin-left:45px;">
				
				<header> 
					<label style="cursor: pointer;">
						<input type="radio" name="gender" id = "resource" value="resour" class="sky-form" />
						<strong>&nbsp;&nbsp;Donate Resource</strong>
					</label>
					<label style="margin-left: 27%; cursor: pointer;">
						<input type="radio" name="gender" id = "resource2" value="service" class="sky-form" />
						<strong>&nbsp;&nbsp;Donate Service</strong>
					</label>
				</header>
				 
				<fieldset>
					<div class="row">
					   <section class="col col-6 col-xs-6">
							<label class="select" id = "sel" style="display:none">
								<select name="resource_1" id = "resource1" style="display:none">
									<option value="0" selected disabled>Select Resource</option>
									<option value="Water">Water</option>
									<option value="Food">Food</option>
									<option value="Cloth">Cloth</option>
								</select>
								<i></i>
							</label>
						</section>

						<section class="col col-6 col-xs-6" id = "sel12">
							<label class="select" id = "sel11" style="display:none">
								<select name="unit_1" id="unit1" style="display:none">
									<option value="0" selected disabled>Select Unit</option>
									
									<option value="ltr" id = "ltr" style="display:none">ltr</option>
									<option value="gallon" id = "gallon" style="display:none">gallon</option>
									
									<option value="kg" id = "kg" style="display:none">kg</option>
									<option value="quintal" id = "quintal" style="display:none">quintal</option>
									<option value="packets" id = "packets" style="display:none">Packets</option>
									<option value="other" id = "other" style="display:none">Other</option>
								
								</select>
								<i></i>
							</label>
						</section>
						<script type = "text/javascript">
		function myFunction(){
		document.getElementById('sub').style.display = 'block';
		}
		</script>	
						<section class="col col-6 col-xs-6">
							<label class="label" id = "spec" style="display:none">Specify Quantity</label>
							<label class="input"> 
								<input type="number" name="quan" id="quan" min = "1" onkeyup="myFunction()" style="display:none">
							</label>
						</section>
						<section class="col col-6 col-xs-6">
							<label class="label" id = "other1" style="display:none">Specify Other With Amount</label>
							<label class="input"> 
								<input type="text" name="othr" id="othr" style="display:none">
							</label>
						</section>
					</div>
					<script>					
function function_service_text(value)	{
 myFunction();
 if(value == 'Others'){
 console.log (value);
document.getElementById('sel44').style.display = 'block';
document.getElementById('sel55').style.display = 'block';
document.getElementById('message').style.display = 'block';
 }
 else{
 document.getElementById('sel44').style.display = 'none';
document.getElementById('sel55').style.display = 'none';
document.getElementById('message').style.display = 'none';
 }
}			
					
</script>					
					    <section class="col col-16">
          <label class="select" id = "sel22" style="display:none">
            <label id = "sel33">
              <select name = "service_list" onchange="function_service_text(this.value)">
                <!--							  <option value="0" selected disabled>Select Subject</option>-->
                <option value="0" selected disabled>Please Choose Service:
                </option>
                <option value="Evaquation" >Evaquation
                </option>
                <option value="Rescue" >Rescue
                </option>
                <option name = "Others" value="Others" >Others
                </option>
              </select> 
            </label>
            <i>
            </i>
            </section>
					 
			<section class="col col-6 col-xs-6">
            <label class="label" id = "sel44" style="display:none">Specify your requested services</label>
            <label class="textarea" id = "sel55" style="display:none"> 
              <textarea rows="4" name="message" id="message" style="display:none">
              </textarea>
            </label>
            </section>
					<section>
					    <input type="button" class="btn-primary" name = "but" id = "but" value="Add To List" onclick = "table_show();" style="display:none; height: 39px; overflow: hidden; margin: 0px 0 0 0px; padding: 0 25px; outline: none;  border: 0; font: 300 15px/39px 'Open Sans', Helvetica, Arial, sans-serif; text-decoration: none; cursor: pointer;">
					</section>
					<h3 style="background-color:#000; color:#FFF; text-align:center; display:none;" id="tblHd"><strong>DONATE RESOURCES</strong></h3>
				<section>
					<table id = "dataTable" style="display:none" width="100%" >
					  <tr>
						<th>
						  <h3>Select</h3>
						</th>
						<th>
						  <h3>Resource</h3>
						</th>
						<th>
						  <h3>Amount</h3>
						</th>
						<th>
						  <h3>Quantity</h3>
						</th>
						<th>
						  <h3>Cancel</h3>
						</th>
					  </tr>
					</table>
				</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>		

<script>
			var rowIndex = 0;		
			var $i = 0;			
			function table_show() {
			document.getElementById('dataTable').style.display = 'table';
			$("#tblHd").show();
			var rows = "";
			var Resource = document.getElementById("resource1").value;
			var Amount = document.getElementById("unit1").value;
			var Quantity = document.getElementById("quan").value;
			var array = [];
			array[$i] = Resource;
			$i++;
			array[$i] = Amount;
			$i++;
			array[$i] = Quantity;
			$i++;
			$i = 0;
			console.log (Resource);
			console.log (Amount);
			console.log (Quantity);
			var Select = "<center><input type='checkbox' class = 'messageCheckbox' value = '"+Resource+','+Amount+','+Quantity+"' name = 'resource_list[]' id='chk_"+rowIndex+"' /></center>";
			var Cancel = "<center><button type = 'button' id = 'remove' onclick='deleteRow("+rowIndex+")' ><img src = 'images/elements/icon-remove.png'></center></button>";
			rows += "<td>" + Select + "</td><td>" + Resource  + "</td><td>" + Amount + "</td><td>" + Quantity + "</td><td>" + Cancel + "</td>";
			var tbody = document.querySelector("#dataTable tbody");
			var tr = document.createElement("tr");
			tr.innerHTML = rows;
			tbody.appendChild(tr)
		 
		// $("#but").hide();
		// $("#but_list").show();
			rowIndex++;
} 
//onclick='deleteRow("+rowIndex+")'

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

  					
					<section class="col col-6 col-xs-6">
						<input type="submit" class="button" name = "sub" id = "sub" value="Submit" style = "display:none" >
						<!--<input type="submit" value="Submit">-->
						

					</section>
					
				</fieldset>
				 
				<footer>
				    
					<!--<section class="col col-6 col-xs-6">
						<input type="submit" class="button" name = "sub" id = "sub" value="Submit">
					</section>-->
				</footer>
				  <!--<div class="message" id = "show"> <i class="icon-ok"></i>
					<p id = "detail">Your Donation is successful!We will contact you!!</p>
				  </div>-->
			</div>
		</form>
	</div>
	
</div><!-- end content area -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
 document.getElementById('resource').onchange = function()
  {
    var getval = document.getElementById('resource').value;
    if(getval == 'resour'){
      document.getElementById('sub').disabled = true;
      document.getElementById('but').style.display = 'none';
      document.getElementById('other1').style.display = 'none';
      document.getElementById('othr').style.display = 'none';
      <!--		document.getElementById('subject').style.display = 'none';
      -->
        document.getElementById('message').style.display = 'none';
      document.getElementById('sel22').style.display = 'none';
      document.getElementById('sel33').style.display = 'none';
      document.getElementById('sel44').style.display = 'none';
      document.getElementById('sel55').style.display = 'none';
      document.getElementById('sel').style.display = 'block';
      document.getElementById('resource1').style.display = 'block';
      document.getElementById('sel11').style.display = 'block';
      document.getElementById('unit1').style.display = 'block';
      document.getElementById('spec').style.display = 'block';
      document.getElementById('quan').style.display = 'block';
      document.getElementById('sel1').style.display = 'block';
      document.getElementById('sel2').style.display = 'block';
      document.getElementById('sel3').style.display = 'block';
      document.getElementById('sel4').style.display = 'block';
      document.getElementById('sel5').style.display = 'block';
      document.getElementById('resource1').onchange = function() {
        document.getElementById('sub').disabled = true;
        document.getElementById('but').style.display = 'none';
        var res = document.getElementById('resource1').value;
        if(res == 'Food'){
          document.getElementById('sub').disabled = true;
          document.getElementById('but').style.display = 'none';
          document.getElementById('other1').style.display = 'none';
          document.getElementById('othr').style.display = 'none';
          document.getElementById('spec').style.display = 'none';
          document.getElementById('quan').style.display = 'none';
          document.getElementById('sel1').style.display = 'block';
          document.getElementById('unit1').style.display = 'block';
          document.getElementById('kg').style.display = 'block';
          document.getElementById('quintal').style.display = 'block';
          document.getElementById('ltr').style.display = 'none';
          document.getElementById('gallon').style.display = 'none'
          document.getElementById('other').style.display = 'block';
		   document.getElementById('packets').style.display = 'none';
          document.getElementById('unit1').selectedIndex = "kg";
          document.getElementById('unit1').onchange = function() {
            document.getElementById('sub').disabled = true;
            document.getElementById('but').style.display = 'none';
            document.getElementById('other1').style.display = 'none';
            document.getElementById('othr').style.display = 'none';
            var othr = document.getElementById('unit1').value;
            if(othr == 'other') {
              document.getElementById('sub').disabled = true;
              document.getElementById('but').style.display = 'block';
              document.getElementById('other1').style.display = 'block';
              document.getElementById('othr').style.display = 'block';
              document.getElementById('spec').style.display = 'none';
              document.getElementById('quan').style.display = 'none';
            }
            else {
              document.getElementById('sub').disabled = false;
              document.getElementById('but').style.display = 'block';
              document.getElementById('spec').style.display = 'block';
              document.getElementById('quan').style.display = 'block';
              document.getElementById('quan').placeholder = 'Specify Amount of Food';
            }
          }
        }
        else if(res == 'Water'){
          document.getElementById('sub').disabled = true;
          document.getElementById('but').style.display = 'none';
          document.getElementById('other1').style.display = 'none';
          document.getElementById('othr').style.display = 'none';
          document.getElementById('spec').style.display = 'none';
          document.getElementById('quan').style.display = 'none';
          document.getElementById('sel1').style.display = 'block';
          document.getElementById('unit1').style.display = 'block';
          document.getElementById('kg').style.display = 'none';
          document.getElementById('quintal').style.display = 'none';
          document.getElementById('ltr').style.display = 'block';
          document.getElementById('gallon').style.display = 'block';
          document.getElementById('other').style.display = 'block';
          document.getElementById('unit1').selectedIndex = "ltr";
		   document.getElementById('packets').style.display = 'none';
          document.getElementById('unit1').onchange = function() {
            document.getElementById('sub').disabled = true;
            document.getElementById('but').style.display = 'none';
            document.getElementById('other1').style.display = 'none';
            document.getElementById('othr').style.display = 'none';
            var othr = document.getElementById('unit1').value;
            if(othr == 'other') {
              document.getElementById('sub').disabled = true;
              document.getElementById('but').style.display = 'block';
              document.getElementById('other1').style.display = 'none';
              document.getElementById('othr').style.display = 'none';
              document.getElementById('other1').style.display = 'block';
              document.getElementById('othr').style.display = 'block';
              document.getElementById('spec').style.display = 'none';
              document.getElementById('quan').style.display = 'none';
            }
            else {
              document.getElementById('sub').disabled = false;
              document.getElementById('but').style.display = 'block';
              document.getElementById('other1').style.display = 'none';
              document.getElementById('othr').style.display = 'none';
              document.getElementById('spec').style.display = 'block';
              document.getElementById('quan').style.display = 'block';
              document.getElementById('quan').placeholder = 'Specify Amount of Water';
			  document.getElementById('gallon').style.display = 'block';
			  document.getElementById('kg').style.display = 'block';
			  document.getElementById('quintal').style.display = 'none';
			  document.getElementById('packets').style.display = 'none';
			  document.getElementById('othr').style.display = 'none';
            }
          }
        }
        /*else if(res == 'Cloth') {
				document.getElementById('unit1').selectedIndex = '';
				document.getElementById('sub').disabled = true;
				alert('Specify Amount!!!No need of unit!!!!');
				document.getElementById('but').style.display = 'block';
				document.getElementById('other1').style.display = 'none';
				document.getElementById('othr').style.display = 'none';
				document.getElementById('sel11').style.display = 'none';
				document.getElementById('sel12').style.display = 'none';
				document.getElementById('unit1').style.display = 'none';
				document.getElementById('spec').style.display = 'block';
				document.getElementById('quan').style.display = 'block';
				document.getElementById('quan').placeholder = 'Specify Clothing Amount';
			}*/
        else if(res == 'Cloth') {
          document.getElementById('sub').disabled = false;
          document.getElementById('but').style.display = 'block';
          document.getElementById('spec').style.display = 'block';
          document.getElementById('quan').style.display = 'block';
          document.getElementById('sel12').style.display = 'block';
		  document.getElementById('sel11').style.display = 'block';
		  document.getElementById('unit1').style.display = 'block';
		  document.getElementById('gallon').style.display = 'none';
		  document.getElementById('kg').style.display = 'none';
		  document.getElementById('quintal').style.display = 'none';
		  document.getElementById('ltr').style.display = 'none';
		  document.getElementById('packets').style.display = 'block';
		  
        }
      }
    }
  }
  document.getElementById('resource2').onchange = function() {
    var getval1 = document.getElementById('resource2').value;
    if(getval1 == 'service'){
      document.getElementById('sub').disabled = false;
      document.getElementById('sel22').style.display = 'block';
      document.getElementById('sel33').style.display = 'block';
      <!--			document.getElementById('subject').style.display = 'block';
      -->
        <!--			document.getElementById('sel44').style.display = 'block';
      -->
        document.getElementById('sel55').style.display = 'block';
      <!--			document.getElementById('message').style.display = 'block';
      -->
        document.getElementById('dataTable').style.display = 'none';
      document.getElementById('but').style.display = 'none';
      document.getElementById('other1').style.display = 'none';
      document.getElementById('othr').style.display = 'none';
      document.getElementById('sel').style.display = 'none';
      document.getElementById('resource1').style.display = 'none';
      document.getElementById('sel11').style.display = 'none';
      document.getElementById('unit1').style.display = 'none';
      document.getElementById('spec').style.display = 'none';
      document.getElementById('quan').style.display = 'none';
    }
  }

  
  // ***************table show function new---- code change****************
  
      

  
  
  
 
</script>

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
				<li><a href="#"><i class="fa fa-angle-right"></i> emergency.php Emergency</a></li>
				<li><a href="#"><i class="fa fa-angle-right"></i> Locate Victim </a></li>
				<li><a href="#"><i class="fa fa-angle-right"></i> Donate</a></li>
				
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
                name:
                {
                    required: true
                },
                email:
                {
                    required: true,
                    email: true
                },
                message:
                {
                    required: true,
                    minlength: 10
                }
            },
                                
            // Messages for form validation
            messages:
            {
                name:
                {
                    required: 'Please enter your name',
                },
                email:
                {
                    required: 'Please enter your email address',
                    email: 'Please enter a VALID email address'
                },
                message:
                {
                    required: 'Please enter your message'
                }
            },
                                
            // Ajax form submition                  
            /*submitHandler: function(form)
            {
                $(form).ajaxSubmit(
                {
                    success: function()
                    {
                        $("#sky-form").addClass('submited');
                    }
                });
            },*/
            
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
