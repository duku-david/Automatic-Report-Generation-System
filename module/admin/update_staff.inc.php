<?php
   // if(isset($_POST['updates']))
   // {
       include('../../service/connection.php');
          $id = $_POST['id'];
          $firstname = $_POST['firstname'];
          $othername = $_POST['othername'];
           $username =$_POST['username'];
          $gender    =$_POST['gender'];
         $privillage = $_POST['privillage'];
         $initials   = $_POST['initials'];
         $imagefile  = $_FILES['picture']['name'];
          $temfiles  = $_FILES['picture']['tmp_name'];
          $folder    = 'image/'.$imagefile;
      move_uploaded_file($temfiles,'../image/'.$imagefile);
     //image validation
     $array          = array('jpg', 'jepg','png','gif','JPEG','JPG');
     $ext = pathinfo($imagefile,PATHINFO_EXTENSION);
     $msg='';
     if(!in_array($ext, $array)){
        $msg.='<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>please select  jpg, jpeg,png and gif image format only</p>
            </div>'; 
     }else{

       $query=mysqli_query($conn,"UPDATE teacher SET firstname='".$firstname."',othername='".$othername."',gender='".$gender."',picture='".$folder."',initials='".$initials."' WHERE staff_id='".$id."'");

       $sql ="UPDATE login SET username='".$username."',privillage='".$privillage."',initials='".$initials."' WHERE initials =(SELECT initials FROM teacher WHERE staff_id='".$id."')";
       $res =mysqli_query($conn,$sql);

       if($query && $res){
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
        
 // }
?>