<?php include('admin_header.php'); ?>
  <?php
      $sql = "SELECT COUNT(firstname) AS count_s FROM teacher";
                 $res_count =mysqli_query($conn,$sql) or die(mysqli_error($conn));
                 $res_ct_arry=mysqli_fetch_array($res_count);
  ?>
        <div class="formheadera" >Number Of Staff Members <span class="btn btn-info" style="border-radius: 200px; padding-left: 15px; padding-right: 15px; "><?php echo $res_ct_arry['count_s']; ?></span> </div>
        <div class="main-wrappings"> 
               <!-- The Modal -->
<div class="modal fade" id="myModals">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="modal-body">
        <form id="form2" method="post" action="update_staff.inc.php" enctype="multipart/form-data">

            <div class="form-group">
                 <label>First Name</label>
                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="firstname" id="firstname" class="form-control">
                 </div>
                 <p id="firstname_error" align="center"></p>
            </div>
            <div class="form-group">
                 <label>Other Name</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="othername" id="othername" class="form-control">
                </div>
                <p id="othername_error" align="center"></p>
            </div>
            <div class="form-group">
                 <label>username</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="username" id="username" class="form-control">
                </div>
                <p id="username_error" align="center"></p>
            </div>
            <div>
               <label>Gender</label>
              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <select name ="gender" id="gender" class="form-control">
                          <option value="000">Select gender</option>
                          <option value="male">male</option>
                          <option value="female">female</option>
                    
                    </select>
              </div>
              <p id="gender_error" align="center"></p>
            </div>
                      
            <div>
                 <label>Privilliage</label>
                   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <select name="privillage" id="privillage" class="form-control">
                          <option value="000">Select privillage</option>  
                         <option value="standard">standard</option>
                         <option value="administrator">administrator</option>
                      </select>
            </div>
              <p id="privillage_error" align="center"></p>
            </div>
            <div class="form-group">
                  <label>Initials</label>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input type="text" name="initials" id="initials" class="form-control">
                  </div>
                  <p id="initials_error" align="center"></p>
              </div>
               <div>     
                  <label> Select Your Picture</label><br>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                    <input type="file" name="picture" id="picture" accept="image/" class="form-control">
                   </div>
                  <p id="picture_error">(Only jpg,jpeg,png,jif image format allowed!)</p> 

              </div>
          
        
      </div>
        
      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="hidden" name="id" id="staff_id">
         <button type="submit" class="btn btn-info" id="Insert" name="Insert">Insert</button>
        <button type="button" class="btn btn-defualt" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div> 
      <div id="modal_output"></div>
      <div id="table_content"></div>
        </div>
<?php include('../../footer.php');?>
        <script type="text/javascript" src="javascript/OAlevel_validate.js">
        
    </script>
    <script type="text/javascript" src="javascript/validate_input.js">
        
    </script>
    <script type="text/javascript">
  
  $(document).ready(function(){
     // $(".table").DataTable();
     // $('.table').DataTable();
  });

      $(document).ready(function(){
        $("#form2").on("submit",function(event) {
          event.preventDefault();
          // alert("d");
          
          var privillage=$("#privillage");
          var initials =$("#initials");
          var Update="Update";

          var fname =$("#firstname");
          var errorf =$("#firstname_error");
          var textf  ="First";
          //other name
          var lname =$("#othername");
          var errorl =$("#othername_error");
          var textl  ="Other";
           //username
          var uid =$("#username");
          var uid_e =$("#username_error");
          var uidtext  ="User";

          if(Name(fname,errorf,textf)==false)
          {
            return false;
          }else if(Name(lname,errorl,textl)==false)
          {
            return false;
          }else if(Name(uid,uid_e,uidtext)==false)
          {
            return false;
          }else if(Validate_gender()==false)
          {
            return false;
          }else if(privillage.val()=="000")
          {
            privillage.css("border","0.5px solid red");
            privillage_error.html("Please enter first name").css("color","red");
            return false;
          }else if(initials.val()=="")
          {
            initials.css("border","0.5px solid red");
            initials_error.html("Please enter initials").css("color","red");
            return false;
          }else if(Validate_image()==false)
          {
              return false;
          }else
          {

          $.ajax({
             url:"update_staff.inc.php",
             type:"POST",
             data: new FormData(this),
             contentType:false,
             processData:false,
             cache:false,
             success:function(d)
             {
              $("#myModals").modal("hide");
               $("#modal_output").html(d);
              $("#firstname").val("");
              $("#othername").val("");
                  $.ajax({
                   url:"staff_link.php",
                   type:"POST",
                   success:function(data)
                   {
                    $("#table_content").html(data);
                   }
                });
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
        });
        $("#privillage").on("blur",function(){
          // Privillage();
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
        });
      });
    </script>
     

     <script type="text/javascript">
       $(document).ready(function()
        {
           ReadData();
           Update_staff();
           Activate_staff();
           Disactivate_staff();
           Delete_staff();

          function ReadData()
          {
            $.ajax({
               url:"staff_link.php",
               type:"POST",
               success:function(data)
               {
                $("#table_content").html(data);
               }
            });
          }

          function Update_staff() {
            $(document).on("click",".update",function(){
               var idu = $(this).attr("id");
                   $.ajax({
                      url:'staff_link_u.php',
                      type:'POST',
                      data:{idu:idu},
                      dataType:'json',
                      success:function(data)
                      {
                       
                          $(".modal-title").html("Update Staff");
                          $("#staff_id").val(idu);
                          $("#Insert").html("Update");
                          $("#firstname").val(data.firstname);
                          $("#othername").val(data.othername);
                          $("#username").val(data.username);
                           $("#initials").val(data.initials);
                          $("#myModals").modal("show");
                           $("#modal_output").html(data);
                      }
                   });
            });
          }

          function Activate_staff() {
           $(document).on("click",".activate",function(){
              var ida = $(this).attr("id");
              
              if(confirm("Do  You want to Activate?")){
                    $.ajax({
                        url:"staff_link_u.php",
                        type:"POST",
                        data:{activate:ida},
                        success:function(data)
                        {
                          $("#alert-data").html(data);
                          
                          ReadData();
                           $("#modal_output").html(data);
                        }
                    });
              }else
              {
                
              }
           });
          }

          function Disactivate_staff() {
           $(document).on("click",".disactivate",function(){
              var id = $(this).attr("id");
              
              if(confirm("Do  You want to Disactivate?")){
                    $.ajax({
                        url:"staff_link_u.php",
                        type:"POST",
                        data:{disactivate:id},
                        success:function(data)
                        {
                           $("#modal_output").html(data);
                          ReadData();
                        }
                    });
              }else
              {
                
              }
           });
          }

          function Delete_staff() {
           $(document).on("click",".delete",function(){
              var id = $(this).attr("id");
              
              if(confirm("Do  You want to Delete?")){
                    $.ajax({
                      url:"staff_link_u.php",
                      type:"POST",
                      data:{delete:id},
                      success:function(data)
                      {
                          $("#modal_output").html(data);
                          ReadData();
                      }
                    });
              }else
              {
                
              }
           });
          }

        });
     </script>

