<?php

namespace Ipssi\Evaluation;

class Image extends Element{

    public function construct(float $x, float $y, Couleur $couleur){
        parent::__construct($x,$y,$couleur);
    }

    public function getAbcisse(): float{
        return $this->$x;
    }

    public function getOrdonne(): float{
        return $this->$y;
    }

    public function getCouleur(): Couleur{
        return $this->$couleur;
    }
}

?>