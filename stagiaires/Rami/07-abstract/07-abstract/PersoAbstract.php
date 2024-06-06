<?php

abstract class PersoAbstract{
    // propriétés héritables
    protected ?string $name;
    protected ?int $healthPoint;
    protected int $experience=0;
    protected string $espece;

    // constantes
    public const ESPECE_CHOICE = [
        "Humain",
        "Saiyan",
        "Elf",
        "Nain",
        "Cyborg",
    ];

    protected const TRHROW_DICE_SMALL = 6; 
    protected const TRHROW_DICE_BIG = 20; 
    
    // Méthodes

    // méthode __construct qui sera héritée
    public function __construct(string $theName, string $theEspece)
    {
        // utilisation du setter pour le nom
        $this->setName($theName);
        $this->setEspece($theEspece);
    }

    // méthode get qui sera héritée
    public function getName(): ?string
    {
        return $this->name;
    }

    // méthode set qui sera héritée (en fluent setters: retourne l'instance plutôt que du vide)
    public function setName(string $tName): self
    {
        // protection
        $ProtectedName = trim(strip_tags($tName));
        // nombre de caractères
        $nbName = strlen($ProtectedName);
        // si le nom est plus grand que 2 caractères et plus petit ou égal à 20 caractères
        if($nbName > 2 && $nbName <= 20){
            
            // on remplit le propriété avec la variable VERIFIEE
            $this->name = $ProtectedName;
            // on renvoie l'instance (fluent setting)
            return $this;
        }
        // si le nom n'est pas valide (else implicite via le return)
        throw new Exception("Nom non valide");
    }


    // getter de $espece (string)
    public function getEspece():string
    {
        return $this->espece;
    }

    // Setter de $espece
    public function setEspece(string $espece){
        if(in_array($espece, self::ESPECE_CHOICE)){
            $this->espece = $espece;
        }else{
            throw new Exception("Tu fais quoi là!",334);
        }
    }

    // un méthode abstraite ne peut être privée
    // abstract private function lulu();

    // méthodes abstraites, elle sont déclarées dans la classe abtraite, pour obliger 
    // les héritiers à redéclarer ces méthodes en public ou protected
    // On les applique ici à des getters et setters, c'est plutôt rare
    abstract public function setHealthPoint(int $health);
    abstract public function getHealthPoint(): ?int;

    abstract public function setExperience(int $exp);
    abstract public function getExperience(): int;

    // Plus courant, des méthodes qui seront obligatoires pour tous les persos
    abstract public function attack($enemy);
    abstract public function defence($enemy);

}