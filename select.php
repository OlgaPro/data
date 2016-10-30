<?php

	include "connect.php";
	$query="SELECT * FROM student, subject WHERE student.id_d = subject.id_d";
	$rs=$dbconnect->query($query);

	while ($row=$rs->fetch_assoc()) {
		$data[]=$row;
	}

	print json_encode($data);

?>