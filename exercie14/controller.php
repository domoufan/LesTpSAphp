<link rel="stylesheet" href="style.css" >
<body>
    

<aside class="aside_rendu"> 

<?php
    session_start();
     include_once 'fonctions.php';

   if (isset($_POST['leboutton'])) {
      
    $numeros= $_POST['numero'];

    $_SESSION['post']=$_POST;
    $tabDesErreur=[];
    nombre_valide($numeros,'numero',$tabDesErreur);
    $numeros_valides=[];
    $numeros_invalides=[];

      if (count($tabDesErreur)==0)
       {
          $nums=explode(' ',$numeros) ;
          #var_dump($nums);exit();
          $i=0;$j=0;
          foreach ($nums as $key => $value) {
            
            if ((str_starts_with($value,'77') || str_starts_with($value,'76') || str_starts_with($value,'78') || str_starts_with($value,'75') || str_starts_with($value,'70')) && strlen($value)===9 && is_numeric($value)) {
              
                $numeros_valides[$i]=$nums[$key];
                $i++;
            }
            else{
                $numeros_invalides[$j]=$nums[$key];
                $j++;
            }
          }

       }
       else
        {
              $_SESSION['erreur']=$tabDesErreur;
              header('location:number_phone.php');exit();
        } 
   }
   else
   {
    header('location:number_phone.php');exit();
   }
   
  
?>

<div class="num_val">
  <center>les entrées valides</center>
  <?php
    foreach ($numeros_valides as $key => $value) {
      echo "$value <br>";
    }
  ?>
</div>
<div class="num_inval">
<center>les entrées invalides</center>
<?php
    foreach ($numeros_invalides as $key => $value) {
      echo "$value <br>";
    }
  ?>
</div>
          
       
</aside>
</body>
