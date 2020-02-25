// validation of login form

function Login_Validate() {
	if (Validate_name()==false) {
		return false;
	}
	if (Validate_password()==false) {
		return false;
	}
	if (Validate_year()==false) {
		return false;
	}
	if (Validate_term()==false) {
		return false;
	}
}


//validate password
function Validate_password() {
	var password_1  =$('#password');
	var password_e  =$("#password_error");

	// check if the password is empty
	if(password_1.val().trim() ==""){
		password_e.html("Please enter the password").css("color","red");
		password_1.css("border"," 0.5px solid red");
		return false;
		
	} else if(password_1.val().trim().length < 8){
		password_e.html("the lenght of password must be greater than 8").css("color","red");
		password_1.css("border"," 0.5px solid red");
		return false;

	   }else if(password_1.val().search(/[a-z]/) == -1){
        password_e.html("Atleast one small letter is required").css("color","red");
		password_1.css("border"," 0.5px solid red");
        return false;
	   }else if(password_1.val().search(/[A-Z]/) == -1){
         password_e.html("Atleast one capital letter is required").css("color","red");
		password_1.css("border"," 0.5px solid red");
		return false;
	   }else if(password_1.val().search(/[0-9]/) == -1){
         password_e.html("Atleast one digit letter is required").css("color","red");
		password_1.css("border"," 0.5px solid red");
		return false;
	   }else if(password_1.val().search(/[!\@\#\$\%\^\&\*\.\,\-\+\:]/) == -1){
         password_e.html("Atleast one special character is required").css("color","red");
		password_1.css("border"," 0.5px solid red");
		return false;
	   }
	   else{
	   	password_e.html("");
		password_1.css("border"," 0.5px solid green");
		return true;
	   }

	 }  


// 	 //validate username
function Validate_name() {
	var username    =$('#username');
	if(username.val().trim() ==""){
		$('#username_error').html("Please fill the username").css("color","red");
		username.css("border"," 0.5px solid red");
		return false;
		
	}else{
		// check if the length of username is between 4 and 25
	if(username.val().trim().length <= 3 || username.val().length >=25 ){
		$('#username_error').html("the username must be between 4 and 25 characters").css("color","red");
		username.css("border"," 0.5px solid red");
		return false;

	}else{

		//check if user name is not digits
		if(!isNaN(username.val().trim())){
        $('#username_error').html("Only Characters are allowed").css("color","red");
		username.css("border"," 0.5px solid red");
		return false;
	}else{
		$('#username_error').html("");
		username.css("border"," 0.5px solid red");
        return true;
	   }
	}
	
	}

}

function Validate_year() {
	var year    = $('#year');
	if(year.val().trim() =="000"){
		$('#year_error').html("Please select year").css("color","red");
		year.css("border"," 0.5px solid red");
		return false;
		
	}else{
		$('#year_error').html("");
		year.css("border"," 0.5px solid green");
		return true;
	}

}

function Validate_term() {
	var term    = $('#term');
	if(term.val().trim() =="000"){
		$('#term_error').html("Please select year").css("color","red");
		term.css("border"," 0.5px solid red");
		return false;
		
	}else{
		$('#term_error').html("").css("");
		term.css("border"," 0.5px solid green");
		return true;
	}

}
