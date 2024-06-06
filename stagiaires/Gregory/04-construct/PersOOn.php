<?php

class PersOOn {
  private string $espece;
  private string $nom;
  protected ?int $xp;
  protected null|bool|int $hp;

  public const ESPECES = [
    "Humain",
    "Elfe",
    "Nain",
    "Orc",
    "Hobbit",
    "Gobelin",
  ];

  public function __construct(string $nom, string $espece, int $xp=0, int $hp=100) {
    $this->nom = $nom;
    $this->espece = $espece;
    $this->xp = $xp;
    $this->hp = $hp;
  }
}
