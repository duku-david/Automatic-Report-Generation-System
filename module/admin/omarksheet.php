
    <?php
        session_start();
        include('../../service/connection.php');
if(isset($_POST['subject']))
{
          $subject = $_POST['subject'];
         $c_id = $_POST['stream'];
         $initials=$_POST['initials'];
         $year    =$_POST['year'];
          $sql="SELECT * FROM teacher WHERE initials='".strtoupper($initials)."'";
          $sql1="SELECT * FROM subjecttakenbyteacher WHERE initials ='".$initials."' AND sub_cod='".$subject."' AND c_id='".$c_id."' AND year='".$year."'";

         $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
         $result_check=mysqli_num_rows($result);
         $result1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));
         $result_check1=mysqli_num_rows($result1);
       $error_m='';
       $success_m='';  
    if($subject =="000"){
        $error_m.='Please Select Subject!';
    
    } else if($c_id =="000"){
    
      $error_m.='Please Select Class!';
     
      }else if($result_check < 1)
      {

          $error_m.='Please Enter Correct initials!';
      }else if($result_check1 < 1)
      {
         $sql ="SELECT name FROM osubject WHERE sub_cod='".$subject."'";
        $res =mysqli_query($conn,$sql);
        while ($row =mysqli_fetch_assoc($res)) 
        {
           $sub =$row['name'];
        }
          $error_m.='You Are not Registered for '.$sub.' in '.$c_id.' and in '.$year.'</div>';
      } else{
          $_SESSION['initials']=$initials;
          $_SESSION['subject'] =$subject;
          $_SESSION['c_id'] =$c_id;
        $success_m.='<script>window.location="omarksheet_display.php"</script>';

   }
   if($error_m)
    {
      echo'<div class="alert alert-danger">
              <button class="close" data-dismiss="alert" >&times;</button>
               <p>'.$error_m.'</p>
              </div>';
    }else if($success_m)
    {
       echo'<p>'.$success_m.'</p>';
    }
}



?>
