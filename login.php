<?php session_start(); /*start PHP session */?>
<html>

<head>
    
<?php
include 'connection.php';

    if($_POST['uName']){
        $u = $_POST['uName']; 
        $p = $_POST['pWord'];
        $sql2 = "select first_name from USERS where user_name = '$u' AND p_word = '$p'";
        $result = $con->query($sql2);
        if ($result->num_rows > 0) {
            // output data of each row
            //while($row = $result->fetch_assoc()) {
            //echo "email: " . $row['email'];
            $_SESSION["username"] = $u; // username = session id (session id I can call what I like )
            header('Location: home.php');
        }
        else if($result->num_rows == 0){
            echo "Sorry that username or password is incorrect please try again";
            // header('Location: .php');
        }
    } 
    
    else{
        echo "Please go back and login";
    }
  
?>

</head>
</html>