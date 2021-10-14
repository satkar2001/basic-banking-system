<?php
	$servername = 'sql6.freemysqlhosting.net';
	$user = 'sql6444248';
	$pass = 'hxdXWz2h2t';
	$dbname = 'sql6444248';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}

?>