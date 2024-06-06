<?php
// L'interface ne peut contenir que des méthodes publiques
interface PassivePersoInterface {
    //on perso peut être blessé
    public function isHurt();  
    //on perso peut mourir
    public function isDead();
    //un perso peut gagner des points de xp
    public function winXP();
}