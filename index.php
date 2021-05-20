<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="/assets/css/style.css">

    <title>DokTalk - Consult Doctor Online</title>



<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}


</script>
</head>

<body>
 <!--############### Navbar Start ######################## -->
 <nav class="navbar navbar fixed-top navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a href="#" class="navbar-brand mb-0 h1">
                <img class="logo" src="/assets/img/doktalk-logo.svg" alt="doktalk-logo"/>
            </a>
            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">
                            Home
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="#consult" class="nav-link">
                            Consult
                        </a>
                    </li>
                    <!-- <li class="nav-item active">
                        <a href="#pharmacy" class="nav-link">
                            Pharmacy
                        </a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a href="#for-doctors" class="nav-link 
                    dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            For Doctors
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="/assets/doctor-login.php" class="dropdown-item">Login</a></li>
                            <li><a href="/assets/doctor-signup.php" class="dropdown-item">Sign up</a></li>
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
                <a href="/assets/patient-login.php"><button type="button" class="btn
                btn-primary">Login | Sign up</button></a>
            </form>
        </div>
    </nav>

    <!--############### Navbar End ######################## -->

    <!--############### Home Start ######################## -->

    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center text-left text-md-left">            
                <div class="col-md-6 pr-md-5">
                    <img src="/assets/img/doctor.png" class="img-fluid" height="auto" alt="doctor-image" width="100%">
                </div>
                <div class="content col-md-6 pl-md-5">
                    <h1>We are here</h1>
                    <h1>for your care.</h1>
                    <h5>Stay Home. Consult Doctors Online.</h5>
                    <a href="/assets/book-appointment.html"><button class="button">Book Appointment</button></a>
                </div>
            </div>
        </div>
    </section>

    <!--############### Home End ######################## -->

    <!--############### Consult Start ######################## -->
    <section class="top-departments" id="consult" style="background-color: #e3edf3e0;">
        <div class="container">
            <div class="col-md min-vh-50">
                <div class="row py-3">
                    <h3 class="text-center">Consult Doctors from anywhere, anytime.</h3>
                </div>
            </div>
            <div class="container">
                <div class="row my-3">
                    <div class="col-md-9">
                        <h2>Top Departments</h2>
                        <p>Private online consultations with doctors in all departments</p>
                    </div>
                    <div class="col-md-3">
                        <a href="/assets/departments.html"><button type="button" class="btn btn-primary btn-sm" alt="view-all">View
                                all</button></a>
                    </div>
                </div>
            </div>

            <div class="row mx-auto">
                <div class="col-md d-flex align-items-center">
                    <div class="card mx-1" style="width: 14rem; ">
                        <img src="/assets/img/gen-physician.svg" class="card-img-top" alt="diet">
                        <div class="card-body text-center">
                            <h5 class="card-title text-center"><a href="/assets/general-physician.html">General Physician</a></h5>
                        </div>
                    </div>

                    <div class="col-md d-flex align-items-center">
                        <div class="card mx-1" style="width: 14rem; ">
                            <img src="/assets/img/dietitian.svg" class="card-img-top" alt="diet">
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"><a href="/assets/dietitian.html">Dietitian</a></h5>
                            </div>
                        </div>

                        <div class="col-md d-flex align-items-center">
                            <div class="card mx-1" style="width: 14rem;">
                                <img src="/assets/img/psychologist.svg" class="card-img-top" alt="diet">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-center"><a href="/assets/psychologist.html">Psychologist</a></h5>
                                </div>
                            </div>

                            <div class="col-md d-flex align-items-center">
                                <div class="card mx-1" style="width: 14rem;">
                                    <img src="/assets/img/dermatologist.svg" class="card-img-top" alt="diet">
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-center"><a href="/assets/dermatologist.html">Dermatologist</a></h5>
                                    </div>
                                </div>

                                <div class="col-md d-flex align-items-center">
                                    <div class="card mx-1" style="width: 14rem;">
                                        <img src="/assets/img/ayurveda.svg" class="card-img-top" alt="diet">
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-center"><a href="/assets/ayurveda.html">Ayurveda</a></h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </section>

    <section class="top-doctors" id="consult" style="background-color: #e3edf3e0;">
        <div class="container pt-4">
            <div class="col-md min-vh-50">
                <div class="container">
                    <div class="row my-3">
                        <div class="col-md-9">
                            <h2>Book an appointment for consultation</h2>
                            <p>Find experienced doctors across all specialties</p>
                        </div>
                        <div class="col-md-3">
                            <a href="#"><button type="button" class="btn btn-primary btn-sm" alt="view-all">View
                                    all</button></a>
                        </div>
                    </div>
                </div>

                <div class="row mx-auto">
                    <div class="col-md d-flex align-items-center">
                        <div class="card" style="width: 14rem;">
                            <img src="/assets/img/male-doctor.svg" class="card-img-top" alt="diet">
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"><a href="#">Dr. Sanjay Raut</a></h5>
                                <p class="description"><small>MBBS</small><br>
                                    <small>Pune, Maharashtra</small>
                                </p>
                                <button class="btn-1 btn-primary btn-sm doctor">Consult Now</button>
                            </div>
                        </div>

                        <div class="col-md d-flex align-items-center">
                            <div class="card" style="width: 14rem;">
                                <img src="/assets/img/female-doctor.svg" class="card-img-top" alt="diet">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-center"><a href="#">Dr. Sneha Gupta</a>
                                    </h5>
                                    <p class="description"><small>MBBS</small><br>
                                        <small>New Delhi, India</small>
                                    </p>
                                    <button class="btn-1 btn-primary btn-sm doctor">Consult Now</button>
                                </div>
                            </div>

                            <div class="col-md d-flex align-items-center">
                                <div class="card" style="width: 14rem;">
                                    <img src="/assets/img/male-doctor.svg" class="card-img-top" alt="diet">
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-center"><a href="#">Dr. Manoj Sharma</a></h5>
                                        <p class="description"><small>BAMS</small><br>
                                            <small>Pune, Maharashtra</small>
                                        </p>
                                        <button class="btn-1 btn-primary btn-sm doctor">Consult Now</button>
                                    </div>
                                </div>

                                <div class="col-md d-flex align-items-center">
                                    <div class="card" style="width: 14rem;">
                                        <img src="/assets/img/male-doctor.svg" class="card-img-top" alt="diet">
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-center"><a href="#">Dr. Yash Patil</a></h5>
                                            <p class="description"><small>MBBS, MD</small><br>
                                                <small>Hyderabad, Telangana</small>
                                            </p>
                                            <button class="btn-1 btn-primary btn-sm doctor">Consult Now</button>
                                        </div>
                                    </div>

                                    <div class="col-md d-flex align-items-center">
                                        <div class="card" style="width: 14rem;">
                                            <img src="/assets/img/male-doctor.svg" class="card-img-top" alt="diet">
                                            <div class="card-body text-center">
                                                <h5 class="card-title text-center"><a href="#">Dr. Akshay Bele</a></h5>
                                                <p class="description"><small>MBBS, BDS</small><br>
                                                    <small>Mumbai, Maharashtra</small>
                                                </p>
                                                <button class="btn-1 btn-primary btn-sm doctor">Consult Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    </section>

    <!--############### Consult End ######################## -->

    <!--############### Blog Start ######################## -->
    <div class="health-blog pt-80 pb-80 bg-grey-1" id="blog">
        <div class="container">
            <div class="heading-block">
                <h3 class="heading font-bold">Health Blog</h3>
                <p class="sub-heading">Health articles that keep you informed about good health practices</p>
            </div>
            <div class="row mb-5">
                <div class=" col-md-3">
                    <div class="card1 row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col">
                            <img src="/assets/img/caregiver.svg" alt="post-img">
    
                        </div>
                        <div class="post-content col p-4 d-flex flex-column position-static">
                            <p class="d-inline-block mb-2 text-primary">Coronavirus Updates</p>
                            <div class="mb-1 text-muted">May 1</div>
                            <p class="card-text mb-auto">Caring for COVID-19 patients at home</p>
                            <a href="/assets/blog1.html" class="stretched-link">Read more</a>
                        </div>
    
                    </div>
                </div>
    
                <div class="col-md-3">
                    <div class="card2 row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col">
                            <img src="/assets/img/summer-hot-weather.svg" alt="">
                        </div>
                        <div class="post-content col p-4 d-flex flex-column position-static">
                            <p class="d-inline-block mb-2 text-primary">Respiratory Health</p>
                            <div class="mb-1 text-muted">Apr 30</div>
                            <p class="card-text mb-auto">Does hot weather affect your breathing and lungs?</p>
                            <a href="#" class="stretched-link">Read more</a>
                        </div>
    
                    </div>
                </div>
    
                <div class="col-md-3">
                    <div class="card3 row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col">
                            <img src="/assets/img/coffee.svg" alt="">
                        </div>
                        <div class="post-content col p-4 d-flex flex-column position-static">
                            <p class="d-inline-block mb-2 text-primary">Heart Conditions</p>
                            <div class="mb-1 text-muted">Apr 30</div>
                            <p class="card-text mb-auto">The truth about coffee and heart health</p>
                            <a href="#" class="stretched-link">Read more</a>
                        </div>
    
                    </div>
                </div>
    
                <div class="col-md-3">
                    <div class="card4 row g-0 overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col">
                            <img src="/assets/img/coconut.svg" alt="">
    
                        </div>
                        <div class="post-content col p-4 d-flex flex-column position-static">
                            <p class="d-inline-block mb-2 text-primary">Digestive Health</p>
                            <div class="mb-1 text-muted">Apr 29</div>
                            <p class="card-text mb-auto">Gastritis: Common home remedies</p>
                            <a href="#" class="stretched-link">Read more</a>
                        </div>
    
                    </div>
                </div>
    
            </div>
        </div>
    </div>        
        
    <!--############### Blog End ######################## -->

    <!--############### About Start ######################## -->
