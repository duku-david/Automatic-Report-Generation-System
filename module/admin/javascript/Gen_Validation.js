
//validation of signup form
function Validate() {

    if(Validate_firstname()==false){

    	return false;
    }
    if(Validate_othername()==false){

    	return false;
    }
    if(Validate_name()==false){

    	return false;
    }
    if(Validate_gender()==false){

    	return false;
    }
    if(Validate_privillage()==false){

    	return false;
    }
    if(initials()==false){

    	return false;
    }
    if(Validate_password()==false){

    	return false;
    }
    if(Confirm_password()==false){

    	return false;
    }
    if(Validate_image()==false){

    	return false;
    }

}

function Validate_Update_form() {

    if(Validate_firstname()==false){

    	return false;
    }
    if(Validate_othername()==false){

    	return false;
    }
    if(Validate_name()==false){

    	return false;
    }
    if(Validate_gender()==false){

    	return false;
    }
    if(Validate_privillage()==false){

    	return false;
    }
    if(initials()==false){

    	return false;
    }
    
    if(Validate_password()==false){

    	return false;
    }
    if(Confirm_password()==false){

    	return false;
    }
    if(Validate_image()==false){

    	return false;
    }

}




function Validate_Alevel() {

    if(Validate_firstname()==false){

    	return false;
    }
    if(Validate_othername()==false){

    	return false;
    }
    
    if(Validate_RegNo()==false){

    	return false;
    }
     if(Validate_comb()==false){

    	return false;
    }
   
    if(Validate_form()==false){

    	return false;
    }
    if(Validate_gender()==false){

    	return false;
    }
    
    if(Validate_image()==false){

    	return false;
    }

}

 function Validate_firstname() 
 {
                   
                  var firstname = $("#firstname");
          
                  if(firstname.val().trim()=="")
                  {
                    firstname.css("border","2px solid red");
                     $("#firstname_error").html("Please fill the firstname");
                     $("#firstname_error").css("color","red");
                    return false;
                  } else if(firstname.val().trim().length < 3 || firstname.val().trim().length >=25 )
	                  {
	                  	firstname.css("border","2px solid red");
	                     $("#firstname_error").html("the first name must be between 4 and 25 characters");
	                     $("#firstname_error").css("color","red");
	                    	return false;
	                  }else if(!isNaN(firstname.val().trim()))
	                  {
	                     firstname.css("border","2px solid red");
	                     $("#firstname_error").html("Only Characters are allowed");
	                     $("#firstname_error").css("color","red");
	                    	return false;	
	                  }else
                    {
                       firstname.css("border","2px solid green");
                       $("#firstname_error").html("").css("color","");
                          return true;
                    }
}


function Validate_othername() 
 {
                   
                  var othername = $("#othername");
          
                  if(othername.val().trim()=="")
                  {
                    othername.css("border","2px solid red");
                     $("#othername_error").html("Please fill the othername");
                     $("#othername_error").css("color","red");
                    return false;
                  } else if(othername.val().trim().length < 3 || othername.val().trim().length >=25 )
	                  {
	                  	othername.css("border","2px solid red");
	                     $("#othername_error").html("the first name must be between 4 and 25 characters");
	                     $("#othername_error").css("color","red");
	                    	return false;
	                  }else if(!isNaN(othername.val().trim()))
	                  {
	                     othername.css("border","2px solid red");
	                     $("#othername_error").html("Only Characters are allowed");
	                     $("#othername_error").css("color","red");
	                    	return false;	
	                  }else
                    {
                       othername.css("border","2px solid green");
                       $("#othername_error").html("").css("color","");
                          return true;
                    }
}


