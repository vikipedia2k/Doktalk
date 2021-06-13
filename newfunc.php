<?php
session_start();
$con=mysqli_connect("localhost","root","","myhmsdb");
// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You have to log in first";
  header('location: admin-login.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after loggin out
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: admin-login.php");
}

if(isset($_POST['update_data']))
{
 $contact=$_POST['contact'];
 $status=$_POST['status'];
 $query="update appointmenttb set payment='$status' where contact='$contact';";
 $result=mysqli_query($con,$query);
 if($result)
  header("Location:updated.php");
}

// function display_docs()
// {
//  global $con;
//  $query="select * from doctb";
//  $result=mysqli_query($con,$query);
//  while($row=mysqli_fetch_array($result))
//  {
//   $username=$row['username'];
//   $price=$row['docFees'];
//   echo '<option value="' .$username. '" data-value="'.$price.'">'.$username.'</option>';
//  }
// }


function display_specs() {
  global $con;
  $query="select distinct(spec) from doctb";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result))
  {
    $spec=$row['spec'];
    echo '<option data-value="'.$spec.'">'.$spec.'</option>';
  }
}

function display_docs()
{
 global $con;
 $query = "select * from doctb";
 $result = mysqli_query($con,$query);
 while( $row = mysqli_fetch_array($result) )
 {
  $username = $row['username'];
  $price = $row['docFees'];
  $spec = $row['spec'];
  echo '<option value="' .$username. '" data-value="'.$price.'" data-spec="'.$spec.'">'.$username.'</option>';
 }
}

// function display_specs() {
//   global $con;
//   $query = "select distinct(spec) from doctb";
//   $result = mysqli_query($con,$query);
//   while($row = mysqli_fetch_array($result))
//   {
//     $spec = $row['spec'];
//     $username = $row['username'];
//     echo '<option value = "' .$spec. '">'.$spec.'</option>';
//   }
// }


if(isset($_POST['doc_sub']))
{
 $username=$_POST['username'];
 $query="insert into doctb(username)values('$username')";
 $result=mysqli_query($con,$query);
 if($result)
  header("Location:adddoc.php");
}

?>