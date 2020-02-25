 
  function Validate_Olevel() {
    var subject   =$("#subject");
    var subject_e =$("#subject_error");
    var form = $("#form");
    var form_e =$("#form_error");
    var initial =$("#initials");
    var initial_e =$("#initial_error");

  	if(subjects(subject,subject_e)==false){
  		return false;
  	}
  	if(form(form,form_e)==false){
  		return false;
  	}
  	if(initial(initial,initial_e)==false){
  		return false;
  	}
  	
  }
  function Validate_Alevel() {
     var subject = $("#subjecta");
     var subject_e =$("#subjecta_error");
     var form = $("#forma");
     var form_e =$("#forma_error");
     var initial=$("#initiala");
     var initial_e=$("#initiala_error");

    if(subjects(subject,subject_e)==false){
      return false;
    }
    if(form(form,form_e)==false){
      return false;
    }
    if(initials(initial,initial_e)==false){
      return false;
    }
    
  }

  
  function subjects(subject,subject_e) {
  	
  	 if(subject.val()=="000")
     {
        subject.css("border","0.5px solid red");
        subject_e.html("please select subject").css("color","red");
        return false;
     }else{
              subject.css("border"," 0.5px solid green");
              subject_e.html("");
              return true;
           }
  }

  function form(form,form_e)
  {
  	   

       if(form.val()=="000")
       {
          form.css("border","0.5px solid red");
          form_e.html("please select Class").css("color","red");
          return false;
       }else{
           
            form.css("border"," 0.5px solid green");
            form_e.html("");
            return true;
            }
  }

  function initials(initials,initials_e)
  {
    
     if(initials.val()=="")
     {
        initials.css("border","0.5px solid red");
        initials_e.html("please enter your initials").css("color","red");
        return false;

     }else if(!isNaN(initials.val()))
     {  
        initials.css("border","0.5px solid red");
        initials_e.html("please only characters are required").css("color","red");
        return false;
    }else{

            initials.css("border"," 0.5px solid green");
            initials_e.html("");
            return true;
     }
  }