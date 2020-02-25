<?php include('admin_header.php'); ?>
 <!-- The Modal -->
<div class="modal fade" id="myModals" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="modal-title"></h4>
        <div id="output"></div>
        <button type="button" class="close" id="close">&times;</button>
        
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="modal-body">
      <form id="form2" method="post" enctype="multipart/form-data">
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
                 <label>Registration</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="Reg_no" id="Reg_no" class="form-control">
                </div>
                <p id="Reg_no_error" align="center"></p>
            </div>
            <div class="form-group">
                     <label>Form</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <select name ="stream" id="form" class="form-control">
    
                      </select>
                    </div>
                    <p id="form_error" align="center"></p>
            </div>
            <div class="form-group">
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
               <div class="form-group">     
                  <label> Select Your Picture</label><br>
                  <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                    <input type="file" name="picture" id="picture" accept="image/" class="form-control">
                   </div>
                  <p id="picture_error">(Only jpg,jpeg,png,jif image format allowed!)</p> 

              </div>
      </div>
        
      <!-- Modal footer -->
      <div class="modal-footer">
          <input type="hidden" name="stud_id" id="stud_id" >
          <input type="hidden" name="old_Reg_no"  id="old_Reg_no">
         <button type="submit" class="btn btn-info" id="Update_std" name="Update_std" >Update</button>
        <button type="button" class="btn btn-defualt" id="close1">Close</button>
      </div>
      </form>
    </div>
  </div>
</div> 

      <?php
      $sql = "SELECT COUNT(firstname) AS count_s FROM ostudent WHERE year='".$_SESSION['year']."'";
                 $res_count =mysqli_query($conn,$sql) or die(mysqli_error($conn));
                 $res_ct_arry1=mysqli_fetch_array($res_count);

       
      $sql = "SELECT COUNT(firstname) AS count_s FROM astudent";
                 $res_count =mysqli_query($conn,$sql) or die(mysqli_error($conn));
                 $res_ct_arry=mysqli_fetch_array($res_count);

  ?>

<div class="formheadera">Number Of Students <a href="examSchedule.php" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Back</a> </div>

<div class="main-wrappings">
   <div id="modal_output"></div>
  <h2>Number O Level Students <span class="btn btn-info" style="border-radius: 200px;padding-left: 15px; padding-right: 15px;"><?php echo $res_ct_arry1['count_s']; ?></span></h2>
     <input type="hidden" name="year" id="year" value="<?php echo $_SESSION['year'];?>">
     
     <div id="ostudent_output"></div>
    
<h2>Number Of A Level Students <span class="btn btn-info" style="border-radius: 200px; padding-left: 15px; padding-right: 15px;"><?php echo $res_ct_arry['count_s']; ?></span> </h2>
   <div id="astudent_output"></div> 
