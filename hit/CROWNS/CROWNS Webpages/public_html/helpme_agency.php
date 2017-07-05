<?php
//include("connect.php");	
include("connect.inc.php");	
//mysql_select_db('u105941622_crown');
$query="SELECT * FROM state";
//$result=mysql_query($query);
$result=$conn->query($query);
?>
<?php
session_start();
function check_session(){
if(!isset($_SESSION['firstname']))
header("location:index.php");
}	
check_session();
if (isset($_GET['flag']))
$flag = $_GET['flag'];
else
$flag = false;	
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en-gb" class="no-js"> 
  <!--<![endif]-->
  <head>
    <title>CROWNS - Crowdsourced Interactive Information System for Disaster Management
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
    <link rel="stylesheet" href="css/marquee.css" type="text/css"/>  
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script language="javascript" type="text/javascript">
      function getXMLHTTP() {
        //fuction to return the xml http object
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
            }
            ,
            function(response) {
              var html = '<option value="">Select District</option>';
              var data = JSON.parse(response);
              $.each(data, function (i, obj) {
                html += '<option value="'+obj.id+'">'+obj.district+'</option>';
              }
                    );
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
            }
            ,
            function(response) {
              var html = '<option value="">Select Block</option>';
              var data = JSON.parse(response);
              $.each(data, function (i, obj) {
                html += '<option value="'+obj.id+'">'+obj.block+'</option>';
              }
                    );
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
            }
            ,
            function(response) {
              var html = '<option value="">Select Panchayat</option>';
              var data = JSON.parse(response);
              $.each(data, function (i, obj) {
                html += '<option value="'+obj.id+'">'+obj.panchayat+'</option>';
              }
                    );
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
            }
            ,
            function(response) {
              var html = '<option value="">Select Village</option>';
              var data = JSON.parse(response);
              $.each(data, function (i, obj) {
                html += '<option value="'+obj.id+'">'+obj.village+'</option>';
              }
                    );
              $('#village').html(html);
            }
          );
        }
      }
    </script>
    <style>
      #dataTable {
        border: 1px solid black;
        margin-top: 10px;
      }
      #dataTable tr, #dataTable th, #dataTable td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      #dataTable h3{
        font-size: 20px;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class="site_wrapper">
      <div class="clearfix">
      </div>
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
//print_r($result_data);	  
$vol_name = $result_data["firstname"];
$vol_lname = $result_data["lastname"];
$address = $result_data["landmark"];
$con_no = $result_data["phone"];
$state = $result_data["state"];;
$district = $result_data["district"];;
$block = $result_data["block"];;
$panchayat = $result_data["panchayat"];;
$village = $result_data["village"];;
$role_select = $result_data["role"];
// echo $result_data["role"];
//echo $role_select;
//echo $vol_name;
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
                    <li> 
                      <a href="logout.php" class="dropdown-toggle">
                        <i class="fa fa-unlock">
                        </i> LogOut
                      </a>
                    </li>
                    <?php }
else {?>
                    <li> 
                      <a href="MyLogin.php" class="dropdown-toggle">
                        <i class="fa fa-lock">
                        </i> LogIn
                      </a>
                    </li> 
                    <li> 
                      <a href="MyRegister.php" class="dropdown-toggle">
                        <i class="fa fa-edit">
                        </i> Register
                      </a>
                    </li> 
                    <?php  } ?>
                    <li>
                      <a href="mailto:info@yourdomain.com">
                        <i class="fa fa-envelope">
                        </i> info@crowns.com
                      </a>
                    </li>
                    <li>
                      <i class="fa fa-phone">
                      </i> +91 123 456 7890
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook">
                        </i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter">
                        </i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-google-plus">
                        </i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-linkedin">
                        </i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-flickr">
                        </i>
                      </a>
                    </li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <?php
if(($count_check>0)&&($role_select == 'Volunteers')){?>
                    <li class="link">
                      <a href="#"><i class="fa fa-unlock"></i><?php echo $_SESSION['firstname'];?></a>
                    </li>
                    <strong style="color: red;">
                      <?php echo "<strong>". $count_check."</strong>"; ?>
                    </strong>
                    <!--		<li class="link"><a href="#"><i style="color: red;"></i>  Noti : <?php// echo "<strong>". $count_check."</strong>"; ?></a></li>-->
                    <?php	}
