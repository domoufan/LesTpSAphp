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
        function estCepremier($N):bool{
        
            $cpt=0;
            for ($i=2; $i<=($N/2 ); $i++)
             { 
                if ($N % $i==0)
                { $cpt++; $i=$N/2; }
            }
            if ($cpt==0)
            {return true;}
            else 
            { return false; }
        }
        function remplir_depremier(array $tab,$val):array{
            $i=1; $j=0;
                while ($i <= $val) {
                    if (estCepremier($i)) {
                      $tab[$j]=$i;
                      $j++;
                    }
                    $i++;
                }
                return $tab;
        } 
        function moyenne_tab(array $tab):float{
            $r=0;$somme=0;
            foreach ($tab as $key => $value) {
                $somme=$somme+$value;
                $r++;
            }
            $moyenne=$somme/$r;
            return $moyenne;
        }  
        function remplir_inferieur(array $tabinf,array $tabpre,$moy):array{
            $i=0;
            foreach ($tabpre as $key => $value) {
                if ($tabpre[$key]<=$moy) {
                    $tabinf[$i]=$tabpre[$key];
                    $i++;
                }
            }
            return $tabinf;
        }
        function remplir_superieur(array $tabsup,array $tabpre,$moy):array{
            $i=0;
            foreach ($tabpre as $key => $value) {
                if ($tabpre[$key]>=$moy) {
                    $tabsup[$i]=$tabpre[$key];
                    $i++;
                }
            }
            return $tabsup;
        }
?>