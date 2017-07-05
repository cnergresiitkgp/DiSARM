
	<?php
		session_start();
		
		
include("connect.inc.php");	
//mysql_select_db('a5363301_crowns');
$query="SELECT * FROM state";
$result= $conn->query($query);

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
include("header.php");
?>
	
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
	#dataTable h3{font-size: 20px; font-weight: bold;}
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
            
           <ul>
            	<?php  if(isset($_SESSION['username'])){  ?>
				<li> <a href="logout.php" class="dropdown-toggle"><i class="fa fa-unlock"></i> LogOut</a></li>
				<?php }
				else {?>
            	<li class="link"><a href="MyLogin.php"><i class="fa fa-lock"></i> Login</a></li>
                <li class="link"><a href="MyRegister.php"><i class="fa fa-edit"></i> Register</a></li> <?php  } ?>
                <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> info@crowns.com</a></li>
                <li><i class="fa fa-phone"></i> +91 123 456 7890</li>
            	
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
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
        <li> <a href="locate.php" class="dropdown-toggle"><i class="fa fa-map-marker"></i> Locate Victim</a></li>
        <li> <a href="MySess_Check.php" class="dropdown-toggle"><i class="fa fa-money"></i> Donate</a></li>
									
								</ul>
							
	<!--							<div id="wrap">
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
        <table class="table-style">
				<tr class="table-list">
					<th width='50%'><b><a href="admin.php">Manage Notifications</a></b></th>
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
					<td width='50%'><b><a href="manage_volunteers_admin.php"><font color="#444444"><i class="fa fa-angle-right"></i> Manage Volunteers</font></a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="manage_resources_admin.php">Manage Resources</a></b></td>
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
      
		<div class="three_fourth last">
      
       <form action="manage_volunteers_insert.php" id="sky-form" method="post" class="sky-form" style="<?php if($flag == true){echo 'display: none;';} else '' ;?>">
	   <h3><b><center>Register Volunteers</center></b></h3>
	   <div>
	   <fieldset>
		   <div class="row">
		   &nbsp;&nbsp &nbsp;&nbsp
				<section >
									<label class="input">
									<br>
									    Volunteer Name:
										<input type="text" name="vol_name" required>
									</label>
				&nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp
				
									<label class="input" style = "margin:right">
									<br>
									    Contact Number:
										<input type="text" name="con_number" required>
									</label>
				</section>
				<div class="row">
				<br>
				<h3><b><center>Address</center></b></h3>
				<br>
				
				
				<section >
								<label class="select" id = "sel1">
									<select name="state" onChange="getDistrict(this.value)" required>
										<option value="">Select State</option>
										<?php while ($row=$result->fetch_assoc()) { ?>
										<option value=<?php echo $row['id']?>><?php echo $row['state']?></option>
										<?php } ?>
									</select>
								<i></i>
								</label>
								
							 &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp   
							 
							<label class="select" id = "sel2" >
								<select name="district" class="district" id="district" onChange="getBlock(this.value)" required>
								<option value="">Select District</option>
							    <?php while ($row=$result->fetch_assoc()) { ?>
								<option value=<?php echo $row['id']?>><?php echo $row['district']?></option>
								<?php } ?>
								</select>
								<i></i>
							</label>
						
						      &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp
							<label class="select" id = "sel3">
								<select name="block" class = "block" id = "block"  onChange="getPanchayat(this.value)" required>
									<option value="">Select Block</option>
									<?php while ($row=$result->fetch_assoc()) { ?>
								<option value=<?php echo $row['id']?>><?php echo $row['block']?></option>
								<?php } ?>
								</select>
								<i></i>
							</label>
							
								&nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp
							<label class="select" id = "sel4">
								<select name="panchayat" class = "panchayat" id = "panchayat" onChange="getVillage(this.value)" required>
								<option value="">Select Panchayat </option>	
								<?php while ($row=$result->fetch_assoc()) { ?>
								<option value=<?php echo $row['id']?>><?php echo $row['panchayat']?></option>
								<?php } ?>
								</select>
								<i></i>
							</label>
							
						       &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp        
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
<div class = "row">
<br>
				<section class="col col-6">
									<label class="select" id = "sel16">
									<select name="skills" class = "skills" id = "skills" required>
										<option value="">Select skill</option>
										<option value="water">Water</option>
										<option value="food">Food</option>
										<option value="shelter">Shelter</option>
										<option value="rescue">Rescue</option>
										<option value="medicine">Medicine</option>
									</select>	
									</label>
									&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				</section>
				<section class="col col-6">					
									<label class="select" id = "sel6">
									<select name="train" class = "train" id = "train" required>
									   	<option value="">SPHERE Trained</option>
										<option value="y">Yes</option>
										<option value="n">No</option>
									</select>
									<i></i>
									</label>
									&nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp
																									
<!--									<label class="select" id = "sel7">
									<select name="affiliation" class = "affiliation" id = "affiliation" required>
									   	<option value="">Affiliation</option>
										<option value="BSS">Bharat Sebasram Sangha</option>
										<option value="RKM">RKM</option>
									</select>
									<i></i>
									</label>
									&nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp-->
									
									<label class="input">
									<br>
									    Designation:
										<input type="text" name="designation" required>
									</label>
									
				</section>	
				
									
</div>	
<div class = "row">
<br>
<h3><b><center>Location of Work:</center></b></h3>
<br>
<?php
				include("connect.inc.php");	
//mysql_select_db('a5363301_crowns');
				$query1="SELECT * FROM block";
//$result1=mysql_query($query1);
$result1= $conn->query($query1);
				
				?>
<script>

function getPanchayatVal(blockId){
	
		if($.trim(blockId) !== ''){
			console.log (blockId);
			$.get( 
				"ajax1.php",
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

 function show_confirm()
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
 }
</script>		
<section>
													
						      &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp
							<section class="col col-6">
							<label class="select" id = "sel13">
								<select name="block" class = "block" id = "block"  onChange="getPanchayatVal(this.value)" required>
									<option value="">Select Block</option>
									<?php while ($row1=$result1->fetch_assoc()) { ?>
								<option value=<?php echo $row1['id']?>><?php echo $row1['block']?></option>
								<?php } ?>
								</select>
								<i></i>
							</label>
						
						
							&nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp
							<label class="select" id = "sel14">
								<select name="panchayat" class = "panchayat" id = "panchayat_new" onChange="getVillageVal(this.value)" required>
								<option value="">Select Panchayat </option>	
								<?php while ($row=$result->fetch_assoc()) { ?>
								<option value=<?php echo $row['id']?>><?php echo $row['panchayat']?></option>
								<?php } ?>
								</select>
								<i></i>
							</label>
							
						       &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp        
							<label class="select" id = "sel5">
							<select name="village" class = "village" id = "village_new" required>
								<option value="">Select Village</option>
								<?php while ($row=$result->fetch_assoc()) { ?>
								<option value=<?php echo $row['id']?>><?php echo $row['village']?></option>
								<?php } ?>
							</select>
							<i></i>
							</label>
</section>							
</div>			
				
				<br><br><br>
				
				<section class="col col-6 col-xs-6" style = "margin: center">
						<input type="submit" class="button" name = "sub" id = "sub" value="Assign Volunteer">
				</section>	

				&nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp  &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp  
				<section class="col col-6 col-xs-6" style = "margin: center">		
						<input type="reset" class="button" name = "reset" id = "reset" value="Reset">
						<!--<input type="submit" value="Submit">-->
						

					</section>
	   
	   </fieldset>
	   </div>
	   </form>
        
    </div>
    
</div><!-- end content area -->
</div>
</section>
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
