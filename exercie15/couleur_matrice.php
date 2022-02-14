
    <body>
    <link rel="stylesheet" href="style.css" >
    <meta charset="UTF-8">
<aside>
        <?php session_start();?>
        <center><h1>MATRICE</h1></center>
        <h3> DESSINER VOTRE MATRICE</h3>

        <form action="controller.php" method='post'>

            <label class="style_checkbox">
                <input type="text" 
                        name='n' 
                        placeholder="Entrer le nombre" 
                        value="<?php if (!$_SESSION['erreur']['n'] && isset($_SESSION['post']) ) { echo $_SESSION['post']['n'];} 
                                    else {'';}?>"
                ><?php if (isset($_SESSION['erreur']['n'])) {echo $_SESSION['erreur']['n'];}?>
            </label><br>
            <select name="redblue" ><option value="bleu" selected>Bleu</option><option value="rouge">Rouge</option></select>
            <label ><input type="radio" name="haut" checked>Haut</label>
            <label ><input type="radio" name="bas">Bas</label>

            <input type='submit'   name='leboutton' value='Dessiner' class="style_boutton">
        </form>
</aside>

<?php if (isset($_SESSION['erreur'])) {unset($_SESSION['erreur']);}?>
    </body>