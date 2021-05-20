<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="css/dashboard.css">


    <title>User Dashboard</title>
</head>
<body>
    <!--############### Navbar Start ######################## -->
    <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a href="/" class="navbar-brand mb-0 h1">
                <img class="logo" src="img/doktalk-logo.svg" alt="doktalk-logo" />
            </a>
            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="/" class="nav-link">
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
                    <!-- <li class="nav-item dropdown">
                        <a href="#for-doctors" class="nav-link 
                    dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            For Doctors
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#" class="dropdown-item">Login</a></li>
                            <li><a href="#" class="dropdown-item">Sign up</a></li>  
                        </ul>
                    </li> -->
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
                <a href="/users/logout"><button type="button" class="btn
                btn-primary">Logout</button></a>
            </form>
        </div>
    </nav>

    <!--############### Navbar End ######################## -->
    <div class="container">
        <div class="row">
           
            <div class="col-md-6"> 
               
                    <!-- <img src="/img/user-icon.svg" alt="user-icon"> -->
              
                    <p class="lead">Hi, </p> 
                    <p class="lead2">Welcome</p> 
                    
                <div class="col-md-4" style="max-width:40%;margin-top: 6%;">
                    <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action" href="#list-dash" id="list-dash-list" data-toggle="list" role="tab" aria-controls="home" aria-expanded="true">Dashboard</a>
                    <a class="list-group-item list-group-item-action active" href="#list-doc" id="list-doc-list" role="tab" aria-controls="home" data-toggle="list" aria-expanded="false">User Details</a>
                    <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list" role="tab" data-toggle="list" aria-controls="home">My Appointments</a>
                    <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list" role="tab" data-toggle="list" aria-controls="home">Appointment Details</a>
                    <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list" role="tab" data-toggle="list" aria-controls="home">Prescriptions</a>
                    <a class="list-group-item list-group-item-action" href="#list-settings" id="list-adoc-list" role="tab" data-toggle="list" aria-controls="home">Edit Profile</a>
                    <a class="list-group-item list-group-item-action" href="#list-settings1" id="list-ddoc-list" role="tab" data-toggle="list" aria-controls="home">Payments</a>
                    <a class="list-group-item list-group-item-action" href="#list-mes" id="list-mes-list" role="tab" data-toggle="list" aria-controls="home">Help</a>
                    
                    </div><br>
                </div>
            </div>    
            
            <div class="card mb-3" style="max-width: 800px;">
                <div class="col-md-6">
                    <div class="user-info">
                        <h6 class="user-head">User Details</h6>
                        <p class="">First Name : </p> 
                        <p class="">Last Name  : </p> 
                        <p class="">Email      : </p> 
                        <p class="">Phone      : </p> 
                        <p class="">Age        : </p>
                        <p class="">Address    : </p>

                    </div>

                </div>    
        </div>

        
    </div>






    
 <!-- ########################## footer start ########################### -->

  <!-- Copyright -->
 <footer> 
    <div class="copyright text-center text-white p-3" style="background-color: #0d6efd;">
      Copyright © 2021, DokTalk. All rights reserved. | Made with &#x1f9e1; by Group 8   
    </div>
  </footer>
  <!-- Copyright -->
  
  <!-- ########################## footer end ########################### -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>

</body>
</html>