<?php

class PersoMagicien extends PersoBase {
    //Propriétés (non héritées) - ajout    
    protected ?int $magieType;

    //Propriétés écrasées (public ou protégées) - remplacement
    protected int $force = 50;

    //On ne peut pas l'écraser une propriété privée du parent !
    //private null|bool|int $alive = 5;


    //Méthodes

    //Surcharge du constructeur on peur ajouter des éléments
    public function __construct(string $name, int $age, string $espece, string $magieType )
    {
        //on garde le constructeur du parent
        parent::__construct( $name, $age, $espece );
        //on ajoute ce que l'on souhaite au constructeur de l'enfant
        $this->setMagiePoint = 100; 
    }    
}