
<?php
    session_start();
     include_once 'fonctions.php';

   if (isset($_POST['leboutton'])) {
    $a= $_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $_SESSION['post']=$_POST;
    $tabDesErreur=[];
    nombre_valide($a,'a',$tabDesErreur);
    nombre_valide($b,'b',$tabDesErreur);
    nombre_valide($c,'c',$tabDesErreur);

       if (count($tabDesErreur)==0)
   {
       equation($a,$b,$c);
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
   
    if (isset($_SESSION['erreur'])) {unset($_SESSION['erreur']);}
?>
