<?php
if (isset($_POST['search'])) {

$search = $_POST['search'];
$term_id = $_POST['term_id'];
$year = $_POST['year'];
$var = @$_POST['search'];
$trimmed = trim($var); // trim whitespace from the stored variable

//rows to return
$limit = 10;
 $msgsearch="";
//check for an empty string and display a message.
	if($trimmed==""){
	$msgsearch.="<h4><font color='#ff0000'>Please submit a search term.</h4></font>";
	}
	
//check for search parameter
	if(!isset($var)){
	$msgsearch.='No search parameter';	
	exit;
	}	
include '../../service/connection.php';
//SQL query.
$query = "SELECT DISTINCT * from ostudent INNER join grade on ostudent.Reg_no = grade.Reg_no WHERE grade.Reg_no LIKE '%$trimmed%'  AND term_id='".$term_id."' AND year='".$year."' OR c_id IN(SELECT c_id FROM class WHERE c_name LIKE '%$trimmed%') OR firstname LIKE '%$trimmed%' OR othername LIKE '%$trimmed%'";

$result = mysqli_query($conn,$query);

	if(mysqli_num_rows($result)==0){
	$msgsearch.="<h4><font color='#0000ff'>No Student with such name found.</h4></font>";
	}
	else{

		// header("Location:search_results.php?trimmed=$trimmed");
		include("search_results.php");
	 $msgsearch.="";	
	
	}
echo $msgsearch;
}
?>

