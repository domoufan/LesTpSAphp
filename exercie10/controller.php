<link rel="stylesheet" href="style.css" >
<body>
    

<aside class="aside_rendu"> 

<?php
    session_start();
     include_once 'fonctions.php';

   if (isset($_POST['leboutton'])) {
      
    $n= $_POST['n'];

    $_SESSION['post']=$_POST;
    $tabDesErreur=[];
    nombre_valide($n,'n',$tabDesErreur);


      if (count($tabDesErreur)==0)
       {
            n_inputs($n);
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
</body>