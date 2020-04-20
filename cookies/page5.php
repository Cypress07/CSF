<?php

//Pour savoir si un poste accepte les cookies, il faut déposer
//un cookie et recharger une page dans laquelle la présence ou non
//du cookie permettra de déterminer si le poste accepte les cookies
//
//Tester si c'est le deuxième appel de la page
if (! isset ($_GET['retour'])) {
    // Non ..
    // Déposer le cookie
    setcookie('test', 'test');
    //Et recharger la page avec une information dans
    //l'URL indiquant que c'est le deuxième passage
    header('Location: page5.php?retour=1');
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