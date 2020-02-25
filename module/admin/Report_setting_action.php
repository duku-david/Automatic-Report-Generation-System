<?php 
if(isset($_POST['save_setting']))
{
    include('../../service/connection.php');
     $date =$_POST['date'];
     $term_id =$_POST['term_id'];
   $msg='';
     if (empty($date))
    {

       $msg.='<div class="alert alert-danger">
                        <button class="close" data-dismiss="alert" >&times;</button><p>Please Select Date</p></div>';
    }else
    {
            
           if (preg_match("/^[a-zA-Z]*$/", $date)) 
           {
                  $msg.='<div class="alert alert-danger">
                        <button class="close" data-dismiss="alert" >&times;</button><p>You Have Entered Invalid Character</p></div>';

           }else
           {
                 $sql = "SELECT * FROM term WHERE start_date='".$date."'";
                 $result = mysqli_query($conn,$sql);
                 if(mysqli_num_rows($result) > 0){
                      $msg.='<div class="alert alert-danger">
                        <button class="close" data-dismiss="alert" >&times;</button><p>date already set</p></div>';
                 }else
                 {

                   $sql = "UPDATE term SET start_date='".$date."' WHERE term_id='".$term_id."'";
                     $result = mysqli_query($conn,$sql);
                     if($result)
                     { 
                          $msg.='<div class="alert alert-success">
                        <button class="close" data-dismiss="alert" >&times;</button><p>Date Successfully Saved</p></div>';
                      }else
                      {
                          $msg.='<div class="alert alert-danger">
                        <button class="close" data-dismiss="alert" >&times;</button><p>Date Not Set</p></div>';
                      }
                }
                     
            }
                
       }
            
    echo $msg;        
} 


 ?>