
    <body>
    <link rel="stylesheet" href="style.css" >
    <meta charset="UTF-8">
<aside>
        <?php session_start();?>
        <center><h1>EQUATION DU 2nd degré</h1></center>
        <h3> ENTRER LES PARAMETRES POUR L'EQUATION aX²+bX+c=0</h3>

        <form action="controller.php" method='post'>

            <label class="style_checkbox">
                <input type="text" 
                        name='j' 
                        placeholder="Entrer le jour" 
                        value="<?php if (!$_SESSION['erreur']['j'] && isset($_SESSION['post']) ) { echo $_SESSION['post']['j'];} 
                                    else {'';}?>"
                ><?php if (isset($_SESSION['erreur']['j'])) {echo $_SESSION['erreur']['j'];}?>
            </label><br>

            <label class="style_checkbox">
                <input type="text" 
                        name='m' 
                        placeholder="Entrer le mois" 
                        value="<?php if (!$_SESSION['erreur']['m'] && isset($_SESSION['post']) ) { echo $_SESSION['post']['m'];} 
                                    else {'';}?>"
                ><?php if (isset($_SESSION['erreur']['m'])) {echo $_SESSION['erreur']['m'];}?>
            </label><br>

            <label class="style_checkbox">
                <input type="text" 
                        name='a' 
                        placeholder="Entrer l'annee" 
                        value="<?php if (!$_SESSION['erreur']['a'] && isset($_SESSION['post']) ) { echo $_SESSION['post']['a'];} 
                                    else {'';}?>"
                ><?php if (isset($_SESSION['erreur']['a'])) {echo $_SESSION['erreur']['a'];}?>
            </label><br>

            <input type='submit'   name='leboutton' value='Valider' class="style_boutton">
        </form>
</aside>

<?php if (isset($_SESSION['erreur'])) {unset($_SESSION['erreur']);}?>
    </body>
