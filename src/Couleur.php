<?php

namespace Ipssi\Evaluation;

class Couleur 
{
    private $rouge;

    private $vert;

    private $bleu;

    public function __construct(int $rouge, int $vert, int $bleu)
    {
        if ($rouge < 0 || $rouge > 255){
            echo "La couleur rouge n'est pas comprise entre 0 et 255";
            echo die;
        }
        else{
        $this->rouge = $rouge;
        }
        if ($vert < 0 || $vert > 255){
            echo "La couleur vert n'est pas comprise entre 0 et 255";
            echo die;
        }
        else{
            $this->vert = $vert;
        }
        if ($bleu < 0 || $bleu > 255){
            echo "La couleur bleu n'est pas comprise entre 0 et 255";
            echo die;
        }
        else{
        $this->bleu = $bleu;
        }
    }

    public function getRouge(): int
    {
        return $this->rouge;
    }
    public function getVert(): int
    {
        return $this->vert;
    }
    public function getBleu(): int
    {
        return $this->bleu;
    }

    public function toString(): String
    {
            $string = 'Rouge : ' . $this->getRouge() . PHP_EOL;
            $string .= 'Vert : ' . $this->getVert() . PHP_EOL;
            $string .= 'Bleu : ' . $this->getBleu() . PHP_EOL;
            return $string;
       
    }
}