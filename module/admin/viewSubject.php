<?php include('admin_header.php'); ?>
<div class="formheadera">Subject Taken by Teacters </div>
<div class="main-wrappings">
   <div id="modal_output"></div>
    <h2>O Level Subjects</h2>
     <div id="outputSubject"></div>
     
<h2>A Level Subjects</h2>
   <div id="aoutputSubject"></div>
   
</div>
               
  <?php include('../../footer.php');?>
<script type="text/javascript" src="javascript/OAlevel_validate.js">   
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
      aDelete(); 
      Delete();
      subject_output();
      asubject_output();
      function subject_output()
      {
        $.ajax({
          url:"viewSubject.inc.php",
          type:"POST",
          data:{subject:1},
          success:function(d)
          {
            $("#outputSubject").html(d);
          }
        });
      }

      function asubject_output()
      {
        $.ajax({
          url:"asubjectView.inc.php",
          type:"POST",
          data:{asubject:1},
          success:function(d)
          {
            $("#aoutputSubject").html(d);

          }
        });
      }

     function Delete()
    {
      $(document).on("click",".delete",function(){
          var id = $(this).attr("id");
          if(confirm("do you ready want to delete?")){
             $.ajax({
               url:"deleteSubject.php",
               type:"POST",
               data:{delete:1,id:id},
               success:function(d){
                $("#modal_output").html(d);
                subject_output();
                  $.ajax({
                    url:"subjectView.inc.php",
                    type:"POST",
                    data:{subject:1},
                    success:function(d)
                    {
                      $("#outputSubject").html(d);
                    }
                  });

               }
             });
          }
          
      });
    }

     function aDelete()
    {
      $(document).on("click",".adelete",function(){
          var id = $(this).attr("id");
          if(confirm("do you ready want to delete?")){
             $.ajax({
               url:"deleteSubject.php",
               type:"POST",
               data:{adelete:1,id:id},
               success:function(d){
                $("#modal_output").html(d);
                    //asubject_output();
                    $.ajax({
                      url:"asubjectView.inc.php",
                      type:"POST",
                      data:{asubject:1},
                      success:function(d)
                      {
                        $("#aoutputSubject").html(d);

                      }
                    });

               }
             });
          }
          
      });
    }
      
        
})
</script>



