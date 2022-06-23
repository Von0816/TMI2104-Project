<?php
	define ('servername' , 'localhost');
	define ('username' , 'root');
	define ('password' , 'bDQ349@tmYkGNq#s');
	define ('database' , 'db');

	// Create connection
	$link = mysqli_connect(servername , username, password, database);

	// Check connection
	if ($link === false) {
		die("Connection failed: " . $mysqli_connect_error());
	}
	
	//start session
	session_start();
?>
