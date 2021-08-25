<?php
$host = "localhost";
$username = "root";
$passsword = "";
$database = "online_examination";

$conn = new mysqli($host, $username, $passsword, $database);
session_start();
if($conn) {
    echo "success"; 
} 
else {
    die("Error". mysqli_connect_error()); 
} 
?>
