function IsLoginEmpty(){ 
	if(document.getElementById("un").value == "" && document.getElementById("pw").value == ""){
		alert("Username and Password fields are Empty!!");
		}
	else if(document.getElementById("un").value == ""){
		alert("Username field Empty!!");
		}
	else if(document.getElementById("pw").value == ""){
		alert("Password field Empty!!");
		} 
	else{
		return true;
	}
}

function IsRegisterEmpty(){
	if(document.getElementById("regun").value == ""){
		alert("Username field Empty!!");
		}
	else if(document.getElementById("regpw").value == ""){
		alert("Password field Empty!!");
		}
	else if(document.getElementById("regemail").value == ""){
		alert("Email field Empty!!");
		}
	else{
		return true;
	}
}