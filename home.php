<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <h3>WELCOME TO EVENT PLANNERS</h3>
               <p>Services For Every Occasion</p>
               <p>We aim to deliver fresh and enchanting experiences for clients and attendees alike.</p>
               <a href="singup.php" class="btn">Singup</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/birthday.jpg) no-repeat">
            <div class="content">
               <h3>WELCOME TO EVENT PLANNERS</h3>
               <p>Services For Every Occasion</p>
               <p>We aim to deliver fresh and enchanting experiences for clients and attendees alike.</p>
               <a href="singup.php" class="btn">Singup</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/weddings.jpg) no-repeat">
            <div class="content">
               
               <h3>WELCOME TO EVENT PLANNERS</h3>
               <p>Services For Every Occasion</p>
               <p>We aim to deliver fresh and enchanting experiences for clients and attendees alike.</p>
               <a href="singup.php" class="btn">Singup</a>
            </div>
         </div>

      </div>
      
      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="homepar">
   
   <h3>Why You Should Choose Us?</h3>
   <p>We pay meticulous attention to the minutest of detail.<br> Timeliness and exceptional quality of service is rest assured.</p>
   <br><br>
   <a href="contact.php" class="btn">contact us</a>

</section>

<section class="services">

   <h3>Our Services</h3>

   <div class="swiper service-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/wd.jpg" alt="">
            <div class="content">
               <h3>Wedding</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/bdd.jpg" alt="">
            <div class="content">
               <h3>Birthday Parties</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/batch.jpg" alt="">
            <div class="content">
               <h3>Batch Reunions</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/show.jpg" alt="">
            <div class="content">
               <h3>Musical Shows</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/psl.jpg" alt="">
            <div class="content">
               <h3>Proposals & Anniversaries</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">about us</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/Newborn.jpg" alt="">
            <div class="content">
               <h3>Baby Shower/Bridal Shower</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
               <a href="about.php" class="btn">About us</a>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>