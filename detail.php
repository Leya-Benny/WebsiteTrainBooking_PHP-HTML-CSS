<?php
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="login_register_pure_coding";

    $conn= mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
    if(!$conn){
        die("<script>alert('Connection Failed.')</script>");
    }
?>
