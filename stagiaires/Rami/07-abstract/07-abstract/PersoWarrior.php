<?php

class PersoWarrior extends PersoAbstract{

    //Proppriétés d'un guerriere
    protected $strength= 100;
    protected int $resistance = 100;
    protected int $agilty=80;

    
    public function __construct(string $theName, string $theEspece, int $bonusHealth)
    {
        parent::__construct($theName,$theEspece);
        
    }

    public function getHealthPoint(): ?int
    {
        return $this->healthPoint;
    }

    public function setHealthPoint(int $health){
        $this->healthPoint = $health;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    public function attack($enemy){

    }

    public function defence($enemy){

    }

    

    
}