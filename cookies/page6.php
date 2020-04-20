<?php

//Il est possible d e récupérer un tableau comme valeur de cookie sous
//réserve d'utiliser une notation de type tableau lors du dépôt du cookie
//
//Tester si c'est le deuxième appel de la page
if (! isset ($_GET['retour'])) {
    // Non ..
    // Déposer le cookie
    setcookie('test[0]', 'zero');
    setcookie('test[1]', 'un');
    //Et recharger la page avec une information dans
    //l'URL indiquant que c'est le deuxième passage
    header('Location: page6.php?retour=1');
} else{
    //oui...
    //Tester si le cookie est "revenu"
    if (isset($_COOKIE['test'])){
        echo 'Cookie accpeté';
    } else {//non...
        echo 'Cookie refusé';
    }
}

?>