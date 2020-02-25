<link rel="stylesheet" type="text/css" href="style.css">
<?php

   
 if(isset($_POST['register'])){

  include('connection.php');
     $firstname   = mysqli_real_escape_string($conn,$_POST['firstname']);
     $othername   = mysqli_real_escape_string($conn,$_POST['othername']);
     $username    = mysqli_real_escape_string($conn,$_POST['username']);
    $gender       = mysqli_real_escape_string($conn,$_POST['gender']);
    $prev         = mysqli_real_escape_string($conn,$_POST['privilege']);
    $initials     = mysqli_real_escape_string($conn,$_POST['initials']);
    $password     = mysqli_real_escape_string($conn,$_POST['password_1']);
    $pass         = md5($password);
    $imagefile    = $_FILES['picture']['name'];
     $temfiles    = $_FILES['picture']['tmp_name'];
     $folder      = 'image/'.$imagefile;
      move_uploaded_file($temfiles, $folder);
     //image validation
     $array   = array('jpg', 'jepg','png','gif');
     $ext = pathinfo($imagefile,PATHINFO_EXTENSION);
     if(!in_array($ext, $array)){
        $msg='<div class="error">please select  jpg, jpeg,png and gif image format only</div>';
        include('staff.php');
     }else{

        // select all the registered users
        $sql = "SELECT * FROM staff WHERE username = '".$username."'";
      $result = mysqli_query($conn,$sql);
      if($result_check = mysqli_num_rows($result) > 0){
         $msg='<div class="error">'.strtoupper($username).' is  already registered! take another username</div>';
        
        include('staff.php');
       
       
      }else{
           
           $sql = "INSERT INTO staff(firstname,othername,username,password,gender,picture,privillage,initials) VALUES('".$firstname."','".$othername."','".$username."','".$pass."','".$gender."','".$folder."','".$privilege."','".$initials."')";
          
           $result = mysqli_query($conn,$sql);
           // check if the data is sucessfully inserted into the database;
           if($result){
               $msg='<div class="success">'.strtoupper($username).' is successfully registered!</div>';
             include('staff.php');
            
           }else{
              $msg='<div class="error">'.strtoupper($username).' is  not successfully registered!</div>';
             include('staff.php');
         
           }
     } 


     }

 }



?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php

   
 if(isset($_POST['register'])){

  include('connection.php');
     $firstname      = mysqli_real_escape_string($conn,$_POST['firstname']);
     $othername       = mysqli_real_escape_string($conn,$_POST['othername']);
     $username        = mysqli_real_escape_string($conn,$_POST['username']);
    $gender            = mysqli_real_escape_string($conn,$_POST['gender']);
    $privillage            = mysqli_real_escape_string($conn,$_POST['privillage']);
    $password         = mysqli_real_escape_string($conn,$_POST['password_1']);
    $pass             = md5($password);
    $imagefile        = $_FILES['picture']['name'];
     $temfiles        = $_FILES['picture']['tmp_name'];
     $folder          = 'image/'.$imagefile;
      move_uploaded_file($temfiles, $folder);
     //image validation
     $array          = array('jpg', 'jepg','png','gif');
     $ext = pathinfo($imagefile,PATHINFO_EXTENSION);
     if(!in_array($ext, $array)){
        $msg='<div class="error">please select  jpg, jpeg,png and gif image format only</div>';
        include('staff.php');
     }else{

        // select all the registered users
        $sql = "SELECT * FROM login WHERE username = '".$username."'";
      $result = mysqli_query($conn,$sql);
      if($result_check = mysqli_num_rows($result) > 0){
         $msg='<div class="error">'.strtoupper($username).' is  already registered! take another username</div>';
        
        include('staff.php');
       
       
      }else{
            //inserting user into database
           $sql = "INSERT INTO login(username,password,picture,privillage) VALUES('".$username."','".$pass."','".$folder."','".$privillage."')";
           $sql2 = "INSERT INTO staff(firstname,othername,username,gender,picture ) VALUES('".$firstname."','".$othername."','".$username."','".$gender."','".$folder."')";
           $result = mysqli_query($conn,$sql);
           $result2 = mysqli_query($conn,$sql2);
           // check if the data is sucessfully inserted into the database;
           if($result && $result2){
               $msg='<div class="success">'.strtoupper($username).' is successfully registered!</div>';
             include('staff.php');
            
           }else{
              $msg='<div class="error">'.strtoupper($username).' is  not successfully registered!</div>';
             include('staff.php');
         
           }
     } 


     }

 }



?>
