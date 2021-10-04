<?php


$dbname = "sadat_school";
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if (!$conn) {
	echo "not connect";
}else{
	echo"";
}




?>