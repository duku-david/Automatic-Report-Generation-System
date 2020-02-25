<?php
               include('connection.php');
               include('grade_action.php');
                $sql="SELECT DISTINCT * FROM grade INNER JOIN osubject ON grade.sub_cod = osubject.sub_cod WHERE grade.cl_name='2' AND Reg_no='PP/19/S2A/01' ORDER BY total DESC ";
          $rund    =mysqli_query($conn,$sql);

         $sqlc="SELECT COUNT() AS count_div FROM grade INNER JOIN osubject ON grade.sub_cod = osubject.sub_cod WHERE grade.cl_name='2' AND Reg_no='PP/19/S2A/01' ORDER BY total DESC ";
          $runc    =mysqli_query($conn,$sql);
                  $index_gold = 1;
                  $max_rows = mysqli_num_rows($runc);
                 while($result1 = mysqli_fetch_assoc($rund)){
                    
                  echo"<tr>";
  
                   
                      //  echo "<td>".$result1['name']." </td>";
                      // echo "<td>".$result1['sub_cod']." </td>";
                      //  echo "<td>".$result1['BOT']." </td>";
                      //   echo "<td>".$result1['EOT']." </td>";
                      //    echo "<td>".$result1['total']." </td>";
                      //     echo "<td>".$result1['grad']." </td>";
                      //     echo "<td>".Comment($result1['total'])." </td>";
                      //     echo "<td>".Rank($result1['grad'])." </td>";
                  echo "</tr>";
                 }
        //echo'DIVISION'..'';
    echo' <table id="myTable">';
         

  echo'<tr class="header" style="border:2px solid black;">';
   echo' <thead>';

          echo'<th>SUBJECT</th>';
         echo'<th>CODE</th>';
         echo'<th>BOT/30</th>';
         echo'<th>EOT/70</th>';
        echo'<th>TOTAL/100</th>';
        echo'<th>GRADE</th>';
        echo'<th>REMARKS</th>';
        echo'<th>INITIALS</th>';
    echo '</thead>';
  echo'</tr>';
  
  echo'<tbody>';
     
         $sql="SELECT DISTINCT * FROM grade INNER JOIN osubject ON grade.sub_cod = osubject.sub_cod WHERE grade.cl_name='2' AND Reg_no='PP/19/S2A/01' ORDER BY total DESC ";
          $runs    =mysqli_query($conn,$sql);
      
                  $index_gold = 1;
                  $max_rows = mysqli_num_rows($runs);
                 while($result = mysqli_fetch_assoc($runs)){
                    
                  echo"<tr>";
  
                   
                       echo "<td>".$result['name']." </td>";
                      echo "<td>".$result['sub_cod']." </td>";
                       echo "<td>".$result['BOT']." </td>";
                        echo "<td>".$result['EOT']." </td>";
                         echo "<td>".$result['total']." </td>";
                          echo "<td>".$result['grad']." </td>";
                          echo "<td>".Comment($result['total'])." </td>";
                          echo "<td>".Rank($result['grad'])." </td>";
                  echo "</tr>";
                 }
                 echo'<tr>';
                 //count(Rank($result['grad']));
                 echo'</tr>';
              
        echo'</tbody>';
        echo'</table>';


        function Rank($total)
        {
          if($total=="D 1"){
          	return 1;
          }else if($total=="D 2")
          {
          	return 2;
          }else if($total=="C 3")
          {
          	return 3;
          }else if($total=="C 4")
          {
          	return 4;
          }else if($total=="C 5")
          {
          	return 5;
          }else if($total=="C 6")
          {
          	return 6;
          }else if($total=="P 7")
          {
          	return 7;
          }else if($total=="P 8")
          {
          	return 8;
          }else if($total=="F 9")
          {
          	return 9;
          }
        }


?>