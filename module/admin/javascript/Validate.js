
//validation of signup form
function Validate() {

    if(Validate_firstname()== false){

    	return false;
    }
    if(Validate_lastname() == false){

    	return false;
    }
    if(Validate_name() == false){

    	return false;
    }
    if(Validate_number() == false){

    	return false;
    }
    if(Validate_password() == false){

    	return false;
    }
    if(Confirm_password() == false){

    	return false;
    }
    if(Validate_image() == false){

    	return false;
    }

}


	

//validate firstname
function Validate_firstname() {
	var firstname    = document.getElementById('firstname');
	if(firstname.value.trim() ==""){
		document.getElementById('firstname_error').innerHTML = "Please fill the firstname";
		firstname.style.border = " 2px solid red";
		return false;
		
	}else if(firstname.value.trim().length <= 3 || username.value.length >=25 ){
		document.getElementById('firstname_error').innerHTML = "the first name must be between 4 and 25 characters";
		firstname.style.border = " 2px solid red";
		return false;

	}else if(!isNaN(firstname.value.trim())){
       document.getElementById('firstname_error').innerHTML = "Only Characters are allowed";
		firstname.style.border = " 2px solid red";
		return false;
	}
	else{
		document.getElementById('firstname_error').innerHTML ="";
		firstname.style.border = " 2px solid green";
         return true;
	   }

}



//validate firstname
function Validate_lastname() {
	var lastname    = document.getElementById('lastname');
	if(lastname.value.trim() ==""){
		document.getElementById('lastname_error').innerHTML = "Please fill the firstname";
		lastname.style.border = " 2px solid red";
		return false;
		
	}else if(lastname.value.trim().length <=3 || username.value.length >=25 ){
		document.getElementById('lastname_error').innerHTML = "the first name must be between 4 and 25 characters";
		lastname.style.border = " 2px solid red";
		return false;

	}else if(!isNaN(lastname.value.trim())){
       document.getElementById('lastname_error').innerHTML = "Only Characters are allowed";
		lastname.style.border = " 2px solid red";
		return false;
	}else{
		document.getElementById('lastname_error').innerHTML ="";
		lastname.style.border = " 2px solid green";
         return true;
	   }

}


//validate username
function Validate_name() {
	var username    = document.getElementById('username');
	if(username.value.trim() ==""){
		document.getElementById('username_error').innerHTML = "Please fill the username";
		username.style.border = " 2px solid red";
		return false;
	}else{
		// check if the length of username is between 4 and 25
	if(username.value.trim().length <= 3 || username.value.length >=25 ){
		document.getElementById('username_error').innerHTML = "the username must be between 4 and 25 characters";
		username.style.border = " 2px solid red";
		return false;

	}else{
		// check if the length of username is between 4 and 25
	
		//check if user name is not digits
		if(!isNaN(username.value.trim())){
       document.getElementById('username_error').innerHTML = "Only Characters are allowed";
		username.style.border = " 2px solid red";
		return false;
	}else{
		document.getElementById('username_error').innerHTML ="";
		username.style.border = " 2px solid green";
        return true;
	   }
	}
	
	
	}

}



//validATE phone number
   function Validate_number() {
   	  var numb        = document.getElementById('phone_number');
   	if(numb.value.trim() ==""){
		document.getElementById('number_error').innerHTML = "Please enter phone number";
		numb.style.border = " 2px solid red";
		return false;
	}else{
		// check if the length of phone number is 10 
	      if(numb.value.trim().length != 10){
		     document.getElementById('number_error').innerHTML = "Please Phone number must be 10 digits only";
		    numb.style.border = " 2px solid red";
		    return false;
	    }else{
	    	if(isNaN(numb.value.trim())){

		    document.getElementById('number_error').innerHTML = "Please enter only digits Not characters";
		    numb.style.border = " 2px solid red";
		    return false;
	      }else{
	      	if(numb.value.trim().charAt(0)!= 7 && numb.value.charAt(0)!= 0 ){

		    document.getElementById('number_error').innerHTML = "phone number must start with 0 and 7";
		   numb.style.border = " 2px solid red";
		   return false;
	      }else{
	      	 document.getElementById('number_error').innerHTML = "";
		   numb.style.border = " 2px solid green";
		   return true;
	      }
	      }
	    }
	  }
	
   }

