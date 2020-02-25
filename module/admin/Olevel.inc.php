
<?php 
$error_m='';
$success_m='';
  if (isset($_POST['c_id']))
 {
   $msg='';
    include('../../service/connection.php');
  
  $sql ="SELECT * FROM class WHERE stream !=('Art') AND stream !='Science'";
  $result =mysqli_query($conn,$sql);
  $msg.='<option value="000">Select class</option>';
  while($row =mysqli_fetch_assoc($result))
  {
   $msg.='<option value='.$row['c_id'].' > Senior '.$row['c_name'].' ' .$row['stream'].'</option>';  
  }
  echo $msg;
 }

if(isset($_POST['Reg_no']))
{

  include('../../service/connection.php');
  $firstname =  mysqli_escape_string($conn,$_POST['firstname']);
  $othername =  mysqli_escape_string($conn,$_POST['othername']);
  $Reg_n     =  mysqli_escape_string($conn,$_POST['Reg_no']);
  $Reg_no    =  strtoupper($Reg_n);
  $form      =  mysqli_escape_string($conn,$_POST['form']);
  $gender    =  mysqli_escape_string($conn,$_POST['gender']);
  $year      =  mysqli_escape_string($conn,$_POST['year']);
  $term_ids  =  array(1,2,3);
  $imagefile = $_FILES['picture']['name'];
  $temfiles  = $_FILES['picture']['tmp_name'];
  $folder    = 'image/'.$imagefile;
  move_uploaded_file($temfiles,'../image/'.$imagefile);
     $array = array('jpg', 'jpeg','png','gif','JPG','JPEG','JIF','PNG');
  $ext = pathinfo($imagefile,PATHINFO_EXTENSION);

  if(!in_array($ext, $array))
   {
     
      $error_m.='please select  jpg, jpeg,png and gif image format only';
     
   }else
   {
         $sub_cods=array();
         $result=$resultm=$results="";

            $sql = "SELECT * FROM ostudent WHERE Reg_no='".$Reg_no."'";
            $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            $result_check = mysqli_num_rows($result);
 
            $sqlsub = "SELECT sub_cod FROM osubject";
            $sub = mysqli_query($conn,$sqlsub) or die(mysqli_error($conn));
            foreach($sub as $s)
         {
           $sub_cods[]= $s['sub_cod'];
         }
            $sub_cods_count=count($sub_cods);

           if($result_check > 0)
           {

               $error_m=strtoupper($Reg_no).'  is already registered! take another Registration Number!';

           
           }else
              {
                  //inserting user into database

                for ($i=0; $i < $sub_cods_count; $i++) 
                { 
                    for ($j=0; $j < count($term_ids); $j++)
                    { 

                      $sqlm ="INSERT INTO `grade` ( `Reg_no`, `sub_cod`,term_id) VALUES ('".$Reg_no."','".$sub_cods[$i]."','".$term_ids[$j]."')";

                    $resultm=mysqli_query($conn,$sqlm) or die(mysqli_error($conn));
                    }
                }
                //insert into marksheet table
                 for($k=0; $k < count($term_ids); $k++) 
                 {
                     $sqls="INSERT INTO `marksheet` (`Reg_no`,term_id) VALUES ('".$Reg_no."','".$term_ids[$k]."');";
                    $results.= mysqli_query($conn,$sqls) or die(mysqli_error($conn));
                 }

                   $sql = "INSERT INTO ostudent(`firstname`, `othername`, `Reg_no`, `gender`, `picture`, `c_id`, `year`) VALUES('".$firstname."','".$othername."','".$Reg_no."','".$gender."','".$folder."','".$form."','".$year."')";
                   $result= mysqli_query($conn,$sql) or die(mysqli_error($conn));
                 
                 if($result && $resultm && $results)
                   {
                      $success_m.=strtoupper($firstname).' is successfully registered!';
                   }else{
                      $error_m.=strtoupper($firstname).' is  not successfully registered!';
                 
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