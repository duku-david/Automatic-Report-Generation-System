<?php
   session_start();
   include('../../service/connection.php');
  if(isset($_POST['subjecta']))
  {

    $subjecta = $_POST['subjecta'];
    $c_id = $_POST['forma'];
    $initiala = $_POST['initiala'];
    $sql="SELECT * FROM teacher WHERE initials='".$initiala."'";
         $result = mysqli_query($conn,$sql);
         $result_check=mysqli_num_rows($result);
       $error_m='';
       $success_m='';  
    if($subjecta =="Select Subject"){
        $error_m.='Please Select Subject!';
      
       // include('index.php');

    } else if($c_id =="Select Class"){
    
      $error_m.='Please Select Class!';
      // include('index.php');

    }else if($result_check < 1)
      {
          $error_m.='Please Enter Correct Initial!</div>';
          // include('index.php'); 
      }else{

            $_SESSION['initials']=$initiala;
          $_SESSION['subject'] =$subjecta;
          $_SESSION['c_id'] =$c_id;
        $success_m.='<script>window.location="Amarksheet_display.php"</script>';
    
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
