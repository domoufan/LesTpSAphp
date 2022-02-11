<link rel="stylesheet" href="style.css" >
<body>
    

<aside class="aside_rendu"> 

<?php
     include_once 'fonctions.php';

   if (isset($_POST['leboutton'])) { 
      
      tableauAnglais();
   }
   else
   {
    header('location:tableau.php');exit();
   }
   
?>
              
</aside>
</body>