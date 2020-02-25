<?php
 session_start();
   include('connection.php');
   include('grade_action.php');
         $initials =$_SESSION['initials'];
         $stream =$_SESSION['stream'];
        $subject= $_SESSION['subject']; 
   
        if (isset($_POST['table_result'])) {
        	// $initials=$_POST['initials'];
        	// $subject =$_POST['subject'];
        	// $stream  =$_POST['stream'];
       $output ='';
       $output .='<table id="myTable">
  <tr class="header">
    <thead>
         <th>No</th>
         <th>FULL NAME</th>
         <th>REG_NUMBER</th>
         <th>MID T(30%)</th>
        <th>EOT(70%)</th>
        <th>TOTAL</th>
        <th>GRADE</th>
        <th>COMMENT</th>
         <th>UPDATE</th>
     </thead>
  </tr>
  
  ';
     
                 $sql ="SELECT * FROM ((grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no) INNER JOIN osubject ON grade.sub_cod = osubject.sub_cod) WHERE grade.sub_cod='".$subject."' AND ostudent.stream='".$stream."' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."' ORDER BY firstname ";
                 $run    =mysqli_query($conn,$sql);
                 $no1= 1;

                 while($result = mysqli_fetch_assoc($run)){
                     
            $output .='<tbody>
                <tr>
                     <td>'.$no1.'</td>
                     <td>'.strtoupper($result['firstname']).' '.strtoupper($result['othername']).'</td>
                     <td>'.$result['Reg_no'].'</td>
                     <td><input type="text" style="width: 50px;" value='.$result['BOT'].' name="updateBOT" id="updateBOT'.$result['id'].'"> </td>
                     <td><input type="text" style="width: 50px;" value="'.$result['EOT'].'" name="updateEOT" id="updateEOT'.$result['id'].'"></td>
                      <td>'.$result['total'].'</td>
                        <td>'.$result['grad'].'</td>
                        <td>'.Comment($result['total']).'</td>
            
                        <input type="hidden" name="sub_cod" id="sub_cod'.$result['id'].'" value='.$result['sub_cod'].'> 
                         <input type="hidden" id="stream" value='.$result['stream'].' name="stream">
                         <input type="hidden" id="form" value='.$result['form'].' name="form">
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

?>