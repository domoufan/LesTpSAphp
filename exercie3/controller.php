
<?php if (isset($name)): ?>
                
                <?php foreach ($parametre as $key => $value): ?>
     
                 <?php 
     
                     if (isset($parametre[$key]) && in_array(("p"),$parametre) ) {
                        echo "Le produit entre $nombre1 et $nombre2 est = ".$p."<br>";
                     }

                     if (isset($parametre[$key]) && in_array(("s"),$parametre)) {
                         echo "La somme de $nombre1 et $nombre2 est = ".$s."<br>";
                      }

                     if (isset($parametre[$key]) && in_array(("dif"),$parametre)) {
                         echo "La difference entre $nombre1 et $nombre2 est = ".$dif."<br>";
                      }

                      if (isset($parametre[$key]) && in_array(("div"),$parametre)) {
                        echo "La division de $nombre1 par $nombre2 est = ".$div."<br>";
                     }

                     if (isset($parametre[$key]) && in_array(("m"),$parametre)) {
                        echo "Le modulo de $nombre1 par $nombre2 est = ".$m."<br>";
                     }

                     if (isset($parametre[$key]) && in_array(("c"),$parametre)) {
                        echo "Le carre de $nombre1 est = ".$carre_1."  et le carre de $nombre2 est = ".$carre_2."<br>";
                     }

                     if (isset($parametre[$key]) && in_array(("e"),$parametre)) {
                        echo "L'exponnentiel de $nombre1 est = ".$expo_1."  et l'exponnentiel de $nombre2 est = ".$expo_2."<br>";
                     }
                      break;
                 ?>
                 <?php endforeach?>
                 <?php  ?>
             <?php endif ?>