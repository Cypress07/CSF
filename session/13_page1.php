<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
        <?php
            function texte_statut($valeur){
                switch ($valeur){
                    case PHP_SESSION_DISABLED:
                        return 'PHP_SESSION_DISABLED';
                    case PHP_SESSION_NONE:
                        return 'PHP_SESSION_NONE';
                    case PHP_SESSION_ACTIVE:
                        return 'PHP_SESSION_ACTIVE';
            }
            return '?';
            }
            echo 'Avant session_start() :',
                texte_statut(session_status()), '<br />';
            echo 'Après session_start() :',
                texte_statut(session_status()), '<br />';
                session_destroy();
            echo 'Après session_destroy() :',
            texte_statut(session_status()), '<br />';
        ?>
        </div>
    </body>
</html>
