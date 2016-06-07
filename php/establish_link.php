<?php
$connect = mysql_connect("mysql.cis.ksu.edu", "krishane","insecurepassword") or die('Could not connect: '  . mysql_error());

mysql_select_db("krishane") or die ('Couldn\'t find db' .mysql_error());
