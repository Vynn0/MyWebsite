<?php

session_start();

include 'connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username = ? AND password = ?";

    // ANTI SQL INJECTION
    $statement = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($statement, "ss", $username, $password);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);

    if (mysqli_num_rows($result) == 1) {
        // Login successful, redirect to dashboard
        $_SESSION['admin'] = $username; // Store username in session
        header("Location: ../dashboard.php"); // Redirect to dashboard
        exit;
    } else {
        // Login failed, show an error message
        echo "<script>alert('Invalid credentials, please try again!');</script>";
    }
}

?>