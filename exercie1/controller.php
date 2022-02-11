<?php if (isset($name)): ?>
                
                <?php foreach ($parametre as $key => $value): ?>
     
                 <?php 
     
                     if (isset($parametre[$key]) && in_array(("p"),$parametre) ) {
                         $perimetre=$value;
                        echo "Le perimetre est = ".$p."<br>";
                     }
                     if (isset($parametre[$key]) && in_array(("s"),$parametre)) {
                         $surface=$value;
                         echo "La surface  est = ".$s."<br>";
                      }
                     if (isset($parametre[$key]) && in_array(("d"),$parametre)) {
                         $diagonale=$value;
                         echo "La diagonale est = ".$d."<br>";
                      }
                      break;
                 ?>
                 <?php endforeach?>
                 <?php  ?>
             <?php endif ?>