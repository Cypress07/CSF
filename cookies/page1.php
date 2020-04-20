<?php

// Dépot d'un cookie nommé "nom" contenant
// la valeur "DOE" et expirant à la fin de la session
// la session
$ok = setCookie('nom', 'DOE');

//Idem mais expirant à date du jour (time() en secondes)
//plus 30 fois 24 fois 3600 secondes (soit30 jours)
$ok = setcookie('nom', 'DOE', time()+(30*24*3600));

//La même hose ne utilisant la syntaxe avec tableau
$options = [ 'expires' => time()+(30*24*3600), 'secure' => TRUE];
$ok = setCookie('nom', 'DOE', $options);

//Suppression du cookie nommé 'nom'
$ok = setCookie('nom');

?>
