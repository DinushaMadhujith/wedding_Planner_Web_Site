<?php

$conn = mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `user_info` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `user_info`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
      $message[] = 'successfully!';
      header('location:login.php');
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
<?php @include 'header.php'; ?>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<div class="form-container">
   <form action="" method="post">
      <h3>Singup now</h3>
      <input type="text" name="name" required placeholder="Enter Username" class="box">
      <input type="email" name="email" required placeholder="Enter Email" class="box">
      <input type="password" name="password" required placeholder="Enter Password" class="box">
      <input type="password" name="cpassword" required placeholder="Confirm Password" class="box">
      <input type="submit" name="submit" class="btn" value="Register Now">
      <p>already have an account? <a href="login.php">Login Now</a></p>
   </form>

</div>
<?php @include 'footer.php'; ?>
</body>
</html>