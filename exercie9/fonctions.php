<?php
        function est_un_nombre($nombre):bool{
            if (is_numeric($nombre))
                return true;
            else
                return false;
        }
        function est_vide($nombre):bool{
            if (isset($nombre))
                return true;
            else
                return false;
        }
        
        function nombre_valide($nombre,string $cle,array $tab){
            if (est_vide($nombre)) {
                $tab[$cle]="Veuiller entrer une valeur";
            } else {
                if (!est_un_nombre($nombre)) {
                    $tab[$cle]="Veuiller entrer un nombre";
                }
            }
            
        }    

        function nombres_de_1_a_n(int $a){
            $i=1;
          echo "<ul>";
            while ($i <= 10) {
                echo "<li>".$i."*".$a."=".$i*$a."</li>";
                $i++;
            }
            echo "</ul>";
        }









?>