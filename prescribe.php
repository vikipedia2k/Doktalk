<!DOCTYPE html>
<?php
include('func1.php');
$pid='';
$ID='';
$appdate='';
$apptime='';
$fname = '';
$lname= '';
$doctor = $_SESSION['dname'];
if(isset($_GET['pid']) && isset($_GET['ID']) && ($_GET['appdate']) && isset($_GET['apptime']) && isset($_GET['fname']) && isset($_GET['lname'])) {
$pid = $_GET['pid'];
  $ID = $_GET['ID'];
  $fname = $_GET['fname'];
  $lname = $_GET['lname'];
  $appdate = $_GET['appdate'];
  $apptime = $_GET['apptime'];
}



if(isset($_POST['prescribe']) && isset($_POST['pid']) && isset($_POST['ID']) && isset($_POST['appdate']) && isset($_POST['apptime']) && isset($_POST['lname']) && isset($_POST['fname'])){
  $appdate = $_POST['appdate'];
  $apptime = $_POST['apptime'];
  $disease = $_POST['disease'];
  $allergy = $_POST['allergy'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $pid = $_POST['pid'];
  $ID = $_POST['ID'];
  $prescription = $_POST['prescription'];
  
  $query=mysqli_query($con,"insert into prestb(doctor,pid,ID,fname,lname,appdate,apptime,disease,allergy,prescription) values ('$doctor','$pid','$ID','$fname','$lname','$appdate','$apptime','$disease','$allergy','$prescription')");
    if($query)
    {
      echo "<script>alert('Prescribed successfully!');</script>";
    }
    else{
      echo "<script>alert('Unable to process your request. Try again!');</script>";
    }
  // else{
  //   echo "<script>alert('GET is not working!');</script>";
  // }initial
  // enga error?
}

?>

<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" /> -->
    <meta name="viewport" content="width=device-width, -scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
      <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Global Hospital </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <style >
 
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #314BF6;
    border-color: #314BF6;
}
/* .text-primary {
    color: #342ac1!important;
} */

/* .btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
} */
.copyright {
      width: 100%;
      font-size: 14px;
      margin-top: 3rem;
      background-color: #314BF6;
    }
    
  body{
    background-color: #9cc4ff;
  }  
  </style>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
        
      </li>
       <li class="nav-item">
       <a class="nav-link" href="doctor-panel.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Back</a>
      </li>
    </ul>
  </div>
</nav>

</head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>

<body style="padding-top:50px;">
<?php
  include 'nav-bar-prescribe.php';
  ?>
 
 <nav aria-label="breadcrumb" style="margin-top: 2em;">
      <ol class="breadcrumb">
        <li class="breadcrumb-item text-sm"><a href="doctor-panel.php">< Back</a></li> 
      </ol>
    </nav>

  <div class="container-fluid">
    <h3 style = "margin-left: 40%;  padding-bottom: 20px; font-family: 'Poppins', sans-serif;"> Welcome &nbsp<?php echo $doctor ?>
   </h3>

   <div class="col-md-8" style="margin-top: 0%; margin-bottom: 2rem; margin-left: 15rem;">
        <div class="panel panel-white">
          <div class="panel-heading">
            <h5 class="panel-title" style="margin-left: 23rem; margin-bottom:-7px;">Prescription</h5>
          </div>
          <div class="panel-body">

        <!-- <div class="tab-pane" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list"> -->
            <form class="form-group" name="prescribeform" method="post" action="prescribe.php" style="margin-bottom: 6rem;">
                      
                      <div class="col-md-8">
                      <label for="fname">First Name: &nbsp<?php echo $fname ?></label>
                      </div>

                      <div class="col-md-8">
                      <label for="fname">Last Name: &nbsp<?php echo $lname ?></label><br>
                      </div>

                      <div class="col-md-8">
                      <label for="fname">Appointment Date: &nbsp<?php echo $appdate ?></label><br>
                      </div>

                      <div class="col-md-8">
                      <label for="fname">Appointment Time: &nbsp<?php echo $apptime ?></label><br>
                      </div>

                      
                      <div class="col-md-8">
                      <label>Disease:</label>
                      <!-- <input type="text" class="form-control" name="disease" required> -->
                      <textarea id="disease" cols="80" rows ="3" name="disease"  required></textarea>
                      </div>
                      
                     
                      <div class="col-md-8">
                      <label>Allergies:</label>
                      <!-- <input type="text"  class="form-control" name="allergy" required> -->
                      <textarea id="allergy" cols="80" rows ="3" name="allergy"  required></textarea>
                      </div>

                     
                      <div class="col-md-8">
                      <label>Prescription:</label>
                      <!-- <input type="text" class="form-control"  name="prescription"  required> -->
                      <textarea id="prescription" cols="80" rows ="5" name="prescription" required></textarea>
                      </div>
                      <input type="hidden" name="fname" value="<?php echo $fname ?>" />
                      <input type="hidden" name="lname" value="<?php echo $lname ?>" />
                      <input type="hidden" name="appdate" value="<?php echo $appdate ?>" />
                      <input type="hidden" name="apptime" value="<?php echo $apptime ?>" />
                      <input type="hidden" name="pid" value="<?php echo $pid ?>" />
                      <input type="hidden" name="ID" value="<?php echo $ID ?>" />
                      <br>
                      <input type="submit" name="prescribe" value="Prescribe" class="btn btn-primary" style="margin-left: 25rem;" />
                    
             </form>
        
   </div>  
      
</body>

<!--######################## Footer start ##################################-->



  <!-- Copyright -->
  <div class="copyright text-center text-white p-3" style="background-color: #28328c; margin-top:50px;">
    Copyright © 2021, DokTalk. All rights reserved. | Made with &#x1f9e1; by Group 8
  </div>

<!-- Copyright -->

<!-- ########################## footer end ########################### -->
</html>
  
