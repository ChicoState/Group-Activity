<?php 
    session_start(); 
    if($_SESSION['username']){
        $username = $_SESSION['username'];
    }
        
    else{
        //echo "Sorry the session did not begin, you have an error in your code";
        header('location: project.html');
    }
/*start PHP session */ 
include 'connection.php';

$sql_noti = "select count(f_status) from $username where f_status = 'not accepted'";
$result = mysqli_query($con, $sql_noti);
//if ($result = mysqli_query($con, $sql_noti)) {

    // Return the number of rows in result set
   $not_counr  = mysqli_num_rows($result);
   if($not_counr == 0){
       $not_counr = "No new notifications";
   }else{
       $not_counr = "You have new notifications"; 
   }
    
    // Display result
   // printf("Total rows in this table : ". $not_counr); /* NO NEED TO DISPLAY HERE */ 
//}
?>

<html>

<head>
<title>Group Activity</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


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

<!-- in house javascript -->

<script type="text/javascript" src="scriptjs/jq.js"> </script>



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


<link rel="stylesheet" href="http://www.accountplusfinance.com/css/430project.css">
</head>

<body class="container">

        <nav class="navbar navbar-expand-md bg-dark navbar-dark" >

  <a class="navbar-brand" href="#"><strong>Welcome <?php echo $username; ?> </strong> <span style="display: none;"> Gurpreet Jagpal</span></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  
    <ul class="navbar-nav">
        
      <li class="nav-item">
        <a class="nav-link" href="http://www.accountplusfinance.com/chico/cins370/notifications.php">Notifications <span class="badge badge-light"> <?php echo $not_counr; ?> </span> </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="http://www.accountplusfinance.com/chico/cins370/home.php">Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="http://www.accountplusfinance.com/chico/cins370/friends.php">Friends</a>
      </li> 
      
    <li class="nav-item">
        <a class="nav-link" href="events/start.php">View Events</a>
     </li> 
     
    <li class="nav-item">
        <a class="nav-link" href="exit.php">Logout</a>
     </li> 
      
    </ul>
  </div> 
  
</nav>

    <h2 class="text-center"> <strong>Welcome <?php echo $username; ?> </strong> </h2>
    <div id="jtron" class="jumbotron">
        <h4> <strong> GROUP ACTIVITY </strong></h4>
    </div>
    
        <div class="containerbackground">
            <div class="borderedbackground">
           	    <h1>Group Activity </h1>
            </div>
        </div>

    <div>
        <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
          <button onclick="sidebar_close()" class="w3-bar-item w3-large">Close &times;</button>

          <a class="btn btn-primary" href="http://www.accountplusfinance.com/chico/cins370/notifications.php"> Notifications <span class="badge badge-light"> <?php echo $not_counr; ?> </span> </a>
          <a href="http://www.accountplusfinance.com/chico/cins370/home.php" class="w3-bar-item w3-button">Home</a>
          <a href="http://www.accountplusfinance.com/chico/cins370/friends.php" class="w3-bar-item w3-button" >Friends</a>
          <a href="#" class="w3-bar-item w3-button">Profile</a>
          <a href="calendar.html" class="w3-bar-item w3-button">View events</a>
          <a href="exit.php" class="w3-bar-item w3-button">Logout</a>
        </div>
        
        <div id="div_load_files"> </div>

    <button class = "w3-button" onclick = "sidebar_open()">☰</button>
    <button class = "eventbtn" onclick="event_open()"><i class="fa fa-plus"></i></button>

    <div class="form-popup" id="myForm">
      <form action="#" class="form-container">
          
        <h1>Create Event</h1>
        <label for="event"><b>Event</b></label>
        <input type="text" placeholder="What would you like to plan?" required>

        <label for="event"><b>Event Date</b></label>
        <input type="date" required>

        <label for="event"><b>Time</b></label>
        <input type="time" required>

        <button type="submit" class="btn" onclick="event_close(); alert('Event created');">Create Event</button>
        <button type="button" class="btn cancel" onclick="event_close()">Close</button>
        
    <?php
        $view_friend = "SELECT freind_user_name from $username where f_status = 'accepted' ";
       $results = $con->query($view_friend);
        if ($results->num_rows > 0) {
           while($row = $results->fetch_assoc()) {
                echo "<br> <input type=\"radio\" name=\"friend_req_event\">";
               echo "<label for=\"friend_req_event\">".$row['freind_user_name']. "</label><br>"; 
            }
        }
    ?>
      </form>
      
      
    </div>
    
</div>

<script>
function openNav() {
    $("#jtron").hide(2500);
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    $("#jtron").show(2500);
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}

function event_open(){
  document.getElementById("myForm").style.display = "block";
}

function event_close(){
  document.getElementById("myForm").style.display = "none";
}

function sidebar_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function sidebar_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>

</html>