
    <body>
    <link rel="stylesheet" href="style.css" >
    <meta charset="UTF-8">
<aside>
        <?php session_start();?>
        <center><h1>LES NUMEROS DE TELEPHONES</h1></center>
        <h3> ENTRER DES NUMEROS DE TELEPHONES</h3>

        <form action="controller.php" method='post'>

            <label class="style_checkbox">
            <textarea name="numero" placeholder="entrer des numeros de telephones separer par des espaces" cols="30" rows="12"></textarea><?php if (isset($_SESSION['erreur']['n'])) {echo $_SESSION['erreur']['n'];}?>
            </label><br>

            <input type='submit'   name='leboutton' value='Valider' class="style_boutton">
        </form>
</aside>

<?php if (isset($_SESSION['erreur'])) {unset($_SESSION['erreur']);}?>
    </body>