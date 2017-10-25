function validate(){
	var password = document.getElementById("passwordInput");
	var email = document.getElementById("emailInput");
	var atpos = emailInput.value.indexOf("@");
	var dotpos = emailInput.value.lastIndexOf(".");
	// var userType = document.getElementByName("usertype");
	// var isChecked = false;

	if (atpos < 1 || ( dotpos - atpos < 2))
	{
		alert("Please enter a valid email");
		email.focus();
		return false;	
	}
	if (password.value==""|| password.length<6 ||length>12) 
	{
		alert('Please enter a password length between 6-12');
		password.focus();
		return false;
	}
	
	return true;
}
