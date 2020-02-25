<?php
   include("../../service/connection.php");
   $year = $_POST['year'];
  if (isset($_POST['ostudent'])) 
  {

   $output='';
     $output .='<table class="table table-bordered" id="myTable">
          <thead>
          <tr class="header">
               <th>NO</th>
               <th>STUDENT NAME</th>
              <th>REGISTRATION NUMBER</th>
               <th>FORM</th>
               <th>STREAM</th>
              <th>GENDER</th>
              <th>PICTURE</th>
              <th>EDIT</th>
              <th>DELETE</th>         
               </tr>
           </thead>
        <tbody>';
         $sqls = "SELECT * FROM ostudent INNER JOIN class ON class.c_id =ostudent.c_id WHERE year='".$year."' ORDER BY firstname";
        $runs    =mysqli_query($conn,$sqls);
        $no1=1;
        while($result = mysqli_fetch_assoc($runs))
        {
          $output .='<tr>
                    <td>'.$no1.'</td>
                    <td>'.$result['firstname'].'  '.$result['othername'].'</td>
                    <td>'.$result['Reg_no'].'</td>
                    <td>'.$result['c_name'].'</td>
                    <td>'.$result['c_id'].'</td>
                     <td>'.$result['gender'].'</td>
                    <td><img src="../'.$result['picture'].'" width="30px" height="30px" style="border-radius: 40px;"></td>
                    <td><button class="update btn btn-primary" id="'.$result['stud_id'].'">Edit<span class="glyphicon glyphicon-open"></button></td>
    
                    <td><button class="delete btn btn-danger" id="'.$result['stud_id'].'">Delete<span  class="glyphicon glyphicon-remove"></span></button></td>  
                </tr>';
                $no1++;
        }
    $output .=' </tbody>
         </table>';
 echo $output;
}
?>
<script type="text/javascript">
  $(document).ready(function(){
     $('.table').DataTable();
  });
</script>

   