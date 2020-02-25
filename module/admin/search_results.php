  <?php
    $Search_R='';
    $Search_R .='<div class="formheadera" >Search Results</div>
           ';
            include('../../service/connection.php');
    $Search_R.='<table id="myTable">
                  <tr class="header">
                    <thead style="color: steelblue;">
                     <tr> 
                        <th>Reg No.</th>
                        <th>Name</th>
                        <th>Subject Code</th>
                        <th>Marks</th>
                        <th>Grade</th>
                      </tr>
                    </thead>';
                    $q="SELECT DISTINCT * FROM ostudent INNER join grade ON ostudent.Reg_no = grade.Reg_no INNER join osubject ON grade.sub_cod=osubject.sub_cod WHERE grade.Reg_no LIKE '%$trimmed%' AND term_id='".$term_id."' AND year='".$year."' ORDER BY firstname ";
                 $run1=mysqli_query($conn,$q);

                 $queryt="SELECT DISTINCT * FROM ostudent INNER join grade ON ostudent.Reg_no = grade.Reg_no INNER join osubject ON grade.sub_cod=osubject.sub_cod WHERE grade.Reg_no LIKE '%$trimmed%' AND term_id='".$term_id."' AND year='".$year."' ORDER BY firstname ";
				         $run=mysqli_query($conn,$queryt);
                 $res =mysqli_fetch_assoc($run1);
                 $Search_R .='<img src="../'.$res['picture'].'" height="50" width="50">';

                 while($result = mysqli_fetch_assoc($run)){
                
              $Search_R .='
              <tbody>
              <tr>
                    <td>'.$result['Reg_no'].'</td>
                     <td>'.strtoupper($result["name"]).'</td>
                    <td>'.strtoupper($result["sub_cod"]).'</td>
                    <td>'.strtoupper($result["total"]).'</td>
                    <td>'.strtoupper($result["grade"]).'</td>
                  </tr>';
                 }
           $Search_R .=' </body>
                       </table> ';
            echo $Search_R;
                ?>
          
