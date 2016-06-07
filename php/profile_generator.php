<?php
	if(isset($_GET['WiD'])){
		$WiD = $_GET['WiD'];
		include('establish_link.php');
		$query = mysql_query("SELECT * FROM Resident_Rooster WHERE WiD='$WiD'");
		while($row = mysql_fetch_assoc($query)){
			$FName = $row['FirstName'];
			$LName = $row['LastName'];
			
		}
	
		while($row = mysql_fetch_assoc($query)){
			$FName = $row['FirstName'];
			$LName = $row['LastName'];
			
			
			
			
			
			
		}
		mysql_close();
		$ResName = "$FName$LName";
		
		$token = sha1(uniqid($ResName, true));
		
		
		$time = $_SERVER["REQUEST_TIME"];
		include('establish_link.php');
		$sql = "INSERT INTO Profile_Temp (Token, Name, tstamp) VALUES ('$token', '$ResName', '$time')";
		
		/* $query->execute(
			array(
				$token,
				$ResName,
				$_SERVER["REQUEST_TIME"]
			)
		); */
		if (!mysql_query($sql)){
			die('Your a moron');
		} else{
			header("Location:../resident_profile.php?profile=$token&WiD=$WiD");
		
		}
		
		exit();
		
		
		
		
	} else{
		die('noInformation');
		
	}

	


?>