<div class="section" id="about" style="background-color: #e3edf3e0;">
    <div class="container">
    <div class="row about-us-head">
        <h3 class="text-center">About Us</h3>
    </div>
    <div class="row featurette1 d-flex justify-content-center align-items-center">
        <div class="col-md-7">
            <h2 class="featurette-heading"><strong>We have the best doctors
                <span class="text-muted">available in the city.</span></strong>
            </h2>
            <p class="lead">
                We connect you with the best doctors with seamless online appointment booking to provide you with the
                best primary care.
            </p>
        </div>
        <div class="col-md-5">
            <img src="/assets/img/doctor_nurse.svg" alt="about-image2">   
        </div>    
    </div>

    <div class="row featurette2 d-flex justify-content-center align-items-center">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><strong>Quality care for you<br>
                <span class="text-muted">and the ones you love.</span></strong>
            </h2>
            <p class="lead">We provide primary care when you need it, get personalized and
                high quality healthcare by talking to top medical doctors.
            </p>
        </div>
        <div class="col-md-5">
            <img src="/assets/img/happy_patients.svg" alt="about-image2">
        </div>
    </div>    
        <script>
            function myFunction() {
            var elmnt = document.getElementById("about");
            elmnt.scrollIntoView();
            }
        </script>
    </div>
