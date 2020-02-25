<?php 
         
 if(isset($_POST['change_password'])){
      $error_m='';
      $success_m='';
      include('../../service/connection.php');
      $current_password =$_POST['current_password'];
      $username         =$_POST['username'];
      $new_password = $_POST['new_password'];
      $confirm_password = $_POST['re_enter_password'];  
      if(empty($new_password))
      {
              $error_m.='Please Enter Current Password';  
      }else if(empty($confirm_password))
      {
             $error_m.='Please Confirm Your Password'; 
      }elseif($new_password !=$confirm_password)
      { 
            $error_m.='The Two Password Do Not Match';              
      }else
      {
            $sql = "SELECT * FROM login WHERE username='".$username."' AND password = '".md5($current_password)."'";
             $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
             $resultcheck = mysqli_num_rows($result);
          //CHECK IF USER REALLY LOGINED ON TO THE SYSTEM
          if($resultcheck < 1)
          {
             $error_m.='<script>window.location="logout.php?lock"</script>'; 
          }else
          {

              $password = md5($current_password);
              $n_password = md5($new_password);

              $query = "UPDATE login SET password = '".$n_password."' WHERE password='".$password."'";
              $queryresult = mysqli_query($conn,$query) or die(mysqli_error($conn));

              if($queryresult)
              {
                 $success_m.='<script>window.location="logout.php?pass_change"</script>'; 
              }else
              {
                 $error_m.='You have not sucessfully changed your password';     
              }    
          }
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