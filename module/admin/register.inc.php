<?php

   
 if(isset($_POST['register'])){

  include('connection.php');
     $firstname      = mysqli_real_escape_string($conn,$_POST['firstname']);
     $othername       = mysqli_real_escape_string($conn,$_POST['othername']);
     $username        = mysqli_real_escape_string($conn,$_POST['username']);
    $gender            = mysqli_real_escape_string($conn,$_POST['gender']);
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
        $msg='<div style="color: #a94442; font-size:20px; background:#f2dede; border: 1px solid #a94442; border-radius:5px; margin:20px; margin-bottom:5px; text-align: center; ">please select  jpg, jpeg,png and gif image format only</div>';
        include('register.php');
     }else{

        // select all the registered users
        $sql = "SELECT * FROM staff WHERE username = '".$username."'";
      $result = mysqli_query($conn,$sql);
      if($result_check = mysqli_num_rows($result) > 0){
         $msg='<div style="color: #a94442; font-size:20px; background:#f2dede; border: 1px solid #a94442; border-radius:5px; margin:20px; margin-bottom:5px; text-align: center; ">'.strtoupper($username).' is  already registered! take another username</div>';
        
        include('register.php');
       
       
      }else{
            //inserting user into database
          
           $sql = "INSERT INTO staff(firstname,othername,username,password,gender,picture ) VALUES('".$firstname."','".$othername."','".$username."','".$pass."','".$gender."','".$folder."')";
              
               $result = mysqli_query($conn,$sql);
               // check if the data is sucessfully inserted into the database;
               if($result){
                   $msg='<div class="success">'.strtoupper($username).' is successfully registered!</div>';
                  include('register.php');
                
               }else{
                  $msg='<div class="error">'.strtoupper($username).' is  not successfully registered!</div>';
                   include('register.php');
             
               }
             } 


     }

 }



?>
