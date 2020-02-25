 <?php 
     
     if(isset($_POST['login'])){

    include('connection.php');
     session_start();
     $username = mysqli_real_escape_string($conn,$_POST['username']);
     $password = mysqli_real_escape_string($conn,$_POST['password']);
     $year = mysqli_real_escape_string($conn,$_POST['year']);
     $term = mysqli_real_escape_string($conn,$_POST['term']);
     $msg ='';
     
     //Error handler
     //check if inputs are empty

         if(empty($username))
         {
           
          $msg .='<div class="error">Please enter username</div>';

          }else if(empty($password))
          {
             
              $msg .="<div class='error'>please enter password</div>";
          }else if($year =="000")
          { 
            
            $msg .="<div class='error'>please select year</div>";

          }else if($term =="000")
          {
        
            $msg .="<div class='error'>please select term</div>";
          }else{
                $sql = "SELECT * FROM login WHERE username='".$username."' AND status ='active' AND password = '".md5($password)."'";
               $result = mysqli_query($conn,$sql);
                $resultcheck = mysqli_num_rows($result);
                $sqlt ="SELECT * FROM period_of_study INNER JOIN term ON period_of_study.term_id=term.term_id  WHERE year='".$year."' AND term='".$term."'";
                 $resultt = mysqli_query($conn,$sqlt) or die(mysqli_error($conn));
                  // $resultcheck = mysqli_num_rows($result) or die();

                 if($resultcheck < 1 )
                 {
                  
                  $msg .="<div class='error'>User Does Not Exit! Please Try Again</div>";
                         
                 }else if(mysqli_num_rows($resultt) < 1 )
                 {
                    
                    $msg .="<div class='error'>year out of bound</div>";
                 }else{

                        if($rows=mysqli_fetch_assoc($resultt)){
                             $_SESSION['term_id'] = $rows['term_id'];
                              $_SESSION['year'] = $rows['year'];
                              $_SESSION['term'] = $rows['term'];
                        }


                         if($row = mysqli_fetch_assoc($result)){
                       
                         $hashedpwdcheck =md5($row['password']);
                             if($hashedpwdcheck == false){

                         } elseif($hashedpwdcheck == true){
                              // log in user here
                                 $_SESSION['staff_id'] = $row['staff_id'];
                                  $_SESSION['username'] = $row['username'];
                                  $_SESSION['picture'] = $row['picture'];
                                  $_SESSION['privillage'] = $row['privillage'];

                                  if($row['privillage']=="administrator"){
                                  $msg .="<script>window.location='./module/admin'</script>";
                                  }else if($row['privillage']=="standard"){
                                  $msg .="<script>window.location='./module/teacher'</script>";
                                  }else{
                                      $msg .="<div class='error'>Error occured</div>";
                                  }
                         }
                  }

             }

         }
      echo $msg;
  }



 ?>


 