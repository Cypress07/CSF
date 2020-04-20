<?php
session_start();

$_SESSION = array();

if (isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-1,'/');
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Page 2</title>
    </head>
    <body>
        <div>
            <b>Page 2</b><br />
        <?php
        echo 'Bonjour ',$_SESSION['nom'],'<br />';
        echo 'session_id() = ', session_id(), '<br />';
        ?>
        <a href="12_page3.php">Page 3</a><br />
    </div>
    </body>
</html>