else{?>
                    <li class="link">
                      <a href="#">
                        <i class="fa fa-unlock">
                        </i> 
                        <?php echo $_SESSION['firstname']; ?>
                      </a>
                    </li>	
                    <?php	}	?>
                  </ul>
                </div>
                <!-- end right social links -->
              </div>
            </div>
          </div>
        </div>
        <!-- end top navigation -->
        <div id="trueHeader">
          <div class="wrapper">
            <div class="container">
              <!-- Logo -->
              <div class="logo">
                <a href="index.php" id="logo">
                </a>
              </div>
              <!-- Menu -->
              <div class="menu_main">
                <div class="navbar yamm navbar-default">
                  <div class="container">
                    <div class="navbar-header">
                      <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > 
                        <span>Menu
                        </span>
                        <button type="button" > 
                          <i class="fa fa-bars">
                          </i>
                        </button>
                      </div>
                    </div>
                    <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
                      <ul class="nav navbar-nav">
                        <?php  if($role_select == 'Agencies'){// echo "hi";?>
                        <li>
                          <a href="agency.php" class="dropdown-toggle">
                            <i class="fa fa-home">
                            </i> Home
                          </a>
                        </li>
                        <?php	}
else {
if($role_select == 'Volunteers'){// echo "hello";?>
                        <li>
                          <a href="volunteer.php" class="dropdown-toggle">
                            <i class="fa fa-home">
                            </i> Home
                          </a>
                        </li>
                        <?php	}
else{?>
                        <li>
                          <a href="admin.php" class="dropdown-toggle">
                            <i class="fa fa-home">
                            </i> Home
                          </a>
                        </li>
                        <?php	}
}?>
                        <li> 
                          <a href="impcon_agency.php" class="dropdown-toggle">
                            <i class="fa fa-star">
                            </i> Important Contacts
                          </a>
                        </li>
                        <li> 
                          <a href="helpme_agency.php" class="active">
                            <i class="fa fa-medkit">
                            </i> Help Me
                          </a>
                        </li>
                        <li> 
                          <a href="emergency_agency.php" class="dropdown-toggle">
                            <i class="fa fa-flag">
                            </i> Report an Emergency
                          </a>
                        </li>
                        <li> 
                          <a href="SearchVictim_agency.php" class="dropdown-toggle">
                            <i class="fa fa-map-marker">
                            </i> Locate Missing Person
                          </a>
                        </li>
                        <li> 
                          <a href="MySess_Check.php" class="dropdown-toggle">
                            <i class="fa fa-money">
                            </i> Donate
                          </a>
                        </li>
                        <!--        <?php//  if(isset($_SESSION['username'])){  ?>
<li> <a href="logout.php" class="dropdown-toggle"><i class="fa fa-money"></i> LogOut</a></li>
<?php //}
//else {?>
<li> <a href="MyLogin.php" class="dropdown-toggle"><i class="fa fa-money"></i> LogIn</a></li> <?php//  } ?>-->
                      </ul>
                      <!--		<div id="wrap">
<form action="index.php" autocomplete="on">
<input id="search" name="search" type="text" placeholder=""><input id="search_submit" value="search" type="submit">
</form>
</div>-->
                    </div>
                  </div>
                </div>
              </div>
              <!-- end menu -->
            </div>	
          </div>
        </div>
      </header>
      <div class="clearfix">
      </div>
      <div class="page_title">
        <div class="container">
          <div class="title">
            <h1>Help Me
            </h1>
          </div>
        </div>
      </div>
      <!-- end page title --> 
      <div class="clearfix">
      </div>
      <div class="container">
        <div class="content_fullwidth">
          <div class="one_fourth">
            <div class="clearfix">
            </div>
            <h4>
              <strong>
              </strong>
            </h4>
            <table class="table-style" id="agency_table" >
              <!--	<tr class="table-list">
<td width='50%'><b><a href="admin.php">Manage Notifications</a></b></td>
</tr>-->
              <tr class="table-list">
                <td width='50%'>
                  <b>
                    <a href="mancon.php">Manage Contacts
                    </a>
                  </b>
                </td>
              </tr>
              <!--				<tr class="table-list">
<td width='50%'><b><a href="manfeed.php">Publish Information</a></b></td>
</tr>-->
              <tr class="table-list">
                <td width='50%'>
                  <b>
                    <a href="control.php">View Reports
                    </a>
                  </b>
                </td>
              </tr>
              <!--				<tr class="table-list">
