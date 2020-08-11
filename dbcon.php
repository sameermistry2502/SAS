
<?php

$host = "localhost";
$user = "root";
$pass = "";

$db = "sas_db";

$result = mysqli_connect($host,$user,$pass,$db);

if ($result) {
	echo "connection success";
} else {
	echo "Error in connection";
}


?>
