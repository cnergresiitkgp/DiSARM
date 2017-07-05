<?php
  error_reporting(0);
  header('Content-Type: text/html; charset=utf-8');
  if($_POST["pass"]=="M-8zd57x")              // validated through post parameter
  {	  	
	$conn=mysqli_connect("localhost",'u105941622_root','sb0032989');             // username in place of root and password in place of blank
	mysqli_select_db($conn,'u105941622_disar');
	
	mysqli_set_charset($conn, 'utf8');
	mysqli_query($conn,"SET collation_connection = utf8_general_ci");
		
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	//echo $_POST["query"];
    //$query=mysqli_real_escape_string(stripslashes($_POST["query"]));
    $sql=mysqli_query($conn,$_POST["query"]);  

	//ওখানকার আবহাওয়া কেমন?
	//echo $sql;
	//print($_POST["query"]);
  	while($row=mysqli_fetch_assoc($sql)) 
	{
		//echo $row[3];
		$output[]=$row;
	}
  	
    echo json_encode($output);
	//echo "Hello";
	mysqli_close($conn); 
  }
  else
  {
	print("404 page not found");
  }  
?>