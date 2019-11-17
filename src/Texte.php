<?php

namespace Ipssi\Evaluation;

class Texte extends Element
{
    public function construct(float $longueur, float $largeur, Couleur $couleur){
        parent::__construct($longueur, $largeur, $couleur);
    }
   

    public function toString(): String
    {
            $texte .= "Type de l'élément : Texte" . PHP_EOL;
            $texte .= PHP_EOL;
            $texte .= "Taille de l'élément" . PHP_EOL;
            $texte .= 'Longueur : ' . $this->getLongueur() . PHP_EOL;
            $texte .= 'Largeur : ' . $this->getLargeur() . PHP_EOL;
            $texte .= PHP_EOL;
            $texte .= "Couleur de l'élément" . PHP_EOL;
            $texte .= $this->getCouleur()->toString() . PHP_EOL;
            return $texte;
       
    }
}