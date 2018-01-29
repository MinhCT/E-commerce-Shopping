<?php
/**
 * Created by PhpStorm.
 * User: Niles
 * Date: 1/28/2018
 * Time: 9:17 AM
 */
$username = "root";    // Change to your DB credential
$password = "gali97";  // Change to your DB credential
$db_name = "ecommerce_shopping";
$db_host = "localhost";
$port = "3306";

$mysqli = new mysqli($db_host, $username, $password, $db_name, $port);
if ($mysqli->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}