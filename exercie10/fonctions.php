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

        function n_inputs(int $a){
            $i=1;
            while ($i <= $a) {
                echo "
                <label class='style_checkbox'>
                    <input type='text' name='n' placeholder='Entrer le nombre' value=''> champs $i
                </label><br>";
                $i++;
            }
        }









?>