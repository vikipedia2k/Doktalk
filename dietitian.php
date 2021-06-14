<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/dietitian.css">

    <title>Dietitian Consultation</title>

<style>
    .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: aliceblue;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 22%;
    height: 30%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

</head>
<body style="background-color:aliceblue;">
    <!--############### Navbar Start ######################## -->
    <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a href="index.php" class="navbar-brand mb-0 h1">
                <img class="logo" src="assets/img/doktalk-logo.svg" alt="doktalk-logo" />
            </a>
            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">
                            Home
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="#consult" class="nav-link">
                            Consult
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="#pharmacy" class="nav-link">
                            Pharmacy
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#for-doctors" class="nav-link 
                    dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            For Doctors
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#" class="dropdown-item">Login</a></li>
                            <!--  <li><a href="#" class="dropdown-item">Sign up</a></li>   -->
                        </ul>
                    </li>
                    <li class="nav-item active">
                        <a href="#blog" class="nav-link">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="#about" class="nav-link" onclick="myFunction()">
                            About
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="#contact" class="nav-link">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                <a href="patient-login.php" target="_blank"><button type="button" class="btn
                btn-primary">Login | Sign up</button></a>
            </form>
        </div>
    </nav>

    <!--############### Navbar End ######################## -->

<nav style="margin-top: 2em; margin-left: 2rem;">
<a href="index.php"><button class="btn btn-primary btn-sm">< Back</button></a>
</nav>

<section class="general-physician-about">
    <div class="container">
      
        <div class="row about-column">
            <div class="col-md-6 about-img">
                <img src="assets/img/general-physician.svg" alt="physician-img">
             </div>

            <div class="col-md-6 content-column">
                <div class="heading-block">
                    <h4 class="heading font-bold">Dietitian</h4>
                </div> 
                <h5 class="about-head">About</h5>
               <p class="about-text">Nutritionists will understand your lifestyle practises, likes and dislikes to make incremental changes towards achieving your goal. 
                   Our scientific approach will make Weight Loss reliable and straightforward for you.
                </p>
            </div>
        
        </div>

        <div type="line" color="default" class="separator"></div>

    </div>
</section>
 
