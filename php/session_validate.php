<?php
if (!isset($_SESSION['username'])){
	echo('you are not logged in! You will be redirected to login page in 3 seconds...');
	header('refresh: 3; http://people.cis.ksu.edu/~krishane/login.php');
	exit();
}

$username = $_SESSION['username'];


 /* if ($AuthenLevel!=='1'){
	 if($AuthenLevel!=='2'){
	
			echo('<img src="pictures/no.JPG"></img><br></br>');
			echo('You horrible person how dare you try to tresspass without permission!!!');
			echo('<br></br><strong>ERROR CODE: </strong> E503-'.$AuthenLevel.'');
			exit();
	 }
	
} 
 */





?>