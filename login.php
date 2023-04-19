<?php 
    session_start();
    include 'connection.php';
/*start PHP session */
?>
<html>

<head>
    
<?php


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
            header('Location: failed-login.php?msg=failed');
        }
    } 
    
    else{
        header('Location: failed-login.php?msg=failed');
    }
  
?>

</head>
</html>