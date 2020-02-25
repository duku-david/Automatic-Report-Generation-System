<?php
   include('../../service/connection.php');
   $output ='';
   //this is the table output
    $output .='<table class="table table-stripped" id="myTable">
               
                  <thead>
                   <tr class="header">
                       <th>NO</th>
                       <th>STAFF NAME</th>
                      <th>GENDER</th>
                      <th>PICTURE</th>
                      <th>EDIT</th>
                      <th>ACTIVATE</th>
                       <th>DISACTIVATE</th>
                      <th>DELETE</th>
                     </tr>  
                   </thead>
                   <tbody>
                ';
                $sqls = "SELECT * FROM teacher";
                 $runs    =mysqli_query($conn,$sqls) or die(mysqli_error($conn));
                 $no1 =1;
                 while($result = mysqli_fetch_assoc($runs)){
                                          
            $output .='             
                  <tr>
                     <td>'.$no1.'</td>
                     <td>'.$result['firstname'].' '.$result['othername'].'</td>
                     <td>'.$result['gender'].'</td>
                     <td><img src="../'.$result['picture'].'" width="30px" height="30px" style="border-radius: 40px;"></td>
                     <td><button type="button"  class="update btn btn-primary" id="'.$result['staff_id'].'">Edit<span class="glyphicon glyphicon-open"></button></td>
                     <td><button type="button" class="activate btn btn-primary" id="'.$result['staff_id'].'">Activate<span class="glyphicon glyphicon-open"></button></td>
                     <td><button type="button"  class="disactivate btn btn-warning" id="'.$result['staff_id'].'" >Disactivate<span class="glyphicon glyphicon-stop"></span></button></td>
                     <td><button type="button"  class="delete btn btn-danger" id="'.$result['staff_id'].'">Delete<span class="glyphicon glyphicon-remove"></span></button></td>
                         
                 </tr>';
            
                  $no1++;
                 
                 }
         $output .='</tbody>
      
    </table>';
       echo $output;

?>

<script type="text/javascript">
  $(document).ready(function(){
    $(".table").DataTable();
  });
</script>


                
      

   