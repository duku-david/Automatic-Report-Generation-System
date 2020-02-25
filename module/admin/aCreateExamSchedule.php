<?php include('admin_header.php'); ?>
<div class="formheadera" >CREATE EXAM SCHEDULE
   <a href="examSchedule.php" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Back</a>
</div>
<div class="main-wrappings">
  <div id="data_result"></div>
<div class="side-wrapping">
   <div id="sub_output"></div>
<div class="side-container">
    <div class="container form2 w-100 mb-2">
        <div class="formheaderb">O LEVEL EXAM SCHEDULE FORM</div>
         <div id="output_result"></div>
          <form id="myform" method="post" action="#">
            <div id="data_result"></div>
            <div class="form-group">
               <label>Exam ID</label>
              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="id" id="id" placeholder="Exam Schedule ID" class="form-control">
              </div>
              <p id="id_error" align="center" ></p>
            </div>
            <div class="form-group">
               <label>Exam Date</label>
              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="examDate" placeholder="Exam Date(y-m-d)" id="examDate" class="form-control">
              </div>
              <p id="examDate_error" align="center"></p>
            </div>
            <div class="form-group">
            <div class="form-group">
               <label>Exam Time</label>
              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="examTime" id="examTime" placeholder="Exam Time(H:M - H:M)" class="form-control">
              </div>
              <p id="examTime_error" align="center"></p>
            </div>
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
              <button class="btn btn-warning" id="register" type="submit" name="submit">Submit<i class="glyphicon glyphicon-send"></i></button>
            </div>
       </form>
      </div> 
