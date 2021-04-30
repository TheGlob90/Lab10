<?php	
	$user =$_POST["user_id"];
	$connection = new mysqli("mysql.eecs.ku.edu", "brandonlefert", "Phaegh9U", "brandonlefert");

	if($connection->connect_errno)
	{
		printf("Connect failed!!\n", $connection->connect_error);
		exit();
	}

	$result = $connection->query("SELECT content FROM Posts WHERE author_id='".$user."'");

	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			echo "Post: " .$row["content"]. "<br>";
		}
	}
	else
	{
		echo "0 Posts";
	}

	$connection -> close();

?>