</div>
               
        <?php include('../../footer.php');?>
         <script type="text/javascript" src="../../style/javascript/OAlevel_validate.js">
        
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
          // Close();
          // Close(close1);
          $(document).on("click","#close",Close);
           $(document).on("click","#close1",Close);
           
           function Close()
           {
             $("#firstname").css("border-color","");
             $("#othername").css("border-color","");
             $("#Reg_no").css("border-color","");
             $("#form").css("border-color","");
              $("#gender").css("border-color","");
             $("#picture").css("border-color","");
             $("#myModals").modal("hide");
             $("#gender").data("select","option",function(){
                $(this).val("Select");
             });
              ostudent_output();
           }
         ostudent_output();
         output_astudent();
         function ostudent_output()
        {
           var year =$("#year").val();
          $.ajax({
            url:"view_student_action.php",
            type:"POST",
            data:{ostudent:1,year:year},
            success:function(data){
              $("#ostudent_output").html(data);
            }
          });
        }
         function output_astudent()
        {
           var year =$("#year").val();
          $.ajax({
            url:"view_astudent_action.php",
            type:"POST",
            data:{astudent:1,year:year},
            success:function(data){
              $("#astudent_output").html(data);
            }
          });
        }
        //on form submit? updata olevel Student
        $("#form2").on("submit",function(event) {
          event.preventDefault();
          var firstname =$("#firstname").val();
          var othername =$("#othername").val();
          var Reg_no=$("#Reg_no").val();
          var stream  =$("#form").val();
          var gender=$("#gender").val();
          var picture=$("#picture").val();
          var old_Reg_no=$("#old_Reg_no").val();
          var stud_id   =$("#stud_id").val();
          var year   =$("#year").val();
  
          var fname =$("#firstname");
          var errorf =$("#firstname_error");
          var textf  ="First";
          //other name
          var lname =$("#othername");
          var errorl =$("#othername_error");
          var textl  ="Other";
          var section =$("#Update_std").val();
          if(Name(fname,errorf,textf)==false)
          {
            return false;
          }else if(Name(lname,errorl,textl)==false)
          {
            return false;
          }else if(Validate_RegNo()==false)
          {
            return false;
          }else if(Validate_form()==false)
          {
            return false;
          }else if(Validate_gender()==false)
          {
            return false;
          }else if(Validate_image()==false)
          {
              return false;
          }else if(section=="Update_Olevel")
          {
            $.ajax({
                url:"update_student.inc.php",
                type:"POST",
                data: new FormData(this),
                contentType:false,
                processData:false,
                cache:false,
                success:function(d)
                {
                   $("#modal_output").html(d);
                   $("#myModals").modal("hide");
                    ostudent_output();
                }
              });
          }else if(section=="Update_Alevel"){
            $.ajax({
                url:"update_Astudent.inc.php",
                type:"POST",
                data: new FormData(this),
                contentType:false,
                processData:false,
                cache:false,
                success:function(d)
                {
                   $("#modal_output").html(d);
                   $("#myModals").modal("hide");
                      var year =$("#year").val();
                    $.ajax({
                      url:"view_astudent_action.php",
                      type:"POST",
                      data:{astudent:1,year:year},
                      success:function(data){
                        $("#astudent_output").html(data);
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
        $("#Reg_no").on("input",function(){
          Validate_RegNo();
        });
         $("#gender").on("blur",function(){
          Validate_gender();
        });
          $("#form").on("blur",function(){
           Validate_form();
        });
        $("#picture").on("change",function(){
           Validate_image();
        });
      });
</script>
<script type="text/javascript">
  $(document).ready(function(){
      fetch_single_student();
      Delete();
       aDelete();
   

    function fetch_single_student() {
    $(document).on("click",".update",function(){
       var idu = $(this).attr("id");
           $.ajax({
              url:"update_student.inc.php",
              type:"POST",
              data:{idu:idu},
              dataType:'json',
              success:function(data)
              {
                  $(".modal-title").html("Update Student");
                  $("#Update_std").val("Update_Olevel");
                  $("#firstname").val(data.firstname);
                  $("#othername").val(data.othername);
                  $("#username").val(data.username);
                  $("label").css("color","steelblue");
                  $("#stud_id").val(data.stud_id);
                  $("#Reg_no").val(data.Reg_no);
                  $("#old_Reg_no").val(data.Reg_no);
                  $("#myModals").modal("show");
                   
                    var c_id='class';
                  $.ajax({
                     url:"Olevel.inc.php",
                     type:"POST",
                     data:{c_id:c_id},
                     success:function(d)
                     {
                       $("#form").html(d);
                     }
                  });                
              }
           });
    });
  }

    function Delete()
    {
      $(document).on("click",".delete",function(){
          var id = $(this).attr("id");
          if(confirm("do you ready want to delete?")){
             $.ajax({
                url:"delete_student.php",
                type:"POST",
                data:{delete:id},
                success:function(data){
                    $("#modal_output").html(data);
                  
                     var year =$("#year").val();
                    $.ajax({
                      url:"view_student_action.php",
                      type:"POST",
                      data:{ostudent:1,year:year},
                      success:function(data){
                        $("#ostudent_output").html(data);
                      }
                    });
                }
              });
          }
          
      });
    }
  });
  //this is jquery site for onclick alevel student update button
          $(document).on("click",".aedit",function(){
            var id = $(this).attr("id");
                $.ajax({
                      url:"update_Astudent.inc.php",
                      type:"POST",
                      data:{id:id},
                      dataType:'json',
                      success:function(data)
                      {
                          $("#modal-title").html("A Level Student Update Form");
                          $("#Update_std").val("Update_Alevel");
                          $("#firstname").val(data.firstname);
                          $("#othername").val(data.othername);
                          $("#username").val(data.username);
                          $("label").css("color","steelblue");
                          $("#stud_id").val(data.stud_id);
                          $("#Reg_no").val(data.Reg_no);
                          $("#old_Reg_no").val(data.Reg_no);
                          $("#myModals").modal("show");
                          // aClass_Option();
                          var c_id='aclass';
                        $.ajax({
                           url:"alevel.inc.php",
                           type:"POST",
                           data:{c_id:c_id},
                           success:function(d)
                           {
                             $("#form").html(d);
                           }
                        });
                      }
                   });
          });

function aDelete()
{
  $(document).on("click",".adelete",function(){
      var id = $(this).attr("id");
      if(confirm("do you ready want to delete?")){
         $.ajax({
            url:"delete_student.php",
            type:"POST",
            data:{adelete:id},
            success:function(data){
                $("#modal_output").html(data);
                  var year =$("#year").val();
                  $.ajax({
                    url:"view_astudent_action.php",
                    type:"POST",
                    data:{astudent:1,year:year},
                    success:function(d){
                      $("#astudent_output").html(d);
                    }
                  });
            }
          });
      }
      
  });
}
$(document).ready(function(){
     $('.table').DataTable();
  });
</script>

