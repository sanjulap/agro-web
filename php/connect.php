<?php
	$server = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'agro-web';

	$connection = new mysqli($server, $user, $password, $database);

	if ($connection->connect_error) {
		die ("Connection Failed: ".$connection->connect_error);
	}
?>