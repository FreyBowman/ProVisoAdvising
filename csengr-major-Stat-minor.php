
<html>
    <head>
        <title>Degree Overview </title>
        <link rel="stylesheet" href="csengr-major-Stat-minor.css">
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <img src="https://proviso.ca/wp-content/uploads/2017/06/ProViso_og.jpg" class="logo">
                <ul>
					<li><a href="home.html">Home</a></li>
                    <li><a href="degreeoverview.html">Degree Overview</a></li>
                    <li><a href="skillset.html">Skill Sets</a></li>
                    <li><a href="futureclass.html">Future Classes</a></li>
                    <li><a href="scholorship.html">Scholarships</a></li>
                    <li><a href="dreamjob.html">Dream Jobs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="logout.html">Logout</a></li>
                </ul>
            </div>
            <div class="card">
			<h1 class="card-header"> Major:CS-Engr Minor:Statistics</h1>
            <div class="card-body">
	<h2>Freshman </h2>
	<h2>Sophomore</h2>
    <h2>Junior</h2>
    <h2>Senior</h2>

    <?php
// Username is root
$user = 'root';
$password = '';
 
// Database name is proviso
$database = 'proviso';
 
// Server is localhost
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database table classes for only cs major
$sql = " SELECT * FROM classes WHERE class_id IN ('ALL','CE','M_STAT') ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- CSS FOR STYLING THE TABLE -->
<style>
        table {
            margin: 0 auto;
            font-size: 30px;
            border: 1px solid black;
        }
  
        th,
        td {
            background-color: #E4F5D4;
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
</style>
<!-- TABLE CONSTRUCTION -->
    <table>
        <tr>
            <th>Class ID</th>
            <th>Name</th>
            <th>Location</th>
            <th>Credits</th>
        </tr>
        <!-- PHP CODE TO FETCH DATA FROM ROWS -->
        <?php
            // LOOP TILL END OF DATA
            while($rows=$result->fetch_assoc())
            {
        ?>
        <tr>
            <!-- FETCHING DATA FROM EACH
                ROW OF EVERY COLUMN -->
            <td><?php echo $rows['class_id'];?></td>
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['location'];?></td>
            <td><?php echo $rows['credits'];?></td>
        </tr>
        <?php
            }
        ?>
    </table>

        </div>
    </body>
</html>