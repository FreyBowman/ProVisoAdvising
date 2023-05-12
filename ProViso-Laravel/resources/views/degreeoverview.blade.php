<?php
    //include auth_session.php file on all user panel pages
    include("auth_session.php");
?>

<html>
    <head>
        <title>Degree Overview </title>
        <link rel="stylesheet" href="CSS/degreeoverview.css">
    </head>
    <body class="banner">
        <div>
            <div class="navbar">
                <img src="https://proviso.ca/wp-content/uploads/2017/06/ProViso_og.jpg" class="logo">
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/degreeoverview">Degree Overview</a></li>
                    <li><a href="/futureclass">Future Classes</a></li>
                    <li><a href="/skillset">Skill Sets</a></li>
                    <li><a href="/scholorship">Scholarships</a></li>
                    <li><a href="/dreamjob">Dream Jobs</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
            <form method="POST" action="post-degree">
            @csrf
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