<td width='50%'><b><a href="managn.php">Manage Agencies</a></b></td>
</tr>-->
              <tr class="table-list">
                <td width='50%'>
                  <b>
                    <a href="manage_volunteers.php">Manage Volunteers
                    </a>
                  </b>
                </td>
              </tr>
              <tr class="table-list">
                <td width='50%'>
                  <b>
                    <a href="req_resources.php">Request Resource
                    </a>
                  </b>
                </td>
              </tr>
              <tr class="table-list">
                <td width='50%'>
                  <b>
                    <a href="manage_resources.php">Manage Resources
                    </a>
                  </b>
                </td>
              </tr>
              <tr class="table-list">
                <td width='50%'>
                  <b>
                    <a href="view_donation.php">View Donation
                    </a>
                  </b>
                </td>
              </tr>
              <!--				<tr class="table-list">
<td width='50%'><b><a href="mandon.php">Manage Donations</a></b></td>
</tr>-->
              <tr class="table-list">
                <td width='50%'>
                  <b>
                    <a href="rapid.php">RAPID
                    </a>
                  </b>
                </td>
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
                <td width='50%'>
                  <b>
                    <a href="mancon.php">Manage Contacts
                    </a>
                  </b>
                </td>
              </tr>
              <!--				<tr class="table-list">
<td width='50%'><b><a href="manfeed.php">Publish Information</a></b></td>
</tr>-->
              <tr class="table-list">
                <td width='50%'>
                  <b>
                    <a href="control.php">View Reports
                    </a>
                  </b>
                </td>
              </tr>
              <!--				<tr class="table-list">
<td width='50%'><b><a href="managn.php">Manage Agencies</a></b></td>
</tr>-->
              <tr class="table-list">
                <td width='50%'>
                  <b>
                    <a href="viewMsg.php">View Meaasges
                    </a>
                  </b>
                </td>
              </tr>
              <tr class="table-list">
                <td width='50%'>
                  <b>
                    <a href="req_resources.php">Request Resource
                    </a>
                  </b>
                </td>
              </tr>
              <!--		<tr class="table-list">
<td width='50%'><b><a href="manage_resources.php">Manage Resources</a></b></td>
</tr>-->
              <tr class="table-list">
                <td width='50%'>
                  <b>
                    <a href="view_donation.php">View Donation
                    </a>
                  </b>
                </td>
              </tr>
              <!--				<tr class="table-list">
<td width='50%'><b><a href="mandon.php">Manage Donations</a></b></td>
</tr>-->
              <tr class="table-list">
                <td width='50%'>
                  <b>
                    <a href="rapid.php">RAPID
                    </a>
                  </b>
                </td>
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
                <th width='50%'>
                  <b>
                    <a href="admin.php"> Manage Notifications
                      </font>
                    </a>
              </b>
              </th>
            </tr>
          <tr class="table-list">
            <td width='50%'>
              <b>
                <a href="mancon.php">Manage Contacts
                </a>
              </b>
            </td>
          </tr>
          <tr class="table-list">
            <td width='50%'>
              <b>
                <a href="manfeed.php">Publish Information
                </a>
              </b>
            </td>
          </tr>
          <tr class="table-list">
            <td width='50%'>
              <b>
                <a href="control.php">View Reports
                </a>
              </b>
            </td>
          </tr>
          <tr class="table-list">
            <td width='50%'>
              <b>
                <a href="managn.php">Manage Agencies
                </a>
              </b>
            </td>
          </tr>
          <tr class="table-list">
            <td width='50%'>
              <b>
                <a href="manage_volunteers.php">Manage Volunteers
                </a>
              </b>
            </td>
          </tr>
          <tr class="table-list">
            <td width='50%'>
              <b>
                <a href="manage_resources.php">Manage Resources
                </a>
              </b>
            </td>
          </tr>
          <tr class="table-list">
            <td width='50%'>
              <b>
                <a href="mandon.php">Manage Donations
                </a>
              </b>
            </td>
          </tr>
          <tr class="table-list">
            <td width='50%'>
              <b>
                <a href="rapid.php">RAPID
                </a>
              </b>
            </td>
          </tr>
          <tr class="table-list">
            <td width='50%'>
              <b>
                <a href="mansms.php">Manage Interactive SMS System
                </a>
              </b>
            </td>
          </tr>
          </table>
        <script type="text/javascript">
          $(document).ready(function(){
            <?php if($role_select == 'Agencies'){
              ?>
                $("#volunteer_table").hide();
              $("#admin_table").hide();
              console.log("Hello");
              <?php }
            else{
              if($role_select == 'Admin'){
                ?>
                  console.log("**");
                $("#agency_table").hide();
                $("#volunteer_table").hide();
                <?php }
              else{
                ?>	
                  console.log("Hi");
                $("#agency_table").hide();
                $("#admin_table").hide();
                <?php }
            }
            ?>
          }
            );
        </script>
      </div> 
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
	
