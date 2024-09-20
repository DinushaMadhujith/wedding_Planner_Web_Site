<?php 
/* 
	$conn = mysqli_connect("localhost", "root", "", "contact_db");
	$id = $_POST["id"];  
	$name = $_POST["name"];  
	$email = $_POST["email"];
	$address = $_POST["address"];
	$p_number = $_POST["p_number"]; 
	$posision = $_POST["posision"];
	$job = $_POST["job"];
	$column_name = $_POST["column_name"]; 
	$sql = "UPDATE team_info SET ".$column_name."='".$name."' '".$email."' '".$address."' '".$p_number."' '".$posision."' '".$job."' WHERE id='".$id."'";  
	if(mysqli_query($conn, $sql))  
	{  
		echo 'Data Updated';  
	} */
	$conn = mysqli_connect("localhost", "root", "", "contact_db");
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE team_info SET ".$column_name."='".$text."' WHERE id='".$id."'";  
	if(mysqli_query($conn, $sql))  
	{  
		echo 'Data Updated';  
	}  
  
 ?>