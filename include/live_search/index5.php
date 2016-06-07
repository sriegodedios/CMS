<? include('result.php'); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>
$(document).ready(function(){  
      $('#search_text').keyup(function(){  
           var txt = $(this).val();  
           if(txt != '')  
           {  
                $.ajax({  
                     url:"include/live_search/fetch_2.php",  
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
									
						    echo "
									<div class='alert alert-danger'>
										
											
												<h3><i class='fa fa-exclamation-triangle fa-4' style='color:red;' aria-hidden='true'></i> Warning! An error has occured!</h3> 
											
											
												$err
											
										
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
									<div class='alert alert-success'>
										
											
												<h3><i class='fa fa-check-circle-o fa-4 style='color:green;' aria-hidden='true'></i> Success!</h3> 
											
											
												$err
											
										
									</div>
									";
									
									
								}
								?>
								
									<div class="panel panel-green">
										<div class="panel-heading">
											<div class="row">
												<h3>&nbsp Search Resident Database</h3>
					
											</div>
											<div class="row">
												<div class="col-md-5">
													<label>Search by Room Number or Name</label>
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
														<div class="col-md-4 col-md-offset-1">
															<label>Search by Room Number</label>
																<div class="input-group custom-search-form">
																	<input type="text" class="form-control" placeholder="Search Room...">
																		<span class="input-group-btn">
																		<button class="btn btn-default" type="button">
																			<i class="fa fa-search"></i>
																		</button>
																	</span>
																</div>
														</div>
													</div>
										</div>
										<div class="panel-body">
											<div id="result"></div>
										</div>
										
										
										
										
									</div>
						
					
					</div>
					</div>
                    <!-- /.col-lg-12 -->
               















