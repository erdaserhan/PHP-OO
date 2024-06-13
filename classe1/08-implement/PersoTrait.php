<?php

trait PersoTrait{
    public function metEnMajuscule(?string $txt) : ?string
    {
        $text = strtoupper($txt);
        return $text;
    }
}