/*	if(!formObj.lastname.value.match(name)) {  
		msgTxt += "\nNot a valid last name";  
		counter++; 
	} */
	
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

      <form action="helpme_insert.php" id="sky-form" name = "form1" method="post" class="sky-form" onsubmit = "return validateForm(this);" style="<?php if($flag == true){echo 'display: none;';} else '' ;?>">
        <div class="one_third">
          <header>
            <b>Enter Your Details
            </b>
          </header>
          <fieldset>
            <div class="row">
              <section class="col col-6">
                <label class="input">
                  <input type="text" name="firstname" placeholder="First name" value = "<?php echo $vol_name;?>" required>
                </label>
              </section>
              <section class="col col-6">
                <label class="input">
                  <input type="text" name="lastname" placeholder="Last name" value = "<?php echo $vol_lname;?>">
                </label>
              </section>
            </div>
            <section>
              <label class="input">
                <input type="text" name="address" placeholder="PIN Code" value = "<?php echo $address;?>" required>
              </label>
            </section>
            <!--					<section class="col col-6">
<label class="input">
<input type="text" name="landmark" placeholder="Landmark">
</label>
</section>-->
            <?php
$sql_state = "SELECT `state` FROM `state` WHERE `id`= $state";
//echo $sql_state;
//$output_state = mysql_query($sql_state,$connect);
$output_state = $conn->query($sql_state);
//$agency_state= mysql_fetch_array($output_state);
$agency_state= $output_state->fetch_array();
$state = $agency_state["state"];
//echo $state;
//echo print_r ($agency_state);
//echo print_r ($agency_state);
$sql_district = "SELECT `district` FROM `district` WHERE `id`= $district";
//$output_district = mysql_query($sql_district,$connect);
//$agency_district= mysql_fetch_array($output_district);
$output_district = $conn->query($sql_district);
$agency_district= $output_district->fetch_array();
$district_fetch = $agency_district["district"];
//echo print_r ($agency_district);
//echo $result_district['district'];
$sql_block = "SELECT `block` FROM `block` WHERE `id`= $block";
//$output_block = mysql_query($sql_block,$connect);
//$agency_block = mysql_fetch_assoc($output_block);
$output_block = $conn->query($sql_block);
$agency_block = $output_block->fetch_assoc();
$block_fetch = $agency_block["block"];
//echo $result_block['block'];
//echo $panchayat;
$sql_panchayat = "SELECT `panchayat` FROM `panchayat_municipalaty` WHERE `id`= $panchayat";
//$output_panchayat = mysql_query($sql_panchayat,$connect);
//$agency_panchayat = mysql_fetch_assoc($output_panchayat);
$output_panchayat = $conn->query($sql_panchayat);
$agency_panchayat = $output_panchayat->fetch_assoc();
//echo print_r ($agency_panchayat);
$panchayat_fetch = $agency_panchayat["panchayat"];
//echo "$$$$$$$$$$$$".$pancha;
//echo $result_panchayat['panchayat'];
//echo $village;
$sql_village = "SELECT `village` FROM `village` WHERE `id`= $village";
$output_village = $conn->query($sql_village);
$agency_village = $output_village->fetch_assoc();
$village_fetch = $agency_village['village'];
?>
            <section>
              <label class="input">
                <i class="icon-append icon-phone">
                </i>
                <input type="text" name="con_number" placeholder="Contact No" value = "<?php echo $con_no;?>" required>
                <b class="tooltip tooltip-bottom-right">Provide your phone no
                </b>
              </label>
            </section>
          </fieldset>
          <?php
