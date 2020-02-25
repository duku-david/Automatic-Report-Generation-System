<?php include('../../service/connection.php');?>
   
  <table id="myTable">
  <tr class="header">
  	<thead>
         <th>ID</th>
         <th>PICTURE</th>
         <th>FULL NAME</th>
      	 <th>REG_NUMBER</th>
         <th>BOT(30%)</th>
	      <th>EOT(70%)</th>
        <th>TOTAL</th>
        <th>UPDATE</th>
	      
     </thead>
  </tr>
  
  <tbody>
  	 <?php
                 
                 $queryt = "SELECT * FROM ostudent INNER JOIN grade ON ostudent.Reg_no = grade.Reg_no WHERE grade.sub_cod='".$student."'";
                 $run    =mysqli_query($conn,$queryt);

                 while($result = mysqli_fetch_assoc($run)){
                  echo"<tr>";
                  echo"<form method='post' action='update.php'>";
                  echo "<td>".$result['stud_id']." </td>";
                   echo "<td><img src=".$result['picture']." width='50px' height='50px' style='border-radius: 40px;'> </td>";
                   echo "<td>".strtoupper($result['firstname'])."  ".strtoupper($result['othername'])." </td>";
                     echo "<td>".$result['Reg_no']." </td>";
                      echo "<td><input type='text' value='".$result['BOT']."' name='updateBOT'> </td>";
                      echo "<td><input type='text' value='".$result['EOT']."' name='updateEOT'>";
                      echo "<input type='hidden' value='".$result['id']."' name='id' style='display:none;'> </td>";
                      echo "<td>".$result['total']."</td>";
                      echo "<td><input type='submit' class='btn btn-primary' value='update' name='update'> </td>";
                      echo "</form>";
                     echo "</tr>";
                 }

                 $sqls = "SELECT name,BOT,total FROM `grade` INNER JOIN osubject ON grade.sub_cod = osubject.sub_cod WHERE Reg_no='PP/S1A/NO/002' ";
                 $runs    =mysqli_query($conn,$sqls);

    ?>
  </tbody>
  
</table>



<table id="myTable">
  <tr class="header">
    <thead>
         <th>ID</th>
         <th>PICTURE</th>
         <th>FULL NAME</th>
         <th>REG_NUMBER</th>
         <th>BOT(30%)</th>
        <th>EOT(70%)</th>
        <th>TOTAL</th>
        <th>UPDATE</th>
        
     </thead>
  </tr>
  
  <tbody>
     <?php
                 
                 $queryt = "SELECT * FROM ostudent INNER JOIN grade ON ostudent.Reg_no = grade.Reg_no WHERE grade.sub_cod='".$subject."'";
                 $run    =mysqli_query($conn,$queryt);

                 while($result = mysqli_fetch_assoc($run)){
                  echo"<tr>";
                  echo"<form method='post' action='update.php'>";
                  echo "<td>".$result['stud_id']." </td>";
                   echo "<td><img src=".$result['picture']." width='50px' height='50px' style='border-radius: 40px;'> </td>";
                   echo "<td>".strtoupper($result['firstname'])."  ".strtoupper($result['othername'])." </td>";
                     echo "<td>".$result['Reg_no']." </td>";
                      echo "<td><input type='text' value='".$result['BOT']."' name='updateBOT'> </td>";
                      echo "<td><input type='text' value='".$result['EOT']."' name='updateEOT'>";
                      echo "<input type='hidden' value='".$result['id']."' name='id' style='display:none;'> </td>";
                      echo "<td>".$result['total']."</td>";
                      echo "<td><input type='submit' class='btn btn-primary' value='update' name='update'> </td>";
                      echo "</form>";
                     echo "</tr>";
                 }

                 $sqls = "SELECT name,BOT,total FROM `grade` INNER JOIN osubject ON grade.sub_cod = osubject.sub_cod WHERE Reg_no='PP/S1A/NO/002' ";
                 $runs    =mysqli_query($conn,$sqls);

    ?>
  </tbody>
  
</table>