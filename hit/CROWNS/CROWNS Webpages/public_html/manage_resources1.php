
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
				<li> <a href="logout.php" class="dropdown-toggle"><i class="fa fa-money"></i> LogOut</a></li>
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
      
        <ul class="nav navbar-nav">
        
        <li><a href="agency.php" class="dropdown-toggle"><i class="fa fa-home"></i> Home</a></li>
        <li> <a href="impcon_agency.php" class="dropdown-toggle"><i class="fa fa-star"></i> Important Contacts</a></li>
        <li> <a href="helpme_agency.php" class="dropdown-toggle"><i class="fa fa-medkit"></i> Help Me</a></li>
        <li> <a href="emergency_agency.php" class="dropdown-toggle"><i class="fa fa-flag"></i> Report an Emergency</a></li>
        <li> <a href="SearchVictim_agency.php" class="dropdown-toggle"><i class="fa fa-map-marker"></i> Locate Missing Person</a></li>
        <li> <a href="MySess_Check.php" class="dropdown-toggle"><i class="fa fa-money"></i> Donate</a></li>
        <?php  if(isset($_SESSION['username'])){  ?>
        <li> <a href="logout.php" class="dropdown-toggle"><i class="fa fa-money"></i> LogOut</a></li>
        <?php }
		else {?>
         <li> <a href="MyLogin.php" class="active"><i class="fa fa-money"></i> LogIn</a></li> <?php  } ?>
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
<style type = "text/css">
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
		<!--		<tr class="table-list">
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
<style type = "text/css">
.scrollit {
    overflow:scroll;
    height:400px;
	width: 900px;
}

</style>      
      <div class="three_fourth last">
    <form action = "filter.php" method = "POST">  
        <div class="container" id = "tl" style="display: table;">
<h3 style="background-color:#000; color:#FFF; text-align:center; " id="tblHd"><strong>Requested Resources</strong></h3>
		<div class="scrollit">
		
        <table id = "dataTable" name = "tbl" width="100%" align="center" >
		<thead> 
        <tr>
            <th>
			<h3>Request<br>Id</h3>
			</th>
			<th>
			<h3>Requested<br>By</h3>
			</th>
			<th>
			<h3>Contact<br>No</h3>
			</th>
			<th>
			<h3>Affiliation</h3>
			</th>
			<th>
			<h3>Resource<br>Name</h3>
			</th>
			<th>
			<h3>Quantity</h3>
			</th>
			<th>
			<h3>Importance</h3>
			</th>
			<th>
			<h3>Requisition<br>Date</h3>
			</th>
			<th>
			<h3>Location</h3>
			</th>
			<th>
			<h3>Status</h3>
			</th>
			

        </tr>
		</thead>
   
<?php
$sql = "SELECT * FROM `resource_request`";
//$result = mysql_query($sql,$connect);
$result = $conn->query($sql);
//$row = mysql_num_rows($result);
$row = $result->num_rows;

