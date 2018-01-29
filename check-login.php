<?php
/**
 * Created by PhpStorm.
 * User: Niles
 * Date: 1/28/2018
 * Time: 9:21 AM
 *
 * Login to process user login
 */

// Create new session if user has not logged in before
if ( session_id() == "" || ! isset( $_SESSION ) ) {
	session_start();
}

include "mysql-config.php";

$user_email = $_POST["email"];
$password   = $_POST["password"];

$query_string = "select user_id, full_name, email from user where email = '$user_email' and password = '$password'";
$result       = $mysqli->query( $query_string ) or die(mysqli_error());
if ( $result === false ) {
	//die( mysqli_error() );
	redirect();
}

if ( $result ) {
	while ( $obj = $result->fetch_object() ) {
		$_SESSION["user_id"]   = $obj->user_id;
		$_SESSION["full_name"] = $obj->full_name;
		$_SESSION["email"]     = $obj->email;
		header( "location:shop-full.php" );
	}
}

function redirect() {
	echo '<h1>Invalid Login! Redirecting...</h1>';
	header( "Refresh: 3; url=shop-full.php" );
}