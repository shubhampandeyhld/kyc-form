
$(document).ready(function(){
	$(".form-container").slideDown('slow');
})


function vali()
{
var remobi =/[789]{1}[0-9]{9}/;
var regexmail =/^([a-zA-Z0-9\.-]+)@([a-zA-Z]{2,20}).([a-zA-Z]{2,14})$/;
var panPattern = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
var username=document.getElementById("uname").value;
var useraddress=document.getElementById("address").value;
var mail=document.getElementById("email").value;
var myaddhaar=document.getElementById("addhaar").value;
var img=document.getElementById("image").value;
var mypan = document.getElementById("pan").value;
var invalidName=document.querySelector('.name');
var invalidMobile=document.querySelector('.mobo');
var invalidEmail=document.querySelector('.email');
var invalidAddhaar=document.querySelector('.addhaar')
var invalidPan=document.querySelector('.pan');


var mobile=document.getElementById("mobo").value;
if(username == ''  || useraddress == ''|| mail == ''|| mypan == '' )
{

	$(".mymodal").slideDown('slow');
	$('.modalcontent').text('Please Fill All fields');

	$(".closemodal").click(function(){
		$(".mymodal").slideUp('slow');
	})
return false;
}



if(regexmail.test(mail) == false){
invalidEmail.style.visibility="visible";
return false;
}
if(remobi.test(mobile) == false || mobile.length>10 )
{
	invalidMobile.style.visibility="visible";
return false;
}
if(myaddhaar == '')
{
	invalidAddhaar.style.visibility="visible";
	return false;
}


if(panPattern.test(mypan) == false) {
	//var matchArray =panPattern.test(ObjVal);
invalidPan.style.visibility="visible";
return false;
}

return true;
}






	

