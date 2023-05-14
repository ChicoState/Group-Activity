<?php
session_start();
$uname = $_SESSION['username']; 
    include 'connection.php'; 
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

.right {
  float: right;
  width: 300px;
  border: 3px solid #73AD21;
  padding: 10px;
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

.eventbtn {
  background-color: white;
  color:dodgerblue;
  border: none;
  padding: 0px 0px;
  font-size: 20px;
  cursor: pointer;
  position: absolute;
  margin-top: 195px;
  margin-right: 215px;
  top: 0;
  right: 0;
}

.eventbtn:hover {
  color:royalblue;
}

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

.form-popup {
  display: none;
  width: 50%;
  height: 30vh;
  align-items: center;
  justify-content: center;
  border: 3px solid #f1f1f1;
}

/* Add styles to the form container */
.form-container {
  max-width: 75%;
  padding: 10px;
  background-color: white;
}

.form-container input[type=text], .form-container input[type=date],
.form-container input[type=time]{
  width: 135%;
  padding: 10px;
  margin: 5px 0 10px 0;
  border: black;
  background: whitesmoke;
}

.form-container input[type=text]:focus, .form-container input[type=date]:focus,
.form-container input[type=time]:focus {
  background-color: #ddd;
  outline: none;
}

.form-container .btn {
  background-color: dodgerblue;
  color: white;
  padding: 0px 0px;
  border: none;
  cursor: pointer;
  width: 40%;
  margin-bottom:10px;
  opacity: 0.8;
}

.form-container .cancel {
  background-color: dodgerblue;
}

.form-container .btn:hover, .open-button:hover {
  opacity: .5;
}

.icon {
  color: dodgerblue;
}

.icon:hover {
  color: royalblue;
}

.rounded{
    border: solid black 2px;
    padding: 20px; 
}
.w3-button {
  color: dodgerblue;
  padding: 0px 0px;
  font-size:xx-large;
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
<script>
    $(document).ready(function(){
        
        $("#pdata").keyup(function(){
            $("#hideFriend").show(1000);
            $("#div1").show(1000);
            var data = document.getElementById("pdata").value;
          
            var url = "friend-search.php?username=" + data;
          
          
	        $("#div1").load(url);
	    });
	    
	    $("#closebutton").click(function(){
	        $("#div1").hide(500);
	        $("#hideFriend").hide(500);
	    });
    });
</script>

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
        <a class="nav-link" href="calendar.html">View Events</a>
     </li> 
     
    <li class="nav-item">
        <a class="nav-link" href="exit.php">Logout</a>
     </li> 
      
    </ul>
  </div> 
  
</nav>
    <div id="jtron" class="jumbotron">
        <h4> <strong> GROUP ACTIVITY </strong></h4>
    </div>

    <div>
        <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
          <button onclick="sidebar_close()" class="w3-bar-item w3-large">Close &times;</button>
           <a class="btn btn-primary" href="http://www.accountplusfinance.com/chico/cins370/notifications.php"> Notifications <span class="badge badge-light"> <?php echo $not_counr; ?> </span> </a>
          <a href="http://www.accountplusfinance.com/chico/cins370/home.php" class="w3-bar-item w3-button">Home</a>
          <a href="http://www.accountplusfinance.com/chico/cins370/friends.php" class="w3-bar-item w3-button">Friends</a>
          <a href="#" class="w3-bar-item w3-button">Profile</a>
          <a href="calendar.html" class="w3-bar-item w3-button">View events</a>
          <a href="exit.php" class="w3-bar-item w3-button">Logout</a>
        </div>

    <button class = "w3-button" onclick = "sidebar_open()">☰</button>
    <button class = "eventbtn" onclick="event_open()"><i class="fa fa-plus"></i></button>

        <h4 class="text-center">Your Current Friends</h4>
        <?php
            $view_friend = "SELECT freind_user_name from $uname where f_status = 'accepted' ";
        $results = $con->query($view_friend);
        if ($results->num_rows > 0) {
            echo "<div class=\"rounded\"> <ul>";
            while($row = $results->fetch_assoc()) {
                echo "<li> <h4> ". $row['freind_user_name']. "</h4> </li>"; 
            }
            
            echo "</ul> </div>";
            
        }
        ?>

    <div class="form-popup" id="friendForm">
      <form action="friends.php" class="form-container">
        <h1>Friend Request</h1>
        <label for="event"><b>Username</b></label>
        <input type="text" style="border-radius: 25px;" id="pdata" name = "friend_inp_field" placeholder="What is your friend's Username?" required />

      <!--  <button type="submit" class="btn" onclick="event_close()">Send Friend Request</button> -->
        <button type="button" id="closebutton" class="btn cancel" onclick="event_close()">Close</button>
      </form>
      

    </div>
    
          <p id="hideFriend" style="display: none;">Friend search results: </p>
        <div id="div1"> </div>
      <div id="view-friends"> </div>
      

    </div>


    <!--
    <ul>
      <li>Fred Burgerberry</li>
      <li>Anna Tester</li>
      <li>Terry Loper</li>
    </ul>
    -->
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

</html>