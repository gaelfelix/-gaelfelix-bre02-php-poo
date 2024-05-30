<?php

require "Character.php";

$character1 = new Character(1);

echo "{$character1->getId()} {$character1->getFirstName()} {$character1->getLastName()}";

?>