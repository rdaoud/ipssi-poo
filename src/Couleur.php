<?php

namespace Ipssi\Evaluation;

class Couleur{

    private $rouge;
    private $vert;
    private $bleu;

    public function __construct(int $rouge, int $vert, int $bleu){
        if (($rouge > 255 || $rouge < 0) || ($vert > 255 || $vert < 0) || ($bleu > 255 || $bleu < 0)){
            echo "Erreur il faut entrer une valeur entre 0 et 255 !";
            echo PHP_EOL;
        }
        else {
            $this->rouge = $rouge;
            $this->vert = $vert;
            $this->bleu = $bleu;
        }
        
    }
    
}

?>