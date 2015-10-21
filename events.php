<?php
	include 'connect.php';
	$selectString = "SELECT * FROM tblWorkouts";
	$result = mysqli_query($connection,$selectString);
	$events = array();
	
	while ($row = mysqli_fetch_assoc($result)){
		$eventArray = array();
		$eventArray['title'] = $row['name'];
		$eventArray['start'] = $row['date'];
		//code colour switch here
		$eventArray['color'] = 'red';
		$events[] = $eventArray;
	}
	echo json_encode($events);
?>