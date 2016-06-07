<?
include('php/token_authentication.php');



?>

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


$CA_F = $_SESSION['FName'];
$CA_L = $_SESSION['LName'];
$CA_Name = "$CA_F $CA_L";

?>
<? 
									$rowSQL = mysql_query( "SELECT MAX( Package_Number ) AS max FROM `Package_List`;" );
									$row = mysql_fetch_array( $rowSQL );
									$largestNumber = $row['max'];
									
									$nextPackage = $largestNumber+1;
										
			mysql_close();					
									
									
									
									?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
				<h1 class="page-header">Resident Profile: <? echo "$FName $LName" ?> </h1>
					<div class="col-lg-12">
						<div class="row">
							<div class="well">
								<div class="row">
									<h4><? echo "$FName $LName"?> </h4>
								</div>
								<div class="row">
									<ul class="nav nav-pills" id="myTab">
										<li class="active"><a href="#Profile" data-toggle="tab">Profile Information</a>
										</li>
										<li><a href="#Queded" data-toggle="tab">Queded Packages</a>
										</li>
										<li><a href="#Arrived" data-toggle="tab">Arrived Packages</a>
										</li>
										<li><a href="#Recieved" data-toggle="tab">Recieved Packages</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
			<div class="tab-content">			
				<div class="tab-pane active" id="Profile">	
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
											<a  data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-block">Add A Package</a>
												<a href="#package_history" class="btn btn-outline btn-block btn-success">Get Package History</a>
												
												
											</div>	
										<div class="panel-footer">
											Panel Footer
										</div>
									</div>
							
							
							
							
							</div>
						
						
						</div>
               
                <!-- /.row -->
					</div>
				<!-- /div for #Profile-->	
				</div>	
				
				<div class="tab-pane" id="Queded">
					<? include('include/package_registry/table_queued.php');?> 
				
				
				</div>
				<div class="tab-pane" id="Arrived">
					<? include('include/package_registry/table_arrived.php');?>
				</div>
				<div class="tab-pane" id="Recieved">
					<? include('include/package_registry/table_recieved.php');?> 
				</div>
				<!--div class="tab-pane" id="Arrived">
					<!--? include('include/package_registry/table_arrived.php');?> 
				</div-->
				<!--div class="tab-pane" id="Recieved"-->




				</div>
			</div>	
            <!-- /.container-fluid -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
				<form method="post" action="php/add_package.php">
					<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Add A Package</h4>
			</div>
			
			<div class="modal-body">
		
													
													 <script src="bower_components/jquery/dist/jquery.min.js"></script>																		
<script>
$( window ).load(function() {
//toggle_1
 var ball = $('#package_description').val();
 if(ball=='no')
   $('#toggle_1').removeAttr('data-toggle');
//toggle_2
var vall = $('#package_location').val();
if(vall=='no')
   $('#toggle_2').removeAttr('data-toggle');
});

