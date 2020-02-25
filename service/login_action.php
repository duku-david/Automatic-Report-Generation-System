 <?php 
     
     if(isset($_POST['login'])){

    include('connection.php');
     session_start();
     $username = mysqli_real_escape_string($conn,$_POST['username']);
     $password = mysqli_real_escape_string($conn,$_POST['password']);
     $year = mysqli_real_escape_string($conn,$_POST['year']);
     $term = mysqli_real_escape_string($conn,$_POST['term']);
     $error_m='';
     $success_m='';
     
     //Error handler
     //check if inputs are empty

         if(empty($username))
         {
          $error_m.="Please enter username";
          }else if(empty($password))
          {
              $error_m.="please enter password";
          }else if($year =="000")
          { 
            $error_m.="please select year";
          }else if($term =="000")
          {
            $error_m.="please select term";
          }else{
                $sql = "SELECT * FROM login INNER JOIN teacher ON teacher.initials=login.initials WHERE username='".$username."' AND password = '".md5($password)."'";
               $result = mysqli_query($conn,$sql);
               
               $sqls = "SELECT * FROM login WHERE initials IN(SELECT initials FROM teacher WHERE username='".$username."') AND status ='active' AND password = '".md5($password)."'";
               $resultstatus = mysqli_query($conn,$sqls) or die(mysqli_error($conn));
               $_SESSION['year'] = $year;
               $sqlR ="SELECT * FROM `term` WHERE term='".$term."'";
               $termResult =mysqli_query($conn,$sqlR);
               while($termMember =mysqli_fetch_assoc($termResult))
               {
                  $_SESSION['term_id'] = $termMember['term_id'];
                   $_SESSION['term'] = $termMember['term'];
               }
                     
                $resultcheck = mysqli_num_rows($result);
               
                 if( $resultcheck < 1 )
                 {
                  
                     $error_m.="Invalid Login Details";
                         
                 }else if(mysqli_num_rows($resultstatus) < 1 )
                 {
                   $error_m.="Your Account is Temporay blocked";
                         
                 }
                 else if($year > date('Y'))
                 {
                    
                    $error_m.= $year." is out of bound";
                 }else{
                         if($row = mysqli_fetch_assoc($result)){
                       
                         $hashedpwdcheck =md5($row['password']);
                             if($hashedpwdcheck == false){

                         } elseif($hashedpwdcheck == true){
                              // log in user here
                                 $_SESSION['staff_id'] = $row['staff_id'];
                                  $_SESSION['username'] = $row['username'];
                                  $_SESSION['picture'] = $row['picture'];
                                  $_SESSION['privillage'] = $row['privillage'];
                                  $_SESSION['initials'] = $row['initials'];
                                  $_SESSION['password'] = $password;
                                  if($row['privillage']=="administrator"){
                                  $success_m.="<script>window.location='./module/admin'</script>";
                                  }else if($row['privillage']=="standard"){
                                  $success_m.="<script>window.location='./module/teacher'</script>";
                                  }else{
                                      $error_m.="Error occured";
                                  }
                         }
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
       echo $success_m;
    }
  }



 ?>


 