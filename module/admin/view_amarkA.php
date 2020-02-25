 <?php include('admin_header.php');?>
<?php include('grade_action.php');?>


   <?php
if(isset($_GET['c_id']))
{

          $c_id = base64_decode($_GET['c_id']);
         $sql ="SELECT * FROM amarks INNER JOIN astudent ON amarks.Reg_no=astudent.Reg_no WHERE c_id='".$c_id."' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."' ORDER BY firstname";
         $runs1    =mysqli_query($conn,$sql);          
    ?>
   
    <div class="formheadera">
    <div style="display: inline-block;">Mark Sheet for <?php echo $c_id;?></div>
      <a href="mark_page.php" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Back</a>
      <a href="aGenerate.php?c_id=<?php echo $_GET['c_id'];?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Generate Report</a>
      <a href="aResult_Summary.php?c_id=<?php echo $_GET['c_id'];?>" style="float: left; margin-left: 20px; margin-top: 3px;" class="btn btn-primary">Result Summary</a>
    </div>

    <div class="main-wrappings">
      <?php //include'view_amarkA.inc.php'; ?>
      <?php
      $sqlm="SELECT * FROM amarksheet INNER JOIN astudent ON amarksheet.Reg_no = astudent.Reg_no WHERE c_id='".$c_id."' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."' ORDER BY firstname";
      $runs    =mysqli_query($conn,$sqlm) or die(mysqli_error($conn));
  if($c_id=="S5Science" || $c_id=="S6Science")
  {
  ?>
  <table id="myTable">

  
  <thead>
      <tr class="header">
        <th>No</th>
        <th>STUDENT NAMES</th>
        <th>FORM</th>
        <th>PHY</th>
        <th>MTC</th>
        <th>BIO</th>
        <th>AGRI</th>
        <th>CHEM</th>
        <th>ECON</th>
        <th>ICT</th>
        <th>GP</th>
        <th>TOTAL</th>
     </tr>
   </thead>
  <tbody>
   <?php
        $no1=1;
       while($result = mysqli_fetch_assoc($runs)){
           
        echo"<tr>";

          echo "<td>".$no1." </td>";
           echo "<td>".strtoupper($result['firstname'])."  ".strtoupper($result['othername'])." </td>";
            echo "<td>".$result['c_id']." </td>";
                echo "<td>".$result['physics']." </td>";
                echo "<td>".$result['mathematics']." </td>";
                echo "<td>".$result['biology']." </td>";
                echo "<td>".$result['agriculture']." </td>";
                echo "<td>".$result['chemistry']." </td>"; 
                echo "<td>".$result['economics']." </td>";
                echo "<td>".$result['computer']." </td>";
                echo "<td>".$result['gp']." </td>";
                echo "<td>".((int)$result['physics']+(int)$result['mathematics'] + (int)$result['biology'] + (int)$result['agriculture'] + (int)$result['chemistry'] +(int)$result['economics'] + (int)$result['computer'] + (int)$result['gp'])."</td>";
        echo "</tr>";
        $no1++;
       }

?>
    </tbody>

    </table>  
  <?php
  }else if($c_id=="S5Art" || $c_id=="S6Art")
  {
   ?>
  <table id="myTable">
    <thead>
      <tr class="header">
        <th>No</th>
        <th>STUDENT NAMES</th>
        <th>FORM</th>
        <th>HIST</th>
        <th>GEO</th>
        <th>ECON</th>
        <th>DIVI</th>
        <th>S-MATH</th>
        <th>ICT</th>
        <th>GP</th>
        <th>TOTAL</th>
      </tr>
     </thead>
     <tbody>
       <?php
           $no1=1;
               while($result = mysqli_fetch_assoc($runs)){
            echo"<tr>";
                echo "<td>".$no1." </td>";
                echo "<td>".strtoupper($result['firstname'])."  ".strtoupper($result['othername'])." </td>";
                echo "<td>".$result['c_id']." </td>";
                echo "<td>".$result['history']." </td>";
                echo "<td>".$result['geography']." </td>";
                echo "<td>".$result['economics']." </td>";
                echo "<td>".$result['divinity']." </td>";
                echo "<td>".$result['lit']." </td>"; 
                echo "<td>".$result['sub_math']." </td>";
                echo "<td>".$result['gp']." </td>";
                echo "<td>".((int)$result['history']+(int)$result['geography'] + (int)$result['economics'] + (int)$result['divinity'] + (int)$result['lit'] +(int)$result['sub_math'] + (int)$result['gp'])."</td>";
             echo "</tr>";
                $no1++;
               }
     // function sum(array())
     // {

     // }
  ?>
  </tbody>

  </table>
<?php
  } 

}?>
</div>
<?php include('../../footer.php');?>