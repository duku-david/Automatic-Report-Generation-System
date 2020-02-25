<?php include('admin_header.php');?>
 <div class="formheadera">Teachers Attandance</div>
<div class="main-wrappings">
 	<div id="output_re"></div>
  
  <div id="output"></div>
  <div>
    
  </div>
 </div>

<script type="text/javascript">
  $(document).ready(function(){
  	$(document).on("click",".submit",function(){
  		var id = $(this).attr("id");
  		
  		$.ajax({
  			url:"attendance.inc.php",
  			type:"POST",
  			data:{id:id},
  			success:function(d)
  			{
          $("#output_re").html(d);
  				attendance();
  			}
  		});
  	});
  	attendance();
    function attendance()
    {
    	$.ajax({
    		url:"attendance.inc.php",
    		type:"POST",
    		data:{attend:1},
    		success:function(d)
    		{
    			$("#output").html(d);
    		}
    	});
    }
  });
</script>
