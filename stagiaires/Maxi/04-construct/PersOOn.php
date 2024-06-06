<?php

class PersOOn {
    //propriétés -> variables
    private string $especePerso;
    private string $nomPerso;
    protected ?int $xpPerso; // xp du personnag, peut être null ou int (?int)
    //equivalent despuis PHP 8.0 : protected null|int $xpPerso;
    protected null|bool|string|int $hpPerso; //si plus de 2 types, utilisation des pipes (|)


    //constantes -> équivalent constantes
    //les especes que seront acceptéesdans le jeu
    public const ESPECE_PERSO = [
        "Humain",
        "Elfe",
        "Nain",
        "Orc",
        "Hobbit",
        "Gobelin",
    ];
    //methodes -> equivalent des fontcations

    //methode magique : constructeur
    //c'est une methode publice qui est appelée lors de l'instanciation de la classe donc l'utilisation du mot clé new.
    //Elle permet de passer des paramètres lors de la creation de la instance.
    public function __construct(string $name, string $species, ?int $xp = null, null|bool|string|int $hp =100) {
        //on peut remplir inmediatement les paramètres (mauvaise pratique)
        $this->nomPerso = $name;
        $this->especePerso = $species;
        $this->xpPerso = $xp;
        $this->hpPerso = $hp;

    }
}