</div>
<div class="side-container">
        <div class="container form2 w-100 mb-2">
            <div class="formheaderb">A LEVEL EXAM SCHEDULE FORM</div>
             <div id="output_resultA"></div>
                <form id="myform" method="post" action="#">
            <div id="data_result"></div>
            <div class="form-group">
               <label>Exam ID</label>
              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="ida" id="ida" placeholder="Exam Schedule ID" class="form-control">
              </div>
              <p id="ida_error" align="center" ></p>
            </div>
            <div class="form-group">
               <label>Exam Date</label>
              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="examDateA" placeholder="Exam Date(y-m-d)" id="examDateA" class="form-control">
              </div>
              <p id="examDateA_error" align="center"></p>
            </div>
            <div class="form-group">
               <label>Exam Time</label>
              <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="examTimeA" id="examTimeA" placeholder="Exam Time(H:M - H:M)" class="form-control">
              </div>
              <p id="examTimeA_error" align="center"></p>
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
              <button class="btn btn-warning" id="register" type="submit" name="submit">Submit<i class="glyphicon glyphicon-send"></i></button>
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
              var id =$("#id");
              var id_error =$("#id_error");
             var examDate = $("#examDate");
             var examDate_error =$("#examDate_error");
             var examTime = $("#examTime");
             var examTime_error =$("#examTime_error");
             var sub_cod  = $("#sub_cod");
             var sub_cod_error =$("#sub_cod_error");
              var c_id  = $("#c_id");
              var c_id_error =$("#c_id_error");
             if (id.val().trim()=="")
             {
               id.css("border","0.5px solid red");
               id_error.html("Please Enter Exam ID").css("color","red");
               return false;
             }else if (examDate.val().trim()=="")
             {
               examDate.css("border","0.5px solid red");
               examDate_error.html("Please Enter Date For Exam").css("color","red");
               return false;
             }else if (examTime.val().trim()=="")
             {
               examTime.css("border","0.5px solid red");
               examTime.html("Please Enter Exam Time").css("color","red");
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
                id.css("border","");
                id_error.html("");
                examDate.css("border","");
                examDate_error.html("");
                examTime.css("border","");
                examTime_error.html("");
                 sub_cod.css("border","");
                sub_cod_error.html("");
                c_id.css("border","");
                c_id_error.html("");
                $.ajax({
                  url:"",
                  type:"POST",
                  data:{id:id.val(),examDate:examDateA.val(),
                    examTime:examTime.val(),
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
            //oninput id
            
            $(document).on("input","#id",function(){
                var id ='id';
                var id_error='id_error';
                if(isEmpty(id,id_error) ==false)
                {
                  return false;
                }else if(isNumber(id,id_error) ==false)
                {
                   return false;
                }
            });

             $(document).on("input","#ida",function(){
                var id ='ida';
                var id_error='ida_error';
                if(isEmpty(id,id_error) ==false)
                {
                  return false;
                }else if(isNumber(id,id_error) ==false)
                {
                   return false;
                }
            });

              $(document).on("input","#examDate",function(){
                var id ='examDate';
                var id_error='examDate_error';
                if(isEmpty(id,id_error) ==false)
                {
                  return false;
                }else if(isNaNumber(id,id_error) ==false)
                {
                   return false;
                }
            });
               $(document).on("input","#examDateA",function(){
                var id ='examDateA';
                var id_error='examDateA_error';
                if(isEmpty(id,id_error) ==false)
                {
                  return false;
                }else if(isNaNumber(id,id_error) ==false)
                {
                   return false;
                }
            });
           
            $(document).on("input","#examTime",function(){
                var id ='examTime';
                var id_error='examTime_error';
                if(isEmpty(id,id_error) ==false)
                {
                  return false;
                }else if(isNaNumber(id,id_error) ==false)
                {
                   return false;
                }
            });
               $(document).on("input","#examTimeA",function(){
                var id ='examDateA';
                var id_error='examTimeA_error';
                if(isEmpty(id,id_error) ==false)
                {
                  return false;
                }else if(isNaNumber(id,id_error) ==false)
                {
                   return false;
                }
            });

            function isEmpty(firstV,secondV)
            {
               var firstVa =$("#"+firstV);
               var secondVa =$("#"+secondV);

               if(firstVa.val().trim()=="")
               {
                  firstVa.css("border","0.5px solid red");
                  secondVa.html(firstV+" is Required").css("color","red");
                  return false; 
               }else
               {
                   firstVa.css("border","0.5px solid green");
                  secondVa.html("");
                  return true;
               }  
            }
            function isNumber(firstV,secondV)
            {
               var id =$("#"+firstV);
               var id_error =$("#"+secondV);
              if(isNaN(id.val().trim()))
               {
                  id.css("border","0.5px solid red");
                  id_error.html("Only number is Required").css("color","red");
                  return false; 
               }else
               {
                    id.css("border","0.5px solid green");
                    id_error.html("");
                    return true;
               }
            }

            function IsNaNumber(firstV,secondV)
            {
                var id =$("#"+firstV);
               var id_error =$("#"+secondV);
              if(!isNaN(id.val().trim()))
               {
                  id.css("border","0.5px solid red");
                  id_error.html("Only Character is Required").css("color","red");
                  return false; 
               }else
               {
                    id.css("border","0.5px solid green");
                    id_error.html("");
                    return true;
               }
            }

             

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
             var id = $("#ida");
             var id_error =$("#ida_error");
              var examDateA  = $("#examDateA");
             var examDateA_error =$("#examDateA_error");
             var examTimeA  = $("#examTimeA");
             var examTimeA_error =$("#examTimeA_error");
             var sub_cod  = $("#sub_coda");
             var sub_cod_error =$("#sub_coda_error");
              var c_id  = $("#c_ida");
              var c_id_error =$("#c_ida_error");
             if (id.val().trim()=="")
             {
               id.css("border","0.5px solid red");
               id_error.html("Please Enter Exam ID").css("color","red");
               return false;
             }else if (examDateA.val().trim()=="")
             {
               examDateA.css("border","0.5px solid red");
               examDateA_error.html("Please Enter Exam ID").css("color","red");
               return false;
             }else if (examTimeA.val().trim()=="")
             {
               examTimeA.css("border","0.5px solid red");
               examTimeA_error.html("Please Enter Exam ID").css("color","red");
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
                id.css("border","");
                id_error.html("");
                examDateA.css("border","");
                examDateA_error.html("");
                examTimeA.css("border","");
                examTimeA_error.html("");
                 sub_cod.css("border","");
                sub_cod_error.html("");
                c_id.css("border","");
                c_id_error.html("");
                $.ajax({
                  url:"",
                  type:"POST",
                  data:{id:id.val(),examDateA:examDateA.val(),
                    examTimeA:examTimeA.val(),
                    sub_cod:sub_cod.val(),
                    c_id:c_id.val()
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
<?php
include_once('../../service/connection.php');
if(!empty($_POST['submit']))
{
    $id = $_POST['id'];
    $examDate = $_POST['examDate'];
    $examTime = $_POST['examTime'];
    $sub_cod = $_POST['sub_cod'];
    $sql = "INSERT INTO examschedule VALUES('".$id."','".$examDate."','".$examTime."','".$sub_cod."')";
    // $success = mysqli_query($conn,$sql);
    if(!$success) {
        die('Could not enter data: '.mysqli_error($conn));
    }
    echo "Entered data successfully\n";
}
?>
