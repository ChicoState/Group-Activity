<html>

<head>

<?php
include 'connection.php';
$msg = " ";
//$con = mysqli_connect("localhost", "csci430", "jagpal08", "chicoSchool");

    if($_POST['btnSubmit']){

        $u = $_POST['uName'];
        $f = $_POST['fName'];
        $l = $_POST['lName'];
        $e = $_POST['eMail'];
        $p = $_POST['pWord'];
        

$sql2 = "select first_name from USERS where user_name = '$u'";


$result = $con->query($sql2);

if ($result->num_rows > 0) {
  // output data of each row
  //while($row = $result->fetch_assoc()) {
    //echo "email: " . $row['email'];
    $msg = "Sorry that user name is taken, please choose another and try again ";
  //}
} else {
  $sql = "INSERT INTO USERS (email, first_name, last_name, user_name, p_word) VALUES ('$e', '$f', '$l', '$u', '$p')";
    if (mysqli_query($con, $sql)) {
        //echo " Thank you for your message";
        $ct_new_user = "CREATE TABLE ". $u. "(freind_user_name varchar(30))";
        if(mysqli_query($con, $ct_new_user)){
            echo "<h4>Thank you for registering ". $f. " </h4>";
        }
        else{
         echo "Error during process";
        }
    }
}

$con->close();
}

?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123745015-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123745015-1');
</script>

<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<meta name="Owner" content="Gurpreet Jagpal">	
<meta name="Business" content="Account Plus Finance, subsidiary of Jagpal Holdings Company">
<meta name="description" content="Market analysis, real estate management, trading, advising, research">
<meta name="location" content="Yuba City, California">
<meta name="idea" content="">


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 



     <title> Group Activity Project Design</title>
     
   
<meta property="og:title" content="CSCI 430 project design" />
<meta property="og:description" content="Project preliminary design" />
<meta property="og:image" content="https://www.msfttechdays.com/wp-content/uploads/2021/07/Software-Development.jpg" />

<!-- twitter cards -->
<meta property="twitter:card" content="summary_large_image"/>
<meta name="twitter:site" content="@JagpalHoldingsCompany">
<meta name="twitter:creator" content="@GurpreetJagpal">
<meta property="twitter:title" content="CSCI 430 project design"/>
<meta property="twitter:description" content="design for csci 430 project"/>
<meta property="twitter:image" content="https://www.msfttechdays.com/wp-content/uploads/2021/07/Software-Development.jpg"/>

<style>
    .floaterLeft{
        float: left;
    }
    

body {
  font-family: "Lato", sans-serif;
}

.btnA{
	background-color: #3578ad;
	color: white;
    padding: 15px; 
    text-decoration: none;
    border-radius: 15px;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 30px;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

</style>

<link rel="stylesheet" href="http://www.accountplusfinance.com/css/try.css">

</head>

<body class="container">
    <div id="jtron" class="jumbotron">
        <h4> <strong> Register </strong></h4>
    </div>
    
    <div id="main">
        <form method = "post" action = "register.php">
          <p> <input type = "text" name = "fName" id="fName" placeholder="Enter first name" /> </p>
          <p> <input type = "text" name = "lName" id="lName" placeholder="Enter last name" /> </p>
          <p><input type = "text" name = "uName" id="uName" placeholder="Pick a username" /> </p>
          <p> <input type = "password" name="pWord" placeholder = "enter password" /> </p>
          <p><input type = "text" name = "eMail" id="eMail" placeholder="enter email" /> </p>
          <input name ="btnSubmit" type="submit" class="btnA" placeholder="Register"></input>
        </form>
    </div> 
    
    <?php
        if($msg != " "){
            echo "<h4>". $msg. "</h4>";
        }
    ?>
    
    <div class="girdContainer">
        <div> <button> <a href ="project.html">Go Back</a></button></div>
    </div>

</body>

</html>