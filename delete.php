<?php
	include "connect.php";

	$data=json_decode(file_get_contents("php://input"));
	$id=$data->id;

	$query="DELETE FROM student WHERE id=".$id;
	
	$dbconnect->query($query);
?>