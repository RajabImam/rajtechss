<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "Reason@2010";
$db['db_name'] = "rajtechss";

foreach ($db as $key => $value) {
	# code...
	define(strtoupper($key), $value);
}


$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


 //if ($connection) {
 	# code...
 //	echo "We are connected";
 //}




?>