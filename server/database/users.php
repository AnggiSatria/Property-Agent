<?php 

include "./server/config/index.php";


$updated = "UPDATE users SET ";



function getUsers(){
     global $conn;

     $get = "SELECT * FROM users";

     $result = mysqli_query($conn, $get);

      return $result;

}

function getUsersById($uuid){
    global $conn;

    $getById = "SELECT * FROM users WHERE $uuid";

    $result = mysqli_query($conn, $getById);

     return $result;
}

function getUsersByParams($params){
    global $conn;

    $getUsersByParams = "SELECT * FROM users WHERE $params";

    $result = mysqli_query($conn, $getUsersByParams);

    return $result;

}

function registerUser($data){
    global $conn;

    $id = uniqid('', true);
    $full_name = htmlspecialchars($data["name"]);
    $name_parts = explode(" ", $full_name);
    $first_name = '';
    $last_name = '';
    $email = htmlspecialchars($data["email"]);
    $phone = htmlspecialchars($data["phone"]);
    $password = htmlspecialchars($data["password"]);
    $about = htmlspecialchars($data["about"]);
    $url_path = htmlspecialchars($data["url_path"]);
    $token = bin2hex(random_bytes(16)); // 32 karakter token
    $refreshToken = bin2hex(random_bytes(32)); // 64 karakter refressh token

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

    mysqli_query($conn, $post);
    return mysqli_affected_rows($conn);

};


function updatedUser($data){
    global $conn;



    $id = uniqid('', true);
    $full_name = htmlspecialchars($data["name"]);
    $name_parts = explode(" ", $full_name);
    $first_name = '';
    $last_name = '';
    $email = htmlspecialchars($data["email"]);
    $phone = htmlspecialchars($data["phone"]);
    $password = htmlspecialchars($data["password"]);
    $about = htmlspecialchars($data["about"]);
    $url_path = htmlspecialchars($data["url_path"]);
    $token = bin2hex(random_bytes(16)); // 32 karakter token
    $refreshToken = bin2hex(random_bytes(32)); // 64 karakter refressh token

    if (count($name_parts) > 0) {
        $first_name = $name_parts[0]; 
    }

    // Jika terdapat lebih dari satu elemen dalam array
    if (count($name_parts) > 1) {
        // Gabungkan sisa elemen menjadi last_name
        $last_name = implode(' ', array_slice($name_parts, 1));
    }


    $updated = "UPDATE users SET(
        '$id', '$full_name', '$first_name', '$last_name', '$email', '$phone', '$password', '$about', '$url_path', '$token', '$refreshToken'
    )";

    mysqli_query($conn, $updated);

    return mysqli_affected_rows($conn);
};

function deleteUser($id){
    global $conn;

    $delete = "DELETE FROM users WHERE id = $id";

    mysqli_query($conn, $delete);

    return mysqli_affected_rows($conn);
}

?>