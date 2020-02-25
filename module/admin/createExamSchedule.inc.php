<?php
  include("../../service/connection.php");

   if (isset($_POST['class']))
 {
   $msg='';
    include('../../service/connection.php');
  
  $sql ="SELECT DISTINCT c_name FROM class WHERE stream !=('Art') AND stream !='Science'";
  $result =mysqli_query($conn,$sql);
  $msg.='<option value="000">Select class</option>';
  while($row =mysqli_fetch_assoc($result))
  {
   $msg.='<option value='.$row['c_name'].' > Senior '.$row['c_name'].'</option>';  
  }
  echo $msg;
 }
	if(isset($_POST['id']))
	{

		$error_m ='';
		$success_m='';
		$exams =[$_POST['id'],$_POST['examDate'],$_POST['examTime'],$_POST['sub_cod'],$_POST['c_id']];
		// $success_m.=$exams[4];
		if(empty($exams[1]))
		{
			$error_m.="Please Enter Date For The Examination";
		}else if(empty($exams[2]))
		{
			$error_m.="Please Enter Time For The Examination";
		}else if(empty($exams[3]))
		{
			$error_m.="Please Select Subject";
		}else
		{
			$sql ="SELECT * FROM examschedule WHERE sub_cod ='".$exams[3]."' AND c_name='".$exams[4]."'";
			$result =mysqli_query($conn,$sql);

			$sql2 ="SELECT * FROM examschedule WHERE time ='".$exams[2]."' AND c_name='".$exams[4]."' AND date='".$exams[1]."'";
			$result2 =mysqli_query($conn,$sql2);

			$sql1 ="SELECT * FROM osubject WHERE sub_cod ='".$exams[3]."'";
			$result1 =mysqli_query($conn,$sql1);
			$sub =mysqli_fetch_assoc($result1);
			if(mysqli_num_rows($result) > 0)
			{
				 $error_m .="Time Table Already Created For ".$sub['name']."";
			}else if(mysqli_num_rows($result2) > 0)
			{
				 $error_m .="".$exams[2]." Already Taken for ".$exams[1]."! Please Take Another One ";
			}else
			{
				$sql ="INSERT INTO examschedule(date,time,sub_cod,c_name) VALUE('".$exams[1]."','".$exams[2]."','".$exams[3]."','".$exams[4]."')";
				$query_result =mysqli_query($conn,$sql) or die(mysqli_error($conn));
				if($query_result)
				{
					$success_m .="Examination Time Table Successfully Created";
				}else
				{
					$error_m.="Examination Time Table Not Created";
				}
			}
				
		}

		if($error_m)
	    {
	      echo'<div class="alert alert-danger">
	              <button class="close" data-dismiss="alert" >&times;</button>
	               <p>'.$error_m.'</p>
	              </div>';
	    }else if($success_m)
	    {
	       echo'<div class="alert alert-success">
	              <button class="close" data-dismiss="alert" >&times;</button>
	               <p>'.$success_m.'</p>
	              </div>';
	    }

	}
?>