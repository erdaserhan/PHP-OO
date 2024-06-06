<?php

require_once "PersOOOn.php";

$perso1 = "Pas encore de personnage";

// si on a cliqué sur envoyer
if(isset($_POST['especePerso'], $_POST['nomPerso'], $_POST['xpPerso'], $_POST['hpPerso'])){
    try{
        $perso1 = new PersOOOn(species2: $_POST['especePerso'], name: $_POST['nomPerso'], xp: $_POST['xpPerso'], hp: $_POST['hpPerso']);
    }catch(Exception $e){
        echo $e->getCode()." ".$e->getMessage();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix d'un PersOOOn</title>
</head>
<body>
    <h1>Choix d'un PersOOOn</h1>
    <form action="" method="POST" name="perso">
    <p>Utilisez un nom de minimum 3 et maximum 16 caractères</p>
    <input type="text" name="nomPerso" placeholder="Votre nom de personnage" required>
    <p>Choisissez votre espece</p>
    <select name="especePerso">
        <option value="nimporte">nimporte</option>
        <?php
            // on peut facilement lire une constante public depuis la classe
            // sans devoir l'instancier avec sont nom, puis ::, puis le nom de la
            // constante
            foreach(PersOOOn::ESPECE_PERSO as $item):
        ?>
        <option value="<?=$item?>"><?=$item?></option>
        <?php
            endforeach;
        ?>
    </select>
    <p>Entrez votre XP</p>
    <input type="number" name="xpPerso" placeholder="Votre XP" required>
    <p>Entrez votre HP</p>
    <input type="number" name="hpPerso" placeholder="Votre HP" required>
    <br> <br>
    <input type="submit" value="Créer le personnage" />
</form>
<br>
<?php
    if ($perso1 instanceof PersOOOn) {
        // appel du getter
        echo "Espece: ".$perso1->getEspecePerso();
        echo "<br>";
        echo "Nom: ".$perso1->getNomPerso();
        echo "<br>";
        echo "XP: ".$perso1->getXpPerso();
        echo "<br>";
        echo "HP: ".$perso1->gethpPerso();
    } else {
        echo $perso1;
    }
    var_dump($_POST,$perso1);
?>
</body>
</html>
