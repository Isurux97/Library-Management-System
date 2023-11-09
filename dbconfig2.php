<?php

	$servername='127.0.0.1';
	$username='root';
	$password='';
	$dbname='newtest3';

	$con=mysqli_connect($servername,$username,$password,$dbname);

	if ($con->connect_error) {
		die("Database not connected".$con->connect_error);
	}


?>