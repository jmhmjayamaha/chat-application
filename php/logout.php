<?php 
session_start();

require 'connection.inc.php';
$user = $_SESSION['username'];

if(isset($_SESSION['username'])) {
	$query = "INSERT INTO messages VALUES('','".$user."','".$user." has leave the room')";	
	mysql_query($query);
	session_destroy();
}
else {
	echo "no one has log in ";
}
?>