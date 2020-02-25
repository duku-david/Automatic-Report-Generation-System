<?php
	session_start();
   include_once('../../service/connection.php');
   include_once('grade_action.php');
         $initiala =$_SESSION['initials'];
         $c_id =$_SESSION['c_id'];
         $subjecta= $_SESSION['subject']; 
     function query1($Reg_no,$sub_cod,$term_id)
    { 
        include('../../service/connection.php');
        $sql ="SELECT * FROM amarks WHERE Reg_no='".$Reg_no."' AND sub_cod='".$sub_cod."' AND term_id='".$term_id."'";
        $result =mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result))
        {
             
              return  $row['total'];
        }
    }
     function query2($Reg_no,$sub_cod,$term_id)
    { 
        include('../../service/connection.php');
        $sql ="SELECT COUNT(term_id) AS num FROM amarks WHERE Reg_no='".$Reg_no."' AND sub_cod LIKE'%".$sub_cod."%' AND term_id='".$term_id."'";
        $result =mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result))
        {
             
              return  $row['num'];
        }
    }
    
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
     
                 $sql ="SELECT * FROM ((amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no) INNER JOIN asubject ON amarks.sub_cod = asubject.sub_cod) WHERE amarks.sub_cod='".$subjecta."' AND amarks.term_id='".$_SESSION['term_id']."' AND astudent.year='".$_SESSION['year']."' ORDER BY firstname ";
                 $run    =mysqli_query($conn,$sql);
                 $no1= 1;

                 while($result = mysqli_fetch_assoc($run)){
                     
            $output .='<tbody>
                <tr id="tbl_tr'.$result['mark_id'].'">
                     <td>'.$no1.'</td>
                     <td>'.strtoupper($result['firstname']).' '.strtoupper($result['othername']).'</td>
                     <td>'.$result['Reg_no'].'</td>
                     <td><input type="text" style="width: 50px;" value="'.$result['mid_term'].'" name="updateBOT" id="mid_term'.$result['mark_id'].'"> </td>
                     <td><input type="text" style="width: 50px;" value="'.$result['end_term'].'" name="updateEOT" id="end_term'.$result['mark_id'].'"></td>
                     <td>'.$result['total'].'</td>
                        <td>'.$result['grade'].'</td>
                        <td>'.Comment($result['total']).'</td>
                        <td id="Result1'.$result['mark_id'].'"></td>
                        <input type="hidden" name="sub_cod" id="sub_cod'.$result['mark_id'].'" value='.$result['sub_cod'].'> 
                         <input type="hidden" id="forma" value='.$result['c_id'].' name="form">
                        <input type="hidden" id="Reg_no'.$result['mark_id'].'" value='.$result['Reg_no'].' name="Reg_no"> 
                         <input type="hidden" id="initiala" value="'.strtoupper($initiala).'" name="initiala">
                         <input type="hidden" id="term_id'.$result['mark_id'].'" value="'.$_SESSION['term_id'].'" name="term_id">
                         <input type="hidden" id="stud_id" value="'.$result['stud_id'].'">
                        <td><button type="submit" id="'.$result['mark_id'].'" class="save btn btn-primary" name="update"> Save</button></td>
                       
                </tr>';
          
             $no1++;
              }
            

 $output .=' </tbody>
  
</table>';
echo $output;
  }
