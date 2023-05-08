<?php
    session_start();
    include_once "../db_connection.php";

    if(!isset($_SESSION['email'])){
        header("Location: login.php");
        exit();
    }
    $user_id = $_SESSION['ID_user'];
    $user_email = $_SESSION['email'];
    $video_id = $_POST['video_id'];
    $query = "INSERT INTO favorite_workouts (ID_user, email_user, video_id, muscle_group, video_name, video_location, video_description, video_bodyTarget) 
        SELECT '$user_id', '$user_email', video_id, muscle_group, video_name, video_location, video_description, video_bodyTarget FROM exercises_demo
        WHERE video_id = '$video_id'";
    $result = mysqli_query($connect, $query);
    header("Location: exerciseDemo.php");
    exit();


?>

        