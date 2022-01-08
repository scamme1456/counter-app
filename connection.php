<?php

$dbhost = "db.zut.edu.pl";
$dbuser = "ka46561";
$dbpass = "UXudWSox";
$dbname = "ka46561";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Failed to connect!");
}
