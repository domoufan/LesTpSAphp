<link rel="stylesheet" href="style.css" >
<aside class="aside_rendu"> 

<?php
    session_start();
     include_once 'fonctions.php';

   if (isset($_POST['leboutton'])) {
    $j= $_POST['j'];
    $m=$_POST['m'];
    $a=$_POST['a'];
    $_SESSION['post']=$_POST;
    $tabDesErreur=[];
    nombre_valide($j,'j',$tabDesErreur);
    nombre_valide($m,'m',$tabDesErreur);
    nombre_valide($a,'a',$tabDesErreur);

       if (count($tabDesErreur)==0)
   {
       if (!DateValide($j,$m,$a)) {
           echo "Veuiller entrer une date valide";
       }
       else
       {
                if($j == 1 && $m > 1)
                {
                    $weer=DatePrecedente($j,$m,$a);
                    echo "La date precedente est $j/$weer/$a <br>";
                }
            else 
                if($j == 1 && $m == 1)
                {
                    $atte=DatePrecedente($j,$m,$a);
                    echo "La date precedente est $j/$m/$atte <br>";}
                else 
                {
                    $bess=DatePrecedente($j,$m,$a);
                    echo "La date precedente est $bess/$m/$a <br>";
                }
         ##########################################################
                if($j == nbrDeJourDansLeMois($a,$m) && $m < 12)
                   { $weer=DateSuivante($j,$m,$a);
                    echo "La date suivante est $j/$weer/$a ";}
            else 
            {
                if($jour == nbrDeJourDansLeMois($annee,$mois) && $mois == 12)
                   { $atte=DateSuivante($j,$m,$a);
                     echo "La date suivante est $j/$m/$atte ";}
                else 
                { 
                    $bess=DatePrecedente($j,$m,$a);
                    echo "La date suivante est $bess/$m/$a ";
                }
            }
        }
   }
   else
   {
       $_SESSION['erreur']=$tabDesErreur;
       header('location:equation2nd_degres.php');exit();
   } 
   }
   else
   {
    header('location:equation2nd_degres.php');exit();
   }
   
  
?>
          
       
</aside>