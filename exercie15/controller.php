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
    $premier_paginer=paginer($T['premier']);
    $inferieur_paginer=paginer($T['inferieur']);
    $superieur_paginer=paginer($T['superieur']);


    $_SESSION['post']=$_POST;
    $tabDesErreur=[];
    nombre_valide($n,'n',$tabDesErreur);


      if (count($tabDesErreur)==0 && $n>10)
       {
          echo "<form action='' method='post'>";
           echo n_inputs(count($premier_paginer));
           echo "
           <label class='style_checkbox'>
               <input type='submit' name='ok_page' value='Ouvrir'>
           </label>";       
          echo  "</form>";

          if (isset($_POST['m']) && isset($_POST['ok_page'])) {
            $c=1;
            while ($c <= count($premier_paginer)) {
              if ($_POST['m']== $c) {
                echo $premier_paginer[$c];
              }
              $c++;
            }
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