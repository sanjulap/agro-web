<?php
	// create database connection
	include_once './php/connect.php';

	// check login form data
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit-login'])) {
		if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['login-type'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$userType = $_POST['login-type'];

			$SQL =  "SELECT username, password, user_type FROM users WHERE username = '$username' AND password = '$password' AND user_type = '$userType'";
			$result = $connection->query($SQL);

			if ($result->num_rows > 0) {
				header('Location: Admin_page.html');
			} else {
				echo 'Login Failed';
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="./css/main.css">

	<title>Agro Web | Login</title>
</head>
<body>
	<div class="login-container">
		<!-- Navigation Panel -->
		<?php include_once './php/navigation.php' ?>

		<!-- Login Body -->
		<div class="login-body bg-white">
			<div class="body-container">
				<!-- Login body intro - Left part -->
				<div class="body-intro">
					<div class="login-heading">
						<h1>Login</h1>
						<h3>Enter username & password to login</h3>
					</div>
					<div class="login-img">
						<img src="./images/img_login_01.jpg" alt="login image">
					</div>
				</div>

				<!-- Login body details - Right part -->
				<div class="body-details">
				<!-- 
					<form action="connect-login.php" method="post">
					Note: you can use form action attribute to specify different file to process.
				-->
					<form method="post">
						<div class="login-username">
							<p>Username</p>
							<input type="text" name="username" id="login-username" placeholder="ravindu.perera">
						</div>
						<div class="login-password">
							<p>Password</p>
							<input type="password" name="password" id="login-password" placeholder="***************">
						</div>
						<div class="login-type">
							<span>Login as : </span>
							<select name="login-type" id="login-type">
								<option value="Admin">Admin</option>
								<option value="Farmer">Farmer</option>
								<option value="Officer">Field Officer</option>
							</select>
						</div>
						<div class="login-btn">
							<button type="submit" name="submit-login">
								Login
								<img src="./images/icon-login.png" alt="login icon">
							</button>
						</div>
						<div class="register-link">
							<p>New user? <a href="register.php">Register</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<div class="footer-container">
			<div>All Right Reserved. &copy; 2023</div>
		</div>
	</div>
</body>
</html>