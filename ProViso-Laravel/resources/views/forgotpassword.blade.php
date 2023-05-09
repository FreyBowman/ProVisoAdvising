<?php
    require('db.php');
    if(isset($_REQUEST['email']))
    {
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);

        $query = "SELECT * FROM `users` where Email='$email'";

        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if($rows == 1)
        {
            echo '<script>alert("Password Reset Sent")</script>';
        }
        else
        {
            echo '<script>alert("Email is not registered.")</script>';
        }
    }
?>

<html>

<head>
    <link rel="stylesheet" href="CSS/forgotpassword.css">
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <form action="" method="post">
                <h2>Forgot Password</h2>
                <p> Enter Email-Id</p>
                <input type="email" name="email" class="input-field" placeholder="Email" required>
                <button type="submit" class="submit-btn">Reset Password</button>
            </form>
            <a href="/register" id="register-link">Back to Login</a>
        </div>
    </div>
</body>

</html>