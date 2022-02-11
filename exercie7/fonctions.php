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

function bissextile (int $annee):bool {
		
    if (($annee % 4 == 0 && $$annee % 100 != 0) || $annee % 400 == 0)
        return true;
    else
        return false;
}

function nbrDeJourDansLeMois(int $annee,int $mois):int {
    
    if($mois==1 || $mois==3 || $mois==5 || $mois==7 || $mois==8 || $mois==10 || $mois==12)
        return 31;
    else if($mois==4 || $mois==6 || $mois==9 || $mois==11)
        return 31;
    else if(bissextile($annee) && $mois==2)
        return 29;
    else
        return 28;
}

function DateValide(int $jour,int $mois,int $annee):bool {
    
    if($mois > 0 && $mois < 13 && $jour > 0 && $jour <=nbrDeJourDansLeMois($annee,$mois))
        return true;
    else
        return false;
}

function DateSuivante(int $jour,int $mois,int $annee):int {
    
    if($jour == nbrDeJourDansLeMois($annee,$mois) && $mois < 12)
        {$jour = 1; $mois++; return $mois;}
    else 
    {
        if($jour == nbrDeJourDansLeMois($annee,$mois) && $mois == 12)
        {$jour = 1 ; $mois = 1 ; $annee++; return $annee;}
        else 
        { 
            $jour++; return $jour;
        }
    }

}

function DatePrecedente(int $jour,int $mois,int $annee):int {
    
    if($jour == 1 && $mois > 1)
        {$mois--; $jour = nbrDeJourDansLeMois($annee,$mois); return $mois;}
    else 
    {   if($jour == 1 && $mois == 1)
            {$jour = 31 ; $mois = 12 ; $annee--; return $annee;}
        else 
            { $jour--; return $jour;}}
    }

?>