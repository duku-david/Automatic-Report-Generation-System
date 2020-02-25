
<?php
include('admin_auth.php');
	  if (isset($_POST['reg_no']))
 {
     include('../../service/connection.php');
    $c_id =$_POST['c_id'];
    $searchReg_no =strtoupper("".school."/".date('y')."/".$c_id."/");

    $sqls ="SELECT COUNT('Reg_no') AS row FROM `ostudent` WHERE c_id='".$c_id."' AND Reg_no LIKE '%".$searchReg_no."%'";
     $results =mysqli_query($conn,$sqls); 
        $row =mysqli_fetch_assoc($results);
    if($c_id=="S4")
    {
         if($row['row'] < 10)
         {
          $reg_n =strtoupper("".school."/".date('y')."/".$c_id."/00".($row['row'] +1).""); 
         echo $reg_n;
         }else
         {
            echo $reg_n =strtoupper("".school."/".date('y')."/".$c_id."/".($row['row'] +1)."");     
         }
    }else
    {
        if($row['row'] < 10)
        {
          $reg_n =strtoupper("".school."/".date('y')."/".$c_id."/0".($row['row'] +1).""); 
         echo $reg_n;
        }else
        {
            echo $reg_n =strtoupper("".school."/".date('y')."/".$c_id."/".($row['row'] +1)."");     
        }
    }
 }


if (isset($_POST['areg_no']))
 {
     include('../../service/connection.php');
    $c_id =$_POST['c_id'];
    $converted ="";
    if($c_id=="S5ART" || $c_id=="S6ART")
    {
        $converted =str_replace("ART", "A", $c_id);
    }else
    {
         $converted =str_replace("SCIENCE", "S", $c_id);    
    }
    
    
    $searchReg_no =strtoupper("".school."/".date('y')."/".$converted."/");

    $sqls ="SELECT COUNT('Reg_no') AS row FROM `astudent` WHERE c_id='".$c_id."' AND Reg_no LIKE '%".$searchReg_no."%'";
     $results =mysqli_query($conn,$sqls); 

        $row =mysqli_fetch_assoc($results);
  
    if($row['row'] < 10)
    {
      $reg_n =strtoupper("".school."/".date('y')."/".$converted."/0".($row['row'] +1).""); 
     echo $reg_n;
    }else
    {
        echo $reg_n =strtoupper("".school."/".date('y')."/".$converted."/".($row['row'] +1)."");      
    }
     
 }
?>
