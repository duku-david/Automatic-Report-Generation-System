  
       <?php include('staff_header.php'); ?>

    <?php  
         $initiala =$_SESSION['initiala'];
         $forma =$_SESSION['forma'];
        $subjecta= $_SESSION['subjecta'];

         $sql ="SELECT * FROM ((amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no) INNER JOIN asubject ON amarks.sub_cod = asubject.sub_cod) WHERE amarks.sub_cod='".$subjecta."' AND astudent.c_id='".$forma."' ";
         $runs    =mysqli_query($conn,$sql);
         $row=mysqli_fetch_array($runs);
        ?> 
         <div class="formheadera"> Marks Sheet For <?php echo "".$row['name'].""; ?> <?php  echo $forma;?>
           <a href="index.php" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Back</a>
         </div>  
          <div class="main-wrappings">
               <div id="Result" align="center"></div>
              <div id="Tbl_Result" align="center"></div>
               



       </div>

<?php include('../../footer.php'); ?>

<script type="text/javascript">
  $(document).ready(function(){

    fetch_table();
    function fetch_table()
    {
        var table_result="table_result";
        $.ajax({
            url:"../admin/Aupdate_marks.php",
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
         var mid_term =$("#mid_term"+id).val();
         var end_term=$("#end_term"+id).val();
         var term_id=$("#term_id"+id).val();
         var form =$("#forma").val();
         var initiala=$("#initiala").val();
         var stud_id=$("#stud_id").val();
         if(mid_term=="")
         {
            $("#Result").text("Please Mid Term Test Required").css("color","red");
            $("#mid_term"+id).css("border","0.5px solid red");
         }else if(end_term=="")
         {
            $("#Result").text("Please End Of Term Test Required").css("color","red");
            $("#end_term"+id).css("border","0.5px solid red");
         }else if(mid_term < 0 || mid_term > 30)
         {
            $("#Result").text("Please Mid term must be between 0 and 30").css("color","red");
             $("#mid_term"+id).css("border","0.5px solid red");
         }else if(end_term <0 || end_term > 70)
         {
            $("#Result").text("Please end of term must be between 0 and 70").css("color","red");
             $("#end_term"+id).css("border","0.5px solid red");
         }else
         {
              $("#Result").html("");
              $("#mid_term"+id).css("border","0.5px solid green");
              $("#end_term"+id).css("border","0.5px solid green");
              $.ajax({
                 url:"../admin/Aupdate_marks.php",
                 type:"POST",
                 data:{
                   mark_id:id,
                   mid_term:mid_term,
                   end_term:end_term,
                   Reg_no:Reg_no,
                   sub_cod:subject,
                   initiala:initiala,
                   forma:form,
                   term_id:term_id,
                   stud_id:stud_id
                 },
                 success:function(d){
                  var f=$("#Result1"+id).html("<span class='glyphicon glyphicon-ok'></span>").css("color","green");
                  $("#mid_term"+id).css("border","");
                  $("#end_term"+id).css("border","");
                   f.fadeOut(1000).fadeIn(1000);
                   // location.reload();
                   fetch_table();
                 }
              }); 
         }
    });
  });
</script>
