<?php
// Start a PHP session
session_start();

// Include database connection file
include_once "../db_connection.php";

// Check if user is logged in
if(!isset($_SESSION['email'])){
    // Redirect user to login page
    header("Location: ../log/login.php");
    exit();
}

// Get user information from database
$email_user = $_SESSION['email'];
$query = "SELECT * FROM users_table WHERE email_user = '$email_user'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);

$query = "SELECT * FROM favorite_workouts WHERE email_user = '$email_user'";
$result = mysqli_query($connect, $query);

?>