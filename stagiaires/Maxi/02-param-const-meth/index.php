<?php
require_once "SecondeClasse.php";
$instance1 =new SecondeClasse();

var_dump($instance1);
?>
<h4>Affichage d'un paramètre par une méthode publique</h4>
<?php

//utilisation d'une methode pour afficher un paramètre (aui en principe ne sera pas public) -> getter
echo $instance1 -> getParam2()."<br>";
//comme le paraètre est public ; on peut l'afficher sans passer par un getter
echo $instance1 -> param2;

?>
<h4>danger d'un paramètre publique</h4>
<p>comme le paramètre est publique, on va pouvoir le modifier en dehors de la classe <br>
<?php
$instance1 -> param2 = "au revoir";
echo $instance1 ->param2;