<?php
	session_start();
	require 'connect.inc.php';
	$id=$_SESSION['log_id'];
	$query_cstar=$conn->query("SELECT count(*) FROM `register_master` where `id`=$id");
	if($query_cstar->num_rows>0)
	{
		$row = $query_cstar->fetch_assoc();
		$cstar=$row['count(*)'];
				        $_SESSION['log_id']=-1;
				        unset($_SESSION['username']);
				        unset($_SESSION['firstname']);
				        session_destroy();
	echo("<script>alert('Logout Successful!'); window.location='index.php';</script>");
			
	}
?>

