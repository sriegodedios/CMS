 <?php  
 $connect = mysqli_connect("mysql.cis.ksu.edu", "krishane", "insecurepassword", "krishane");  
 $output = '';  
 $sql = "SELECT * FROM Resident_Rooster WHERE LastName LIKE '%".$_POST["search"]."%' OR FirstName LIKE '%".$_POST["search"]."%' OR RoomNumber LIKE '%".$_POST["search"]."%'";  
 $result = mysqli_query($connect, $sql);  
 if(mysqli_num_rows($result) > 0)  
 {  
    
      $output .= '<div class="table-responsive">  
                          <table class="table table-hover">  
                               <tr>  
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
					 <td><a href="resident_profile.php?WiD='.$row["WiD"].'" class="btn btn-info btn-block">View Resident Packages <i class="fa fa-arrow-circle-right"></a></td>
                </tr>  
           ';  
      }  
      echo $output;  
 }  
 else  
 {  
      echo 'Data Not Found';  
 }  
 ?>  