
   
      <?php include('staff_header.php'); ?>
<?php include'../../service/connection.php'; ?>
<div class="formheadera" >Select Class and Subjects</div>
<div class="main-wrappings">
<div class="side-wrapping">
   <div id="sub_output"></div>
<div class="side-container">
    <div class="container form2">
      <div id="data_result"></div>
        <div class="formheaderb">O LEVEL</div>
          <form class="oform" id="Oform" method="post" action="omarksheet.php">
              <div class="form-group">
                 <label>Subject</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <select  name="subject" id="subject" class="form-control">
                            <option value="000">Select Subject</option>

                            <?php
            
                $sql ="SELECT * FROM osubject WHERE sub_cod IN (SELECT sub_cod FROM subjecttakenbyteacher WHERE initials='".$_SESSION['initials']."')";
                $result =mysqli_query($conn,$sql);
                
                      while($row =mysqli_fetch_assoc($result)){
            ?>    
                      <option value="<?php echo $row['sub_cod'];?>"><?php echo $row['name'];?></option>
                       <?php } ?>
                      </select>
                  </div>
                   <p id="subject_error" align="center"></p>
              </div>
              <div class="form-group">
                 <label>Form/Class Stream</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <?php 
                     $sqlc ="SELECT * FROM class WHERE c_id IN (SELECT c_id FROM subjecttakenbyteacher WHERE initials='".$_SESSION['initials']."')";
                     $res =mysqli_query($conn,$sqlc);

                  ?>
                      <select  name="stream" id="stream" class="form-control">
                        <option value="000">Select Class</option>
                        <?php 
                            while ($row =mysqli_fetch_assoc($res)) {
                              echo'<option value="'.$row['c_id'].'">Senior '.$row['c_name'].' '.$row['stream'].'</option>';
                            }
                        ?>
                      </select>
                  </div>
                  <p id="form_error" align="center"></p>
              </div>
              <div class="form-group">
                 <label>Teachers Initials</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="initials" id="initials" value="<?php $_SESSION['initials']?>" class="form-control">
                </div>
                 <input type="hidden" name="username" id="username" value="<?php echo $_SESSION['username'];?>" class="form-control" >
                <p id="initial_error" align="center"></p>
            </div>
            <div class="button-group">
                <button class="btn btn-warning" type="submit" name="omarksheet" value="omarksheet">Open Mark Sheet<i class="glyphicon glyphiconon-userhicon-send"></i></button>
           </div>
        </form> 
      </div> 
