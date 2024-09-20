<?php  
	$conn = mysqli_connect("localhost", "root", "", "contact_db");
	$sql = "DELETE FROM team_info WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($conn, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>