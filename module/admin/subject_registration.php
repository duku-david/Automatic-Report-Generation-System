<?php include('admin_header.php'); ?>
<div class="formheadera" >Teacher's Subject Registration</div>
<div class="main-wrappings">
  <div id="data_result"></div>
<div class="side-wrapping" style="margin-bottom: 20px;">
   <div id="sub_output"></div>
<div class="side-container">
    <div class="container form2 w-100 mb-2">
        <div class="formheaderb">O LEVEL SUBJECT REGISTRATION</div>
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
                $sql ="SELECT * FROM osubject ORDER BY name";
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
                 <label>Class Stream</label>
                <div class="input-group con"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <select name="c_id" id="c_id"  class="form-control"> 
                     
                  </select>
                  </div>
                    <p id="c_id_error" align="center"></p>
              </div>
                  <div class="button-group">
                    <input type="hidden"  id="year" name="year" value="<?php echo $_SESSION['year']?>">
                    <button class="btn btn-warning" type="submit" name="save">Register<i class="glyphicon glyphicon-send"></i></button>
                  </div>
                </form>
      </div> 
</div>
<div class="side-container">
        <div class="container form2 w-100 mb-2">
            <div class="formheaderb">A LEVEL SUBJECT REGISTRATION</div>
             <div id="output_resultA"></div>
                <form id="myformA" method="POST" action="subject.inc.php" enctype="multipart/form-data">
                  <div class="form-group">
                     <label>Teacher Full name</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                       <select name="initialsa" id="initialsa"  class="form-control"> 
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
                    <p id="initialsa_error" align="center" ></p>
                  </div>
             <div class="form-group">
                 <label>Subject</label>
                <div class="input-group con"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <select name="sub_coda" id="sub_coda"  class="form-control"> 
                      <option value="000">Select Subject</option>
                  <?php
                $sql ="SELECT * FROM asubject ORDER BY name";
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
                    <p id="sub_coda_error" align="center"></p>
              </div>
              <div class="form-group">
                 <label>Class Stream</label>
                <div class="input-group con"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <select name="c_ida" id="c_ida"  class="form-control"> 
                  
                  </select>
                  </div>
                    <p id="c_ida_error" align="center"></p>
              </div>
                  <div class="button-group">
                    <input type="hidden"  id="year" name="year" value="<?php echo $_SESSION['year']?>">
                    <button class="btn btn-warning" type="submit" name="save">Register<i class="glyphicon glyphicon-send"></i></button>
                  </div>
                </form>
            
        </div>
     </div>
</div>
</dv>


<script type="text/javascript" src="javascript/Class_Sld_Valids.js">

</script>


<?php include('../../footer.php');?>
 <script type="text/javascript">
          $(document).ready(function(){
            $(document).on("submit","#myform",function(e){
              e.preventDefault();
             var initials = $("#initials");
             var initials_error =$("#initials_error");
             var sub_cod  = $("#sub_cod");
             var sub_cod_error =$("#sub_cod_error");
              var c_id  = $("#c_id");
              var year  =$("#year");
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
                    c_id:c_id.val(),
                    year:year.val()
                  },
                  success:function(d)
                  {
                    $("#output_result").html(d);
                  }
                });
                
             }
              
            });
          //display class option
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
               $("#c_id").html(d);
             }
          });
        }
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





<script type="text/javascript">
          $(document).ready(function(){
            $(document).on("submit","#myformA",function(e){
              e.preventDefault();
             var initials = $("#initialsa");
             var initials_error =$("#initialsa_error");
             var sub_cod  = $("#sub_coda");
             var sub_cod_error =$("#sub_coda_error");
              var c_id  = $("#c_ida");
              var year  =$("#year").val()
              var c_id_error =$("#c_ida_error");
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
                  url:"Asubject.inc.php",
                  type:"POST",
                  data:{initials:initials.val(),
                    sub_cod:sub_cod.val(),
                    c_id:c_id.val(),
                    year:year
                  },
                  success:function(d)
                  {
                    $("#output_resultA").html(d);
                  }
                });
                
             }
              
            });
            //on blur teacher full name
            $(document).on("blur","#initialsa",function(){
                 var initials = $("#initialsa");
                 var initials_error =$("#initialsa_error");
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
            $(document).on("blur","#sub_coda",function(){
                 var sub_coda  = $("#sub_coda");
                 var sub_coda_error =$("#sub_coda_error");
             if(sub_coda.val().trim()=="000")
             {
                sub_coda.css("border","0.5px solid red");
                sub_coda_error.html("Please Select Subject").css("color","red");
                return false; 
             }else
             {
                 sub_coda.css("border","0.5px solid green");
                sub_coda_error.html("");
                return true;
             }
            });

             //on blur subject class
            $(document).on("blur","#c_ida",function(){
                 var c_ida  = $("#c_ida");
                 var c_ida_error =$("#c_ida_error");
             if(c_ida.val().trim()=="000")
             {
                c_ida.css("border","0.5px solid red");
                c_ida_error.html("Please Select Class").css("color","red");
                return false; 
             }else
             {
                 c_ida.css("border","0.5px solid green");
                c_ida_error.html("");
                return true;
             }
            });
            
          });
  
       
        $(document).on("change","#sub_coda",function(){
          var sub_cod = $("#sub_coda").val();
            fetch="fetch";
           $.ajax({
             url:"Asubject.inc.php",
             type:"POST",
             data:{fetch:fetch,
                 sub_cod:sub_cod
             },
             success:function(d)
             {
               $("#c_ida").html(d);
               // alert(d);
             }
           });
        });

    </script>
