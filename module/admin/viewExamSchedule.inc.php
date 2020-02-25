<?php
   include("../../service/connection.php");
  if (isset($_POST['exam'])) 
  {

   $output='';
     $output .='<table class="table table-bordered" id="myTable">
          <thead>
          <tr class="header">
               <th>NO</th>
              <th>DATE</th>
               <th>TIME</th>
               <th>SUBJECT</th>
              <th>CLASS</th>
              <th>EDIT</th>
              <th>DELETE</th>         
               </tr>
           </thead>
        <tbody>';
         $sqls = "SELECT * FROM osubject INNER JOIN examschedule ON osubject.sub_cod =examschedule.sub_cod";
        $runs    =mysqli_query($conn,$sqls);
        $no1=1;
        while($result = mysqli_fetch_assoc($runs))
        {
          $output .='<tr>
                    <td>'.$no1.'</td>
                    <td>'.$result['date'].'</td>
                    <td>'.$result['time'].'</td>
                    <td>'.$result['name'].'</td>
                     <td>'.$result['c_name'].'</td>
                    <td><button class="update btn btn-primary" id="'.$result['id'].'">Edit<span class="glyphicon glyphicon-open"></button></td>
                    <td><button class="delete btn btn-danger" id="'.$result['id'].'">Delete<span  class="glyphicon glyphicon-remove"></span></button></td>  
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