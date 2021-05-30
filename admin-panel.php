<!DOCTYPE html>
<?php
include('func.php');
include('newfunc.php');
$con = mysqli_connect("localhost", "root", "", "myhmsdb");

$pid = $_SESSION['pid'];
$username = $_SESSION['username'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email = $_SESSION['email'];
$gender = $_SESSION['gender'];
$age = $_SESSION['age'];
$address = $_SESSION['address'];
$city = $_SESSION['city'];
$contact = $_SESSION['contact'];


if (isset($_POST['app-submit'])) {
  $pid = $_SESSION['pid'];
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $gender = $_SESSION['gender'];
  $contact = $_SESSION['contact'];
  $doctor = $_POST['doctor'];
  $email = $_SESSION['email'];
  # $fees=$_POST['fees'];
  $docFees = $_POST['docFees'];

  $appdate = $_POST['appdate'];
  $apptime = $_POST['apptime'];
  $cur_date = date("Y-m-d");
  date_default_timezone_set('Asia/Kolkata');
  $cur_time = date("H:i:s");
  $apptime1 = strtotime($apptime);
  $appdate1 = strtotime($appdate);

  if (date("Y-m-d", $appdate1) >= $cur_date) {
    if ((date("Y-m-d", $appdate1) == $cur_date and date("H:i:s", $apptime1) > $cur_time) or date("Y-m-d", $appdate1) > $cur_date) {
      $check_query = mysqli_query($con, "select apptime from appointmenttb where doctor='$doctor' and appdate='$appdate' and apptime='$apptime'");

      if (mysqli_num_rows($check_query) == 0) {
        $query = mysqli_query($con, "insert into appointmenttb(pid,fname,lname,gender,email,contact,doctor,docFees,appdate,apptime,userStatus,doctorStatus) values($pid,'$fname','$lname','$gender','$email','$contact','$doctor','$docFees','$appdate','$apptime','1','1')");

        if ($query) {
          echo "<script>alert('Your appointment successfully booked');</script>";
        } else {
          echo "<script>alert('Unable to process your request. Please try again!');</script>";
        }
      } else {
        echo "<script>alert('We are sorry to inform that the doctor is not available in this time or date. Please choose different time or date!');</script>";
      }
    } else {
      echo "<script>alert('Select a time or date in the future!');</script>";
    }
  } else {
    echo "<script>alert('Select a time or date in the future!');</script>";
  }
}

if (isset($_GET['cancel'])) {
  $query = mysqli_query($con, "update appointmenttb set userStatus='0' where ID = '" . $_GET['ID'] . "'");
  if ($query) {
    echo "<script>alert('Your appointment successfully cancelled');</script>";
  }
}





function generate_bill()
{
  $con = mysqli_connect("localhost", "root", "", "myhmsdb");
  $pid = $_SESSION['pid'];
  $output = '';
  $query = mysqli_query($con, "select p.pid,p.ID,p.fname,p.lname,p.doctor,p.appdate,p.apptime,p.disease,p.allergy,p.prescription,a.docFees from prestb p inner join appointmenttb a on p.ID=a.ID and p.pid = '$pid' and p.ID = '" . $_GET['ID'] . "'");
  while ($row = mysqli_fetch_array($query)) {
    $output .= '
    <label> Patient ID : </label>' . $row["pid"] . '<br/><br/>
    <label> Appointment ID : </label>' . $row["ID"] . '<br/><br/>
    <label> Patient Name : </label>' . $row["fname"] . ' ' . $row["lname"] . '<br/><br/>
    <label> Doctor Name : </label>' . $row["doctor"] . '<br/><br/>
    <label> Appointment Date : </label>' . $row["appdate"] . '<br/><br/>
    <label> Appointment Time : </label>' . $row["apptime"] . '<br/><br/>
    <label> Disease : </label>' . $row["disease"] . '<br/><br/>
    <label> Allergies : </label>' . $row["allergy"] . '<br/><br/>
    <label> Prescription : </label>' . $row["prescription"] . '<br/><br/>
    <label> Fees Paid : </label>' . $row["docFees"] . '<br/>
    
    ';
  }

  return $output;
}


if (isset($_GET["generate_bill"])) {
  require_once("TCPDF/tcpdf.php");
  $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
  $obj_pdf->SetCreator(PDF_CREATOR);
  $obj_pdf->SetTitle("Generate Bill");
  $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
  $obj_pdf->SetHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  $obj_pdf->SetFooterFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  $obj_pdf->SetDefaultMonospacedFont('helvetica');
  $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
  $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
  $obj_pdf->SetPrintHeader(false);
  $obj_pdf->SetPrintFooter(false);
  $obj_pdf->SetAutoPageBreak(TRUE, 10);
  $obj_pdf->SetFont('helvetica', '', 12);
  $obj_pdf->AddPage();

  $content = '';

  $content .= '
      <br/>
      <h2 align ="center"> DokTalk - Consult Doctor Online </h2></br>
      <h3 align ="center"> Bill</h3>
      

  ';

  $content .= generate_bill();
  $obj_pdf->writeHTML($content);
  ob_end_clean();
  $obj_pdf->Output("Invoice.pdf", 'I');
}

function get_specs()
{
  $con = mysqli_connect("localhost", "root", "", "myhmsdb");
  $query = mysqli_query($con, "select username,spec from doctb");
  $docarray = array();
  while ($row = mysqli_fetch_assoc($query)) {
    $docarray[] = $row;
  }
  return json_encode($docarray);
}

?>
<html lang="en">

<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Global Hospital </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <style>
    /* .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
} */

    .list-group-item.active {
      z-index: 2;
      color: #fff;
      background-color: #314BF6;
      border-color: #314BF6;
      

    }

    .copyright {
      width: 100%;
      font-size: 14px;
      position: fixed;
      bottom: 0;
      background-color: #314BF6;
    }

    /*
.text-primary {
    color: #342ac1!important;
} */
  </style>
  <!-- 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="patient-login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>-->

</head>

<style type="text/css">
  button:hover {
    cursor: pointer;
  }

  #inputbtn:hover {
    cursor: pointer;
  }
