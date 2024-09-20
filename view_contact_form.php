<?php  
 $connect = mysqli_connect("localhost", "root", "", "contact_db");  
 $sql = "SELECT * FROM contact_form";  
 $result = mysqli_query($connect, $sql); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>View Contact form</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:1200px;">  
                <h3 align="">Contact Form</h3><br />            
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                         <th>ID</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Number</th>
                         <th>Plan</th>
                         <th>Address</th>
                         <th>Massage</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["id"]; ?></td>  
                               <td><?php echo $row["name"];?></td>  
                               <td><?php echo $row["email"]; ?></td>
                               <td><?php echo $row["number"];?></td> 
                               <td><?php echo $row["plan"]; ?></td>   
                               <td><?php echo $row["address"]; ?></td>
                               <td><?php echo $row["message"]; ?></td>
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