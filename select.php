<?php  
 $conn = mysqli_connect("localhost", "root", "", "contact_db");  
 $output = '';  
 $sql = "SELECT * FROM team_info ORDER BY id DESC";  
 $result = mysqli_query($conn, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="25%">Name</th>  
                     <th width="25%">Email</th>
                     <th width="45%">Address</th>
                     <th width="20%">Phone Number</th> 
                     <th width="30%">Posision</th> 
                     <th width="30%">Job</th>
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM team_info LIMIT $delete_records";
		  mysqli_query($conn, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="name" data-id1="'.$row["id"].'" contenteditable>'.$row["name"].'</td>  
                     <td class="email" data-id2="'.$row["id"].'" contenteditable>'.$row["email"].'</td> 
                     <td class="address" data-id3="'.$row["id"].'" contenteditable>'.$row["address"].'</td>  
                     <td class="p_number" data-id4="'.$row["id"].'" contenteditable>'.$row["p_number"].'</td>
                     <td class="posision" data-id5="'.$row["id"].'" contenteditable>'.$row["posision"].'</td>  
                     <td class="job" data-id6="'.$row["id"].'" contenteditable>'.$row["job"].'</td> 

                     <td><button type="button" name="delete_btn" data-id7="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">Delete</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="name" contenteditable></td>  
                <td id="email" contenteditable></td>
                <td id="address" contenteditable></td> 
                <td id="p_number" contenteditable></td>
                <td id="posision" contenteditable></td>
                <td id="job" contenteditable></td> 
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Add</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="name" contenteditable></td>  
					<td id="email" contenteditable></td> 
                         <td id="p_number" contenteditable></td>  
                         <td id="address" contenteditable></td> 
                         <td id="posision" contenteditable></td> 
                         <td id="job" contenteditable></td> 
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>