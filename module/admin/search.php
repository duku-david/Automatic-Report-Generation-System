<?php
// if (isset($_GET['search'])) {
// 	# code...

$search = $_GET['search'];
$term_id = $_GET['term_id'];
$year = $_GET['year'];
$var = @$_GET['search'];
$trimmed = trim($var); // trim whitespace from the stored variable

//rows to return
$limit = 10;

//check for an empty string and display a message.
	if($trimmed==""){
	$msgsearch="<h4><font color='#ff0000'>Please submit a search term.</h4></font>";
	// include "index.php";
	
	// header("Location: index.php?searchError");
	include'index.php';
	exit;
	}
	
//check for search parameter
	if(!isset($var)){
	echo 'No search parameter';	
	exit;
	}	
	

include 'connection.php';
	
//SQL query.
$query = "SELECT DISTINCT * from ostudent INNER join grade on ostudent.Reg_no = grade.Reg_no WHERE grade.Reg_no LIKE '%$trimmed%'  AND term_id='".$term_id."' AND year='".$year."' OR form LIKE '%$trimmed%' OR firstname LIKE '%$trimmed%' OR othername LIKE '%$trimmed%'";

$result = mysqli_query($conn,$query);

	if(mysqli_num_rows($result)==0){
	$msgsearch="<h4><font color='#0000ff'>No Student with such name found.</h4></font>";
	include "index.php";
	exit;
	}
	else{
	include 'search_results.php';	
	
	}
	
// }
?>

