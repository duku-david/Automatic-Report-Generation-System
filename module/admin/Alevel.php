
<?php include('admin_header.php'); ?>
   <style type="text/css">
  .conn
  {
    width: 450px;
    border: 1px solid #ccc;
    background: #ECECFA;
    border-radius: 10px;
  width: 450px;
  border: 1px solid #ccc;
  border-radius: 10px;

  background-color: #ECECFA;
  margin-bottom: 20px;
  }
  label
  {
    color:steelblue;
  }
</style>
          <div class="formheadera" >Students Registration Form</div>
          <div class="main-wrappings">
           
              <div class="container conn">
                 <div class="formheader">A Level Form</div>
                <form id="myform" method="post" action="Alevel.inc.php" enctype="multipart/form-data">
                  <?php global $msg; echo $msg; ?>
                  <div id="data_result"></div>
                  <div class="form-group">
                     <label>First Name</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" name="firstname" id="firstname" placeholder="First Name" class="form-control">
                    </div>
                    <p id="firstname_error" align="center" ></p>
                  </div>
                  <div class="form-group">
                     <label>Other Name</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" name="othername" id="othername" placeholder="Other Name" class="form-control">
                    </div>
                    <p id="othername_error" align="center"></p>
                  </div>
                  <div class="form-group">
                     <label>Reg No</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" name="Reg_no" id="Reg_no" placeholder="Registration Number" class="form-control" readonly>
                    </div>
                    <p id="Reg_no_error" align="center"></p>
                  </div>
                   <div class="form-group">
                     <label>Combination</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <select name ="comb" id="comb" onblur="Validate_comb()" class="form-control">
                            <option value="000">Select Combination</option>
                            <option value="PEM/ICT">PEM/ICT</option>
                             <option value="MEG/ICT">MEG/ICT</option>
                            <option value="PCM/ICT">PCM/ICT</option>
                            <option value="BCM/ICT">BCM/ICT</option>
                            <option value="DEG/SUB_MATHS">DEG/SUB MATHS</option>
                            <option value="HED/SUB_MATHS">HED/SUB MATHS</option>
                            <option value="HEG/SUB_MATHS">HEG/SUB MATHS</option>
                            <option value="BAG/ICT">BAG/ICT</option>
                          
                          </select>
                    </div>
                    <p id="comb_error" align="center"></p>
                  </div>

                  <div class="form-group">
                     <label>Form/Class Stream</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <select name ="form" id="form" class="form-control">
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
                    <input type="hidden" name="year" value="<?php echo $_SESSION['year']?>">
                    <input type="hidden" name="term_id" value="<?php echo $_SESSION['term_id']?>">
                  </div>

                 <div>     
                              <label> Select Your Picture</label><br>
                              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                                <input type="file" name="picture" id="picture" accept="image/"  class="form-control">
                               </div>
                              <p id="picture_error" align="center" >(Only jpg,jpeg,png,jif image format allowed!)</p> 

                    </div>
                  <div class="button-group">
                    <button class="btn btn-warning" id="register" type="submit" name="register">Register<i class="glyphicon glyphicon-send"></i></button>
                  </div>
                  
                  
                </form>
                
          </div>
      </div>
    <script type="text/javascript" src="javascript/OAlevel_validate.js"></script>
    <script type="text/javascript">
       $(document).ready(function(){
        $("#myform").submit(function(event) {
          event.preventDefault();
          if(Validate()==false)
          {
            return false;
          }else if(Validate_comb()==false){
            return false;
          }else{
              $.ajax({
                 url:"Alevel.inc.php",
                 type:"POST",
                 data: new FormData(this),
                 contentType:false,
                 processData:false,
                 cache:false,
                 success:function(d){
                   $("#data_result").html(d);
                 }
              });
          }

        })
        
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
        Class_Option();
       function Class_Option()
        {
           var c_id='class';
          $.ajax({
             url:"Alevel.inc.php",
             type:"POST",
             data:{c_id:c_id},
             success:function(d)
             {
               $("#form").html(d);
             }
          });
        }

         $(document).on("change","#form",function(){
          var c_id =$(this).val();
           $.ajax({
            url:"regNo.php",
            type:"post",
            data:{areg_no:1,c_id:c_id},
            success:function(d)
            {
                $("#Reg_no").val(d);
            }
           });
           
        });
    </script>


     
<?php include('../../footer.php');?>



















