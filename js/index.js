
function loadMessage(){
	var xmlhttp;
	if(window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState ==4 && xmlhttp.status == 200) {
			document.getElementById('messageContent').innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET","php/getMessage.php", true);
	xmlhttp.send();
}

var myvar = setInterval(function(){loadMessage()}, 1000);

function login() {
	if(window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			//document.getElementById('messageContent').innerHTML = xmlhttp.responseText;
			if(xmlhttp.responseText) {
				alert(xmlhttp.responseText);
			}
		}
	}
	
	parameter = "username="+document.getElementById("username").value;
	xmlhttp.open("POST", "php/login.php", true);
	xmlhttp.setRequestHeader("Content-type", "Application/x-www-form-urlencoded");
	xmlhttp.send(parameter);

	document.getElementById("username").value = "";
}

function hit_message() {
	if(window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			if(xmlhttp.responseText) {
				alert(xmlhttp.responseText);
			}
		}
	}
	
	xmlhttp.open("GET","php/sendMessage.php?text="+document.getElementById('text').value, true);
	xmlhttp.send();
	
	document.getElementById('text').value = "";
}

function logout() {
	if(window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			if(xmlhttp.responseText) {
				alert(xmlhttp.responseText);
			}
		}
	}
	
	xmlhttp.open("GET", "php/logout.php", true);
	xmlhttp.send();
}

function loginUserName() {
	if(window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("userId").innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET","php/loginuser.php", true);
	xmlhttp.send();
}

function enterKeyPress() {
	thiskey = window.event.keyCode;
	if(thiskey == 13) {
		hit_message();
	}
}

function enterKeyLogin() {
	thiskey = window.event.keyCode;
	if(thiskey == 13) {
		login();
	}
}