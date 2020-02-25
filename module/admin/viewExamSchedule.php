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
                 <label>Date</label>
                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="date" id="date" class="form-control">
                 </div>
                 <p id="date_error" align="center"></p>
            </div>
            <div class="form-group">
                 <label>Time</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="time" id="time" class="form-control">
                </div>
                <p id="time_error" align="center"></p>
            </div>
             <div class="form-group">
                 <label>Subject</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <select  name="subject" id="subject" class="form-control">
                            <?php
            
                $sql ="SELECT * FROM osubject";
                $result =mysqli_query($conn,$sql);
                
                      while($row =mysqli_fetch_assoc($result)){
            ?>    
                      <option selected="" value="<?php echo $row['sub_cod'];?>"><?php echo $row['name'];?></option>
                       <?php } ?>
                      </select>
                  </div>
                   <p id="subject_error" align="center"></p>
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

      
<div class="formheadera">Examination Time Table <a href="examSchedule.php" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Back</a> </div>
<div class="main-wrappings">
   <div id="modal_output"></div>
  <h2> O Level Examination Time Table</h2>
     <div id="viewExamSchedule"></div>

  <h2>A Level Examination Time Table</h2>
  
</div>           
<?php include('../../footer.php');?>
 <script type="text/javascript" src="../../style/javascript/OAlevel_validate.js">
        
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
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
              viewExamOutput();
           }
         viewExamOutput();
         function viewExamOutput()
        {
          $.ajax({
            url:"viewExamSchedule.inc.php",
            type:"POST",
            data:{exam:1},
            success:function(data){
              $("#viewExamSchedule").html(data);
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
          }else
          {
            $.ajax({
                url:"",
                type:"POST",
                success:function(d)
                {
                   $("#modal_output").html(d);
                   $("#myModals").modal("hide");
                   
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
      singleExam();
      Delete();
       aDelete();
   

    function singleExam() {
    $(document).on("click",".update",function(){
       var id = $(this).attr("id");
           $.ajax({
              url:"examScheduleUpdate.php",
              type:"POST",
              data:{single:1,id:id},
              dataType:"json",
              success:function(data)
              {
                  $(".modal-title").html("Update Examination");
                  $("#Update_std").val("Update_Olevel");
                  $("#date").val(data.date);
                  $("#time").val(data.time);
                  // $("#sub_cod").val(data.name);
                  $("label").css("color","steelblue");
                  $("#myModals").modal("show");
                   
                  //   var c_id='class';
                  // $.ajax({
                  //    url:"Olevel.inc.php",
                  //    type:"POST",
                  //    data:{c_id:c_id},
                  //    success:function(d)
                  //    {
                  //      $("#form").html(d);
                  //    }
                  // });                
              },
              error:function(d)
              {
                alert(d);
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
                url:"deleteTimeTable.php",
                type:"POST",
                data:{delete:id},
                success:function(data){
                    $("#modal_output").html(data);
                    $.ajax({
                      url:"viewExamSchedule.inc.php",
                      type:"POST",
                      data:{exam:1},
                      success:function(data){
                        $("#viewExamSchedule").html(data);
                      }
                    });
                }
              });
          }
          
      });
    }
  });
  
$(document).ready(function(){
     $('.table').DataTable();
  });
</script>