$i = 0;
while($i<$row){
//$output= mysql_fetch_assoc($result);
$output= $result->fetch_assoc();
//echo print_r($output);
$state = $output['state'];
$sql_state = "SELECT `state` FROM `state` WHERE `id`= $state";
//$output_state = mysql_query($sql_state,$connect);
$output_state = $conn->query($sql_state);
//$result_state= mysql_fetch_assoc($output_state);
if($output_state->num_rows>0){
$result_state= $output_state->fetch_assoc();
}
$district = $output['district'];
$sql_district = "SELECT `district` FROM `district` WHERE `id`= $district";
//$output_district = mysql_query($sql_district,$connect);
$output_district = $conn->query($sql_district);
//$result_district= mysql_fetch_assoc($output_district);
if($output_district->num_rows>0){
$result_district= $output_district->fetch_assoc();
}
//echo $result_district['district'];

$block = $output['block'];
$sql_block = "SELECT `block` FROM `block` WHERE `id`= $block";
//$output_block = mysql_query($sql_block,$connect);
$output_block = $conn->query($sql_block);
//$result_block = mysql_fetch_assoc($output_block);
if($output_block->num_rows>0){
$result_block = $output_block->fetch_assoc();
}
//echo $result_block['block'];

$panchayat = $output['panchayat_municipality'];
//echo $panchayat;
$sql_panchayat = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id`= $panchayat";
//$output_panchayat = mysql_query($sql_panchayat,$connect);
$output_panchayat = $conn->query($sql_panchayat);
//$result_panchayat = mysql_fetch_assoc($output_panchayat);
if($output_panchayat->num_rows>0){
$result_panchayat = $output_panchayat->fetch_assoc();
}
//echo $result_panchayat['panchayat'];


$village = $output['village_area'];
//echo $village;
$sql_village = "SELECT `village` FROM `village` WHERE `id`= $village";
//$output_village = mysql_query($sql_village,$connect);
$output_village = $conn->query($sql_village);
//$result_village = mysql_fetch_assoc($output_village);
if($output_village->num_rows>0){
$result_village = $output_village->fetch_assoc();
}
//echo print_r($result_village);
//echo "***".$result_village['village']."**";
$address = $result_state['state']." ". $result_district['district']." ".$result_block['block']." ".$result_panchayat['panchayat']." ".$result_village['village'];
//echo $address;die;
?>
		
<!--		<tbody id="tbodyid">-->
		<tr>
			<td align= "CENTER"><?php  echo $output["Req_id"];?></td>
			<td align= "CENTER"><?php  echo $output["requested_by"];?></td>
			<td align= "CENTER"><?php  echo $output["contact_no"];?></td>
			<td align= "CENTER"><?php  echo $output["Affiliation"];?></td>
			<td align= "CENTER"><?php  echo $output["resource_name"];?></td>
			<td align= "CENTER"><?php  echo $output["quantity"];?></td>
			<td align= "CENTER"><?php  echo $output["importance"];?></td>
			<td align= "CENTER"><?php  echo $output["Requisition_Date"];?></td>
			<td align= "CENTER"><?php  echo $address;?></td>
			<td align= "CENTER"><?php  echo "not speccified";?></td>
		</tr>
<!--		</tbody>-->
<?php
$i++;
}

?>	   
</table>

</div>


<!--<section class="col col-6 col-xs-6">-->
<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script>
<!--<script type="text/javascript" src="http://www.kunalbabre.com/projects/table2CSV.js" > </script> -->
<!--<script type="text/javascript" src="js/tabletocsv/table2CSV.js"> </script> 
<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" ></script>

<script type="text/javascript" src="js/tabletocsv/html2CSV.js" ></script>-->
				<!--		<input type="submit" class="button" name = "Export" id = "btnExport" value="Export" onclick="$('#dataTable').table2CSV({header:['id','name','NO','Affiliation','resource_name','Quantity','Importance','Requisition Date','Location','Status']})">-->
				<!--		<input type="submit" class="button" name = "Export" id = "btnExport" value="Export" onclick="$('#dataTable').table2CSV();">-->
						<!--<input type="submit" value="Submit">-->
						<section class="col col-6 col-xs-6">
						 <a href="javascript:void(0);" id="exportCSV" style="text-decoration:none;color:#000;background-color:#ddd;border:1px solid #ccc;padding:8px;">Export</a>
						<!--<input type="submit" class="button" name = "Export"  value = "Export">-->
						</section>
						<section class="col col-6 col-xs-6">
						<!--<a id="filter" style="text-decoration:none;color:#000;background-color:#ddd;border:1px solid #ccc;padding:8px;">Filter</a>-->
						<input type="submit" value="Filter">
						</section>	

<!--</section>-->
<script type = "text/javascript">

/*$(document).ready(function () {
        $("#btnExport").click(function () {
            $("#dataTable").btechco_excelexport({
                containerid: "dataTable"
               , datatype: $datatype.Table
            });
        });
    });*/

function exportFuntion(){
	

}

$(document).ready(function () {

	function exportTableToCSV($table, filename) {
    console.log ($table); 
        var $rows = $table.find('tr:has(th),tr:has(td)'),
   
            // Temporary delimiter characters unlikely to be typed by keyboard
            // This is to avoid accidentally splitting the actual contents
            tmpColDelim = String.fromCharCode(11), // vertical tab character
            tmpRowDelim = String.fromCharCode(0), // null character
    
            // actual delimiter characters for CSV format
            colDelim = '","',
            rowDelim = '"\r\n"',
    
            // Grab text from table into CSV formatted string
            csv = '"' + $rows.map(function (i, row) {
				
                var $row = $(row), $cols = $row.find('th,td');
				console.log ($row);
                return $cols.map(function (j, col) {
                    var $col = $(col), text = $col.text();
					console.log ($col);
                    return text.replace(/"/g, '""'); // escape double quotes
    
                }).get().join(tmpColDelim);
    
            }).get().join(tmpRowDelim)
                .split(tmpRowDelim).join(rowDelim)
                .split(tmpColDelim).join(colDelim) + '"',
    
            
    
            // Data URI
            csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);
            
            console.log(csv);
            
        	if (window.navigator.msSaveBlob) { // IE 10+
        		//alert('IE' + csv);
        		window.navigator.msSaveOrOpenBlob(new Blob([csv], {type: "text/plain;charset=utf-8;"}), "csvname.csv")
        	} 
        	else {
        		$(this).attr({ 'download': filename, 'href': csvData, 'target': '_blank' }); 
        	}
    }
    
    // This must be a hyperlink
    $("#exportCSV").on('click', function (event) {
    	exportTableToCSV.apply(this, [$('#dataTable'), 'export.csv']);
        
        // IF CSV, don't do event.preventDefault() or return false
        // We actually need this to be a typical hyperlink
    });

});
</script>	

</div>			
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
