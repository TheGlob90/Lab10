<?php	
	$connection = new mysqli("mysql.eecs.ku.edu", "brandonlefert", "Phaegh9U", "brandonlefert");

	if($connection->connect_errno)
	{
		printf("Connect failed!!\n", $connection->connect_error);
		exit();
	}

	$result = $connection->query("SELECT content, author_id, post_id FROM Posts");

	$count = 1;
	$selected = $_POST['post'];
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$N = count($selected);
			for($i = 0; $i < $N; $i++)
			{
				if($selected[$i] == $row["post_id"])
				{
					$id = $row["post_id"];
					$delete = $connection->query("DELETE FROM Posts WHERE post_id ='".$id."'");
					echo "You deleted the post with the id " .$id. "<br>";
				}	
			}		
			$count++;
		}
	}
	else
	{
		echo"There are no posts!";
	}

	
	$connection -> close();

?>