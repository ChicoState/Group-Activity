<?php
    session_start(); // start session
    $uname = $_SESSION['username'];
    echo $uname;

?>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="http://www.accountplusfinance.com/css/try.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(document).ready(function(){
  $("#pdata").keyup(function(){
    var data = document.getElementById("pdata").value;
	var url = "sample.php?username=" + data;
	    $("#div1").load(url);
	});
});
</script>
</head>

<body>
   
  
   
    <div id="div1"></div>
</body>
</html>