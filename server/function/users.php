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

// function registerUser($data){
//     global $conn;

//     $id = uniqid('', true);
//     $full_name = htmlspecialchars($data["name"]);
//     $name_parts = explode(" ", $full_name);
//     $first_name = '';
//     $last_name = '';
//     $email = htmlspecialchars($data["email"]);
//     $phone = htmlspecialchars($data["phone"]);
//     $password = htmlspecialchars($data["password"]);
//     $about = htmlspecialchars($data["about"]);
//     $url_path = htmlspecialchars($data["url_path"]);
//     $token = bin2hex(random_bytes(16)); // 32 karakter token
//     $refreshToken = bin2hex(random_bytes(32)); // 64 karakter refressh token

//     if (count($name_parts) > 0) {
//         $first_name = $name_parts[0]; 
//     }

//     // Jika terdapat lebih dari satu elemen dalam array
//     if (count($name_parts) > 1) {
//         // Gabungkan sisa elemen menjadi last_name
//         $last_name = implode(' ', array_slice($name_parts, 1));
//     }


//     $post = "INSERT INTO users VALUES (
//         '$id', '$full_name', '$first_name', '$last_name', '$email', '$phone', '$password', '$about', '$url_path', '$token', '$refreshToken'
//     )";

//     mysqli_query($conn, $post);
//     return mysqli_affected_rows($conn);

// };


// function registerUser($data){
//     global $conn;

    
//     // Ambil data dari array $data
//     $id = uniqid('', true);
//     $full_name = htmlspecialchars($data['full_name'] ?? '');
//     $name_parts = explode(" ", $full_name);
//     $first_name = $name_parts[0] ?? '';
//     $last_name = count($name_parts) > 1 ? implode(' ', array_slice($name_parts, 1)) : '';
//     $phone = htmlspecialchars($data['phone'] ?? '');
//     $email = htmlspecialchars($data['email'] ?? '');
//     $password = password_hash(htmlspecialchars($data["password"]), PASSWORD_DEFAULT) ?? '';
//     $about = '';
//     $url_path = htmlspecialchars($data["url_path"] ?? ''); // Dapatkan dari input tersembunyi
//     $user_type = 'users';
//     $token = bin2hex(random_bytes(16)); // 32 karakter token
//     $refreshToken = bin2hex(random_bytes(32)); // 64 karakter refresh token

//     // Check if email already exists
//     $email_check = "SELECT * FROM users WHERE email = ?";
//     $stmt = $conn->prepare($email_check);
//     $stmt->bind_param("s", $email);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows > 0) {
//         return -1; // Email sudah terdaftar
//     }

  

//     // Insert data
//     $post = "INSERT INTO users (id, full_name, first_name, last_name, email, phone, password, about, url_path, user_type, token, refresh_token) 
//              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
//     $stmt = $conn->prepare($post);

//     if (empty($full_name) || empty($phone) || empty($email) || empty($password) || empty($url_path)) {
//         return 0; // Data tidak lengkap
//     }

//     $stmt->bind_param("ssssssssssss", $id, $full_name, $first_name, $last_name, $email, $phone, $password, $about, $url_path, $user_type, $token, $refreshToken);



//     $result = $stmt->execute();
//     file_put_contents('log.txt', 'Execute result: ' . var_export($result, true) . PHP_EOL, FILE_APPEND);
//     file_put_contents('log.txt', 'Stmt error: ' . $stmt->error . PHP_EOL, FILE_APPEND);

//     if ($result) {
//         // return $stmt->insert_id; // Return user ID
//         return [
//             'insert_id' => $stmt->insert_id, 
//             'token' => $token,
//             'refreshToken' => $refreshToken
//         ];
        
//     } else {
//         if ($stmt->errno == 1062) {
//             return -1; // Email sudah ada
//         } else {
//             return 0; // Kesalahan lain
//         }
//     }

//     $stmt->close();
// }

function registerUser($data){
    global $conn;

    ob_start(); // Mulai buffering output

    try {
        // Ambil data dari array $data
        $id = uniqid('', true);
        $full_name = htmlspecialchars($data['full_name'] ?? '');
        $name_parts = explode(" ", $full_name);
        $first_name = $name_parts[0] ?? '';
        $last_name = count($name_parts) > 1 ? implode(' ', array_slice($name_parts, 1)) : '';
        $phone = htmlspecialchars($data['phone'] ?? '');
        $email = htmlspecialchars($data['email'] ?? '');
        $password = password_hash(htmlspecialchars($data["password"]), PASSWORD_DEFAULT) ?? '';
        $about = '';
        $url_path = htmlspecialchars($data["url_path"] ?? ''); // Dapatkan dari input tersembunyi
        $user_type = 'users';
        $token = bin2hex(random_bytes(16)); // 32 karakter token
        $refreshToken = bin2hex(random_bytes(32)); // 64 karakter refresh token

        // Check if email already exists
        $email_check = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($email_check);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            ob_end_flush(); // Akhiri buffering output
            return -1; // Email sudah terdaftar
        }

        // Insert data
        $post = "INSERT INTO users (id, full_name, first_name, last_name, email, phone, password, about, url_path, user_type, token, refresh_token) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($post);

        if (empty($full_name) || empty($phone) || empty($email) || empty($password) || empty($url_path)) {
            ob_end_flush(); // Akhiri buffering output
            return 0; // Data tidak lengkap
        }

        $stmt->bind_param("ssssssssssss", $id, $full_name, $first_name, $last_name, $email, $phone, $password, $about, $url_path, $user_type, $token, $refreshToken);

        // Logging for debugging
        file_put_contents('log.txt', 'Before execute' . PHP_EOL, FILE_APPEND);
        file_put_contents('log.txt', 'Params: ' . json_encode([
            $id, $full_name, $first_name, $last_name, $email, $phone, $password, $about, $url_path, $user_type, $token, $refreshToken
        ]) . PHP_EOL, FILE_APPEND);

        $result = $stmt->execute();
        file_put_contents('log.txt', 'Execute result: ' . var_export($result, true) . PHP_EOL, FILE_APPEND);
        file_put_contents('log.txt', 'Stmt error: ' . $stmt->error . PHP_EOL, FILE_APPEND);

        if ($result) {
            ob_end_flush(); // Akhiri buffering output
            return [
                'insert_id' => $stmt->insert_id, 
                'token' => $token,
                'refreshToken' => $refreshToken
            ];
        } else {
            file_put_contents('log.txt', 'Stmt errno: ' . $stmt->errno . PHP_EOL, FILE_APPEND);
            if ($stmt->errno == 1062) {
                ob_end_flush(); // Akhiri buffering output
                return -1; // Email sudah ada
            } else {
                ob_end_flush(); // Akhiri buffering output
                return 0; // Kesalahan lain
            }
        }

    } catch (Exception $e) {
        file_put_contents('log.txt', 'Exception: ' . $e->getMessage() . PHP_EOL, FILE_APPEND);
        ob_end_flush(); // Akhiri buffering output
        return 0;
    }

    $stmt->close();
    ob_end_flush(); // Akhiri buffering output
}






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