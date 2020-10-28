<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "praktikum6";
    $connect = mysqli_connect($host, $username, $password, $database);

    if(!$connect){
        die("Connecting Failed".mysqli_connect_error());
    }

?>