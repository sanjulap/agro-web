<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="./css/main.css">

	<title>Agro Web | Register</title>
</head>
<body>
	<div class="register-container">
		<!-- Navigation Panel -->
		<?php include_once './php/navigation.php' ?>

		<!-- Login Body -->
		<div class="register-body bg-white">
			<div class="body-container">
				<div class="body-register-details">
					<form action="GET">
						<div class="register-username">
							<p>Username</p>
							<input type="text" name="Username" id="register-username" placeholder="john.perera">
						</div>
						<div class="register-password">
							<p>Password</p>
							<input type="password" name="Password" id="register-password" placeholder="***************">
						</div>
						<div class="register-email">
							<p>Email</p>
							<input type="email" name="Email" id="register-email" placeholder="example@abc.com">
						</div>
						<div class="register-type">
							<span>Login as : </span>
							<select name="register-type" id="register-type">
								<option value="Admin">Admin</option>
								<option value="Farmer">Farmer</option>
								<option value="Officer">Field Officer</option>
							</select>
						</div>
						<div class="register-btn">
							<button type="submit">
								Register
								<img src="./images/icon-login.png" alt="register icon">
							</button>
						</div>
						<div class="register-link">
							<p>Already registered? <a href="login.php">Login</a></p>
						</div>
					</form>
				</div>
				<div class="body-intro">
					<div class="register-heading">
						<h1>Register</h1>
						<h3>Please fill all the fields</h3>
					</div>
					<div class="register-img">
						<img src="./images/img_register.jpg" alt="register image">
					</div>
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