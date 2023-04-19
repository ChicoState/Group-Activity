<?php
session_start();
$user_name = $_SESSION['username'];
include 'connection.php';

?>

<body class = "container">
    <div class = "jumbotron"> <h2>Notifications</h2></div>
    <div class = "text-center">
    <?php
    echo "<h4>Friend Requests </h4>";
    //$sql = "SELECT freind_user_name from USERS where user_name LIKE '%$name%' OR first_name LIKE '%$name%' or last_name LIKE '%$name%'";
    $sql = "SELECT freind_user_name from $user_name where f_status = 'not accepted' ";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['freind_user_name']. " has sent you a friend request <button> Accept </button> <button> Decline </button> <br>";
        }
    } else{
        echo "<h2>You have no new friend requests, you're all up to date </h2>";
    }
    
    // next step is to show event requests
     echo "<h4>Event Invites </h4>";
    $sql_events = "SELECT freind_user_name from $user_name where event_status = 'not accepted'";
    $event_sql_results = $con->query($sql_events);
    if($event_sql_results->num_rows > 0){
        while($rows = $event_sql_results->fetch_assoc()){
            echo $rows['freind_user_name']. " has sent you an event invite ". $rows['event_invite']. "<br>"; 
        }
    } else{
        echo "<h2>You have no new event invites</h2>";
    }
        
    ?>
    </div>
</body> 