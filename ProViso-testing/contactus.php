<?php
  if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $create_datetime = date("Y-m-d H:i:s");

    $con = mysqli_connect("localhost","root","","contactus");
    if(mysqli_connect_errno())
    { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
    

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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="contactus-style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/pic.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Contact ProViso Team</h3>
          <p class="text">
            Thank you for considering reaching out to us. If you have any question, comments, or concerns, please don't hesitate to contact us.
            Our friendly customer support team is available to assist you in any way we can.<br><br>
            You can fill in the form and we will respond to all inquiries within 24-48 hours.<br><br>
            We appreciate your interest in our product and look forward to hearing from you soon.
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <a href="https://www.google.com/maps/place/University+of+Idaho:+Office+of+Admissions+[Undergraduate]/@46.728812,-117.012608,17z/data=!4m6!1m3!3m2!1s0x54a02786789997e3:0x8f65411bd98fcd6c!2sUniversity+of+Idaho!3m1!1s0x0000000000000000:0x7aab27ec88024f9d" target="_blank">
              <p>875 Perimeter Dr, Moscow, ID 83501</p> </a>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>proviso@uidaho.edu</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>208-885-6111</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://facebook.com" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://instagram.com" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://linkedin.com" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">

          <form action="" method="post" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" placeholder="Your name"/>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" placeholder="Email or Username"/>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" placeholder="Phone number"/>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" placeholder="Message"></textarea>
            </div>
            <input type="submit" name="submit" value="Send" class="btn" />
            <br><br><br><br>
            <a class="title" href="dashboard.html">Back to Dashboard</a>
          </form>
        </div>
      </div>
    </div>
    
  </body>
</html>
