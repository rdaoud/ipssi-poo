<?php

namespace Ipssi\Evaluation;

abstract class Element 
{

    protected $longueur;
    protected $largeur;
    protected $couleur;


    public function __construct(float $longueur, float $largeur, Couleur $couleur)
    {
        if ($longueur < 0 || $largeur < 0){
            echo "Erreur la longueur et la largeur ne peuvent pas être inférieure à 0";
            echo die;
        }

        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->couleur = $couleur;

    }

    public function getLongueur(): float
    {
        return $this->longueur;
    }

    public function getLargeur(): float
    {
        return $this->largeur;
    }

    public function getCouleur(): Couleur{
        return $this->couleur;
    }
    

}