function Validate_RegNo()
{
		var Reg_no   =$("#Reg_no");
		var Reg_no_e =$("#Reg_no_error");
		if(Reg_no.val().trim()=="")
          {
            Reg_no.css("border","2px solid red");
             Reg_no_e.html("Please Enter Registration Number");
             Reg_no_e.css("color","red");
            return false;
          }else if(Reg_no.val().trim().length !=12)
	          {
	          	Reg_no.css("border","2px solid red");
	             Reg_no_e.html("Please Registration Number Must be 12 characters only");
	             Reg_no_e.css("color","red");
	              return false;
	         }else
		         {
		         	 Reg_no.css("border","2px solid green");
                      Reg_no_e.html("").css("color","");
                      return true;
		         }

}


function Validate_form()
{
	var form   = $("#form");
	var form_e = $("#form_error");
	if(form.val().trim()=="000")
	{
		form.css("border","2px solid red");
		form_e.html("please select class");
		form_e.css("color","red");
	}else 
	{
		 form.css("border","2px solid green");
          form_e.html("").css("color","");
          return true;
	}
}

function Validate_gender() {
		var gender     = $("#gender");
		var gender_e   = $("#gender_error");
		
		// check if the picture field is empty
    if(gender.val().trim() =="000")
    {
        gender.css("border","2px solid red");
        gender_e.html("please select gender");
        gender_e.css("color","red");
		return false;
     }else{
     
     	  gender.css("border","2px solid green");
          gender_e.html("").css("color","");
          return true;
     	  }
     
	}    

//
  function initials()
  {
  	 var initial =$("#initial");
     var initial_e =$("#initial_error");

  	 if(initial.val()=="")
     {
        initial.css("border","2px solid red");
        initial_e.html("please enter your initials");
		    return false;

  	 }else if(!isNaN(initial.val()))
     {  
        initial.css("border","2px solid red");
        initial_e.html("please only characters are required");
        return false;
		}else{

            initial.css("border"," 2px solid green");
            initial_e.html("");
            return true;
  	 }
  }

//validating image extension
	function Validate_image()
	{
		var picture     =$("#picture");
		var picture_e   =$("#picture_error");
			// check if the picture field is empty
	    if(picture.val().trim() =="")
	    {
	          
	        picture.css("border","2px solid red");
	        picture_e.html("Please Select Picture");
	        picture_e.css("color","red");
			return false;

	     }else{
	     	    pictures     =$("#picture").val();
		         var extension   =pictures.substring(pictures.lastIndexOf('.') + 1).toLowerCase();
		        if(extension=="jpg" || extension=="jpeg" || extension=="png")
		        {
		        	picture.css("border","2px solid green");
		              picture_e.html("").css("color","");
				      return true;

		         }else{
		     	     
				       picture.css("border","2px solid red");
			        picture_e.html("Only jpg,jpeg,png and gif image format required");
			        picture_e.css("color","red");
			        return false;
		              }
              } 
    }


	function Validate_comb() {
		var comb     = $("#comb");
		var comb_e   = $("#comb_error");
		
		// check if the picture field is empty
    if(comb.val().trim() =="000"){
        comb.css("border","2px solid red");
        comb_e.html("Please Select Combination");
        comb_e.css("color","red");
		return false;
     }else{
     
     	     comb.css("border","2px solid green");
	         comb_e.html("").css("color","");
		     return true;
     	  }
     
	}





//validate username
function Validate_name()
{
	var username    = $("#username");
	var username_error = $("#username_error");

	if(username.val().trim() =="")
	{
		username.css("border","2px solid red");
		username_error.html("Please fill the username");
		username_error.css("color","red");
		return false;
	}else{
		// check if the length of username is between 4 and 25
	if(username.val().trim().length <3 || username.val().length >=25 )
	{
		username.css("border","2px solid red");
		username_error.html("The username must be between 4 and 25 characters");
		username_error.css("color","red");
		return false;

	}else{
		//check if user name is not digits
		   if(!isNaN(username.val().trim()))
			{
				username.css("border","2px solid red");
				username_error.html("Only Characters are allowed");
				username_error.css("color","red");
				return false;
		    }else{
				username.css("border","2px solid green");
				username_error.html("").css("color","");
        		return true;
	   }
	}
	
	
	}

}

