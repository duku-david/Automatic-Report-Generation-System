<?php include('staff_header.php'); ?>
<?php
      $sql = "SELECT COUNT(firstname) AS count_s FROM teacher";
                 $res_count =mysqli_query($conn,$sql) or die(mysqli_error($conn));
                 $res_ct_arry=mysqli_fetch_array($res_count);
  ?>
        <div class="formheadera">Number Of Teaching Staff Members <span class="btn btn-info" style="border-radius: 200px; padding-left: 15px; padding-right: 15px;"><?php echo $res_ct_arry['count_s']; ?></span> </div>
            <div class="main-wrappings">
              <div style="margin: 0px auto; width: 70%; margin-top: 20px;">
                <table class="table table-bordered" id="myTable">
                    <thead>
                      <tr class="header">
                         <th>NO</th>
                         <th>STAFF NAME</th>
                        <th>GENDER</th>
                      </tr>
                     </thead>
                    <tbody>
                     <?php         
                        $sqls = "SELECT * FROM teacher WHERE initials=(SELECT initials FROM login WHERE username='".$_SESSION['username']."') ORDER BY firstname";
                         $runs    =mysqli_query($conn,$sqls);
                          $max_rows =mysqli_num_rows($runs);
                             $no1= 1;
                             while($result = mysqli_fetch_assoc($runs)){
                           echo" <tr>";
                                echo "<td>".$no1."</td>";
                              echo "<td>".$result['firstname']."  ".$result['othername']."</td>";
                              echo "<td>".$result['gender']."</td>";
                          echo"</tr>";
                          
                          $no1++;
                         }
                    ?>
                    
                  </tbody>
           </table>
        </div>
  </div>

<?php include('../../footer.php');?>
<script>
  $(document).ready(function(){
    $(".table").DataTable();
  });
</script>