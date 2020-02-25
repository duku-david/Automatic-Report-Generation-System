 <?php 
    
    
    function aggregate_cal($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k)
    {
       
       $options =array($h,$i,$j,$k);
       $arrlenght = count($options);
       sort($options);
         return $total=($a+$b+$c+$d+$e+$f+$g+ $options[0]);
         
    }

   

    function Division($divs)
    {
       if($divs <=32 && $divs >=8)
       {
         return"I";
       }else if($divs <=45 && $divs >=33)
       {
         return"II";
       }else if($divs <=58 && $divs >=46)
       {
         return"III";
       } else if($divs <=69 && $divs >=59)
       {
         return"IV";
       }else if($divs <=72 && $divs >=70)
       {
         return"9";
       }else{
          return"Error";
       }    
    }

    function credit_convert($grade)
    {
       if($grade=="D 1"){
            return 1;
       }else if($grade=="D 2")
       {
            return 2;
       }else if($grade=="C 3")
       {
            return 3;
       }else if($grade=="C 4")
       {
            return 4;
       }else if($grade=="C 5")
       {
            return 5;
       }else if($grade=="C 6")
       {
            return 6;
       }else if($grade=="P 7")
       {
            return 7;
       }else if($grade=="P 8")
       {
            return 8;
       }else if($grade=="F 9")
       {
            return 9;
       }
    }

?>