if(isset($_POST['mark_id']))
{
    $msg ="";
    $mid_term =$_POST['mid_term'];
    $end_term =$_POST['end_term'];
    $mark_id  =$_POST['mark_id'];
    $stud_id  =$_POST['stud_id'];
    $forma    =$_POST['forma'];
    $form     =$_POST['forma'];
    $initiala =$_POST['initiala'];
    $term_id  = $_POST['term_id'];
    $subjecta =$_POST['sub_cod'];
    $sub_cod =$_POST['sub_cod'];
    $Reg_no   = $_POST['Reg_no'];
    $total    = ($mid_term+$end_term);
    $grade    = Grade($total);
    // include'Aupdate_marks.inc.php';
    $sql="SELECT * FROM asubject WHERE sub_cod='".$sub_cod."'";
    $query =mysqli_query($conn,$sql);
    $q =mysqli_fetch_assoc($query);
    $subjectName=$q['section'];
    if($mid_term < 0 || $mid_term > 30)
    {
    $msg .="mid term must be between 0 and 30";
    }else if($end_term < 0 || $end_term > 100)
    {
    $msg .="end of term must be between 0 and 70";
    }
    else
    {
	   $sqls ="UPDATE amarks SET mid_term='".$mid_term."',end_term='".$end_term."',total='".$total."',grade='".$grade."',initials='".$initiala."' WHERE mark_id='".$mark_id."' AND term_id='".$term_id."'";
        $resultss = mysqli_query($conn,$sqls);

    if (($subjecta=="A01/1" || $subjecta=="A01/2") && $term_id=="1")
    {
         if($subjecta=="A01/1")
        {
            $old_total =query1($Reg_no,"A01/2",$term_id);  
        }else if($subjecta=="A01/2")
        {
            $old_total =query1($Reg_no,"A01/1",$term_id); 
        }

        $num =query2($Reg_no,"A01",$term_id);
    }else if(($subjecta=="A01/1" || $subjecta=="A01/2") && $term_id=="2")
    {
         if($subjecta=="A01/1")
        {
            $old_total =query1($Reg_no,"A01/2",$term_id);  
        }else if($subjecta=="A01/2")
        {
            $old_total =query1($Reg_no,"A01/1",$term_id); 
        }

        $num =query2($Reg_no,"A02",$term_id);
    }else if (($subjecta=="A01/1" || $subjecta=="A01/2") && $term_id=="3")
    {
         if($subjecta=="A01/1")
        {
            $old_total =query1($Reg_no,"A01/2",$term_id);  
        }else if($subjecta=="A01/2")
        {
            $old_total =query1($Reg_no,"A01/1",$term_id); 
        }
     
        $num =query2($Reg_no,"A02",$term_id);
    }else if(($subjecta=="A02/1" || $subjecta=="A02/2" || $subjecta=="A02/3") && $term_id=="1")
    {
        if($subjecta=="A02/1")
        {
            $qry1=query1($Reg_no,"A02/2",$term_id);
            $qry2=query1($Reg_no,"A02/3",$term_id);
        }else if($subjecta=="A02/2")
        {
            $qry1=query1($Reg_no,"A02/1",$term_id);
            $qry2=query1($Reg_no,"A02/3",$term_id);
        }else if($subjecta=="A02/3")
        { 
            $qry1=query1($Reg_no,"A02/1",$term_id);
            $qry2=query1($Reg_no,"A02/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"A02",$term_id);
    }else if(($subjecta=="A02/1" || $subjecta=="A02/2" || $subjecta=="A02/3") && $term_id=="2")
    {
        if($subjecta=="A02/1")
        {
            $qry1=query1($Reg_no,"A02/2",$term_id);
            $qry2=query1($Reg_no,"A02/3",$term_id);
        }else if($subjecta=="A02/2")
        {
            $qry1=query1($Reg_no,"A02/1",$term_id);
            $qry2=query1($Reg_no,"A02/3",$term_id);
        }else if($subjecta=="A02/3")
        { 
            $qry1=query1($Reg_no,"A02/1",$term_id);
            $qry2=query1($Reg_no,"A02/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"A02",$term_id);
    }else if (($subjecta=="A02/1" || $subjecta=="A02/2" || $subjecta=="A02/3") && $term_id=="3")
    {
        if($subjecta=="A02/1")
        {
            $qry1=query1($Reg_no,"A02/2",$term_id);
            $qry2=query1($Reg_no,"A02/3",$term_id);
        }else if($subjecta=="A02/2")
        {
            $qry1=query1($Reg_no,"A02/1",$term_id);
            $qry2=query1($Reg_no,"A02/3",$term_id);
        }else if($subjecta=="A02/3")
        { 
            $qry1=query1($Reg_no,"A02/1",$term_id);
            $qry2=query1($Reg_no,"A02/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"A02",$term_id);
    }else if(($subjecta=="A03/1" || $subjecta=="A03/2" || $subjecta=="A03/3") && $term_id=="1")
    {
        if($subjecta=="A03/1")
        {
            $qry1=query1($Reg_no,"A03/2",$term_id);
            $qry2=query1($Reg_no,"A03/3",$term_id);
        }else if($subjecta=="A03/2")
        {
            $qry1=query1($Reg_no,"A03/1",$term_id);
            $qry2=query1($Reg_no,"A03/3",$term_id);
        }else if($subjecta=="A03/3")
        { 
            $qry1=query1($Reg_no,"A03/1",$term_id);
            $qry2=query1($Reg_no,"A03/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"A03",$term_id);
    }else if(($subjecta=="A03/1" || $subjecta=="A03/2" || $subjecta=="A03/3") && $term_id=="2")
    {
        if($subjecta=="A03/1")
        {
            $qry1=query1($Reg_no,"A03/2",$term_id);
            $qry2=query1($Reg_no,"A03/3",$term_id);
        }else if($subjecta=="A03/2")
        {
            $qry1=query1($Reg_no,"A03/1",$term_id);
            $qry2=query1($Reg_no,"A03/3",$term_id);
        }else if($subjecta=="A03/3")
        { 
            $qry1=query1($Reg_no,"A03/1",$term_id);
            $qry2=query1($Reg_no,"A03/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"A03",$term_id);
    }else if(($subjecta=="A03/1" || $subjecta=="A03/2" || $subjecta=="A03/3") && $term_id=="3")
    {
        if($subjecta=="A03/1")
        {
            $qry1=query1($Reg_no,"A03/2",$term_id);
            $qry2=query1($Reg_no,"A03/3",$term_id);
        }else if($subjecta=="A03/2")
        {
            $qry1=query1($Reg_no,"A03/1",$term_id);
            $qry2=query1($Reg_no,"A03/3",$term_id);
        }else if($subjecta=="A03/3")
        { 
            $qry1=query1($Reg_no,"A03/1",$term_id);
            $qry2=query1($Reg_no,"A03/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"A03",$term_id);
     //litriture
    }else if (($subjecta=="A04/1" || $subjecta=="A04/2") && $term_id=="1")
    {
         if($subjecta=="A04/1")
        {
            $old_total =query1($Reg_no,"A04/2",$term_id);  
        }else if($subjecta=="A04/2")
        {
            $old_total =query1($Reg_no,"A04/1",$term_id); 
        }
        $num =query2($Reg_no,"A04",$term_id);
    }else if (($subjecta=="A04/1" || $subjecta=="A04/2") && $term_id=="2")
    {
         if($subjecta=="A04/1")
        {
            $old_total =query1($Reg_no,"A04/2",$term_id);  
        }else if($subjecta=="A04/2")
        {
            $old_total =query1($Reg_no,"A04/1",$term_id); 
        }
        $num =query2($Reg_no,"A04",$term_id);
    }else if (($subjecta=="A04/1" || $subjecta=="A04/2") && $term_id=="3")
    {
        if($subjecta=="A04/1")
        {
            $old_total =query1($Reg_no,"A04/2",$term_id);  
        }else if($subjecta=="A04/2")
        {
            $old_total =query1($Reg_no,"A04/1",$term_id); 
        }
        $num =query2($Reg_no,"A04",$term_id);
    }else if(($subjecta=="S01/1" || $subjecta=="S01/2" || $subjecta=="S01/3") && $term_id=="1")
    {
        if($subjecta=="S01/1")
        {
            $qry1=query1($Reg_no,"S01/2",$term_id);
            $qry2=query1($Reg_no,"S01/3",$term_id);
        }else if($subjecta=="S01/2")
        {
            $qry1=query1($Reg_no,"S01/1",$term_id);
            $qry2=query1($Reg_no,"S01/3",$term_id);
        }else if($subjecta=="S01/3")
        { 
            $qry1=query1($Reg_no,"S01/1",$term_id);
            $qry2=query1($Reg_no,"S01/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"S01",$term_id);
    }else if(($subjecta=="S01/1" || $subjecta=="S01/2" || $subjecta=="S01/3") && $term_id=="2")
    {
        if($subjecta=="S01/1")
        {
            $qry1=query1($Reg_no,"S01/2",$term_id);
            $qry2=query1($Reg_no,"S01/3",$term_id);
        }else if($subjecta=="S01/2")
        {
            $qry1=query1($Reg_no,"S01/1",$term_id);
            $qry2=query1($Reg_no,"S01/3",$term_id);
        }else if($subjecta=="S01/3")
        { 
            $qry1=query1($Reg_no,"S01/1",$term_id);
            $qry2=query1($Reg_no,"S01/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"S01",$term_id);
    }else if(($subjecta=="S01/1" || $subjecta=="S01/2" || $subjecta=="S01/3") && $term_id=="3")
    {
        if($subjecta=="S01/1")
        {
            $qry1=query1($Reg_no,"S01/2",$term_id);
            $qry2=query1($Reg_no,"S01/3",$term_id);
        }else if($subjecta=="S01/2")
        {
            $qry1=query1($Reg_no,"S01/1",$term_id);
            $qry2=query1($Reg_no,"S01/3",$term_id);
        }else if($subjecta=="S01/3")
        { 
            $qry1=query1($Reg_no,"S01/1",$term_id);
            $qry2=query1($Reg_no,"S01/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"S01",$term_id);
    }else if(($subjecta=="S02/1" || $subjecta=="S02/2" || $subjecta=="S02/3") && $term_id=="1")
    {
        if($subjecta=="S02/1")
        {
            $qry1=query1($Reg_no,"S02/2",$term_id);
            $qry2=query1($Reg_no,"S02/3",$term_id);
        }else if($subjecta=="S02/2")
        {
            $qry1=query1($Reg_no,"S02/1",$term_id);
            $qry2=query1($Reg_no,"S02/3",$term_id);
        }else if($subjecta=="S02/3")
        { 
            $qry1=query1($Reg_no,"S02/1",$term_id);
            $qry2=query1($Reg_no,"S02/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"S02",$term_id);
    }else if(($subjecta=="S02/1" || $subjecta=="S02/2" || $subjecta=="S02/3") && $term_id=="2")
    {
        if($subjecta=="S02/1")
        {
            $qry1=query1($Reg_no,"S02/2",$term_id);
            $qry2=query1($Reg_no,"S02/3",$term_id);
        }else if($subjecta=="S02/2")
        {
            $qry1=query1($Reg_no,"S02/1",$term_id);
            $qry2=query1($Reg_no,"S02/3",$term_id);
        }else if($subjecta=="S03/3")
        { 
            $qry1=query1($Reg_no,"S02/1",$term_id);
            $qry2=query1($Reg_no,"S02/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"S02",$term_id);
    }else if(($subjecta=="S02/1" || $subjecta=="S02/2" || $subjecta=="S02/3") && $term_id=="3")
    {
        if($subjecta=="S02/1")
        {
            $qry1=query1($Reg_no,"S02/2",$term_id);
            $qry2=query1($Reg_no,"S02/3",$term_id);
        }else if($subjecta=="S02/2")
        {
            $qry1=query1($Reg_no,"S02/1",$term_id);
            $qry2=query1($Reg_no,"S02/3",$term_id);
        }else if($subjecta=="S03/3")
        { 
            $qry1=query1($Reg_no,"S02/1",$term_id);
            $qry2=query1($Reg_no,"S02/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"S02",$term_id);
    }else if(($subjecta=="S03/1" || $subjecta=="S03/2" || $subjecta=="S03/3") && $term_id=="1")
    {   
        if($subjecta=="S03/1")
        {
            $qry1=query1($Reg_no,"S03/2",$term_id);
            $qry2=query1($Reg_no,"S03/3",$term_id);
        }else if($subjecta=="S03/2")
        {
            $qry1=query1($Reg_no,"S03/1",$term_id);
            $qry2=query1($Reg_no,"S03/3",$term_id);
        }else if($subjecta=="S03/3")
        { 
            $qry1=query1($Reg_no,"S03/1",$term_id);
            $qry2=query1($Reg_no,"S03/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"S03",$term_id);
    }else if(($subjecta=="S03/1" || $subjecta=="S03/2" || $subjecta=="S03/3") && $term_id=="2")
    {   
        if($subjecta=="S03/1")
        {
            $qry1=query1($Reg_no,"S03/2",$term_id);
            $qry2=query1($Reg_no,"S03/3",$term_id);
        }else if($subjecta=="S03/2")
        {
            $qry1=query1($Reg_no,"S03/1",$term_id);
            $qry2=query1($Reg_no,"S03/3",$term_id);
        }else if($subjecta=="S03/3")
        { 
            $qry1=query1($Reg_no,"S03/1",$term_id);
            $qry2=query1($Reg_no,"S03/2",$term_id); 
        }
        $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"S03",$term_id);
    }else if(($subjecta=="S03/1" || $subjecta=="S03/2" || $subjecta=="S03/3") && $term_id=="3")
    {   
        if($subjecta=="S03/1")
        {
            $qry1=query1($Reg_no,"S03/2",$term_id);
            $qry2=query1($Reg_no,"S03/3",$term_id);
        }else if($subjecta=="S03/2")
        {
            $qry1=query1($Reg_no,"S03/1",$term_id);
            $qry2=query1($Reg_no,"S03/3",$term_id);
        }else if($subjecta=="S03/3")
        { 
            $qry1=query1($Reg_no,"S03/1",$term_id);
            $qry2=query1($Reg_no,"S03/2",$term_id); 
        }
         $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"S03",$term_id);
    }else if (($subjecta=="S04/1" || $subjecta=="S04/2") && $term_id=="1"){
        if($subjecta=="S04/1")
        {
            $old_total =query1($Reg_no,"S04/2",$term_id);  
        }else if($subjecta=="S04/2")
        {
            $old_total =query1($Reg_no,"S04/1",$term_id); 
        }
        $num =query2($Reg_no,"S04",$term_id);
    }else if (($subjecta=="S04/1" || $subjecta=="S04/2") && $term_id=="2"){
        if($subjecta=="S04/1")
        {
            $old_total =query1($Reg_no,"S04/2",$term_id);  
        }else if($subjecta=="S04/2")
        {
            $old_total =query1($Reg_no,"S04/1",$term_id); 
        }
        $num =query2($Reg_no,"S04",$term_id);
    }else if (($subjecta=="S04/1" || $subjecta=="S04/2") && $term_id=="3"){
        if($subjecta=="S04/1")
        {
            $old_total =query1($Reg_no,"S04/2",$term_id);  
        }else if($subjecta=="S04/2")
        {
            $old_total =query1($Reg_no,"S04/1",$term_id); 
        }
        $num =query2($Reg_no,"S04",$term_id);
    }else if (($subjecta=="S05/1" || $subjecta=="S05/2") && $term_id=="1"){
        if($subjecta=="S05/1")
        {
            $old_total =query1($Reg_no,"S05/2",$term_id);  
        }else if($subjecta=="S05/2")
        {
            $old_total =query1($Reg_no,"S05/1",$term_id); 
        }
        $num =query2($Reg_no,"S05",$term_id);
    }else if (($subjecta=="S05/1" || $subjecta=="S05/2") && $term_id=="2"){
        if($subjecta=="S05/1")
        {
            $old_total =query1($Reg_no,"S05/2",$term_id);  
        }else if($subjecta=="S05/2")
        {
            $old_total =query1($Reg_no,"S05/1",$term_id); 
        }
        $num =query2($Reg_no,"S05",$term_id);
    }else if (($subjecta=="S05/1" || $subjecta=="S05/2") && $term_id=="3"){
        if($subjecta=="S05/1")
        {
            $old_total =query1($Reg_no,"S05/2",$term_id);  
        }else if($subjecta=="S05/2")
        {
            $old_total =query1($Reg_no,"S05/1",$term_id); 
        }
        $num =query2($Reg_no,"S05",$term_id);
    }else if (($subjecta=="S06/1" || $subjecta=="S06/2" || $subjecta=="S06/3") && $term_id=="1")
    {
        if($subjecta=="S06/1")
        {
            $qry1=query1($Reg_no,"S06/2",$term_id);
            $qry2=query1($Reg_no,"S06/3",$term_id);
        }else if($subjecta=="S06/2")
        {
            $qry1=query1($Reg_no,"S06/1",$term_id);
            $qry2=query1($Reg_no,"S06/3",$term_id);
        }else if($subjecta=="S06/3")
        { 
            $qry1=query1($Reg_no,"S06/1",$term_id);
            $qry2=query1($Reg_no,"S06/2",$term_id); 
        }
         $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"S06",$term_id);
    }else if (($subjecta=="S06/1" || $subjecta=="S06/2" || $subjecta=="S06/3") && $term_id=="2")
    {
        if($subjecta=="S06/1")
        {
            $qry1=query1($Reg_no,"S06/2",$term_id);
            $qry2=query1($Reg_no,"S06/3",$term_id);
        }else if($subjecta=="S06/2")
        {
            $qry1=query1($Reg_no,"S06/1",$term_id);
            $qry2=query1($Reg_no,"S06/3",$term_id);
        }else if($subjecta=="S06/3")
        { 
            $qry1=query1($Reg_no,"S06/1",$term_id);
            $qry2=query1($Reg_no,"S06/2",$term_id); 
        }
         $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"S06",$term_id);
    }else if (($subjecta=="S06/1" || $subjecta=="S06/2" || $subjecta=="S06/3") && $term_id=="3")
    {
        if($subjecta=="S06/1")
        {
            $qry1=query1($Reg_no,"S06/2",$term_id);
            $qry2=query1($Reg_no,"S06/3",$term_id);
        }else if($subjecta=="S06/2")
        {
            $qry1=query1($Reg_no,"S06/1",$term_id);
            $qry2=query1($Reg_no,"S06/3",$term_id);
        }else if($subjecta=="S06/3")
        { 
            $qry1=query1($Reg_no,"S06/1",$term_id);
            $qry2=query1($Reg_no,"S06/2",$term_id); 
        }
         $old_total =($qry1 + $qry2);
        $num =query2($Reg_no,"S06",$term_id);
    }else if (($subjecta=="S07/1" || $subjecta=="S07/2") && $term_id=="1")
    {
        if($subjecta=="S07/1")
        {
            $old_total =query1($Reg_no,"S07/2",$term_id);  
        }else if($subjecta=="S07/2")
        {
            $old_total =query1($Reg_no,"S07/1",$term_id); 
        }
        $num =query2($Reg_no,"S07",$term_id);
    }else if (($subjecta=="S07/1" || $subjecta=="S07/2") && $term_id=="2")
    {
        if($subjecta=="S07/1")
        {
            $old_total =query1($Reg_no,"S07/2",$term_id);  
        }else if($subjecta=="S07/2")
        {
            $old_total =query1($Reg_no,"S07/1",$term_id); 
        }
         $num =query2($Reg_no,"S07",$term_id);
    }else if (($subjecta=="S07/1" || $subjecta=="S07/2") && $term_id=="3")
    {
        if($subjecta=="S07/1")
        {
            $old_total =query1($Reg_no,"S07/2",$term_id);  
        }else if($subjecta=="S07/2")
        {
            $old_total =query1($Reg_no,"S07/1",$term_id); 
        }
         $num =query2($Reg_no,"S07",$term_id);
    }
        $sql ="UPDATE amarksheet SET ".$subjectName."='".round((($total + $old_total)/$num))."' WHERE Reg_no='".$Reg_no."' AND term_id='".$term_id."'";
        $result =mysqli_query($conn,$sql);

        if($resultss && $result)
        {
            $msg .="Updated";	
        }else
        {
              $msg .="Not Updated";	
              
        }
    }
echo $msg;
}

?>