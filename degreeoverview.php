<?php
    require('db.php');
    //include auth_session.php file on all user panel pages
    include("auth_session.php");

    if(isset($_REQUEST['major']))
    {
        $major = stripslashes($_REQUEST['major']);    // removes backslashes
		$major = mysqli_real_escape_string($con, $major);
        $minor = stripslashes($_REQUEST['minor']);
        $minor = mysqli_real_escape_string($con, $minor);
        /*$email = $_SESSION["email"];
        $email = session_encode();
        //Add the new data to the database
        $query = "SELECT * FROM `degree` where Email='$email'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if($rows == 0)
        {
            $query = "INSERT into `degree` (Email, Major, Minor)
                VALUES('$email', '$major', '$minor')";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            if($result)
            {
                if($major == "computerscience")
                {
                    if($minor == "Maths")
                    {
                        header("Location: cs-major-math-minor.html");
                    }
                    if($minor == "Physics")
                    {
                        header("Location: cs-major-phy-minor.html");
                    }
                    if($minor == "Accounting")
                    {
                        header("Location: cs-major-Acc-minor.html");
                    }
                    if($minor == "Statistics")
                    {
                        header("Location: cs-major-Stat-minor.html");
                    }
                    if($minor == "No-minor")
                    {
                        header("Location: only-cs-major.html");
                    }
                }
                if($major == "computerengineering")
                {
                    if($minor == "Maths")
                    {
                        header("Location: cseng-major-math-minor.html");
                    }
                    if($minor == "Physics")
                    {
                        header("Location: cseng-major-phy-minor.html");
                    }
                    if($minor == "Accounting")
                    {
                        header("Location: cseng-major-Acc-minor.html");
                    }
                    if($minor == "Statistics")
                    {
                        header("Location: cseng-major-Stat-minor.html");
                    }
                    if($minor == "No-minor")
                    {
                        header("Location: only-cseng-major.html");
                    }
                }
                if($major == "cybersecurity")
                {
                    if($minor == "Maths")
                    {
                        header("Location: cyb-major-math-minor.html");
                    }
                    if($minor == "Physics")
                    {
                        header("Location: cyb-major-phy-minor.html");
                    }
                    if($minor == "Accounting")
                    {
                        header("Location: cyb-major-Acc-minor.html");
                    }
                    if($minor == "Statistics")
                    {
                        header("Location: cyb-major-Acc-minor.html");
                    }
                    if($minor == "No-minor")
                    {
                        header("Location: only-cyb-major.html");
                    }
                }
                header("Location: home.php");
            }
            else
            {
                echo
                    "<div>
                        <p>
                            Error: Major and/or Minor failed to submit
                        </p>
                    </div>";
            }
        }
        else
        {
            $mysql = "INSERT into `degree` (Major, Minor) Where Email='$email'
            VALUES('$major', '$minor')";
            $result = mysqli_query($con, $mysql) or die(mysqli_error($con));
            if($result)
            {
                header("Location: home.php");
            }
            else
            {
                echo 
                    "<div>
                        <p>
                            Error: Major and/or Minor failed to submit
                        </p>
                    </div>";
            }
        }*/

        if($major == "computerscience")
        {
            if($minor == "Maths")
            {
                header("Location: cs-major-math-minor.php");
            }
            if($minor == "Physics")
            {
                header("Location: cs-major-phy-minor.php");
            }
            if($minor == "Accounting")
            {
                header("Location: cs-major-Acc-minor.php");
            }
            if($minor == "Statistics")
            {
                header("Location: cs-major-Stat-minor.php");
            }
            if($minor == "No-minor")
            {
                header("Location: only-cs-major.php");
            }
        }
        if($major == "computerengineering")
        {
            if($minor == "Maths")
            {
                header("Location: cseng-major-math-minor.php");
            }
            if($minor == "Physics")
            {
                header("Location: cseng-major-phy-minor.php");
            }
            if($minor == "Accounting")
            {
                header("Location: cseng-major-Acc-minor.php");
            }
            if($minor == "Statistics")
            {
                header("Location: cseng-major-Stat-minor.php");
            }
            if($minor == "No-minor")
            {
                header("Location: only-cseng-major.php");
            }
        }
        if($major == "cybersecurity")
        {
            if($minor == "Maths")
            {
                header("Location: cyb-major-math-minor.php");
            }
            if($minor == "Physics")
            {
                header("Location: cyb-major-phy-minor.php");
            }
            if($minor == "Accounting")
            {
                header("Location: cyb-major-Acc-minor.php");
            }
            if($minor == "Statistics")
            {
                header("Location: cyb-major-Acc-minor.php");
            }
            if($minor == "No-minor")
            {
                header("Location: only-cyb-major.php");
            }
        }

    }
?>

<html>
    <head>
        <title>Degree Overview </title>
        <link rel="stylesheet" href="degreeoverview.css">
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <img src="https://proviso.ca/wp-content/uploads/2017/06/ProViso_og.jpg" class="logo">
                <ul>
					<li><a href="home.php">Home</a></li>
                    <li><a href="skillset.html">Skill Sets</a></li>
                    <li><a href="futureclass.html">Future Classes</a></li>
                    <li><a href="scholorship.html">Scholarships</a></li>
                    <li><a href="dreamjob.html">Dream Jobs</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <form>
            <div class="card">
			<h1 class="card-header"> Degree Overview</h1>
            <div class="card-body">
	<h2>Choose Your Major:</h2>
	<select name="major">
	  <option value="computerscience">Bachelor's in Computer Science</option>
	  <option value="computerengineering">Bachelor's in Computer Engineering</option>
	  <option value="cybersecurity">Bachelor's in Cybersecurity</option>
	</select>
	<br>
	<h3>Choose Your Minor:</h3>
	<select name="minor">
	  <option value="Maths">Minor in Mathematics</option>
	  <option value="Physics">Minor in Physics</option>
	  <option value="Accounting">Minor in Accounting</option>
	  <option value="Statistics">Minor in Statistics</option>
          <option value="No-minor">I have no Minor</option>
	</select>
    </div>
        </div>
        <button type="submit" class="submit-btn">Done</button>
        </div>
    </form>
        </div>
    </body>
</html>