<section class="general-physicians">
    <div class="container">
        <div class="row">
            <div class="col-md-6 physicians-head">
                    <h4 class="heading font-bold">Available Dietitians</h4>
            </div>
        </div>
        
        <!-- <div class="row">
            <div class="col-11 col-md-4 col-sm-10 col-xs-10">
                <div class="card ">
                    <div class="row">
                        <div class="col-3 col-md-3 px-0"> <img src="https://i.imgur.com/NDCotSt.jpg" height="100%" width="100%" alt=""> </div>
                        <div class="col-9 col-md-9 px-0 pr-2 py-2 py-md-3">
                            <div class="d-flex justify-content-between px-3 px-md-4">
                                <div>
                                    <h6 class="">10:00 - 11:00 AM</h6>
                                    <p class="grey">Tuesday, Sep 30</p>
                                </div>
                                <div> <img src="https://i.imgur.com/KGB2LLY.jpg" height="50px" width="50px" alt="" class="rounded-circle"> </div>
                            </div>
                            <hr class="light-hr">
                            <div class="d-flex justify-content-between px-3 px-md-4 div2">
                                <div class="">
                                    <div class="d-flex">
                                        <p class="grey mt-1"> MEN'S CUT</p> <span class="border ml-0 ml-md-2 p-1" id="sp1">1 hr</span>
                                    </div>
                                </div>
                                <div class="mt-1 paid"> Paid $176.6 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11 col-md-4 col-sm-10 col-xs-10">
                <div class="card ">
                    <div class="row">
                        <div class="col-3 col-md-3 px-0"> <img src="https://i.imgur.com/NDCotSt.jpg" height="100%" width="100%" alt=""> </div>
                        <div class="col-9 col-md-9 px-0 pr-2 py-2 py-md-3">
                            <div class="d-flex justify-content-between px-3 px-md-4">
                                <div>
                                    <h6 class="">10:00 - 11:00 AM</h6>
                                    <p class="grey">Tuesday, Sep 30</p>
                                </div>
                                <div> <img src="https://i.imgur.com/KGB2LLY.jpg" height="50px" width="50px" alt="" class="rounded-circle"> </div>
                            </div>
                            <hr class="light-hr">
                            <div class="d-flex justify-content-between px-3 px-md-4 div2">
                                <div class="">
                                    <div class="d-flex">
                                        <p class="grey mt-1"> MEN'S CUT</p> <span class="border ml-0 ml-md-2 p-1" id="sp1">1 hr</span>
                                    </div>
                                </div>
                                <div class="mt-1 paid"> Paid $176.6 </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div> -->
        
 
        <div class="card mb-3 card-1" style="max-width: 630px;">
            <div class="row card-content">
                <div class="col-md-4 doc-img">
                    <img src="assets/img/doctor-card-1.svg" alt="doctor-profile-svg">
                </div>
                <div class="col-md-4 doc-info">
                    <div class="card-body">
                        <h5 class="card-title">Dr.Sanjay Raut</h5>
                        <p class="card-text"> 
                                <span style="font-weight:500; font-size:16px;">Dietitian/Nutrition</span></p>
                        <p class="card-text"> MBBS, DNB (General Medicine) </p>
                        <p class="card-text">Pune, Maharashtra</p>
                       
                    </div>
                </div>
                <div class="col-md-4 doc-info-right">
                    <p class="card-text">12 years experience</p>
                    <p class="time-slots">
                        11:30 AM - 04:00 PM<br>
                        01:00 PM - 06:00 PM</p>    
                </div>
                <div class="col-md-12 button-section">
                    <a href="#"><button class="chat-btn btn-primary btn-sm">Chat</button></a>
                    <button id="myBtn" class="call-btn btn-primary btn-sm">Call</button>
                    <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <p>&#128222;Mobile No: 9868986898</p></i>
                                <p>&#9742; Telephone No : 022659863</p>

                            </div>
                    </div>

                    <a href="dr.sanjay-raut-profile.php"><button class="profile-btn btn-primary btn-sm">View Profile</button></a>

                    <a href="book-appointment.php"><button class="book-btn btn-primary btn-sm">Book Appointment</button></a>
                </div>
            </div>
        </div>

        <div class="card mb-3 card-2" style="max-width: 630px;">
            <div class="row card-content">
                <div class="col-md-4 doc-img">
                    <img src="assets/img/doctor-card-1.svg" alt="doctor-profile-svg">
                </div>
                <div class="col-md-4 doc-info">
                    <div class="card-body">
                        <h5 class="card-title">Dr.Akshay Bele</h5>
                        <p class="card-text"> 
                                <span style="font-weight:500; font-size:16px;">General Physician</span></p>
                        <p class="card-text"> MBBS, DNB (General Medicine) </p>
                        <p class="card-text">Mumbai, Maharashtra</p>
                       
                    </div>
                </div>
                <div class="col-md-4 doc-info-right">
                    <p class="card-text">12 years experience</p>
                    <p class="time-slots">
                        11:30 AM - 04:00 PM<br>
                        01:00 PM - 06:00 PM</p> 
                </div>
                <div class="col-md-12 button-section">
                    <a href="#"><button class="chat-btn btn-primary btn-sm">Chat</button></a>
                    <a href="#"><button class="call-btn btn-primary btn-sm">Call</button></a>

                    <a href="#"><button class="profile-btn btn-primary btn-sm">View Profile</button></a>

                    <a href="book-appointment.php"><button class="book-btn btn-primary btn-sm">Book Appointment</button></a>
                </div>
            </div>    
        </div>

        <div class="card mb-3 card-2" style="max-width: 630px;">
            <div class="row card-content">
                <div class="col-md-4 doc-img">
                    <img src="assets/img/doctor-card-1.svg" alt="doctor-profile-svg">
                </div>
                <div class="col-md-4 doc-info">
                    <div class="card-body">
                        <h5 class="card-title">Dr.Yash Patil</h5>
                        <p class="card-text"> 
                                <span style="font-weight:500; font-size:16px;">General Physician</span></p>
                        <p class="card-text"> MBBS, DNB (General Medicine) </p>
                        <p class="card-text">Pune, Maharashtra</p>
                       
                    </div>
                </div>
                <div class="col-md-4 doc-info-right">
                    <p class="card-text">12 years experience</p>
                    <p class="time-slots">
                        11:30 AM - 04:00 PM<br>
                        01:00 PM - 06:00 PM</p> 
                </div>
                <div class="col-md-12 button-section">
                    <a href="#"><button class="chat-btn btn-primary btn-sm">Chat</button></a>
                    <a href="#"><button class="call-btn btn-primary btn-sm">Call</button></a>

                    <a href="#"><button class="profile-btn btn-primary btn-sm">View Profile</button></a>

                    <a href="book-appointment.php"><button class="book-btn btn-primary btn-sm">Book Appointment</button></a>
                </div>
            </div>
        </div>

        <div class="card mb-3 card-2" style="max-width: 630px;">
            <div class="row card-content">
                <div class="col-md-4 doc-img">
                    <img src="assets/img/doctor-card-1.svg" alt="doctor-profile-svg">
                </div>
                <div class="col-md-4 doc-info">
                    <div class="card-body">
                        <h5 class="card-title">Dr.Sanjay Raut</h5>
                        <p class="card-text"> 
                                <span style="font-weight:500; font-size:16px;">General Physician</span></p>
                        <p class="card-text"> MBBS, DNB (General Medicine) </p>
                        <p class="card-text">Pune, Maharashtra</p>
                       
                    </div>
                </div>
                <div class="col-md-4 doc-info-right">
                    <p class="card-text">12 years experience</p>
                    <p class="time-slots">
                        11:30 AM - 04:00 PM<br>
                        01:00 PM - 06:00 PM</p> 
                </div>
                <div class="col-md-12 button-section">
                    <a href="#"><button class="chat-btn btn-primary btn-sm">Chat</button></a>
                    <a href="#"><button class="call-btn btn-primary btn-sm">Call</button></a>
                 


                    <a href="#"><button class="profile-btn btn-primary btn-sm">View Profile</button></a>

                    <a href="book-appointment.php"><button class="book-btn btn-primary btn-sm">Book Appointment</button></a>
                </div>
            </div>
        </div>

    </div>



</section>


 <!-- ########################## footer start ########################### -->

  <!-- Copyright -->
 <footer> 
  <div class="copyright text-center text-white p-3" style="background-color: #28328c;">
    Copyright © 2021, DokTalk. All rights reserved. | Made with &#x1f9e1; by Group 8   
  </div>
</footer>
<!-- Copyright -->

<!-- ########################## footer end ########################### -->




<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>





      <!-- Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"></script>

</body>
</html>