<?php

namespace Ipssi\Evaluation;

class Image extends Element 
{

    public function __construct(float $longueur, float $largeur, Couleur $couleur){
        parent::__construct($longueur, $largeur, $couleur);
    }

    public function toString(): String{
        $image .= "Type de l'élément : Image" . PHP_EOL;
        $image .= PHP_EOL;
        $image .= "Taille de l'élément" . PHP_EOL;
        $image .= 'Longueur : ' . $this->getLongueur() . PHP_EOL;
        $image .= 'Largeur : ' . $this->getLargeur() . PHP_EOL;
        $image .= PHP_EOL;
        $image .= "Couleur de l'élément" . PHP_EOL;
        $image .= $this->getCouleur()->toString() . PHP_EOL;
        return $image;  
    }

}