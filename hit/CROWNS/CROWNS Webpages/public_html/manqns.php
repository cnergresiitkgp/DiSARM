
	<?php
		session_start();
		require 'connect.inc.php';
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
				<li> <a href="emergency.php" class="dropdown-toggle"><i class="fa fa-flag"></i> Report Emergency</a></li>
				<li> <a href="locate.php" class="dropdown-toggle"><i class="fa fa-map-marker"></i> Locate Victim</a></li>
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
					<td width='50%'><b><a href="managn.php">Manage Agencies</a></b></td>
				</tr>
				<tr class="table-list">
					<td width='50%'><b><a href="manage_volunteers_admin.php">Manage Volunteers</a></b></td>
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
					<th width='50%'><b><a href="mansms.php"><font color="#444444"><i class="fa fa-angle-right"></i> Manage Interactive SMS System</font></a></b></th>
				</tr>
			</table>
       
        
      </div>
      
    	<div class="three_fourth last">
    	
    		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    		<script>
				function getRepType(ch)
				{
					var selRep = document.getElementById('cat-list');
					var repT = selRep.value;
					$.ajax(
					{
						type: "POST",
						url: "getRepValue.php",
						data:	{
									category: repT,
									disaster_id: '',
									caller_id: 'questions'
								},
						success: function(data)
							{
								$(ch).html(data);
							}
					}
					);
				}
				function restoreVals()
				{
				  $("#cat-list").val("<?php if(isset($_POST['sel_cat'])) echo $_POST['sel_cat']; else echo ("0");?>");
				  $("#subCat-list").val("<?php if(isset($_POST['sel_subCat'])) echo $_POST['sel_subCat']; else echo ("0");?>");
				  $("#qn").val("<?php if(isset($_POST['qn'])) echo $_POST['qn'];?>");
				  $("#st").val("<?php if(isset($_POST['st'])) echo $_POST['st'];?>");
				  $("#qnType").val("<?php if(isset($_POST['sel_qnType'])) echo $_POST['sel_qnType']; else echo ("0");?>");
				  $("#opa").val("<?php if(isset($_POST['opa'])) echo $_POST['opa'];?>");
				  $("#opb").val("<?php if(isset($_POST['opb'])) echo $_POST['opb'];?>");
				  $("#opc").val("<?php if(isset($_POST['opc'])) echo $_POST['opc'];?>");
				  $("#opd").val("<?php if(isset($_POST['opd'])) echo $_POST['opd'];?>");
				  $("#ope").val("<?php if(isset($_POST['ope'])) echo $_POST['ope'];?>");
				}
			</script>
    	
	        <form method="post" id="sky-form" class="sky-form">
    	    	<header><strong>Manage Questions</strong></header>
    	    	<fieldset>
					<div class="row">
		               	<section class="col col-2">
		               	</section>
		               	<section class="col col-4">
					        <label class="select">
						        <select name="sel_cat" id="cat-list" onChange="getRepType('#subCat-list');">
					                <option value="0" selected disabled>Select Question Category</option>
		        	                <?
		        	        	        $query_catData=$conn->query("SELECT distinct `supercat` FROM `category`");
		        	        	        while($row_cat = $query_catData->fetch_assoc())
										{
											print("<option value='".$row_cat['supercat']."'>".$row_cat['supercat']."</option>");
										}
	            	        	    ?>
		        	            </select>
		        	            <i></i>
			                </label>
			            </section>
		               	<section class="col col-4">
					        <label class="select">
						        <select name="sel_subCat" id="subCat-list">
	            	            	<option value="0" selected disabled>Select Category First</option>
		        	            </select>
		        	            <i></i>
			                </label>
			            </section>
			       </div>
			       <div class="row">
						<section class="col col-5"></section>
		                <input type="submit" class="button" name='fetch' value="Get Questions">
		           </div>
					<div class="row">
		               	<section class="col col-8">
		               		<b>Add Question</b>
			            </section>
			       </div>
					<div class="row">
		               	<section class="col col-6">
							<label class="input">
							    <input type="text" id="qn" name="qn" placeholder="Input Question">
							</label>
					    </section>
		               	<section class="col col-6">
							<label class="input">
					        	<input type="text" id="st" name="st" placeholder="Statement Form of Question">
					        </label>
			            </section>
			       </div>
					<div class="row">
					    <section class="col col-4">
					        <label class="select">
							    <select name="sel_qnType" id="qnType">
							    	<option value="0" selected disabled>Select Question Type</option>
							    	<option value="a">Option-Based</option>
							    	<option value="b">Numeric</option>
							    	<option value="c">Free-Text</option>
							    </select>
							    <i style="top: 10px;height:11px;box-shadow:none;"></i>
					        </label>
			            </section>
		               	<section class="col col-4">
					        <label class="input">
						        <input type="text" id="opa" name="opa" placeholder="Option A">
							</label>
						</section>
		               	<section class="col col-4">
					        <label class="input">
						        <input type="text" id="opb" name="opb" placeholder="Option B">
							</label>
						</section>
			       </div>
					<div class="row">
		               	<section class="col col-4">
					        <label class="input">
						        <input type="text" id="opc" name="opc" placeholder="Option C">
							</label>
						</section>
		               	<section class="col col-4">
					        <label class="input">
						        <input type="text" id="opd" name="opd" placeholder="Option D">
							</label>
						</section>
		               	<section class="col col-4">
					        <label class="input">
						        <input type="text" id="ope" name="ope" placeholder="Option E">
							</label>
						</section>
			       </div>
			       <div class="row">
						<section class="col col-3"></section>
		                <input type="submit" class="button" name='add' value="Add Question">
						<section class="col col-2"></section>
		                <input type="submit" class="button" name='reset' value="Reset Values">
		           </div>
			    </fieldset>
    	
				<?
					if(isset($_POST['reset']))
					{
						unset($_SESSION['manCat']);
						unset($_SESSION['manSubCat']);
						unset($_SESSION['arr']);
						unset($_SESSION['arr_cat']);
						echo("<script type='text/javascript'>document.location = 'manqns.php';</script>");
					}
					//-------------------------------------------add or display------------------------------------------//
					if(isset($_POST['fetch'])||isset($_POST['add']))
					{
						if(isset($_POST['sel_cat']))
						{
							if(isset($_POST['add']))
							{
								if(!($_POST['sel_subCat']=="All"))
								{
									$supCat = $_POST['sel_cat'];
									$subCat = "cat_".$_POST['sel_subCat'];
									//cat_table-row
									$query_num=$conn->query("SELECT `questionid` FROM `$subCat` ORDER BY `questionid` DESC LIMIT 1");
									$qnNum = $query_num->fetch_assoc();
									$prevID = $qnNum['questionid'];
									$num = intval(substr(substr($prevID,0,-1),3));
									$num++;
									$num = substr($_POST['sel_subCat'],0,3).sprintf("%03d", $num);
									if(isset($_POST['sel_qnType']))
									{
										$qType = $_POST['sel_qnType'];
										if(!(empty($_POST['qn'])))
										{
											$qsn = $_POST['qn'];
											if(!(empty($_POST['st'])))
											{
												$stmnt = $_POST['st'];
												if($_POST['sel_qnType']=="a") //options are reqd in the qn
												{
													if(!(empty($_POST['opa'])))
													{
														$opta = $_POST['opa'];
														if(!(empty($_POST['opb'])))
														{
															$optb = $_POST['opb'];
															if(!(empty($_POST['opc'])))
															{
																$optc = $_POST['opc'];
																if(!(empty($_POST['opd'])))
																{
																	$optd = $_POST['opd'];
																	if(!(empty($_POST['ope'])))
																	{
																		//question with five options
																		$opte = $_POST['ope'];
																		$num = $num."f";
																		$conn->query("insert into `$subCat` values('$num',N'$qsn',N'$opta',N'$optb',N'$optc',N'$optd',N'$opte',N'$stmnt')");
																		//add columns in reports
																		$query_rep=$conn->query("SELECT distinct `repname` FROM `catreport` where `supercat`='$supCat'");
																		while($row1 = $query_rep->fetch_assoc())
																		{
																			$query_dis=$conn->query("SELECT distinct `disastertype` FROM `category` where `catname`='$subCat'");
																			while($row = $query_dis->fetch_assoc())
																			{
																				$rep = $row1['repname'].$row['disastertype'];
																				$num = $subCat.$num;
																				$conn->query("ALTER TABLE `$rep` ADD `$num` VARCHAR(100) NOT NULL");
																			}
																		}
																	}
																	else
																	{
																		//question with four options
																		$num = $num."e";
																		$conn->query("insert into `$subCat`(`questionid`,`questiontext`,`optiona`,`optionb`,`optionc`,`optiond`,`repstatement`) values('$num',N'$qsn',N'$opta',N'$optb',N'$optc',N'$optd',N'$stmnt')");
																		//add columns in reports
																		$query_rep=$conn->query("SELECT distinct `repname` FROM `catreport` where `supercat`='$supCat'");
																		while($row1 = $query_rep->fetch_assoc())
																		{
																			$query_dis=$conn->query("SELECT distinct `disastertype` FROM `category` where `catname`='$subCat'");
																			while($row = $query_dis->fetch_assoc())
																			{
																				$rep = $row1['repname'].$row['disastertype'];
																				$num = $subCat.$num;
																				$conn->query("ALTER TABLE `$rep` ADD `$num` VARCHAR(100) NOT NULL");
																			}
																		}
																	}
																}
																else
																{
																	//question with three options
																	$num = $num."a";
																	$conn->query("insert into `$subCat`(`questionid`,`questiontext`,`optiona`,`optionb`,`optionc`,`repstatement`) values('$num',N'$qsn',N'$opta',N'$optb',N'$optc',N'$stmnt')");
																	//add columns in reports
																	$query_rep=$conn->query("SELECT distinct `repname` FROM `catreport` where `supercat`='$supCat'");
																	while($row1 = $query_rep->fetch_assoc())
																	{
																		$query_dis=$conn->query("SELECT distinct `disastertype` FROM `category` where `catname`='$subCat'");
																		while($row = $query_dis->fetch_assoc())
																		{
																			$rep = $row1['repname'].$row['disastertype'];
																			$num = $subCat.$num;
																			$conn->query("ALTER TABLE `$rep` ADD `$num` VARCHAR(100) NOT NULL");
																		}
																	}
																}
															}
															else
															{
																//question with two options
																$num = $num."d";
																$conn->query("insert into `$subCat`(`questionid`,`questiontext`,`optiona`,`optionb`,`repstatement`) values('$num',N'$qsn',N'$opta',N'$optb',N'$stmnt')");
																//add columns in reports
																$query_rep=$conn->query("SELECT distinct `repname` FROM `catreport` where `supercat`='$supCat'");
																while($row1 = $query_rep->fetch_assoc())
																{
																	$query_dis=$conn->query("SELECT distinct `disastertype` FROM `category` where `catname`='$subCat'");
																	while($row = $query_dis->fetch_assoc())
																	{
																		$rep = $row1['repname'].$row['disastertype'];
																		$num = $subCat.$num;
																		$conn->query("ALTER TABLE `$rep` ADD `$num` VARCHAR(100) NOT NULL");
																	}
																}
															}
															echo("<script type='text/javascript'>alert('Question added successfully');</script>");
														}
														else
															echo("<script type='text/javascript'>alert('Option B is missing. Atleast two options are needed');restoreVals();</script>");
													}
													else
														echo("<script type='text/javascript'>alert('Option A is missing. Atleast two options are needed');restoreVals();</script>");
												}
												else //options are not required in the question
												{
													$num = $num.$qType;
													$conn->query("insert into `$subCat`(`questionid`,`questiontext`,`repstatement`) values('$num',N'$qsn',N'$stmnt')");
													//add columns in reports
													$query_rep=$conn->query("SELECT distinct `repname` FROM `catreport` where `supercat`='$supCat'");
													while($row1 = $query_rep->fetch_assoc())
													{
														$query_dis=$conn->query("SELECT distinct `disastertype` FROM `category` where `catname`='$subCat'");
														while($row = $query_dis->fetch_assoc())
														{
															$rep = $row1['repname'].$row['disastertype'];
															$num = $subCat.$num;
															$conn->query("ALTER TABLE `$rep` ADD `$num` VARCHAR(100) NOT NULL");
														}
													}
													echo("<script type='text/javascript'>alert('Question added successfully');</script>");
												}
											}
											else
												echo("<script type='text/javascript'>alert('Please enter the statement form');restoreVals();</script>");
										}
										else
											echo("<script type='text/javascript'>alert('Please enter a question');restoreVals();</script>");
									}
									else
										echo("<script type='text/javascript'>alert('Please select a Question Type');restoreVals();</script>");
								}
								else
									echo("<script type='text/javascript'>alert('Please select a sub-category');restoreVals();</script>");
							}
							else
							{
								//display
								$supCat = $_POST['sel_cat'];
								$_SESSION['manCat'] = $_POST['sel_cat'];
								$_SESSION['manSubCat'] = $_POST['sel_subCat'];
								if($_POST['sel_subCat']=="All")
									$query_cats=$conn->query("SELECT `catname`,`subcatname` FROM `category` where `supercat`='$supCat'");
								else
								{
									$subCt = "cat_".$_POST['sel_subCat'];
									$query_cats=$conn->query("SELECT `catname`,`subcatname` FROM `category` where `supercat`='$supCat' and `catname`='$subCt'");
								}
								echo("<br>");
								echo("<div class=\"row\">");
								echo("<section class=\"col col-8\">");
								echo("<b>Questions - ".$supCat."</b>");
								echo("</section>");
							    echo("</div>");
								$ctr = 0;
								$_SESSION['arr'] = array();
								$_SESSION['arr_cat'] = array();
								while($row = $query_cats->fetch_assoc())
								{
									$cat=$row['catname'];
									$ctname=$row['subcatname'];
									//fetch question ids from individual categories
									$query_ids=$conn->query("SELECT `questionid` FROM `$cat`");
									print("<table class=\"table-style\">");
									print("<tr class=\"table-list\"><th>Serial No.</th>");
									print("<th>Category - ".$ctname."</th>");
									print("<th>Actions</th></tr>");
									if($query_ids->num_rows==0)
										print("<tr class=\"table-list\"><th colspan=3>No Results to Display</th></tr></table><br>");
									else
									{
									
										$cnt = 1;
										while($row1 = $query_ids->fetch_assoc())
										{
											$qID=$row1['questionid'];
											$query_qs=$conn->query("SELECT `questiontext` FROM `$cat` WHERE questionid='$qID'");
											$row2 = $query_qs->fetch_assoc();
											print("<tr class=\"table-list\"><td width='20%'>".$cnt."</td>");
											$cnt = $cnt + 1;
											print("<td>".$row2['questiontext']."</td>");
											array_push($_SESSION['arr'],$qID);
											array_push($_SESSION['arr_cat'],$cat);
											print("<td width='25%' style='padding: 10px 20px;vertical-align: top;'><input type='submit' class='button' style='height:25px;font: inherit;' name='submit[".$ctr."]' value='Edit'>");
											print("<input type='submit' class='button' style='float: right;height:25px;font: inherit;' name='submit[".$ctr."]' value='Delete'></td></tr>");
											$ctr = $ctr + 1;
										}
										print("</table><br>");
									}
								}
							}	
						}
						else
							echo("<script type='text/javascript'>alert('Please select a category');restoreVals();</script>");
					}
					//----------------------------------edit or delete a question----------------------------------------//
					if(isset($_POST['submit'])) 
					{
						//get the index of the edit/delete button that has been clicked
						$num = array_pop(array_keys($_POST['submit']));
						$qID = $_SESSION['arr'][$num];
						// Now the value, "Edit" or "Delete"
						$val = array_pop($_POST['submit']);
						if($val=="Edit")
						{
							$_SESSION['questionid'] = $qID;
							$_SESSION['edtCat'] = $_SESSION['arr_cat'][$num];
							echo("<script type='text/javascript'>document.location = 'edtqn.php';</script>");
						}
						else
						{
							//delete
							$ct = $_SESSION['manCat'];
							$cat = $_SESSION['arr_cat'][$num];
							$conn->query("delete from `$cat` where questionid='$qID'");
							//response-rows
							$conn->query("delete from `response` where questionid='$qID' and catname='$cat'");
							//report_table-col
							$query_rep=$conn->query("SELECT distinct `repname` FROM `catreport` where `supercat`='$ct'");
							while($row1 = $query_rep->fetch_assoc())
							{
								$query_Cat = $conn->query("select distinct `disastertype` from `category` where supercat='$ct'");
								while($row = $query_Cat->fetch_assoc())
								{
									$rep = $row1['repname'].$row['disastertype'];
									$nqID = $cat.$qID;
									$conn->query("alter table `$rep` drop `$nqID`");
								}
							}
							//DISPLAY AGAIN
							if($_SESSION['manSubCat']=="All")
								$query_cats=$conn->query("SELECT `catname`,`subcatname` FROM `category` where `supercat`='$ct'");
							else
							{
								$subCt = "cat_".$_SESSION['manSubCat'];
								$query_cats=$conn->query("SELECT `catname`,`subcatname` FROM `category` where `supercat`='$ct' and `catname`='$subCt'");
							}
							echo("<br>");
							echo("<div class=\"row\">");
							echo("<section class=\"col col-8\">");
							echo("<b>Questions - ".$ct."</b>");
							echo("</section>");
						    echo("</div>");
							$ctr = 0;
							$_SESSION['arr'] = array();
							while($row = $query_cats->fetch_assoc())
							{
								$cat=$row['catname'];
								$ctname=$row['subcatname'];
								//fetch question ids from individual categories
								$query_ids=$conn->query("SELECT `questionid` FROM `$cat`");
								print("<table class=\"table-style\">");
								print("<tr class=\"table-list\"><th>Serial No.</th>");
								print("<th>Category - ".$ctname."</th>");
								print("<th>Actions</th></tr>");
								if($query_ids->num_rows==0)
									print("<tr class=\"table-list\"><th colspan=3>No Results to Display</th></tr></table><br>");
								else
								{
									$cnt = 1;
									while($row1 = $query_ids->fetch_assoc())
									{
										$qID=$row1['questionid'];
										$query_qs=$conn->query("SELECT `questiontext` FROM `$cat` WHERE questionid='$qID'");
										$row2 = $query_qs->fetch_assoc();
										print("<tr class=\"table-list\"><td width='20%'>".$cnt."</td>");
										$cnt = $cnt + 1;
										print("<td>".$row2['questiontext']."</td>");
										array_push($_SESSION['arr'],$qID);
										array_push($_SESSION['arr_cat'],$cat);
										print("<td width='25%' style='padding: 10px 20px;vertical-align: top;'><input type='submit' class='button' style='height:25px;font: inherit;' name='submit[".$ctr."]' value='Edit'>");
										print("<input type='submit' class='button' style='float: right;height:25px;font: inherit;' name='submit[".$ctr."]' value='Delete'></td></tr>");
										$ctr = $ctr + 1;
									}
									print("</table><br>");
								}
							}
							echo("<script type='text/javascript'>alert('Question deleted successfully');</script>");
						}
					}
				
				?>
    	
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
