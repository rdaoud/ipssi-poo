<?php

namespace Ipssi\Evaluation;

class Etoile extends Forme{

    public function construct(float $longueur, float $largeur, Couleur $couleur){
        parent::__construct($longueur, $largeur, $couleur);
    }

    public function toString(): String{
        $etoile .= "Type de l'élément : Etoile" . PHP_EOL;
        $etoile .= PHP_EOL;
        $etoile .= "Taille de l'élément" . PHP_EOL;
        $etoile .= 'Longueur : ' . $this->getLongueur() . PHP_EOL;
        $etoile .= 'Largeur : ' . $this->getLargeur() . PHP_EOL;
        $etoile .= PHP_EOL;
        $etoile .= "Couleur de l'élément" . PHP_EOL;
        $etoile .= $this->getCouleur()->toString() . PHP_EOL;
        return $etoile;  
    }


}

?>