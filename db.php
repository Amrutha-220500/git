<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "userdb";
$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("Database connection failed");
}
?>