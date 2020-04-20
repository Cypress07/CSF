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
            <strong>Page 2</strong><br />
        <?php
        echo 'nom = ',$_SESSION['nom'],'<br />';
        $_SESSION['nom'] ='?';
        session_abort();
        echo 'nom =',$_SESSION['nom'],'<br />';
        ?>
            <a href="07_page3.php">Page 3</a><br />
        </div>
    </body>
</html>
