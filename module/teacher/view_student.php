<?php include('staff_header.php'); ?>
<?php
      $sql = "SELECT COUNT(firstname) AS count_s FROM ostudent WHERE c_id IN(SELECT c_id FROM subjecttakenbyteacher WHERE initials ='".$_SESSION['initials']."')";
                 $res_count =mysqli_query($conn,$sql) or die(mysqli_error($conn));
                 $res_ct_arry1=mysqli_fetch_array($res_count);

       
      $sql = "SELECT COUNT(firstname) AS count_s FROM astudent WHERE c_id IN(SELECT c_id FROM asubjecttakenbyteacher WHERE initials ='".$_SESSION['initials']."')";
      
                 $res_count =mysqli_query($conn,$sql) or die(mysqli_error($conn));
                 $res_ct_arry=mysqli_fetch_array($res_count);

  ?>

                  <div class="formheadera">Total Number Of Students <span style="border-radius: 200px; padding-left: 15px; padding-right: 15px; background-color: #FFB6C1;"><?php echo ($res_ct_arry['count_s'] + $res_ct_arry1['count_s']); ?></span> </div>


 <div class="main-wrappings">
    <div style="margin: 0px auto; width: 70%; margin-top: 20px;">
      <div style="background-color: #ECECFA; text-align: center; padding: 20px; font-size: 28px; color: #337AB7;">Number of O Level Students <span style="border-radius: 200px; padding-left: 15px; padding-right: 15px; background-color: #FFB6C1;"><?php echo $res_ct_arry1['count_s']; ?></span>
      </div>
       <table class="table table-bordered" id="myTable" style="margin-top: 0px;">
          <thead>
            <tr class="header">
               <th>ID</th>
               <th>STUDENT NAME</th>
              <th>REGISTRATION NUMBER</th>
               <th>FORM</th>
                <th>STREAM</th>
              <th>GENDER</th>
            </tr>
          </thead>
           <tbody>
           <?php
                     
              $sqls = "SELECT * FROM ostudent INNER JOIN class ON class.c_id =ostudent.c_id WHERE ostudent.c_id IN(SELECT c_id FROM subjecttakenbyteacher WHERE initials ='".$_SESSION['initials']."') AND year='".$_SESSION['year']."' ORDER BY firstname";
               $runs    =mysqli_query($conn,$sqls);
                
                 $max_rows =mysqli_num_rows($runs);

                 $no1= 1;

                 while($result = mysqli_fetch_assoc($runs)){
                          
               echo" <tr>";
                    echo "<td>".$no1."</td>";
                    echo "<td>".$result['firstname']."  ".$result['othername']."</td>";
                    echo "<td>".$result['Reg_no']."</td>";
                    echo "<td>S ".$result['c_name']."</td>";
                    echo "<td>".$result['c_id']."</td>";
                     echo "<td>".$result['gender']."</td>";
                  $no1++;
               }

          ?>
          
        </tbody>
      </table>
  </div>

     <div style="margin: 0px auto; width: 70%; margin-top: 20px;">
     <div style="background-color: #ECECFA; text-align: center; padding: 20px; font-size: 28px; color: #337AB7;">Number of A Level Students <span style="border-radius: 200px; padding-left: 15px; padding-right: 15px; background-color: #FFB6C1;"><?php echo $res_ct_arry['count_s']; ?></span>
     </div>
     <table class="table table-bordered table-hover" id="myTable" style="margin-top: 0px;">
        <thead>
          <tr class="header">
             <th>ID</th>
             <th>STUDENT NAME</th>
            <th>REGISTRATION NUMBER</th>
             <th>FORM</th>
            <th>GENDER</th>
          </tr>
         </thead>
          <tbody>
             <?php      
                $sqls = "SELECT * FROM astudent INNER JOIN class ON class.c_id =astudent.c_id WHERE astudent.c_id IN(SELECT c_id FROM asubjecttakenbyteacher WHERE initials ='".$_SESSION['initials']."') ORDER BY firstname";
                 $runs    =mysqli_query($conn,$sqls);
                  $no=1;
                 while($result = mysqli_fetch_assoc($runs)){  
                 echo" <tr>";
                      echo "<td>".$no."</td>";
                      echo "<td>".$result['firstname']."  ".$result['othername']."</td>";
                      echo "<td>".$result['Reg_no']."</td>";
                      echo "<td>".$result['c_id']."</td>";
                       echo "<td>".$result['gender']."</td>";
                  echo"</tr>";
                 $no++;
                 }
            ?>       
          </tbody>      
      </table>
  </div>
<?php include('../../footer.php');?>
<script>
  $(document).ready(function(){
    $(".table").DataTable();
  });
</script>