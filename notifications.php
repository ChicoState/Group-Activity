<?php
session_start();
$user_name = $_SESSION['username'];
include 'connection.php';

?>

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



     <title>Notifications</title>


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
</head>

<body class = "container">
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
    <div class = "jumbotron text-center"> <h2>Notifications</h2></div>
    <div class = "text-center">
    <?php
    echo "<h2>Friend Requests </h2>";
    $sql = "SELECT freind_user_name from $user_name where f_status = 'not accepted' ";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $friend = $row['freind_user_name'];
            echo $row['freind_user_name']. " has sent you a friend request <a href=\"http://www.accountplusfinance.com/chico/cins370/friendhandler/friendaction.php?user=$user_name&friend=$friend&action=accept\"> accept</a> <a href=\"http://www.accountplusfinance.com/chico/cins370/friendhandler/friendaction.php?user=$user_name&friend=$friend&action=decline\">decline</a> <br>";
        }
    } else{
        echo "<h4>You have no new friend requests, you're all up to date </h4>";
    }
    
    // next step is to show event requests
     echo "<h2>Event Invites </h2>";
    $sql_events = "SELECT freind_user_name from $user_name where event_status = 'not accepted'";
    $event_sql_results = $con->query($sql_events);
    if($event_sql_results->num_rows > 0){
        while($rows = $event_sql_results->fetch_assoc()){
            echo $rows['freind_user_name']. " has sent you an event invite ". $rows['event_invite']. "<a href='#'>Accept</a> <a href='#'>Decline</a> <br>"; 
        }
    } else{
        echo "<h4>You have no new event invites</h4>";
    }
        
    ?>
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
  document.getElementById("friendForm").style.display = "block";
}

function event_close(){
  document.getElementById("friendForm").style.display = "none";
}

function sidebar_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function sidebar_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</body> 