

	
	var strangen="hej";
	alert("hej "+ strangen);
	 // var strang2 = "commentP"+id;
	// var etta = document.getElementById(strangen);
	// etta.addEventListener('click',function(){
		
		// if(etta.innerHTML=="Dölj")
		// {
			// document.getElementById(strang2).style.display="none";
			// etta.innerHTML="Visa";
		// }
		// else
		// {
			// document.getElementById(strang2).style.display="block";
			// etta.innerHTML="Dölj";
		// }
	// },false);
	


// var ett=document.getElementById('link1');
// ett.addEventListener('click',function(){
	// if(ett.innerHTML=="Dölj")
	// {
	// document.getElementById('commentP1').style.display="none";
	// ett.innerHTML="Visa";
	// }
	// else
	// {
		// document.getElementById('commentP1').style.display="block";
		// ett.innerHTML="Dölj";
	// }
// },false);

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
	if( !(/\w+@+\w+[.]/i.test(email)) )
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