</style>

<body>
  <?php
  include 'nav-bar.php';
  ?>
  <div class="container-fluid" style="margin-top:80px;">

    <h3 style="margin-left: 8%; font-size:21px; padding-bottom: 20px; font-family: 'Poppins', sans-serif;"><span class="welcome">Welcome</span><br><?php echo $username ?>
    </h3>
    <div class="row">
      <div class="col-md-4" style="max-width:20%; margin-left: 20px; margin-top: 0%">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active p-3" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
          <a class="list-group-item list-group-item-action p-3" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Book Appointment</a>
          <a class="list-group-item list-group-item-action p-3" href="#app-hist" id="list-pat-list" role="tab" data-toggle="list" aria-controls="home">Appointment History</a>
          <a class="list-group-item list-group-item-action p-3" href="#list-pres" id="list-pres-list" role="tab" data-toggle="list" aria-controls="home">Prescriptions</a>
          <a class="list-group-item list-group-item-action p-3" id="list-edit-profile" data-toggle="list" href="#list-profile" role="tab" aria-controls="home">Edit Profile</a>

        </div><br>
      </div>
      <div class="col-md-8" style="margin-top: 3%;">
        <div class="tab-content" id="nav-tabContent" style="width: 1000px;">


          <div class="tab-pane fade  show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
            <div class="container-fluid container-fullw bg-white" style="margin-top: -45px;">
              <div class="row">
                <div class="col-sm-4" style="left: 5%;">
                  <div class="panel panel-white text-center">
                    <div class="panel-body">
                      <img src="assets/img/book-app-small.svg" alt="">
                      <!-- <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span> -->
                      <!-- <h4 class="StepTitle" style="margin-top: 5%;"> Book My Appointment</h4> -->
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script>
                      <p class="links cl-effect-1">
                        <a href="#list-home" onclick="clickDiv('#list-home-list')">
                          <h5 class="StepTitle"> Book Appointment </h5>
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: 7%;">
                  <div class="panel panel-white text-center">
                    <div class="panel-body">
                      <!-- <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span> -->
                      <!-- <h4 class="StepTitle" style="margin-top: 5%;">My Appointments</h2> -->
                      <img src="assets/img/app-history.svg" alt="">
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                          <h5 class="StepTitle"> View Appointment History </h5>
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: 9%;">
                  <div class="panel panel-white text-center">
                    <div class="panel-body">
                      <!-- <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span> -->
                      <!-- <h4 class="StepTitle" style="margin-top: 5%;">Prescriptions</h2> -->
                      <img src="assets/img/prescription.svg" alt="">
                      <p class="cl-effect-1">
                        <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                          <h5 class="StepTitle"> View Prescription List </h5>
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4" style="left: 5%; left: 4%; margin-top: 35px;">
                <div class="panel panel-white text-center">
                  <div class="panel-body">
                    <!-- <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span> -->
                    <!-- <h4 class="StepTitle" style="margin-top: 5%;">My Appointments</h2> -->
                    <img src="assets/img/edit-profile.svg" alt="">
                    <p class="cl-effect-1">
                      <a href="#list-profile" onclick="clickDiv('#list-edit-profile')">
                        <h5 class="StepTitle"> Edit Profile </h5>
                      </a>
                    </p>
                  </div>
                </div>
              </div>



            </div>
          </div>





          <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <div class="container-fluid">
              <div class="card " style="border-radius:1.25rem; box-shadow: 0px 0px 3px grey; margin-top: -45px;">
                <div class="card-body">
                  <center>
                    <h4>Book an appointment</h4>
                  </center><br>
                  <form class="form-group" method="post" action="admin-panel.php">
                    <div class="row">

                      <!-- <?php

                            $con = mysqli_connect("localhost", "root", "", "myhmsdb");
                            $query = mysqli_query($con, "select username,spec from doctb");
                            $docarray = array();
                            while ($row = mysqli_fetch_assoc($query)) {
                              $docarray[] = $row;
                            }
                            echo json_encode($docarray);

                            ?> -->


                      <div class="col-md-4">
                        <label for="spec">Specialization:</label>
                      </div>
                      <div class="col-md-8">
                        <select name="spec" class="form-control" id="spec">
                          <option value="" disabled selected>Select Specialization</option>
                          <?php
                          display_specs();
                          ?>
                        </select>
                      </div>

                      <br><br>

                      <script>
                        document.getElementById('spec').onchange = function foo() {
                          let spec = this.value;
                          console.log(spec)
                          let docs = [...document.getElementById('doctor').options];

                          docs.forEach((el, ind, arr) => {
                            arr[ind].setAttribute("style", "");
                            if (el.getAttribute("data-spec") != spec) {
                              arr[ind].setAttribute("style", "display: none");
                            }
                          });
                        };
                      </script>

                      <div class="col-md-4"><label for="doctor">Doctors:</label></div>
                      <div class="col-md-8">
                        <select name="doctor" class="form-control" id="doctor" required="required">
                          <option value="" disabled selected>Select Doctor</option>

                          <?php display_docs(); ?>
                        </select>
                      </div><br /><br />


                      <script>
                        document.getElementById('doctor').onchange = function updateFees(e) {
                          var selection = document.querySelector(`[value=${this.value}]`).getAttribute('data-value');
                          document.getElementById('docFees').value = selection;
                        };
                      </script>





                      <!-- <div class="col-md-4"><label for="doctor">Doctors:</label></div>
                                <div class="col-md-8">
                                    <select name="doctor" class="form-control" id="doctor1" required="required">
                                      <option value="" disabled selected>Select Doctor</option>
                                      
                                    </select>
                                </div>
                                <br><br> -->

                      <!-- <script>
                                  document.getElementById("spec").onchange = function updateSpecs(event) {
                                      var selected = document.querySelector(`[data-value=${this.value}]`).getAttribute("value");
                                      console.log(selected);

                                      var options = document.getElementById("doctor1").querySelectorAll("option");

                                      for (i = 0; i < options.length; i++) {
                                        var currentOption = options[i];
                                        var category = options[i].getAttribute("data-spec");

                                        if (category == selected) {
                                          currentOption.style.display = "block";
                                        } else {
                                          currentOption.style.display = "none";
                                        }
                                      }
                                    }
                                </script> -->


                      <!-- <script>
                    let data = 
                
              document.getElementById('spec').onchange = function updateSpecs(e) {
                let values = data.filter(obj => obj.spec == this.value).map(o => o.username);   
                document.getElementById('doctor1').value = document.querySelector(`[value=${values}]`).getAttribute('data-value');
              };
            </script> -->



                      <div class="col-md-4"><label for="consultancyfees">
                          Consultation Fees
                        </label></div>
                      <div class="col-md-8">
                        <!-- <div id="docFees">Select a doctor</div> -->
                        <input class="form-control" type="text" name="docFees" id="docFees" readonly="readonly" />
                      </div><br><br>

                      <div class="col-md-4"><label>Appointment Date</label></div>
                      <div class="col-md-8"><input type="date" class="form-control datepicker" name="appdate"></div><br><br>

                      <div class="col-md-4"><label>Appointment Time</label></div>
                      <div class="col-md-8">
                        <!-- <input type="time" class="form-control" name="apptime"> -->
                        <select name="apptime" class="form-control" id="apptime" required="required">
                          <option value="" disabled selected>Select Time</option>
                          <option value="08:00:00">8:00 AM</option>
                          <option value="10:00:00">10:00 AM</option>
                          <option value="12:00:00">12:00 PM</option>
                          <option value="14:00:00">2:00 PM</option>
                          <option value="16:00:00">4:00 PM</option>
                        </select>

                      </div><br><br>

                      <div class="col-md-4">
                        <input type="submit" name="app-submit" value="Create new entry" class="btn btn-primary" id="inputbtn">
                      </div>
                      <div class="col-md-8"></div>
                    </div>
                  </form>
                </div>
              </div>
            </div><br>
          </div>

          <div class="tab-pane fade" id="app-hist" role="tabpanel" aria-labelledby="list-pat-list">

            <table class="table table-hover" style="border-radius: 10px; box-shadow: 0px 0px 3px grey; margin-top: -45px;">
              <thead>
                <tr>

                  <th scope="col">Doctor Name</th>
                  <th scope="col">Consultation Fees</th>
                  <th scope="col">Appointment Date</th>
                  <th scope="col">Appointment Time</th>
                  <th scope="col">Current Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $con = mysqli_connect("localhost", "root", "", "myhmsdb");
                global $con;

                $query = "select ID,doctor,docFees,appdate,apptime,userStatus,doctorStatus from appointmenttb where fname ='$fname' and lname='$lname';";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {

                  #$fname = $row['fname'];
                  #$lname = $row['lname'];
                  #$email = $row['email'];
                  #$contact = $row['contact'];
                ?>
                  <tr>
                    <td><?php echo $row['doctor']; ?></td>
                    <td><?php echo $row['docFees']; ?></td>
                    <td><?php echo $row['appdate']; ?></td>
                    <td><?php echo $row['apptime']; ?></td>

                    <td>
                      <?php if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 1)) {
                        echo "Active";
                      }
                      if (($row['userStatus'] == 0) && ($row['doctorStatus'] == 1)) {
                        echo "Cancelled by You";
                      }

                      if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 0)) {
                        echo "Cancelled by Doctor";
                      }
                      ?></td>

                    <td>
                      <?php if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 1)) { ?>


                        <a href="admin-panel.php?ID=<?php echo $row['ID'] ?>&cancel=update" onClick="return confirm('Are you sure you want to cancel this appointment ?')" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove"><button class="btn btn-danger">Cancel</button></a>
                      <?php } else {

                        echo "Cancelled";
                      } ?>

                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <br>
          </div>



          <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">

            <table class="table table-hover " style="border-radius:10px; box-shadow: 0px 0px 3px grey; margin-top: -45px;">
              <thead>
                <tr>

                  <th scope="col">Doctor Name</th>
                  <th scope="col">Appointment ID</th>
                  <th scope="col">Appointment Date</th>
                  <th scope="col">Appointment Time</th>
                  <th scope="col">Diseases</th>
                  <th scope="col">Allergies</th>
                  <th scope="col">Prescriptions</th>
                  <th scope="col">Bill Payment</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $con = mysqli_connect("localhost", "root", "", "myhmsdb");
                global $con;

                $query = "select doctor,ID,appdate,apptime,disease,allergy,prescription from prestb where pid='$pid';";

                $result = mysqli_query($con, $query);
                if (!$result) {
                  echo mysqli_error($con);
                }


                while ($row = mysqli_fetch_array($result)) {
                ?>
                  <tr>
                    <td><?php echo $row['doctor']; ?></td>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['appdate']; ?></td>
                    <td><?php echo $row['apptime']; ?></td>
                    <td><?php echo $row['disease']; ?></td>
                    <td><?php echo $row['allergy']; ?></td>
                    <td><?php echo $row['prescription']; ?></td>
                    <td>
                      <form method="get">
                        <!-- <a href="admin-panel.php?ID=" 
                              onClick=""
                              title="Pay Bill" tooltip-placement="top" tooltip="Remove"><button class="btn btn-success">Pay</button>
                              </a></td> -->

                        <a href="admin-panel.php?ID=<?php echo $row['ID'] ?>">
                          <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>" />
                          <input type="submit" onclick="alert('Bill Paid Successfully');" name="generate_bill" class="btn btn-success" value="Pay Bill" />
                        </a>
                    </td>
                    </form>


                  </tr>
                <?php }
                ?>
              </tbody>
            </table>
            <br>
          </div>

          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-edit-profile">
            <?php
            $con = mysqli_connect("localhost", "root", "", "myhmsdb");
            global $con;
            if (isset($_POST['update'])) {

              $fname = $_POST['fname'];
              $lname = $_POST['lname'];
              $email = $_POST['email'];
              $gender = $_POST['gender'];
              $age = $_POST['age'];
              $address = $_POST['address'];
              $city = $_POST['city'];
              $contact = $_POST['contact'];

              $sql = mysqli_query($con, "Update patreg set fname='$fname',lname='$lname',address='$address',city='$city',gender='$gender', 
                contact='$contact' where pid='" . $_SESSION['pid'] . "' ");

              if ($sql) {
                echo "<script>alert('Your profile updated successfully');</script>";
              } else {
                echo mysqli_error($con);
              }
            }

            ?>

            <div class="col-md-12">
              <div class="row">
                <div class="col-lg-8 col-md-12" style="margin-top: -7%; margin-bottom: 12rem;">
                  <div class="panel panel-white">
                    <div class="panel-heading">
                      <h5 class="panel-title" style="margin-left:-15px; margin-bottom:-7px;">Edit Profile</h5>
                    </div>
                    <div class="panel-body">
                      <?php
                      $sql = mysqli_query($con, "select * from patreg where pid='" . $_SESSION['pid'] . "'");
                      while ($row = mysqli_fetch_array($sql)) {
                      ?>
                        <form action="admin-panel.php" method="POST">
                          <div class="row">
                            <div class="col-md-6">

                            <!-- profile picture upload   -->

                              <form action="admin-panel.php" method="POST" enctype="multipart/form-data">
                                <input type="file" name="image" value="" class="form-control">
                                <button type="submit" name="upload" class="button btn-sm">Upload</button><br>
                              </form>
                              <?php
                              $con = mysqli_connect("localhost", "root", "", "image");
                            

                              if(isset($_POST["upload"])){
                                $file = $_FILES['image']['name'];

                                $query = "INSERT INTO upload(image) VALUES('$file')";
                                $res = mysqli_query($con, $query);

                                if($res){
                                  move_uploaded_file($_FILES['image']['temp_name'], "$file");
                                }
                              }
                              ?>
                              <?php        
                              $sel = "SELECT * FROM `upload`";
                              $que = mysqli_query($con, $sel);
                              
                              $output = "";

                              if(mysqli_num_rows($que) < 1){
                                $output .= "<h3>No image uploaded</h3>";
                              }
                              while($row = mysqli_fetch_array($que)){
                                $output .= "<img src='".$row['image']."' class='my-3' 
                                style='width:.300px; height:300px;'>";

                              }
                              ?>

                            <!-- profile picture upload   -->
   
                              <label for="fname" style="margin-top: 5px;">First Name</label>
                              <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" onkeydown="return alphaOnly(event);" value="<?php echo htmlentities($row['fname']); ?>" />

                              <label for="lname" style="margin-top: 5px;">Last Name</label>
                              <input type="text" class="form-control" name="lname" id="lname" onkeydown="return alphaOnly(event);" placeholder="Last Name" value="<?php echo htmlentities($row['lname']); ?>" />

                              <label for="age" style="margin-top: 5px;">Age</label>
                              <input type="number" class="form-control" name="age" id="age" min="0" max="100" placeholder="Your Age" value="<?php echo htmlentities($row['age']); ?>" />

                              <label for="address" style="margin-top: 5px;">Address</label>
                              <input type="text" class="form-control" name="address" id="address" placeholder="Your address" value="<?php echo htmlentities($row['address']); ?>" />
                            </div>
                            <div class="col-md-6">
                              <label for="fname" style="margin-top: 5px;">City</label>
                              <input type="text" class="form-control" name="city" id="city" placeholder="City" value="<?php echo htmlentities($row['city']); ?>" />

                              <label for="contact" style="margin-top: 5px;">Contact</label>
                              <input type="tel" class="form-control" name="contact" minlength="10" maxlength="10" placeholder="Your Phone Number" value="<?php echo htmlentities($row['contact']); ?>" />

                              <div class="col d-inline-block" style="margin-top:1rem; margin-left:-15px;">
                                Gender:
                                <input type="radio" id="male" name="gender" checked value="<?php echo htmlentities($row['gender']); ?>" />
                                <label for="male">Male</label>
                                <input type="radio" id="female" name="gender" value="<?php echo htmlentities($row['gender']); ?>" />
                                <label for="female">Female</label>
                              </div>

                              <label for="email" style="margin-top: 5px;">Email</label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="<?php echo htmlentities($row['email']); ?>" readonly="readonly" />
                              <a href="#email-update" id="update-pat-email" data-toggle="list" role="tab" aria-controls="home">
                                <small>Update your email</small></a>

                              <div class="col-4">
                                <button type="submit" name="update" class="updateBtn btn-primary btn-block" style="margin-top: 10rem; margin-left: -20em; padding: 2px;">Update</button>
                              </div>
                            </div>
                          </div>
                        </form>
                    <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
                          
            </div>
          </div>
                    <div class="tab-pane fade" id="email-update" role="tabpanel">
                      <?php
                      $con = mysqli_connect("localhost", "root", "", "myhmsdb");
                      global $con;
                      if (isset($_POST['update-email'])) {

                        $email = $_POST['email'];
                      
                        $sql = mysqli_query($con, "Update patreg set email='$email' where pid='" . $_SESSION['pid'] . "' ");

                        if ($sql) {
                          echo "<script>alert('Your Email ID updated successfully');</script>";
                        } else {
                          echo mysqli_error($con);
                        }
                      }

                      ?>      

     

              <div class="col-md-12">
                <div class="row">
                  <div class="col-lg-8 col-md-12" style="margin-top: -7%; margin-bottom: 12rem;">
                    <div class="panel panel-white">
                      <div class="panel-heading">
                        <h5 class="panel-title" style="margin-left:-15px; margin-bottom:-7px;">Edit Profile</h5>
                      </div>
                      <div class="panel-body">
                        <?php
                        $sql = mysqli_query($con, "select * from patreg where pid='" . $_SESSION['pid'] . "'");
                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                          <form action="admin-panel.php" method="POST">
                            <div class="row">
                              <div class="col-md-6">
                                <label for="email" style="margin-top: 5px;">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="<?php echo htmlentities($row['email']); ?>" />
                                <button name="update-email" type="submit" class="btn-primary btn-block" style="padding-left: -20em; margin-top: 2rem;">Update</button>
                              </div>
                            </div> 
                          </form> 
                      <?php } ?> 
                      </div>
                    </div>
                  </div>  
                </div> 
              </div>     


        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>



</body>
<!-- ########################## footer start ########################### -->
<footer>
  <!-- Copyright -->
  <div class="copyright text-center text-white p-3" style="background-color: #314BF6; margin-top:50px; position:fixed;">
    Copyright © 2021, DokTalk. All rights reserved. | Made with &#x1f9e1; by Group 8
  </div>
</footer>
<!-- Copyright -->

<!-- ########################## footer end ########################### -->

</html>