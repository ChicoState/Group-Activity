<?php
    session_start();
    include '../connection.php';
    
    $u = $_GET['user'];
    $f = $_GET['friend'];
    $action = $_GET['action'];
    
    if($action == 'accept'){
        // write query to accept friend request here
        $sql_accept = "UPDATE $u SET f_status = 'accepted' WHERE freind_user_name = '$f'";
        $sql_accept2 = "INSERT into $f (freind_user_name, f_status) VALUES('$u', 'accepted')";
        if (mysqli_query($con, $sql_accept) && mysqli_query($con, $sql_accept2)){
          header('location: ../home.php?requestaction=accepted');
         echo "query variable working"; 
        } 
        
    } else{
        // write query to decline friend request here 
        $sql_decline = "UPDATE $u SET f_status = 'declined' WHERE freind_user_name = '$f'";
        if (mysqli_query($con, $sql_decline)){
            header('location: ../home.php?requestaction=declined');
        }
    }
    
    
    ?>