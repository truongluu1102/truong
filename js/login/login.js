// JavaScript Document

var count = 0;
var countF=0;

function login_register() {
	count++;
	if (count % 2 == 1) {		//Register
		document.getElementById("login_content").style.marginTop = "-450px";
		document.getElementById("login_box1").style.minHeight = "400px";

	} else {		//Login
		document.getElementById("login_content").style.marginTop = "0px";
		document.getElementById("login_box1").style.minHeight = "250px";

	}
}

function forgetten() {
	countF++;
	
	if(countF%2==1)
		{
			document.getElementById("login_content").style.marginTop = "-900px";
		
		    document.getElementById("login_box1").style.minHeight = "0";
		}
	else{
		if (count % 2 == 0) {
			document.getElementById("login_content").style.marginTop = "-0px";
			document.getElementById("login_box1").style.minHeight = "250px";

		} else {
			document.getElementById("login_content").style.marginTop = "-450px";
		document.getElementById("login_box1").style.minHeight = "400px";

		}
	}
}