//validate password
function Validate_password()
{
		var password_1  = $("#password_1");
		var password_e =$("#password_error");

		// check if the password is empty
		if(password_1.val().trim() =="")
		{
			password_1.css("border"," 2px solid red");
			password_e.html("Please enter the password");
			password_e.css("color","red");
			return false;
			
		} else if(password_1.val().trim().length < 8)
		{
			password_1.css("border"," 2px solid red");
			password_e.html("The lenght of password must be greater than 8");
			password_e.css("color","red");
			return false;
			
		}else if(password_1.val().search(/[a-z]/) == -1)
		{
			password_1.css("border"," 2px solid red");
			password_e.html("Atleast one small letter is required");
			password_e.css("color","red");
			return false;
		}else if(password_1.val().search(/[A-Z]/) == -1)
		{
			password_1.css("border"," 2px solid red");
			password_e.html("Atleast one capital letter is required");
			password_e.css("color","red");
			return false;
		}else if(password_1.val().search(/[0-9]/) == -1)
		{
			password_1.css("border"," 2px solid red");
			password_e.html("Atleast one digit letter is required");
			password_e.css("color","red");
			return false;
	    }else if(password_1.val().search(/[!\@\#\$\%\^\&\*\.\,\-\+\:]/) == -1)
	    {
	    	password_1.css("border"," 2px solid red");
			password_e.html("Atleast one special character is required");
			password_e.css("color","red");
			return false;
	        
		}
		   else{
		   	     password_1.css("border"," 2px solid green");
	   			password_e.html("").css("color","");
				return true;
		   }

 }  
	   	  
  
	      
	//validate in confirmation password    
  function Confirm_password()
  {
	    	var password_1  = $("#password_1");
		    var  password_2 = $("#password_2");
		    var   cpwd      = $("#confirmpassword_error");
	        //check if the confirm password is empty
	        if(password_2.val().trim()=="")
	        {
	        	password_2.css("border"," 2px solid red");
				cpwd.html("Please confirm your password");
				cpwd.css("color","red");
			
		    return false;
		  }else{
	         // check if the password is equals to confirm password
		  	if(password_1.val().trim() != password_2.val().trim())
		  	{
		  		password_2.css("border"," 2px solid red");
				cpwd.html("The two passwords do not match");
				cpwd.css("color","red");
			       return false;

		         }else{
		         	password_2.css("border"," 2px solid green");
	                cpwd.html("").css("");
			       return true;
		         }
		  }


		   
    }  
	
	

	function Validate_comb()
	 {
		var comb     = $("#comb");
			var comb_e=$("#comb_error");
			// check if the picture field is empty
	    if(comb.val() =="000")
	    {
	    	comb.css("border","2px solid red");
	        comb_error.html("please select combination");
			return false;
	     }else{
	     	    comb.css("border","2px solid green");
	     	    comb_e.html("").css("color","");
			      return true;
	     	  }
     
	}

	
	

	function Validate_privillage()
	{
		var privillage     = $("#privillage");
			var privillage_e   = $("#privilliage_error");
			
			// check if the privlliage field is empty
	    if(privillage.val()=="000"){
	    	privillage.css("border","red");
	    	privillage_e.html("Please Select Privillage");
	        privillage_e.css("color","red");
			return false;
	     }else{
	     		privillage.css("border","2px solid green");
	              privillage_e.html("").css("");
			      return true;
	     	  }
     
	}
	

	function Validate_date()
	 {
		var date   = $("#date");
		var date_e =$("#date_error");
			// check if the picture field is empty
	    if(date.val()=="")
	    {
	    	date.css("border","0.5px solid red");
	        date_e.html("please select Date");
			return false;
	     }else{
	     	    date.css("border","0.5px solid green");
	     	    date_e.html("").css("color","");
			      return true;
	     	  }
     
	}
	

	




