<?php
    session_start();
   include('../../service/connection.php');
   include('grade_action.php');
         $initials =$_SESSION['initials'];
         $c_id =$_SESSION['c_id'];
         $subject= $_SESSION['subject']; 
    
  if (isset($_POST['table_result'])) {
       $output ='';
       $output .='<table id="myTable">
  <tr class="header">
    <thead>
         <th>No</th>
         <th width="20%">FULL NAME</th>
         <th>REG_NUMBER</th>
         <th>MID T(30%)</th>
        <th>EOT(70%)</th>
         <th>TOTAL</th>
        <th>GRADE</th>
        <th>COMMENT</th>
        <th width="5%"></th>
         <th>UPDATE</th>
     </thead>
  </tr>
  
  ';
     
                 $sql ="SELECT * FROM (grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no) WHERE ostudent.c_id IN(SELECT c_id FROM subjecttakenbyteacher WHERE initials ='".$initials."' AND sub_cod='".$subject."' AND c_id='".$c_id."') AND grade.sub_cod='".$subject."' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."' ORDER BY firstname ";
                 $run    =mysqli_query($conn,$sql);
                 $no1= 1;

                 while($result = mysqli_fetch_assoc($run)){
                     
            $output .='<tbody>
                <tr id="tbl_tr'.$result['id'].'">
                     <td>'.$no1.'</td>
                     <td>'.strtoupper($result['firstname']).' '.strtoupper($result['othername']).'</td>
                     <td>'.$result['Reg_no'].'</td>
                     <td><input type="text" style="width: 50px;" value="'.$result['mid_term'].'" name="updateBOT" id="updateBOT'.$result['id'].'"> </td>
                     <td><input type="text" style="width: 50px;" value="'.$result['end_term'].'" name="updateEOT" id="updateEOT'.$result['id'].'"></td>
                     <td>'.$result['total'].'</td>
                        <td>'.$result['grade'].'</td>
                        <td>'.Comment($result['total']).'</td>
                        <td id="Result1'.$result['id'].'"></td>
                        <input type="hidden" name="sub_cod" id="sub_cod'.$result['id'].'" value='.$result['sub_cod'].'> 
                         <input type="hidden" id="stream" value='.$result['c_id'].' name="stream">
                        <input type="hidden" id="Reg_no'.$result['id'].'" value='.$result['Reg_no'].' name="Reg_no"> 
                         <input type="hidden" id="initials" value="'.strtoupper($initials).'" name="initials">
                         <input type="hidden" id="term_id'.$result['id'].'" value="'.$_SESSION['term_id'].'" name="term_id">
                        <td><button type="submit" id="'.$result['id'].'" class="save btn btn-primary" name="update"> Save</button></td>
                       
                </tr>';
          
             $no1++;
              }
            

 $output .=' </tbody>
  
</table>';
echo $output;
  }
  if(isset($_POST['id']))
  {
            $mid_term = $_POST['updateBOT'];
            $end_term = $_POST['updateEOT'];
            $sub_cod=$_POST['sub_cod'];
            $Reg_no = $_POST['Reg_no'];
             $stream = $_POST['c_id'];
             $term_id = $_POST['term_id'];
             $initials = $_POST['initials'];
            $id   =$_POST['id'];
            $total =($mid_term + $end_term);
            $grade  = Grade($total);
            $msg ='';

if( $mid_term > 30 || $end_term > 70 || $total > 100){
          echo '<script>alert("please enter BOT less than 30, EOT less than 70")</script>'; 
          $msg .='please enter BOT less than 30, EOT less than 70';
    }else
    {

         $sql ="SELECT SUM(total) AS old_total FROM grade WHERE sub_cod !='".$sub_cod."'AND Reg_no='".$Reg_no."' AND term_id ='".$term_id."'";
           $runs    =mysqli_query($conn,$sql);
           while($row = mysqli_fetch_assoc($runs))
          {
               $old_total =$row['old_total'];
              
          }
            $new_total =($old_total + $total);
          //getting subject name coresponding to the above subject code
          $query = mysqli_query($conn,"SELECT name FROM osubject WHERE sub_cod='".$sub_cod."'");
          $sub_name='';
          while ($row =mysqli_fetch_assoc($query))
          {
             $sub_name = $row['name']; 
          }  
          $sql = "UPDATE marksheet SET ".$sub_name."='".$total."',total='".$new_total."' WHERE Reg_no='".$Reg_no."' AND term_id='".$term_id."'";
           $result1 =mysqli_query($conn,$sql); 
            $sql1 = "UPDATE grade SET mid_term='".$mid_term."',end_term='".$end_term."',total='".$total."',grade='".$grade."',initials='".strtoupper($initials)."' WHERE id='".$id."'"; 
           $result2=mysqli_query($conn,$sql1);     
    
   //close while loop
  if($result2 && $result1){
          $msg .='Marks Successfully Saved';
       }else{
        $msg.=$sub_name;
            }
}
 echo $msg;  
}
?>