function IsEmpty(){ 
	if(document.getElementById("un").value == ""){
		alert("Username field Empty!!");
		}
	else if(document.getElementById("pw").value == ""){
		alert("Password field Empty!!");
		} 
	else if(document.getElementById("un").value == "geo" && document.getElementById("pw").value == "geo"){
		alert("Login Successful");
	}
	else{
		alert("Username and password fields donot match\nCredentials are as follows\nUsername: geo\nPassword: geo");
	}
	return;
}