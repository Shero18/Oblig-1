<?php /* db-tilkobling */
/*
/* Programmet foretar tilkobling til database-server og valg av database
*/
$host = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');
echo "DB_HOST: " . (getenv('DB_HOST') ? "OK" : "MANGLER") . "<br>";
echo "DB_USER: " . (getenv('DB_USER') ? "OK" : "MANGLER") . "<br>";
echo "DB_PASSWORD: " . (getenv('DB_PASSWORD') ? "OK" : "MANGLER") . "<br>";
echo "DB_DATABASE: " . (getenv('DB_DATABASE') ? "OK" : "MANGLER") . "<br>";
$db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");
/* tilkobling til database-serveren utført */
?>