$query="SELECT * FROM state";
//$result=mysql_query($query);
$result=$conn->query($query);
?>	
          <fieldset>  
            <div class="row">
              <section class="col col-6">
                <label class="select" id = "sel1">
                  <select name="state" onChange="getDistrict(this.value)" required>
                   <!-- <option value=""><?php// echo $state;?></option>-->
				   <option value="">Select State</option>
                    <?php while ($row=$result->fetch_array()) { ?>
                    <option value=<?php echo $row['id']?>><?php echo $row['state']?></option>
                  <?php } ?>
                  </select>
                <i>
                </i>
                </label>
              </section>
            <section class="col col-6">
              <label class="select" id = "sel2" >
                <select name="district" class="district" id="district" onChange="getBlock(this.value)" required>
				<option value="">Select District</option>
        <!--          <option value=""><?php echo $district_fetch;?></option>-->
                  <?php //while ($row=mysql_fetch_array($result)) { ?>
                  <?php while ($row=$result->fetch_array()) { ?>
                  <option value=
                          <?php echo $row['id']?>>
                  <?php echo $row['district']?>
                  </option>
                <?php } ?>
                </select>
              <i>
              </i>
              </label>
            </section>
          <section class="col col-6">
            <label class="select" id = "sel3">
              <select name="block" class = "block" id = "block"  onChange="getPanchayat(this.value)" required>
				<option value="">Select Block</option>
        <!--        <option value="<?php// echo $block_fetch;?>"> <?php //echo $block_fetch;?></option>-->
                <?php// while ($row=mysql_fetch_array($result)) { ?>
                <?php while ($row=$result->fetch_array()) { ?>
                <option value=
                        <?php echo $row['id']?>>
                <?php echo $row['block']?>
                </option>
              <?php } ?>
              </select>
            <i>
            </i>
            </label>
          </section>
        <section class="col col-6">
          <label class="select" id = "sel4">
            <select name="panchayat" class = "panchayat" id = "panchayat" onChange="getVillage(this.value)" required>
<!--              <option value="<?php echo $panchayat_fetch;?>"><?php echo $panchayat_fetch;?></option>	-->
				<option value="">Select Panchayat </option>
              <?php// while ($row=mysql_fetch_array($result)) { ?>
              <?php while ($row=$result->fetch_array()) { ?>
              <option value=
                      <?php echo $row['id']?>>
              <?php echo $row['panchayat']?>
              </option>
            <?php } ?>
            </select>
          <i>
          </i>
          </label>
        </section>
    </div>
    <section >
      <label class="select" id = "sel5">
        <select name="village" class = "village" id = "village" required>
		 <option value="">Select Village</option>
<!--          <option value="<?php// echo $village_fetch;?>"><?php// echo $village_fetch;?></option>-->
          <?php// while ($row=mysql_fetch_array($result)) { ?>
          <?php while ($row=$result->fetch_array()) { ?>
          <option value=
                  <?php echo $row['id']?>>
          <?php echo $row['village']?>
          </option>
        <?php } ?>
        </select>
      <i>
      </i>
      </label>
    </section>
  </fieldset>        
