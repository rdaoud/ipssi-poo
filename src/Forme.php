<?php

namespace Ipssi\Evaluation;

abstract class Forme extends Element{

    public function construct(float $longueur, float $largeur, Couleur $couleur){
        parent::__construct($longueur, $largeur, $couleur);
    }
   
}

?>