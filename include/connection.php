<?php
require_once("constants.php");
//start connection


$servername = "localhost";
$username = "root";
$password = "";
$database = "supermarket";
// Create connection
$connect = new mysqli($servername, $username, $password, $database);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
 ?>