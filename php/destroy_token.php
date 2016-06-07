<?php
include('establish_link.php');
$token = $_GET['token'];




$sql = ("DELETE FROM Profile_Temp WHERE Token ='$token'");
if (!mysql_query($sql)){
			Die('Failed');
			
		} else{
	
			Die('OKAY');
	
	
		}


?>