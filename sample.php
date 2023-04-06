<?php
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
            echo "<h4> ". $row['first_name']. " ". $row['last_name']. "</h4>";
            echo "<p>". $row['user_name']. "</p>"; 
            echo "<input type=\"submit\" value=\"Add Friend\" name=\" ". $row['user_name']. "\" />";
         }
    } else {
        echo "no friends found";
    }
    

?>