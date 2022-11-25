<?php
// $servername = "localhost";
// $username = "uqimoksyln1qb";
// $password = "vip123ball.com";
// $database = "dbq6yswmmgweoi";

$servername = "localhost";
$username = "root";
$password = "";
$database = "123ball";
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_query($conn, "SET NAMES 'utf8'");
if (!$conn) {
    printf("Errormessage: %s\n", $mysqli->error);
}
