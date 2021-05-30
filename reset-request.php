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
        $mail->Username   = 'viveklsalotkar2000@gmail.com';                     //SMTP username
        $mail->Password   = 'ViVek@2803';                               //SMTP password
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
        echo 'Password reset link has been sent to your E-mail';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }       
     exit();
}

?>



<form method="POST">
 <input type="text" name="email" placeholder="Email">
 <br>
 <input type="submit" name="submit" value="Reset email">
</form>






