<?php 
	
	  include_once('../../service/connection.php');
	$id =$_POST['delete'];
	$sql ="DELETE FROM examschedule WHERE id='".$id."'";
	$result =mysqli_query($conn,$sql);
  
    if($result)
    {
      	echo'<div class="alert alert-success">
            <button class="close" data-dismiss="alert" >&times;</button>
            <p>Exam Time Table Successfully Deleted</p>
            </div>';
    }else
    {
     
        echo'<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
            <p>Exam Time Table Not Successfully Deleted</p>
            </div>';
    }    


?>