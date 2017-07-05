<?php
require("connect.inc.php");
$id = $_POST['val_id'];
$msg = $_POST['val_msg'];
$conn->query("update `situational_info` set message_body='$msg',status='ready to publish' where message_id=$id");
?>
