<?php
$server = "localhost";
$user = "root";
$password = "";
$db =  "doktalk";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
        <script>
            alert("Connection successfull");
        </script>
     <?php   
}else{
    ?>
        <script>
            alert("Connection failed");
        </script>
     <?php   

}

?>