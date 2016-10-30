<?php
	define("HOSTNAME","localhost");
	define("USERNAME","root");
	define("PASSWORD","");
	define("DATABASE","studentik");

	$dbconnect=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die ("Unable to connect DB");
	
?>