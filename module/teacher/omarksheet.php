 
   
    <?php

    session_start();
        include('../../service/connection.php');
         $initials=$_POST['initials'];
         $username=$_POST['username'];
          $subject = $_POST['subject'];
         $c_id = $_POST['stream'];
         $initials=$_POST['initials'];
    
          $sql1="SELECT * FROM subjecttakenbyteacher WHERE initials ='".$initials."' AND sub_cod='".$subject."' AND c_id='".$c_id."'";
          $sql="SELECT * FROM teacher WHERE initials=(SELECT initials FROM login WHERE initials='".strtoupper($initials)."' AND username='".$username."')";
         $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
         $result_check=mysqli_num_rows($result);
         $result1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
         $result_check1=mysqli_num_rows($result1);
       $error_m='';
       $success_m='';  
    if($subject =="000"){
        $error_m.='<div class="error">Please Select Subject!</div>';
    } else if($c_id =="000"){
      $error_m.='<div class="error">Please Select Class!</div>';
      }else if($result_check < 1)
      {
          $error_m.='<div class="error">Please Enter Correct Initials</div>';
        
      }else if($result_check1 < 1)
      {
         $sql ="SELECT name FROM osubject WHERE sub_cod='".$subject."'";
        $res =mysqli_query($conn,$sql);
        while ($row =mysqli_fetch_assoc($res)) 
        {
           $sub =$row['name'];
        }
          $error_m.='<div class="error">You Are not Registered for '.$sub.' in '.$c_id.'</div>';
      }else{
         $_SESSION['initials']=$initials;
          $_SESSION['subject'] =$subject;
          $_SESSION['c_id'] =$c_id;
      $success_m .='<script>window.location="omarksheet_display.php"</script>';
   }

  if($error_m)
    {
      echo'<div class="alert alert-danger">
              <button class="close" data-dismiss="alert" >&times;</button>
               <p>'.$error_m.'</p>
              </div>';
    }else if($success_m)
    {
       echo'<div class="alert alert-success">
              <button class="close" data-dismiss="alert" >&times;</button>
               <p>'.$success_m.'</p>
              </div>';
    }
?>
