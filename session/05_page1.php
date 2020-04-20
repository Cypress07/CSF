<?php
session_start();
$_SESSION['nom']='John';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Page 1</title>
    </head>
    <body>
    <div>
        <strong>Page1</strong><br />
        <?php
        echo 'nom = ',$_SESSION['nom'],'<br />';
        ?>
        <a href="06_page2.php">Page2><a/><br />
    </body>
</html>
