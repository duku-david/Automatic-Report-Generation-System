<?php include('admin_header.php'); ?>

<div class="formheadera">Payment</div>
<div class="main-wrappings">
   <div id="modal_output"></div>
  <div align="right"><button type="button" class="btn btn-primary" id="add">
  Add Payment
</button>
</div>
<!-- The Modal -->
<div class="modal fade" id="myModals">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="view_payment"></div>
         <form id="myForm" method="post" accept="#">
       <div class="form-group">
                 <label>Reg No</label>
                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="Reg_no" id="Reg_no" placeholder="Enter Registration Number" class="form-control">
                 </div>
                 <p id="Reg_no_error" align="center"></p>
            </div>
            <div class="form-group">
                 <label>Amount</label>
                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="amount" id="amount" placeholder="Enter Amount" class="form-control">
                 </div>
                 <p id="amount_error" align="center"></p>
            </div>
            <div class="form-group">
                 <label>Month</label>
                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="month" id="month" placeholder="Enter Month.(April as 4)" class="form-control">
                 </div>
                 <p id="month_error" align="center"></p>
            </div>
            <div class="form-group">
                 <label>Year</label>
                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" name="year" id="year" placeholder="Enter Year.(2019)" class="form-control">
                 </div>
                 <p id="year_error" align="center"></p>
            </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-defualt" data-dismiss="modal">Close</button>
        <input type="hidden" name="years" id="years" value="<?php echo $_SESSION['year'];?>">
      </div>
    </form>
    </div>
  </div>
</div>
     <div id="payment_output"></div>
</div>
</div> 
        <?php include('../../footer.php');?>
  <script type="text/javascript" src="javascript/OAlevel_validate.js">
    </script>
  <script type="text/javascript" src="javascript/payment.js">
    </script>
<script type="text/javascript">
    paymentDisplay();
   function paymentDisplay()
   {
       var year =$("#years").val();
      $.ajax({
        url:"payment.inc.php",
        type:"post",
        data:{payment:1,year:year},
        success:function(d){
          $("#payment_output").html(d);
        }
      });
   }

    $("#add").on("click",function(){
       $("#myModals").modal("show");
       // $("#modal-body")[0].reset();
       $("#Reg_no").css("border-color","");
       $("#amount").css("border-color","");
       $("#month").css("border-color","");
       $("#year").css("border-color","");
       $("#Reg_no_error").html("").css("color","");
       $("#amount_error").html("").css("color","");
       $("#month_error").html("").css("color","");
       $("#year_error").html("").css("color","");
       $("#Reg_no").val("");
       $("#amount").val("");
       $("#month").val("");
       $("#year").val("");
    });

    $("#Reg_no").on("input",function(){
          Validate_RegNo();
        });
     $("#amount").on("input",function(){
          amountAndMonth('amount','amount_error');
        });
     $("#month").on("input",function(){
          amountAndMonth('month','month_error');
        });
      $("#year").on("input",function(){
          amountAndMonth('year','year_error');
        });

    $(document).ready(function(){
    

      $(document).on("submit","#myForm",function(e){
         e.preventDefault();
        var reg_no =$("#Reg_no").val();
        var amount =$("#amount").val();
        var month =$("#month").val();
        var year =$("#year").val();
        
        if(Validate_RegNo()==false)
        {
            return false;
        }else if(amountAndMonth('amount','amount_error')==false)
        {
           return false;
        }else if(amountAndMonth('month','month_error')==false)
        {
           return false;
        }else if(amountAndMonth('year','year_error')==false)
        {
           return false;
        }else
        {
            $.ajax({
              url:"payment.inc.php",
              type:"POST",
              data:{reg_no:reg_no,amount:amount,month:month,year:year},
              success:function(d)
              {
                $("#modal_output").html(d);
                $("#myModals").modal("hide");
                paymentDisplay();
              }
            });  
        }
      });
      $(document).on("click",".view",function(){
          var id =$(this).attr('id');
          $.ajax({
            url:"payment.ac.php",
            type:"POST",
            data:{view:1,id:id},
            success:function(d)
            {
              $("#myModals").modal("show");
              $("#view_payment").html(d);
              $("#myForm").html("");
              $(".modal-footer").html("");
              $(".modal-title").html("Payment Status");
            }
          });
      });
      $(document).on("click",".update",function(){
          var id =$(this).attr('id');
          $.ajax({
            url:"payment.ac.php",
            type:"POST",
            data:{update:1,id:id},
            dataType:"json",
            success:function(d)
            {
              $("#Reg_no").val(d.Reg_no);
              $("#amount").val(d.amount);
              $("#month").val(d.month);
              $("#year").val(d.year);
              $("#myModals").modal("show");
            }
          });
      });
      $(document).on("click",".delete",function(){
          var id =$(this).attr('id');
          $.ajax({
            url:"payment.ac.php",
            type:"POST",
            data:{delete:1,id:id},
            success:function(d)
            {
              $("#modal_output").html(d);
            }
          });
      });
     
    });

</script>

