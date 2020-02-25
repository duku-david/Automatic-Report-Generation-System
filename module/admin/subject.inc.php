<?php
    if(isset($_POST['initials']))
    {
    	
    	include('../../service/connection.php');
    	// $term_id= $_POST['term'];
    	$initials= $_POST['initials'];
    	$sub_cod= $_POST['sub_cod'];
        $c_id  =$_POST['c_id'];
    	// $newarray = implode(",", $Reg_nos);

         $sql ="SELECT * FROM subjecttakenbyteacher WHERE sub_cod='".$sub_cod."' AND c_id='".$c_id."' AND initials='".$initials."' AND year='".$_POST['year']."'";
         $result1 = mysqli_query($conn,$sql) or die(mysqli_error($conn));
          $sql1 ="SELECT * FROM subjecttakenbyteacher WHERE sub_cod='".$sub_cod."' AND c_id='".$c_id."' AND year='".$_POST['year']."'";
         $result = mysqli_query($conn,$sql1) or die();
         if(mysqli_num_rows($result1) > 0)
         {
           echo'<div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p>You Have Already Taken The Subject</p></div>';
         }else if(mysqli_num_rows($result) > 0)
         {
           echo'<div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p> Subject Already Taken! Please take Another Subject</p></div>';
         }
         else
         {
            $sql ="INSERT INTO subjecttakenbyteacher(c_id,sub_cod,initials,year) VALUES('".$c_id."','".$sub_cod."','".$initials."','".$_POST['year']."')";
            $result =mysqli_query($conn,$sql);
            if($result){

            echo'<div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p> Successfully Registered </p></div>';
             }else
             {
                echo'<div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p> Not success </p></div>';
             }
         }
         
         
    	
    }


?>