<?php include('admin_header.php');?>
 <div class="formheadera">Teachers Attandance</div>
<div class="main-wrappings">
  <div style="margin: auto; width: 450px;">
      <form>
        <h1>Teacher Present</h1>
      <div class="form-group">
        <label>Select Teacher</label>
        <select name="teacher" id="teacher" class="form-control" >
          <option>Select Teacher</option>
            <?php  

        $classget = "SELECT  * FROM teacher ";
        $res= mysqli_query($conn,$classget);

        while($cln=mysqli_fetch_array($res))
        {
          
         echo '<option value="'.$cln['initials'].'" >'.$cln['firstname'].' '.$cln['othername'].'</option>';
           
        }

?>
        </select>   
      </div>
  </form>
  <table class="table table-bordered table-stripped" id="attendanceDisplay"></table>
  </div>
    <div style="margin: auto; width: 450px;">
      <form>
        <h1>Teacher Absent</h1>
      <div class="form-group">
        <label>Select Teacher</label>
        <select name="teacherAbsent" id="teacherAbsent" class="form-control" >
          <option>Select Teacher</option>
            <?php  

        $classget = "SELECT  * FROM teacher ";
        $res= mysqli_query($conn,$classget);

        while($cln=mysqli_fetch_array($res))
        {
          
         echo '<option value="'.$cln['initials'].'" >'.$cln['firstname'].' '.$cln['othername'].'</option>';
           
        }

?>
        </select>   
      </div>
  </form>
  <table class="table table-bordered table-stripped" id="AbsentDisplay"></table>
  </div>

<?php 
include('../../service/connection.php');

   $output ='';
   //this is the table output
    $output .='<table class="table table-stripped" id="myTable">
               
                  <thead>
                   <tr class="header">
                       <th>NO</th>
                       <th>STAFF NAME</th>
                      <th>GENDER</th>
                      <th>PICTURE</th>
                     </tr>  
                   </thead>
                   <tbody>
                ';
                $sqls = "SELECT * FROM teacher where initials in (select attendedid from attendance)";
                 $runs    =mysqli_query($conn,$sqls) or die(mysqli_error($conn));

                 $sql = "SELECT COUNT('attendedid') AS countresult FROM attendance where attendedid in (select initials from teacher WHERE initials='DD')";
                 $count    =mysqli_query($conn,$sql) or die(mysqli_error($conn));
                 $no1 =1;
                 while($result = mysqli_fetch_assoc($runs)){
                                          
            $output .='             
                  <tr>
                     <td>'.$no1.'</td>
                     <td>'.$result['firstname'].' '.$result['othername'].'</td>
                     <td><img src="../'.$result['picture'].'" width="30px" height="30px" style="border-radius: 40px;"></td>';
                     $row =mysqli_fetch_assoc($count);
                     
                         $output.='<td>'.$row['countresult'].'</td>';
                  
                     '</tr>';
                  $no1++;
                 
                 }
         $output .='</tbody>
      
    </table>';
       // echo $output;

?>
</div>
 </div>
 <?php include('../../footer.php');?>
 <script src="Attendance.js"></script>
<script type="text/javascript">
   getTeacherAtrendenceAll();
   getTeacherAtrendenceAbsentAll();
  $(".table").DataTable();
</script>