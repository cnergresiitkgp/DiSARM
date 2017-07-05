<?php
		session_start();
		
		
//include("connect.php");	
include("connect.inc.php");	
//mysql_select_db('a5363301_crowns');
$query="SELECT * FROM state";
//$result=mysql_query($query);
$result=$conn->query($query);

		/*$id=$_SESSION['log_id'];
		$query_cstar=$conn->query("SELECT * FROM `users` where `id`=$id");
		if($query_cstar->num_rows!=1 || $id==-1 )
			header( 'Location: index.php' );
		$row = $query_cstar->fetch_assoc();
		$name = $row['username'];*/
	?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<?php
	function check_session(){
		if(!isset($_SESSION['firstname']))
			header("location:index.php");
	}	
	check_session();	
	?>
<?php	
include("header.php");
?>
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
		 <?php
	  
	  $firstName = $_SESSION['firstname'];
			 $email = $_SESSION['username'];
$data = "SELECT * FROM `register_master` WHERE `email` = '$email'" ;
			  //echo  $data;
			  //$get_data = mysql_query($data,$connect);
			  $get_data = $conn->query($data);
			  //while($result_data = mysql_fetch_array($get_data)){
			  while($result_data = $get_data->fetch_array()){
				  //echo "$$$$4";
				  $role_select = $result_data["role"];
			 // echo $result_data["role"];
			 //echo $role_select;
			  }
			 	?>
        <?php
	$count_check=0;
	//print_r ($_SESSION);
	$email = $_SESSION['username'];
	
	$sql_notification = "SELECT * FROM `chat_master` WHERE `receiver` = '$email'";
	$result_notification = $conn->query($sql_notification);
	while($output_notification = $result_notification-> fetch_array()){	
	$check_flag = $output_notification['flag'];
	if($check_flag == 'n'){
		$count_check++;
		//echo $count_check;
	}
	}
	//die;
	?> 
	<style type="text/css">
		span.bold-red {
			color: red;
			font-weight: bold;
		}
	</style>    
            <ul>
            <?php  if(isset($_SESSION['username'])){  ?>
   				<li> <a href="logout.php" class="dropdown-toggle"><i class="fa fa-unlock"></i> LogOut</a></li>
        	<?php }
			else {?>
				<li> <a href="MyLogin.php" class="dropdown-toggle"><i class="fa fa-lock"></i> LogIn</a></li> 
		        <li> <a href="MyRegister.php" class="dropdown-toggle"><i class="fa fa-edit"></i> Register</a></li> <?php  } ?>
                <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@crowns.com</a></li>
                <li><i class="fa fa-phone"></i> +91 123 456 7890</li>
            	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<?php
				if(($count_check>0)&&($role_select == 'Volunteers')){?>
				<li class="link"><a href="#"><i class="fa fa-unlock"></i> <?php echo $_SESSION['firstname'];?></a></li>
				<strong style="color: red;"><?php echo "<strong>". $count_check."</strong>"; ?></strong>
		<!--		<li class="link"><a href="#"><i style="color: red;"></i>  Noti : <?php// echo "<strong>". $count_check."</strong>"; ?></a></li>-->
		<?php	}
				else{?>
				<li class="link"><a href="#"><i class="fa fa-unlock"></i> <?php echo $_SESSION['firstname']; ?></a></li>	
		<?php	}	?>
            
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
        
    <?php  if($role_select == 'Agencies'){?>
		<li><a href="agency.php" class="dropdown-toggle"><i class="fa fa-home"></i> Home</a></li>
	<?php	}
	else{?>
		<li><a href="volunteer.php" class="dropdown-toggle"><i class="fa fa-home"></i> Home</a></li>
	<?php	}?>
        <li> <a href="impcon_agency.php" class="dropdown-toggle"><i class="fa fa-star"></i> Important Contacts</a></li>
        <li> <a href="helpme_agency.php" class="dropdown-toggle"><i class="fa fa-medkit"></i> Help Me</a></li>
        <li> <a href="emergency_agency.php" class="dropdown-toggle"><i class="fa fa-flag"></i> Report an Emergency</a></li>
        <li> <a href="SearchVictim_agency.php" class="dropdown-toggle"><i class="fa fa-map-marker"></i> Locate Missing Person</a></li>
        <li> <a href="MySess_Check.php" class="dropdown-toggle"><i class="fa fa-money"></i> Donate</a></li>
  <!--      <?php//  if(isset($_SESSION['username'])){  ?>
        <li> <a href="logout.php" class="dropdown-toggle"><i class="fa fa-money"></i> LogOut</a></li>
        <?php// }		else {?>
         <li> <a href="MyLogin.php" class="active"><i class="fa fa-money"></i> LogIn</a></li> <?php//  } ?>-->
        </ul>
        
