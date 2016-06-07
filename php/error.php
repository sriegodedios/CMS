<?php
$errors = array();
	$error[0] = "Cannot connect to database or Database is offline";
	$error[1] = "Cannot use the current database";
	$error[2] = "Cannot establish link";
	$error[3] = "Unable to Add Packages to Database! Please Try Again..."	
	
if (ISSET($_GET['functionFailure'])){
	$Merror = $_GET['functionFailure'];
	
	$errorResult = $error[$Merror]	
	
}













?>