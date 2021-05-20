<!DOCTYPE html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    
    <title>Login</title>
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
  <%- include("./partials/messages"); %>
  <form action="/doctors/doctor-login" method="POST">
    <section class="sign-in">
      <div class="container">
        <div class="row doktalk col-md-6">
         <a href="/"> <img src="/img/doktalk-logo.svg" class="doktalk-logo" alt="logo"> </a> 
        </div>
        <div class="signin-content">
          
          <div class="signin-image">
            <figure><img src="/img/signin-image.jpg" alt="singin image"></figure>
          </div>
  
          <div class="signin-form">
            <h2 class="form-title">Login as a Doctor</h2>
            <form method="POST" class="register-form" id="login-form">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Your Email" required="" />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required="" />
              </div>
              <div class="form-group">
                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
              </div>
              <div class="form-group form-button">
                <button type="submit" class="btn-submit btn-primary btn-sm btn-block">Login</button>
              </div>
            </form>
            <a href="/doctors/doctor-register" class="signup-link">Don't have an account?</a>
            <div class="social-login">
              <span class="social-label">Or login with</span>
              <ul class="socials">
                <!-- <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li> -->
                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>




  <!-- <body>
    <section class="Form my-4 mx-5" >
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <img src="img/login.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7" px-5 pt-5>
            <h1 class="font-weight-bold py-3">DokTalk</h1>
            <h4>Sign in to your account</h4>
            <form>
              <div class="form-row"> 
            <div class="col-lg-7">
              <input type="email" placeholder="Email-Address" class="form-control my-3 p-4" required="">
            </div> 
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email: <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Enter Email" required="">
                    </div>
                </div>
                <div class="row">

                  <div class="form-row">
                    <div class="col-lg-6">
                      <button type="submit" class="btn-submit btn-primary btn-sm btn-block">Login</button> 
                    </div> 
                    </div>
                    <a href="#">Forgot Password</a>
                    <p>Don't have an account? <a href="s/">Register here</a></p>
            </form>
          </div>
        </div>
        
      </div>
    </section> -->

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

  </bo/>