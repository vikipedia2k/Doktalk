<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
require 'config.php';

if(isset($_POST["email"])) {

    $emailTo = $_POST["email"];

    $code = uniqid(true);
    $query = mysqli_query($con, "INSERT INTO resetpasswords(code, email) VALUES('$code', '$emailTo')");
    if(!$query) {
        exit("Error");
    }

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'shubhamsawarkar2310@gmail.com';                     //SMTP username
        $mail->Password   = 'Shubhu555';                               //SMTP password
        $mail->SMTPSecure = 'PHPMailer::ENCRYPTION_SMTPS';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('doktalk@noreply.com', 'Doktalk');
        $mail->addAddress($emailTo);     //Add a recipient
        $mail->addReplyTo('noreply@doktalk.com', 'noreply');
      
    
        //Content
        $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/reset-password.php?code=$code";
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Your password reset link';
        $mail->Body    = "<h1>You requested a password reset</h1>
                             Click <a href='$url '> this link </a> to reset your password";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo "<a href='reset-request.php'>Back</a><br>";
        echo 'Password reset link has been sent to your E-mail';
    } catch (Exception $e) {
        echo "<a href='reset-request.php'>Back</a><br>";
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }       
     exit();
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
    
    <title>Forgot password</title>
    <!-- <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;

      }
      body{
        background: rgb(8, 110, 206);
      }
      .row{
        background: white;
        border-radius: 30px;
      }
      img{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
      }
      .btn-1{
        border: none;
        outline: none;
        height: 45px;
        width: 100%;
        background-color: black; 
        color: white;
        border-radius: 4px;
        font-weight: bold;
      }
      .btn-1:hover{
        background-color: white;
        border: 1px solid;
        color: black;

      }
    </style> -->
</head>
<body>




<form method="POST">
    <section class="forgot-password">
      <div class="container" style="background-image: url('bodybg/blob-scene-haikei (7).svg');">
        <div class="row doktalk col-md-6">
         <a href="#"> <img src="assets/img/doktalk-logo.svg" class="doktalk-logo" alt="logo"> </a> 
        </div>
        <div class="signin-content" style="margin-left: 23em; margin-top: 5rem;">
          
          
  
            <div class="">
                <h2 class="form-title">Forgot Password</h2>
                <div class="form-group">
                    
                        <label for="email" style="margin-left: 33px; font-size: 15px;">
                        Enter your email address</label>
                        <input type="text" name="email" placeholder="Email">
                        <br>
                        <input class="btn btn-primary btn-sm" type="submit" name="submit" value="Continue" />
                
                </div>
            </div>      
  
        </div>
      </div>
    </section>
  </form>
  


  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

  <!-- ########################## footer start ########################### -->

  <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: #0d6efd;">
      Copyright © 2021, DokTalk. All rights reserved. | Made with &#x1f9e1; by Group 8   
    </div>
  <!-- Copyright -->

 <!-- ########################## footer end ########################### -->

  </body>
</html> 





