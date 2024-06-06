<?php
require_once "PersOOn.php";

// création d'une instance de la classe PersOOn
$perso1 = new PersOOn("Golum", "Hobbit");
// attribution d'un paramètre de gauche à droite
$perso2 = new PersOOn("Gogole", "Humanoide");
$perso3 = new PersOOn("Golum", "Humain");
//on peut utiliser les arguments nommés despuis PHP 8.0
$perso4 = new PersOOn(hp:50, species: "Elfe", name:"Superman");


var_dump($perso1, $perso2, $perso3, $perso4);



