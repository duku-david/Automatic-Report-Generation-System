<?php 
include('../../service/connection.php');
if(isset($_POST['attend']))
{
   $output ='';
   //this is the table output
    $output .='<table class="table table-stripped" id="myTable">
               
                  <thead>
                   <tr class="header">
                       <th>NO</th>
                       <th>STAFF NAME</th>
                      <th>GENDER</th>
                      <th>PICTURE</th>
                      <th></th>
                     </tr>  
                   </thead>
                   <tbody>
                ';
                $sqls = "SELECT * FROM teacher where initials not in (select attendedid from attendance where date=CURDATE())";
                 $runs    =mysqli_query($conn,$sqls) or die(mysqli_error($conn));
                 $no1 =1;
                 while($result = mysqli_fetch_assoc($runs)){
                                          
            $output .='             
                  <tr>
                     <td>'.$no1.'</td>
                     <td>'.$result['firstname'].' '.$result['othername'].'</td>
                     <td>'.$result['gender'].'</td>
                     <td><img src="../'.$result['picture'].'" width="30px" height="30px" style="border-radius: 40px;"></td>
                     <td><button type="button"  class="submit btn btn-primary" id="'.$result['initials'].'">Present<span class="glyphicon glyphicon-open"></button></td>
                     
                         
                 </tr>';
            
                  $no1++;
                 
                 }
         $output .='</tbody>
      
    </table>';
       echo $output;
}

if(isset($_POST['id']))
{
  $success_m='';
  $id =$_POST['id'];
  $cdate =date("Y-m-d");
   $sql ="INSERT INTO attendance VALUES('','".$cdate."','".$id."')";
   $success =mysqli_query($conn,$sql);
   if(!$success)
   {
      die('Attendance Error: '.mysqli_error($conn));
   }
   $success_m.="Attendance Completed";
   echo'<div class="alert alert-success">
            <button class="close" data-dismiss="alert" >&times;</button>
              <p>'.$success_m.'</p>
    </div>';
}
?>
<script type="text/javascript">
  $(".table").DataTable();
</script>