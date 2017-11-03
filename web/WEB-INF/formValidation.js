
function validateRegisterRentalMaster()
{
	var companyEmail = document.getElementById("EMail_div2");
	var email= document.getElementById("privateEMail_div2");
	var password = document.getElementById("password_div2");
	var rPassword = document.getElementById("confirm_password_div2");
	var atpos1 = email.value.indexOf("@");
	var dotpos1 = email.value.lastIndexOf(".");
	var atpos2 = companyEmail.value.indexOf("@");
	var dotpos2 = companyEmail.value.lastIndexOf(".");
	var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;  
	if (atpos1 < 1 || ( dotpos1 - atpos1 < 2))
	{
		alert("Please enter a valid private email");
		email.focus();
		return false;	
	}
	if (atpos2 < 1 || ( dotpos2 - atpos2 < 2))
	{
		alert("Please enter a valid company email");
		companuEmail.focus();
		return false;	
	}
	if (password.value==""|| password.length<8 ||length>20) 
	{
		alert('Please enter a password length between 8-20');
		password.focus();
		return false;
	}
	if(!password.value.match(passw))
	{
		alert('Please contain at least one numeric digit, one uppercase and one lowercase letter');
		password.focus();
		return false;
	}
	if(password.value!=rPassword.value)
	{
		alert('Enter password are different');
		password.focus();
		return false;
	}
	return true;
};
function test()
{
	alert("fuck");
};
function validateLogin(){
	var password = document.getElementById("passwordInput");
	var email = document.getElementById("emailInput");
	var atpos = email.value.indexOf("@");
	var dotpos = email.value.lastIndexOf(".");
	// var userType = document.getElementByName("usertype");
	// var isChecked = false;

	if (atpos < 1 || ( dotpos - atpos < 2))
	{
		alert("Please enter a valid email");
		email.focus();
		return false;	
	}
	if (password.value==""|| password.length<8 ||length>20) 
	{
		alert('Please enter a password length between 8-20');
		password.focus();
		return false;
	}
	return true;
};

function validateRegisterUser()
{
	var email= document.getElementById("EMail_div1");
	var password = document.getElementById("password_div1");
	var rPassword = document.getElementById("confirm_password_div1");
	var atpos = email.value.indexOf("@");
	var dotpos = email.value.lastIndexOf(".");
	var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;  
	if (atpos < 1 || ( dotpos - atpos < 2))
	{
		alert("Please enter a valid email");
		email.focus();
		return false;	
	}
	if (password.value==""|| password.length<8 ||length>20) 
	{
		alert('Please enter a password length between 8-20');
		password.focus();
		return false;
	}
	if(!password.value.match(passw))
	{
		alert('Please contain at least one numeric digit, one uppercase and one lowercase letter');
		password.focus();
		return false;
	}
	if(password.value!=rPassword.value)
	{
		alert('Enter password are different');
		password.focus();
		return false;
	}
	return true;
};


//to change form based on dropdown menu
function handleSelection(choice) {
    document.getElementById('usertype').disabled=true;
    document.getElementById(choice).style.display="block";
}

//check password matching
var check = function() {
    var div = document.getElementById('usertype').value;
    var pwd = 'password_' + div;
    var confirm_pwd = 'confirm_password_' + div;
    
  if (document.getElementById(pwd).value ==
    document.getElementById(confirm_pwd).value) {
    
    if(document.getElementById('usertype').value.equals('div1')){
        
        document.getElementById('registerButton1').disabled = false;
        document.getElementById('message1').style.color = 'green';
        document.getElementById('message1').innerHTML = 'matching';
    }
    
    else if(document.getElementById('usertype').value.equals('div2')){
        
        document.getElementById('registerButton2').disabled = false;
        document.getElementById('message2').style.color = 'green';
        document.getElementById('message2').innerHTML = 'matching';
    }
    
  } else {
    
    if(document.getElementById('usertype').value.equals('div1')){
        
        document.getElementById('registerButton1').disabled = true;
        document.getElementById('message1').style.color = 'red';
        document.getElementById('message1').innerHTML = 'not matching';
    }
    
    else if(document.getElementById('usertype').value.equals('div2')){
        
        document.getElementById('registerButton2').disabled = true;
        document.getElementById('message2').style.color = 'red';
        document.getElementById('message2').innerHTML = 'not matching';
    }
  }
  
  
}