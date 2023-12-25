<?php

$hostName = "localhost";
$dbUser = "id21707313_root";
$dbPassword = "Loginroot@1234";
$dbName = "id21707313_users";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>
