
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
             $resulta03 = mysqli_fetch_array($runs);
            echo "<td>".$resulta03['sub_cod']."</td>";
             echo "<td>".$resulta03['mid_term']."</td>";
             echo "<td>".$resulta03['end_term']."</td>";
             echo "<td>".$resulta03['total']."</td>";
              echo "<td>".grade($resulta03['total'])." </td>";
             echo "<td>".Comment($resulta03['total'])." </td>";
             echo "<td>".$resulta03['initials']." </td>";
       echo "</tr>";

        echo"<tr>";
             echo "<td>Mathematics </td>";
             $results02 = mysqli_fetch_array($runs02);
             echo "<td>".$results02['sub_cod']."</td>";
             echo "<td>".$results02['mid_term']."</td>";
             echo "<td>".$results02['end_term']."</td>";
             echo "<td>".$results02['total']."</td>";
             echo "<td>".grade($results02['total'])." </td>";
             echo "<td>".Comment($results02['total'])." </td>";
             echo "<td>".$results02['initials']."</td>";
       echo "</tr>";

        echo"<tr>";
            echo "<td>Geography </td>";
            $resulta02 = mysqli_fetch_array($runa02);
            echo "<td>".$resulta02['sub_cod']."</td>";
            echo "<td>".$resulta02['mid_term']."</td>";
            echo "<td>".$resulta02['end_term']."</td>";
            echo "<td>".$resulta02['total']." </td>";
            echo "<td> ".grade($resulta02['total'])."</td>";
            echo "<td>".Comment($resulta02['total'])." </td>";
            echo "<td>".$resulta02['initials']." </td>";
       echo "</tr>";

        echo"<tr>";
             echo "<td>Biology </td>";
             $results04 = mysqli_fetch_array($runs04);
             echo "<td>".$results04['sub_cod']."</td>";
             echo "<td>".$results04['mid_term']."</td>";
             echo "<td>".$results04['end_term']."</td>";
             echo "<td>".$results04['total']." </td>";
             echo "<td> ".grade($results04['total'])."</td>";
             echo "<td>".Comment($results04['total'])." </td>";
             echo "<td>".$results04['initials']." </td>";
       echo "</tr>";

        echo"<tr>";
             echo "<td>Chemistry </td>";
             $results03 = mysqli_fetch_array($runs03);
             echo "<td>".$results03['sub_cod']."</td>";
             echo "<td>".$results03['mid_term']."</td>";
             echo "<td>".$results03['end_term']."</td>";
             echo "<td>".$results03['total']." </td>";
             echo "<td> ".grade($results03['total'])."</td>";
             echo "<td>".Comment($results03['total'])." </td>";
             echo "<td>".$results03['initials']." </td>";
       echo "</tr>";

        echo"<tr>";
            echo "<td>Physics </td>";
            $results01 = mysqli_fetch_array($runs01);
            echo "<td>".$results01['sub_cod']."</td>";
            echo "<td>".$results01['mid_term']."</td>";
            echo "<td>".$results01['end_term']."</td>";
            echo "<td>".$results01['total']." </td>";
            echo "<td> ".grade($results01['total'])."</td>";
            echo "<td>".Comment($results01['total'])." </td>";
            echo "<td>".$results01['initials']." </td>";
       echo "</tr>";

        echo"<tr>";
             echo "<td>History</td>";
             $resulta01 = mysqli_fetch_array($runa01);
             echo "<td>".$resulta01['sub_cod']."</td>";
             echo "<td>".$resulta01['mid_term']."</td>";
             echo "<td>".$resulta01['end_term']."</td>";
             echo "<td>".$resulta01['total']." </td>";
             echo "<td> ".grade($resulta01['total'])."</td>";
             echo "<td>".Comment($resulta01['total'])." </td>";
             echo "<td>".$resulta01['initials']." </td>";
       echo "</tr>";

        echo"<tr>";
           echo "<td>Commerce </td>";
           $resulta05 = mysqli_fetch_array($runa05);
           echo "<td>".$resulta05['sub_cod']."</td>";
           echo "<td>".$resulta05['mid_term']."</td>";
           echo "<td>".$resulta05['end_term']."</td>";
           echo "<td>".$resulta05['total']." </td>";
           echo "<td> ".grade($resulta05['total'])."</td>";
           echo "<td>".Comment($resulta05['total'])." </td>";
           echo "<td>".$resulta05['initials']." </td>";
       echo "</tr>";

        echo"<tr>";
             echo "<td>Agriculture</td>";
             $results05 = mysqli_fetch_array($runs05);
             echo "<td>".$results05['sub_cod']."</td>";
             echo "<td>".$results05['mid_term']."</td>";
             echo "<td>".$results05['end_term']."</td>";
             echo "<td>".$results05['total']." </td>";
             echo "<td> ".grade($results05['total'])."</td>";
             echo "<td>".Comment($results05['total'])." </td>";
             echo "<td>".$results05['initials']." </td>";
       echo "</tr>";

        echo"<tr>";
             echo "<td>C.R.E</td>";
              $resulta04 = mysqli_fetch_array($runa04);
            echo "<td>".$resulta04['sub_cod']."</td>";
             echo "<td>".$resulta04['mid_term']."</td>";
             echo "<td>".$resulta04['end_term']."</td>";
             echo "<td>".$resulta04['total']." </td>";
             echo "<td> ".grade($resulta04['total'])."</td>";
             echo "<td>".Comment($resulta04['total'])." </td>";
             echo "<td>".$resulta04['initials']." </td>";
       echo "</tr>";

        echo"<tr>";
             echo "<td>Fine Art</td>";
              $resulta06 = mysqli_fetch_array($runa06);
             echo "<td>".$resulta06['sub_cod']."</td>";
             echo "<td>".$resulta06['mid_term']."</td>";
             echo "<td>".$resulta06['end_term']."</td>";
             echo "<td>".$resulta06['total']."</td>";
             echo "<td> ".grade($resulta06['total'])."</td>";
              echo "<td>".Comment($resulta06['total'])." </td>";
             echo "<td>".$resulta06['initials']." </td>";
       echo "</tr>";

    echo"<tr style='border:1px solid #ffffff;'>";
    echo"<td></td>";
    echo"<td></td>";
    echo"<td></td>";
    echo"<td></td>";
     echo "<td>   TOTAL = ".$sumt."</td>";
    echo"<td></td>";
    echo"<td></td>";
    echo"<td></td>";
    echo "</tr>";
                     
                 
            ?>
          </tbody>
          
        </table>
    <?php
     $eng      =credit_convert($resulta03['grade']);
     $math     =credit_convert($results02['grade']);
     $phy      =credit_convert($results01['grade']);
     $chem     =credit_convert($results03['grade']);
     $bio      =credit_convert($results04['grade']);
     $hist     =credit_convert($resulta01['grade']);
     $geo      =credit_convert($resulta02['grade']);
     $com      =credit_convert($resulta05['grade']);
     $agri     =credit_convert($results05['grade']);
     $cre      =credit_convert($resulta04['grade']);
     $fine_art =credit_convert($resulta06['grade']); 

     $aggr=aggregate_cal($eng,$math,$phy,$chem,$bio,$hist,$geo,$com,$agri,$cre,$fine_art);
     $divs = Division($aggr); 

 
    ?>