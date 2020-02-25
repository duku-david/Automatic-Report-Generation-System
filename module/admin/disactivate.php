  <link rel="stylesheet" type="text/css" href="style.css">
<?php
     include('connection.php');
    $uid = $_GET['disactivate'];
    if($uid=="1"){
      $msg='<p class="error">Admin Can not Be Disactivated</p>';
       include('view_staff.php');
       exit();
    }else{
        $sql = "SELECT * FROM staff WHERE staff_id='".$uid."' AND status='inactive'";
   $result = mysqli_query($conn,$sql);
   $resultcheck = mysqli_num_rows($result);
   if($resultcheck > 0){
      $msg='<p class="error">Staff Is Already Disactivated </p>';
     include('view_staff.php');
   }else{
  $query=mysqli_query($conn,"UPDATE staff SET status='inactive' WHERE staff_id='".$uid."'");
       
       if($query){
         $msg='<p class="success">Successfully Disactivated</p>';
     include('view_staff.php');
       }else{
       $msg='<p class="error">Not Disactivated</p>';
     include('view_staff.php');
     }
   }
    }
   
?>


 