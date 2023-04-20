<?php

    session_start(); 
    /*start PHP session */ 
    include 'connection.php';
    if($_SESSION['username']){
        $user_name = $_SESSION['username'];
        if($_GET['friend']){
            // sql query here
            //$user_name = $_GET['user'];
            $friend_name = $_GET['friend'];
            $status = "not accepted";
            $request = "requested";
            $sql = "INSERT into $friend_name (freind_user_name, status) VALUES ('$user_name', '$status') "; // going from user to friend trying to request friendship
            $sql2 = "INSERT into $user_name (freind_user_name, status) VALUES ('$friend_name', '$request')";
            //$result = $con->query($sql);
            if (mysqli_query($con, $sql) && mysqli_query($con, $sql2)) {
                // query was successful
                //echo "query successful"; 
                header('location: friends.php'); 
            } else{
                echo "Sorry there was an issue with adding friends"; 
            }
        }   
    }
    
        
 else{
        //echo "Sorry the session did not begin, you have an error in your code";
        header('location: project.html');
    }   


?>