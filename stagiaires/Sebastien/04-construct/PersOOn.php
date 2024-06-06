<?php


// creation d'une instance (objet) de la class persoon

class PersOOn {
  //proprietes -> variables
  private string $especePerso;
  private string $nomPerso;
  protected ?int $xpPerso; // xp du personnage peux etre null ou int (?int == null)
   // equivalant PHP8.0 : protected int|null $xpPerso;
   protected null|bool|int $hpPerso;  //si plus de 2 type , utulisation des pipes 



   /*
    constantes -> constantes
   */
  //les espece qui seront acceptees dans le jeu 
   public const ESPECE_PERSO = [
    "Humain",
    "Elfe",
    "Nain",
    "Orc",
    "Hobbit",
    "Gobelin"
   ];

/*
methodes -> equivalant fonctions
*/

// methodes magic : constructeur

// c'est une methode publique qui est appeler lors de l 'instantation d' un classe donc l 'utulisation du mots clew new.
//elle permet de passer des parametre lors de la creation de l'instance

public function __construct(string $name,string $species,?int $xp = 0,null|bool|int $hp =100)
{
    // on peut remplire immediatement les parametre (mauvais patrique)
    $this->nomPerso = $name;
    $this-> especePerso = $species;
    $this-> xpPerso = $xp;
    $this->hpPerso = $hp;
}

}