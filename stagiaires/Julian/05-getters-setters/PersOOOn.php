<?php

class PersOOOn {
    /*
     Propriétés -> équivalent variables
     */
    private string $especePerso;
    private string $nomPerso;
    protected ?int $xpPerso; // xp du personnage, peut être null ou int (?int)
    // équivalent depuis PHP 8.0 (Union type) : protected null|int $xpPerso;
    protected null|bool|int $hpPerso; // si plus de 2 types, utilisation des pipes

    /*
    Constantes -> équivalent constantes
    */
    // Les espèces qui seront acceptées dans le jeu
    public const ESPECE_PERSO = [
        "Humain",
        "Elfe",
        "Nain",
        "Orc",
        "Hobbit",
        "Gobelin",
    ];

    /*
    Méthodes -> équivalent fonctions
    */

        /*
         Méthode Magique : constructeur

         C'est une méthode publique qui est appelée lors de l'instanciation d'une classe
         donc l'utilisation du mot clef new.
         Elle permet de passer des paramètres lors de la création de l'instance
         */

         public function __construct(string $species2, string $name, int $xp = 0, bool|int $hp = false)
         {
             //! on va utiliser les setters pour remplir les paramètres
             $this->setEspecePerso($species2);
             $this->setNomPerso($name);
             $this->setXpPerso($xp);
             $this->sethpPerso($hp);
         }

        /*
        Setters (mutators)
        Ils permettent de modifier des propriétés, quelque-soit la visibilité (plus rare pour les public, sauf avec readonly), tout en vérifiant la validité des données reçues.
        Les setters sont toujours publiques (donc utilisable depuis l'extérieur de la classe et héritable)
        On les écrits avec le mot clef 'set' suivi du nom de l'attribut mis en majuscule
        $especePerso devient setEspecePerso() :
        */

        /*
            règles mise en place pour modifier $espacePerso
        */
        public function setEspecePerso(string $species): void// void signifie pas de retour (cette méthode est une procédure)
        {
            // si $species se touve dans la constante ESPECE_PERSO
            // qui est un tableau (utilisation de in_array)
            // self représente la class
            if(in_array($species,self::ESPECE_PERSO)){
                $this->especePerso = $species;
            }else{
                throw new Exception("Espèce inconnue !", 333);
            }
        }

        // setter de $nomPerso (protection + 3 à 16 caractères)
        // with trim and htmlspecialcharacters and striptags

        public function setNomPerso(string $name): void
        {
            $name = trim(htmlspecialchars(strip_tags($name)));
            if(strlen($name) >= 3 && strlen($name) <= 16){
                $this->nomPerso = $name;
            }else{
                throw new Exception("Le nom doit être compris entre 3 et 16 caractères", 666);
            }
        }

        // setter de $xpPerso (int positif)

        public function setXpPerso(int $xp): void
        {
            if($xp >= 0){
                $this->xpPerso = $xp;
            }else{
                throw new Exception("L'expérience doit être un nombre positif", 999);
            }
        }

        // setter de $hpPerso (bool pour false ou un int)

        public function sethpPerso(bool|int $hp): void
        {
            if(is_bool($hp) || is_int($hp)){
                $this->hpPerso = $hp;
            }else{
                throw new Exception("Les points de vie doivent être un booléen ou un nombre", 777);
            }
        }


        /*
        Getters - accessors
        Permet de récupérer des propriétés généralement private ou protected
        en dehors de la classe.
        On utilise le nom de la propriété auquel on préfixe avec le mot clef
        get suivi de la première lettre en majuscule :
        pour $especePerso => getEspecePerso()
        */

        // getter de $especePerso
        public function getEspecePerso(): string
        {
            return $this->especePerso;
        }

        // getter de $nomPerso (string))

        public function getNomPerso(): string
        {
            return $this->nomPerso;
        }


        // getter de $xpPerso (null ou int)

        public function getXpPerso(): null|int
        {
            return $this->xpPerso;
        }

        // getter de $hpPerso (bool|null|int)

        public function getHpPerso(): null|bool|int
        {
            return $this->hpPerso;
        }

}