</script>
<script src="js/addPackage"></script>

														<div id="add_package">
														
															<div class="container-fluid">
																<div class="col-lg-12">
																	<div class="row">
																	<div class="panel panel-primary">
																		<div class="panel-heading">
																			<h4>Add Package Number: <? echo $nextPackage;?></h4>
																		</div>
																		<div class="panel-body">




																		<div class="panel-group" id="accordion">
																			<div class="panel panel-default">
																					<div class="panel-heading">
																						<h4 class="panel-title">
																						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class=""><strong>
																						<i id="fa_one"class="fa fa-ellipsis-h" aria-hidden="true"></i> Step 1:</strong> Add a Description of Package</a>
																						</h4>
																					</div>
																				<div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true">
																					<div class="panel-body">
																						<div class="form-group">
																							<label>What is the Package?</label>
																							<select name="package_description" class="form-control" onchange='CheckColors(this.value);'>
																								<option id="package_description" selected="selected" value='no'>Select a Characteristic</option>
																								<option value="BP" id="package_description">Brown Package</option>
																								<option value="WP" id="package_description">White Package</option>
																								<option value="WE" id="package_description">White Envelope</option>
																								<option value="ME" id="package_description">ME</option>
																								<option value="other">Other</option>
																							</select>
																							<input class="search form-control textinput" type="text" name="package_description" id="package_description_hidden" placeholder="If other, add short description" style='display:none;'/>
								 
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="panel panel-default">
																				<div class="panel-heading">
																					<h4 class="panel-title">
																					<a id="toggle_1" data-toggle="collapse" style="color:#dddddd" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false"><strong><i class="fa fa-ellipsis-h" id="fa_two" aria-hidden="true"></i> Step 2:</strong> Identify Where Package is Going to be Stored</a>
																					</h4>
																				</div>	
                                    <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                           											<div class="form-group">
                                            <label>What is the Package Location?</label>
												<select name="package_location" class="form-control" onchange='CheckLocation(this.value);'>
													<option id="package_location" selected="selected" value="no">Select a Location</option>
													<option id="package_location" value="S1-11">Shelf 1-11</option>
													<option id="package_location" value="TS">Top Shelf</option> 
													<option id="package_location" value="MS">Middle Shelf</option>
													<option id="package_location" value="BS">Bottom Shelf</option>
													<option id="package_location" value="MR">Mail Room</option>
													<option id="package_location" value="other">Other</option>
                                            </select>
											<input class="search form-control textinput" type="text" name="package_location" id="package_location_hidden" placeholder="If other, add short description" style='display:none;'/>
                                        </div>
										</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
										<script>
function hide_No(){
	$('#fa_three').removeAttr('class');
					$('#fa_three').attr('class', 'fa fa-check-circle');
					$('#fa_three').attr('style', 'color:green;');
	
										}
	</script>

                                            <a id="toggle_2" style="color:#dddddd" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false"><strong><i class="fa fa-ellipsis-h" id="fa_three" aria-hidden="true"></i> Step 3:</strong> (Optional) Aditional Information</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;" onClick="hide_No();">
                                        <div class="panel-body">
											<div class="col-md-12">
										
 

												<div class="row" id="question">
													<div class="col-md-12">	
														<div class="row">
														<Label>Would You Like to Add Additional Information?</label>
														</div>
														<div class="row">
															<a class="btn btn-info" id="show_yes" onClick="addInfo(this.val);" value="go">Sure</a>
															<a class="btn btn-info" id="hide_no" onClick="hideNo(this.val);" value="go">Nah, I'm Good</a>
														</div>	
													</div>
												</div>	
												<div class="row" id="confirmNo" style="display:none">
												
													<div class="well">
													Okay let's move on!
													</div>
												</div>
											
												<div class="row" id="addIti" style="display:none">
													<label>You can add additional information here</label>
													<textarea name="additional_info" class="form-control" rows="3"></textarea>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
																	</div>
                        <div class="panel-footer">
							
								
                    </div>
					
																	
																	
																	
																	
																	
																	</div>
																
																		
								
									
														
																	
								<script type="text/javascript" src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
								<script>

function closeBox() {
  $.colorbox.close();
}
</script>
								
																		
																	
																		<!--<h4>Package Number: <? echo $nextPackage;?></h4>-->
																
																</div> 
															
														
									
															</div>
															<input type="hidden" name="CA_In" value="<?echo $CA_Name;?>"/>
															<input type="hidden" name="package_number" value="<?echo $nextPackage;?>"/>
															<input type="hidden" name="WiD" value="<?echo $WiD;?>"/>
														</div>
														
													</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button name="Add_package" type="submit" id="add_packages" class="btn btn-primary disabled">Save changes</button>
			</div>
		</div>
		
  </div>
  </form>
</div>
        </div>
        <!-- /#page-wrapper -->

    </div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
	<script>
	$(window).bind('beforeunload', function(){
			 $.ajax({ url: 'php/destroy_token.php?token=<?echo $token;?>' });

	});
	</script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="js/tabs_resident_profile.js"></script>
	<script>
	$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
	
	
	</script>
	<script>
	$( window ).load(function() {
		
		
		

  
    $('#myTab a:first').tab('show');
  
  
	}
	</script>
	<script>
		$(document).ready(function(){
			$(".inline").colorbox({inline:true, width:"50%", height:"55%"});
		});
		
	</script>
	
	<!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
	
</body>

</html>
