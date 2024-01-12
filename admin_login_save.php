<?php 

// Database connect
$connect = mysqli_connect("localhost","root","","my_ams_db");
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }
  
?>