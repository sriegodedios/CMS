<?php
// retrieve token
if (isset($_GET["profile"]) && preg_match('/^[0-9A-F]{40}$/i', $_GET["profile"])) {
    $token = $_GET["profile"];
}
else {
   die("page does not exsist");
}
include('establish_link.php');
// verify token
$query = mysql_query("SELECT * FROM Profile_Temp WHERE token ='$token'");
$row = mysql_fetch_assoc($query);
$numrows = mysql_num_rows($query);

if ($numrows==0) {
	die('page no longer exsist');
}
else {
    extract($row);
}








?>