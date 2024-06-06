<?php 

// chargement d'un fichier contenant une classe
require_once 'PremiereClass.php';

// on peut instancier cette classe, en utilisant le mot clef new, elle se trouve dans une variable qui pointe vers l'object cree

$instance1 = new PremiereClass();
$instance2 = new PremiereClass;
$instance3 = $instance1;

//! $instance1 et $instance3 ne sont que des ponteurs vers l'objet cree avec le mot clef new

// il faudra cloner l'objet pour en avoir une copie exacte

// on visualise que $instance3 est identique a $instance1
var_dump($instance1, $instance2, $instance3);   

$array1 = [1, 2, 3, 4, 5];
// ceci suffit a cloner le tableau (chacun a un espace reserve en memoire)
$array2 = $array1;
// modification d'un des 2 tableaux
$array2[] = 6;
$array1[15] = "coucou";

//on visualise que les modification d'un ne touche pas l'autre
var_dump($array1, $array2);