</div>
<!-- end section -->
<div class="one_third" style="margin-left:35px;">
  <header> 
    <label style="cursor: pointer;">
      <strong>Request Resource</strong>
    </label>
    <input type="radio" name="gender" id = "resource" value="resour" class="sky-form" />
    <label style="margin-right:7%; cursor: pointer;">
      <strong>Request Service</strong>
    </label>
    <input type="radio" name="gender" id = "resource2" value="service" class="sky-form" />
  </header>
  <fieldset>
    <div class="row">
      <section class="col col-6 col-xs-6">
        <label class="select" id = "sel" style="display:none">
          <select name="resource_1" id = "resource1" style="display:none">
            <option value="0" selected disabled>Select Resource
            </option>
            <option value="Water">Water
            </option>
            <option value="Food">Food
            </option>
            <option value="Cloth">Cloth
            </option>
          </select>
          <i>
          </i>
        </label>
      </section>
      <section class="col col-6 col-xs-6" id = "sel12">
        <label class="select" id = "sel11" style="display:none">
          <select name="unit_1" id="unit1" style="display:none">
            <option value="0" selected disabled>Select Unit
            </option>
            <option value="ltr" id = "ltr" style="display:none">ltr
            </option>
            <option value="gallon" id = "gallon" style="display:none">gallon
            </option>
            <option value="kg" id = "kg" style="display:none">kg</option>
            <option value="quintal" id = "quintal" style="display:none">quintal</option>
			</option>
            <option value="packets" id = "packets" style="display:none">Packets
            </option>
            <option value="other" id = "other" style="display:none">Other
            </option>
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
        <label class="label" id = "spec" style="display:none">Specify Quantity
        </label>
        <label class="input"> 
           <input type="number" name="quan" id="quan" min = "1" onkeyup="myFunction()" style="display:none">
        </label>
      </section>
      <section class="col col-6 col-xs-6">
        <label class="label" id = "other1" style="display:none">Specify Other With Amount
        </label>
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
          //document.getElementById('sel29').style.display = 'block';
        }
        else{
          document.getElementById('sel44').style.display = 'none';
          document.getElementById('sel55').style.display = 'none';
          //document.getElementById('sel29').style.display = 'none';
          document.getElementById('message').style.display = 'none';
        }
      }
	 
    </script>					
    <div class="row">
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
          <i></i>
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
        <h3 style="background-color:#000; color:#FFF; text-align:center; display:none;" id="tblHd">
          <strong>REQUESTED RESOURCES</strong>
        </h3>
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
         <input type="submit" class="button" name = "sub" id = "sub" style = "display:none" value="Submit" >
          <!--<input type="submit" value="Submit">-->
        </section>
        </div>	
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

</div>
<!-- end content area -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js">
</script>
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
<div class="clearfix margin_top3">
</div>
<div class="footer_graph">
</div>
<div class="clearfix">
</div>
<div class="footer1">
  <div class="container">
    <div class="clearfix divider_dashed1">
    </div>
    <div class="one_fourth animate" data-anim-type="fadeInUp">
      <ul class="faddress">
        <h4 class="lmb">Address
        </h4>
        <li>
          <i class="fa fa-map-marker fa-lg">
          </i>&nbsp; Kolkata
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;West-bengal,India
        </li>
        <li>
          <i class="fa fa-phone">
          </i>&nbsp; +91 -234 -456 -7890
        </li>
        <li>
          <i class="fa fa-print">
          </i>&nbsp; +91 -234 -456 -7890
        </li>
        <li>
          <a href="mailto:info@yourdomain.com">
            <i class="fa fa-envelope">
            </i> info@crowns.com
          </a>
        </li>
        <li>
          <img src="images/footer-wmap.png" alt="" />
        </li>
      </ul>
    </div>
    <!-- end address -->
    <div class="one_fourth animate" data-anim-type="fadeInUp">
      <div class="qlinks">
        <h4 class="lmb">Quick Links
        </h4>
        <ul>
          <li>
            <a href="#">
              <i class="fa fa-angle-right">
              </i> Home Page 
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-angle-right">
              </i> Important Contracts
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-angle-right">
              </i> Help Me
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-angle-right">
              </i> emergency.php Emergency
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-angle-right">
              </i> Locate Victim 
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-angle-right">
              </i> Donate
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- end links -->
    <div class="one_fourth animate" data-anim-type="fadeInUp">
      <div class="siteinfo">
        <h4 class="lmb">About CROWNS
        </h4>
        <p>CROWNS is a simple and secure multiplatform (web and app-based) Disaster Management System that provides decision support to disaster management authorities through active involvement of the “crowd” at the site of a disaster situation.  
        </p>
        <br />
        <a href="#">Read more 
          <i class="fa fa-long-arrow-right">
          </i>
        </a>
      </div>
    </div>
    <!-- end site info -->
    <div class="one_fourth last animate" data-anim-type="fadeInUp">
      <ul class="faddress">
        <h4 class="lmb"> Office Address
        </h4>
        <li>
          <i class="fa fa-map-marker fa-lg">
          </i>&nbsp; Kolkata
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;West-bengal,India
        </li>
        <li>
          <i class="fa fa-phone">
          </i>&nbsp; +91 -234 -456 -7890
        </li>
        <li>
          <i class="fa fa-print">
          </i>&nbsp; +91 -234 -456 -7890
        </li>
        <li>
          <a href="mailto:info@yourdomain.com">
            <i class="fa fa-envelope">
            </i> info@crowns.com
          </a>
        </li>
        <li>
          <img src="images/footer-wmap.png" alt="" />
        </li>
      </ul>
    </div>
  </div>
  <!-- end footer -->
  <div class="clearfix">
  </div>
  <div class="copyright_info">
    <div class="container">
      <div class="clearfix divider_dashed10">
      </div>
      <div class="one_half animate" data-anim-type="fadeInRight">
        Copyright © 2016 . All rights reserved.  
        <a href="#">Terms of Use
        </a> | 
        <a href="#">Privacy Policy
        </a>
      </div>
      <div class="one_half last">
        <ul class="footer_social_links">
          <li class="animate" data-anim-type="zoomIn">
            <a href="#">
              <i class="fa fa-facebook">
              </i>
            </a>
          </li>
          <li class="animate" data-anim-type="zoomIn">
            <a href="#">
              <i class="fa fa-twitter">
              </i>
            </a>
          </li>
          <li class="animate" data-anim-type="zoomIn">
            <a href="#">
              <i class="fa fa-google-plus">
              </i>
            </a>
          </li>
          <li class="animate" data-anim-type="zoomIn">
            <a href="#">
              <i class="fa fa-linkedin">
              </i>
            </a>
          </li>
          <li class="animate" data-anim-type="zoomIn">
            <a href="#">
              <i class="fa fa-skype">
              </i>
            </a>
          </li>
          <li class="animate" data-anim-type="zoomIn">
            <a href="#">
              <i class="fa fa-flickr">
              </i>
            </a>
          </li>
          <li class="animate" data-anim-type="zoomIn">
            <a href="#">
              <i class="fa fa-youtube">
              </i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end copyright info -->
  <a href="#" class="scrollup">Scroll
  </a>
  <!-- end scroll to top of the page-->
