<!-- The Modal -->
<div class="modal fade" id="myModalsa" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="modal-titlea"></h4>
        <div id="output"></div>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="modal-bodya">

        <form id="form2a" method="post" enctype="multipart/form-data">

            <div class="form-group">
                 <label>First Name</label>
                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="firstname" id="firstnamea" class="form-control">
                 </div>
                 <p id="firstname_error" align="center"></p>
            </div>
            <div class="form-group">
                 <label>Other Name</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="othername" id="othernamea" class="form-control">
                </div>
                <p id="othername_error" align="center"></p>
            </div>
            <div class="form-group">
                 <label>Registration</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="Reg_no" id="Reg_noa" class="form-control">
                </div>
                <p id="Reg_no_error" align="center"></p>
            </div>
            <div class="form-group">
                     <label>Form</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <select name ="stream" id="form" class="form-control">
                             <option value="000">Select class</option>
                            <option value="S 5 Art">Senior five art</option>
                            <option value="S 5 Science ">Senior five science</option>
                            <option value="S 6 Art">Senior six art</option>
                            <option value="S 6 Science">Senior six science</option>
                          
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
      <div class="modal-footer" id="modal-footera">
          <input type="hidden" name="stud_id" id="stud_ida">
          <input type="hidden" name="old_Reg_no"  id="old_Reg_noa">
         <button type="submit" class="btn btn-info" id="Update_stda" name="Update_stda">Update</button>
        <button type="button" class="btn btn-defualt" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script >
   $(document).ready(function() {
      $(document).on("submit","form2a",function(e){
      e.preventDefualt();
      alert("d");
    });
   });
</script>
