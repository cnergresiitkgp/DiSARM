
	<?php
		session_start();
		//require 'connect.inc.php';
		//include("connect.php");
		include("connect.inc.php");
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
            	<li class="link"><a href="MyLogin.php"><i class="fa fa-lock"></i> Login</a></li>
                <li class="link"><a href="register.php"><i class="fa fa-edit"></i> Register</a></li> <?php  } ?>
                <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@crowns.com</a></li>
                <li><i class="fa fa-phone"></i> +91 123 456 7890</li>
            	
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                
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
			  }?>
								<ul class="nav navbar-nav">
      <?php  if($role_select == 'Agencies'){// echo "hi";?>
        <li><a href="agency.php" class="dropdown-toggle"><i class="fa fa-home"></i> Home</a></li>
	<?php	}
		else {
		if($role_select == 'Volunteers'){// echo "hello";?>
		<li><a href="volunteer.php" class="dropdown-toggle"><i class="fa fa-home"></i> Home</a></li>
	<?php	}
		else{?>
		<li><a href="admin.php" class="dropdown-toggle"><i class="fa fa-home"></i> Home</a></li>
		<?php	}
			}?>
	
        <li> <a href="impcon_agency.php" class="dropdown-toggle"><i class="fa fa-star"></i> Important Contacts</a></li>
        <li> <a href="helpme_agency.php" class="dropdown-toggle"><i class="fa fa-medkit"></i> Help Me</a></li>
        <li> <a href="emergency_agency.php" class="dropdown-toggle"><i class="fa fa-flag"></i> Report an Emergency</a></li>
        <li> <a href="SearchVictim_agency.php" class="dropdown-toggle"><i class="fa fa-map-marker"></i> Locate Missing Person</a></li>
      <li> <a href="MySess_Check.php" class="dropdown-toggle"><i class="fa fa-money"></i> Donate</a></li>
    <!--     <?php // if(isset($_SESSION['username'])){  ?>
        <li> <a href="logout.php" class="dropdown-toggle"><i class="fa fa-money"></i> LogOut</a></li>
        <?php// }		else {?>
         <li> <a href="MyLogin.php" class="dropdown-toggle"><i class="fa fa-money"></i> LogIn</a></li> <?php//  } ?>-->
        
        </ul>
        
<!--        <div id="wrap">
          <form action="index.php" autocomplete="on">
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
<style>
	#dataTable { border: 1px solid black; margin-top: 10px;}
	#dataTable tr, #dataTable th, #dataTable td { border: 1px solid black; border-collapse: collapse;}
	#dataTable h3{font-size: 14px; font-weight: bold;}
</style>    
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
					<td width='50%'><b><a href="req_resources.php">Request Resource</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="manage_resources.php"><font color="#444444"><i class="fa fa-angle-right"></i>Manage Resources</a></b></td>
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
					<td width='50%'><b><a href="abc.php">View Meaasges</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="req_resources.php">Request Resource</a></b></td>
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
			
			<table class="table-style" id="admin_table">
				<tr class="table-list">
					<th width='50%'><b><a href="admin.php"> Manage Notifications</font></a></b></th>
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
					<td width='50%'><b><a href="managn.php">Manage Agencies</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="manage_volunteers.php">Manage Volunteers</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="manage_resources.php"><font color="#444444"><i class="fa fa-angle-right"></i>Manage Resources</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="view_donation.php">Manage Donations</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="rapid.php">RAPID</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="mansms.php">Manage Interactive SMS System</a></b></td>
				</tr>
			</table>
		
<script type="text/javascript">
$(document).ready(function(){
<?php if($role_select == 'Agencies'){ ?>
	$("#volunteer_table").hide();
	$("#admin_table").hide();
	console.log("Hello");
<?php } else{
if($role_select == 'Admin'){?>
console.log("**");
$("#agency_table").hide();
$("#volunteer_table").hide();
<?php } else{ ?>	
	console.log("Hi");
	$("#agency_table").hide();
	$("#admin_table").hide();
<?php }}?>


});			
</script>
			  
			  
		
	
	 </div>
<style>
.scrollit {
    overflow:scroll;
    height:400px;
	width: 900px;
}

