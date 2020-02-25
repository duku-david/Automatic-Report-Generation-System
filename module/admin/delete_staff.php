<?php
   include('connection.php');
    $staff_id = $_GET['delete'];
   if($staff_id =="1"){
     header("Location:view_staff.php");
   }else{

   	$query=mysqli_query($conn,"DELETE FROM staff WHERE staff_id='".$staff_id."'");
	
	if($query)
	{
		header("Location:view_staff.php");
	}
   }
	


?>
