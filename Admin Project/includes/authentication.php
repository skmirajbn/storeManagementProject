<?php
session_start();
require_once('db_connection.php');


if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM users WHERE user_username = '$username'";
    $result = $con->query($query);


    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
 
        if ($password == $user['user_password']) {

            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['user_username'];


            header('Location: ../index.php');
            exit();
        }
    }else{
        echo "Failed";
    }
    $errorMessage = "Invalid username or password";
}

?>
