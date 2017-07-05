<?php
	error_reporting(0);
	require 'connect.inc.php';
	function getJSON($stmt)
	{
		$meta = $stmt->result_metadata();
		while ($field = $meta->fetch_field()) {
			$parameters[] = &$row[$field->name];
		}			
		call_user_func_array(array($stmt, 'bind_result'), $parameters);
		while ($stmt->fetch()) {
			foreach($row as $key => $val) {
				$x[$key] = $val;
			}
			$results[] = $x;
		}
		return json_encode($results);
	}
	$sql=$conn->prepare("select * from phone_numbers");
	$sql->execute();
	$sql->store_result();
	echo getJSON($sql);
?>
	
