<?php
require("Tigger.php");
// Obtener la instancia de Tigger
$t1 = Tigger::getInstance();
//↓↓ -PRUEBAS- Me devuelve la misma instancia
$t2=  Tigger::getInstance();


$t1->roar(); 
$t1->roar(); 
$t2->roar();//→Pruebas

$counter = $t1->getCounter();
echo "Número de rugidos: $counter"; 