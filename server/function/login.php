<?php 

include "../function/users.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $response = loginUser($email, $password);


    // Menangani hasil login
    if ($response['status'] == 'success') {
               echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Success',
                        text: 'Login Successfully'
                    }).then(function() {
                        setTimeout(function() {
                            window.location.href = './client/users/home';
                        }, 300);
                    });
                </script>";
    } else if ($response['status'] == 'error') {
                echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Login Failed',
                        text: 'Email or Password is incorrect'
                    })
                </script>";
    }
}

?>