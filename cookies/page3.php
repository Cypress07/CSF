<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Page 3</title>
    </head>
    <body>
        <div>
        <?php
            if (isset($_COOKIE["prenom"])) {
                echo "\$_COOKIE['prenom'] = {$_COOKIE['prenom']} <br>";
            }
            if (isset($_COOKIE["prenom"])) {
                echo "\$_COOKIE['nom'] = {$_COOKIE['nom']} <br>";
            }
        ?>
        </div>
    </body>
</html>