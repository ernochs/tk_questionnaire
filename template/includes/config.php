<?php 
header('X-Content-Type-Options: nosniff');
date_default_timezone_set('Africa/Accra');

$host = "localhost";
$username = "root";
$password = "";
$database = "tk_questionnaire";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>

