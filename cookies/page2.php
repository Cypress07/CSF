<?php

//Premier cookie expirant à la fin de la journée
$ok1 = setcookie('prenom', 'John');

//Deuxieme cookie expirant dans 30 jours
$ok2 = setcookie('nom', 'DOE', time()+(30*24*3600));

//Résultat
if ($ok1 and $ok2){
    $message ='Cookies déposés (du moins, à priori)';
} else {
    $message = 'L\'un des cookies n\'a pas pu être déposé';
}
?>
