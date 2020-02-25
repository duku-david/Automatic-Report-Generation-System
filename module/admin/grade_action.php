
    <?php

       function Grade($grade)
       {
          if($grade < 0 || $grade > 100){
               return"Max Error";
          }else if($grade <=100 && $grade >=75){
               return"D 1";
          }else if($grade <=74 && $grade >=70){
               return"D 2";
          }else if($grade <=69 && $grade >=65){
               return"C 3";
          }else if($grade <=64 && $grade >=60){
               return"C 4";
          }else if($grade <=59 && $grade >=55){
               return"C 5";
          }else if($grade <=54 && $grade >=50){
               return"C 6";
          }else if($grade <=49 && $grade >=45){
               return"P 7";
          }else if($grade <=44 && $grade >=40){
               return"P 8";
          }else if($grade <=39 && $grade >=0){
               return"F 9";
          }
       }


    ?>

  <?php

       function Comment($grade)
       {
          if($grade < 0 || $grade > 100){
               return"Max Error";
          }else if($grade <=100 && $grade >=75){
               return"Excellent";
          }else if($grade <=74 && $grade >=70){
               return"Very Good";
          }else if($grade <=69 && $grade >=65){
               return"Good";
          }else if($grade <=64 && $grade >=60){
               return"Good";
          }else if($grade <=59 && $grade >=55){
               return"Q Good";
          }else if($grade <=54 && $grade >=50){
               return"Fair";
          }else if($grade <=49 && $grade >=45){
               return"Weak";
          }else if($grade <=44 && $grade >=40){
               return"very Weak";
          }else if($grade <=39 && $grade >=0){
               return"Faild";
          }
       
       }

  ?>

 <?php

       function Grade_total($grade)
       {
          if($grade < 0 || $grade > 100){
               return"Max Error";
          }else if($grade <=100 && $grade >=75){
               return"D 1";
          }else if($grade <=74 && $grade >=70){
               return"D 2";
          }else if($grade <=69 && $grade >=65){
               return"C 3";
          }else if($grade <=64 && $grade >=60){
               return"C 4";
          }else if($grade <=59 && $grade >=55){
               return"C 5";
          }else if($grade <=54 && $grade >=50){
               return"C 6";
          }else if($grade <=49 && $grade >=45){
               return"P 7";
          }else if($grade <=44 && $grade >=40){
               return"P 8";
          }else if($grade <=39 && $grade >=0){
               return"F 9";
          }
       }


    ?>

    <?php

       function Sum($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k)
     {
        $total =($a + $b + $c + $d + $e + $f + $g + $h + $i + $j + $k);
        return $total;
     }


    ?>









