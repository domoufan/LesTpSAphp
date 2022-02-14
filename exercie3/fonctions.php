<?php
   function carre       (int $nombre_1,int $nombre_2) {global $carre_1; global $carre_2; $carre_1= $nombre_1*$nombre_1;$carre_2 = $nombre_2*$nombre_2;}
   function exponnentiel(int $nombre_1,int $nombre_2) {global $expo_1; global $expo_2;$expo_1=exp($nombre_1);$expo_2=exp($nombre_2);}
   function somme       (int $nombre_1,int $nombre_2):float {return $nombre_1+$nombre_2;}
   function difference  (int $nombre_1,int $nombre_2):float {return $nombre_1-$nombre_2;}
   function produit     (int $nombre_1,int $nombre_2):float {return $nombre_1*$nombre_2;}
   function modulo      (int $nombre_1,int $nombre_2):int   {return $nombre_1%$nombre_2 ;}
   function division    (int $nombre_1,int $nombre_2):float {return $nombre_1/$nombre_2 ;}
?>