<?php

namespace Ipssi\Evaluation;

class Livre{

    private $nom;
    private $exemplaire;
    

    public function __construct(string $nom, int $exemplaire ){
        $this->nom = $nom;
        $this->exemplaire = $exemplaire;
    }

    public function getNom(): string{
        return $this->nom;
    }

    public function getExemplaire(): string{
        return $this->exemplaire;
    }

    
}

?>