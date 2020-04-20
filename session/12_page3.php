<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <b>Page3</><br/>
         <?php
        echo 'Bonjour ',$_SESSION['nom'],'<br />';
        echo 'session_id() = ', session_id(), '<br />';
        ?>
        </div>
    </body>
</html>
