
      <?php include('admin_header.php'); ?>

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
  width: 150px;
  padding: 12px;

  text-align: center;
  margin: 0px auto;
  margin-top: 20px;
  margin-bottom: 20px;


}

</style>


   <div class="formheadera" >Teacher Subject Registration Form</div>
  <div class="main-wrappings">
    
        <div class="Viewforms-container">
           
                <div class="formheaderb">Select Subject</div>
                 <?php global $msg; echo $msg;?>

          <div class="Viewforms">
              
             <a href="Subject.php" style=" margin-left: 100px; margin-top: 3px;" class="btn btn-primary">O Level Subjects</a>
         </div>
         <div class="Viewforms">
              
             <a href="Asubject.php" style=" margin-left: 20px; margin-top: 3px;" class="btn btn-primary">A Level Subjects</a>
         </div>

              
        </div>
        
  </div>

<?php include('../../footer.php');?>

 