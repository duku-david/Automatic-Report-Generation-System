<?php
	include('../../service/connection.php');
if(isset($_POST['present']))
{
	$sid=$_POST['initials'];
	$attendmon = "SELECT DISTINCT(date) FROM attendance WHERE attendedid='$sid'";
	$resmon = mysqli_query($conn,$attendmon);
	echo "<tr> <th>Attended All Dates:</th></tr>";
	while($r=mysqli_fetch_array($resmon))
	{
	 echo "<tr><<td>",$r['date'],"</td></tr>";
	}
}
if(isset($_POST['absent']))
{
	 $sid=$_POST['initials'];
	$attendmon = "SELECT DISTINCT (date) FROM attendance WHERE  date not in (select DISTINCT(date) from attendance where attendedid='$sid' )";
	$resmon = mysqli_query($conn,$attendmon);
	echo "<tr> <th>Absent All Dates:</th></tr>";
	while($r=mysqli_fetch_array($resmon))
	{
	 echo "<tr><<td>",$r['date'],"</td></tr>";

	}
}
?>