<?php
	// create database connection
	include_once 'connect.php';

	// check login form data
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit-login'])) {
		if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['login-type'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$userType = $_POST['login-type'];

			$SQL =  "SELECT username, password, user_type FROM users WHERE username = '$username' AND password = '$password' AND user_type = '$userType'";
			$result = $connection->query($SQL);

			if ($result->num_rows > 0) {
				echo 'Login Success';
			} else {
				echo 'Login Failed';
			}
		}
	}
?>