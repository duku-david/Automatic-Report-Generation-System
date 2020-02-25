<?php
  include("../../service/connection.php");
 if(isset($_POST['view']))
 {
 	  $output ='';
 	   $id =$_POST['id'];
 		$sql ="SELECT * FROM ostudent INNER JOIN payment ON ostudent.Reg_no =payment.Reg_no WHERE payment.id='".$id."'";
 		$result =mysqli_query($conn,$sql) or die(mysqli_error($conn));
 		
 		if(mysqli_num_rows($result) > 0)
 		{
 			$output.='<table style="width:100%">';
 			
 			while($paymentarray = mysqli_fetch_array($result)){
 				$output.='
 				    <tr>
 				 		<td width="50%">FULLNAME</td>
				   		<td>'.$paymentarray['firstname'].' '.$paymentarray['othername'].'<td>
				  	</tr>
 				 	<tr>
 				 		<td>REGISTRAION NUMBER</td>
				   		<td>'.$paymentarray['Reg_no'].'<td>
				  	</tr>
				  	<tr>
				  		<td>AMOUNT PAID</td>
				   		<td>'.$paymentarray['amount'].'<td>
				  	</tr>
				  	<tr>
				  		<td>MONTH</td>
				  		<td>'.$paymentarray['month'].'<td>
				  	</tr>
				  	<tr>
				  		<td>YEAR</td>
				   		<td>'.$paymentarray['year'].'<td>
				 	</tr>
				';
				}	
		$output.='</table>';
 		}
 	echo $output;
 }

 if(isset($_POST['update']))
 {
 	$id =$_POST['id'];
 	$sql ="SELECT * FROM payment WHERE id='".$id."'";
 	$result =mysqli_query($conn,$sql);
 	if(mysqli_num_rows($result) > 0)
 	{
 			while ($row =mysqli_fetch_assoc($result))
 			{
 				echo json_encode($row);
 			}
 	}
 }

 if(isset($_POST['delete']))
 {
 	$error=$success='';
 	$id =$_POST['id'];
 	$sql ="DELETE FROM payment WHERE id='".$id."'";
 	$result =mysqli_query($conn,$sql);
 	if($result)
 	{
 		$success.="Data Successfully deleted";
 	}else
 	{
 		$error.="Not Successfully deleted";
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

?>
