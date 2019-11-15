<?php

namespace Ipssi\Evaluation;

class Adherent{

    private $livre;
    private $jours;

    public function __construct(string $livre, int $jours){
        $this->livre = $livre;

        if ($jours > 15){
            echo "Vous ne pouvez pas dépasser 15 jours.";
        }
        else{
            $this->jours = $jours;
        }
    }

    public function demanderLivreDans(Bibliotheque $bibli){
        $bibli->preterSiPossible($this->livre);
    }    
}

?>