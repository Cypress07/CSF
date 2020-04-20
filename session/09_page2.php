<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Page 2</title>
    </head>
    <body>
        <div>
            <strong>Page2</strong><br />
        <?php
        echo 'nom = ',$_SESSION['nom'],'<br />';
        $_SESSION['nom'] ='?';
        session_reset();
        echo 'nom = ',$_SESSION['nom'],'<br />';
        ?>
        </div>
    </body>
</html>
