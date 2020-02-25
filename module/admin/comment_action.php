<?php
    if(isset($_POST['save_comment'])){
    	include('connection.php');
    	$names = mysqli_real_escape_string($conn,$_POST['names']);
    	$message = mysqli_real_escape_string($conn,$_POST['comment']);

    	if(empty($names)){
    		$error='<div style="color: #a94442; font-size:20px; background:#f2dede; border: 1px solid #a94442; border-radius:5px; margin:20px; margin-bottom:5px; text-align: center; ">Please fill comment field</div>';
               include('comment.php');
 
    	}else if(empty($message)){
            $error='<div style="color: #a94442; font-size:20px; background:#f2dede; border: 1px solid #a94442; border-radius:5px; margin:20px; margin-bottom:5px; text-align: center; ">Please fill name filed</div>';
               include('comment.php');
    	}else{
    		$sql ="SELECT * FROM comment WHERE name ='".$names."'";
    		$result = mysqli_query($conn,$sql);
    		$result_check = mysqli_num_rows($result);
    		if($result_check > 0){
              $error='<div style="color: #a94442; font-size:20px; background:#f2dede; border: 1px solid #a94442; border-radius:5px; margin:20px; margin-bottom:5px; text-align: center; ">You Have Already Commentted</div>';
               include('comment.php');
    		}else{
    			$sql ="INSERT INTO comment(name,message)VALUES('".$names."','".$message."')";
    			$result = mysqli_query($conn,$sql);
    			if($result){
                     $error="<div style ='color:green;font-size:20px; background:lightgreen; border: 1px solid green; text-align: center; border-radius:5px; margin:20px; margin-bottom:5px;'> comment successfully saved </div>";
                     include('comment.php');
    			}else{
                  $error='<div style="color: #a94442; font-size:20px; background:#f2dede; border: 1px solid #a94442; border-radius:5px; margin:20px; margin-bottom:5px; text-align: center; ">comment not successfully saved</div>';
               include('comment.php');
    			}
    		}
    	}
    }


?>
<div style="color: r"></div>