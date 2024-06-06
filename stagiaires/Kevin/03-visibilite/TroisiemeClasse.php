<?php
class TroisiemeClasse{
    # Paramètres
    # public = peut être lue/modifiée en dehors de la classe (et dedans, ainsi que dans les héritiers).
    # protected = ne peut être lue/modifiée en dehors de la classe, mais peut l'être dans la classe et ses héritiers.
    # private = ne peut être lue/modifiée en dehors de la classe, mais peut l'être dans la classe elle-même.

    # Les bonnes pratiques font que les paramètres sont généralement en private ou protected.
    # private si il est inutile d'hériter cette classe
    # protected si il est utile d'hériter cette classe

    public $param1 = 'Un'; # Pas de protection depuis l'extérieur
    private string $param2 = 'Deux';
    protected string $param3 = 'Trois';

    # À partir de PHP 8.1 on peut utiliser le readonly :
    # Il permet de pouvoir lire un paramètre public, sans pouvoir le modifier
    # Il doit être déclaré avec son type, et ne peut avoir de valeur par défaut.
    public readonly int $param4;

    # Constantes

    const CONST_1 = 'Yes';

    # Méthodes

    # Setters
    # Les setters permettent de modifier un paramètre private ou protected.
    # Les public aussi peuvent être modifié via des setters.
    # Dans le cas des public cela a de sens uniquement si ils sont en readonly

    public function setParam2(string $param2): void{
        # On retire les espaces avant et après de $param2
        # On sécurise l'input param2 afin de ne pas avoir d'injection XSS
        # Attention : strip_tags doit bannir toutes les balises sans exceptions
        $param2 = strip_tags(trim($param2));

        # On veut que $param2 ai au minimum 2 caractères
        if(strlen($param2) >= 2)
            $this->param2 = $param2;
        else throw new InvalidArgumentException("La valeur de param2 doit faire minimum 2 de longueurs");
    }

    # Peut être crée dans l'héritier car $param3 est en protected
    public function setParam3(string $param3): void{
        # On retire les espaces avant et après de $param3
        # On sécurise l'input param3 afin de ne pas avoir d'injection XSS
        # Attention : strip_tags doit bannir toutes les balises sans exceptions
        $param3 = strip_tags(trim($param3));

        # On veut que $param3 ai au minimum 2 caractères
        if(strlen($param3) >= 2)
            $this->param3 = $param3;
        else throw new InvalidArgumentException("La valeur de param3 doit faire minimum 2 de longueurs");
    }

    public function setParam4(int $param4): void{
        $this->param4 = $param4;
    }

    # Getters ( Accessors )
    # Ce sont des méthodes publiques qui vont permettre de récupérer la valeur d'un paramètre privé ou protégé

    public function getParam2(): string{
        # On renvoie le paramètre private
        # Attention : Le getter doit être crée dans le fichier où se trouve le paramètre private
        return $this->param2;
    }

    public function getParam3(): string{
        # On renvoie le paramètre protected
        # Attention : Le getter pourrait être crée dans un héritier
        # NB : L'enfant peut accèder à $param3
        return $this->param3;
    }

    # Fonction qui permet d'initialiser le $param4
    public function initParam4(): void{
        $this->param4 = 25;
    }
}