// JavaScript Document

function checkPassword()
{
	var p1 = document.getElementById("i4").value ;
	var p2 = document.getElementById("i5").value ;

	if(p1 != p2)
		window.alert("Passwords Do Not Match") ;

}

function checkPno()
{
	var p1 = document.getElementById("i7").value ;
	var p2 = document.getElementById("i8").value ;	
	if(p1.length != 10)
		window.alert("Invalid Mobile Number") ;
	
}

function checkPincode()
{
	
	var p1 = document.getElementById("i7").value ;
	if(p1.length != 7)
		window.alert("Invalid Pincode		") ;
				
}

function verify()
{
	var p1 = document.getElementById("i7").value;
	var p2 = document.getElementById("i8").value ;
	
	if(p1 == p2)
		window.alert("Alternate Mobile Number And Primary Number Cannot Be Same") ;
		
}
	

