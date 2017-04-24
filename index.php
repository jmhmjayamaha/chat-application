<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<title>Jayamaha's chat application</title>
<link href="style/index.css" rel="stylesheet" type="text/css"/>
<head>
<script type="text/javascript" src="js/index.js">

</script>
</head>
<body>
<div id="main" align="center">
	<div id="content" align ="center">
		<div id="login">
			<!--<form action="login.php" method="post">-->
				<span class="user">User Name :<span> <input type="text" id='username' onkeydown="return enterKeyLogin()"/>&nbsp;<input type="submit" value="login" onclick="login();"/>
				<input type="submit" value="logout" onclick="logout();"/>
			<!--</form>-->
		</div>
		<div id="loginuser">
			User : <label id="userId"><script type="text/javascript" >var myvar = setInterval(function(){loginUserName()}, 1000);</script></label>
		</div>
		<div id="messageContent">
			
		</div>
		
		<div id="message">
			<span class="user">Message :</span> <input type="text" id="text" name="text" size = "50" onkeydown="return enterKeyPress()"/>&nbsp;<input type="submit" value = "send" onclick="hit_message();" />
		</div>
	</div>
	
</div>

</body>
</html>