<!--        <div id="wrap">
          <form action="index.php" autocomplete="on">
          <input id="search" name="search" type="text" placeholder=""><input id="search_submit" value="search" type="submit">
          </form>
        </div> --> 
            
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
	
        <table class="table-style" id="agency_table" >
			<!--	<tr class="table-list">
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
					<td width='50%'><b><a href="req_resources.php"><font color="#444444"><i class="fa fa-angle-right"></i>Request Resource</a></b></td>
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
       	 	  
	   <table class="table-style"  id="volunteer_table"  >
		<!--		<tr class="table-list">
					<th width='50%'><b><a href="admin.php"> Manage Notifications</font></a></b></th>
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
					<td width='50%'><b><a href="viewMsg.php">View Messages</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="req_resources.php"><font color="#444444"><i class="fa fa-angle-right"></i>Request Resource</a></b></td>
				</tr>
		<!--		<tr class="table-list">
					<td width='50%'><b><a href="manage_resources.php">Manage Resources</a></b></td>
				</tr>-->
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
		
<script type="text/javascript">
$(document).ready(function(){
<?php if($role_select == 'Agencies'){ ?>
	$("#volunteer_table").hide();
	console.log("Hello");
<?php } else{ ?>	
	console.log("Hi");
	$("#agency_table").hide();
<?php } ?>
});			
</script>
			  
			  
		
	
	 </div>  

			  
