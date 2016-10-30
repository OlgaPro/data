<?php
	include "connect.php";

	$data=json_decode(file_get_contents("php://input"));
	if (count($data)>0){


		$id=$dbconnect->real_escape_string($data->id);

		$name =$dbconnect->real_escape_string($data->name);
		
		$query="INSERT INTO student (id_d, name_n) VALUES ('".$id."', '".$name."')";

		$dbconnect->query($query);
	}

?>