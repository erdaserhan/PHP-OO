<?php
class TroisiemeClasse{
    /*
    Paramètres
    public = peut-être lu/modifiée en dehors (et dedans) de la classe
    protected = ne peut-être lu/modifiée en dehors de la classe, mais peut l'être dans la classe et ses enfants
    private = ne peut-être lu/modifiée en dehors de la classe, mais peut l'être dans la classe elle-même

    les bonnes pratique font que les paramètres sont généralment en private (si il est inutile d'hériter cette classe) ou protected (si on veut hériter, ou util d'hériter)
    */
    public $param1 = "un";
    private $param2 = "deux";
    protected $param3 = "trois";

    //depuis 8.1, on peut avoir un pararmètre publique avec lecture seule, en  rajoutant readonly
  //  public readonly $param4 = "quatre";

}