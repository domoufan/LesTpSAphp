<?php
   function coordonner(){
       
       global $x; global $y;
       $x=['abscisse'=>$x1=rand(1,10),
           'ordonne'=>$x2=rand(1,10)];
       $y=['abscisse'=>$y1=rand(1,10),
           'ordonne'=>$y2=rand(1,10)];
    } 

    function distance(array $a, array $b):float {

        return sqrt(pow(($b['abscisse']-$a['abscisse']),2)+pow(($b['ordonne']-$a['ordonne']),2));
    }
?>