<?php
require("Duck.php");
require("Turkey.php");
require("TurkeyAdapter.php");


// FUNCION TRADUCTOR Cambiando el parámetro
function duck_interaction($duck) {
    $duck->quack();
    $duck->fly();
}

$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);

echo "The Turkey says...\n";
$turkey->gobble();
$turkey->fly();

echo "The Duck says...\n";
duck_interaction($duck);

echo "The TurkeyAdapter says...\n";
duck_interaction($turkey_adapter);

