
    <body>
    <link rel="stylesheet" href="style.css">
<aside>

         <?php
            include_once 'fonctions.php';
            $name=$_POST['leboutton'];
            coordonner();
            $dis=distance($x,$y);
        ?>

        <center><h1>PERMUTATION</h1></center>
        Le premier point  generer est <?php echo "P1(".$x['abscisse'].",".$x['ordonne'].")<br>"?>
        et le deuxieme point  generer est <?php echo "P2(".$y['abscisse'].",".$y['ordonne'].")"?>
        

        <form action="" method='post'>
                   <input type='submit'   name='leboutton' value='Valider' class="style_boutton">
        </form>
</aside>

<aside class="aside_rendu">           

 <?php include_once 'controller.php' ?>
               
</aside>
    </body>