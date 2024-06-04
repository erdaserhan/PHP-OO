<?php

abstract class PersoAbstract{
    // Propriétés
    protected ?string $name;
    protected int $healthPoint = 1000;
    protected ?int $experience = 0;
    protected string $espece;

    //Constantes public
    public const ESPECE_CHOICE = [
        "Humain", 
        "Saiyan",   
        "Elf",
        "Nain",
        "Cyborg",
    ];
    //Constantes protected
    protected const THROW_DICE_SMALL = 6; 
    protected const THROW_DICE_BIG = 20; 

    //Méthodes

    //un méthodes abstract, elle sont déclarées dans la class abstract, pour obliger les héritiers à redéclarer ces méthodes en public ou protected
    // On les applique ici à des getters et setters, c'est plutôt rare
    abstract public function setHealthPoint(int $health);
    abstract public function getHealthPoint(): int;

    abstract public function setExperience(int $exp);
    abstract public function getExperience(): int;

    // Plus courant, des méthodes qui seront obligatoires pour tous les persos
    abstract public function attack($enemy);
    abstract public function defence();


    //Méthode construct qui sera héritée
    public function __construct(string $theName, string $theEspece)
    {
        $this->setName($theName);
        $this->setEspece($theEspece);
    }

    /*
    Méthodes pour les lancer de dés 
    */
    public function throwSmallDice(int $number, bool $addition = true): int
    {
        $int = 0;
        for($i = 0; $i<$number; $i++){
            if($addition){
                $int += random_int(1, self::THROW_DICE_SMALL);
            }else{
                $int -= random_int(1, self::THROW_DICE_SMALL);
            }
        }
        return $int;
    }

    public function throwBigDice(int $number, bool $addition = true): int
    {
        $int = 0;
        for($i = 0; $i<$number; $i++){
            if($addition){
                $int += random_int(1, self::THROW_DICE_BIG);
            }else{
                $int -= random_int(1, self::THROW_DICE_BIG);
            }
        }
        return $int;
    }


    /*
    GETTER and SETTERS
    */

   //Méthode get qui sera héritée
    public function getName(): ?string
    {
        return $this->name;
    }


   //Méthode set qui sera héritée (en fluent setter: retourne l'instance plutôt que de vide)
    public function setName(string $tName): self
    {
        //Protection
        $ProtectedName =trim(strip_tags($tName));
        //nombre de caractères
        $nbName = strlen($ProtectedName);
        if($nbName > 2 && $nbName <= 20){
            $this->name = $ProtectedName;
            return $this;
        }   
        throw new Exception("Nom non valide");     
    }

      //getters de $espece
      public function getEspece(): string
      {
          return $this->espece;
      }

     //setter de espece
     public function setEspece(string $espece){
        if(in_array($espece, self::ESPECE_CHOICE)){
            $this->espece = $espece;
        }else{
            throw new Exception("Tu fais quoi là!");
        }
    }     
}