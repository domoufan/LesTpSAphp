
    <body>
    <link rel="stylesheet" href="style.css" >
    <meta charset="UTF-8">
<aside>
        <?php session_start();?>
        <center><h1>LES TABLEAUX NOMBRES</h1></center>
        <p><?php 
                echo "
                <table>
                <tr>
                    <td>Janvier</td> <td>Fevrier</td> <td>Marse</td> <td>Avril</td>
                </tr>
                <tr>
                    <td>Mai</td> <td>Juin</td> <td>Julliet</td> <td>Aout</td>
                </tr>
                <tr>
                    <td>September</td> <td>Octobre</td> <td>Novembre</td> <td>Decembre</td>
                </tr>   
            </table>
            ";
        ?></p>

        <form action="controller.php" method='post'>
            <label class="style_checkbox">
            <input type='submit'   name='leboutton' value='En Anglais' class="style_boutton">
        </form>
</aside>
    </body>