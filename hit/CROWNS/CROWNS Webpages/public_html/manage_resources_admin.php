
	<?php
		session_start();
		//require 'connect.inc.php';
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
					<td width='50%'><b><a href="manage_volunteers_admin.php">Manage Volunteers</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="manage_resources_admin.php"><font color="#444444"><i class="fa fa-angle-right"></i> Manage Resources</font></a></b></td>
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
<style>
.scrollit {
    overflow:scroll;
    height:400px;
	width: 900px;
}

</style>      
      <div class="three_fourth last">
      
        <div class="container" id = "tl">
<h3 style="background-color:#000; color:#FFF; text-align:center; display:none;" id="tblHd"><strong>REQUESTED CONTACTS</strong></h3>
		<div class="scrollit">
        <table id = "dataTable" name = "tbl" width="100%" >
        <tr>
            <th>
			<h3>Request Id</h3>
			</th>
			<th>
			<h3>Requested By</h3>
			</th>
			<th>
			<h3>Contact No</h3>
			</th>
			<th>
			<h3>Affiliation</h3>
			</th>
			<th>
			<h3>Resource Name</h3>
			</th>
			<th>
			<h3>Quantity</h3>
			</th>
			<th>
			<h3>Importance</h3>
			</th>
			<th>
			<h3>Requisition Date</h3>
			</th>
			<th>
			<h3>Location</h3>
			</th>
			<th>
			<h3>Status</h3>
			</th>
			

        </tr>
      