</div>
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="js/universal/jquery.js">
</script>
<!-- style switcher -->
<script src="js/style-switcher/jquery-1.js">
</script>
<script src="js/style-switcher/styleselector.js">
</script>
<!-- animations -->
<script src="js/animations/js/animations.min.js" type="text/javascript">
</script>
<!-- slide panel -->
<script type="text/javascript" src="js/slidepanel/slidepanel.js">
</script>
<!-- mega menu -->
<script src="js/mainmenu/bootstrap.min.js">
</script> 
<script src="js/mainmenu/customeUI.js">
</script> 
<!-- jquery jcarousel -->
<script type="text/javascript" src="js/carousel/jquery.jcarousel.min.js">
</script>
<!-- scroll up -->
<script src="js/scrolltotop/totop.js" type="text/javascript">
</script>
<!-- tabs -->
<script src="js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript">
</script>
<!-- jquery jcarousel -->
<script type="text/javascript">
  (function($) {
    "use strict";
    jQuery(document).ready(function() {
      jQuery('#mycarouselthree').jcarousel();
    }
                          );
  }
  )(jQuery);
</script>
<!-- accordion -->
<script type="text/javascript" src="js/accordion/custom.js">
</script>
<!-- sticky menu -->
<script type="text/javascript" src="js/mainmenu/sticky.js">
</script>
<script type="text/javascript" src="js/mainmenu/modernizr.custom.75180.js">
</script>
<script src="js/form/jquery.form.min.js">
</script>
<script src="js/form/jquery.validate.min.js">
</script>
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
            }
            ,
            email:
            {
              required: true,
              email: true
            }
            ,
            message:
            {
              required: true,
              minlength: 10
            }
          }
          ,
          // Messages for form validation
          messages:
          {
            name:
            {
              required: 'Please enter your name',
            }
            ,
            email:
            {
              required: 'Please enter your email address',
              email: 'Please enter a VALID email address'
            }
            ,
            message:
            {
              required: 'Please enter your message'
            }
          }
          ,
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
        }
      );
    }
     );
  }
  )(jQuery);
</script>
<!-- cubeportfolio -->
<script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js">
</script>
<script type="text/javascript" src="js/cubeportfolio/main.js">
</script>
<script type="text/javascript" src="js/cubeportfolio/main5.js">
</script>
<script type="text/javascript" src="js/cubeportfolio/main6.js">
</script>
<!-- carousel -->
<script defer src="js/carousel/jquery.flexslider.js">
</script>
<script defer src="js/carousel/custom.js">
</script>
<!-- lightbox -->
<script type="text/javascript" src="js/lightbox/jquery.fancybox.js">
</script>
<script type="text/javascript" src="js/lightbox/custom.js">
</script>
</body>
</html>
