<?php
    include'admin_auth.php';
if(isset($_GET['form']))
{
              $form = $_GET['form'];
               include('../../service/connection.php');
             include('grade_action.php');
             // include('generate.inc.php');
             // include'aggregate.php';
       
    $sql ="SELECT DISTINCT * FROM grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."')AND sub_cod='A03' AND term_id='1' AND year='2019' ";
    $result =mysqli_query($conn,$sql);
    $sqlH ="SELECT DISTINCT * FROM grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."')AND sub_cod='A01' AND term_id='1' AND year='2019' ";
    $resultH =mysqli_query($conn,$sqlH);
?>
     <table id="myTable">
       <tr class="header">
            <thead>
                 <th>SUBJECT</th>
                 <th>CODE</th>
                  <th>MOT/30</th>
                 <th>EOT/70</th>
                 <th>TOTAL/100</th>
                <th>GRADE</th>
                <th>REMARKS</th>
                <th>INITIALS</th>
             </thead>
          </tr>
          
          <tbody>

            
             <?php

                $sqlst="SELECT SUM(total) AS sumT FROM grade WHERE Reg_no='".$Reg_no."'";
                $ress =mysqli_query($conn,$sqlst);
                while ($row = mysqli_fetch_assoc($ress)) {
                    $sumt = $row['sumT'];
                }

            
    echo"<tr>";
             echo "<td>English Language </td>";
             // echo generate_manipulate("A03",$form);
             while ($result1 =mysqli_fetch_assoc($result))
             {
		     echo'<td>'.$result1['sub_cod'].'</td>
		         <td>'.$result1['mid_term'].'</td>
		         <td>'.$result1['end_term'].'</td>
		         <td>'.$result1['total'].'</td>
		         <td>'.grade($result1['total']).'</td>
		         <td>'.Comment($result1['total']).'</td>
		         <td>'.$result1['initials'].'</td>';
             }
       echo "</tr>";

        echo"<tr>";
             echo "<td>Mathematics </td>";
             // echo generate_manipulate("S02",$form);
          
       echo "</tr>";

        echo"<tr>";
            echo "<td>Geography </td>";
            // echo generate_manipulate("A02",$form);
           
       echo "</tr>";

        echo"<tr>";
             echo "<td>Biology </td>";
             // echo generate_manipulate("S04",$form);
             
       echo "</tr>";

        echo"<tr>";
             echo "<td>Chemistry </td>";
             // echo generate_manipulate("S03",$form);
            
       echo "</tr>";

        echo"<tr>";
            echo "<td>Physics </td>";
            // echo generate_manipulate("S01",$form);
           
       echo "</tr>";

        echo"<tr>";
             echo "<td>History</td>";
             // echo generate_manipulate("A01",$form);
            //  $resulta03 = mysqli_fetch_array(generate_manipulate("A01",$form));
            // echo "<td>".$resulta03['sub_cod']."</td>";
            //  echo "<td>".$resulta03['BOT']."</td>";
            //  echo "<td>".$resulta03['EOT']."</td>";
            //  echo "<td>".$resulta03['total']."</td>";
            //   echo "<td>".grade($resulta03['total'])." </td>";
            //  echo "<td>".Comment($resulta03['total'])." </td>";
            //  echo "<td>".$resulta03['initials']." </td>";
              while ($result1 =mysqli_fetch_assoc($resultH))
             {
		     echo'<td>'.$result1['sub_cod'].'</td>
		         <td>'.$result1['mid_term'].'</td>
		         <td>'.$result1['end_term'].'</td>
		         <td>'.$result1['total'].'</td>
		         <td>'.grade($result1['total']).'</td>
		         <td>'.Comment($result1['total']).'</td>
		         <td>'.$result1['initials'].'</td>';
             }

             
       echo "</tr>";

        echo"<tr>";
           echo "<td>Commerce </td>";
           // echo generate_manipulate("A05",$form);
          
       echo "</tr>";

        echo"<tr>";
             echo "<td>Agriculture</td>";
             // echo generate_manipulate("S05",$form);
           
       echo "</tr>";

        echo"<tr>";
             echo "<td>C.R.E</td>";
             // echo generate_manipulate("A04",$form);
            
       echo "</tr>";

        echo"<tr>";
             echo "<td>Fine Art</td>";
             // echo generate_manipulate("A06",$form);
            
       echo "</tr>";

    echo"<tr style='border:1px solid #ffffff;'>";
    echo"<td></td>";
    echo"<td></td>";
    echo"<td></td>";
    echo"<td></td>";
    echo '<td>'.$sumt.'</td>';
    echo"<td></td>";
    echo"<td></td>";
    echo"<td></td>";
    echo "</tr>";
                     
                 
            ?>
          </tbody>
          
        </table>
<?php
}
?>