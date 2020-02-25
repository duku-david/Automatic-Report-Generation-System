

function VCurrent_Password()
{
    var current_password =$("#current_password");
    var current_error	 =$("#current_error");

 	if(current_password.val().trim() =="")
 	{
 		current_password.css("border","0.5px solid red");
 		current_error.html("Please enter your Current password");
		current_error.css("color","red");
	     return false;
	 } 
	else if(current_password.val().trim().length < 8)
	{
		current_password.css("border","0.5px solid red");
 		current_error.html("The lenght of password must be greater than 8");
		current_error.css("color","red");
	     return false;

	}else if(current_password.val().search(/[a-z]/) == -1)
	   {
	   	 current_password.css("border","0.5px solid red");
 		current_error.html("Atleast one small letter is required");
		current_error.css("color","red");
	     return false;

	   }else if(current_password.val().search(/[A-Z]/) == -1)
	   {
	   	 current_password.css("border","0.5px solid red");
 		current_error.html("Atleast one capital letter is required");
		current_error.css("color","red");
	     return false;

	   }else if(current_password.val().search(/[0-9]/) == -1)
	   { 
	   	 current_password.css("border","0.5px solid red");
 		current_error.html("Atleast one digit letter is required");
		current_error.css("color","red");
	     return false;

	   }else if(current_password.val().search(/[!\@\#\$\%\^\&\*\.\,\-\+\:]/) == -1)
	   { 
	   	 current_password.css("border","0.5px solid red");
 		current_error.html("Atleast one special character is required");
		current_error.css("color","red");
	     return false;
	   }
	   else{
	   	current_password.css("border","0.5px solid green");
	   	current_error.html("").css("color","");
		return true;
	   }

}

function VNew_Password()
{
	var new_password = $("#new_password");
	var newpassword_error=$("#newpassword_error");

	if(new_password.val().trim() =="")
	{
		new_password.css("border","0.5px solid red");
		newpassword_error.html("Please enter your new password");
		newpassword_error.css("color","red");
		return false;
		
	} else if(new_password.val().trim().length < 8)
	{
		new_password.css("border","0.5px solid red");
		newpassword_error.html("the lenght of your new password must be greater than 8");
		newpassword_error.css("color","red");
		return false;

	   }else if(new_password.val().search(/[a-z]/) == -1)
	   {
	   	 new_password.css("border","0.5px solid red");
		newpassword_error.html("Atleast one small letter is required");
		newpassword_error.css("color","red");
		return false;

	   }else if(new_password.val().search(/[A-Z]/) == -1)
	   {
	   	  new_password.css("border","0.5px solid red");
		  newpassword_error.html("Atleast one capital letter is required");
		  newpassword_error.css("color","red");
		 return false;

	   }else if(new_password.val().search(/[0-9]/) == -1)
	   { 
	   	  new_password.css("border","0.5px solid red");
		newpassword_error.html("Atleast one digit letter is required");
		newpassword_error.css("color","red");
		return false;

	   }else if(new_password.val().search(/[!\@\#\$\%\^\&\*\.\,\-\+\:]/) == -1)
	   { 
	   	  new_password.css("border","0.5px solid red");
		newpassword_error.html("Atleast one special character is required");
		newpassword_error.css("color","red");
		return false;

	   }
	   else{
	   	     new_password.css("border","0.5px solid green");
		     newpassword_error.html("").css("color","");
			return true;
	   }

}

 function Confirm_new_password() {
    	var new_password      = $("#new_password");
	    var re_enter_password = $("#re_enter_password");
	    var re_enter_password_error=$("#re_enter_password_error");

        //check if the confirm password is empty
        if(re_enter_password.val().trim() =="")
        {
        	re_enter_password.css("border","0.5px solid red");
        	re_enter_password_error.html("Please confirm your password");
        	re_enter_password_error.css("color","red");
	        return false;
	    }else{
         // check if the password is equals to confirm password
	  	        if(new_password.val().trim() != re_enter_password.val().trim())
	  	        {
	  	        	re_enter_password.css("border","0.5px solid red");
		        	re_enter_password_error.html("The two passwords do not match");
		        	re_enter_password_error.css("color","red");
	       		     return false;
	         }else{
                re_enter_password.css("border","0.5px solid green");
                re_enter_password_error.html("");
		       return true;
	         }
	  }


	   
    }  