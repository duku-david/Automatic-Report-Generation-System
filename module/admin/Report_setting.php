
<?php include('admin_header.php');?>

           <div class="formheadera" ></div>
           
           <div class="main-wrappings">
              <div class="container form1">
                <div class="formheadera" >Report Setting</div>
                <form method="post" id="form_RS" action="Report_setting_action.php" enctype="multipart/form-data">

                  <?php $sql="SELECT * FROM term WHERE term_id='".$_SESSION['term_id']."'";
                  $res=mysqli_query($conn,$sql);
                  $row = mysqli_fetch_assoc($res);
                  ?>
                  
                <p style="margin-top: 10px; margin-bottom: 10px;margin-left: 20px; font-size: 20px;">Next Term Begins On <span style="text-align: center; color:green; margin-left: 20px;"><?php echo $row['start_date'];?></span></p>

              <div id="date_output"></div>
                                      
                  <div class="form-group"> 
                     <label>Set Or Update Date</label>
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="date" name="date" id="date" placeholder="mm/dd/yyyy" class="form-control">
                    </div>
                    <p id="date_error" align="center"></p>
                  </div>
                  <input type="hidden" name="term_id" id="term_id" value="<?php echo $_SESSION['term_id']?>">
                  <div class="button-group">
                    <button class="btn btn-warning" type="submit" name="save_setting">save setting<i class="glyphicon glyphicon-send"></i></button>
                  </div>
                  
                  
                </form>
         
  </div>
     
     <script type="text/javascript" src="javascript/validate_input.js">
        
    </script>

   
<?php include('../../footer.php');?>

<script type="text/javascript">
     $(document).ready(function(){
        $("#form_RS").on("submit",function(e){
            e.preventDefault();
            var term_id =$("#term_id").val();
            var date    =$("#date").val();
            if(V_date()==false)
            {
              return false;
            }else
            {
                $.ajax({
                  url:"Report_setting_action.php",
                  type:"POST",
                  data:{
                    save_setting:1,
                    date:date,
                    term_id:term_id
                  },
                  success:function(data)
                  {
                      $("#date_output").html(data);
                  }
            });
            }
           
        });
     });
    $("#date").on("input",function(){
       V_date();
    });
    function V_date()
    {
        var date   = $("#date");
        var date_e =$("#date_error");
          // check if the picture field is empty
          if(date.val()=="")
          {
            date.css("border","0.5px solid red");
              date_e.html("please select Date").css("color","red");
          return false;
           }else{
                date.css("border","0.5px solid green");
                date_e.html("").css("color","");
                return true;
              }
    }
</script>






