<?php
   $connection = mysqli_connect("mysql.cis.ksu.edu", "krishane", "insecurepassword", "krishane");
    if (mysqli_connect_errno())
    {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }




?>