<?php
$sql = "SELECT * FROM `resource_request`";
//$result = mysql_query($sql,$connect);
$result= $conn->query($sql);
$row = mysql_num_rows($result);
$i = 0;
while($i<$row){
//$output= mysql_fetch_assoc($result);
$output=$result->fetch_assoc();
//echo print_r($output);
$state = $output['state'];
$sql_state = "SELECT `state` FROM `state` WHERE `id`= $state";
//$output_state = mysql_query($sql_state,$connect);
$output_state = $conn->query($sql_state);
//$result_state= mysql_fetch_assoc($output_state);
$result_state = $output_state->fetch_assoc();
$district = $output['district'];
$sql_district = "SELECT `district` FROM `district` WHERE `id`= $district";
//$output_district = mysql_query($sql_district,$connect);
$output_district = $conn->query($sql_district);
//$result_district= mysql_fetch_assoc($output_district);
$result_district = $output_district->fetch_assoc();
//echo $result_district['district'];

$block = $output['block'];
$sql_block = "SELECT `block` FROM `block` WHERE `id`= $block";
//$output_block = mysql_query($sql_block,$connect);
$output_block = $conn->query($sql_block);
//$result_block = mysql_fetch_assoc($output_block);
$result_block = $output_block->fetch_assoc();
//echo $result_block['block'];

$panchayat = $output['panchayat_municipality'];
//echo $panchayat;
$sql_panchayat = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id`= $panchayat";
//$output_panchayat = mysql_query($sql_panchayat,$connect);
$output_panchayat = $conn->query($sql_panchayat);
//$result_panchayat = mysql_fetch_assoc($output_panchayat);
$result_panchayat = $output_panchayat->fetch_assoc();
//echo $result_panchayat['panchayat'];


$village = $output['village_area'];
//echo $village;
$sql_village = "SELECT `village` FROM `village` WHERE `id`= $village";
//$output_village = mysql_query($sql_village,$connect);
$output_village = $conn->query($sql_village);
//$result_village = mysql_fetch_assoc($output_village);
$result_village = $output_village->fetch_assoc();
//echo print_r($result_village);
//echo "***".$result_village['village']."**";
$address = $result_state['state']." ". $result_district['district']." ".$result_block['block']." ".$result_panchayat['panchayat']." ".$result_village['village'];
//echo $address;die;
?>
<script>
		document.getElementById('tl').style.display = 'table';
        
        </script>
		<tr>
		<td><?php  echo $output["Req_id"];?></td>
		<td><?php  echo $output["requested_by"];?></td>
		<td><?php  echo $output["contact_no"];?></td>
		<td><?php  echo $output["Affiliation"];?></td>
		<td><?php  echo $output["resource_name"];?></td>
		<td><?php  echo $output["quantity"];?></td>
		<td><?php  echo $output["importance"];?></td>
		<td><?php  echo $output["Requisition_Date"];?></td>
		<td><?php  echo $address;?></td>
		<td><?php  echo "not speccified";?></td>
		</tr>
<?php
$i++;
}
/*
if(isset($_POST['sub'])) {
//echo '<pre>', print_r($_POST), '</pre>';
$district = $_POST['district'];
$state = $_POST['state'];
$block = $_POST['block'];
$panchayat = $_POST['panchayat'];
$village = $_POST['village'];*/

/*echo "$$$$$$".$state;
echo "$$$$$$".$district;
echo "$$$$$$".$block;
echo "$$$$$$".$panchayat;
echo "$$$$$$".$village;*/
/*$sql = "SELECT `state` FROM `state` WHERE `id`= $state";
$sql1 = "SELECT `district` FROM `district` WHERE `id`= $district";
$sql2 = "SELECT `block` FROM `block` WHERE `id`= $block";
$sql3 = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id`= $panchayat";
$sql4 = "SELECT `village` FROM `village` WHERE `id`= $village";*/
/*echo '<pre>',$sql,'</pre>';
echo '<pre>',$sql1,'</pre>';
echo '<pre>',$sql2,'</pre>';
echo '<pre>',$sql3,'</pre>';
echo '<pre>',$sql4,'</pre>';*/
/*$output = mysql_query($sql,$connect);
$output1 = mysql_query($sql1,$connect);
$output2 = mysql_query($sql2,$connect);
$output3 = mysql_query($sql3,$connect);
$output4 = mysql_query($sql4,$connect);*/
 
//print_r($output);
/*$row = mysql_num_rows($output1);

$i = 0;
while($i<$row){
//echo"####";
$result1= mysql_fetch_assoc($output1);
//print_r($result1);
$i++;
}
$result= mysql_fetch_assoc($output);
//print_r($result);
//echo "<br/>";
$result2= mysql_fetch_assoc($output2);
//print_r($result2);
//echo "<br/>";
$result3= mysql_fetch_assoc($output3);
//print_r($result3);
//echo "<br/>";
$result4= mysql_fetch_assoc($output4);
//print_r($result4);
//echo "<br/>";
//echo  $result4["village"];
$track_state = $result["state"];
$track_district = $result1["district"];
$track_block = $result2["block"];
$track_panchayat = $result3["panchayat"];
$track_village = $result4["village"];
$address = $track_state.' '.$track_district.' '.$track_block.' '.$track_panchayat.' '.$track_village;
//echo "<br/>address =".$address;
$data = "SELECT 'id', `name`, `designation`, `affiliation`, `category`, `Phone` FROM `contact_master` WHERE `village` ='".$track_village."'";

$get_data = mysql_query($data);

while($result_contact = mysql_fetch_assoc($get_data)){
	//echo '<pre>',print_r($result_contact),'</pre>';
	?>
	
	<script>
		document.getElementById('tl').style.display = 'table';
        
        </script>
		<tr>
		<td><?php  echo $result_contact["name"]  ?></td>
		<td><?php  echo $address  ?></td>
		<td><?php  echo $result_contact["designation"]?></td>
		<td><?php  echo $result_contact["affiliation"]?></td>
		<td><?php  echo $result_contact["Phone"]?></td>
		<td><?php  echo $result_contact["category"]?></td>
		</tr>
	<?php
	//echo "name = " .$result_contact["name"]. "degignation = " .$result_contact["designation"];
}

}*/
?>	   
</table>
</div>
</div>
<section class="col col-6 col-xs-6">
						<input type="submit" class="button" name = "Export" id = "Export" value="Export">
						<!--<input type="submit" value="Submit">-->
						

</section>
<section class="col col-6 col-xs-6">
						<input type="submit" class="button" name = "Filter" id = "Filter" value="Filter">
						<!--<input type="submit" value="Submit">-->
						

</section>				

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
