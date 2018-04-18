<?php
$servername = "localhost";
$username = "root";
$password = "tiger";
$db_name = "2015cse071";

$dbh = mysqli_connect($servername, $username, $password, $db_name)
or die("Connection failed: ");
echo "connection is done ";
?>