</div>
<div class="side-container">
        <div class="container form2">
          <div id="data_aresult"></div>
            <div class="formheaderb">A LEVEL</div>
            <form id="Aform" method="post" action="Amarksheet.php">

              <div class="form-group">
                 <label>Subject</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <?php 
                        $sql = "SELECT * FROM `asubject` WHERE sub_cod IN (SELECT sub_cod FROM asubjecttakenbyteacher WHERE initials='".$_SESSION['initials']."') GROUP BY name";
                        $result=mysqli_query($conn,$sql);
                  ?>
                      <select  name="subjecta" id="subjecta" class="form-control">
                        <option value="000" >Select Subject</option>
                        <?php
                           while($row=mysqli_fetch_assoc($result)){   
                        ?>
              <option value="<?php echo $row['sub_cod'];?>" ><?php echo $row['name']?></option>
                      <?php } ?>   
                      </select>
                  </div>
                  <p id="subjecta_error" align="center"></p>
              </div>
              <div class="form-group">
                 <label>Form/Class Stream</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <?php 
                        $sqlc = "SELECT * FROM `class` WHERE c_id IN (SELECT c_id FROM asubjecttakenbyteacher WHERE initials='".$_SESSION['initials']."')";
                        $resultc=mysqli_query($conn,$sqlc);
                  ?>
                      <select  name="forma" id="forma" class="form-control">
                            <option value="000">Select Class</option>
                           <?php
                           while($row=mysqli_fetch_assoc($resultc)){   
                        ?>
              <option value="<?php echo $row['c_id'];?>" >Senior <?php echo $row['c_name']?> <?php echo $row['stream']?></option>
                      <?php } ?> 
                          
                      </select>
                  </div>
                  <p id="forma_error" align="center"></p>
              </div>
              <div class="form-group">
                 <label>Teachers Initials</label>
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="initiala" id="initiala" class="form-control" >
                  <input type="hidden" name="username" id="username" value="<?php echo $_SESSION['username'];?>" class="form-control" >
                </div>
                <p id="initiala_error" align="center"></p>
            </div>
            <div class="button-group">
                <button class="btn btn-warning" type="submit" name="Amarksheet" value="Amarksheet">Open Mark Sheet<i class="glyphicon glyphiconon-userhicon-send"></i></button>
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

      $(document).on("blur","#subject",function(){
         var subject = $("#subject");
         var subject_e =$("#subject_error");
         subjects(subject,subject_e);
    });

    $(document).on("blur","#stream",function(){
          var stream = $("#stream");
          var stream_e =$("#form_error");
          form(stream,stream_e);
    });
    $(document).on("input","#initials",function(){
          var initial=$("#initials");
          var initial_e=$("#initial_error");
          initials(initial,initial_e);


    });
    
    $(document).on("blur","#subjecta",function(){
         var subject = $("#subjecta");
         var subject_e =$("#subjecta_error");
         subjects(subject,subject_e);
    });
    $(document).on("blur","#forma",function(){
          var form = $("#forma");
          var form_e =$("#forma_error");
          if(form.val()=="000")
       {
          form.css("border","0.5px solid red");
          form_e.html("please select Class").css("color","red");
          return false;
       }else{
            form.css("border"," 0.5px solid green");
            form_e.html("");
            return true;
            }
    });
    $(document).on("input","#initiala",function(){
          var initial=$("#initiala");
          var initial_e=$("#initiala_error");
          initials(initial,initial_e);
          

    });

      $(document).on("submit","#Oform",function(e){
           e.preventDefault();
            var subject = $("#subject");
            var subject_e =$("#subject_error");
            var stream = $("#stream");
            var stream_e =$("#form_error");
            var initial=$("#initials");
            var initial_e=$("#initial_error");
              if(subject.val()=="000"){
                subject.css("border","0.5px solid red");
                subject_e.html("please Select Subject").css("color","red");
                return false;
              } else if(stream.val()=="000"){
                stream.css("border","0.5px solid red");
                stream_e.html("please Select Class").css("color","red");
                return false;
              }else if(initial.val()==""){
                initial.css("border","0.5px solid red");
                initial_e.html("please enter Initials").css("color","red");
                return false;
              }else
              {  
                var subject = $("#subject").val();
                var stream = $("#stream").val();
                var initial=$("#initials").val();
                var username=$("#username").val();
                 $.ajax({
                    url:"omarksheet.php",
                    type:"POST",
                    data:{
                      subject:subject,
                      stream:stream,
                      initials:initial,
                      username:username
                    },
                    success:function(d){
                        $("#data_result").html(d);
                     
                    }
                 });
              }

      });
     
      $(document).on("submit","#Aform",function(e){
           e.preventDefault();
            var subjecta = $("#subjecta");
            var subjecta_e =$("#subjecta_error");
            var forma = $("#forma");
            var forma_e =$("#forma_error");
            var initiala=$("#initiala");
            var initiala_e=$("#initiala_error");
            var username =$("#username").val();
              if(subjecta.val()=="000"){
                subjecta.css("border","0.5px solid red");
                subjecta_e.html("please Select Subject").css("color","red");
                return false;
              } else if(forma.val()=="000"){
                forma.css("border","0.5px solid red");
                forma_e.html("please Select Class").css("color","red");
                return false;
              }else if(initiala.val()==""){
                initiala.css("border","0.5px solid red");
                initiala_e.html("please enter Initials").css("color","red");
                return false;
              }else
              {  
                var subjecta = $("#subjecta").val();
                var forma = $("#forma").val();
                var initiala=$("#initiala").val();
                 $.ajax({
                    url:"Amarksheet.php",
                    type:"POST",
                    data:{
                      subjecta:subjecta,
                      forma:forma,
                      initiala:initiala,
                      username:username
                    },
                    success:function(d){
                        $("#data_aresult").html(d);
                     
                    }
                 });
              }

      });
  });

  
   
    </script>
