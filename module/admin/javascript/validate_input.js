   
 function Name(fname,error,texts) 
 {
                   

        if(fname.val().trim()=="")
        {
          fname.css("border","0.5px solid red");
           $(error).html(texts+" Name is Required").css("color","red");
          return false;
        } else if(fname.val().trim().length < 3 || fname.val().trim().length >=25 )
          {
          	fname.css("border","0.5px solid red");
             $(error).html("the "+texts+" name must be between 4 and 25 characters").css("color","red");
            	return false;
          }else if(!isNaN(fname.val().trim()))
          {
             fname.css("border","0.5px solid red");
             $(error).html("Only Characters are allowed").css("color","red");
            	return false;	
          }else
          {
             fname.css("border","0.5px solid green");
             $(error).html("").css("color","");
                return true;
          }
}

function V_password()
{
    var password_1  = $("#password_1");
    var password_e =$("#password_error");

    // check if the password is empty
    if(password_1.val().trim() =="")
    {
      password_1.css("border"," 0.5px solid red");
      password_e.html("Please enter the password");
      password_e.css("color","red");
      return false;
      
    } else if(password_1.val().trim().length < 8)
    {
      password_1.css("border"," 0.5px solid red");
      password_e.html("The lenght of password must be greater than 8");
      password_e.css("color","red");
      return false;
      
    }else if(password_1.val().search(/[a-z]/) == -1)
    {
      password_1.css("border"," 0.5px solid red");
      password_e.html("Atleast one small letter is required");
      password_e.css("color","red");
      return false;
    }else if(password_1.val().search(/[A-Z]/) == -1)
    {
      password_1.css("border"," 0.5px solid red");
      password_e.html("Atleast one capital letter is required");
      password_e.css("color","red");
      return false;
    }else if(password_1.val().search(/[0-9]/) == -1)
    {
      password_1.css("border"," 0.5px solid red");
      password_e.html("Atleast one digit letter is required");
      password_e.css("color","red");
      return false;
      }else if(password_1.val().search(/[!\@\#\$\%\^\&\*\.\,\-\+\:]/) == -1)
      {
        password_1.css("border"," 0.5px solid red");
      password_e.html("Atleast one special character is required");
      password_e.css("color","red");
      return false;
          
    }
       else{
             password_1.css("border"," 0.5px solid green");
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
            password_2.css("border"," 0.5px solid red");
        cpwd.html("Please confirm your password").css("color","red");
        
      
        return false;
      }else{
           // check if the password is equals to confirm password
        if(password_1.val().trim() != password_2.val().trim())
        {
          password_2.css("border"," 0.5px solid red");
        cpwd.html("The two passwords do not match").css("color","red");;
        
             return false;

             }else{
              password_2.css("border"," 0.5px solid green");
                  cpwd.html("").css("");
             return true;
             }
      }


       
    }  
  

   function Initials()
  {
     var initial =$("#initials");
     var initial_e =$("#initials_error");

     if(initial.val().trim()=="")
     {
        initial.css("border","0.5px solid red");
        initial_e.html("please enter your initials").css("color","red");
        return false;

     }else if(!isNaN(initial.val().trim()))
     {  
        initial.css("border","0.5px solid red");
        initial_e.html("please only characters are required").css("color","red");
        return false;
    }else{

            initial.css("border"," 0.5px solid green");
            initial_e.html("");
            return true;
     }
  }

  function Privillage()
  {
    var privillage     = $("#privillage");
      var privillage_e   = $("#privillage_error");
      
      // check if the privlliage field is empty
      if(privillage.val()=="000"){
        privillage.css("border","0.5px solid red");
        privillage_e.html("Please Select Privillage").css("color","red");
      return false;
       }else{
          privillage.css("border","0.5px solid green");
                privillage_e.html("").css("");
            return true;
          }
     
  }

function V_date()
   {
    var date   = $("#date");
    var date_e =$("#date_error");
      // check if the picture field is empty
      if(date.val()=="")
      {
        date.css("border","0.5px solid red");
          date_e.html("please select Date").css("color","red");
      return false;
       }else{
            date.css("border","0.5px solid green");
            date_e.html("").css("color","");
            return true;
          }
     
  }