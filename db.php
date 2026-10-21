<?php /* db-tilkobling */
/*
/* Programmet foretar tilkobling til database-server og valg av database
*/
$host = getenv('DB_HOST');
$username = 'shjam6214';
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');
if (getenv('DB_PASSWORD') === false || getenv('DB_PASSWORD') === '') {
    die("FEIL: DB_PASSWORD mangler");
} else {
    echo "DB_PASSWORD finnes<br>";
}
$db=mysqli_connect($host,$username,$password,$database) or die ("ikke kontakt med database-server");
/* tilkobling til database-serveren utført */
?>