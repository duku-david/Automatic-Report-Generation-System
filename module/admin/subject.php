<?php include('admin_header.php'); ?>
      <style type="text/css">
      	.con input{
      		margin: 2px;
 
      		padding: 1px;
      	}
      </style>  
<div class="formheadera" ><a href="OAsubject.php" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Back</a>
  Teacher's Subject Registeration
</div>
<div class="main-wrappings">

  
  <div class="container form1 con" >
                 <div class="formheader">O Level Subject</div>
                 <div id="output_result"></div>
                <form id="myform" method="POST" action="subject.inc.php" enctype="multipart/form-data">
                  <div class="form-group">
                     <label>Teacher Full name</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                       <select name="initials" id="initials"  class="form-control"> 
                      <option value="000">Select teacher</option>
                  <?php
                $sqls ="SELECT * FROM teacher ORDER BY firstname";
                $results =mysqli_query($conn,$sqls) or die(mysqli_error($conn));
                
                      while($row =mysqli_fetch_assoc($results)){
                   
            ?>
                           
                            <option value="<?php echo $row['initials'];?>"><?php echo $row['firstname'];?> <?php echo $row['othername'];?></option>
                            <?php 
                          }
                          ?> 
                      </select>
                    </div>
                    <p id="initials_error" align="center" ></p>
                  </div>
             <div class="form-group">
                 <label>Subject</label>
                <div class="input-group con"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <select name="sub_cod" id="sub_cod"  class="form-control"> 
                      <option value="000">Select Subject</option>
                  <?php
                $sql ="SELECT * FROM osubject";
                $result =mysqli_query($conn,$sql);
              
                   while($row =mysqli_fetch_assoc($result))
                  {   
            ?>    
                 <option value="<?php echo $row['sub_cod'];?>"><?php echo $row['name'];?></option>
		            <?php 
		          }
		          ?> 
                  </select>
                  </div>
                    <p id="sub_cod_error" align="center"></p>
              </div>
              <div class="form-group">
                 <label>Class</label>
                <div class="input-group con"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <select name="c_id" id="c_id"  class="form-control"> 
                      <option value="000">Select Class</option>
                  <?php
                $sql ="SELECT * FROM class";
                $result =mysqli_query($conn,$sql);
              
                   while($row =mysqli_fetch_assoc($result))
                  {   
            ?>    
                 <option value="<?php echo $row['c_id'];?>"><?php echo $row['c_id'];?></option>
                <?php 
              }
              ?> 
                  </select>
                  </div>
                    <p id="c_id_error" align="center"></p>
              </div>
                  <div class="button-group">
                    <button class="btn btn-warning" type="submit" name="save">Register<i class="glyphicon glyphicon-send"></i></button>
                  </div>
                </form>
                
          </div>
      </div>
        <script type="text/javascript">
          $(document).ready(function(){
            $(document).on("submit","#myform",function(e){
              e.preventDefault();
             var initials = $("#initials");
             var initials_error =$("#initials_error");
             var sub_cod  = $("#sub_cod");
             var sub_cod_error =$("#sub_cod_error");
              var c_id  = $("#c_id");
              var c_id_error =$("#c_id_error");
             if (initials.val().trim()=="000")
             {
               initials.css("border","0.5px solid red");
               initials_error.html("Please Select Teacher").css("color","red");
               return false;
             }else if(sub_cod.val().trim()=="000")
             {
                sub_cod.css("border","0.5px solid red");
                sub_cod_error.html("Please Select Subject").css("color","red");
                return false; 
             }else if(c_id.val().trim()=="000")
             {
                c_id.css("border","0.5px solid red");
                c_id_error.html("Please Select Class").css("color","red");
                return false; 
             }else 
             {
                initials.css("border","");
                initials_error.html("");
                 sub_cod.css("border","");
                sub_cod_error.html("");
                c_id.css("border","");
                c_id_error.html("");
                $.ajax({
                  url:"subject.inc.php",
                  type:"POST",
                  data:{initials:initials.val(),
                    sub_cod:sub_cod.val(),
                    c_id:c_id.val()
                  },
                  success:function(d)
                  {
                    $("#output_result").html(d);
                  }
                });
                
             }
              
            });
            //on blur teacher full name
            $(document).on("blur","#initials",function(){
                 var initials = $("#initials");
                 var initials_error =$("#initials_error");
                  if (initials.val().trim()=="000")
             {
               initials.css("border","0.5px solid red");
               initials_error.html("Please Select Teacher").css("color","red");
               return false;
             }else
             {
                initials.css("border","0.5px solid green");
                initials_error.html("");
                return true;
             }

            });
            //on blur subject code
            $(document).on("blur","#sub_cod",function(){
                 var sub_cod  = $("#sub_cod");
                 var sub_cod_error =$("#sub_cod_error");
             if(sub_cod.val().trim()=="000")
             {
                sub_cod.css("border","0.5px solid red");
                sub_cod_error.html("Please Select Subject").css("color","red");
                return false; 
             }else
             {
                 sub_cod.css("border","0.5px solid green");
                sub_cod_error.html("");
                return true;
             }
            });

             //on blur subject class
            $(document).on("blur","#c_id",function(){
                 var c_id  = $("#c_id");
                 var c_id_error =$("#c_id_error");
             if(c_id.val().trim()=="000")
             {
                c_id.css("border","0.5px solid red");
                c_id_error.html("Please Select Class").css("color","red");
                return false; 
             }else
             {
                 c_id.css("border","0.5px solid green");
                c_id_error.html("");
                return true;
             }
            });
            
          });
        </script> 
<?php include('../../footer.php');?>
<script type="text/javascript">
  
</script>