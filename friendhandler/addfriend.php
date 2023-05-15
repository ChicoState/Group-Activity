<?php

    session_start(); 
    /*start PHP session */ 
    include '../connection.php';
    if($_SESSION['username']){
        //$username = $_SESSION['username'];
        if($_GET['user'] && $_GET['friend']){
            // sql query here
            $user_name = $_GET['user'];
            $friend_name = $_GET['friend'];
            $status = "not accepted";
            //$sql = "INSERT into '$user_name' (freind_user_name, status) VALUES ('$friend_name', '$status') "; 
            $sql1 = "INSERT into $friend_name (freind_user_name, f_status) VALUES ('$user_name', '$status')";
            
            if (mysqli_query($con, $sql1)) {
                // query was successful
                header("Location: ../friends.php");
            } else{
                echo "there was an issue with the query "; 
                echo "<a href=\' '\>click here to go back to previous page </a>";
            }
        }
    }
        
 else{
        //echo "Sorry the session did not begin, you have an error in your code";
        header('location: ../project.html');
    }   


?>