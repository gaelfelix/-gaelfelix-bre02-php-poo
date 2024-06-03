<?php

require_once ("Reader.php");

$reader1 = new Reader("fabian.rieder@gmail.com", "StadeRennais35"); // j'espère pour lui que son email est moins facile à deviner que ça xD

$reader1->addBookToFavorites("Retour à Reims"); 
$reader1->addBookToFavorites("Petit Pays");
$reader1->removeBookFromFavorites("Petit Pays");

var_dump($reader1);

$r1Login = $reader1->login(); // ✅  

echo $r1Login["login"] . $r1Login["password"];

// appeler une méthode : $instanceDeClasse->methode()

?>