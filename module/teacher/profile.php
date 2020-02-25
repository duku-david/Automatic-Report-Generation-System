<?php include('staff_header.php'); ?>
<?php include_once('../../service/connection.php')?>
<?php

$sql ="SELECT * FROM teacher WHERE initials=(SELECT initials FROM login WHERE username='".$_SESSION['username']."')";
 $result =mysqli_query($conn,$sql) or die(mysqli_error($conn));
 if(mysqli_num_rows($result)){
 while($row =mysqli_fetch_assoc($result)){
?>  
           <div class="formheadera" >Update Profile Form</div>
             <div class="main-wrappings">
              <div class="container form1">
                <div id="output"></div>
              <form id="form2" method="post" action="profile.inc.php" enctype="multipart/form-data">
                <div class="form-group">
                     <label>First Name</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" name="firstname" id="firstname" value="<?php echo $row['firstname']?>" class="form-control">
                    </div>
                     <p id="firstname_error" align="center"></p>
                </div>

                <div class="form-group"> 
                     <label>Other Name</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" name="othername" id="othername" value="<?php echo $row['othername']?>" class="form-control">
                    </div>
                      <p id="othername_error" align="center"></p>
               </div>

                <div class="form-group">
                     <label>username</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" name="username" id="username" value="<?php echo $_SESSION['username']?>" class="form-control">
                    </div>
                    <p id="username_error" align="center"></p>
               </div>

                <div class="form-group">
                       <label>Gender</label>
                      <div class="input-group" style=""><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <select name ="gender" id="gender" class="form-control">
                            <option value="000">Select gender</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                      
                      </div>
                      <p id="gender_error" align="center"></p>
                </div>
              <div class="form-group">
                  <label>Initials</label>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" name="initials" id="initials" value="<?php echo $row['initials']?>" class="form-control">
                       
                  </div>
                  <p id="initials_error" align="center"></p>
              </div>
              <div class="form-group">     
                <label> Select Your Picture</label><br>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                  <input type="file" name="picture" id="picture" accept="image/" class="form-control">
                 </div>
                <p id="picture_error" align="center">(Only jpg,jpeg,png,jif image format allowed!)</p> 
              </div>

              <div class="button-group">
                    <button class="btn btn-warning" type="submit" name="update">Update<i class="glyphicon glyphicon-send"></i></button>
              </div>
              <input type="hidden" name="id" id="id" value="<?php echo $row['staff_id']?>">
          </form>
          <?php } }?>
    </div>

    <script type="text/javascript" src="javascript/OAlevel_validate.js">
        
    </script>
     
<?php include('../../footer.php');?>


   <script type="text/javascript" src="javascript/validate_input.js">
        
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
         
        $("#form2").on("submit",function(event) {
          event.preventDefault();
            var firstname =$("#firstname");
            var firstname_error =$("#firstname_error");
            var othername =$("#othername");
            var othername_error =$("#othername_error");
            var username =$("#username");
            var username_error =$("#username_error");
            var gender =$("#gender");
            var initials =$("#initials");
            var initials_error =$("#initials_error");
            var picture    =$("#picture");
            var picture_error=$("#picture_error");
            
          if(firstname.val()=="")
          {
            firstname.css("border","0.5px solid red");
            firstname_error.html("Please enter first name").css("color","red");
            return false;
          }else if(othername.val()=="")
          {
            othername.css("border","0.5px solid red");
            othername_error.html("Please enter other name").css("color","red");
            return false;
          }else if(username.val()=="")
          {
            username.css("border","0.5px solid red");
            username_error.html("Please enter username").css("color","red");
            return false;
          }else if(gender.val()=="000")
          {
            gender.css("border","0.5px solid red");
            gender_error.html("Please select gender").css("color","red");
            return false;
          }else if(initials.val()=="")
          {
            initials.css("border","0.5px solid red");
            initials_error.html("Please enter initials").css("color","red");
            return false;
          }else if(picture.val()=="")
          {
            picture.css("border","0.5px solid red");
            picture_error.html("Please Select Picture").css("color","red");
            return false;
          }else 
          {
          $.ajax({
             url:"profile.inc.php",
             type:"POST",
             data:new FormData(this),
             cache:false,
             contentType:false,
             processData:false,
             success:function(data){
                  $("#output").html(data);
                   // ReadData();
             }
          });

        }
        });
        
       $("#firstname").on("input",function(){
              var fname =$("#firstname");
              var error =$("#firstname_error");
              var texts  ="First";
              Name(fname,error,texts);
           });
        $("#othername").on("input",function(){
                  var fname =$("#othername");
                  var error =$("#othername_error");
                  var texts  ="Other";
                  Name(fname,error,texts);
               });
          $("#username").on("input",function(){
              var username =$("#username");
              var error =$("#username_error");
              var texts  ="Username";
              Name(username,error,texts);
           });
         $("#gender").on("blur",function(){
          Validate_gender();
        });
        $("#picture").on("change",function(){
           Validate_image();
        });
        $("#initials").on("input",function(){
          
            Initials();
        });
       
      });
    </script>
