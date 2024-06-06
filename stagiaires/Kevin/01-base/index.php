<?php
# Chargement d'un fichier contenant une classe.
require_once "PremiereClasse.php";

# On peut instancier cette classe, en utilisant le mot clef new.
# L'instance se trouve dans une variable qui pointe vers l'object crée.
$premiereClasse = new PremiereClasse(); # Bonne pratique, ()
$premiereClasse2 = new PremiereClasse;
# ! $premiereClasse et $premiereClasse3 ne sont que des pointeurs vers l'objet crée avec le mot clef new
# C'est donc le même objet !
$premiereClasse3 = $premiereClasse;

# Il faudra cloner l'objet pour en avoir une copie exacte.
# ...

$array1 = [1,2,3,4,5];
# Ceci suffit à cloner le tableau ( chacun a un espace réservé en mémoire ).
$array2 = $array1;
// Modification d'un des 2 tableaux.
$array2[] = 6;
$array1[15] = "coucou";
// On visualise que les modifications d'un ne touchent pas l'autre.
var_dump($array1, $array2);

# On visualise que $premiereClasse3 est identique à $premiereClasse.
var_dump($premiereClasse, $premiereClasse2, $premiereClasse3);
echo $premiereClasse->proprietePublique;
