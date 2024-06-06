<?php
// chargement d'un fichier contenant une classe
require_once "PremiereClasse.php";

// on peut instancier cette classe, en utilisant le mot clef mot NEW, elle se trouve vers une variable qui pointe vers l'object créé
$instance1 = new PremiereClasse(); // bonne pratique avec ()
$instance2 = new PremiereClasse;
// ! $instance 1 et o$instance3 ne sont que des pointeurs (étiquettes, tags, ....) vers l'object créé avec le mot clef NEW, c'est donc le même objet
$instance3 = $instance1;
// il faudra cloner l'object pour en avoir une copie exacte

//on visualise que $instance3 est identique à 
var_dump($instance1, $instance2, $instance3);

$array1 = [1,2,3,4,5];
//ceci suffit à cloner le tableau (chacun a un espace réservé en memoire)
$array2 = $array1;
//modification d'un des 2 tableaux
$array2[] = 6;
// puis l'autre
$array1[15] ="coucou";

//on visualise que les modifications d'un ne touchent pas l'autre
var_dump($array1, $array2);