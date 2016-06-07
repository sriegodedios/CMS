<?php
$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
include ('php/establish_link.php');
//$q = "SELECT * FROM `Package_List` WHERE `WiD`='$WiD' AND `Status`='Recieved' ASC LIMIT ('$start_from, $limit')";
$q = "SELECT * FROM `Package_List` WHERE `WiD`='$WiD' AND `Status`='Recieved' ORDER BY `Package_Number` ASC LIMIT $start_from, $limit";
$result = mysql_query($q);

/* if (! $result){
   throw new My_Db_Exception('Database error: ' . mysql_error());
}
 */


?>
<div class="row" id="recived">
			<div class="row">
<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Recieved
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label>Show <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 285px;">Date Checked In</th>
										<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 341px;">Package Number</th>
										<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 312px;">Location</th>
										<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 249px;">CA Initials</th>
										<th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 187px;">CSS grade</th></tr>
                                    </thead>
                                    <tbody>
									
<?php 
$WiD_Array = Array();
while($row = mysql_fetch_assoc($result)){ ?>  
<?  $WiD_Array[] = $row['WiD']        ?>                                      
                                        <tr class="gradeA<? 
										$j=1; 
											for($i = 0; $i < sizeof($WiD_Array); $i++){ 
												if($j % 2 == 0){
													echo" Even"; 
													}else{
														echo" Odd";} $j++; }?>" role="row">
                                            <td class="sorting_1"><?echo $row['Date_Checked_IN'];?></td>
                                            <td><?echo $row['Package_Number'];?></td>
                                            <td><?echo $row['Location']; ?></td>
                                            <td class="center"><?echo $row['CA_In']; ?></td>
											<td><a class="btn btn-danger">Delete Package</a></td>
										</tr>
										<? 
	};			
?>
										
										</tbody>
<?php  
$sql = "SELECT COUNT(`WiD`) FROM Package_List WHERE `WiD`='$WiD' AND Status='Recieved'";  
$rs_result = mysql_query($sql);  
$row = mysql_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li class='paginate_button' aria-controls='dataTables-example' tabindex='0'><a href='resident_profile.php?WiD=$WiD#Recieved&page=".$i."'>".$i."</a></li>";  
};  

?>
                                </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of <?echo $total_records?> entries</div></div><div class="col-sm-6">
								<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><div class='pagination'><ul class="pagination">
								<li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li>
								<li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"></li><?echo $pagLink;?>
								<li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
			</div>
		</div>
	</div>	

<!--?php
include ('php/establish_link.php');
$q = "SELECT * FROM `Package_List` WHERE `WiD`='$WiD' AND `Status`='Queued'";
$result = mysql_query($q);

if (! $result){
   throw new My_Db_Exception('Database error: ' . mysql_error());
}

while($row = mysql_fetch_assoc($result)){
	
} 

/* include('php/establish_link.php');
$query = mysql_query("SELECT * Package_List WHERE WiD='$WiD' AND Status=Arrived");
while($row = mysql_fetch_assoc($query)){
	echo"
		
	
	
	
	
	
	
	
	
	
	
	
	";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
} */













?-->







