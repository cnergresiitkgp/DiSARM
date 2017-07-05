<?php
session_start();
include("connect.inc.php");
//echo "*************";

//echo $_SESSION["username"]; 

//echo $_SESSION["password"];
$final_pass = $_SESSION["password"];
//echo  $final_pass;
$username = $_SESSION["username"];
//echo  $final_pass;
//$firstname = $_SESSION["firstname"];
$sql_role_check = "SELECT `firstname`, `role`,`id` FROM `register_master` WHERE `password`= '".$final_pass."' && `email` = '".$username."'";
//echo $sql_role_check;
$get_role=$conn->query($sql_role_check);
$result= $get_role->fetch_assoc();
$_SESSION['log_id'] = $result["id"];
$role = $result["role"];
//echo $role;
$firstname = $result["firstname"];
//echo $firstname;
$user_type = $role;
//echo $user_type;

if($user_type == "Agencies"){
	$_SESSION["firstname"] = $firstname;
	//echo "condition true";
	//die;
?>	
<script>
alert('<?php  echo 'Log In Successful!!'; ?>');
       window.location.href = 'agency.php';

</script>
<?php
}

elseif($user_type == "Admin"){
	
	//echo "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&";
	
	$_SESSION["firstname"] = $firstname;
?>	
<script>
       alert('<?php  echo 'Log In Successful!!'; ?>');
       window.location.href = 'admin.php';

</script>
<?php
}

elseif($user_type == "Donor"){
	
	//echo "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&";
	
	$_SESSION["firstname"] = $firstname;
?>	
<script>
       alert('<?php  echo 'Log In Successful!!'; ?>');
       window.location.href = 'index.php';

</script>
<?php
}

elseif($user_type == "Volunteers"){
	
	//echo "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&";
	
	$_SESSION["firstname"] = $firstname;
?>	
<script>
       alert('<?php  echo 'Log In Successful!!'; ?>');
       window.location.href = 'volunteer.php';

</script>
<?php
}


?>
