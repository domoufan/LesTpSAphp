<?php
    function perimetre(int $longueur , int $largeur):int   { return ($longueur+$largeur)*2;}

    function surface(int $longueur , int $largeur):int     {return $longueur*$largeur;}
    
    function diagonale(int $longueur , int $largeur):int   {return sqrt(pow(2,$longueur)+pow(2,$largeur)); }
?>