<script>
/*function valueCheck(){
	
	var r_type = document.getElementById('sel8').val;
	if (r_type == null || r_type == "") {
        alert("resource name must be filled out");
	//resturn false;
	//alert("Name must be filled out");
}*/
function function_service_text()	{
	

 //document.getElementById('dataTable').style.display = 'table';
 var e = document.getElementById('resource');
 var r_type = e.options[e.selectedIndex].value;
 var u = document.getElementById('unit');
 var uni = u.options[u.selectedIndex].value;
 var f = document.getElementById('urgency');
 var urgen = f.options[f.selectedIndex].value;
  console.log (r_type);
  console.log (uni);
 console.log (urgen);
	if ((r_type == null || r_type == "") || (uni == null || uni == "") || (urgen == null || urgen == "")) {
        alert("all the field must be filled out");
	//resturn false;
	//alert("Name must be filled out");
}
else{
 document.getElementById('but').style.display = 'block';
 document.getElementById('sub').style.display = 'block';
}

/* if (uni == null || uni == "") {
        alert("unit must be filled out");
	//resturn false;
	//alert("Name must be filled out");
}
else{//if((r_type!= null && r_type != "") && (uni!= null && uni!= "") && (urgen!= null && r_type != "")){
 document.getElementById('but').style.display = 'block';
}

if (urgen == null || urgen == "") {
        alert("urgency must be filled out");
	//resturn false;
	//alert("Name must be filled out");
}
 else{//if((r_type!= null && r_type != "") && (uni!= null && uni!= "") && (urgen!= null && r_type != "")){
 document.getElementById('but').style.display = 'block';
}	*/
}		
</script>
<?php if (isset($_GET['flag'])) {
$flag = $_GET['flag'];
if($flag == true){
 echo "<center><b>Your request has been successfully submitted!!!!!!</b></center>";
}
} ?>

		<div class="three_fourth last">
 <script type = "text/javascript">
 
 function validateForm(formObj)  
{  
	var counter = 0,
	msgTxt = '',
	pincode = /^\d{6}$/,
	name = /^[A-Za-z]+$/, 
	phoneno = /^\d{10}$/,
	email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 
 if(!formObj.landmark.value.match(pincode)) {  
		msgTxt += "\nNot a valid PIN Code Number";  
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


 
			<form action="req_resources_insert.php" id="sky-form" method="post" class="sky-form" onsubmit = "return validateForm(this);" style="<?php if($flag == true){echo 'display: none;';} else '' ;?>">
			
				<h3 style = "display: block;background-color:#000; color:#FFF; text-align:center; "><b><center>Location of Request</center></b></h3>
				<br><br>
				<div class="row" style="width:100%; height: 75px;">
	<!--			<div style="width:100%; height: 75px;">-->
				<fieldset> 
				<section class = "col col-6" style="float: left; margin-left: 45px;">
							<label class="input">
								<input type="text" name="landmark" placeholder="PIN Code" required>
								
							</label>
				</section>
				
				<section class="col col-6" style="float: left; margin-left: 65px;">
					<label class="select" id = "sel1">
						<select name="state" onChange="getDistrict(this.value)" required>
							<option value="">Select State</option>
								<?php// while ($row=mysql_fetch_array($result)) { ?>
								<?php while ($row=$result->fetch_array()) { ?>
									<option value=<?php echo $row['id']?>><?php echo $row['state']?></option>
								<?php } ?>
						</select>
							<i></i>
							</label>
				</section>

						<section class="col col-6" style="float: left; margin-left: 65px;">
							<label class="select" id = "sel2" >
								<select name="district" class="district" id="district" onChange="getBlock(this.value)" required>
								<option value="">Select District</option>
							    <?php// while ($row=mysql_fetch_array($result)) { ?>
								<?php while ($row=$result->fetch_array()) { ?>
								<option value=<?php echo $row['id']?>><?php echo $row['district']?></option>
								<?php } ?>
							
								</select>

								
								<i></i>
							</label>
						</section>
						</fieldset>
				<!--		</div>-->
						</div>
					<div class="row">
					<fieldset>					
						<section class="col col-6" style="float: left; margin-left: 45px;">
							<label class="select" id = "sel3">
								<select name="block" class = "block" id = "block"  onChange="getPanchayat(this.value)" required>
									<option value="">Select Block</option>
									<?php// while ($row=mysql_fetch_array($result)) { ?>
									<?php while ($row=$result->fetch_array()) { ?>
								<option value=<?php echo $row['id']?>><?php echo $row['block']?></option>
								<?php } ?>
								</select>
								<i></i>
							</label>
						</section>
						
						<section class="col col-6" style="float: left; margin-left: 65px;">
							<label class="select" id = "sel4">
								<select name="panchayat" class = "panchayat" id = "panchayat" onChange="getVillage(this.value)" required>
								<option value="">Select Panchayat </option>	
								<?php// while ($row=mysql_fetch_array($result)) { ?>
								<?php while ($row=$result->fetch_array()) { ?>
								<option value=<?php echo $row['id']?>><?php echo $row['panchayat']?></option>
								<?php } ?>
								</select>
								<i></i>
							</label>
						</section>
					

					<section >
						<label class="select" id = "sel5" style="float: left; margin-left: 65px;">
							<select name="village" class = "village" id = "village" required>
								<option value="">Select Village</option>
								<?php// while ($row=mysql_fetch_array($result)) { ?>
								<?php while ($row=$result->fetch_array()) { ?>
								<option value=<?php echo $row['id']?>><?php echo $row['village']?></option>
								<?php } ?>
							</select>
							<i></i>
						</label>
					</section>

				</fieldset>      
				</div>
				<br><br>
				<script>
				function showUnitAreas(){
				document.getElementById('unit_field').style.display = 'block';
				document.getElementById('urgency_field').style.display = 'block';
				}
				function showQuantityField(){
					
				document.getElementById('quantity_field').style.display = 'block';
				}
				
				</script>	
						
						<h3 style = "display: block;background-color:#000; color:#FFF; text-align:center; "><strong><center>Requested Resources</center></strong></h3>
						<br>
						<div class="row">
						<fieldset>
						
						
						
							<section class="col col-6" style="float: left; margin-left: 35px;">
											<label class="select" id = "sel8">Resource Type</label>
											<select name="resource" class = "resource" id = "resource" onChange="showUnitAreas();" required>
												<option value="" selected disabled>Select Resource</option>
												<option value="Water">Water</option>
												<option value="Food">Food</option>
												<option value="Cloth">Cloth</option>
												<option value="Tarpaulin">Tarpaulin</option>
											</select>
							</section>
							
							<section class="col col-6" id = "urgency_field" style="display:none;float: left; margin-left: 35px;">
											<label class="select"  id = "sel6">Urgency</label>
											<select name="urgency" class = "urgency" id = "urgency" onclick = "showQuantityField();" required >
											   
												<option value="" selected disabled>Select</option>
												<option value="normal">normal</option>
												<option value="urgent">urgent</option>
												<option value="critical">critical</option>
												<option value="other">Other</option>
											</select>
							</section>
								
							<section class="col col-6" id = "unit_field" style=" display:none; float: left; margin-left: 35px;">
											<label class="select" id = "sel7">Unit</label>
											<select name="unit" class = "unit" id = "unit" onclick = "selectUnit();"required>
											   
												<option value="" selected disabled>Select Unit</option>
												<option id = "ltr" value="ltr" style="display:none">ltr</option>
												<option id ="gallon" value="gallon" style="display:none">gallon</option>
												<option id ="kg" value="kg" style="display:none">kg</option>
												<option id ="quintal" value="quintal" style="display:none">quintal</option>
												<option id ="meter" value="meter" style="display:none">meter</option>
												<option id ="pices" value="pices" style="display:none">pcs.</option>
											</select>
							</section>	

							
							
							<section class="col col-6" id = "quantity_field" style="display:none;float: left; margin-left:35px;">
								<label class="select" id = "sel5">Quantity</label>
											<select name="quantity" class = "quantity" onchange="function_service_text();" id = "quantity" required >
												<option value="" selected disabled>Select Quantity:</option>
												<option value="10">10</option>
												<option value="20">20</option>
												<option value="30">30</option>
												<option value="40">40</option>
												<option value="50">50</option>
												<option value="60">60</option>
												<option value="70">70</option>
												<option value="80">80</option>
												<option value="90">90</option>
												<option value="100">100</option>
											</select>
							</section>
					</fieldset>	
					</div>					
							<section>
					    <input type="button" class="btn-primary" name = "but" id = "but" value="Add To List" onclick = "table_show();" style="display:none; height: 39px; overflow: hidden; margin: 0px 0 0 0px; padding: 0 25px; outline: none;  border: 0; font: 300 15px/39px 'Open Sans', Helvetica, Arial, sans-serif; text-decoration: none; cursor: pointer; float: right; margin-right: 35px;">
					</section>
					<br><br>
					<h3 style="background-color:#000; color:#FFF; text-align:center; display:none;" id="tblHd"><strong>List of Requested Resources</strong></h3>
					<section>
						<table id = "dataTable" style="display:none" width="100%" >
						<thead>
							<tr>
								<th>
									<h3>Select</h3>
								</th>
								<th>
									<h3>Resource</h3>
								</th>
								<th>
									<h3>Urgency</h3>
								</th>
								<th>
									<h3>Quantity</h3>
								</th>
								<th>
									<h3>Unit</h3>
								</th>
								<th>
									<h3>Cancel</h3>
								</th>
							</tr>
							</thead>
							<tbody></tbody>
						</table>
					</section>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<section class="col col-6 col-xs-6" style="float: right; margin-right: 75px;">
						<input type="submit" class="button" name = "sub" id = "sub" value="Submit" style="display:none;">
						<!--<input type="submit" value="Submit">-->
						

					</section>
							
							
							</div>
							<footer>
							
							</footer>
						
						
			</form>
			
		</div>
    
</div><!-- end content area -->

<script>
function selectUnit(){
	console.log ("***");
	var e = document.getElementById('resource');
 var r_type = e.options[e.selectedIndex].value;
 console.log("######");
 console.log (r_type);
 if(r_type == 'Water'){
	 console.log("water seleted");
	document.getElementById('ltr').style.display = 'block';
	document.getElementById('gallon').style.display = 'block';
	document.getElementById('kg').style.display = 'none';
	document.getElementById('quintal').style.display = 'none';	
	document.getElementById('pices').style.display = 'none';
	document.getElementById('meter').style.display = 'none';
}
 if(r_type == 'Food'){
	 console.log("food seleted");
	document.getElementById('kg').style.display = 'block';
	document.getElementById('quintal').style.display = 'block'; 
	document.getElementById('meter').style.display = 'none';
	document.getElementById('ltr').style.display = 'none';
	document.getElementById('gallon').style.display = 'none';
	document.getElementById('pices').style.display = 'none';
}	
  if(r_type == 'Cloth'){
	  console.log("cloth seleted");
	 document.getElementById('meter').style.display = 'block';
	 document.getElementById('ltr').style.display = 'none';
	document.getElementById('gallon').style.display = 'none'; 
	document.getElementById('kg').style.display = 'none';
	document.getElementById('quintal').style.display = 'none'; 
	document.getElementById('pices').style.display = 'none';
}	
 if(r_type == 'Tarpaulin'){
	 console.log("tarpaulin seleted");
	 document.getElementById('pices').style.display = 'block';
	 document.getElementById('kg').style.display = 'none';
	document.getElementById('quintal').style.display = 'none'; 
	document.getElementById('meter').style.display = 'none';
	document.getElementById('ltr').style.display = 'none';
	document.getElementById('gallon').style.display = 'none';
	
}
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>	
<script>
	var rowIndex = 0;		
	var $i = 0;	
function table_show() {
		
	document.getElementById('dataTable').style.display = 'table';
	$("#tblHd").show();
	var rows = "";
	var Resource = document.getElementById("resource").value;
	console.log (Resource);
	var Unit = document.getElementById("unit").value;
	var Quantity = document.getElementById("quantity").value;
	var Urgency = document.getElementById("urgency").value;
	var array = [];
	array[$i] = Resource;
	$i++;
	array[$i] = Urgency;
	$i++;
	array[$i] = Unit;
	$i++;
	array[$i] = Quantity;
	$i++;
	$i = 0;
	console.log (Resource);
	console.log (Urgency);
	console.log (Quantity);
	console.log (Unit);
	var Select = "<center><input type='checkbox' class = 'messageCheckbox' value = '"+Resource+','+Unit+','+Quantity+','+Urgency+"' name = 'resource_list[]' id='chk_"+rowIndex+"' /></center>";
	var Cancel = "<center><button type = 'button' id = 'remove' onclick='deleteRow("+rowIndex+")' ><img src = 'images/elements/icon-remove.png'></center></button>";
	rows += "<td>" + Select + "</td><td>" + Resource + "</td><td>" + Urgency + "</td><td>" + Quantity + "</td><td>"+ Unit + "</td><td>" + Cancel + "</td>";
	var tbody = document.querySelector("#dataTable tbody");
	var tr = document.createElement("tr");
	tr.innerHTML = rows;
	tbody.appendChild(tr)
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
		
   }
</script>



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
