<?php
    session_start(); 
    $username; 
    if($_SESSION['username']){
        $username = $_SESSION['username'];
    }
include '../connection.php';


?>

<html>
    
<head>
    <title>Events List View</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>

<body class = "container">
    <div class = "text-center">
        <h1> Events List for <?php echo $username; ?> </h1>
    </div>
    <?php
/*
    select * from table_name where SYSDATE() > event_start_date; // past events
    select * from table_name where SYSDATE() < event_start_date order by event_start_date; // display them in increasing order 
*/

$past_events = "select * from $username where SYSDATE() > event_start_date"; // past events, earliest to latest 
$results = mysqli_query($con, $past_events);
$count_events = mysqli_num_rows($results);

if ($count_events > 0) {
	echo "<h2 class = 'text-center'><strong>Previous events</strong></h2>"; 
	$data_arr = array();
	
	$i = 1;
	
	while ($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
		$data_arr[$i]['title'] = $data_row['event_name'];
		$data_arr[$i]['start'] = date("Y-m-d", strtotime($data_row['event_start_date']));
		$data_arr[$i]['end'] = date("Y-m-d", strtotime($data_row['event_end_date']));
		$data_arr[$i]['color'] = '#'.substr(uniqid(),-6);	//'green' pass color name -- uniqid(),-6
		// $data_arr[$i]['url'] = 'https://www.shinerweb.com';
		// $data_arr[$i]['url'] = 'http://www.accountplusfinance.com/chico/cins370/testing/start.php';
		echo "<h4 class = 'text-center'>". $data_arr[$i]['title']. " </h4> ";
		$i++;
	}
} else{
    echo "<h4 class = 'text-center'> No Previous Events </h4>";
}	


$future_events = "select * from $username where SYSDATE() < event_start_date order by event_start_date"; // future events 
$results_future = mysqli_query($con, $future_events);
$count_events_future = mysqli_num_rows($results_future);

if ($count_events_future > 0) {
	echo "<h2 class = 'text-center'> <strong> Upcoming Events </strong> </h2>"; 
	$data_arr_future = array();
	
	$i_future = 1;
	
	while ($data_row_future = mysqli_fetch_array($results_future, MYSQLI_ASSOC)) {
		$data_arr_future[$i_future]['title'] = $data_row_future['event_name'];
		$data_arr_future[$i_future]['start'] = date("Y-m-d", strtotime($data_row_future['event_start_date']));
		$data_arr_future[$i_future]['end'] = date("Y-m-d", strtotime($data_row_future['event_end_date']));
		$data_arr_future[$i_future]['color'] = '#'.substr(uniqid(),-6);	//'green' pass color name -- uniqid(),-6
		// $data_arr[$i]['url'] = 'https://www.shinerweb.com';
		// $data_arr[$i]['url'] = 'http://www.accountplusfinance.com/chico/cins370/testing/start.php';
		echo "<h4 class = 'text-center'>". $data_arr_future[$i_future]['title']. "</h4>";
		$i++;
	}
}	else{
    echo "<h2 class = 'text-center'> <strong> No Upcoming Events </strong> </h2>";
}


//echo json_encode($data);
?>
</body>
</html>