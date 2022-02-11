
    <body>
    <link rel="stylesheet" href="style.css" >
    <meta charset="UTF-8">
<aside>
        <?php session_start();?>
        <center><h1>LES TABLEAUX NOMBRES</h1></center>
        <h3> ENTRER UN NOMBRE superieur a 10</h3>

        <form action="controller.php" method='post'>

            <label class="style_checkbox">
                <input type="text" 
                        name='n' 
                        placeholder="Entrer le nombre" 
                        value="<?php if (!$_SESSION['erreur']['n'] && isset($_SESSION['post']) ) { echo $_SESSION['post']['n'];} 
                                    else {'';}?>"
                ><?php if (isset($_SESSION['erreur']['n'])) {echo $_SESSION['erreur']['n'];}?>
            </label><br>

            <input type='submit'   name='leboutton' value='Valider' class="style_boutton">
        </form>
</aside>

<?php if (isset($_SESSION['erreur'])) {unset($_SESSION['erreur']);}?>
    </body>