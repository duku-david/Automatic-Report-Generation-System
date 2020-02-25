
<?php include('staff_header.php'); ?>

 
   <div class="formheadera" >Change Password</div>
        <div class="main-wrappings">
           <div class="container form1">
            <div id="output"></div>
              <form id="form2" action="change_pass_server.php" name = "myform" method="post">
             <div class="form-group" style="display: none;">
                  <label>Old Password</label>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="hidden" name="current_password" id="current_password" value="<?php echo $_SESSION['password']?>" class="form-control"><br>
                  </div>
                     <div id="current_error" align="center"></div>
                    
             </div>

              <div class="form-group">
                  <label>New Password</label>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="password" name="new_password" id="new_password" placeholder="New Password" class="form-control"><br>
                  </div>
                     <div id="newpassword_error" align="center"></div>
                    
              </div>   
              
              <div class="form-group">
                      <label>Re Enter Password</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" name="re_enter_password" id="re_enter_password" placeholder="Re Enter Password" class="form-control"><br>
                   </div>
                   <div id="re_enter_password_error" align="center" ></div>  
                    
              </div>
              
             <div  style="display: inline-block;">
                    <button type="submit" class="btn btn-warning" style="width: 100px; margin: 5px; border-radius: 5px; cursor: pointer; " name="change_password" >Save<i class="glyphicon glyphicon-save"></i></button>
                  </div>
                  <div style="float: right; margin-right: 50px; margin-top:10px; ">
                  </div>
                  
                  <input type="hidden" id="username" value="<?php echo $_SESSION['username'] ?>" name="username">
      </form>
                
  </div>
     
<?php include('../../footer.php');?>

 
     <script type="text/javascript" src="javascript/Change_password.js">
        
    </script>
    <script type="text/javascript" src="javascript/OAlevel_validate.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

     $(document).on("submit","#form2",function(e){
          e.preventDefault();
            var new_password    =$("#new_password");
            var newpassword_error=$("#newpassword_error");
            var re_enter_password =$("#re_enter_password");
            var re_enter_password_error=$("#re_enter_password_error");
          if(new_password.val()=="")
          { 
            new_password.css("border","0.5px solid red");
            newpassword_error.html("Please Enter New Password").css("color","red");
            return false;
          }else if(re_enter_password.val()=="")
          { 
            re_enter_password.css("border","0.5px solid red");
            re_enter_password_error.html("Please Confirm Your Password").css("color","red");
            return false;
          }else 
          { 
            var username =$("#username").val();
            var current_password=$("#current_password").val();
            var new_password    =$("#new_password").val();
            var re_enter_password =$("#re_enter_password").val();
            $.ajax({
              url:"change_pass_server.php",
              type:"POST",
              data:{
                    change_password:1,
                    username:username,
                    current_password:current_password,
                     new_password:new_password,
                    re_enter_password:re_enter_password
                   },
              success:function(data)
              {
                $("#output").html(data);
    
              }
            });
          }
     });

      $("#current_password").on("input",function(){
          VCurrent_Password();
      });
      $("#new_password").on("input",function(){
          VNew_Password();
      });
      $("#re_enter_password").on("input",function(){
          Confirm_new_password();
      });

      function Password_change() {
         var uid =$("#username");
         var uide =$("#username_error");
         var t ="User";
  if(Name(uid,uide,t)==false){
    return false;
  }
  if(VCurrent_Password()==false){
    return false;
  }
  if(VNew_Password()==false){
    return false;
  }
  if(Confirm_new_password()==false){
    return false;
  }
   

}

  });
</script>



