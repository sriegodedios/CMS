<?php




// Session_start();
// $username = $_SESSION['username'];
	$string = file_get_contents("../Archived/Freshman/php/highprofiled/tokens.json");
	$data = json_decode($string, true);
	$jsonIterator = new RecursiveIteratorIterator(
		new RecursiveArrayIterator(json_decode($string, TRUE)),
		RecursiveIteratorIterator::SELF_FIRST);

			/* foreach ($jsonIterator as $key => $val) {
				if(is_array($val)) {
				echo "$key:\n";
			} else {
				echo "$key => $val\n";
			}
		} */
		
if (isset($_POST['change'])){
	$chall = $_POST['hall'];
	$data[$username]['hall'] = $chall;
	$newJsonString = json_encode($data);
	file_put_contents("../Archived/Freshman/php/highprofiled/tokens.json", $newJsonString);
	
}



$hall = $data[$username]['hall'];


?>