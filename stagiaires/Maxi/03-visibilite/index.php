<?php
require_once "TroisiemeClasse.php";

$instance1 = new TroisiemeClasse();

echo $instance1 ->param1."<br>";
// imposible d'afficher les paramètres privés et protégés

//echo $instance1 ->param2."<br>";
//echo $instance1 ->param3."<br>";

// modification possible du paramètre public (problème!)
$instance1 ->param1 = "255";
echo $instance1->param1."<br>";

//affichage d'une constant publique
echo $instance1::CONST_1."<br>"; // fonctionne mais mauvaise pratique, car  il  est conseillé d epartir de la classe et non l'instance

echo TroisiemeClasse::CONST_1."<br>";
