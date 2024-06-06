<?php
// L'interface ne peut contenir que des méthodes publiques
interface ActionPersoInterface {

    public function attack($enemy): string;
    public function defence(): array;
   
}