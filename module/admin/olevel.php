
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
                 <div class="formheader">O Level Form</div>
                <form id="form2" method="post" action="Olevel.inc.php" enctype="multipart/form-data">
                  
                  <div id="output"></div>
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
                     <label>Form/Class Stream</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                      <select name ="form" id="form" class="form-control">
                            
                      </select>
                    </div>
                    <p id="form_error" align="center" ></p>
                  </div>
                  
                  <div class="form-group">
                     <label>Reg No</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" name="Reg_no" id="Reg_no" placeholder="Registration Number" class="form-control" readonly>
                    </div>
                    <p id="Reg_no_error" align="center"></p>
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
                        <p id="picture_error" align="center">(Only jpg,jpeg,png,jif image format allowed!)</p> 
                      <input type="hidden" name="year" id="year" value="<?php echo $_SESSION['year']?>">

                    </div>
                  <div class="button-group">
                    <button class="btn btn-warning" type="submit" id="register" name="register">Register<i class="glyphicon glyphicon-send"></i></button>
                  </div>
                  
                  
                </form>
                
          </div>
     </div>


     <script type="text/javascript" src="javascript/OAlevel_validate.js">
        
    </script>
    <!--  <script type="text/javascript" src="javascript/validate_input.js">
        
    </script> -->
    <script type="text/javascript">
      $(document).ready(function(){
        $("#form2").on("submit",function(event) {
          event.preventDefault();

          var firstname =$("#firstname").val();
          var othername =$("#othername").val();
          var Reg_no=$("#Reg_no").val();
          var form  =$("#form").val();
          var gender=$("#gender").val();
          var form_data=new FormData(this);
          var year   =$("#year").val();
          var register="register";

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
               url:"Olevel.inc.php",
               type:"post",
               data:form_data,
               cache: false,
               contentType: false,
               processData: false,
               success:function(data){
                $("#form2")[0].reset();
               $("#output").html(data);
               $("#firstname").css("border","");
               $("#othername").css("border","");
               $("#Reg_no").css("border","");
               $("#gender").css("border","");
               $("#form").css("border","");
               $("#picture").css("border","");
               }
            });
          }
        });
        Class_Option();
        function Class_Option()
        {
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
        $(document).on("change","#form",function(){
          var c_id =$(this).val();
           $.ajax({
            url:"regNo.php",
            type:"post",
            data:{reg_no:1,c_id:c_id},
            success:function(d)
            {
                $("#Reg_no").val(d); 
            }
           });
           
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
    
     
<?php include('../../footer.php');?>

