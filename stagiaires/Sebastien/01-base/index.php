<?php
// chargement d'un fichier contenant une classe
require_once "PremiereClasse.php";

// on peut instancier cette classe, en utilisant le mot clef new ,  elle se trouve dans une variable qui point vers l'object créé

$instance1 = new PremiereClasse(); // bonne pratique , ()
$instance2 = new PremiereClasse;
// ! $instance1 et $instance3 ne sont que des pointeurs vers l'objet créé avec le mot clef new, c'est donc le meme objet!
$instance3 = $instance1;


// il faudra coloner l'objet pour en avoir une copie exacte

//on visualise que $instance3 est identique à
var_dump($instance1,$instance2,$instance3);


$array1 = [1,2,3,4,5];
// ceci suffit à  cloner le tableau (chacun a un espace reserver en memoire)
$array2 = $array1;
// modification d une des 2 tableaux
$array2[] = 6;
// puis l'autre 
$array1[15]="coucou";

// on visualise que les modifications d'un ne touche pas l autre 

var_dump($array1,$array2);

