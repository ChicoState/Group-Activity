<?php
    session_start(); 
    $username; 
    if($_SESSION['username']){
        $username = $_SESSION['username'];
    }
    include '../connection.php';
    $event_name = $_POST['event_name'];
    $event_start_date = date("y-m-d", strtotime($_POST['event_start_date']));
    $event_end_date = date("y-m-d", strtotime($_POST['event_end_date']));
    
    $insert_query = "insert into $username (event_name, event_start_date, event_end_date) VALUES ('$event_name', '$event_start_date', '$event_end_date')";

    if(mysqli_query($con, $insert_query)){
        // query was successful
        $data = array(
            'status' => true,
            'msg' => 'Event successfully added',
        );
    } else{
        // there was an error querying the data
        $data = array(
            'status' => false,
            'msg' => 'Sorry there was an error adding the event',
        );
    }
echo json_encode($data); 
?>