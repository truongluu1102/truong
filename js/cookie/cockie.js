// JavaScript Document
function changeTop()
{
	var username = getCookie("username");
	var admin=getCookie("admin");
	if(username=="" && admin=="")
		{
				document.getElementById("top_logout").style.display = "none";
				document.getElementById("top_admin").style.display = "none";
		}
	else{
		document.getElementById("top_login").style.display = "none";
			document.getElementById("top_register").style.display = "none";
		if(admin=="") document.getElementById("top_admin").style.display = "none";
	}
}
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function logout()
{
		document.cookie = "username =  ;  expires=Thu, 18 Dec 2018 12:00:00 UTC; path=/";
		document.cookie = "admin =  ;  expires=Thu, 18 Dec 2018 12:00:00 UTC; path=/";
		window.location.href='/login';
}


