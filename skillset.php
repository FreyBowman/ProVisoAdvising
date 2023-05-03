<?php
    //include auth_session.php file on all user panel pages
    include("auth_session.php");

    require("db.php");
    if(isset($_REQUEST['skillsubmit']))
    {
        $email = $_SESSION['email'];
        //Get Id of User
        $query = "SELECT ID FROM `users` WHERE Email = '$email'";
        $sql = mysqli_query($con, $query) or die(mysqli_error($con));
        $temp = mysqli_fetch_array($sql);
        $id = $temp[0];

        if(isset($_REQUEST['skillhtml']))
        {
            $skill = stripslashes($_REQUEST['skillhtml']);
            $skill = mysqli_real_escape_string($con, $skill);

            $query = "SELECT * FROM `user_skills` WHERE ID = '$id' and Skill = '$skill'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result);
            if($rows > 0)
            {
                //Do nothing
            }
            else
            {
                $query = "INSERT into `user_skills` (ID, Skill)
                    VALUES('$id', '$skill')";
                $result = mysqli_query($con, $query);
            }
        }
        if(isset($_REQUEST['skillcss']))
        {
            $skill = stripslashes($_REQUEST['skillcss']);
            $skill = mysqli_real_escape_string($con, $skill);

            $query = "SELECT * FROM `user_skills` WHERE ID = '$id' and Skill = '$skill'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result);
            if($rows > 0)
            {
                //Do nothing
            }
            else
            {
                $query = "INSERT into `user_skills` (ID, Skill)
                    VALUES('$id', '$skill')";
                $result = mysqli_query($con, $query);
            }
        }
        if(isset($_REQUEST['skilljavascript']))
        {
            $skill = stripslashes($_REQUEST['skilljavascript']);
            $skill = mysqli_real_escape_string($con, $skill);

            $query = "SELECT * FROM `user_skills` WHERE ID = '$id' and Skill = '$skill'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result);
            if($rows > 0)
            {
                //Do nothing
            }
            else
            {
                $query = "INSERT into `user_skills` (ID, Skill)
                    VALUES('$id', '$skill')";
                $result = mysqli_query($con, $query);
            }
        }
        if(isset($_REQUEST['skillpython']))
        {
            $skill = stripslashes($_REQUEST['skillpython']);
            $skill = mysqli_real_escape_string($con, $skill);

            $query = "SELECT * FROM `user_skills` WHERE ID = '$id' and Skill = '$skill'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result);
            if($rows > 0)
            {
                //Do nothing
            }
            else
            {
                $query = "INSERT into `user_skills` (ID, Skill)
                    VALUES('$id', '$skill')";
                $result = mysqli_query($con, $query);
            }
        }
        if(isset($_REQUEST['skillc++']))
        {
            $skill = stripslashes($_REQUEST['skillc++']);
            $skill = mysqli_real_escape_string($con, $skill);

            $query = "SELECT * FROM `user_skills` WHERE ID = '$id' and Skill = '$skill'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result);
            if($rows > 0)
            {
                //Do nothing
            }
            else
            {
                $query = "INSERT into `user_skills` (ID, Skill)
                    VALUES('$id', '$skill')";
                $result = mysqli_query($con, $query);
            }
        }
        if(isset($_REQUEST['skillnet']))
        {
            $skill = stripslashes($_REQUEST['skillnet']);
            $skill = mysqli_real_escape_string($con, $skill);

            $query = "SELECT * FROM `user_skills` WHERE ID = '$id' and Skill = '$skill'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result);
            if($rows > 0)
            {
                //Do nothing
            }
            else
            {
                $query = "INSERT into `user_skills` (ID, Skill)
                    VALUES('$id', '$skill')";
                $result = mysqli_query($con, $query);
            }
        }
        if(isset($_REQUEST['skilljava']))
        {
            $skill = stripslashes($_REQUEST['skilljava']);
            $skill = mysqli_real_escape_string($con, $skill);

            $query = "SELECT * FROM `user_skills` WHERE ID = '$id' and Skill = '$skill'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result);
            if($rows > 0)
            {
                //Do nothing
            }
            else
            {
                $query = "INSERT into `user_skills` (ID, Skill)
                    VALUES('$id', '$skill')";
                $result = mysqli_query($con, $query);
            }
        }
        if(isset($_REQUEST['skillsql']))
        {
            $skill = stripslashes($_REQUEST['skillsql']);
            $skill = mysqli_real_escape_string($con, $skill);

            $query = "SELECT * FROM `user_skills` WHERE ID = '$id' and Skill = '$skill'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result);
            if($rows > 0)
            {
                //Do nothing
            }
            else
            {
                $query = "INSERT into `user_skills` (ID, Skill)
                    VALUES('$id', '$skill')";
                $result = mysqli_query($con, $query);
            }
        }

        if(isset($result))
        {
            echo "<script>alert('Skill-Set Recorded');</script>";
        }
        else
        {
            echo "<script>alert('No Skill-Set Submitted');</script>";
        }
    }
?>


<html>
    <head>
        <title>Degree Overview </title>
        <link rel="stylesheet" href="skillset.css">
    </head>
    <body class="banner">
        <div>
        <form>
            <div class="navbar">
                <img src="https://proviso.ca/wp-content/uploads/2017/06/ProViso_og.jpg" class="logo">
                <ul>
		     <li><a href="home.html">Home</a></li>
                    <li><a href="degreeoverview.html">Degree Overview</a></li>
                    <li><a href="futureclass.html">Future Classes</a></li>
                    <li><a href="scholorship.html">Scholarships</a></li>
                    <li><a href="dreamjob.html">Dream Jobs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="logout.html">Logout</a></li>
                </ul>
            </div>
            <div class="card">
			<h1 class="card-header"> Enter Skills You Are Proficient in</h1>
            <div class="card-body">
	<h2>Choose all that Apply</h2>

    <label><input type="checkbox" name="skillhtml" value="HTML">HTML</label><br>
    <label><input type="checkbox" name="skillcss" value="CSS">CSS</label><br>
    <label><input type="checkbox" name="skilljavascript" value="JavaScript">JavaScript</label><br>
    <label><input type="checkbox" name="skillpython" value="Python">Python</label><br>
    <label><input type="checkbox" name="skillc++" value="C++">C++</label><br>
    <label><input type="checkbox" name="skillnet" value="Networking">Knowledge of Networking</label><br>
    <label><input type="checkbox" name="skilljava" value="Java">Java</label><br>
    <label><input type="checkbox" name="skillsql" value="SQL/NO-SQL">SQL/No SQL</label><br>

</div>
</div>
<button type="submit" name="skillsubmit" class="submit-btn">Done</button>
</form>
</div>
  
    </body>
</html>
