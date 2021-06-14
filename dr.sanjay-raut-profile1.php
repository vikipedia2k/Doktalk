<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/profile-general-physician.css">
    <title>Dr. Sanjay Raut Profile </title>

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

    body{
        background-color: aliceblue;
    }
    </style>
</head>

<body>
    <!--############### Navbar Start ######################## -->
<nav class="navbar navbar fixed-top navbar-expand-sm navbar-light bg-light">
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
            <a href="patient-login.php"><button type="button" class="btn
            btn-primary">Login | Sign up</button></a>
        </form>
    </div>
</nav>

<!--############### Navbar End ######################## -->

<!-- section -->
<nav style="margin-top: 2em; margin-left: 2rem;">
<a href="index.php"><button class="btn btn-primary btn-sm">< Back</button></a>
</nav>

<section class="general-physicians">
    <div class="container">
        <div class="row">
            <div class="col-md-6 profile-head">
                    <h4 class="heading font-bold">Profile</h4>                  
            </div>
        </div>

        <div class="card mb-3" style="max-width: 900px;">
            <div class="row card-content">
                <div class="col-md-6 doc-img">
                    <img src="assets/img/doctor-card-1.svg" alt="doctor-profile-svg">
                </div>
                <div class="col-md-6 doc-info">
                    <div class="card-body">
                        <h5 class="card-title">Dr.Sanjay Raut</h5>
                        <p class="card-text"> 
                                <span style="font-weight:500; font-size:16px;">General Physician, Gynecologist, Obstetrician </span></p>
                        <p class="card-text">12 years experience</p>
                        <p class="card-text"> MBBS, DNB (General Medicine) </p>
                        <p class="card-text">Pune, Maharashtra</p>
                       
                    </div>
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

                    <a href="book-appointment.php"><button class="book-btn btn-primary btn-sm">Book Appointment</button></a>
                </div>
            </div>

            <div type="line" color="default" class="separator"></div>

            <div class="doc-edu">
                <div class="row">
                    <div class="col-md-6">
                    <h5 class="edu-head">Education</h5>
                    <ul>
                        <li>MBBS - MIMER, Pune, Maharashtra </li>
                        <li>DNB (Medicine) - New Delhi</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5 class="edu-head">Languages Spoken</h5>
                    <ul>
                        <li>English</li>
                        <li>Hindi</li>
                        <li>Marathi</li>
                    </ul>
                </div>  
            </div>    
        </div>          
    </div>
        
    <div class="card mb-3" style="max-width: 900px;">
        <div class="row hospital-details">
            <div class="col-md-4 clinic-info">
                <h5 class="clinic-head">Hospital</h5>
                <h6 class="clinic-name">Raut Hospital</h5>
                <p class="hosp-address">Shivajinagar, Pune</p>
            </div>       
            <div class="col-md-4 hosp-time">
                <p class="time-slots">
                    <span class="style = font-weight:500;">Mon - Sat</span><br>
                    11:30 AM - 04:00 PM<br>
                    01:00 PM - 06:00 PM</p>    
            </div>
            <div class="col-md-4 hosp-fees">
                <p class="fees">
                    <span class="style = font-weight:500;">₹ 450</span><br>
                   
            </div>
        </div>
    </div>
    
</section>    

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
  <!-- Copyright -->
  <div class="text-center text-white p-3" style="background-color: #28328c; margin-top: 4rem;">
      Copyright © 2021, DokTalk. All rights reserved. | Made with &#x1f9e1; by Group 8   
    </div>
  <!-- Copyright -->

</html>



