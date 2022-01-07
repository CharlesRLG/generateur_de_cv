<div id="accueil">
        <h2>Présentation</h2>
        <p>Bienvenue sur ce générateur de CV
        cliquer sur commencer pour démarrer !</p>

        <?php
        if(!empty($_POST['commencer'])) {
        include "identite.php";
        }
        ?>
        <div>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <input type="submit" id="commencer" name="commencer" value="commencer">
                <form>
        </div>

</div>
