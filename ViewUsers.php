<?php	
	$connection = new mysqli("mysql.eecs.ku.edu", "brandonlefert", "Phaegh9U", "brandonlefert");

	if($connection->connect_errno)
	{
		printf("Connect failed!!\n", $connection->connect_error);
		exit();
	}

	$result = $connection->query("SELECT * FROM Users");

	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			echo "User: " .$row["user_id"]. "<br>";
		}
	}
	else
	{
		echo "0 Users";
	}

	$connection -> close();

?>