<?php

if(isset($_POST['asubject']))
  {
    include_once('../../service/connection.php');
    session_start();
    $output='';
     $output .='<table class="asubject table-bordered" id="myTable">
          <thead>
          <tr class="header">
               <th>NO</th>
               <th>SUBJECT NAME</th>
               <th>INITIALS</th>
                <th>STREAM</th>
              <th>DELETE</th>         
               </tr>
           </thead>
        <tbody>';
         $sqls = "SELECT * FROM asubject INNER JOIN asubjecttakenbyteacher ON asubjecttakenbyteacher.sub_cod =asubject.sub_cod WHERE asubject.sub_cod IN (SELECT sub_cod FROM `asubjecttakenbyteacher` WHERE  initials IN(SELECT initials FROM teacher)) AND year ='".$_SESSION['year']."'";
        $runs    =mysqli_query($conn,$sqls) or die(mysqli_error($conn));
        $no1=1;
        while($result = mysqli_fetch_assoc($runs))
        {
          $output .='<tr>
                    <td>'.$no1.'</td>
                    <td>'.$result['name'].'</td>
                    <td>'.$result['initials'].'</td>
                    <td>'.$result['c_id'].'</td>
                    <td><button class="adelete btn btn-danger" id="'.$result['id'].'">Delete<span  class="glyphicon glyphicon-remove"></span></button></td>  
                </tr>';
                $no1++;
        }
    $output .=' </tbody>
         </table>';
 echo $output;
  }
?>
 <script>
$(document).ready(function(){
     $('.asubject').DataTable();
  });
</script>