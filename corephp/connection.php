<?php

 $db_hostname = "localhost";
 $db_username = "root";
 $db_password = "password";
 $db_database = "username_availability";
 
// create connection
 $con = mysqli_connect($db_hostname, $db_username, $db_password , $db_database);

// check connection
if (!$con) {
   die("Connection failed: " . mysqli_connect_error());
}