<?php
Session_Start();
$FName  = $_SESSION['FName'];
$LName = $_SESSION['LName'];
include('php/session_validate.php');

include('php/include/header.php');

$WiD = $_GET['WiD'];
include('php/establish_link.php');
$query = mysql_query("SELECT * FROM Resident_Rooster WHERE WiD='$WiD'");
while($row = mysql_fetch_assoc($query)){
	$FName = $row['FirstName'];
	$LName = $row['LastName'];
	$RNumber = $row['RoomNumber'];
}

?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
				<h1 class="page-header">Resident Profile: <? echo "$FName $LName" ?> </h1>
					<div class="col-lg-12">
						<div class="row">
							<div class="well">
								<div class="row">
									<h4><? echo "$FName $LName"?></h4>
								</div>
								<div class="row">
									<ul class="nav nav-pills">
										<li class="active"><a href="#home-pills" data-toggle="tab">Profile Information</a>
										</li>
                                <li><a href="#profile-pills" data-toggle="tab">Queded Packages</a>
                                </li>
                                <li><a href="#messages-pills" data-toggle="tab">Arrived Packages</a>
                                </li>
                                <li><a href="#settings-pills" data-toggle="tab">Recieved Packages</a>
                                </li>
                            </ul>
								</div>
							</div>
						</div>
						<div class="row" id="profile">
							<div class="row">
								<div class="col-lg-3">
									<img src="common/images/default.png" class="img-thumbnail" alt="Cinque Terre" width="275" height="304">
								
								</div>
								<div class="col-lg-5 col-md-5">
									<div class="row">
										<h4>General Information</h4>
											<table style="width:100%">
												<tr><th>First Name:</th> <td><? echo $FName; ?></td></tr>
												<tr><th>Last Name:</th> <td><? echo $LName; ?></td></tr>
												<tr><th>WiD:</th> <td><? echo $WiD; ?></td></tr>
											</table>
									</div>
									<div class="row">
										<h4>Room Information</h4>
										<table style="width:70%">
												<tr><th>Room Number:</th> <td><? echo $RNumber; ?></td></tr>
												
											</table>
									</div>
								</div>
								<div class="col-lg-4 col-md-4">
									<div class="panel panel-default">
										<div class="panel-heading">
											Actions
										</div>
										<div class="panel-body">
											<a href="#add_package" class="btn btn-info btn-block inline">Add A Package</a>
												<div class='hide'>
													<div id="add_package">
														<div class="col-lg-12">
															<div class="row">
																<h2>Add A Package</h2>
															</div>
															<div class="row">
																<div class="panel panel-primary">
																	<div class="panel-heading">
																	<? 
									$rowSQL = mysql_query( "SELECT MAX( Package_Number ) AS max FROM `Package_List`;" );
									$row = mysql_fetch_array( $rowSQL );
									$largestNumber = $row['max'];
									
									$nextPackage = $largestNumber+1;
										
								
									
									
									
									?>
																		<h4>Package Number: <? echo $nextPackage;?></h4>
																	</div>
																	
                         <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4>Step 1: Add the Storage Location to Package</h4>
                        </div>
                       
							<div class="row">
							<div cla
							ss="col-lg-6">
								
								<label>Where is the package going to be stored at?</label>
								<select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
								</div>
							</div>
                       
						 <div class="panel-heading">
                           <h4>Step 2 (Optional): Add a Description</h4>
                        </div>
                      
						<div class="row">
							<div class="col-lg-6">
								
								<label>You can add a description of the package here.</label>
								
                                               <textarea class="form-control" rows="3"></textarea>
								</div>
							</div>
                     
                    </div>
                       
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
															</div>
															<div class="row">
																<div class="col-lg-4 col-lg-offset-8">
																	<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add Package!" />
																</div>
															</div>
														</div> 
															
														
									
													</div>
												</div>

										</div>
										<div class="panel-footer">
											Panel Footer
										</div>
									</div>
							
							
							
							
							</div>
						
						
						</div>
               
                <!-- /.row -->
					</div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
</div>
</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
	<script>
		$(document).ready(function(){
			$(".inline").colorbox({inline:true, width:"50%", height:"85%"});
		});
	</script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
