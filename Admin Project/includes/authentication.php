<?php
// Start the session (should be placed at the beginning of each PHP file that requires session management)
session_start();
require_once('db_connection.php');

// Check if the login form was submitted
if (isset($_POST['login'])) {
    // Get the entered username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to retrieve the user record
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $con->query($query);

    // Check if a matching user was found
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        // Verify the entered password against the stored password
        if ($password == $user['password']) {
            // Passwords match, user is authenticated

            // Store user information in the session
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];

            // Redirect the user to the home page or any other authorized page
            header('Location: ../index.php');
            exit();
        }
    }else{
        echo "Failed";
    }

    // Authentication failed, show an error message
    $errorMessage = "Invalid username or password";
}

// Logout functionality
if (isset($_GET['logout'])) {
    // Clear all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect the user to the login page
    header('Location: login.php');
    exit();
}
?>
