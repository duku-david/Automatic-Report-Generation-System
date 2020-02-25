<?php
   include("../../service/connection.php");

if(isset($_POST['reg_no']))
{
  $error=$success='';
  $payment =array(
    'Reg_no'    =>$_POST['reg_no'],
    'amount'    =>$_POST['amount'],
    'month'     =>$_POST['month'],
    'year'      =>$_POST['year']
  );
  $sql ="SELECT * FROM ostudent WHERE Reg_no ='".$_POST['reg_no']."'";
  $result =mysqli_query($conn,$sql);
  if(mysqli_num_rows($result) > 0)
  {
      $sql ="INSERT INTO payment(Reg_no,amount,month,year) VALUES('".$payment['Reg_no']."','".$payment['amount']."','".$payment['month']."','".$payment['year']."')";
      $result =mysqli_query($conn,$sql);
      if($result)
      {
          $success.="Payment Successfuly Saved";
      }else
      {
         $error.="Payment Not Successfuly Saved";
      }
  }else
  {
      $error.="Registration Number does not exist! try again";
  }
  if($error)
    {
      echo'<div class="alert alert-danger">
              <button class="close" data-dismiss="alert" >&times;</button>
               <p>'.$error.'</p>
              </div>';
    }else if($success)
    {
       echo'<div class="alert alert-success">
              <button class="close" data-dismiss="alert" >&times;</button>
               <p>'.$success.'</p>
              </div>';
    }
   
}
if (isset($_POST['payment'])) 
{
  $year = $_POST['year'];
   $output='';
     $output .='<table class="table table-bordered" id="myTable">
          <thead>
          <tr class="header">
               <th>NO</th>
              <th>REGISTRATION NUMBER</th>
               <th>AMOUNT</th>
               <th>MONTH</th>
              <th>YEAR</th>
              <th>PAYMENT STATUS</th>
              <th>EDIT</th>
              <th>DELETE</th>         
               </tr>
           </thead>
        <tbody>';
         $sqls = "SELECT * FROM payment INNER JOIN ostudent ON ostudent.Reg_no =payment.Reg_no";
        $runs    =mysqli_query($conn,$sqls);
        $no1=1;
        while($result = mysqli_fetch_assoc($runs))
        {
          $output .='<tr>
                    <td>'.$no1.'</td>
                    <td>'.$result['Reg_no'].'</td>
                    <td>'.$result['amount'].'</td>
                     <td>'.$result['month'].'</td>
                    <td>'.$result['year'].'</td>
                     <td><button class="view btn btn-primary" id="'.$result['id'].'">View Payment Status<span class="glyphicon glyphicon-open"></button></td>
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

   