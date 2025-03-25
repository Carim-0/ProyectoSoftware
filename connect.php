<?php
    $host="bmpu5r7kncnebvg8slcs-mysql.services.clever-cloud.com";
    $user="uz9vtwxexfbic8lp";
    $pass="QEG4qkEwdKkerlGQn50b";
    $db="bmpu5r7kncnebvg8slcs";

    $conn=new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
        die("Error al conectarse con la BD".$conn->connect_error);
    }
?>