<?php
    require('db.php');
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        $create_datetime = date("Y-m-d H:i:s");

        $query = "INSERT into `contact` (Name, Email, Phone, Message, create_datetime)
                  VALUES ('$name', '$email', '$phone', '$message', '$create_datetime')";

        $result = mysqli_query($con, $query);
    
        if ($result) {
            echo "<script>alert('Message Send.');</script>";
        }else {
            echo "<script>alert('Message Not Send.');</script>";
        }    
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
        <link rel="stylesheet" href="contact.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="hero">
        <div>
            <ul>
                <li><a href="dashboard.html">Home</a></li>
                <li><a href="logout.html">Logout</a></li>
              </ul>
        </div>
       <form>
        <div class="row">
            <div class="input-group">
                <input type="text" id="name" name="name" required>
                <label for="name"><i class="fas fa-user"></i> Your Name</label>
    
            </div>
            <div class="input-group">
                <input type="text" id="number" name="phone" required>
                <label for="number"><i class="fas fa-phone-square-alt"></i> Phone No.</label>
    
            </div>
        </div>
        
        <div class="input-group">
            <input type="email" id="email" name="email" required>
            <label for="email"><i class="fas fa-envelope"></i> Email</label>

        </div>
        <div class="input-group">
            <textarea id="message" rows="8" name="message" required></textarea>
            <label for="message"><i class="fas fa-comments"></i> Your Message</label>

        </div>
        <button type="submit"><i class="fas fa-paper-plane" nam="submit"></i>SUBMIT</button>
        
       </form> 
       
    </div>
    
    
</body>
</html>