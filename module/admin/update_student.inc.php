<?php
     if(isset($_POST['idu']))
  {
    include('../../service/connection.php');
     $id = $_POST['idu'];
     $sql ="SELECT * FROM ostudent WHERE stud_id=".$id."";
     $result =mysqli_query($conn,$sql) or die(mysqli_error($conn));
     if(mysqli_num_rows($result) > 0)
     {
        while ($row =mysqli_fetch_assoc($result))
        {
           echo json_encode($row);
        }
     }

  }

  if(isset($_POST['stud_id']))
  {
       include('../../service/connection.php');
          $id = $_POST['stud_id'];

    $firstname  =  mysqli_escape_string($conn,$_POST['firstname']);
    $othername  =  mysqli_escape_string($conn,$_POST['othername']);
    $Reg_no     =  mysqli_escape_string($conn,$_POST['Reg_no']);
    $old_Reg_no = mysqli_escape_string($conn,$_POST['old_Reg_no']);
    $stream       =  mysqli_escape_string($conn,$_POST['stream']);
    $gender     =  mysqli_escape_string($conn,$_POST['gender']);
     $imagefile        = $_FILES['picture']['name'];
     $temfiles        = $_FILES['picture']['tmp_name'];
     $folder          = 'image/'.$imagefile;
      move_uploaded_file($temfiles,'../image/'.$imagefile);
         $array          = array('jpg', 'jepg','png','gif');
     $ext = pathinfo($imagefile,PATHINFO_EXTENSION);
     $sql = "SELECT * FROM ostudent WHERE Reg_no ='".$Reg_no."'";
     $res = mysqli_query($conn,$sql);
     $result_check =mysqli_num_rows($res);
     $error_m='';
     $success_m='';
     if(!in_array($ext, $array)){
       $error_m.="please select  jpg, jpeg,png and gif image format only"; 
     }else if($gender=="000"){
      $error_m.="please select gender"; 
     }else if($stream=="000")
      {
       $error_m.="please select form/Class"; 
      
      }else if($Reg_no==$old_Reg_no)
      {
            $sql ="UPDATE grade SET Reg_no='".$Reg_no."' WHERE Reg_no='".$old_Reg_no."'";
            $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
             $sql ="UPDATE marksheet SET Reg_no='".$Reg_no."' WHERE Reg_no='".$old_Reg_no."'";
            $results = mysqli_query($conn,$sql) or die(mysqli_error($conn));
           
          $sql="UPDATE ostudent SET firstname='".$firstname."',othername='".$othername."',Reg_no='".$Reg_no."',c_id='".$stream."',gender='".$gender."',picture='".$folder."' WHERE stud_id='".$id."'";
       $query=mysqli_query($conn,$sql) or die(mysqli_error($conn));  
      if($query && $result && $results)
        {
            $success_m.=$firstname.' Successfully Updated';
        }else
        {
            $error_m.='not updated';
         } 
      }else if($result_check > 0)
     {
      $error_m.="Registration number already taken"; 
     }else
     {
            $sql ="UPDATE grade SET Reg_no='".$Reg_no."' WHERE Reg_no='".$old_Reg_no."'";
            $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            $sql ="UPDATE marksheet SET Reg_no='".$Reg_no."' WHERE Reg_no='".$old_Reg_no."'";
            $results = mysqli_query($conn,$sql) or die(mysqli_error($conn));
      
            $sql="UPDATE ostudent SET firstname='".$firstname."',othername='".$othername."',Reg_no='".$Reg_no."',c_id='".$stream."',gender='".$gender."',picture='".$folder."' WHERE stud_id='".$id."'";
              $query=mysqli_query($conn,$sql) or die(mysqli_error($conn)); 
        if($query && $result && $results)
        {
            $success_m.=$firstname.'Successfully Updated';
        }else
        {
            $error_m.='not updated';
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