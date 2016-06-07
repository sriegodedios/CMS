<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
	
	if ($username&&$password){
		//initialize connection to the database
		$connect = mysql_connect("mysql.cis.ksu.edu", "krishane","insecurepassword") or die('Could not connect: '  . mysql_error());
		mysql_select_db("krishane") or die ('Couldn\'t find db' .mysql_error());
		$query = mysql_query("SELECT * FROM users_main WHERE UserName='$username'");
		$numrows = mysql_num_rows($query);
	
		if ($numrows!=0){
			//code for login
			while ($row = mysql_fetch_assoc($query)){
				$dbusername = $row['UserName'];
				$dbpassword = $row['Password'];
				$dbID = $row['UserID'];
				$fName = $row['FName'];
				$lName = $row['LName'];
				$dbpic = $row['Profile_Picture'];
				$dbaccess = $row['AccessLevel'];	
				
			}
			// check to see if they match
			if ($username==$dbusername&&$password==$dbpassword){
				$_SESSION['username']=$username;
				$_SESSION['userid'] = $dbID;
				$_SESSION['FName'] = $fName;
				$_SESSION['LName'] = $lName;
				$_SESSION['PPic'] = $dbpic;
				$_SESSION['Access'] = $dbaccess;
				
				
				
				if ($dbaccess==1 or $dbaccess==2){
					/* echo"User Verified as CA, Please wait... You will be redirected in 5 seconds"; */
					echo"User Verified as CA, Select an option below";
					echo('<br></br><a href="http://people.cis.ksu.edu/~krishane/Archived/Freshman/CA_MANAGEMENT/home.php">Functionality</a><br></br>');
 					echo('<a href="http://people.cis.ksu.edu/~krishane/CMS/index.php">Style/Look</a><br></br>');
					echo('<a href="http://people.cis.ksu.edu/~krishane/CMS/package_registry.php">Package Registry</a><br></br>');
					/* header('refresh: 5; url=http://people.cis.ksu.edu/~krishane/CA_MANAGEMENT/home.php');
			 */	
					exit();
				}
				
				if ($dbaccess==3){
					header('Location: http://people.cis.ksu.edu/~krishane/CIS125/PROJECT6/contact_list.php?');
					exit();
					
				} else {
					
					echo"User Verified, Please wait... You will be redirected in 5 seconds";
					header('refresh: 5; url=http://people.cis.ksu.edu/~krishane/User_Page.php');
				
				}
				
				
				
				
				
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		}
		
		
		
		
		
		
		
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}














?>