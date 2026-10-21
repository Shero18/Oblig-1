<?php
/* db-tilkobling */

$host = getenv('DB_HOST');
$username = 'shjam6214';
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');

$db = mysqli_connect($host, $username, $password, $database);
?>