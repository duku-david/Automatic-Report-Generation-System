
<?php include('admin_header.php'); ?>

 
        <div class="formheadera" >Change Password</div>
        <div class="main-wrappings">
           <div class="container form1">
            <div id="output"></div>
              <form id="form2" action="change_pass_server.php" name = "myform" method="post">
                <div class="form-group">
                    <label>username</label>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="username" id="username" placeholder="username" class="form-control"><br>
             </div>
               <div id="username_error" align="center"></div>
              </div>   
             <div class="form-group">
                  <label>Old Password</label>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input type="password" name="current_password" id="current_password" placeholder="Old Password" class="form-control"><br>
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
              <div>
                    <button type="submit" class="btn btn-warning" name="change_password" >Save<i class="glyphicon glyphicon-save"></i></button>
                  </div>

      </form>
                
  </div>
     
     <script type="text/javascript" src="javascript/Change_password.js">
        
    </script>
    <script type="text/javascript" src="javascript/OAlevel_validate.js"></script>
     
<?php include('../../footer.php');?>
<script type="text/javascript">
  $(document).ready(function(){

     $(document).on("submit","#form2",function(e){
          e.preventDefault();
          if(Password_change()==false)
          {
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
                $("#current_password").val("");  
              }
            });
          }
     });

      $("#username").on("input",function(){
         var username =$("#username");
         var username_error =$("#username_error");
         var texts ="User";
         Name(username,username_error,texts);
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



