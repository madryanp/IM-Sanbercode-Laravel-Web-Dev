<?php

require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$object = new Animal("Singa");

echo "Nama binatang : $object->name <br>";
echo "jumlah kaki : $object->legs <br>";
echo "cold Blooded : $object->cold_blooded <br><br>";


$object2 = new Frog("Buduk");

echo "Nama binatang : $object2->name <br>";
echo "jumlah kaki : $object2->legs <br>";
echo "cold Blooded : $object2->cold_blooded <br>"; 
$object2->jump();
echo "<br> <br>";



$object3 = new Ape("Kera sakti");

echo "Nama binatang : $object3->name <br>";
echo "jumlah kaki : $object3->legs <br>";
echo "cold Blooded : $object3->cold_blooded <br>";
$object3->yell();
echo "<br> <br>";


