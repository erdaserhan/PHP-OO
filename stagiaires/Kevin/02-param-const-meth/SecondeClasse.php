<?php
class SecondeClasse{
    # Paramètres : Ce sont les variables de notre classe.
    # Nous verrons la visibilité plus loin.
    # Nous les mettons en public par défaut.

    public $param1;
    public string $param2 = "coucou";
    # On devrait typer les paramètres
    public int $param3 = 3;

    # Constantes : Elles doivent être initialisées avec leur valeur.
    # Elles doivent être écrites en UPPER_CASE.
    # La visibilité est par défaut public, même si on peut dorénavant changer celle-ci depuis la 7.1.

    const CONST_1 = "blabla";
    # Possibilité de rendre une constante avec une autre visibilité.
    protected const CONST_2 = ['1', '2', '3'];

    # Méthodes : Ce sont des fonctions internes à l'instance ou la classe.

    public function getParam2(): string{
        # Renvoie le paramètre 2 ( pas de $ ), le $this représente l'instance (objet).
        return $this->param2;
    }
}