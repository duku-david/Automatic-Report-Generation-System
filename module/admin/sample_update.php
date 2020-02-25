<?php
   include('connection.php');
    include('grade_action.php');

    $BOT = $_POST['updateBOT'];
    $EOT = $_POST['updateEOT'];
    $total =($BOT + $EOT);
    $AVG   =($total/2);
    $grad  = Grade($total);
   
  
    if( $BOT > 30 || $EOT > 70 || $total > 100){
     $msg='<div style="color: #a94442; font-size:20px; background:#f2dede; border: 1px solid #a94442; border-radius:5px; margin:20px; margin-bottom:5px; text-align: center; ">please enter BOT less than 30, EOT less than 70</div>';
        include('sample.php');

    }else{



   $sql = "UPDATE grade SET BOT='".$BOT."',EOT='".$EOT."',total='".$total."',AVG='".$AVG."',grad='".$grad."' WHERE id='".$_POST['id']."'";

   if(mysqli_query($conn,$sql)){
   	header("refresh:1; url=sample.php");
   }else{
   	echo"not updated";
   }
  } 
?>