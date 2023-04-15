<html>
    <head>
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
    <?php
	require('db.php');
	session_start();
	// When form submitted, check and create user session
	if(isset($_REQUEST['loginusername']))
	{
		$username = stripslashes($_REQUEST['loginusername']);    // removes backslashes
		$username = mysqli_real_escape_string($con, $username);
		$password = stripslashes($_REQUEST['loginpassword']);
		$password = mysqli_real_escape_string($con, $password);
		// Check user is exist in the database
		$query    = "SELECT * FROM `users` WHERE Username='$username' AND Password='" . md5($password) . "'";
		$result = mysqli_query($con, $query) or die(mysqli_error($con));
		$rows = mysqli_num_rows($result);
		if ($rows == 1) {
            $_SESSION['loginusername'] = $username;
            // Redirect to user dashboard page
            header("Location: home.php");
        }
		else
		{
            echo 
				"<div>
					<p>
						Incorrect username and/or password.
					</p>
				</div>";
		}
	}
    if(isset($_REQUEST['username']))
    {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
		$username = mysqli_real_escape_string($con, $username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con, $password);
        //Add the new data to the database
        $query = "INSERT into `users` (Username, Email, Password)
            VALUES('$username', '$email', '" . md5($password) . "')";
        $result = mysqli_query($con, $query) or die(mysqli_err($con));
        if($result)
        {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: home.php");
        }
        else
        {
            echo 
                "<div>
                    <p>
                        Registration Failed.
                    </p>
                </div>";
        }
    }

?>
        <div class="hero">
            <div class="form-box">
               <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
               </div>
               <form id="login" class="input-group">
                <input type="text" class="input-field" name="loginusername" placeholder="USERNAME" required>
                <input type="password" class="input-field" name="loginpassword" placeholder="PASSWORD" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Log In</button>
                <a href="#" id="forgot-password-link">Forgot Password?</a>
               </form>
               <form id="register" class="input-group">
                <input type="text" class="input-field" name="username" placeholder="USERNAME" required>
                <input type="email" class="input-field" name="email" placeholder="EMAIL-ID" required>
                <input type="password" class="input-field" name="password" placeholder="PASSWORD" required>
                <input type="checkbox" class="check-box"><span>Remember Me</span>
                <button type="submit" name="rsubmit" class="submit-btn">Register</button>
               </form>
            </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="logout.php">Logout</a></li>

                </ul>
        </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";
}


  
        </script>
    </body>
</html>