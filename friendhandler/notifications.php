<?php
    session_start();
    $notifications; 
    include '../connection.php';
    if($_SESSION['username']){
        //$sql = "SELECT count(user_name) from ". $_SESSION['username']. " where user_name = \'gjag\' ";
        $sql = "SELECT COUNT(*) from USERS where user_name = \'gjag\' ";
  $result = $con->query($sql);

    if ($result->num_rows > 0) {
        //echo $row['COUNT']; 
        // mysql_result($sql, 0);
        echo "we found some result"; 
    } else{
        echo "No results found"; 
    }
}  
    
?>