

//var logstyle = window.getComputedStyle(document.getElementById("login"),null).getPropertyValue("display");

console.log(logstyle); 	
document.getElementById("signin").addEventListener("click",clickLogin);

function clickLogin(){
	if(logstyle=="none"){
	console.log("Hehehehehehehehehehe");
	document.getElementById("login").style.display="block";
	}
	else
	{document.getElementById("login").style.display="none";
	console.log("Hehehehe");
	}
}
	
function clickRegister(){
	if(document.getElementById("register").style.display =="none"){
	document.getElementById("register").style.display="block";
	}
	else
	{
		document.getElementById("register").style.display="none";
	}
}
function hide(id){

	if(document.getElementById("showOrHide"+id).innerHTML == "Dölj")
	{
		document.getElementById("commentP"+id).style.display="none";
		document.getElementById("showOrHide"+id).innerHTML ="Visa";
	}
	else
	{
		document.getElementById("commentP"+id).style.display="block";
		document.getElementById("showOrHide"+id).innerHTML = "Dölj";
	}
}

function reply(id,comment){
	console.log("HEHE");
	document.getElementById("kommentar").value = "Som svar på: " + comment;
	document.getElementById("reply").value=id;
	
}	

function validateForm(){
	document.forms["formular"]["namn"].style.backgroundColor="white";
	document.forms["formular"]["kommentar"].style.backgroundColor="white";
	document.forms["formular"]["email"].style.backgroundColor="white";
	
	var namn = document.forms["formular"]["namn"].value.trim();
	var email = document.forms["formular"]["email"].value.trim();
	var kommentar = document.forms["formular"]["kommentar"].value.trim();
	var returnera=true;
	if(namn==null || namn=="")
	{
		document.forms["formular"]["namn"].style.backgroundColor="pink";
		document.getElementById("wronginput").style.visibility="visible";
	
		returnera = false;
	}
	if(kommentar == null || kommentar == "")
	{
			document.forms["formular"]["kommentar"].style.backgroundColor="pink";
			document.getElementById("wronginput").style.visibility="visible";
			
			returnera = false;
	}
	if( !(/[\w&-]+[@]+[\w&-]+[.]+[A-z]/i.test(email)) )
	{
		document.forms["formular"]["email"].style.backgroundColor="pink";
		document.getElementById("wronginput").style.visibility="visible";
		returnera = false;
	}
	document.forms["formular"]["kommentar"].value=kommentar;
	document.forms["formular"]["email"].value=email;
	document.forms["formular"]["namn"].value=namn;
	return returnera;
}
