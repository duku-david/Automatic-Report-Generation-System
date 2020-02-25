<?php include('admin_header.php');?>
<?php include('grade_action.php');?>
    
           <?php
           include('../../service/connection.php');
         $initials =$_SESSION['initials'];
         $c_id     =$_SESSION['c_id'];
        $subject   =$_SESSION['subject'];    

       $queryt = "SELECT name FROM osubject WHERE sub_cod IN(SELECT sub_cod FROM subjecttakenbyteacher WHERE initials='".$initials."' AND c_id='".$c_id."' AND sub_cod='".$subject."')";
                 $run    =mysqli_query($conn,$queryt);
                 $result = mysqli_fetch_array($run);
           ?>
          <div class="formheadera"><div style="display: inline-block;">Mark Sheet for <?php echo($result['name']);?>  <?php echo $c_id;?></div>
            <a href="index.php" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Back</a>
          </div>  
            <div class="main-wrappings">
              <div id="Result" align="center"></div>
              <div id="Tbl_Result" align="center"></div>
            
 <?php 
   
?>
      </div>
    </div>
</div>
<script type="text/javascript" src="javascript/update_valid.js"></script>
<?php include('../../footer.php');?>
<script type="text/javascript">
  $(document).ready(function(){

    fetch_table();
    function fetch_table()
    {
        var table_result="table_result";
        $.ajax({
            url:"../admin/update_marks.php",
            type:"POST",
            data:{table_result:table_result},
            success:function(d)
            {
              $("#Tbl_Result").html(d);
            }
        });
    }
    $(document).on("click",".save",function(){
         var id =$(this).attr("id");
         var Reg_no =$("#Reg_no"+id).val();
         var subject =$("#sub_cod"+id).val();
         var BOT =$("#updateBOT"+id).val();
         var EOT=$("#updateEOT"+id).val();
         var stream=$("#stream").val();
         var term_id=$("#term_id"+id).val();
         var form =$("#form").val();
         var initials=$("#initials").val();
         
         if(BOT=="")
         {
            $("#Result").text("Please Mid Term Test Required").css("color","red");
            $("#updateBOT"+id).css("border","0.5px solid red");
         }else if(isNaN(BOT))
         {
            $("#Result").text("Only Integers Are Required").css("color","red");
            $("#updateEOT"+id).css("border","0.5px solid red");
         }else if(EOT=="")
         {
            $("#Result").text("Please End Of Term Test Required").css("color","red");
            $("#updateEOT"+id).css("border","0.5px solid red");
         }else if(isNaN(EOT))
         {
            $("#Result").text("Only Integers Are Required").css("color","red");
            $("#updateEOT"+id).css("border","0.5px solid red");
         }else if(BOT < 0 || BOT > 30)
         {
            $("#Result").text("Please MID must be between 0 and 30").css("color","red");
             $("#updateBOT"+id).css("border","0.5px solid red");
         }else if(EOT <0 || EOT > 70)
         {
            $("#Result").text("Please EOT must be between 0 and 70").css("color","red");
             $("#updateEOT"+id).css("border","0.5px solid red");
         }else
         {

              $("#Result").html("");
              $("#updateBOT"+id).css("border","0.5px solid green");
              $("#updateEOT"+id).css("border","0.5px solid green");
              $.ajax({
                 url:"../admin/update_marks.php",
                 type:"POST",
                 data:{
                   id:id,
                   updateBOT:BOT,
                   updateEOT:EOT,
                   Reg_no:Reg_no,
                   sub_cod:subject,
                   initials:initials,
                   term_id:term_id,
                   c_id:stream
                 },
                 success:function(d){
                  var f=$("#Result1"+id).html("<span class='glyphicon glyphicon-ok'></span>").css("color","green");
                  $("#updateBOT"+id).css("border","");
                  $("#updateEOT"+id).css("border","");
                   f.fadeOut(1000).fadeIn(1000);
                   fetch_table();
                    // alert(d);
                 }
              }); 
         }
    });

        $(document).on("click",".updateBOT",function(){
         var id =$(this).attr("id");
         // var BOT =$("#updateBOT"+id).val();
         alert(id);
         // var Reg_no =$("#Reg_no"+id).val();
         // var subject =$("#sub_cod"+id).val();
         // var BOT =$("#updateBOT"+id).val();
         // var EOT=$("#updateEOT"+id).val();
         // var stream=$("#stream").val();
         // var term_id=$("#term_id"+id).val();
         // var form =$("#form").val();
         // var initials=$("#initials").val();
         
         // if(BOT=="")
         // {
         //    $("#Result").text("Please Mid Term Test Required").css("color","red");
         //    $("#updateBOT"+id).css("border","0.5px solid red");
         // }else if(EOT=="")
         // {
         //    $("#Result").text("Please End Of Term Test Required").css("color","red");
         //    $("#updateEOT"+id).css("border","0.5px solid red");
         // }else if(BOT < 0 || BOT > 30)
         // {
         //    $("#Result").text("Please MID must be between 0 and 30").css("color","red");
         //     $("#updateBOT"+id).css("border","0.5px solid red");
         // }else if(EOT <0 || EOT > 70)
         // {
         //    $("#Result").text("Please EOT must be between 0 and 70").css("color","red");
         //     $("#updateEOT"+id).css("border","0.5px solid red");
         // }else
         // {
         //      $("#Result").html("");
         //      $("#updateBOT"+id).css("border","0.5px solid green");
         //      $("#updateEOT"+id).css("border","0.5px solid green");
         //      $.ajax({
         //         url:"update_marks.php",
         //         type:"POST",
         //         data:{
         //           id:id,
         //           updateBOT:BOT,
         //           updateEOT:EOT,
         //           Reg_no:Reg_no,
         //           sub_cod:subject,
         //           initials:initials,
         //           form:form,
         //           term_id:term_id,
         //           stream:stream
         //         },
         //         success:function(d){
         //          var f=$("#Result"+id).html("<span class='glyphicon glyphicon-ok'></span>").css("color","green");
         //           $("#Result1").html(d).css("color","green");
         //           $("#tbl_tr"+id).fadeOut(1000).fadeIn(1000);
         //             // fetch_table();
         //         }
         //      }); 
         // }
    });
  });
</script>


