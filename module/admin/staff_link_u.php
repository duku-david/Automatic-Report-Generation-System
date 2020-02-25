<?php
    include_once('../../service/connection.php');
    $msg='';
    if(isset($_POST['idu']))
   {
          $staff_id = $_POST['idu'];
         $sql = "SELECT * FROM teacher INNER JOIN login ON teacher.initials =login.initials WHERE staff_id='".$staff_id."'";
         $result=mysqli_query($conn,$sql);
         while ($row = mysqli_fetch_assoc($result))
          {
             $msg.=json_encode($row);
          }
      
   }
    if(isset($_POST['activate']))
   {
    $staff_id = $_POST['activate'];
   $sql = "SELECT * FROM teacher WHERE staff_id='".$staff_id."' AND initials IN (SELECT initials FROM login WHERE status='active')";
   $result = mysqli_query($conn,$sql);
   $resultcheck = mysqli_num_rows($result);
   
    while ($row =mysqli_fetch_assoc($result)) {
        $firstname =$row['firstname'];
    }
   if($resultcheck > 0){
     $msg.='<div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p>'.$firstname.' Is already Active</p></div>';
     
   }else{
  $query=mysqli_query($conn,"UPDATE login SET status='active' WHERE initials IN (SELECT initials FROM teacher WHERE staff_id='".$staff_id."')");
       
       if($query){
         // $msg.='<p class="success">Successfully Activated</p>';
         $msg.='<div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
           <p> Successfully Activated</p>
         </div>';
    
       }else{
       // $msg.='<p class="error">Not Activated</p>';
        $msg.='<div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
           <p>Not Activated</p>
         </div>';
     
     }
   }
   }

   if(isset($_POST['disactivate']))
   {
   	 $uid = $_POST['disactivate'];

    if($uid=="1"){
      $msg.='<div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p>Admin Can not Be Disactivated </p></div>';
    }else{
        $sql = "SELECT * FROM teacher  WHERE staff_id='".$uid."' AND initials IN (SELECT initials FROM login WHERE status='inactive')";
   $result = mysqli_query($conn,$sql);
   $resultcheck = mysqli_num_rows($result);
   
          while ($row =mysqli_fetch_assoc($result)) {
              $firstname =$row['firstname'];
          }
   if($resultcheck > 0){
      $msg.='<div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p>'.$firstname.' Is Already Disactivated </p></div>';
   }else{
  $query=mysqli_query($conn,"UPDATE login SET status='inactive' WHERE initials IN (SELECT initials FROM teacher WHERE staff_id='".$uid."')");
       
       if($query){
        
         $msg.='<div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p> Successfully Disactivated</p></div>';
       }else{
       $msg.='<div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p> Not Disactivated </p></div>';
     }
   }
    }
   
   }

    if(isset($_POST['delete']))
   {
          $staff_id = $_POST['delete'];
          $sqla ="SELECT * FROM login WHERE initials=(SELECT initials FROM teacher WHERE staff_id='".$staff_id."')";
          $query_res =mysqli_query($conn,$sqla);
          while ($row =mysqli_fetch_assoc($query_res)) {
             $privillage =$row['privillage'];
              $username =$row['username'];
          }
          if($privillage=="administrator")
          {
           
            $msg.='<div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p>'.$username.' Is An Administrator! Can Not Be Deleted </p></div>';
          }else if($staff_id =="1")
         {
           $msg.='<div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p>'.$username.' Can Not Be Deleted</p></div>';
         }else
         {

          $query1=mysqli_query($conn,"DELETE FROM login WHERE initials =(SELECT initials FROM teacher WHERE staff_id='".$staff_id."')");
          $query2=mysqli_query($conn,"DELETE FROM teacher WHERE staff_id='".$staff_id."'");
           $query3=mysqli_query($conn,"DELETE FROM subjecttakenbyteacher WHERE initials IN(SELECT initials FROM teacher WHERE staff_id='".$staff_id."')");
            $query4=mysqli_query($conn,"DELETE FROM asubjecttakenbyteacher WHERE initials IN(SELECT initials FROM teacher WHERE staff_id='".$staff_id."')");
            if($query1 && $query2 && $query3 && $query4)
            {
               $msg.='<div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">&times;</button><br><p>Successfully deleted </p></div>';
            }else{

               $msg.='<div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button><br><p> Not Successfully deleted </p></div>';
            }
         }

   }

  echo $msg;
?>