<?php
	$servername = 'sql6.freesqldatabase.com';
	$user = 'sql6445857';
	$pass = 'FcJSVe9nbW';
	$dbname = 'sql6445857';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}

?>