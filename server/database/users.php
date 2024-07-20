<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "carikostdotcom";


$conn = mysqli_connect($host, $user, $pass, $dbnm);

$get = "SELECT * FROM users";

$id = uniqid('', true);
$full_name = $_POST["name"];
$name_parts = explode(" ", $full_name);
$first_name = '';
$last_name = '';
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$about = $_POST["about"];
$url_path = $_POST["url_path"];
$token = bin2hex(random_bytes(16)); // 32 karakter token
$refreshToken = bin2hex(random_bytes(32)); // 64 karakter refresh token

if (count($name_parts) > 0) {
    $first_name = $name_parts[0]; 
}

// Jika terdapat lebih dari satu elemen dalam array
if (count($name_parts) > 1) {
    // Gabungkan sisa elemen menjadi last_name
    $last_name = implode(' ', array_slice($name_parts, 1));
}


$post = "INSERT INTO users VALUES (
    '$id', '$full_name', '$first_name', '$last_name', '$email', '$phone', '$password', '$about', '$url_path', '$token', '$refreshToken'
)";

$updated = "UPDATE users SET ";



$result = mysqli_query($conn, $get);

?>