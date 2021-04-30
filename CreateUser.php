<?php
	$user = $_POST["user"];

	if($user == "")
	{
		echo("User Id can't be empty");
		exit();
	}
	
	$connection = new mysqli("mysql.eecs.ku.edu", "brandonlefert", "Phaegh9U", "brandonlefert");

	if($connection->connect_errno)
	{
		printf("Connect failed!!\n", $connection->connect_error);
		exit();
	}

	$result = $connection->query("INSERT INTO Users (user_id) VALUES ('".$user."');");

	if($result == true)
	{
		echo"The user was added successfully<br>";
	}
	else
	{
		echo"This user already exists in the system<br>";
	}
	$connection -> close();

?>