
   <?php
        $sql ="SELECT DISTINCT * FROM grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."') AND sub_cod='A03' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."'";
          $runs    =mysqli_query($conn,$sql);

        $sql1 ="SELECT DISTINCT * FROM grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."') AND sub_cod='S02' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."'";
          $runs02    =mysqli_query($conn,$sql1);

        $sql2 ="SELECT DISTINCT * FROM grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."') AND sub_cod='A02' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."'";
          $runa02    =mysqli_query($conn,$sql2);

      $sql3 ="SELECT DISTINCT * FROM grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."') AND sub_cod='S04' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."'";
          $runs04    =mysqli_query($conn,$sql3);

      $sql4 ="SELECT DISTINCT * FROM grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."') AND sub_cod='S03' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."'";
          $runs03    =mysqli_query($conn,$sql4);
      $sql5 ="SELECT DISTINCT * FROM grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."') AND sub_cod='S01' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."'";
          $runs01    =mysqli_query($conn,$sql5);

      $sql6 ="SELECT DISTINCT * FROM grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."') AND sub_cod='A01' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."'";
          $runa01    =mysqli_query($conn,$sql6);

      $sql7 ="SELECT DISTINCT * FROM grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."') AND sub_cod='A05' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."'";
          $runa05    =mysqli_query($conn,$sql7);

      $sql8 ="SELECT DISTINCT * FROM grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."') AND sub_cod='S05' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."'";
          $runs05    =mysqli_query($conn,$sql8);

      $sql9 ="SELECT DISTINCT * FROM grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."') AND sub_cod='A04' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."'";
          $runa04    =mysqli_query($conn,$sql9);

      $sql10 ="SELECT DISTINCT * FROM grade INNER JOIN ostudent ON grade.Reg_no = ostudent.Reg_no WHERE c_id IN (SELECT c_id FROM class WHERE c_name='".$form."') AND sub_cod='A06' AND term_id='".$_SESSION['term_id']."' AND year='".$_SESSION['year']."'";
          $runa06    =mysqli_query($conn,$sql10);

   ?>
