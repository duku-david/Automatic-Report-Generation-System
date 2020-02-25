
<?php
$host="localhost";
$user="root";
$pass="";
$db = "reportgeneration";
$conn = mysqli_connect($host,$user,$pass,$db);
if(!$conn){
die("Connection Error".mysql_error());
}

  
?>
