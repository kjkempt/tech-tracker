<?php

//open databse connect
$user_name = "root";
$password = "";
$database = "client_login_db";
$host_name = "localhost"; 

$db = mysql_connect($host_name, $user_name, $password);

mysql_select_db($database);

if(!$db)
{
	echo "Error: Could not connect to database.  Please try again later.";
	exit;
}


?>
