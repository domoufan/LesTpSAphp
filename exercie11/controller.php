<link rel="stylesheet" href="style.css" >
<body>
    

<aside class="aside_rendu"> 

<?php
    session_start();
     include_once 'fonctions.php';

   if (isset($_POST['leboutton'])) {
      
    $n= (int)$_POST['n'];
    
    $T=[
         'premier' =>[],
         'superieur' =>[],
         'inferieur' =>[]
    ];
    $T['premier']=remplir_depremier($T['premier'],$n);
    $m=moyenne_tab($T['premier']);
    $T['inferieur']=remplir_inferieur($T['inferieur'],$T['premier'],$m);
    $T['superieur']=remplir_superieur($T['superieur'],$T['premier'],$m);

    

    $_SESSION['post']=$_POST;
    $tabDesErreur=[];
    nombre_valide($n,'n',$tabDesErreur);


      if (count($tabDesErreur)==0 && $n>10)
       {
            foreach ($T['premier'] as $key => $value) {
               echo $T['premier'][$key]."||";
            }
            echo "<br>";
            foreach ($T['superieur'] as $key => $value) {
               echo $T['superieur'][$key]."||";
            }
            echo "<br>";
            foreach ($T['inferieur'] as $key => $value) {
               echo $T['inferieur'][$key]."||";
            }
       }
       else
        {
              $_SESSION['erreur']=$tabDesErreur;
              header('location:tableau.php');exit();
        } 
   }
   else
   {
    header('location:tableau.php');exit();
   }
   
  
?>
          
       
</aside>
</body>