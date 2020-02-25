<?php
  if(isset($_POST['fetch']))
  {
    include('../../service/connection.php');
    $sub_cod =$_POST['sub_cod'];
    if($sub_cod=="B01")
    {
        $sql = "SELECT * FROM class WHERE stream ='Art' OR stream='Science'";
    $res =mysqli_query($conn,$sql);
    $msg ='';
   $msg.='<option value="000">Select class</option>';
      while($row =mysqli_fetch_assoc($res))
      {
       $msg.='<option value='.$row['c_id'].' >'.$row['c_id'].'</option>';  
      }
    }else{
    $sql = "SELECT * FROM class WHERE stream =(SELECT stream FROM asubject WHERE sub_cod='".$sub_cod."')";
    $res =mysqli_query($conn,$sql);
    $msg ='';
   $msg.='<option value="000">Select class</option>';
      while($row =mysqli_fetch_assoc($res))
      {
       $msg.='<option value='.$row['c_id'].' >'.$row['c_id'].'</option>';  
      }
    }
  echo $msg;
  }

    if(isset($_POST['c_id']))
    {
    	
    	include('../../service/connection.php');
    	$c_id= $_POST['c_id'];
    	$initials= $_POST['initials'];
    	$sub_cod= $_POST['sub_cod'];
        $msg ='';
        if($sub_cod=="000")
        {
          
            $msg.='<div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">&times;</button><div>Please Select Subject</div></div>';
        }else if($sub_cod=="000")
        {
            $msg.='<div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">&times;</button><div>Please Select Registration number</div></div>';
        }else
        {

        $sqls="SELECT * FROM asubjecttakenbyteacher WHERE initials='".$initials."' AND c_id='".$c_id."' AND sub_cod='".$sub_cod."'";
        $result=mysqli_query($conn,$sqls);
            if(mysqli_num_rows($result) > 0)
            {
                $msg ='<div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p> Subject Already Taken</p></div>';
            }else{
        		      $sql ="INSERT INTO asubjecttakenbyteacher(c_id,`sub_cod`,initials) VALUES('".$c_id."','".$sub_cod."','".$initials."')";
    		    	$res= mysqli_query($conn,$sql) or die(mysqli_error($conn));
    		    	
    		    	if($res)
    		    	{
    		    		$msg.='<div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p> Successfully Registered</p></div>';
    		    	}else
    		    	{
                $msg.'<div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert">&times;</button><p> not success</p></div>';
    		    	}
    		    	
        
                }
    	}
    echo $msg;
    	
    }


?>
