
<link rel="stylesheet" type="text/css" href="style.css">
<?php
$error_m='';
$success_m='';
if(isset($_POST['initials']))
{
 
  include('../../service/connection.php');
     $firstname   = mysqli_real_escape_string($conn,$_POST['firstname']);
     $othername   = mysqli_real_escape_string($conn,$_POST['othername']);
     $username    = mysqli_real_escape_string($conn,$_POST['username']);
    $gender       = mysqli_real_escape_string($conn,$_POST['gender']);
    $priv         = mysqli_real_escape_string($conn,$_POST['privillage']);
    $initials     = mysqli_real_escape_string($conn,$_POST['initials']);
    $password     = mysqli_real_escape_string($conn,$_POST['password_1']);
    $pass         = md5($password);
    $imagefile    = $_FILES['picture']['name'];
     $temfiles    = $_FILES['picture']['tmp_name'];
     $folder      = 'image/'.$imagefile;
     $year        =$_POST['year'];
      move_uploaded_file($temfiles, '../image/'.$imagefile);
     //image validation
     $array   = array('jpg', 'jepg','png','gif');
     $ext = pathinfo($imagefile,PATHINFO_EXTENSION);
     if(!in_array($ext, $array))
     {
        $error_m.='please select  jpg, jpeg,png and gif image format only';
     }else{

        //select all the registered users
        $sql = "SELECT * FROM login WHERE username = '".$username."'";
      $result = mysqli_query($conn,$sql);
       $sqls = "SELECT * FROM teacher WHERE initials= '".$initials."'";
      $result2 = mysqli_query($conn,$sqls);
      if($result_check = mysqli_num_rows($result) > 0)
      {
         $error_m.=strtoupper($username).' is  already registered! take another username';
   
      }else if($result_check2 = mysqli_num_rows($result2) > 0)
      {
         $error_m.=strtoupper($initials).' is  already registered! take another username';
      }else{
           
           $sql = "INSERT INTO teacher(firstname,othername,gender,picture,initials,year) VALUES('".$firstname."','".$othername."','".$gender."','".$folder."','".strtoupper($initials)."','".$year."')";
           $sql1 ="INSERT INTO login(username,password,privillage,initials)VALUES('".$username."','".$pass."','".$priv."','".strtoupper($initials)."')";
          
           $result = mysqli_query($conn,$sql);
            $result1 = mysqli_query($conn,$sql1);
           // check if the data is sucessfully inserted into the database;
           if($result && $result1)
           {
               $success_m.=strtoupper($username).' is successfully registered!';
           }else{
              $error_m.=strtoupper($username).' is  not successfully registered!';
         
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
       echo'<div class="alert alert-success">
              <button class="close" data-dismiss="alert" >&times;</button>
               <p>'.$success_m.'</p>
              </div>';
    }
 
?>

