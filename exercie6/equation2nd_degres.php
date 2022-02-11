
    <body>
    <link rel="stylesheet" href="style.css" >
    <meta charset="UTF-8">
<aside>
        <?php session_start();?>
        <center><h1>EQUATION DU 2nd degré</h1></center>
        <h3> ENTRER LES PARAMETRES POUR L'EQUATION aX²+bX+c=0</h3>

        <form action="" method='post'>

            <label class="style_checkbox">
                <input type="text" 
                        name='a' 
                        placeholder="Entrer la valeur de a" 
                        value="<?php if (!$_SESSION['erreur']['a'] && isset($_SESSION['post']) ) { echo $_SESSION['post']['a'];} 
                                    else {'';}?>"
                ><?php if (isset($_SESSION['erreur']['a'])) {echo $_SESSION['erreur']['a'];}?>
            </label><br>

            <label class="style_checkbox">
                <input type="text" 
                        name='b' 
                        placeholder="Entrer la valeur de b" 
                        value="<?php if (!$_SESSION['erreur']['b'] && isset($_SESSION['post']) ) { echo $_SESSION['post']['b'];} 
                                    else {'';}?>"
                ><?php if (isset($_SESSION['erreur']['b'])) {echo $_SESSION['erreur']['b'];}?>
            </label><br>

            <label class="style_checkbox">
                <input type="text" 
                        name='c' 
                        placeholder="Entrer la valeur de c" 
                        value="<?php if (!$_SESSION['erreur']['c'] && isset($_SESSION['post']) ) { echo $_SESSION['post']['c'];} 
                                    else {'';}?>"
                ><?php if (isset($_SESSION['erreur']['c'])) {echo $_SESSION['erreur']['c'];}?>
            </label><br>

            <input type='submit'   name='leboutton' value='Valider' class="style_boutton">
        </form>
</aside>

<aside class="aside_rendu">           
        
</aside>
<?php if (isset($_SESSION['erreur'])) {unset($_SESSION['erreur']);}?>
    </body>
