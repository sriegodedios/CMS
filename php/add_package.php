<?php
Session_Start();

//Get Unix time stamp
$WiD = $_POST['WiD'];
$PNumber = $_POST['package_number'];
$CA = $_POST['CA_In'];
$PLocation = $_POST['package_location'];
$PDescr= $POST['package_description'];
$AddInfo = $_POST['additional_info'];
//Date and Time -------
$info = getdate();
	$date = $info['mday'];
	$month_i = $info['mon'];
	$year = $info['year'];
	$hour = $info['hours'];
	$min = $info['minutes'];
	$sec = $info['seconds'];
	$fill = 2;
	#the number
	$number = "";
	#with str_pad function the zeros will be added
	//str_pad($number, $fill, '0', STR_PAD_LEFT);
	// The result: 0[n]
	
	if ($month_i<=9){
		$number = $month_i;
		
		$month = str_pad($number, $fill, '0', STR_PAD_LEFT);
	} else if($month_i>9){
		$month = $month_i;
		
		
		
	}
	
	
	if ($date<=9){
		$number = $date;
		
		$day = str_pad($number, $fill, '0', STR_PAD_LEFT);
	} else if($date>9){
		$day = $date;
		
		
		
	}
	$current_time = "$hour:$min";
######################################
$current_date = "$year-$day-$month";
$time= $_SERVER["REQUEST_TIME"];

//Connection into database


checkEmailList($WiD);










if(isset($_POST['Add_package'])){
	include('establish_link.php');
		$sql = "INSERT INTO Package_List (WiD, Package_Number, Location, Description, Add_Info, Date_Checked_IN, Unix_IN, CA_In) VALUES ('$WiD', '$PNumber', '$PLocation', '$PDescr', '$AddInfo', '$current_date', '$time', '$CA')";
		
		if (!mysql_query($sql)){
			header('Location:../package_registry?functionFailure=4');
			
		} else{
	
			header('Location: ../package_registry.php?functionSuccess=4');
	
	
		}
	
	
	
mysql_close:
	
}


function checkEmailList($WiD){
	include('establish_link.php');
	$query ="SELECT * FROM List_Package_Resident WHERE WiD = '$WiD' LIMIT 1";
	$result = mysql_query($query);
		if(mysql_num_rows($result)  !== 1){
			mysql_query("INSERT INTO List_Package_Resident (WiD) VALUES ('$WiD')");
		
			mysql_close();
			return;
			
		}	
		mysql_close();
		return;
	}
	
	






?>








































?>
