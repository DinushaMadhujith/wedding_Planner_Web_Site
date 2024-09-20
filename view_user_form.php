<?php
 $connect = mysqli_connect("localhost", "root", "", "contact_db");  
 $sql = "SELECT * FROM user_info";  
 $result = mysqli_query($connect, $sql); 
 ?> 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>View User form</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:1200px;">  
               <a href="admin.php">Back</a>
                <h3 align="">User Form</h3><br />
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                         <th>ID</th>
                         <th>Name</th>
                         <th>Email</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["id"]; ?></td>  
                               <td><?php echo $row["name"];?></td>  
                               <td><?php echo $row["email"]; ?></td>
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  