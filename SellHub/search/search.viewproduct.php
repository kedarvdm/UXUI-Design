<?php
	require("../config.php");
	$searchtext=$_GET['searchtext'];
	if(!empty($searchtext))
	{
		$query = " 
			SELECT 
				type
			FROM producttype 
			WHERE type like '%".$searchtext."%'";
			
		$resultSet = mysqli_query($db,$query);  
		if($resultSet)
		{
			while ($row = mysqli_fetch_assoc($resultSet))
			{
				$array[] = $row;
			}
		}
		echo json_encode($array);
	}
?>