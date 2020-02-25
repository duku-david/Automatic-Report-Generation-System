


<?php

   session_start();
   include('../../service/connection.php');
  if(isset($_POST['subjecta']))
  {

    $subjecta = $_POST['subjecta'];
    $forma = $_POST['forma'];
    $initiala = $_POST['initiala'];
     $username=$_POST['username'];
    $sql="SELECT * FROM teacher WHERE initials=(SELECT initials FROM login WHERE initials='".strtoupper($initiala)."' AND username='".$username."')";
         $result = mysqli_query($conn,$sql);
         $result_check=mysqli_num_rows($result);
       $error_m='';
       $success_m='';  
    if($subjecta =="Select Subject"){
        $error_m.='<div class="error">Please Select Subject!</div>';
    } else if($forma =="Select Class"){
    
      $error_m.='<div class="error">Please Select Class!</div>';
    }else if($result_check < 1)
      {
          $error_m.='<div class="error">Please Enter Correct Initial!</div>';
      }else
      {

           $_SESSION['initiala']=$initiala;
          $_SESSION['subjecta'] =$subjecta;
          $_SESSION['forma'] =$forma;
        $success_m .='<script>window.location="Amarksheet_display.php"</script>';
    
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
}


?>
