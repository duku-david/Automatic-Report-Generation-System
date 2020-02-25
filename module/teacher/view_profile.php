<?php include('staff_header.php'); ?>
<style type="text/css">
  .image-p
  {
    margin: auto;
    background: #ECECFA; 
    width: 70%; 
    margin-top: 15px;
  }
  .image-p td
  {
    text-align: center;
  }
  .hov:hover
  {
    background-color: #fff;
  }
</style>
<div class="formheadera">Teacher Profile </div>
    <div class="main-wrappings">
        <table class="image-p" id="myTable" style="width: 70%;">
            <tbody>
             <?php         
                $sqls = "SELECT * FROM teacher WHERE initials=(SELECT initials FROM login WHERE username='".$_SESSION['username']."') ORDER BY firstname";
                 $runs    =mysqli_query($conn,$sqls);  
                  $result = mysqli_fetch_assoc($runs);
              echo'<tr>
                        <td colspan="2" class="hov">
                         <div align="center"><img src="../'.$result['picture'].'" width="30%" height="50%"></div></td>
                    </tr>
                    <tr>
                        <td width="50%" >Fullname</td>
                        <td width="50%" style="border-left:none;">'.$result['firstname'].' '.$result['othername'].'</td>
                    </tr>
                    <tr>
                        <td width="50%">Gender</td>
                        <td width="50%" style="border-left:none;">'.$result['gender'].'</td>
                    </tr>
                    <tr>
                          <td width="50%">Initials</td>
                          <td width="50%" style="border-left:none;">'.$result['gender'].'</td>
                    </tr>
                ';
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