</div>

    <!--############### About End ######################## -->
    
    <!-- <div class="page-divider"></div> -->

 <!--######################## Footer start ##################################-->
<footer class="text-dark" id="contact">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Social media -->
        <section class="text-center mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fa fa-facebook"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fa fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fa fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fa fa-instagram"></i></a>

            <!-- Github -->
            <!--   <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i class="fa fa-github"></i></a>   -->
        </section>
        <!-- Section: Social media -->
   </div>
        <!-- Section: Form -->
        <section class="contact-us1">
            <!--Grid row-->
            <div class="row d-flex">
                    <div class="dolktalk-footer-logo col-md-7">
                        <img src="/assets/img/doktalk-logo.svg" alt="footer-logo">
                        <div class="dolktalk-about-footer row d-flex col-md-7">
                        <p>We connect you with the best doctors with seamless online appointment booking to provide you with the best health care.</p>
                    </div>
                    </div>

                    <div class="contact-us-form col-md-5 contact-us2">
                        <p class="pt-2">
                            <strong>Contact us</strong>
                        </p>
                        <div class="form-outline form-dark mb-4">
                            <form>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your name" />
                            <input type="email" id="email" name="email" class="form-control" placeholder="Your email" required/>
                            <textarea cols="12" rows="3" id="message" class="form-control"
                                placeholder="Message"></textarea><br>
                            <a href=""><button type="submit" class="footer-submit btn btn-primary btn-sm">
                                Submit</button></a> 
                            </form>
                        </div>
                    </div>
            </div>
        </section>
    </div>
    <!-- Copyright -->
    <div class="copyright text-center text-white p-3" style="background-color: #0d6efd;">
        Copyright © 2021, DokTalk. All rights reserved. | Made with &#x1f9e1; by Group 8
    </div>
    <!-- Copyright -->
</footer>

 <!--######################## Footer End ##################################-->

    










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>
