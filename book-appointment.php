<!-- #################### Book Appiointment Start #########################-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Book Appointment </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/book-appointment.css">

</head>

<body>
    <section class="book-appointment" id="book-appointment">
        <div class="container">
            <div class="doktalk col-md-12">
                <a href="index.php"><img src="assets/img/doktalk-logo.svg" class="doktalk-logo" alt="logo"></a> 
            </div>
            <form>
                <div class="content-body">
                    <!-- Book Appointment -->
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Book an Appointment</h2>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <!-- <label for="firstname">First Name: <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="First Name" required=""
                                                id="firstname">
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Last Name: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Last Name"
                                                id="lastname" required="">
                                        </div>




                                        <div class="form-group">
                                            <label for="dob">Date Of Birth: <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="dob" name="dob" required="">
                                        </div>


                                        <div class="form-group">
                                            <label for="gender">Gender:</label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="">Select Gender</option>
                                                <option value="gender">Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="notsay">Rather not Say</option>
                                            </select>
                                        </div> -->

                                        <div class="form-group">
                                            <label for="service">Select Specialization <span
                                                    class="text-danger">*</span></label>
                                            <select name="Service" class="form-control" id="service" required="">
                                                <option value="" disabled>Select Specialization</option>
                                                <option value="dental">General Physician</option>
                                                <option value="body">Dietitian</option>
                                                <option value="heart">Psychologist</option>
                                                <option value="ent">Dermatologist</option>
                                                <option value="ent">Ayurveda</option>

                                            </select>
                                        </div>
                                    
                                

                                   
                                        <div class="form-group">
                                            <label for="doctor">Select Doctor <span class="text-danger">*</span></label>
                                            <select name="Doctor" class="form-control" id="doctor" required="">
                                                <option value="" disabled>Select Doctor</option>
                                                <option value="doctor2">Dr.Sanjay Raut</option>
                                                <option value="doctor3">Dr.Sneha Gupta </option>
                                                <option value="doctor1">Dr.Manoj Sharma</option>
                                                <option value="doctor4">Dr.Yash Patil</option>
                                                <option value="doctor5">Dr.Akshay Bele</option>
                                            </select>
                                        </div>
                                    </div>    

                                        
                                            <div class="form-group">
                                                <label for="date">Appointment Date <span
                                                    class="text-danger">*</span></label>
                                                <input type="date" class="form-control" id="date" name="date" required="">
                                            </div>


                                            <div class="form-group">
                                                <label for="time">Appointment Time<span
                                                        class="text-danger">*</span></label>
                                                <select name="Time slot" class="form-control" id="time" required="">
                                                    <option value="">Select time slot</option>
                                                    <option value="9:00 to 10:00">9:00 to 10:00</option>
                                                    <option value="10:00 to 11:00">10:00 to 11:00</option>
                                                    <option value="11:00 to 12:00">11:00 to 12:00</option>
                                                    <option value="12:00 to 01:00">12:00 to 01:00</option>
                                                    <option value="13:00 to 14:00">13:00 to 14:00</option>
                                                    <option value="14:00 to 15:00">14:00 to 15:00</option>
                                                    <option value="15:00 to 16:00">15:00 to 16:00</option>
                                                </select>
                                            </div>


                                            <!-- <div class="form-group">
                                                <label for="email">Email: <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Enter Email" required="">
                                            </div>

                                            <div class="form-group">
                                                <label for="phone">Contact Number:</label>
                                                <input type="text" minlength="10" maxlength="10"
                                                    class="form-control" id="phone" name="phone"
                                                    placeholder="Enter Contact Number" required="">
                                            </div> -->

                                            
                                                
                                                    <div class="form-group">
                                                        <label for="symptoms">Tell Us About Your Problems:</label>
                                                        <textarea cols="3" rows="3" id="symptoms" class="form-control"
                                                            placeholder="Tell us about problems you are facing..."></textarea>
                                                    </div>
                                            
                                           
                                            <div class="card-footer">
                                                <button type="submit"
                                                    class="btn-submit btn-primary btn-sm btn-block">Submit</button>
                                                <!-- <button type="submit" class="btn-cancel btn-danger btn-sm">Cancel</button> -->
                                            </div>
                                            <div class="col-md-4 book-img">
                                                <img src="assets/img/book-appointment.svg" alt="book-appointment-img">
                                            </div>
                                        </div>  
                                </div> 
                            </form>

                        </div>
                        
                    </div>
    </section>
    </div>
    </div>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
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


<!-- #################### Book Appiointment End #########################-->