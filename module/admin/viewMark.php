 <?php include('admin_header.php');?>
<?php include('grade_action.php');?>


   <?php
             if(isset($_GET['form']))
             {

     	          $form = base64_decode($_GET['form']);
              echo'<input type="hidden" id="class" value="'.$form.'">';
                 $sql ="SELECT * FROM ostudent INNER JOIN marksheet ON ostudent.Reg_no = marksheet.Reg_no WHERE form='".$form."' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."' ORDER BY firstname";
                 $runs    =mysqli_query($conn,$sql);
    ?>
   
<div class="formheadera">
  <div style="display: inline-block;">Mark Sheet for S <?php echo $form;?></div>
     <a href="mark_page.php" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Back</a>
      <button type="button" id="generate" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Generate Report</button>
      <button type="button" id="Report_sum" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Result Summary</button>
</div>
 <?php include'generate.inc.php'; ?>
  <?php
    $sql="SELECT * FROM ostudent INNER JOIN grade ON ostudent.Reg_no = grade.Reg_no INNER JOIN class ON class.c_id =ostudent.c_id WHERE term_id='".$_SESSION['term_id']."' AND c_name='".$form."' AND year='".$_SESSION['year']."' ORDER BY firstname";
    $subj ="SELECT sub_cod FROM osubject";
    $subjRes =mysqli_query($conn,$sql);
    $array =mysqli_fetch_assoc($subjRes);
          
          for ($i=0; $i < count($array); $i++) 
          { 
            $runst    =mysqli_query($conn,$sql);
          }
      $query ="SELECT * FROM ostudent WHERE c_id IN(SELECT c_id FROM class WHERE c_name='".$form."')";
      $queryResult =mysqli_query($conn,$query);
    ?>
     <table id="myTable">
          <thead>
              <tr class="header">
                 <th>No</th>
                 <th>STUDENT NAMES</th>
                 <th>STREAM</th>
                  <th>ENG</th>
                 <th>MTC</th>
                <th>PHY</th>
                <th>CHEM</th>
                <th>BIO</th>
                <th>HIST</th>
                <th>GEO</th>
                <th>COMM</th>
                 <th>AGRI</th>
                <th>CRE</th>
                 <th>FINE ART</th>
                <th>TOTAL</th>
              </tr>
          </thead>
          <tbody>
             <?php
             $no =1; 
          while($result=mysqli_fetch_assoc($runst))
          {
          $sub =$result['sub_cod'];
          } 
          while ($res =mysqli_fetch_assoc($queryResult)) 
          {
             echo'<tr>
                <td>'.$no.'</td>
                <td>'.strtoupper($res['firstname']).'  '.strtoupper($res['othername']).'</td>
                <td>'.$sub.'</td>
                <td>'.$sub.'</td>
                <td>'.$sub.'</td>
                <td>'.$sub.'</td>
                <td>'.$sub.'</td>
                <td>'.$sub.'</td>
                <td>'.$sub.'</td>
                <td>'.$sub.'</td>';
          echo'<td>Total</td>';
          $no++;
          }   
            ?>
        </tbody>
    </table>
         
<?php
  
  }
?>
</div>
<?php include('../../footer.php');?>
<script type="text/javascript">
   $(document).ready(function(){
     $(document).on("click",".print",function(){
         var id=$(this).attr("id");
         var form =$("#form").val();
         if(confirm("Confirm If you want to print")){
           window.location="single_student.php?id="+id+"&form="+form+"";
         }
     });
     $(document).on("click","#generate",function(){
       
      var form = $("#class").val();
       window.location="generate.php?form="+form+"";
     });
     $(document).on("click","#Report_sum",function(){
      var form = $("#class").val();
       window.location="Result_Summary.php?form="+form+"";
     });
     $("table").DataTable();
   });
</script>
