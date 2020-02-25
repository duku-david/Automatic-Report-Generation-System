<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['staff_id']) || (trim($_SESSION['staff_id']) =='') || (($_SESSION['privillage'])!='standard') ) {
		header("location:../../");
		exit();
	}
?>
