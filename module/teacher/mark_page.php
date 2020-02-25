
      <?php include('staff_header.php'); ?>
  <style type="text/css">
        .Viewforms-container{
     margin: 0px auto;
  width: 530px;
  border: 1px solid grey;
  margin-top: 20px;
  margin-bottom: 20px;
  background-color: #fff;

}

.Viewforms {
     display: inline-flex;
}

.Viewforms .btn-primary{
  width: 100px;
  padding: 12px;
  text-align: center;
  margin: 5px;
  margin-top: 20px;
  margin-bottom: 20px;


}


      </style>
         
               <div class="formheadera" >View Marks Form</div>
              <div class="main-wrappings">
                
                    <div class="Viewforms-container">
                       
                            <div class="formheaderb">O LEVEL</div>
                             <?php global $msg; echo $msg;?>

                      <div class="Viewforms">
                          
                         <a href="view_amark.php?form=<?php echo base64_encode("One");?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">S 1</a>
                     </div>
                     <div class="Viewforms">
                          
                         <a href="view_amark.php?form=<?php echo base64_encode("Two");?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">S 2</a>
                     </div><div class="Viewforms">
                          
                         <a href="view_amark.php?form=<?php echo base64_encode("Three");?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">S 3</a>
                     </div><div class="Viewforms">
                          
                         <a href="view_amark.php?form=<?php echo base64_encode("Four");?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">S 4</a>
                     </div>
            
                          
                    </div>
                    <!-- A level mark page -->
                    <div class="Viewforms-container" >
                          
                            
                          <div class="formheaderb">A LEVEL</div>
                          <?php global $msgs; echo $msgs;?>
                        
                     <div class="Viewforms">
                          
                         <a href="view_amark.php?form=<?php echo "5 science";?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">S 5 science</a>
                     </div>
                      <div class="Viewforms">
                          
                         <a href="view_amark.php?form=<?php echo "5 arts";?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">S 5 arts</a>
                     </div>
                      <div class="Viewforms">
                          
                         <a href="view_amark.php?form=<?php echo "6 science";?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">S 6 science</a>
                     </div>
                      <div class="Viewforms">
                          
                         <a href="view_amark.php?form=<?php echo "6 arts";?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">S 6 arts</a>
                     </div>

                    </div>

            </div>

<?php include('../../footer.php');?>

 