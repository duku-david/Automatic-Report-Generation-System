 
<?php
 include'admin_auth.php';
if(isset($_GET['form']))
{
    $form = $_GET['form'];
    include('../../service/connection.php');
    include('grade_action.php');
    include('generate.inc.php');
    include'aggregate.php';
                  
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=".rand().".doc");
header("Pragma:no-cache");
header("Expires: 0");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";

   ?>
 
   <style type="text/css">
     
#myTable {
     margin-bottom: 5px;
      width: 100%;
    border-collapse: collapse; /* Collapse borders*/
    font-size: 15px; /* Increase font-size */*/
}
#myTable,table,th,td{
   border: 1px solid #000000;
}
#myTable th {
    text-align: left; 
    padding: 2px; 
}
#myTable td {
    text-align: left; /* Left-align text */
    padding: 2px; 
}

#myTable tr {
    border: 1px solid #000000; 
}
.container
{
  margin: auto;
  width: 98%;
}
 </style>
   

   
    <?php
    $sql="SELECT * FROM ostudent INNER JOIN marksheet ON ostudent.Reg_no = marksheet.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."') AND term_id='".$_SESSION['term_id']."'";
          $runst    =mysqli_query($conn,$sql);
          $max =mysqli_num_rows($runst);
        
         $no =1;
     
        while($result=mysqli_fetch_assoc($runst))
      {
       
    ?>

   <div class="container" style=" border: 1px solid black; border-radius: 10px; padding: 10px; ">
    <div width="100%">
           <table width="100%" cellpadding="0" cellspacing="0" style="border: none;" >
              <tr style="border: none;">
                <td colspan="2" style="border: none; padding: 5px;">
                  <tr style="border: none;">
                    <td style="border: none; padding: 5px;"><img src="../image/pp.png" alt="not found" width="70" height="70">
                    </td>
                    <td style="border: none;"><p style=" color: blue; font-size: 20px;" align="center"> PROGRESSIVE REPORT YEAR <?php echo strtoupper( $_SESSION['year']);?> TERM <?php echo strtoupper( $_SESSION['term']);?></p>
                    </td>
                      <td style="border: none; padding: 5px;"><img align="right"  src='../<?php echo $result['picture'];?>' alt="not found" width="70" height="70">
                      </td>
                    </tr>
                </td>
              </tr>
              <tr style="border: none; padding: 5px;">
                 <td  style="border: none; padding: 5px;">STUDENT NO:</td>
                 <td style="border: none; padding: 5px;"><p align="center"><?php echo $result['Reg_no']; ?></p></td>
                 <td style="border: none; padding: 5px;"><p align="right">SEX: <?php echo $result['gender'];?></p></td>
             </tr>
             <tr style="border: none;">
                <td style="border: none; padding: 5px;">STUDENT NAME:</td>
                 <td style="border: none; padding: 5px;"><p align="center"><strong><?php echo strtoupper($result['firstname']);?> <?php echo strtoupper($result['othername'])?></strong></p></td>
                <td style="border: none; padding: 5px;"><p align="right">FORM: <?php echo $result['c_id'];?></p></td>
             </tr>
             <tr style="border: none; padding: 5px;">
                <td style="border: none; padding: 5px;">POSITION IN CLASS:</td>
                <td style="border: none; padding: 5px;"><p align="center"> <?php //echo $no; ?></p></td>
                <td style="border: none; padding: 5px;"><p align="right">OUT OF:<?php echo $max ?></p></td>
  
             </tr>
        </table>
      </div>
    
             <?php  $Reg_no = $result['Reg_no'];?>

           
            <?php include'gen_table.php'; ?>
        <div width="100%">
           <table width="98%" style="border: none; padding: 5px;">
              <tr style="border: none;">
                <td width="40%" style="border: none;">Aggregates for 8 best done Subjects: </td>
                <td style="border: none;"><span style="margin-left: 10px;"><?php echo $aggr; ?></span> </td>
                <td style="border: none;"><span style="margin-left: 10px;"> Division: </span></td>
                <td style="border: none;"> <span style="margin-left: 10px;"><?php echo $divs;?></span></td>
              </tr>
           </table>
           <table width="99%" style="border:1px solid black">
              <tr style="border: none;">
                <td style="border:none; "></td>
                <td style="border: none;">75 - 100= D1</td>
                <td style="border: none;">70 - 74 = C3</td>
                <td style="border: none;">55 - 59 = C5</td>
                <td style="border: none;">45 - 49 = P7</td>
                <td style="border: none;"></td>
              </tr>
              <tr style="border: none;">
                 <td colspan="5" style="border: none;">GRADE</td>
                 <td style="border: none;">00 - 39 = F9</td>
             </tr>
             <tr style="border: none;">
                <td width="15%" style="border: none;"></td>
                <td style="border: none;">70 - 74  = D2</td>
                <td style="border: none;">60 - 64 = C4</td>
                <td style="border: none;">50 - 54 = C6</td>
                <td style="border: none;">40 - 44 = P8</td>
             </tr>
           </table>
           <table width="99%" style="border: none;">
             <tr style="border: none;">
               <td width="98%" style="border: none;">Class Teacher's Remarks: ..................................................................................................................................</td>
             </tr>
             <tr style="border: none;">
               <td width="99%" style="border: none;">.............................................................................................................................................................................</td>
             </tr>
             <tr style="border: none;">
               <td width="98%" style="border: none;">Class Teacher's Remarks: ...................................................................................................................................</td>
             </tr>
             <tr style="border: none;">
               <td width="99%" style="border: none;">............................................................................................................................................................................</td>
             </tr>
             <tr style="border: none;">
               <td width="98%" style="border: none;">PROMOTED TO/REPEAT: ..................................................................................................................................</td>
             </tr>
             <tr style="border: none;">
               <td width="99%" style="border: none;">...........................................................................................................................................................................</td>
             </tr>
           </table>
          </div>
         
          
         
        
        <?php
           $nt="SELECT * FROM term WHERE term_id='".$_SESSION['term_id']."'";
           $res=mysqli_query($conn,$nt);
           $nts=mysqli_fetch_array($res);
          ?>
         <table width="98%" style="border: none; padding: 5px;">
            <tr style="border: none;" >
              <td width="30%" style="border: none;">NEXT TERM BEGINS ON:</td>
              <td style="border: none; text-align: center;"><?php echo $nts['start_date']; ?></td>
            </tr>
        </table>
      
            <div style="text-align: center; padding: 5px;">
         THIS REPORT CARD IS INVALID WITHOUT A SCHOOL STAMP
               </div>
        
</div>
    <?php
       $no++; 
         }           
echo "</body>";
echo "</html>";
  
}
?>

<script type="text/javascript">
       // window.print();
 </script> 

    