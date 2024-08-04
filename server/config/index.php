<?php 


$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "carikostdotcom";


$conn = mysqli_connect("$host", "$user", "$pass", "$dbnm");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>