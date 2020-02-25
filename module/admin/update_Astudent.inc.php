<?php
  if(isset($_POST['id']))
  {
    include('../../service/connection.php');
     $id = $_POST['id'];
     $sql ="SELECT * FROM astudent WHERE stud_id=".$id."";
     $result =mysqli_query($conn,$sql) or die(mysqli_error($conn));;
     if(mysqli_num_rows($result) >0)
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
     $msg ='';
     if(!in_array($ext, $array)){
       $msg.='<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>please select  jpg, jpeg,png and gif image format only</p>
            </div>'; 

     }else if($gender=="000"){
      $msg .='<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>please select gender</p>
            </div>'; 
     }else if($stream=="000")
      {
       $msg .='<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>please select form/class</p>
            </div>'; 
      
      }else if($Reg_no==$old_Reg_no)
      {
             $sql ="UPDATE amarksheet SET Reg_no='".$Reg_no."' WHERE Reg_no='".$old_Reg_no."'";
            $result= mysqli_query($conn,$sql) or die(mysqli_error($conn));

            $sqla ="UPDATE amarks SET Reg_no='".$Reg_no."' WHERE Reg_no='".$old_Reg_no."'";
            $resulta= mysqli_query($conn,$sqla) or die(mysqli_error($conn));

          $sql="UPDATE astudent SET firstname='".$firstname."',othername='".$othername."',Reg_no='".$Reg_no."',c_id='".$stream."',gender='".$gender."',picture='".$folder."' WHERE stud_id='".$id."'";
       $query=mysqli_query($conn,$sql) or die(mysqli_error($conn));  
      if($query && $result && $resulta)
        {
            $msg .='<div class="alert alert-success">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>'.$firstname.' Successfully Updated</p>
            </div>';
        }else
        {
            $msg.='<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>not updated</p>
            </div>';
         } 
      }else if($result_check > 0)
     {
      $msg .='<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>Registration number already taken</p>
            </div>'; 
     }else
     {
           
            $sql ="UPDATE amarksheet SET Reg_no='".$Reg_no."' WHERE Reg_no='".$old_Reg_no."'";
            $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
      
          $sqla ="UPDATE amarks SET Reg_no='".$Reg_no."' WHERE Reg_no='".$old_Reg_no."'";
            $resulta= mysqli_query($conn,$sqla) or die(mysqli_error($conn));

            $query=mysqli_query($conn,"UPDATE astudent SET firstname='".$firstname."',othername='".$othername."',Reg_no='".$Reg_no."',form='".$form."',gender='".$gender."',picture='".$folder."',c_id='".$stream."' WHERE stud_id='".$id."'") or die(mysqli_error($conn));  
        if($query && $result && $resulta)
        {
            $msg .='<div class="alert alert-success">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>'.$firstname.' Successfully Updated</p>
            </div>';
        }else
        {
            $msg.='<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>not updated</p>
            </div>';
         } 
             
       }
     echo $msg;     
    }
?>