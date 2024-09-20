<?php  
 $connect = mysqli_connect("localhost", "root", "", "contact_db");  
 $sql = "SELECT * FROM team_info";  
 $result = mysqli_query($connect, $sql); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>View Contact form</title> 
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
    
     <!-- include jquery js -->
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

        <!-- include bootstrap js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
         
     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
 
      </head>  
      <body> 
    <?php @include 'header.php'; ?> 
           <br />  
           <section class="team">
                <h3 align="">Contact Form</h3><br /> 
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
           <br /> 

      </section>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"> 
</script>


      </body>  
 </html>  