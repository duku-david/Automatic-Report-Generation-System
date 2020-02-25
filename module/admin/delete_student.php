<?php
   if(isset($_POST['delete']))
   {
    session_start();
      $msg='';
     include('../../service/connection.php');
      $id = $_POST['delete'];
      $sql ="SELECT * FROM ostudent WHERE stud_id = '".$id."'";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result) > 0)
      {
          while ($row =mysqli_fetch_assoc($result)) 
         {
        $_SESSION['Reg_no'] = $row['Reg_no'];
         }  
      
        $sqld ="DELETE FROM ostudent WHERE Reg_no='".$_SESSION['Reg_no']."'"; 
        $sqlg ="DELETE FROM grade WHERE Reg_no='".$_SESSION['Reg_no']."'"; 
        $sqls ="DELETE FROM marksheet WHERE Reg_no='".$_SESSION['Reg_no']."'"; 
        $results = mysqli_query($conn,$sqls);
        $resultg = mysqli_query($conn,$sqlg);
        $resulto = mysqli_query($conn,$sqld);
        if($resulto && $resultg && $results)
        {
            
             $msg .='<div class="alert alert-success">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>Student Successfully Deleted</p>
            </div>';
           }   else
           {
            $msg .='<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>Student Not Successfully Deleted</p>
            </div>';
           }
          }else
          {
             $msg .='<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>Error</p>
            </div>';
          }
      echo $msg;  
   }
  
  if(isset($_POST['adelete']))
   {
      session_start();
      $msg='';
       include('../../service/connection.php');
         $id = $_POST['adelete'];
         $sql ="SELECT * FROM astudent WHERE stud_id = '".$id."'";
         $result = mysqli_query($conn,$sql);
         if(mysqli_num_rows($result) > 0)
         {
             while ($row =mysqli_fetch_assoc($result)) 
            {
            $_SESSION['Reg_no'] = $row['Reg_no'];
            }  
         
           $sqld ="DELETE FROM astudent WHERE Reg_no='".$_SESSION['Reg_no']."'";
           $sqlg ="DELETE FROM amarks WHERE Reg_no='".$_SESSION['Reg_no']."'"; 
           $sqls ="DELETE FROM amarksheet WHERE Reg_no='".$_SESSION['Reg_no']."'"; 
           $results = mysqli_query($conn,$sqls);
           $resultg = mysqli_query($conn,$sqlg);
           $resulto = mysqli_query($conn,$sqld);
           if($resulto && $resultg && $results)
           {
            
             $msg .='<div class="alert alert-success">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>Student Successfully Deleted</p>
            </div>';
           }   else
           {
            $msg .='<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>Student Not Successfully Deleted</p>
            </div>';
           }
          }else
          {
             $msg .='<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>Error</p>
            </div>';
          }
      echo $msg;  
   }


?>