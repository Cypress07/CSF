<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Page 3</title>
    </head>
    <body>
        <div>
            <strong>Page 3</strong><br />
        <?php
        echo 'nom = ',$_SESSION['nom'],'<br />';
        ?>
        </div>
    </body>
</html>
