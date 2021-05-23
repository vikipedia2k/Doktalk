
<?php
session_start();
?>
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
    <link rel="stylesheet" href="assets/css/doctor-signup.css">

    <script>
    var check = function() {
  if (document.getElementById('d_password').value ==
    document.getElementById('d_password2').value) {
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

</script>
</head>
<body>

<?php
include 'dbcon.php';

if(isset($_POST["submit"])) {
         $d_name =  mysqli_real_escape_string($con,$_POST['d_name']);
         $d_last_name = mysqli_real_escape_string($con, $_POST['d_last_name']);
         $d_email = mysqli_real_escape_string($con,$_POST['d_email']);
         $d_phone = mysqli_real_escape_string($con,$_POST['d_phone']);
         $d_age = mysqli_real_escape_string($con,$_POST['d_age']);
         $d_department = mysqli_real_escape_string($con, $_POST['d_department']);
         $d_fees = mysqli_real_escape_string($con,$_POST['d_fees']);
         $d_address = mysqli_real_escape_string($con,$_POST['d_address']);
         $d_city = mysqli_real_escape_string($con,$_POST['d_city']);
         $d_state = mysqli_real_escape_string($con,$_POST['d_state']);
         $d_pincode = mysqli_real_escape_string($con,$_POST['d_pincode']);
         $d_password = mysqli_real_escape_string($con, $_POST['d_password']);
         $d_password2 = mysqli_real_escape_string($con, $_POST['d_password2']);
         $d_gender = mysqli_real_escape_string($con, $_POST['d_gender']);


         $d_pass = password_hash($d_password, PASSWORD_BCRYPT);
         $d_pass2 = password_hash($d_password2, PASSWORD_BCRYPT);

         $emailquery = "SELECT * FROM `doctors` WHERE d_email = '$d_email' ";
         $query = mysqli_query($con, $emailquery);

         $emailcount = mysqli_num_rows($query);

         if($emailcount>0){
           echo "Email already exists";
         } else{     

           $insertquery = "INSERT INTO `doctors`(`d_name`, `d_last_name`, `d_email`, `d_phone`, `d_age`, `d_department`,`d_fees`,
           `d_address`, `d_city`, `d_state`, `d_pincode`, `d_password`, `d_password2`, `d_gender`)
           values('$d_name','$d_last_name','$d_email','$d_phone','$d_age', '$d_department', '$d_fees', '$d_address', '$d_city', '$d_state', 
           '$d_pincode','$d_pass','$d_pass2','$d_gender')";
         
            $iquery = mysqli_query($con, $insertquery);


            if(!$iquery){
             echo mysqli_error($con);
            }
             else{
              echo '<script>
               alert("Registered Successfully!");
               window.location="http://localhost/DokTalk/doctor-login.php";
              </script>';
             
             }
        }     
             
}

?>


            <div class="container">
                <div class="doktalk col-3">
                    <a href="index.php"><img src="assets/img/doktalk-logo.svg" class="doktalk-logo" alt="logo"></a> 
                  </div>
            
                    <h2 class="form-title">Sign up</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <form method="POST" action="" class="register-form" id="register-form">
                          
                                    <input type="text" class="form-control" name="d_name" id="d_name" placeholder="First Name" 
                                    onkeydown="return alphaOnly(event);" required="" />
                              
                                    <input type="text" class="form-control" name="d_last_name" id="d_last_name" 
                                    onkeydown="return alphaOnly(event);" placeholder="Last Name"/>                             
                          
                                    <input type="email" class="form-control" name="d_email" id="d_email" 
                                     placeholder="Your Email"/>
                              
                                    <input type="tel" class="form-control" name="d_phone" id="d_phone" minlength="10" maxlength="10" 
                                     placeholder="Your Phone Number" required="" />
                             
	                                <input type="number" class="form-control" name="d_age" id="age" min="0" max="100" 
                                   placeholder="Your Age">

                                   <select name="d_department" class="form-control" id="d_department" required="">
                                    <option>Select Department</option>
                                    <option value="General Physician">General Physician</option>
                                    <option value="Dietitian">Dietitian</option>
                                    <option value="Psychologist" >Psychologist </option>
                                    <option value="Dermatologist" >Dermatologist</option>
                                    <option value="Ayurveda">Ayurveda</option>
                                  </select>
                                  
                                  <input type="text" class="form-control" name="d_fees" id="d_fees" 
                                    placeholder="Consultation Fees">

                                    <input type="text" class="form-control" name="d_address" id="d_address" 
                                    placeholder="Your address"/>  

                                    <input type="text" class="form-control" name="d_city" id="d_city" 
                                     placeholder="City" /> 
                                    
                                    <input type="text" class="form-control" name="d_state" id="d_state" 
                                    placeholder="State" /> 

	                                <input type="number" class="form-control" name="d_pincode" id="d_pincode" 
                                    placeholder="Pin Code">

                                    <input type="password" class="form-control" name="d_password" id="d_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" 
                                    onkeyup="check();" placeholder="Password" required="" /> 

                                    <input type="password" class="form-control" name="d_password2" id="d_password2" placeholder="Repeat your password" onkeyup="check();"
                                    required="" />

                                    <!-- <input type="password" class="form-control" name="re_pass" id="re_pass" placeholder="Repeat your password" required=""/> -->
                                    <div class="col showPassword">
                                    <input type="checkbox" onclick="showPassword();" /> Show Password
                                    </div>


                                    <div class="col d-inline-block">
                                        Gender:
                                        <input type="radio" id="male" name="d_gender" value="Male">
                                        <label for="male">Male</label>
                                        <input type="radio" id="female" name="d_gender" value="Female">
                                        <label for="female">Female</label>      
                                    </div>

                                  <div class="col-md-6">
                                   <button name="submit" class="btn-signup btn-primary btn-block onclick='return checklen();' ">Register</button>
                                  </div>

                                  <div class="col-6 login-link"> 
                                    <a href="doctor-login.php" class="login-link">Already have an account?</a>                  
                                  </div> 
                              
                                <div class="col-4 signup-image">
                                    <img src="assets/img/signup-image.jpg" alt="sing up image" />
                                </div>
                                
                            </form>
                        </div>    
                    </div>    
            </div>
         
            <script>
                function showPassword() {
                  var x = document.getElementById("d_password");                  
                  if (x.type === "d_password") {
                    x.type = "text";
                  } else {
                    x.type = "d_password";
                  }

                  var y = document.getElementById("d_password2");
                   if(y.type === "d_password2") {
                     y.type = "text";
                   } else {
                     y.type = "d_password2";
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