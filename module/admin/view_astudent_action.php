<?php
include("../../service/connection.php");
   $year = $_POST['year'];
   if(isset($_POST['astudent']))
{
  $output='';
    $output='<table class="tables table-bordered" id="myTable">
          <thead>
             <tr class="header">
               <th>NO</th>
               <th>STUDENT NAME</th>
              <th>REGISTRATION NUMBER</th>
               <th>FORM</th>
               <th>COMBINATION</th>
              <th>GENDER</th>
              <th>PICTURE</th>
              <th>EDIT</th>
              <th>DELETE</th>
             </tr>  
           </thead>
        <tbody>';
        $sqls = "SELECT * FROM astudent WHERE year='".$year."' ORDER BY firstname";
               $run    =mysqli_query($conn,$sqls);
               $no=1;
                 while($result = mysqli_fetch_assoc($run)){
                 $output .='
               <tr>
                  <td>'.$no.'</td>
                   <td>'.$result['firstname'].' '.$result['othername'].'</td>
                    <td>'.$result['Reg_no'].'</td>
                    <td>'.$result['c_id'].'</td>
                    <td>'.$result['comb'].'</td>
                    <td>'.$result['gender'].'</td>
                  <td><img src="../'.$result['picture'].'" width="30px" height="30px" style="border-radius: 40px;"> </td>
                       <td><a  class="aedit btn btn-primary" id="'.$result['stud_id'].'">Edit<span class="glyphicon glyphicon-open"></a></td>
                         <td><a  class="adelete btn btn-danger" id="'.$result['stud_id'].'">Delete<span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>
                ';
           $no++;
               }
          
  $output .='</tbody>
</table>';
echo $output;
}
?>
<script type="text/javascript">
  $(document).ready(function(){
     $('.tables').DataTable();
  });
</script>