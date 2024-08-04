<?php 

require('/laragon/www/server/config/index.php');


$updated = "UPDATE users SET ";



// function getUsers() {
//     global $conn;

//     $get = "SELECT * FROM users";
//     $result = mysqli_query($conn, $get);

//     // Check if query was successful
//     if (!$result) {
//         die('Query Failed: ' . mysqli_error($conn));
//     }

//     $users = [];
//     while ($row = mysqli_fetch_assoc($result)) {
//         $users[] = $row;
//     }

//     return $users;
// }


function getUsers() {
    global $conn;

    $get = "SELECT * FROM users";
    $result = mysqli_query($conn, $get);

    // Check if query was successful
    if (!$result) {
        die('Query Failed: ' . mysqli_error($conn));
    }

    // Fetch all results as associative array
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // Get the number of rows
    $num_rows = mysqli_num_rows($result);

    return [
        'data' => $users,
        'length' => $num_rows
    ];
}


function getUsersById($uuid){
    global $conn;

    $getById = "SELECT * FROM users WHERE $uuid";

    $result = mysqli_query($conn, $getById);

     return $result;
}


function getUsersProfile($token){
    global $conn;

    $getUserByToken = "SELECT * FROM users WHERE token = '$token'";

    $result = mysqli_query($conn, $getUserByToken);

    return mysqli_fetch_assoc($result);

    
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

function loginUser($email, $password) {
    
    global $conn;

    // Mempersiapkan query untuk memeriksa email
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Memeriksa apakah email ada di database
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashedPassword);
        $stmt->fetch();

        // Verifikasi password
        if (password_verify($password, $hashedPassword)) {
            return ["status" => "success", "message" => "Login successful", "user_id" => $id];
        } else {
            return ["status" => "error", "message" => "Incorrect password"];
        }
    } else {
        return ["status" => "error", "message" => "Email not found"];
    }
}



function registerUser($data){
    global $conn;

    // ob_start(); // Mulai buffering output

    // try {
        // Ambil data dari array $data
        // $id = uniqid('', true);
        // $full_name = htmlspecialchars($data['full_name'] ?? '');
        // $name_parts = explode(" ", $full_name);
        // $first_name = $name_parts[0] ?? '';
        // $last_name = count($name_parts) > 1 ? implode(' ', array_slice($name_parts, 1)) : '';
        // $phone = htmlspecialchars($data['phone'] ?? '');
        // $email = htmlspecialchars($data['email'] ?? '');
        // $password = password_hash(htmlspecialchars($data["password"]), PASSWORD_DEFAULT) ?? '';
        // $about = '';
        // $url_path = htmlspecialchars($data["url_path"] ?? ''); // Dapatkan dari input tersembunyi
        // $user_type = 'users';
        // $token = bin2hex(random_bytes(16)); // 32 karakter token
        // $refreshToken = bin2hex(random_bytes(32)); // 64 karakter refresh token

        // Check if email already exists
        // $email_check = "SELECT * FROM users WHERE email = ?";
        // $stmt = $conn->prepare($email_check);
        // $stmt->bind_param("s", $email);
        // $stmt->execute();
        // $result = $stmt->get_result();

    //     if ($result->num_rows > 0) {
    //         ob_end_flush(); // Akhiri buffering output
    //         return -1; // Email sudah terdaftar
    //     }

    //     // Insert data
    //     $post = "INSERT INTO users (id, full_name, first_name, last_name, email, phone, password, about, url_path, user_type, token, refresh_token) 
    //             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    //     $stmt = $conn->prepare($post);

    //     if (empty($full_name) || empty($phone) || empty($email) || empty($password) || empty($url_path)) {
    //         ob_end_flush(); // Akhiri buffering output
    //         return 0; // Data tidak lengkap
    //     }

    //     $stmt->bind_param("ssssssssssss", $id, $full_name, $first_name, $last_name, $email, $phone, $password, $about, $url_path, $user_type, $token, $refreshToken);

    //     // Logging for debugging
    //     file_put_contents('log.txt', 'Before execute' . PHP_EOL, FILE_APPEND);
    //     file_put_contents('log.txt', 'Params: ' . json_encode([
    //         $id, $full_name, $first_name, $last_name, $email, $phone, $password, $about, $url_path, $user_type, $token, $refreshToken
    //     ]) . PHP_EOL, FILE_APPEND);

    //     $result = $stmt->execute();
    //     file_put_contents('log.txt', 'Execute result: ' . var_export($result, true) . PHP_EOL, FILE_APPEND);
    //     file_put_contents('log.txt', 'Stmt error: ' . $stmt->error . PHP_EOL, FILE_APPEND);

    //     if ($result) {
    //         ob_end_flush(); // Akhiri buffering output
    //         return [
    //             'insert_id' => $stmt->insert_id, 
    //             'token' => $token,
    //             'refreshToken' => $refreshToken
    //         ];
    //     } else {
    //         file_put_contents('log.txt', 'Stmt errno: ' . $stmt->errno . PHP_EOL, FILE_APPEND);
    //         if ($stmt->errno == 1062) {
    //             ob_end_flush(); // Akhiri buffering output
    //             return -1; // Email sudah ada
    //         } else {
    //             ob_end_flush(); // Akhiri buffering output
    //             return 0; // Kesalahan lain
    //         }
    //     }

    // } catch (Exception $e) {
    //     file_put_contents('log.txt', 'Exception: ' . $e->getMessage() . PHP_EOL, FILE_APPEND);
    //     ob_end_flush(); // Akhiri buffering output
    //     return 0;
    // }

    // $stmt->close();
    // ob_end_flush(); // Akhiri buffering output


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
        $refreshToken = bin2hex(random_bytes(32)); 
        

        // validation

        // $email_check = ;

        $resultCheckEmail = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

        if(mysqli_fetch_assoc($resultCheckEmail)){
                echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Email has been already',
                        text: 'Email has been already'
                    }).then(function() {
                        setTimeout(function() {
                            window.location.href = './client/users/home/index.php';
                        }, 300);
                    });
                </script>";

                return false;
        }





        $postRegister = "INSERT INTO users VALUES('$id', '$full_name', '$first_name', '$last_name', '$phone', '$email', '$password', '$about', '$url_path', '$user_type', '$token', '$refreshToken')";

        mysqli_query($conn, $postRegister);

        return mysqli_affected_rows($conn);
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