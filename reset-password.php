<?php
include("config.php");

if(!isset($_GET["code"])) {
    exit("Can't find page :(");
}

$code = $_GET["code"];

$getEmailQuery = mysqli_query($con, "SELECT email FROM resetpasswords WHERE code='$code'");
if(mysqli_num_rows($getEmailQuery) == 0) {
    exit("Can't find page");

}

if(isset($_POST["password"])) {
    $pw = $_POST["password"];
    $pw = md5($pw);

    $row =mysqli_fetch_array($getEmailQuery);
    $email =$row["email"];

    $query = mysqli_query($con,"UPDATE patreg SET cpassword='$pw',password='$pw' WHERE email='$email'");

    if($query) {
         $query = mysqli_query($con, "DELETE FROM resetpasswords WHERE code='$code'");
         exit("Password updated successfully!");
    } else {

         exit("Something went wrong!");
    }
}
?>

<form method="POST">
   <input type="password" name="password" placeholder=" New Password">
   <br>
   <input type="submit" name="submit" value="Update Password">
</form>