//validate password
function Validate_password() {
	var password_1  = document.getElementById('password_1');

	// check if the password is empty
	if(password_1.value.trim() ==""){
		document.getElementById('password_error').innerHTML = "Please enter the password";
		password_1.style.border = " 2px solid red";
		return false;
		
	} else if(password_1.value.trim().length < 8){
		document.getElementById('password_error').innerHTML = "the lenght of password must be greater than 8";
		password_1.style.border = " 2px solid red";
		return false;

	   }else if(password_1.value.search(/[a-z]/) == -1){
         document.getElementById('password_error').innerHTML = "Atleast one small letter is required";
		password_1.style.border = " 2px solid red";
        return false;
	   }else if(password_1.value.search(/[A-Z]/) == -1){
         document.getElementById('password_error').innerHTML = "Atleast one capital letter is required";
		password_1.style.border = " 2px solid red";
		return false;
	   }else if(password_1.value.search(/[0-9]/) == -1){
         document.getElementById('password_error').innerHTML = "Atleast one digit letter is required";
		password_1.style.border = " 2px solid red";
		return false;
	   }else if(password_1.value.search(/[!\@\#\$\%\^\&\*\.\,\-\+\:]/) == -1){
         document.getElementById('password_error').innerHTML = "Atleast one special character is required";
		password_1.style.border = " 2px solid red";
		return false;
	   }
	   else{
	   	document.getElementById('password_error').innerHTML = "";
		password_1.style.border = " 2px solid green";
		return true;
	   }

	 }  
	   	  
  
	      
	//validate in confirmation password    
  function Confirm_password() {
    	var password_1  = document.getElementById('password_1');
	    var  password_2 = document.getElementById('password_2');
        //check if the confirm password is empty
        if(password_2.value.trim() ==""){
		document.getElementById('confirmpassword_error').innerHTML = "Please confirm your password";
		password_2.style.border = " 2px solid red";
	    return false;
	  }else{
         // check if the password is equals to confirm password
	  	if(password_1.value.trim() != password_2.value.trim()){
   
             document.getElementById('confirmpassword_error').innerHTML = "the two passwords do not match";
		       password_2.style.border = " 2px solid red";
		       return false;

	         }else{
                document.getElementById('confirmpassword_error').innerHTML = "";
		       password_2.style.border = " 2px solid green";
		       return true;
	         }
	  }


	   
    }  
	
	
	//validating image extension
	function Validate_imagev() {
		var picture     = document.getElementById('picture');
		
		// check if the picture field is empty
    if(picture.value ==""){
          
        document.getElementById('picture_error').innerHTML = "please select picture";
		picture.style.border = " 2px solid red";
		return false;

     }else{
  //        var extension   =picture.value.substring(picture.value.lastIndexOf('.') + 1).toLowerCase();
  //       if(extension !="jpg" || extension !="jpeg" || extension !="png" || extension !="gif"){

  //         document.getElementById('picture_error').innerHTML = "Only jpg,jpeg,png and gif image format required";
		// picture.style.border = " 2px solid red";
		// return false;

  //         }else{
     	     document.getElementById('picture_error').innerHTML = "";
		      picture.style.border = " 2px solid green";
		      return true;
         //}

         // 	    var extension =picture.value.substring(picture.value.lastIndexOf('.') + 1).toLowerCase();
     // 	    if(extension !="jpg" || extension !="jpeg" || extension !="png"){
     //               document.getElementById('picture_error').innerHTML = "Only jpg,jpeg,png and gif image format required";
					// picture.style.border = " 2px solid red";
					// return false;
     	    // }else{

       } 
	}
	 
	function Validate_image() {
		var picture     = document.getElementById('picture');
		
		// check if the picture field is empty
    if(picture.value ==""){
        document.getElementById('picture_error').innerHTML = "please select picture";
		picture.style.border = " 2px solid red";
		return false;
     }else{
     
     	      document.getElementById('picture_error').innerHTML = "";
		      picture.style.border = " 2px solid green";
		      return true;
     	  }
     
	}
	





