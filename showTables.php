<?php
	include 'connect.php';
	echo("Users Table");
	$selectString = "SELECT userID,username FROM tblUsers";
	$result = mysqli_query($connection,$selectString);
	$error = mysqli_error($connection);
	echo($error);
	echo("<table><tr><th>userID</th><th>Username</th></tr>");
	while($row = mysqli_fetch_assoc($result)) {
		echo("<tr>");
		foreach($row as $field=> $value){
			echo("<td>$value</td>");		
		}
		echo("</tr>");
	}
	echo("</table>");
	
	$selectString = "SELECT tblUsers.userID,username,name,date,length 
						FROM tblUsers JOIN 
						tblWorkouts ON tblUsers.userID = tblWorkouts.userID";
	$result = mysqli_query($connection,$selectString);
	$error = mysqli_error($connection);
	echo($error);
	echo("<table><tr><th>userID</th><th>Username</th><th>Workout Name</th><th>Date</th><th>Length (min))</th></tr>");
	while($row = mysqli_fetch_assoc($result)) {
		echo("<tr>");
		foreach($row as $field=> $value){
			echo("<td>$value</td>");
		}
		echo("</tr>");
	}
	echo("</table>");
?>