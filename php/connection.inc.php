<?php

class ServerException extends Exception {
	public function showSpecific() {
		$message = "Error : connecting to server";
		return $message;
	}
}

class DatabaseException extends Exception {
	public function showSpecific() {
		$message = "Error : Connecting to Database";
		return $message;
	}
}

$server = "localhost";
$username = "root";
$password = "";

$db_name = "chat_application";

$con = mysql_connect($server, $username, $password);

try {
	if($con) {
		if(mysql_select_db($db_name)) {
			//echo "connected";
		}
		else {
			throw new DatabaseException("");
		}
	}
	else {
		throw new ServerException("");
    } 
}
catch(DatabaseException $ex) {
	echo $ex->showSpecific();
}
catch(ServerException $ex1) {
	echo $ex1->showSpecific();
} 
?>