 <?php  
$row_array = array();
 $connect = mysqli_connect("mysql.cis.ksu.edu", "krishane", "insecurepassword", "krishane");  
 $output = '';  
 $sql = "SELECT * FROM Resident_Rooster WHERE LastName LIKE '%".$_POST["search"]."%' OR FirstName LIKE '%".$_POST["search"]."%' OR RoomNumber LIKE '%".$_POST["search"]."%'";  
 $result = mysqli_query($connect, $sql);  
 if(mysqli_num_rows($result) > 0)  
 {  
   
         $output .= '<div class="table-responsive">  
                          <table class="table table-striped table-bordered table-hover">  
                              <thead class="gradient-header">
							   <tr>  
                                    <th>First Name</th>  
                                    <th>Last Name</th>  
                                    <th>Wildcat ID</th>  
                                    <th>Room Number</th>
									<th>SELECT</th>	
                                   
                               </tr>
								</thead>
								<tbody>';
      while($row = mysqli_fetch_array($result))  
      {  
											/* $row_array[] = $row["LastName"];  
											$j=1; 
											for($i = 0; $i < sizeof($row_array); $i++){ 
												if($j % 2 == 0){
													$output .= '<tr class="gradeA Even" role="row">'; 
													}else{
													$output .= '<tr class="gradeA Odd" role="row">';} 
													$j++; } */
           $output .= '  
                
                <tr>     
                     <td>'.$row["FirstName"].'</td>  
                     <td>'.$row["LastName"].'</td> 
					 <td>'.$row["WiD"].'</td>					 
                     <td>'.$row["RoomNumber"].'</td>  
					 <td><a href="php/profile_generator.php?WiD='.$row["WiD"].'" class="btn btn-info btn-block">View Resident Packages <i class="fa fa-arrow-circle-right"></a></td>
                </tr>  
           ';  
     }  
	  $output .='</tbody></table>';
      echo $output;  
 }  
 else  
 {  
      echo 'Data Not Found';  
 }  
 ?>  