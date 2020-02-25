<?php
    session_start();
   include('../../service/connection.php');
   include('grade_action.php');
         $initials =$_SESSION['initials'];
         $stream =$_SESSION['stream'];
         $subject= $_SESSION['subject']; 
    
  if (isset($_POST['table_result'])) {
       $output ='';
       $output .='<table id="myTable">
  <tr class="header">
    <thead>
         <th>No</th>
         <th width="20%">FULL NAME</th>
         <th>REG_NUMBER</th>
         <th>MID T(10%)</th>
        <th>EOT(10%)</th>
         <th>TOTAL</th>
        <th>GRADE</th>
        <th>COMMENT</th>
        <th width="5%"></th>
         <th>UPDATE</th>
     </thead>
  </tr>
  
  ';
     
                 $sql ="SELECT * FROM ((grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no) INNER JOIN osubject ON grade.sub_cod = osubject.sub_cod) WHERE grade.sub_cod='".$subject."' AND ostudent.stream='".$stream."' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."' ORDER BY firstname ";
                 $run    =mysqli_query($conn,$sql);
                 $no1= 1;

                 while($result = mysqli_fetch_assoc($run)){
                     
            $output .='<tbody>
                <tr id="tbl_tr'.$result['id'].'">
                     <td>'.$no1.'</td>
                     <td>'.strtoupper($result['firstname']).' '.strtoupper($result['othername']).'</td>
                     <td>'.$result['Reg_no'].'</td>
                     <td><input type="text" style="width: 50px;" value='.$result['BOT'].' name="updateBOT" id="updateBOT'.$result['id'].'"> </td>
                     <td><input type="text" style="width: 50px;" value="'.$result['EOT'].'" name="updateEOT" id="updateEOT'.$result['id'].'"></td>
                     <td>'.$result['total'].'</td>
                        <td>'.$result['grad'].'</td>
                        <td>'.Comment($result['total']).'</td>
                        <td id="Result1'.$result['id'].'"></td>
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
  if(isset($_POST['id']))
  {
            $BOT = $_POST['updateBOT'];
            $EOT = $_POST['updateEOT'];
            $subject=$_POST['sub_cod'];
            $Reg_no = $_POST['Reg_no'];
             $stream = $_POST['stream'];
             $form = $_POST['form'];
             $term_id = $_POST['term_id'];
             $initials = $_POST['initials'];
            $id   =$_POST['id'];
            $total =($BOT + $EOT);
            $grad  = Grade($total);
            $msg ='';

    if( $BOT > 30 || $EOT > 70 || $total > 100){
              echo '<script>alert("please enter BOT less than 30, EOT less than 70")</script>'; 
              $msg .='please enter BOT less than 30, EOT less than 70';
        }else{

                 $sql ="SELECT * FROM marksheet WHERE Reg_no ='".$Reg_no."' AND term_id='".$term_id."'";
                 $runs    =mysqli_query($conn,$sql);

                  $sqlgi ="UPDATE grade SET initials='".strtoupper($initials)."' WHERE sub_cod ='".$subject."'AND Reg_no='".$Reg_no."' AND term_id='".$term_id."'";
                 $resultgi=mysqli_query($conn,$sqlgi);

                 while($result = mysqli_fetch_assoc($runs))
  {
                      
    
         if($subject=="A01"){
                  $sql1 = "UPDATE grade SET BOT='".$BOT."',EOT='".$EOT."',total='".$total."',grad='".$grad."' WHERE id='".$id."' AND term_id='".$term_id."'";

                 $sql = "UPDATE marksheet SET history='".$total."',total='".Sum($result['english'],$result['fine_arts'],$result['mathematics'],$result['physics'],$result['chemistry'],$result['biology'],$total,$result['geography'],$result['commerce'],$result['CRE'],$result['agriculture'])."' WHERE Reg_no='".$Reg_no."' AND term_id='".$term_id."'";
           $result1 =mysqli_query($conn,$sql1);
        if(mysqli_query($conn,$sql) && $result1 && $resultgi){
          $msg .='Marks Successfully Saved';
       }else{
        $msg.="not updated";
       }

            }else if($subject=="A02"){

                 $sql1 = "UPDATE grade SET BOT='".$BOT."',EOT='".$EOT."',total='".$total."',grad='".$grad."' WHERE id='".$id."' AND term_id='".$term_id."'";

                 $sql = "UPDATE marksheet SET geography='".$total."' ,total='".Sum($result['english'],$result['fine_arts'],$result['mathematics'],$result['physics'],$result['chemistry'],$result['biology'],$result['history'],$total,$result['commerce'],$result['CRE'],$result['agriculture'])."'  WHERE Reg_no='".$Reg_no."' AND term_id='".$term_id."'";

             $result1= mysqli_query($conn,$sql1);
        if(mysqli_query($conn,$sql) && $result1 && $resultgi){
          $msg .='Marks Successfully Saved';
       }else{
        $msg.="not updated";
       }
            } else if($subject=="A03"){

                $sql1 = "UPDATE grade SET BOT='".$BOT."',EOT='".$EOT."',total='".$total."',grad='".$grad."' WHERE id='".$id."' AND term_id='".$term_id."'";

                 $sql = "UPDATE marksheet SET english='".$total."' ,total='".Sum($total,$result['fine_arts'],$result['mathematics'],$result['physics'],$result['chemistry'],$result['biology'],$result['history'],$result['geography'],$result['commerce'],$result['CRE'],$result['agriculture'])."' WHERE Reg_no='".$Reg_no."' AND term_id='".$term_id."'";

              $result1= mysqli_query($conn,$sql1);
        if(mysqli_query($conn,$sql) && $result1 && $resultgi){
          $msg .='Marks Successfully Saved';
       }else{
        $msg.="not updated";
       }
            }else if($subject=="A04"){

                 $sql1 = "UPDATE grade SET BOT='".$BOT."',EOT='".$EOT."',total='".$total."',grad='".$grad."' WHERE id='".$id."' AND term_id='".$term_id."'";

                 $sql = "UPDATE marksheet SET CRE='".$total."' ,total='".Sum($result['english'],$result['fine_arts'],$result['mathematics'],$result['physics'],$result['chemistry'],$result['biology'],$result['history'],$result['geography'],$result['commerce'],$total,$result['agriculture'])."' WHERE Reg_no='".$Reg_no."' AND term_id='".$term_id."'";

             $result1 = mysqli_query($conn,$sql1);
        if(mysqli_query($conn,$sql) && $result1 && $resultgi){
          $msg .='Marks Successfully Saved';
       }else{
        $msg.="not updated";
       }
            }else if($subject=="A05"){

                $sql1 = "UPDATE grade SET BOT='".$BOT."',EOT='".$EOT."',total='".$total."',grad='".$grad."' WHERE id='".$id."' AND term_id='".$term_id."'";

                 $sql = "UPDATE marksheet SET commerce='".$total."' ,total='".Sum($result['english'],$result['fine_arts'],$result['mathematics'],$result['physics'],$result['chemistry'],$result['biology'],$result['history'],$result['geography'],$total,$result['CRE'],$result['agriculture'])."' WHERE Reg_no='".$Reg_no."' AND term_id='".$term_id."'";

            $result1=mysqli_query($conn,$sql1);
        if(mysqli_query($conn,$sql) && $result1 && $resultgi){
          $msg .='Marks Successfully Saved';
       }else{
        $msg.="not updated";
       }
            }else if($subject=="A06"){

                $sql1 = "UPDATE grade SET BOT='".$BOT."',EOT='".$EOT."',total='".$total."',grad='".$grad."' WHERE id='".$id."' AND term_id='".$term_id."'";

                 $sql = "UPDATE marksheet SET fine_arts='".$total."' ,total='".Sum($result['english'],$total,$result['mathematics'],$result['physics'],$result['chemistry'],$result['biology'],$result['history'],$result['geography'],$result['commerce'],$result['CRE'],$result['agriculture'])."' WHERE Reg_no='".$Reg_no."' AND term_id='".$term_id."'";

               $result1= mysqli_query($conn,$sql1);
        if(mysqli_query($conn,$sql) && $result1 && $resultgi){
          $msg .='Marks Successfully Saved';
       }else{
        $msg.="not updated";
       }
            }else if($subject=="S01"){

                $sql1 = "UPDATE grade SET BOT='".$BOT."',EOT='".$EOT."',total='".$total."',grad='".$grad."' WHERE id='".$id."' AND term_id='".$term_id."'";

                 $sql = "UPDATE marksheet SET physics='".$total."' ,total='".Sum($result['english'],$result['fine_arts'],$result['mathematics'],$total,$result['chemistry'],$result['biology'],$result['history'],$result['geography'],$result['commerce'],$result['CRE'],$result['agriculture'])."' WHERE Reg_no='".$Reg_no."' AND term_id='".$term_id."'";

                $result1= mysqli_query($conn,$sql1);
        if(mysqli_query($conn,$sql) && $result1 && $resultgi){
          $msg .='Marks Successfully Saved';
       }else{
        $msg.="not updated";
       }
            }else if($subject=="S02"){

                  $sql1 = "UPDATE grade SET BOT='".$BOT."',EOT='".$EOT."',total='".$total."',grad='".$grad."' WHERE id='".$id."' AND term_id='".$term_id."'";

                 $sql = "UPDATE marksheet SET mathematics='".$total."' ,total='".Sum($result['english'],$result['fine_arts'],$total,$result['physics'],$result['chemistry'],$result['biology'],$result['history'],$result['geography'],$result['commerce'],$result['CRE'],$result['agriculture'])."' WHERE Reg_no='".$Reg_no."' AND term_id='".$term_id."'";

            $result1= mysqli_query($conn,$sql1);
        if(mysqli_query($conn,$sql) && $result1 && $resultgi){
          $msg .='Marks Successfully Saved';
       }else{
        $msg.="not updated";
       }
            }else if($subject=="S03"){

                $sql1 = "UPDATE grade SET BOT='".$BOT."',EOT='".$EOT."',total='".$total."',grad='".$grad."' WHERE id='".$id."' AND term_id='".$term_id."'";

                 $sql = "UPDATE marksheet SET chemistry='".$total."' ,total='".Sum($result['english'],$result['fine_arts'],$result['mathematics'],$result['physics'],$total,$result['biology'],$result['history'],$result['geography'],$result['commerce'],$result['CRE'],$result['agriculture'])."' WHERE Reg_no='".$Reg_no."' AND term_id='".$term_id."'";

              $result1= mysqli_query($conn,$sql1);
        if(mysqli_query($conn,$sql) && $result1 && $resultgi){
          $msg .='Marks Successfully Saved';
       }else{
       $msg.="not updated";
       }
            }else if($subject=="S04"){
                  $sql1 = "UPDATE grade SET BOT='".$BOT."',EOT='".$EOT."',total='".$total."',grad='".$grad."' WHERE id='".$id."' AND term_id='".$term_id."'";
                
                 $sql = "UPDATE marksheet SET biology='".$total."' ,total='".Sum($result['english'],$result['fine_arts'],$result['mathematics'],$result['physics'],$result['chemistry'],$total,$result['history'],$result['geography'],$result['commerce'],$result['CRE'],$result['agriculture'])."' WHERE Reg_no='".$Reg_no."' AND term_id='".$term_id."'";

                $result1=  mysqli_query($conn,$sql1);
        if(mysqli_query($conn,$sql) && $result1 && $resultgi){
          $msg .='Marks Successfully Saved';
       }else{
        $msg.="not updated";
       }
            }else if($subject=="S05"){
                 $sql1 = "UPDATE grade SET BOT='".$BOT."',EOT='".$EOT."',total='".$total."',grad='".$grad."' WHERE id='".$id."' AND term_id='".$term_id."'";

                 $sql = "UPDATE marksheet SET agriculture='".$total."' ,total='".Sum($result['english'],$result['fine_arts'],$result['mathematics'],$result['physics'],$result['chemistry'],$result['biology'],$result['history'],$result['geography'],$result['commerce'],$result['CRE'],$total)."' WHERE Reg_no='".$Reg_no."' AND term_id='".$term_id."'";

                $result1=mysqli_query($conn,$sql1);
        if(mysqli_query($conn,$sql) && $result1 && $resultgi){
          $msg .='Marks Successfully Saved';
       }else{
        $msg.="not updated";
            }
       }

   //close while loop
  }
}
 echo $msg;  
}
?>
