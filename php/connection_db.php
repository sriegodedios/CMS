<?php

// Credentials
$dbhost = "mysql.cis.ksu.edu";
$dbname = "krishane";
$dbuser = "krishane";
$dbpass = "insecurepassword";

// Connection
global $test_db;

$test_db = new mysqli();
$test_db->connect($dbhost, $dbuser, $dbpass, $dbname);
$test_db->set_charset("utf8");

// Check Connection
if ($name_db->connect_errno) {
    printf("Connect failed: %s\n", $test_db->connect_error);
    exit();
}

?>