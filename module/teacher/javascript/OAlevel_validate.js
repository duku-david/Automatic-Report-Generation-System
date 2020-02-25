function Validate() 
   {
       //fname
          var fname =$("#firstname");
          var errorf =$("#firstname_error");
          var textf  ="First";
          //other name
          var lname =$("#othername");
          var errorl =$("#othername_error");
          var textl  ="Other";
          //registration number

          if(Name(fname,errorf,textf)==false)
          {
            return false;
          }
          if(Name(lname,errorl,textl)==false)
          {
            return false;
          }
          if(Validate_RegNo()==false)
          {
            return false;
          }
          if(Validate_form()==false)
          {
            return false;
          }
          if(Validate_gender()==false)
          {
            return false;
          }
          if(Validate_image()==false)
          {
              return false;
          } 

   }

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

function Validate_RegNo()
{
    var Reg_no   =$("#Reg_no");
    var Reg_no_e =$("#Reg_no_error");
    if(Reg_no.val().trim()=="")
          {
            Reg_no.css("border","0.5px solid red");
             Reg_no_e.html("Please Enter Registration Number");
             Reg_no_e.css("color","red");
            return false;
          }else if(Reg_no.val().trim().length !=12)
            {
              Reg_no.css("border","0.5px solid red");
               Reg_no_e.html("Please Registration Number Must be 12 characters only");
               Reg_no_e.css("color","red");
                return false;
           }else
             {
               Reg_no.css("border","1px solid green");
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
    form.css("border","0.5px solid red");
    form_e.html("please select class");
    form_e.css("color","red");
  }else 
  {
     form.css("border","0.5px solid green");
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
        gender.css("border","0.5px solid red");
        gender_e.html("please select gender");
        gender_e.css("color","red");
    return false;
     }else{
     
        gender.css("border","0.5px solid green");
          gender_e.html("").css("color","");
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
            
          picture.css("border","0.5px solid red");
          picture_e.html("Please Select Picture");
          picture_e.css("color","red");
      return false;

       }else{
            pictures     =$("#picture").val();
             var extension   =pictures.substring(pictures.lastIndexOf('.') + 1).toLowerCase();
            if(extension=="jpg" || extension=="jpeg" || extension=="png")
            {
              picture.css("border","0.5px solid green");
                  picture_e.html("").css("color","");
              return true;

             }else{
               
               picture.css("border","0.5px solid red");
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
        comb.css("border","0.5px solid red");
        comb_e.html("Please Select Combination");
        comb_e.css("color","red");
    return false;
     }else{
     
           comb.css("border","0.5px solid green");
           comb_e.html("").css("color","");
         return true;
        }
     
  }
