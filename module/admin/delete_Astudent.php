<?php
   if(isset($_GET['adelete']))
   {
   	session_start();
   	 include('../../service/connection.php');
   		$id = $_GET['adelete'];
   		$sql ="SELECT * FROM astudent WHERE stud_id = '".$id."'";
   		$result = mysqli_query($conn,$sql);
   		if(mysqli_num_rows($result) > 0)
   		{
   		    while ($row =mysqli_fetch_assoc($result)) 
   		   {
   			$_SESSION['Reg_no'] = $row['Reg_no'];
   		   }	
   		
	   	  $sqld ="DELETE FROM astudent WHERE Reg_no='".$_SESSION['Reg_no']."'"; 
	   	  $sqlg ="DELETE FROM amarks WHERE Reg_no='".$_SESSION['Reg_no']."'";
            $sqls ="DELETE FROM amarksheet WHERE Reg_no='".$_SESSION['Reg_no']."'";  
	   	  $resultg = mysqli_query($conn,$sqlg);
	   	  $resulto = mysqli_query($conn,$sqld);
	   	  if($resulto && $resultg)
	   	  {
             
	   	  	 header("refresh:0; url=view_student.php");
	   	  	 exit();
	   	  }	else
	   	  {
	   	  	 echo '<script>alert("student not deleted")</script>'; 
	         header("refresh:0; url=view_student.php");
	         exit();
	   	  }
   	    }else
   	    {
   	    	header("refresh:0; url=view_student.php");
	   	  	 exit();
   	    }	
   }
  


?>