</style>  
<script>
function getSearchBlock(value){
	
	if(value == 'name'){
		console.log (value);
	document.getElementById('name').style.display = 'block';
	//document.getElementById('role').style.display = 'none';
	document.getElementById('contact').style.display = 'none';
	document.getElementById('affiliation').style.display = 'none';
	document.getElementById('resource').style.display = 'none';	
	document.getElementById('quantity').style.display = 'none';
	document.getElementById('importance').style.display = 'none';	
	document.getElementById('location').style.display = 'none';
	//document.getElementById('status').style.display = 'none';		
	document.getElementById('entry').style.display = 'block';
	
	}
/*	else if(value == 'role'){
		console.log (value);
	document.getElementById('name').style.display = 'none';
	//document.getElementById('role').style.display = 'block';
	document.getElementById('contact').style.display = 'none';
	document.getElementById('affiliation').style.display = 'none';
	document.getElementById('resource').style.display = 'none';	
	document.getElementById('quantity').style.display = 'none';
	document.getElementById('importance').style.display = 'none';	
	document.getElementById('location').style.display = 'none';
	document.getElementById('status').style.display = 'none';		
	document.getElementById('entry').style.display = 'block';		
	}*/
	else if(value == 'contact'){
		console.log (value);
	document.getElementById('name').style.display = 'none';
	//document.getElementById('role').style.display = 'none';
	document.getElementById('contact').style.display = 'block';
	document.getElementById('affiliation').style.display = 'none';
	document.getElementById('resource').style.display = 'none';	
	document.getElementById('quantity').style.display = 'none';
	document.getElementById('importance').style.display = 'none';	
	document.getElementById('location').style.display = 'none';
	//document.getElementById('status').style.display = 'none';		
	document.getElementById('entry').style.display = 'block';		
	}
	else if(value == 'affilation'){
		console.log (value);
	document.getElementById('name').style.display = 'none';
	//document.getElementById('role').style.display = 'none';
	document.getElementById('contact').style.display = 'none';
	document.getElementById('affiliation').style.display = 'block';
	document.getElementById('resource').style.display = 'none';	
	document.getElementById('quantity').style.display = 'none';
	document.getElementById('importance').style.display = 'none';	
	document.getElementById('location').style.display = 'none';
	//document.getElementById('status').style.display = 'none';		
	document.getElementById('entry').style.display = 'block';		
	}
	else if(value == 'resource'){
		console.log (value);
	document.getElementById('name').style.display = 'none';
	//document.getElementById('role').style.display = 'none';
	document.getElementById('contact').style.display = 'none';
	document.getElementById('affiliation').style.display = 'none';
	document.getElementById('resource').style.display = 'block';	
	document.getElementById('quantity').style.display = 'none';
	document.getElementById('importance').style.display = 'none';	
	document.getElementById('location').style.display = 'none';
	//document.getElementById('status').style.display = 'none';		
	document.getElementById('entry').style.display = 'block';		
	}
	else if(value == 'quantity'){
		console.log (value);
	document.getElementById('name').style.display = 'none';
	//document.getElementById('role').style.display = 'none';
	document.getElementById('contact').style.display = 'none';
	document.getElementById('affiliation').style.display = 'none';
	document.getElementById('resource').style.display = 'none';	
	document.getElementById('quantity').style.display = 'block';
	document.getElementById('importance').style.display = 'none';	
	document.getElementById('location').style.display = 'none';
	//document.getElementById('status').style.display = 'none';		
	document.getElementById('entry').style.display = 'block';		
	}
	else if(value == 'importance'){
		console.log (value);
	document.getElementById('name').style.display = 'none';
	//document.getElementById('role').style.display = 'none';
	document.getElementById('contact').style.display = 'none';
	document.getElementById('affiliation').style.display = 'none';
	document.getElementById('resource').style.display = 'none';	
	document.getElementById('quantity').style.display = 'none';
	document.getElementById('importance').style.display = 'block';	
	document.getElementById('location').style.display = 'none';
	//document.getElementById('status').style.display = 'none';		
	document.getElementById('entry').style.display = 'block';		
	}
	else if(value == 'location'){
		console.log (value);
	document.getElementById('name').style.display = 'none';
	//document.getElementById('role').style.display = 'none';
	document.getElementById('contact').style.display = 'none';
	document.getElementById('affiliation').style.display = 'none';
	document.getElementById('resource').style.display = 'none';	
	document.getElementById('quantity').style.display = 'none';
	document.getElementById('importance').style.display = 'none';	
	document.getElementById('location').style.display = 'block';
	//document.getElementById('status').style.display = 'none';		
	document.getElementById('entry').style.display = 'block';		
	}
/*	else if(value == 'status'){
		console.log (value);
	document.getElementById('name').style.display = 'none';
	//document.getElementById('role').style.display = 'none';
	document.getElementById('contact').style.display = 'none';
	document.getElementById('affiliation').style.display = 'none';
	document.getElementById('resource').style.display = 'none';	
	document.getElementById('quantity').style.display = 'none';
	document.getElementById('importance').style.display = 'none';	
	document.getElementById('location').style.display = 'none';
	//document.getElementById('status').style.display = 'block';		
	document.getElementById('entry').style.display = 'block';		
	}*/
	
}



</script>    
		<div class="three_fourth last">
		<form action = "filter_insert.php" method = "POST"> 
    
					<section class="col col-6 col-xs-6">
					    <label class="input" id = "sel1" >Select Filter Item:</label>
						
						<select name="select_Option" onChange="getSearchBlock(this.value)">
							  <option value="" selected disabled>Select</option>
							  <option value="name" >Name</option>
							  <option value="contact" >Contact No</option>
							  <option value="affilation" >Affiliation</option>
							  <option value="resource" >Resource Name</option>
			<!--				  <option value="quantity" >Quantity</option>-->
							  <option value="importance" >Importance</option>
							  <option value="location" >PIN Code</option>
							  
							  
						</select> 
						
					</section>
					<section class="col col-6 col-xs-6">
							<label class="label" id = "name" style="display:none">Enter Name</label>
							<label class="label" id = "role" style="display:none">Enter Role</label>
							<label class="label" id = "contact" style="display:none">Enter contact No</label>
							<label class="label" id = "affiliation" style="display:none">Enter Affiliation</label>
							<label class="label" id = "resource" style="display:none">Enter Resource Name</label>
							<label class="label" id = "quantity" style="display:none">Enter Quantity</label>
							<label class="label" id = "importance" style="display:none">Enter Importance</label>
							<label class="label" id = "location" style="display:none">Enter PIN Code</label>
							<label class="label" id = "status" style="display:none">Enter Status</label>
							<label class="input"> 
								<input type="text" name="entry" id="entry" style="display:none" >
							</label>
					</section>
						
					<section class="col col-6 col-xs-6">
						<input type="submit" class="button" name = "search" id = "search" value="Search" onclick = "sendVal();">
					</section>
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
