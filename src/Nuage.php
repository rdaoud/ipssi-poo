<?php

namespace Ipssi\Evaluation;

class Nuage extends Forme{

    public function construct(float $longueur, float $largeur, Couleur $couleur){
        parent::__construct($longueur, $largeur, $couleur);
    }

    public function toString(): String{
        $nuage .= "Type de l'élément : Nuage" . PHP_EOL;
        $nuage .= PHP_EOL;
        $nuage .= "Taille de l'élément" . PHP_EOL;
        $nuage .= 'Longueur : ' . $this->getLongueur() . PHP_EOL;
        $nuage .= 'Largeur : ' . $this->getLargeur() . PHP_EOL;
        $nuage .= PHP_EOL;
        $nuage .= "Couleur de l'élément" . PHP_EOL;
        $nuage .= $this->getCouleur()->toString() . PHP_EOL;
        return $nuage;  
    }


}

?>