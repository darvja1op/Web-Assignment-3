<?php
	include 'connect.php';
	
	$dropQuery = "DROP TABLE IF EXISTS tblWorkouts;";
	$result = mysqli_query($connection,$dropQuery);
	echo("Dropping existing table... $result<br>");
	$dropQuery = "DROP TABLE IF EXISTS tblUsers;";
	$result = mysqli_query($connection,$dropQuery);
	echo("Dropping existing table... $result<br>");
	
	
	$createQuery = "CREATE TABLE tblUsers
		(
			userID INT(6) NOT NULL AUTO_INCREMENT,
			username VARCHAR(20) NOT NULL,
			password VARCHAR(50) NOT NULL,
			PRIMARY KEY(userID)
		)";
	$result = mysqli_query($connection,$createQuery);
	echo("Creating Users table... $result<br>");
	$error = mysqli_error($connection);
	echo($error);
	
	$createQuery = "CREATE TABLE tblWorkouts
		(
			workoutID INT(6) NOT NULL AUTO_INCREMENT,
			name VARCHAR(20) NOT NULL,
			date DATE NOT NULL,
			length INT(6) NOT NULL,
			userID INT(6) NOT NULL,
			PRIMARY KEY(workoutID),
			FOREIGN KEY(userID) REFERENCES tblUsers(userID) ON DELETE CASCADE
		)";
	$result = mysqli_query($connection,$createQuery);
	echo("Creating Workout table... $result<br>");
	$error = mysqli_error($connection);
	echo($error);
	
	echo("Inserting data...");
	createUser('Dale','test',$connection);
	createUser('Jared','Jared',$connection);
	createUser('Zoe','Zoe',$connection);
	createWorkout('Walking','2015-10-18',270,3,$connection);
	createWorkout('Gym','2015-10-17',135,3,$connection);
	createWorkout('Cycling','2015-10-05',20,3,$connection);
	createWorkout('Badminton','2015-10-09',60,3,$connection);
	createWorkout('Walking','2015-10-17',435,2,$connection);
	createWorkout('Gym','2015-10-18',135,2,$connection);
	createWorkout('Cycling','2015-10-15',20,2,$connection);
	createWorkout('Walking','2015-10-14/10',60,2,$connection);
	
	function createUser($username,$password,$connection){
		$insertQuery = "INSERT INTO tblUsers(username,password) VALUES ('$username','$password')";
		$result = mysqli_query($connection,$insertQuery);
		$error = mysqli_error($connection);
		echo($error);
	}
	
	function createWorkout($name,$date,$length,$userID,$connection){
		$insertQuery = "INSERT INTO tblWorkouts(name,date,length,userID) VALUES ('$name','$date','$length','$userID')";
		$result = mysqli_query($connection,$insertQuery);
		$error = mysqli_error($connection);
		echo($error);
	}
?>