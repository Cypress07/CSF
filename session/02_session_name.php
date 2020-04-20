<?php

//Récupérer la valeur de session_name avant
$avant = session_name();
//Ouvrir/réactiver la session
session_start();
//Récupérer la valauer de session_name après
$apres = session_name();
//Affichage
echo "Avant : $avant<br \>";
echo "Après : $apres<br\>";
?>
