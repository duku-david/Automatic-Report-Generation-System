

   <?php
        $sqlhist1 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='A01/1' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $hist1    =mysqli_query($conn,$sqlhist1);

        $sqlhist2 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='A01/2' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $hist2    =mysqli_query($conn,$sqlhist2);

        $sqlgeo1 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='A02/1' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $geo1    =mysqli_query($conn,$sqlgeo1);

      $sqlgeo2 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='A02/2' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $geo2    =mysqli_query($conn,$sqlgeo2);

      $sqlgeo3 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='A02/3' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $geo3    =mysqli_query($conn,$sqlgeo3);

      $sqldiv1 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='A03/1' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $div1    =mysqli_query($conn,$sqldiv1);

      $sqldiv2 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='A03/2' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $div2    =mysqli_query($conn,$sqldiv2);

      $sqldiv3 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='A03/3' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $div3    =mysqli_query($conn,$sqldiv3);

      $sqllit1 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='A04/1' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $lit1    =mysqli_query($conn,$sqllit1);

      $sqllit2 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='A04/2' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $lit2    =mysqli_query($conn,$sqllit2);

      $sqlsubmath ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='A05' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $sub_math  =mysqli_query($conn,$sqlsubmath);

      $sqlgp ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='B01' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $gp    =mysqli_query($conn,$sqlgp);

      $sqlagri1 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S01/1' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $agri1    =mysqli_query($conn,$sqlagri1);

      $sqlagri2 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S01/2' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $agri2    =mysqli_query($conn,$sqlagri2);

      $sqlagri3 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S01/3' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $agri3    =mysqli_query($conn,$sqlagri3);

      $sqlbio1 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S02/1' AND term='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $bio1    =mysqli_query($conn,$sqlbio1);

      $sqlbio2 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S02/3' AND amarks.term_id='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $bio2    =mysqli_query($conn,$sqlbio2);

      $sqlbio3 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S02/3' AND amarks.term_id='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $bio3    =mysqli_query($conn,$sqlbio3);

      $sqlchem1 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S03/1' AND amarks.term_id='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $chem1    =mysqli_query($conn,$sqlchem1);

      $sqlchem2 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S03/2' AND amarks.term_id='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $chem2    =mysqli_query($conn,$sqlchem2);

      $sqlchem3 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S03/3' AND amarks.term_id='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $chem3    =mysqli_query($conn,$sqlchem3);

      $sqlcomp1 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S04/1' AND amarks.term_id='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $comp1    =mysqli_query($conn,$sqlcomp1);

      $sqlcomp2 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S04/2' AND amarks.term_id='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $comp2    =mysqli_query($conn,$sqlcomp2);

      $sqlmath1 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S05/1' AND amarks.term_id='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $math1    =mysqli_query($conn,$sqlmath1);

     $sqlmath2 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S05/2' AND amarks.term_id='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $math2    =mysqli_query($conn,$sqlmath2);

      $sqlphy1 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S06/1' AND amarks.term_id='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $phy1    =mysqli_query($conn,$sqlphy1);

      $sqlphy2 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S06/2' AND amarks.term_id='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $phy2    =mysqli_query($conn,$sqlphy2);

      $sqlphy3 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S06/3' AND amarks.term_id='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $phy3    =mysqli_query($conn,$sqlphy3);

      $sqlecon1 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S07/1' AND amarks.term_id='".$_SESSION['term']."' AND amark.form_id='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $econ1    =mysqli_query($conn,$sqlecon1);

      $sqlecon2 ="SELECT DISTINCT * FROM amarks INNER JOIN astudent ON amarks.Reg_no = astudent.Reg_no INNER JOIN term ON amarks.term_id=term.term_id  WHERE sub_cod='S07/2' AND amarks.term_id='".$_SESSION['term']."' AND form='".$form."' AND year='".$_SESSION['year']."' AND stud_id='".$stud_id."'";
          $econ2    =mysqli_query($conn,$sqlecon2);

      
     
     while ($phy11 = mysqli_fetch_array($phy1)) {
       $phys1=$phy11['total'];
     }
              
      while ($phy22 = mysqli_fetch_array($phy2)) {
       $phys2 = $phy22['total'];
     }
          
      while ($phy33 = mysqli_fetch_array($phy3)) {
        $phys3 = $phy33['total'];
     }

     //        round(($phy11['marks'] + $phy22['marks'] + $phy33['marks'])/3);  

     //        $math11 = mysqli_fetch_array($math1);
     //         while ( $math11) {
     //   # code...
     // }
              
     //        $math22 = mysqli_fetch_array($math2);
     //         while ($math22) {
     //   # code...
     // }
            
     //       round(($math11['marks'] + $math22['marks'])/2); 

     //        $bio11 = mysqli_fetch_array($bio1);
     //         while ($bio11) {
     //   # code...
     // }
              
     //           $bio22 = mysqli_fetch_array($bio2);
     //            while ( $bio22) {
     //   # code...
     // }
            
     //          $bio33 = mysqli_fetch_array($bio3);
     //           while (  $bio33) {
     //   # code...
     // }

     //        round(($bio11['marks'] + $bio22['marks'] + $bio33['marks'])/3);

     //        $agri11 = mysqli_fetch_array($agri1);
     //         while ($agri11) {
     //   # code...
     // }
              
     //        $agri22 = mysqli_fetch_array($agri2);
     //         while ($agri22) {
     //   # code...
     // }
            
     //        $agri33 = mysqli_fetch_array($agri3);
     //         while ($agri33) {
     //   # code...
     // }

     //        round(($agri11['marks'] + $agri22['marks'] + $agri33['marks'])/3);

     //        $chem11 = mysqli_fetch_array($chem1);
     //         while ($chem11) {
     //   # code...
     // }
              
     //        $chem22 = mysqli_fetch_array($chem2);
     //         while ($chem22) {
     //   # code...
     // }
            
     //        $chem33 = mysqli_fetch_array($chem3);
     //         while ($chem33) {
     //   # code...
     // }

     //        round(($chem11['marks'] + $chem22['marks'] + $chem33['marks'])/3);

     //        $econ11 = mysqli_fetch_array($econ1);
     //         while ($econ11) {
     //   # code...
     // }
              
     //        $econ22 = mysqli_fetch_array($econ2);
     //         while ( $econ22) {
     //   # code...
     // }
            
     //        round(($econ11['marks'] + $econ22['marks'])/2);

     //        $comp11 = mysqli_fetch_array($comp1);
     //          while ($comp11) {
     //            # code...
     //          }
     //        $comp22 = mysqli_fetch_array($comp2);
     //        while ($comp22) {
     //          # code...
     //        }
            
     //      round(($comp11['marks'] + $comp22['marks'])/2);

     //      $gp11 = mysqli_fetch_array($gp);
     //      while ($gp11) {
     //        # code...
     //      }
            
     //      ($gp11['marks']);

     //      round((($phy11['marks'] + $phy22['marks'] + $phy33['marks'])/3) + (($math11['marks'] + $math22['marks'])/2) + (($bio11['marks'] + $bio22['marks'] + $bio33['marks'])/3) + (($agri11['marks'] + $agri22['marks'] + $agri33['marks'])/3) + (($chem11['marks'] + $chem22['marks'] + $chem33['marks'])/3) + (($econ11['marks'] + $econ22['marks'])/2) + (($comp11['marks'] + $comp22['marks'])/2) + ($gp11['marks']));
                  
        

   ?>
