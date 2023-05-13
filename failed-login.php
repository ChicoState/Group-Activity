<?php
session_start();
include 'connection.php';
$outmsg;
    if($_GET['msg'] == 'failed'){
        $outmsg = "<h2 style='color: red;'>sorry that username and password combination did not match... please try again </h2>";
    }
    
    if($_POST){
        $u = $_POST['userN'];
        $p = $_POST['pWrd'];
        
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
    

?>

<html>
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
        
        <style>
            .btnA{
	            background-color: #3578ad;
	            color: white;
                padding: 15px; 
                text-decoration: none;
                border-radius: 15px;
            }
        </style>
        
        <link rel="stylesheet" href="http://www.accountplusfinance.com/css/try.css">
    </head>


<body class="container">
    
    <div class="jumbotron">
        <h4 class="text-center">Group Activity</h4>
    </div>
    
    <?php
        if($outmsg){
            echo $outmsg;
        }
    ?>
    
    <form method = "post" action="failed-login.php">
        <p> <input type = "text" name="userN" placeholder = "enter user name" style="width: 50%; border-radius: 25px;" /> </p>
        <p> <input type="password" name="pWrd" placeholder="enter password" style="width: 50%; border-radius: 25px;" /> </p>
        <button type="submit" class="btnA">Log In</button>
        <button class ="btnA"> <a href="project.html" style="color: white;">Go to homepage</a> </button>
    </form>
    
</body>

</html>