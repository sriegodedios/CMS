


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>
$(document).ready(function(){  
      $('#search_text').keyup(function(){  
           var txt = $(this).val();  
           if(txt != '')  
           {  
                $.ajax({  
                     url:"include/live_search/fetch_1.php",  
                     method:"post",  
                     data:{search:txt},  
                     dataType:"text",  
                     success:function(data)  
                     {  
                          $('#result').html(data);  
                     }  
                });  
           }  
           else  
           {  
                $('#result').html('');                 
           }  
      });  
 });  
 </script> 

</script>


											

											<!--<div class="content">
												<input type="text" class="search form-control textinput" id="searchid" name="LName" placeholder="Search for people" />&nbsp; &nbsp; 
												<div id="result"></div>
											</div>-->

		
							
								<div class="col-lg-12">
								<?php if(isset($_GET['functionFailure'])){
										$functionFailure = $_GET['functionFailure'];
									$err = "";
									if($functionFailure=="4"){
										$err .="Unable to Add Packages to database! Please Try Again...";
									}
									
						    echo "	<div class='row'>
									<div class='alert alert-danger'>
										
											
												<h3><i class='fa fa-exclamation-triangle fa-4' style='color:red;' aria-hidden='true'></i> Warning! An error has occured!</h3> 
											
											
												$err
											
										
									</div>
									</div>
									";
									
									
								}
								
						 if(isset($_GET['functionSuccess'])){
										$functionFailure = $_GET['functionSuccess'];
									$err = "";
									if($functionFailure=="4"){
										$err .="Package was added successfully!";
									}
									
						    echo "	
									<div class='row'>
									<div class='alert alert-success'>
										
											
												<h3><i class='fa fa-check-circle-o fa-4 style='color:green;' aria-hidden='true'></i> Success!</h3> 
											
											
												$err
											
										
									</div>
									</div>
									";
									
									
								}
								?>
									<div class="row">
									<div class="col-md-12">
									<div class="panel-group" id="accordion">
									<div class="panel panel-primary">
										<div class="panel-heading">
											<div class="panel-title">
												
												<!--h3>&nbsp Search Resident Database</h3-->
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseZero" aria-expanded="true" class=""><h4 style="color:white;">Search Resident Database: <? echo $hall;?></h4></a>
											</div>
											
										</div>
										<div id="collapseZero" class="panel-collapse collapse in" aria-expanded="true">
										<div class="panel-body search-heading">
											<div class="row">
												<div class="col-md-5">
													<label>Type in Room Number or Name</label>
														<div class="content">
															<input type="text" name="search_text" id="search_text" placeholder="Enter Room Number or Search by  Resident Name" class="search form-control textinput" />
															 
															
														</div>
										<!--<div class="input-group custom-search-form">
										
											<input type="text" class="form-control" placeholder="Search Resident...">
												<span class="input-group-btn">
													<button class="btn btn-default" type="button">
															<i class="fa fa-search"></i>
													</button>
												</span>
										</div>-->
												</div>
												<div class="col-md-3 col-md-offset-1">
												<form method="post" action="?">
													<label>Hall Select</label>
														<div class="input-group">
														<!--div class="form-group"-->
															<select name="hall" class="form-control">
																<option value="Goodnow">Goodnow</option>
																<option value="Marlet">Marlet</option>
															</select>
																<span class="input-group-btn">
																<button class="btn btn-default" name="change" type="submit">
																		Go <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
																	</button>
																</span>

															</div>
															</form>
												</div>
											</div>
										</div>
										<div class="panel-body">
											<div class="col-md-12">
												<div class="row"id="result"></div>
											</div>
										</div>
										<div class="panel-footer">
											Can't find the resident? Make sure the you selected the right hall.
										</div>
										
										
										
										
									</div>
									</div>
									</div>
									</div>
									</div>
									<div class="row">
									<div class="col-md-4">
									<div class="panel-group" id="accordion">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class="">Email Residents</a>
												</h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true">
											<div class="panel-body">
												<div class="form-group">
												<label>Send an Email to Residents</label>
												<button type="button" class="btn btn-primary btn-block inline" data-toggle="modal" data-target="#myModal">Send Email</button>
												</div>
											</div>
											</div>
										</div>
									</div>
									</div>
									</div>
									<!--div class="panel panel-default">
										<div class="panel-heading">
											<div class="row">
												<h3>&nbsp Search Resident Database</h3>
					
											</div>
											
					
										</div>
										<div class="panel-body">
											<div class="col-md-12">
												
													<div class="row">
													<label>Search by Room Number or Name</label>
													</div>
													<div class="row">
															<button type="button" class="btn btn-primary btn-block inline btn-lg" data-toggle="modal" data-target="#myModal">Send Email</button>
															 
													</div>		
												
											</div>
										</div>	
									</div-->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Send Email to Residents with Packages</h4>
      </div>
      <div class="modal-body">
      <div class="panel panel-info">
                        <div class="panel-heading">
                            Just FYI
                        </div>
                        <div class="panel-body">
                            <p>Yo, we detected you pushed the "Send Email" button. Just so you know, this action will send an email to ALL residents who have packages in the database. Although you can peform this action anytime, we recomend that every package gets logged in the system before continueing. </p>
                        </div>
                        <div class="panel-footer">
                            <h4 class="modal-title" id="myModalLabel">Would you like to continue?</h4>
                        </div>
                    </div>
      </div>
      <div class="modal-footer">
	 
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                    <!-- /.col-lg-12 -->
               















