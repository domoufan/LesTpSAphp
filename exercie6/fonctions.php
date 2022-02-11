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

    function equation($a,$b,$c){

        $delta=pow($b,2)-4*$a*$c;

        if ($a!=0 ) # EQUATION DU SECOND DEGRÉS
        {
            if ($delta > 0)  # DEUX SOLUTIONS UNIQUE
            { $x1=(-1*$b-sqrt($delta))/2*$a; 
              $x2=(-1*$b+sqrt($delta))/2*$a;
              echo "la Solution est S={".$x1.", ".$x2."}";
            }
            else 
            {
                if ($delta == 0) # UNE SOLUTION DOUBLE
                { $x0=-1*$b/2*$a;
                  echo "la Solution est S={".$x0."}";
                }
                else
                {
                    echo "Cette equation n'admet pas de solution réelle dans IR";
                }
            }
        } 
        else 
        {
            if ($b!=0)  # EQUATION DU PREMIER DEGRÉS
            {
                $x=$c/$b;
                echo "CECI n'est pas une equation du 2nd degré , mais une equation du 1er degré dont la Solution S={".$x."}";
            } 
            else 
            {
                if ($c!=0) # ABSURDE ! SOLUTION ENSEMBLE VIDE
                    {
                        echo "Cette equation est absurde ! la solution c'est l'ensemble vide .";
                    } 
                else                # TOUJOURS VRAI
                    {
                        echo "Cette equation est toujours vraie , la solution c'est IR .";
                    } 
            } 
        }
    }



?>