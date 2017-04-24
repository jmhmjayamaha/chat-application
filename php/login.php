<?php 
session_start();

require 'connection.inc.php';

if(!isset($_SESSION['username'])) {
	if(!empty($_POST['username'])) {
		$_SESSION['username'] = $_POST['username'];
		
		$query = "INSERT INTO messages VALUES('','".$_SESSION['username'] ."','".$_SESSION['username'] ." has log in ')";	
		mysql_query($query);
	}
	else {
		echo "Enter Your name to login";
	}
}
else {
	echo $_SESSION['username']." You'v already log in";
}
?>