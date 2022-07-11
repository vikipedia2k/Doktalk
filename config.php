<?php
    $server = "sql209.epizy.com" ;
    $username = "epiz_31736669" ;
    $password = "R5cdMJuW6R9Pk" ;
    $dbname = "epiz_31736669_doktalk" ;
$con = mysqli_connect($server, $username, $password, $dbname);

if(mysqli_connect_error()){
    echo "Failed to connect: " . mysqli_connect_error());
}