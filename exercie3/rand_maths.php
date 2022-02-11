
    <body>
    <link rel="stylesheet" href="style.css">
<aside>

         <?php
            include 'fonctions.php';

            $nombre1=rand(1,10);$nombre2=rand(1,10);

            $m=     modulo($nombre1,$nombre2);
            $s=     somme($nombre1,$nombre2);
            $div=   division($nombre1,$nombre2);
            $dif=   difference($nombre1,$nombre2);
            $p=     produit($nombre1,$nombre2);
                    carre($nombre1,$nombre2);
                    exponnentiel($nombre1,$nombre2);

            $parametre=$_POST['parametre'];
            $name=$_POST['leboutton'];

        ?>

        <center><h1>PARAMETRES MATHEMATIQUES</h1></center>
        Le nombre N1 generer est <?php echo $nombre1?>
        et le nombre N2 generer est <?php echo $nombre2?>
        <h3>choisisser un(des) parametre(s) a afficher</h3>

        <form action="" method='post'>
            <label class="style_checkbox"><input type="checkbox" name='parametre[]' value='p'  > Le produit</label><br>
            <label class="style_checkbox"><input type="checkbox" name='parametre[]' value='s' > La somme</label><br>
            <label class="style_checkbox"><input type="checkbox" name='parametre[]' value='m' > Le modulo</label><br>
            <label class="style_checkbox"><input type="checkbox" name='parametre[]' value='div' > La division</label><br>
            <label class="style_checkbox"><input type="checkbox" name='parametre[]' value='dif' > La difference/label><br>
            <label class="style_checkbox"><input type="checkbox" name='parametre[]' value='e' > L'exponnentiel</label><br>
            <label class="style_checkbox"><input type="checkbox" name='parametre[]' value='c' > Le carre</label><br><br>
                   <input type='submit'   name='leboutton' value='Valider' class="style_boutton">
        </form>
</aside>

<aside class="aside_rendu">           

 <?php include_once 'controller.php' ?>
               
</aside>
    </body>