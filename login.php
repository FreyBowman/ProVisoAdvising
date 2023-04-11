<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="pop.css">
	<style>
		body {
			background-image: url('https://wallpaperaccess.com/full/2314983.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			color: #fff;
			font-family: Arial, sans-serif;
			font-size: 18px;
		}

		h1 {
			text-align: center;
			margin-top: 100px;
			font-size: 50px;
			text-shadow: 2px 2px #000;
			animation: fadeInUp 1s ease;
		}

		form {
			width: 300px;
			margin: 0 auto;
			margin-top: 50px;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
			animation: fadeIn 1s ease;
		}

		input[type="text"], input[type="password"] {
			padding: 10px;
			margin-top: 10px;
			width: 100%;
			border-radius: 5px;
			border: none;
			background-color: rgba(255, 255, 255, 0.8);
			color: #000;
			box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
			animation: fadeIn 1s ease;
		}

		input[type="submit"] {
			padding: 10px;
			margin-top: 20px;
			width: 100%;
			border-radius: 5px;
			border: none;
			background-color: #FFA500;
			color: #fff;
			cursor: pointer;
			box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
			animation: fadeIn 1s ease;
			transition: all 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #FF4500;
			box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.5);
			transform: scale(1.1);
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
				transform: translateY(50px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		@keyframes fadeInUp {
			from {
				opacity: 0;
				transform: translateY(-50px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}
	</style>
</head>
<body>
	<h1>Login Page</h1>
	<form>
		<label for="username">Username</label>
		<input type="text" id="username" name="username" required>
		<label for="password">Password</label>
		<input type="password" id="password" name="password" required>
		<input type="submit" value="Login">
	</form>
	<script src="ui.js"></script>
</body>
</html>

<?php
	require('db.php');
	session_start();
	// When form submitted, check and create user session
	if(isset($_POST['username']))
	{
		$username = stripslashes($_REQUEST['username']);    // removes backslashes
		$username = mysqli_real_escape_string($con, $username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con, $password);
		// Check user is exist in the database
		$query    = "SELECT * FROM `users` WHERE username='$username'
		AND password='" . md5($password) . "'";
		$result = mysqli_query($con, $query) or die(mysqli_error($con));
		$rows = mysqli_num_rows($result);
		if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        }
		else
		{
            echo 
				"<div>
					<p>
						Incorrect username and/or password.
					</p>
				</div>"
        }
	}

?>