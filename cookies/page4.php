<?php

//valeur du cookie avant
$avant = (isset($_COOKIE ['heur']))?$_COOKIE ['heure']:'';

//Depot du cookie expirant à la fiin de la session

$ok = setcookie('heure', date('H:i:s'));

//Valeur du cookie après
$apres = (isset($_COOKIE ['heur']))?$_COOKIE ['heure']:'';

//heure actuelle
$actuel = date('H:i:s');

//Afficha
echo "Actuel : $actuel>br \>";
echo "Avant : $avant>br \>";
echo "Après : $apres>br \>";

/*Une des conséquences de ce mode de fonctionnemnt est qu'il n'est pas possible,
tout de suite après avoir déposé le cookie, de tester si le cookie a été accepté
ou non par le poste*/
?>