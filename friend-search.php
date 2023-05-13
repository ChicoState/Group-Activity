<?php
session_start();
$uname = $_SESSION['username']; 
    include 'connection.php';
    $name;
        if($_GET['username']){
        $name = $_GET['username'];
    }
    
    
    $sql = "SELECT first_name,last_name, user_name from USERS where user_name LIKE '%$name%' OR first_name LIKE '%$name%' or last_name LIKE '%$name%'";
    $result = $con->query($sql);

    if ($result->num_rows > 0 && $name) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
           echo "<div class=\"content\">";
            echo "<h4> ". $row['first_name']. " ". $row['last_name']. "</h4>";
            echo "<p>". $row['user_name']. "</p>"; 
            //echo "<input type=\"submit\" value=\"Add Friend\" name=\"". $row['user_name']. "\" />";
            echo "<a href=\"friendhandler/addfriend.php?user=$uname&friend=". $row['user_name']. " \"> <button type=\"submit\" class=\"btn\" onclick=\"event_close(); alert('friend request sent');\"> Send Friend Request </button> </a>";
            echo "</div>";
         }
    } else {
        echo "no friends found";
    }
    

?>

<head>
    <style>
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 0px 0px;
  border: none;
  cursor: pointer;
  width: 40%;
  margin-bottom:10px;
  opacity: 0.8;
}

.content{
	border: solid black 2px;
    padding: 25px;
}
    </style>
</head>