<?php 
// Ouvrir/réactiver la session
session_start();
//Enregistrer deux informations dans la session
$_SESSION['prenom']='John';
$_SESSION['information']=//c'est un tableau
        array('prenom'=>'John', 'nom'=>'DOE');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Page1</title>
    </head>
    <body>
        <div><a href="04_page2.php">Page1</a></div>
    </body>
</html>
