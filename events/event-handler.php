<?php
    session_start(); 
    $username; 
    if($_SESSION['username']){
        $username = $_SESSION['username'];
    }
include '../connection.php'; // connection to database 

$friend;

if($_GET['friend']){
    $friend = $_GET['friend'];
    
     $event_start_date = date("y-m-d", strtotime($_GET['event_start_date']));
    $event_end_date = date("y-m-d", strtotime($_GET['event_end_date']));
    //echo "start date: ". $event_start_date. "<br> end date ". $event_end_date. "<br>";
    $event_name = $_GET['event_name'];
    
    

    $sql_query = "INSERT INTO $friend (freind_user_name, f_status, event_status, event_name, event_start_date, event_end_date) VALUES ('$username', 'accepted', 'not accepted','$event_name', '$event_start_date', '$event_end_date')"; 
        if (mysqli_query($con, $sql_query)) {
            header("Location: start.php");
        } else{
            echo "<h4>There was an error handling your request </h4>";
        }
}

?>