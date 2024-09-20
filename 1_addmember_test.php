<?php

$conn = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['submit'])){

   
   $name = $_POST['name'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $p_number = $_POST['p_number'];
   $posision = $_POST['posision'];
   $job = $_POST['job'];

   $select = mysqli_query($conn, "SELECT * FROM `team_info` WHERE email = '$email' AND id = '$id'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `team_info`(`name`, `email`, `address`, `p_number`, `posision`, `job`) VALUES ('$name','$email','$address','$p_number','$posision','$job')") or die('query failed');
      $message[] = 'successfully!';
      header('location:admin.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


</head>
<body>
<!--<div style="background:url(images/bgi.jpg)no-repeat"> -->
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<div class="form-container">
   <form action="" method="post">
      <h3>Add New Member</h3>
      <input type="text" name="name" required placeholder="enter username" class="box">
      <input type="email" name="email" required placeholder="enter email" class="box">
      <input type="text" name="address" required placeholder="enter address" class="box">
      <input type="text" name="p_number" required placeholder="enter number" class="box">
      <input type="text" name="posision" required placeholder="enter posision" class="box">
      <input type="text" name="job" required placeholder="enter job" class="box">
      <input type="submit" name="submit" class="btn" value="Add New Member">
   </form>

</div>
</body>
</html>