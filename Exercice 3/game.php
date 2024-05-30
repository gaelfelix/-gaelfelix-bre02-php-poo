<?php

require ("Character.php");

$character1 = new Character("Ragnar");
$character1->getWeapon()->setName("Sword");
$character1->getWeapon()->setDamage(10);

echo "{$character1->getName()} {$character1->getWeapon()->getName()} {$character1->getWeapon()->getDamage()}";
echo $character1->fight();

?>