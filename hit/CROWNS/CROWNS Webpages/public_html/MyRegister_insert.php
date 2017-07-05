<?php
include("connect.inc.php");
echo ("insert page");
print_r($_POST);
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$gen = $_POST["gender"];
$con_no = $_POST["phone"];
$email = $_POST["email"];
$state = $_POST["state"];
$district = $_POST["district"];
$block = $_POST["block"];
$panchayat = $_POST["panchayat"];
$village = $_POST["village"];
$pin = $_POST["pincode"];
$pass = $_POST["password"];
$con_pass1 = $_POST["passwordConfirm"];
$role = $_POST["role"];
$con_pass= md5($con_pass1);
print_r($_POST);

$sql_check = "SELECT * FROM `register_master` WHERE `email` = $email";
$result = $conn->query($sql_check);
$rows = $result->num_rows;
if($rows > 0){
while ($output_data = $result->fetch_array()){

if($result == $output_data["email"]){
//echo output_data["email"];
//die;
echo "<script>
alert('This email Id is already used by other login');
window.location.href='MyRegister.php';
</script>";
}
}
}
/*if($rows == 0){
echo "<script>
alert('This email Id is already used by other login');
window.location.href='MyRegister.php';
</script>";

}*/
else{
$sql = "INSERT INTO `register_master`(`firstname`, `lastname`, `gender`, `phone`, `email`, `state`, `district`,
 `block`, `panchayat`, `village`, `landmark`, `password`, `role`) VALUES ('$fname','$lname','$gen','$con_no',
 '$email','$state','$district','$block','$panchayat','$village','$pin','$con_pass','$role')";
echo $sql;

print_r($_POST);

$result=$conn->query($sql);
if($result){	
							
	header("location:MyLogin.php");
}
else{
	
	header("location:MyRegister.php");
}
}

?>