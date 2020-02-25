<?php if(isset($_GET['form']))
 {
             	?>
	<?php include('admin_header.php');?>
	<?php include('grade_action.php');?>
	<?php //include('Result_Summary.inc.php');?>
  <?php
         $id = $_GET['form'];
        function count_Query($grade,$sub_cod,$id)
        {
          include"../../service/connection.php";
            $sql ="SELECT COUNT(grade) AS count_result FROM `grade` INNER JOIN ostudent ON grade.Reg_no=ostudent.Reg_no INNER JOIN class ON class.c_id =ostudent.c_id WHERE grade='".$grade."' AND sub_cod='".$sub_cod."' AND term_id='".$_SESSION['term_id']."' AND c_name='".$id."'";
             $Results=mysqli_query($conn,$sql);
              while($count_res =mysqli_fetch_assoc($Results))
              {
                 return $count_res['count_result'];
              }

        }
        function finding_table_rows($grade,$id)
        {
          $msg ='<td>'.count_Query($grade,"A03",$id).'</td>
                 <td>'.count_Query($grade,"A06",$id).'</td>
                 <td>'.count_Query($grade,"S02",$id).'</td>
                 <td>'.count_Query($grade,"S01",$id).'</td>
                 <td>'.count_Query($grade,"S03",$id).'</td>
                 <td>'.count_Query($grade,"S04",$id).'</td>
                 <td>'.count_Query($grade,"A01",$id).'</td>
                 <td>'.count_Query($grade,"A02",$id).'</td>
                 <td>'.count_Query($grade,"A05",$id).'</td>
                 <td>'.count_Query($grade,"A04",$id).'</td>
                 <td>'.count_Query($grade,"S05",$id).'</td>';
            return $msg;
        }


  ?>
          
          <div class="formheadera">
          	<div style="display: inline-block;">Result Summary For S <?php echo $id;?></div>
            <a href="view_amark.php?form=<?php echo $id;?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Back</a>
          </div>  
           <?php global $msg; echo $msg;?>
            <div class="main-wrappings">

       

      <table id="myTable">
    <tr class="header">
      <thead>
         <th></th>
        
          <th>ENG</th>
         <th>LIT</th>
         <th>MTC</th>
        <th>PHY</th>
        <th>CHEM</th>
        <th>BIO</th>
        <th>HIST</th>
        <th>GEO</th>
        <th>COMM</th>
        <th>CRE</th>
        <th>AGRI</th>
       </thead>
    </tr>
    
    <tbody>

     
      <tr>
         <td>Total D1</td>
          <?php echo finding_table_rows("D 1",$id)?>
      </tr>
      <tr>
         <td>Total D2</td>
         <?php echo finding_table_rows("D 2",$id)?>
      </tr>
      <tr>
         <td>Total C3</td>
         <?php echo finding_table_rows("C 3",$id)?>
      </tr>
      <tr>
         <td>Total C4</td>
        <?php echo finding_table_rows("C 4",$id)?>
      </tr>
      <tr>
         <td>Total C5</td>
          <?php echo finding_table_rows("C 5",$id)?>
      </tr>
      <tr>
         <td>Total C6</td>
         <?php echo finding_table_rows("C 6",$id)?>
      </tr>
      <tr>
         <td>Total P7</td>
         <?php echo finding_table_rows("P 7",$id)?>
      </tr>
      <tr>
         <td>Total P8</td>
          <?php echo finding_table_rows("P 8",$id)?>
      </tr>
      <tr>
         <td>Total F9</td>
         <?php echo finding_table_rows("F 9",$id)?>
      </tr>
    <tr>
      <td>Percentage</td>
    </tr>


      <?php
               
         //$max_result_rows =      

      ?>

    </tbody>
    
  </table>




  <div style="margin: 0px auto; width: 60%; margin-top: 20px;">
         <div style="background-color: #ECECFA; text-align: center; padding: 20px; font-size: 28px; color: #337AB7;">BEST FIVE PERFORMERS</div>
       
      <table id="myTable" style="margin-top: 0px;">
        
      <tr>
        
      </tr>
    <tr class="header">
      <thead>
        <th></th>
         <th>STUDENT NAMES</th>
         <th>REG. NO</th>
         <th>STREAM</th>
        <th>TOTAL</th>
       </thead>
    </tr>
    
    <tbody>
      <?php
               //Querying best five performers 
                 $id = $_GET['form'];

                 $sql ="SELECT * FROM ostudent INNER JOIN marksheet ON ostudent.Reg_no = marksheet.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$id."') AND term_id='".$_SESSION['term_id']."' ORDER BY total DESC LIMIT 5";
         $runs    =mysqli_query($conn,$sql);
                 $no=1;      
                 while($roww=mysqli_fetch_assoc($runs))
                 {
                  echo"<tr>";
                      echo "<td>".$no." </td>";
                     echo "<td>".strtoupper($roww['firstname'])."  ".strtoupper($roww['othername'])." </td>";
                     echo "<td>".$roww['Reg_no']." </td>";
                      echo "<td>".$roww['c_id']." </td>";
                        echo "<td>".$roww['total']." </td>";       
                  echo "</tr>";
                  $no++;
                 }

      ?>

    </tbody>
    
  </table>

</div>

 

  <div style="margin: 0px auto; width: 60%; margin-top: 20px;">
         <div style="background-color: #ECECFA; text-align: center; padding: 20px; font-size: 28px; color: #337AB7;">WORST FIVE PERFORMERS</div>
       
      <table id="myTable" style="margin-top: 0px;">
        
      <tr>
        
      </tr>
    <tr class="header">
      <thead>
        <th></th>
         <th>STUDENT NAMES</th>
         <th>REG. NO</th>
         <th>STREAM</th>
        <th>TOTAL</th>
       </thead>
    </tr>
    
    <tbody>
      <?php   
              
                //Querying worst five performers
                $sql ="SELECT * FROM ostudent INNER JOIN marksheet ON ostudent.Reg_no = marksheet.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$id."') AND term_id='".$_SESSION['term_id']."' ORDER BY total LIMIT 5";
         $run    =mysqli_query($conn,$sql);  
          $no1 =1;
                 while($roww=mysqli_fetch_assoc($run)){
                 
                  echo"<tr>";
                      echo "<td>".$no1." </td>";
                     echo "<td>".strtoupper($roww['firstname'])."  ".strtoupper($roww['othername'])." </td>";
                     echo "<td>".$roww['Reg_no']." </td>";
                      echo "<td>".$roww['c_id']." </td>";
                        echo "<td>".$roww['total']." </td>";                   
                  echo "</tr>";
                  $no1++;
                 }

      ?>

    </tbody>
    
  </table>

</div>

	      </div>
	    </div>
	</div>

	<script type="text/javascript" src="javascript/update_valid.js"></script>
	<?php include('../../footer.php');?>

<?php

 }
 ?>










