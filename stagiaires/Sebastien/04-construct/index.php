<?php
require_once 'PersOOn.php';


// creation d'une instance (objet) de la class persoon
$perso1 = new PersOOn("Golum","Hobbit");
//attribution des argument aux parametre de gauche a droit (par defaut)
$perso2 = new PersOOn("gogole","Humain",null,80);
$perso3 = new PersOOn("273","275");
// on ^peut utuliser les argument nommee depuis php8.0
$perso4 = new PersOOn( hp:50,name:"superman",species:"Elfe");




var_dump($perso1,$perso2,$perso3,$perso4);