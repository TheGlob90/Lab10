<?php
	$user = $_POST["user"];
	$post = $_POST["post"];

	if($post == "")
	{
		echo("Your post can't be empty");
		exit();
	}
	
	$connection = new mysqli("mysql.eecs.ku.edu", "brandonlefert", "Phaegh9U", "brandonlefert");

	if($connection->connect_errno)
	{
		printf("Connect failed!!\n", $connection->connect_error);
		exit();
	}

	$result = $connection->query("INSERT INTO Posts (content, author_id) VALUES ('".$post."', '".$user."');");

	if($result == true)
	{
		echo"The post was added successfully<br>";
	}
	else
	{
		echo"This user doesn't exist in the system<br>";
	}
	$connection -> close();

?>