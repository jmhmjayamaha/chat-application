<?php

session_start();

require 'connection.inc.php';

function hit_message($message) {
	if(!empty($_SESSION['username'])){
		$query = "INSERT INTO messages VAlUES('','".$_SESSION['username']."','".$message."')";
		mysql_query($query);
	}
	else {
		echo "login please";
	}
}

if(isset($_GET['text']) ) {
	if(!empty($_GET['text'])) {
		hit_message($_GET['text']);
	}
	else {
		echo "Type the Message";
	}
}
else {
	echo "username hasn't been set";
}

?>