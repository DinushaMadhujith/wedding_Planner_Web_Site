<?php  
$conn = mysqli_connect("localhost", "root", "", "contact_db");
$sql = "INSERT INTO team_info(name, email, address, p_number, posision, job) VALUES('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["address"]."', '".$_POST["p_number"]."', '".$_POST["posision"]."', '".$_POST["job"]."')";  
if(mysqli_query($conn, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>