<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-sc.0">
    
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery//jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/departments.css">

    <title>Departments</title>
</head>
<body>

     <!--############### Navbar Start ######################## -->
     <nav class="navbar navbar fixed-top navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a href="index.php" class="navbar-brand mb-0 h1">
                <img class="logo" src="img/doktalk-logo.svg" alt="doktalk-logo" />
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
                            <li><a href="doctor-login.php" class="dropdown-item">Login</a></li>
                             <li><a href="doctor-signup.php" class="dropdown-item">Sign up</a></li>  
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



    <section class="departments-head">
        <div class="container">
          
            <div class="row about-column">
                <div class="col-md-6 about-img">
                    <img src="" alt="">
                 </div>
    
             
                <div class="top-departments" id="consult" style="background-color: #e3edf3e0;">
                    <div class="container">
                        
                       
                            <div class="row my-3">
                                <div class="col-md-12 departments-heading">
                                    <h2>Departments</h2>
                                    <p>Private online consultations with doctors in all departments</p>
                                </div>
                              
                            </div>
                
            
                        <div class="row">
                            <div class="col-md d-flex align-items-center">
                                <div class="card" style="width: 14rem; ">
                                    <img src="img/gen-physician.svg" class="card-img-top" alt="diet">
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-center"><a href="general-physician.html">General Physician</a></h5>
                                    </div>
                                </div>
            
                                <div class="col-md d-flex align-items-center">
                                    <div class="card" style="width: 14rem; ">
                                        <img src="img/dietitian.svg" class="card-img-top" alt="diet">
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-center"><a href="dietitian.html">Dietitian</a></h5>
                                        </div>
                                    </div>
            
                                    <div class="col-md d-flex align-items-center">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/psychologist.svg" class="card-img-top" alt="diet">
                                            <div class="card-body text-center">
                                                <h5 class="card-title text-center"><a href="#">Psychologist</a></h5>
                                            </div>
                                        </div>
            
                                        <div class="col-md d-flex align-items-center">
                                            <div class="card" style="width: 14rem;">
                                                <img src="img/dermatologist.svg" class="card-img-top" alt="diet">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title text-center"><a href="#">Dermatologist</a></h5>
                                                </div>
                                            </div>
            
                                            <div class="col-md d-flex align-items-center">
                                                <div class="card" style="width: 14rem;">
                                                    <img src="img/ayurveda.svg" class="card-img-top" alt="diet">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title text-center"><a href="#">Ayurveda</a></h5>
            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>  

                        <div class="row">
                            <div class="col-md d-flex align-items-center">
                                <div class="card" style="width: 14rem; ">
                                    <img src="img/homeopathy.svg" class="card-img-top" alt="diet">
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-center"><a href="general-physician.html">Homeopathy</a></h5>
                                    </div>
                                </div>
            
                                <div class="col-md d-flex align-items-center">
                                    <div class="card" style="width: 14rem; ">
                                        <img src="img/pulmonologist.svg" class="card-img-top" alt="diet">
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-center"><a href="#">Pulmonologist</a></h5>
                                        </div>
                                    </div>
            
                                    <div class="col-md d-flex align-items-center">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/orthopaedic.svg" class="card-img-top" alt="diet">
                                            <div class="card-body text-center">
                                                <h5 class="card-title text-center"><a href="#">Orthopaedic</a></h5>
                                            </div>
                                        </div>
            
                                        <div class="col-md d-flex align-items-center">
                                            <div class="card" style="width: 14rem;">
                                                <img src="img/sexologist.svg" class="card-img-top" alt="diet">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title text-center"><a href="#">Sexologist</a></h5>
                                                </div>
                                            </div>
            
                                            <div class="col-md d-flex align-items-center">
                                                <div class="card" style="width: 14rem;">
                                                    <img src="img/opthalmologist.svg" class="card-img-top" alt="diet">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title text-center"><a href="#">Ophthalmologist </a></h5>
            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>  

                        <div class="row">
                            <div class="col-md d-flex align-items-center">
                                <div class="card" style="width: 14rem; ">
                                    <img src="img/paediatrician.svg" class="card-img-top" alt="diet">
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-center"><a href="general-physician.html">Paediatrician</a></h5>
                                    </div>
                                </div>
            
                                <div class="col-md d-flex align-items-center">
                                    <div class="card" style="width: 14rem; ">
                                        <img src="img/urologist.svg" class="card-img-top" alt="diet">
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-center"><a href="#">Urologist</a></h5>
                                        </div>
                                    </div>
            
                                    <div class="col-md d-flex align-items-center">
                                        <div class="card" style="width: 14rem;">
                                            <img src="img/dentist.svg" class="card-img-top" alt="diet">
                                            <div class="card-body text-center">
                                                <h5 class="card-title text-center"><a href="#">Dentist</a></h5>
                                            </div>
                                        </div>
            
                                        <div class="col-md d-flex align-items-center">
                                            <div class="card" style="width: 14rem;">
                                                <img src="img/trichologist.svg" class="card-img-top" alt="diet">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title text-center"><a href="#">Trichologist </a></h5>
                                                </div>
                                            </div>
            
                                            <div class="col-md d-flex align-items-center">
                                                <div class="card" style="width: 14rem;">
                                                    <img src="img/gynecologist.svg" class="card-img-top" alt="diet">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title text-center"><a href="#">Gynecologist</a></h5>
            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>  
                        
                    
                    </div>
                </div>
            </div>   
        </div>
    </section>        
    




    
  <!-- Copyright -->
 <footer> 
    <div class="copyright text-center text-white p-3" style="background-color: #0d6efd;">
      Copyright © 2021, DokTalk. All rights reserved. | Made with &#x1f9e1; by Group 8   
    </div>
  </footer>
  <!-- Copyright -->

     <!-- Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
     crossorigin="anonymous"></script>

</body>
</html>