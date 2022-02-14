
    <body>
    <link rel="stylesheet" href="style.css">
<aside>

         <?php
            include_once 'fonctions.php';

            $n1=rand(1,10);$n2=rand(1,10);
            permutation($n1,$n2);
            $name=$_POST['leboutton'];

        ?>

        <center><h1>PERMUTATION</h1></center>
        Le nombre N1 generer est <?php echo $n1."<br>"?>
        et le nombre N2 generer est <?php echo $n2?>
        

        <form action="" method='post'>
                   <input type='submit'   name='leboutton' value='Valider' class="style_boutton">
        </form>
</aside>

<aside class="aside_rendu">           

 <?php include_once 'controller.php' ?>
               
</aside>
    </body>