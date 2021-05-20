<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <!-- Main css -->
    <link rel="stylesheet" href="/css/doctor-signup.css">
</head>
<body>

            <div class="container">
                <div class="doktalk col-3">
                    <a href="/"><img src="/img/doktalk-logo.svg" class="doktalk-logo" alt="logo"></a> 
                  </div>
                  <%- include("./partials/messages"); %>
                    <h2 class="form-title">Sign up</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <form method="POST" action="/doctors/doctor-register" class="register-form" id="register-form">
                          
                                    <input type="text" class="form-control" name="name" id="name" placeholder="First Name" 
                                    value="<%= typeof name != 'undefined' ? name : '' %>" required="" />
                              
                                    <input type="text" class="form-control" name="last_name" id="last_name" 
                                    value="<%= typeof last_name != 'undefined' ? last_name : '' %>" placeholder="Last Name"/>                             
                          
                                    <input type="email" class="form-control" name="email" id="email" 
                                    value="<%= typeof email != 'undefined' ? email : '' %>" placeholder="Your Email"/>
                              
                                    <input type="tel" class="form-control" name="phone" id="phone" minlength="10" maxlength="10" 
                                    value="<%= typeof phone != 'undefined' ? phone : '' %>" placeholder="Your Phone Number" required="" />
                             
	                                <input type="number" class="form-control" name="age" id="age" min="0" max="100" 
                                    value="<%= typeof age != 'undefined' ? age : '' %>" placeholder="Your Age">

                                    <input type="text" class="form-control" name="address" id="address" 
                                    value="<%= typeof address != 'undefined' ? address : '' %>" placeholder="Your address"/>  

                                    <input type="text" class="form-control" name="city" id="city" 
                                    value="<%= typeof city != 'undefined' ? city : '' %>" placeholder="City" /> 
                                    
                                    <input type="text" class="form-control" name="state" id="state" 
                                    value="<%= typeof state != 'undefined' ? state : '' %>" placeholder="State" /> 

	                                <input type="number" class="form-control" name="pincode" id="pincode" 
                                    value="<%= typeof pincod != 'undefined' ? pincode : '' %>" placeholder="Pin Code">

                                    <input type="password" class="form-control" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" 
                                    value="<%= typeof password != 'undefined' ? password : '' %>" placeholder="Password" required="" /> 

                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Repeat your password" 
                                    value="<%= typeof password2 != 'undefined' ? password2 : '' %>" required=""/>

                                    <!-- <input type="password" class="form-control" name="re_pass" id="re_pass" placeholder="Repeat your password" required=""/> -->
                                    <div class="col showPassword">
                                    <input type="checkbox" onclick="showPassword()" /> Show Password
                                    </div>


                                    <div class="col d-inline-block">
                                        Gender:
                                        <input type="radio" id="male" name="gender" value="male">
                                        <label for="male">Male</label>
                                        <input type="radio" id="female" name="gender" value="female">
                                        <label for="female">Female</label>      
                                    </div>

                                  <div class="col-md-6">
                                    <a href="#"><button class="btn-signup btn-primary btn-block">Register</button></a>
                                  </div>

                                  <div class="col-6 login-link"> 
                                    <a href="/doctors/doctor-login" class="login-link">Already have an account?</a>                  
                                  </div> 
                              
                                <div class="col-4 signup-image">
                                    <img src="/img/signup-image.jpg" alt="sing up image" />
                                </div>
                                
                            </form>
                        </div>    
                    </div>    
            </div>
        
            <script>
                function showPassword() {
                  var x = document.getElementById("password");
                  var y = document.getElementById("password2");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                   if (y.type === "password") {
                     y.type = "text";
                   } else {
                     y.type = "password2";
                   }
                }
            </script>
  

    <!-- JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  

   <!-- ########################## footer start ########################### -->
  <footer>
     <!-- Copyright -->
     <div class="copyright text-center text-white p-2 mt-4" style="background-color: #0d6efd;">
      Copyright © 2021, DokTalk. All rights reserved. | Made with &#x1f9e1; by Group 8
    </div>
  </footer>
  <!-- Copyright -->

     <!-- ########################## footer end ########################### -->

</body>
</html>