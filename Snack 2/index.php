<!-- Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare
“Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = $_GET['name'];
echo "<h3>$name</h3>";

$mail = $_GET['mail'];
echo "<h3>$mail</h3>";

$age = $_GET['age'];
echo "<h3>$age</h3>";

$nameControl = false;
$mailControl = false;
$ageControl = false;

if(strlen($name) > 3) {
    $nameControl = true;
    //echo "<h6>Ok 1</h6>";
}

if(strpos($mail, '.') && strpos($mail, '@')) {
    $mailControl = true;
    //echo "<h6>Ok 2</h6>";
}

if(is_numeric($age)) {
    $ageControl = true;
    //echo "<h6>Ok 3</h6>";
}

if(($nameControl == true) && ($mailControl == true) && ($ageControl == true)) {
    echo "<h1>Accesso Riuscito</h1>";
} else {
    echo "<h1>Accesso Negato</h1>";
}

?>