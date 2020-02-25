<?php
include_once("../../service/connection.php");
session_start();
session_destroy();
mysqli_close($conn);
  if(isset($_GET['pass_change']))
  {
  		echo"<script>window.location='../..?pass_change'</script>";
  }else if($_GET['lock'])
  {
  	 echo"<script>window.location='../..'</script>";
  }else
  {
  	echo '<script>window.location="../..?logout"</script>';
  }
?>

