<?php  
 $connect = mysqli_connect("localhost", "root", "", "contact_db");  
 $sql = "SELECT * FROM team_info";  
 $result = mysqli_query($connect, $sql); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!--swiper slider css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style type="text/css">
      .team .container{
         padding: 0 15px;
         max-width: 1230px;
         margin: 0 auto;
      }
      .card_slider{
         padding: 30px 0;
      }
    </style>

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

<section class="about">

   <img src="images/home-slide-1.jpg" alt="">
   <h3>About Us</h3>
   <p><strong>Creating Life-Lasting Memories</strong></p>
   <p> We are a group of seasoned specialists passionate about curating unforgettable experiences that inspire. With accomplished event producers and some of the most creative minds in the industry, our Small Business delivers on every project, from the initial concept through the event itself.</p>
   <P>Since 2021, we have worked with a large number of clients from many different backgrounds, tailoring each event to meet their specific needs and desires. We love caring for people through event planning and thrive on making your dream event a reality.</P>
   <a href="contact.php" class="btn">Contact Us</a>

</section>

<section class="team">

   <h3>OUR TEAM</h3>
   

   <div class="box-container">

      <div class="container">
         <div class="swiper card_slider">
            <div class="swiper-wrapper">

                        <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                        ?>  
                                <div class="swiper-slide">
                               <div class="box">
                              <img src="images/me.jpg" alt="">
                              <h3><?php echo $row["name"]; ?></h3>
                              <p><?php echo $row["posision"]; ?></p>
                              <p><?php echo $row["job"]; ?></p>
                               <div class="share">
                                   <a href="#" class="fab fa-facebook-f"></a>
                                   <a href="#" class="fab fa-twitter"></a>
                                   <a href="#" class="fab fa-linkedin"></a>
                                   <a href="#" class="fab fa-instagram"></a>
                                   </div>
                              </div>
                          </div>

                          <?php  
                          }  
                          ?> 

      </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
         <div class="swiper-pagination"></div>
         </div>
         
      </div>
   </div>
</section>


<?php @include 'footer.php'; ?>

</div>



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"> 
</script>

</body>
</html>