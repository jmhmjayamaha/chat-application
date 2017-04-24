<?php 
require 'connection.inc.php';

function getMessage() {
	$query = "SELECT username,mesage from messages ORDER BY id DESC";
	if($run_query = mysql_query($query)) {
		while($result = mysql_fetch_assoc($run_query)) {
			echo $result['username']." :: ".$result['mesage']."</br>";
		}
	}
}

function refreshMessage($time) {
	header("Refresh:$time;url=getMessage.php");
}

getMessage();
refreshMessage(1);

?>