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
	else if(document.getElementById("regpw").value !== document.getElementById("conf_regpw").value ){
		alert("Passwords donot match!!");
	}
	else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("regemail").value))){
		alert("Enter a valid Email Address!!");
	}

	else{
		alert("Registration Successful");
		return true;
	}
}