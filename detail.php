<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "login_register_pure_coding";

// Create connection
$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

// Check connection
if (!$conn) {
    die("<script>alert('Database Connection Failed.')</script>");
}
?>

