<?php
include_once('../../service/connection.php');
	if(isset($_POST['delete']))
	{
		include_once('../../service/connection.php');
		$msg ='';
		$id =$_POST['id'];
		$sql ="DELETE FROM `subjecttakenbyteacher` WHERE id='".$id."'";
		$result =mysqli_query($conn,$sql) or die(mysqli_error($conn));
		if($result)
		{
			 $msg .='<div class="alert alert-success">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>Subject Successfully Deleted</p>
            </div>';
		}else
		{
			$msg .='<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>Subject Not Successfully Deleted</p>
            </div>';
		}
		echo $msg;
	}

	if(isset($_POST['adelete']))
	{
		include_once('../../service/connection.php');
		$msg ='';
		$id =$_POST['id'];
		$sql ="DELETE FROM asubjecttakenbyteacher WHERE id='".$id."'";
		$result =mysqli_query($conn,$sql);
		if($result)
		{
			 $msg .='<div class="alert alert-success">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>Student Successfully Deleted</p>
            </div>';
		}else
		{
			$msg .='<div class="alert alert-danger">
            <button class="close" data-dismiss="alert" >&times;</button>
             <p>Student Not Successfully Deleted</p>
            </div>';
		}
		echo $msg;
	}
	
?>