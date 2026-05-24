<?php

session_start();

$conn = require("../config/db.php");

if(isset($_POST['email'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){

        $user = mysqli_fetch_assoc($result);

        // Password Verify
        if(password_verify($password, $user['password'])){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['username'] = $user['name'];

            // Redirect
            if($user['role'] == 'admin'){

                header("Location: ../admin/dashboard.php");

            }else{

                header("Location: ../user/dashboard.php");

            }

            exit();

        }else{

            echo "Invalid Password";

        }

    }else{

        echo "User not found";

    }

}

?>