
    <body>
    <link rel="stylesheet" href="style.css">
<aside>

         <?php
            include 'fonctions.php';

            $longueur=rand(10,20);$largeur=rand(1,10);
            $p=perimetre($longueur,$largeur);
            $s=surface($longueur,$largeur);
            $d=diagonale($longueur,$largeur);
            $parametre=$_POST['parametre'];
            $name=$_POST['leboutton'];

        ?>

        <center><h1>PARAMETRE RECTANGLE</h1></center>
        La largeur generer est <?php echo $largeur?>
        et la longueur generer est <?php echo $longueur?>
        <h3>choisisser un(des) parametre(s) a afficher</h3>

        <form action="" method='post'>
            <label class="style_checkbox"><input type="checkbox" name='parametre[]' value='p' $attribute > Le perimetre</label><br>
            <label class="style_checkbox"><input type="checkbox" name='parametre[]' value='s' $attribute> La surface</label><br>
            <label class="style_checkbox"><input type="checkbox" name='parametre[]' value='d' $attribute> Le diagonale</label><br><br>
                   <input type='submit'   name='leboutton' value='Valider' class="style_boutton">
        </form>
</aside>

<aside class="aside_rendu">           

 <?php include_once 'controller.php' ?>
               
</aside>
    </body>