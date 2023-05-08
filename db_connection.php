<?php
    $connect = new mysqli("localhost", "root", "", "fitnesspal_db"); 

    if($connect->connect_errno)
    {
        die("Could not Connect:".$connect->connect_errno); 
    }

?>