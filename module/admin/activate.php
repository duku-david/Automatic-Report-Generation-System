<link rel="stylesheet" type="text/css" href="style.css">
<?php
     include('connection.php');
    $staff_id = $_GET['activate'];
   $sql = "SELECT * FROM staff WHERE staff_id='".$staff_id."' AND status='active'";
   $result = mysqli_query($conn,$sql);
   $resultcheck = mysqli_num_rows($result);
   if($resultcheck > 0){
   	  $msg='<p class="error">Staff Is already Active</p>';
     include('view_staff.php');
   }else{
  $query=mysqli_query($conn,"UPDATE staff SET status='active' WHERE staff_id='".$staff_id."'");
       
       if($query){
         $msg='<p class="success">Successfully Activated</p>';
     include('view_staff.php');
       }else{
       $msg='<p class="error">Not Activated</p>';
     include('view_staff.php');
     }
   }
?>