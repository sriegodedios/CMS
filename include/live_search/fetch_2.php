 <?php  
 
 $connect = mysqli_connect("mysql.cis.ksu.edu", "krishane", "insecurepassword", "krishane");  
 $output = '';  
 $sql = "SELECT * FROM Resident_Rooster WHERE LastName LIKE '%".$_POST["search"]."%' OR FirstName LIKE '%".$_POST["search"]."%' OR RoomNumber LIKE '%".$_POST["search"]."%'";  
 $result = mysqli_query($connect, $sql);  
 if(mysqli_num_rows($result) > 0)  
 {  
    
      $output .= '<div class="table-responsive">  
                          <table class="table table-hover">  
                               <tr class="gradient-header">  
                                    <th>First Name</th>  
                                    <th>Last Name</th>  
                                    <th>Wildcat ID</th>  
                                    <th>Room Number</th>  
                                   
                               </tr>';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     
                     <td>'.$row["FirstName"].'</td>  
                     <td>'.$row["LastName"].'</td> 
					 <td>'.$row["WiD"].'</td>					 
                     <td>'.$row["RoomNumber"].'</td>  
					 <td><button class="btn btn-outline btn-success" data-toggle="modal" data-target="#myModal">Add Guest <i class="fa fa-arrow-circle-right"></button></td>
				
                </tr> 
		
           ';  
      }  
	  $output .='</table>';
      echo $output;  
 }  
 else  
 {  
      echo 'Data Not Found';  
 }  
 ?>  