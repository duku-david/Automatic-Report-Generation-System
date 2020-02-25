<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


   <table id="myTable">
  <tr class="header">
    <thead>
         <th>ID</th>
         <th>NAME</th>
         <th>BOT(30%)</th>
        <th>EOT(70%)</th>
        <th>TOTAL</th>
        <th>AVG</th>
        <th>GRADE</th>
        <th>UPDATE</th>
        
     </thead>
  </tr>
  
  <tbody>
     <?php
                 include 'connection.php'; 
                $sqls = "SELECT * FROM `grade` INNER JOIN osubject ON grade.sub_cod = osubject.sub_cod WHERE Reg_no='PP/19/S1A/02' ";
                 $runs    =mysqli_query($conn,$sqls);
                  
                 while($result = mysqli_fetch_assoc($runs)){
                  echo"<tr>";
                   echo"<form method='post' action='sample_update.php'>";
                       echo "<td>".$result['id']."</td>";
                      echo "<td>".$result['name']."</td>";
                      echo "<td><input type='text' value='".$result['BOT']."' name='updateBOT'> </td>";
                      echo "<td><input type='text' value='".$result['EOT']."' name='updateEOT'>";
                      echo "<input type='hidden' value='".$result['id']."' name='id' style='display:none;'> </td>";
                      echo "<td>".$result['total']."</td>";
                      echo "<td>".$result['AVG']."</td>";
                      echo "<td>".$result['grad']."</td>";
                      echo "<td><input type='submit' class='btn btn-primary' value='update' name='update'> </td>";
                   echo "</form>";
                  echo "</tr>";
                 }

    ?>
  </tbody>
  
</table>


</body>
</html>



       

    <?php

       function Grade($grade)
       {
          if($grade < 0 || $grade > 100){
               return"Max Error";
          }else if($grade <=100 && $grade >=75){
               return"D 1";
          }else if($grade <=74 && $grade >=70){
               return"D 2";
          }else if($grade <=69 && $grade >=65){
               return"C 3";
          }else if($grade <=64 && $grade >=60){
               return"C 4";
          }else if($grade <=59 && $grade >=55){
               return"C 5";
          }else if($grade <=54 && $grade >=50){
               return"C 6";
          }else if($grade <=49 && $grade >=45){
               return"P 7";
          }else if($grade <=44 && $grade >=40){
               return"P 8";
          }else if($grade <=39 && $grade >=0){
               return"F 9";
          }
       }


    ?>