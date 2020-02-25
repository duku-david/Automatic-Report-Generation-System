 <link rel="stylesheet" type="text/css" href="style.css">
 <?php 

    include('../../service/connection.php');
if (isset($_POST['c_id']))
 {
  $msg ='';
  $sql ="SELECT * FROM class WHERE stream =('Art') OR stream ='Science' ";
  $result =mysqli_query($conn,$sql);
  $msg.='<option value="000">Select class</option>';
  while($row =mysqli_fetch_assoc($result)){
   $msg.='<option value='.$row['c_id'].' > Senior '.$row['c_name'].' ' .$row['stream'].'</option>';  
  }
  echo $msg;
 }
if(isset($_POST['Reg_no']))
{
    $error_m='';
    $success_m='';
    $firstname  =  mysqli_escape_string($conn,$_POST['firstname']);
    $othername  =  mysqli_escape_string($conn,$_POST['othername']);
    $Reg_no     =  mysqli_escape_string($conn,$_POST['Reg_no']);
    $c_id       =  mysqli_escape_string($conn,$_POST['form']);
    $gender     =  mysqli_escape_string($conn,$_POST['gender']);
    $comb       =  mysqli_escape_string($conn,$_POST['comb']);
    $year       =  mysqli_escape_string($conn,$_POST['year']);
    $term_ids    = array(1,2,3);

     $imagefile = $_FILES['picture']['name'];
     $temfiles  = $_FILES['picture']['tmp_name'];
     $folder    = 'image/'.$imagefile;
      move_uploaded_file($temfiles, '../image/'.$imagefile);
         $array          = array('jpg', 'jepg','png','gif');
     $ext = pathinfo($imagefile,PATHINFO_EXTENSION);
     if(!in_array($ext, $array))
     {
         $error_m.='please select  jpg, jpeg,png and gif image format only';
     }else
     {

        // select all the registered users
        $sql = "SELECT * FROM astudent WHERE Reg_no='".$Reg_no."'";
        $res = mysqli_query($conn,$sql);
          if($result_check = mysqli_num_rows($res) > 0)
          {

              $error_m.=strtoupper($Reg_no).'  is already registered! take another Registration Number';
           
          }else{
            //inserting user into database
              $sql = "INSERT INTO astudent(firstname,othername,Reg_no,c_id,gender,picture,comb,year) VALUES('".$firstname."','".$othername."','".$Reg_no."','".$c_id."','".$gender."','".$folder."','".$comb."','".$year."')";
                $result = mysqli_query($conn,$sql);
                 foreach ($term_ids as $term_id) 
                 {
                      $sqlm="INSERT INTO amarksheet(Reg_no,term_id) VALUES('".$Reg_no."','".$term_id."')";
                      $resultm=mysqli_query($conn,$sqlm);
                 }

             if ($comb =="PEM/ICT") 
             {
              foreach ($term_ids as $term_id) 
              {
                
                $sqls="INSERT INTO `amarks` ( `Reg_no`, `sub_cod`,term_id) VALUES ('".$Reg_no."', 'S06/1','".$term_id."'),('".$Reg_no."', 'S06/2','".$term_id."'),('".$Reg_no."', 'S06/3','".$term_id."'),('".$Reg_no."', 'S07/1','".$term_id."'),('".$Reg_no."', 'S07/2','".$term_id."'),('".$Reg_no."', 'S05/1','".$term_id."'),('".$Reg_no."', 'S05/2','".$term_id."'),('".$Reg_no."', 'S04/1','".$term_id."'),('".$Reg_no."', 'S04/2','".$term_id."'),('".$Reg_no."', 'B01','".$term_id."')";
                   $results = mysqli_query($conn,$sqls);
                
              }
          
             }else if ($comb=="MEG/ICT") 
             {
                foreach ($term_ids as $term_id) 
              {
                
                $sqls="INSERT INTO `amarks` ( `Reg_no`, `sub_cod`,term_id) VALUES ('".$Reg_no."', 'S05/1','".$term_id."'),('".$Reg_no."', 'S05/2','".$term_id."'),('".$Reg_no."', 'S07/1','".$term_id."'),('".$Reg_no."', 'S07/2','".$term_id."'),('".$Reg_no."', '   A02/1','".$term_id."'),('".$Reg_no."', '  A02/2','".$term_id."'),('".$Reg_no."', '  A02/3','".$term_id."'),('".$Reg_no."', 'S04/1','".$term_id."'),('".$Reg_no."', 'S04/2','".$term_id."'),('".$Reg_no."', 'B01','".$term_id."')";
                $results = mysqli_query($conn,$sqls);
               }
             }else if ($comb=="PCM/ICT") 
             {
                foreach ($term_ids as $term_id) 
              {
                
                $sqls="INSERT INTO `amarks` ( `Reg_no`, `sub_cod`,term_id) VALUES ('".$Reg_no."', 'S06/1','".$term_id."'),('".$Reg_no."', 'S06/2','".$term_id."'),('".$Reg_no."', 'S06/3','".$term_id."'),('".$Reg_no."', 'S03/1','".$term_id."'),('".$Reg_no."', 'S03/2','".$term_id."'),('".$Reg_no."', 'S03/3','".$term_id."'),('".$Reg_no."', 'S05/1','".$term_id."'),('".$Reg_no."', 'S05/2','".$term_id."'),('".$Reg_no."', 'S04/1','".$term_id."'),('".$Reg_no."', 'S04/2','".$term_id."'),('".$Reg_no."', 'B01','".$term_id."')";
                $results = mysqli_query($conn,$sqls);
               }
             }else if ($comb=="BCM/ICT") 
             {
                foreach ($term_ids as $term_id) 
              {
                
                $sqls="INSERT INTO `amarks` ( `Reg_no`, `sub_cod`,term_id) VALUES ('".$Reg_no."', 'S02/1','".$term_id."'),('".$Reg_no."', 'S02/2','".$term_id."'),('".$Reg_no."', 'S02/3','".$term_id."'),('".$Reg_no."', 'S03/1','".$term_id."'),('".$Reg_no."', 'S03/2','".$term_id."'),('".$Reg_no."', 'S03/3','".$term_id."'),('".$Reg_no."', 'S05/1','".$term_id."'),('".$Reg_no."', 'S05/2','".$term_id."'),('".$Reg_no."', 'S04/1','".$term_id."'),('".$Reg_no."', 'S04/2','".$term_id."'),('".$Reg_no."', 'B01','".$term_id."')";
                $results = mysqli_query($conn,$sqls);
                }
             }else if ($comb=="DEG/SUB_MATHS") 
             {
                foreach ($term_ids as $term_id) 
              {
                
                $sqls="INSERT INTO `amarks` ( `Reg_no`, `sub_cod`,term_id) VALUES ('".$Reg_no."', 'A03/1','".$term_id."'),('".$Reg_no."', 'A03/3','".$term_id."'),('".$Reg_no."', 'A03/3','".$term_id."'),('".$Reg_no."', 'S07/1','".$term_id."'),('".$Reg_no."', 'S07/2','".$term_id."'),('".$Reg_no."', 'A02/1','".$term_id."'),('".$Reg_no."', 'A02/2','".$term_id."'),('".$Reg_no."', 'A02/3','".$term_id."'),('".$Reg_no."', 'A05','".$term_id."'),('".$Reg_no."', 'B01','".$term_id."')";
                $results = mysqli_query($conn,$sqls);
                }
             }else if ($comb=="HED/SUB_MATHS") 
             {
                foreach ($term_ids as $term_id) 
              {
                
                $sqls="INSERT INTO `amarks` ( `Reg_no`, `sub_cod`,term_id) VALUES ('".$Reg_no."', 'A01/1','".$term_id."'),('".$Reg_no."', 'A01/2','".$term_id."'),('".$Reg_no."', 'S07/1','".$term_id."'),('".$Reg_no."', 'S07/2','".$term_id."'),('".$Reg_no."', 'A03/1','".$term_id."'),('".$Reg_no."', 'A03/2','".$term_id."'),('".$Reg_no."', 'A03/3','".$term_id."'),('".$Reg_no."', 'A05','".$term_id."'),('".$Reg_no."', 'B01','".$term_id."')";
                $results = mysqli_query($conn,$sqls);
               }
             }else if ($comb=="HEG/SUB_MATHS")
              {
                  foreach ($term_ids as $term_id) 
              {
                
                $sqls="INSERT INTO `amarks` ( `Reg_no`, `sub_cod`,term_id) VALUES ('".$Reg_no."', 'A01/1','".$term_id."'),('".$Reg_no."', 'A01/2','".$term_id."'),('".$Reg_no."', 'S07/1','".$term_id."'),('".$Reg_no."', 'S07/2','".$term_id."'),('".$Reg_no."', 'A02/1','".$term_id."'),('".$Reg_no."', 'A02/2','".$term_id."'),('".$Reg_no."', 'A02/3','".$term_id."'),('".$Reg_no."', 'A05','".$term_id."'),('".$Reg_no."', 'B01','".$term_id."')";
                $results = mysqli_query($conn,$sqls);
                }
             }else if ($comb=="BAG/ICT") 
             {
                   foreach ($term_ids as $term_id) 
              {
                
                $sqls="INSERT INTO `amarks` ( `Reg_no`, `sub_cod`,term_id) VALUES ('".$Reg_no."', 'S02/1','".$term_id."'),('".$Reg_no."', 'S02/2','".$term_id."'),('".$Reg_no."', 'S02/3','".$term_id."'),('".$Reg_no."', 'S01/1','".$term_id."'),('".$Reg_no."', 'S01/2','".$term_id."'),('".$Reg_no."', 'S01/3','".$term_id."'),('".$Reg_no."', 'A02/1','".$term_id."'),('".$Reg_no."', 'A02/2','".$term_id."'),('".$Reg_no."', 'A02/3','".$term_id."'),('".$Reg_no."', 'S04/1','".$term_id."'),('".$Reg_no."', 'S04/2','".$term_id."'),('".$Reg_no."', 'B01','".$term_id."')";
                $results = mysqli_query($conn,$sqls);
               }
             }
           // check if the data is sucessfully inserted into the database;
           if($result && $results && $resultm)
           {

             $success_m.=strtoupper($firstname).' is successfully registered!';
           
           }else
           {
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