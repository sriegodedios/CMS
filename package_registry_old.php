<?php
Session_Start();
$FName  = $_SESSION['FName'];
$LName = $_SESSION['LName'];
include('php/session_validate.php');

include('php/include/header.php');



?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Package Registry</h1>
                    </div>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
									<h3>&nbsp Search Resident Database</h3>
					
									</div>
									<div class="row">
										<div class="col-md-5">
											<label>Search by Name</label>
												<? include ('include/live_search/index2.php'); ?>
												
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
							</div>
					</div>
					</div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
